<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'user')->get()->count();
        $deposit = Transaction::where('type', 'deposit')->get()->sum('nominal');
        $withdraw = Transaction::where('type', 'withdraw')->get()->sum('nominal');
        return view('admin.dashboard', compact('user', 'deposit', 'withdraw'));
    }
}
