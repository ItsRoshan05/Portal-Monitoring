<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpiderRaw;
class SpiderRawAdminController extends Controller
{
    public function index()
    {
        $spiders = SpiderRaw::all();
        return view('admin.spider_raw.index', compact('spiders'));
    }

    public function create()
    {
        return view('admin.spider_raw.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|url',
            'isi' => 'required',
            'penulis' => 'required|string|max:255',
            'editor' => 'required|string|max:255',
            'user_target' => 'required|string|max:255',
            'proses' => 'required|string|max:255',
            'sentiment' => 'required|string|max:255',
        ]);

        SpiderRaw::create($request->all());

        return redirect()->route('spider_raw.index')->with('success', 'Spider raw created successfully.');
    }

    public function show(SpiderRaw $spiderRaw)
    {
        return view('admin.spider_raw.show', compact('spiderRaw'));
    }

    public function edit(SpiderRaw $spiderRaw)
    {
        return view('admin.spider_raw.edit', compact('spiderRaw'));
    }

    public function update(Request $request, SpiderRaw $spiderRaw)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|url',
            'isi' => 'required',
            'penulis' => 'required|string|max:255',
            'editor' => 'required|string|max:255',
            'user_target' => 'required|string|max:255',
            'proses' => 'required|string|max:255',
            'sentiment' => 'required|string|max:255',
        ]);

        $spiderRaw->update($request->all());

        return redirect()->route('spider_raw.index')->with('success', 'Spider raw updated successfully.');
    }

    public function destroy(SpiderRaw $spiderRaw)
    {
        $spiderRaw->delete();

        return redirect()->route('spider_raw.index')->with('success', 'Spider raw deleted successfully.');
    }
}
