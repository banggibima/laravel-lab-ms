<?php

namespace App\Http\Controllers;

use App\Models\Staff as StaffModel;
use Illuminate\Http\Request;

class Staff extends Controller
{
    public function index()
    {
        $staff = StaffModel::all();

        return view('pages.staff.index', compact('staff'));
    }

    public function create()
    {
        return view('pages.staff.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'telephone' => 'required|max:255',
            'address' => 'required|max:255'
        ]);

        $staff = StaffModel::create([
            'name' => $request->name,
            'position' => $request->position,
            'telephone' => $request->telephone,
            'address' => $request->address
        ]);

        return redirect()->route('staff.index');
    }

    public function show($id)
    {
        $staff = StaffModel::findOrFail($id);

        return view('pages.staff.show', compact('staff'));
    }

    public function edit($id)
    {
        $staff = StaffModel::findOrFail($id);

        return view('pages.staff.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'telephone' => 'required|max:255',
            'address' => 'required|max:255'
        ]);

        $staff = StaffModel::findOrFail($id);

        $staff->update([
            'name' => $request->name,
            'position' => $request->position,
            'telephone' => $request->telephone,
            'address' => $request->address
        ]);

        return redirect()->route('staff.index');
    }

    public function destroy($id)
    {
        $staff = StaffModel::findOrFail($id);

        $staff->delete();

        return redirect()->route('staff.index');
    }
}
