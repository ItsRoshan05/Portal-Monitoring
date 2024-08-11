<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TargetUser;

class TargetUserSpiderController extends Controller
{
    public function index()
    {
        $targets = TargetUser::all();
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

        TargetUser::create($request->all());

        return redirect()->route('target_users.index')->with('success', 'User target created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TargetUser $TargetUser)
    {  
    
        return view('admin.target_users.show', compact('TargetUser'));
    }

    public function edit(TargetUser $TargetUser)
    {
        return view('admin.target_users.edit', compact('TargetUser'));
    }

    public function update(Request $request, TargetUser $TargetUser)
    {
        $request->validate([
            'user_target' => 'required|string|max:255',
        ]);

        $TargetUser->update($request->all());

        return redirect()->route('target_users.index')->with('success', 'User target updated successfully.');
    }

    public function destroy(TargetUser $TargetUser)
    {
        $TargetUser->delete();

        return redirect()->route('target_users.index')->with('success', 'User target deleted successfully.');
    }
}
