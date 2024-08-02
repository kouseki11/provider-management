<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\UserBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WithdrawController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->get();
        $transactions = Transaction::where('type', 'withdraw')->paginate(10);
        return view('admin.transactions.withdraw', compact('users', 'transactions'));
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
                'nominal' => $request->nominal,
                'type' => 'withdraw',
                'status' => 'approved',
            ]);

            $user = User::find($request->user_id);

            if (!$user) {
                DB::rollBack();
                return redirect()->back()->withInput()->withErrors(['error' => 'User not found.']);
            }

            $userBalance = UserBalance::firstOrNew(['user_id' => $request->user_id]);
            $userBalance->game_username = $user->username;

            if($userBalance->balance < $request->nominal) {
                DB::rollBack();
                return redirect()->back()->withInput()->withErrors(['error' => 'Insufficient balance.']);
            }

            $userBalance->balance = ($userBalance->exists ? $userBalance->balance : 0) - $request->nominal;
            $userBalance->save();

            DB::commit();
            return redirect()->route('admin.transactions.withdraw')->with('success', 'Withdraw successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.members.index')->withInput()->withErrors(['error' => 'Failed to withdraw. Please try again.']);
        }
    }
}
