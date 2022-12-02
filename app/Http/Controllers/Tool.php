<?php

namespace App\Http\Controllers;

use App\Models\Tool as ToolModel;
use Illuminate\Http\Request;

class Tool extends Controller
{
    public function index()
    {
        $tools = ToolModel::all();

        return view('pages.tools.index', compact('tools'));
    }

    public function create()
    {
        return view('pages.tools.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'register_year' => 'required',
            'rack' => 'required',
            'stock' => 'required'
        ]);

        $tool = ToolModel::create([
            'name' => $request->name,
            'register_year' => $request->register_year,
            'rack' => $request->rack,
            'stock' => $request->stock
        ]);

        return redirect()->route('tool.index');
    }

    public function show($id)
    {
        $tool = ToolModel::findOrFail($id);

        return view('pages.tools.show', compact('tool'));
    }

    public function edit($id)
    {
        $tool = ToolModel::findOrFail($id);

        return view('pages.tools.edit', compact('tool'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'register_year' => 'required',
            'rack' => 'required',
            'stock' => 'required'
        ]);

        $tool = ToolModel::findOrFail($id);

        $tool->update([
            'name' => $request->name,
            'register_year' => $request->register_year,
            'rack' => $request->rack,
            'stock' => $request->stock
        ]);

        return redirect()->route('tool.index');
    }

    public function destroy($id)
    {
        $tool = ToolModel::findOrFail($id);

        $tool->delete();

        return redirect()->route('tool.index');
    }
}
