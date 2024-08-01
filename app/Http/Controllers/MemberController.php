<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->latest()->paginate(10);
        return view('admin.members.index', compact('users'));
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|string',
            'password' => 'required|string',
        ]);

        try {
            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('admin.members.index')->with('success', 'Member created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create member. Please try again.']);
        }
    }

    public function show(User $user)
    {
        return view('admin.members.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.members.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        try {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'role' => $request->role,
                'password' => $request->password ? Hash::make($request->password) : $user->password,
            ]);

            return redirect()->route('admin.members.index')->with('success', 'Member updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update member. Please try again.']);
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->back()->with('success', 'Member deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to delete member. Please try again.']);
        }
    }
}
