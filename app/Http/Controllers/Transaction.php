<?php

namespace App\Http\Controllers;

use App\Models\Member as MemberModel;
use App\Models\Staff as StaffModel;
use App\Models\Tool as ToolModel;
use App\Models\Transaction as TransactionModel;
use Illuminate\Http\Request;

class Transaction extends Controller
{
    public function index()
    {
        $transactions = TransactionModel::all();

        return view('pages.transactions.index', compact('transactions'));
    }

    public function create()
    {
        $tools = ToolModel::all();
        $members = MemberModel::all();
        $staff = StaffModel::all();

        return view('pages.transactions.create', compact('tools', 'members', 'staff'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tool' => 'required',
            'member' => 'required',
            'staff' => 'required',
            'borrow_date' => 'required',
            'return_date' => 'required',
            'status' => 'required'
        ]);

        $transaction = TransactionModel::create([
            'tool' => $request->tool,
            'member' => $request->member,
            'staff' => $request->staff,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
            'status' => $request->status
        ]);

        return redirect()->route('transaction.index');
    }

    public function show($id)
    {
        $transaction = TransactionModel::findOrFail($id);

        return view('pages.transactions.show', compact('transaction'));
    }

    public function edit($id)
    {
        $tools = ToolModel::all();
        $members = MemberModel::all();
        $staff = StaffModel::all();
        $transaction = TransactionModel::findOrFail($id);

        return view('pages.transactions.edit', compact('transaction', 'tools', 'members', 'staff'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tool' => 'required',
            'member' => 'required',
            'staff' => 'required',
            'borrow_date' => 'required',
            'return_date' => 'required',
            'status' => 'required'
        ]);

        $transaction = TransactionModel::findOrFail($id);

        $transaction->update([
            'tool' => $request->tool,
            'member' => $request->member,
            'staff' => $request->staff,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
            'status' => $request->status
        ]);

        return redirect()->route('transaction.index');
    }

    public function destroy($id)
    {
        $transaction = TransactionModel::findOrFail($id);

        $transaction->delete();

        return redirect()->route('transaction.index');
    }
}
