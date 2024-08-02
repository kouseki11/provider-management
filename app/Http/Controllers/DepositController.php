<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\UserBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepositController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->get();
        $transactions = Transaction::where('type', 'deposit')->paginate(10);
        return view('admin.transactions.deposit', compact('users', 'transactions'));
    }

    public function store(Request $request)
    {
        $nominal = preg_replace('/[^\d]/', '', $request->input('nominal'));

        $request->merge(['nominal' => $nominal]);
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nominal' => 'required|numeric|min:50000',
        ]);

        try {
            DB::beginTransaction();

            Transaction::create([
                'user_id' => $request->user_id,
                'nominal' => $nominal,
                'type' => 'deposit',
                'status' => 'approved',
            ]);

            $user = User::find($request->user_id);

            if (!$user) {
                DB::rollBack();
                return redirect()->back()->withInput()->withErrors(['error' => 'User not found.']);
            }

            $userBalance = UserBalance::firstOrNew(['user_id' => $request->user_id]);
            $userBalance->game_username = $user->username;

            $userBalance->balance = ($userBalance->exists ? $userBalance->balance : 0) + $request->nominal;
            $userBalance->save();

            DB::commit();
            return redirect()->route('admin.transactions.deposit')->with('success', 'Deposit successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.members.index')->withInput()->withErrors(['error' => 'Failed to deposit. Please try again.']);
        }
    }

    public function update(Transaction $transaction, $status)
    {
        try {
            DB::beginTransaction();

            if ($status == 'approved') {
                $transaction->status = $status;
                $transaction->save();
                $userBalance = UserBalance::firstOrNew(['user_id' => $transaction->user_id]);
                $userBalance->game_username = $transaction->user->username;
                $userBalance->balance = ($userBalance->exists ? $userBalance->balance : 0) + $transaction->nominal;
                $userBalance->save();
            } else {
                $transaction->status = $status;
                $transaction->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Status' . $status . 'successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back('')->withInput()->withErrors(['error' => 'Failed to update status. Please try again.']);
        }
    }
}
