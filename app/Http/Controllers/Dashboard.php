<?php

namespace App\Http\Controllers;

use App\Models\Member as MemberModel;
use App\Models\Staff as StaffModel;
use App\Models\Tool as ToolModel;
use App\Models\Transaction as TransactionModel;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $members = MemberModel::all();
        $staff = StaffModel::all();
        $tools = ToolModel::all();
        $transactions = TransactionModel::all();

        $stats = [
            [
                'title' => 'Anggota',
                'stat' => $members->count(),
                'href' => route('member.index'),
            ],
            [
                'title' => 'Staff',
                'stat' => $staff->count(),
                'href' => route('staff.index'),
            ],
            [
                'title' => 'Alat',
                'stat' => $tools->count(),
                'href' => route('tool.index'),
            ],
            [
                'title' => 'Transaksi',
                'stat' => $transactions->count(),
                'href' => route('transaction.index'),
            ]
        ];

        return view('pages.dashboard.index', compact('members', 'staff', 'tools', 'transactions', 'stats'));
    }
}
