<?php

namespace App\Http\Controllers;

use App\Models\Member as MemberModel;
use Illuminate\Http\Request;

class Member extends Controller
{
    public function index()
    {
        $members = MemberModel::all();

        return view('pages.members.index', compact('members'));
    }

    public function create()
    {
        return view('pages.members.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'telephone' => 'required|max:255',
            'address' => 'required|max:255'
        ]);

        $member = MemberModel::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'telephone' => $request->telephone,
            'address' => $request->address
        ]);

        return redirect()->route('member.index');
    }

    public function show($id)
    {
        $member = MemberModel::findOrFail($id);

        return view('pages.members.show', compact('member'));
    }

    public function edit($id)
    {
        $member = MemberModel::findOrFail($id);

        return view('pages.members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'telephone' => 'required|max:255',
            'address' => 'required|max:255'
        ]);

        $member = MemberModel::findOrFail($id);

        $member->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'telephone' => $request->telephone,
            'address' => $request->address
        ]);

        return redirect()->route('member.index');
    }

    public function destroy($id)
    {
        $member = MemberModel::findOrFail($id);

        $member->delete();

        return redirect()->route('member.index');
    }
}
