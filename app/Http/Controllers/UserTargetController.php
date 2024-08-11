<?php

namespace App\Http\Controllers;

use App\Models\TargetUserSpider;
use Illuminate\Http\Request;

class UsertTargetController extends Controller
{
    public function index()
    {
        $targets = TargetUserSpider::all();
        return view('admin.target_users.index', compact('targets'));
    }

    public function create()
    {
        return view('admin.target_users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_target' => 'required|string|max:255',
        ]);

        TargetUserSpider::create($request->all());

        return redirect()->route('target_users.index')->with('success', 'User target created successfully.');
    }

    public function show(TargetUserSpider $targetUserSpider)
    {
        return view('admin.target_users.show', compact('targetUserSpider'));
    }

    public function edit(TargetUserSpider $targetUserSpider)
    {
        return view('admin.target_users.edit', compact('targetUserSpider'));
    }

    public function update(Request $request, TargetUserSpider $targetUserSpider)
    {
        $request->validate([
            'user_target' => 'required|string|max:255',
        ]);

        $targetUserSpider->update($request->all());

        return redirect()->route('target_users.index')->with('success', 'User target updated successfully.');
    }

    public function destroy(TargetUserSpider $targetUserSpider)
    {
        $targetUserSpider->delete();

        return redirect()->route('target_users.index')->with('success', 'User target deleted successfully.');
    }
}
