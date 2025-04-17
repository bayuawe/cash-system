<?php

namespace App\Http\Controllers;

use App\Models\CashBalance;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totals = CashBalance::selectRaw('
        SUM(income) as total_income,
        SUM(expense) as total_expense,
        SUM(income - expense) as total_balance
    ')->first();

        $monthly = CashBalance::selectRaw('
        MONTH(created_at) as month,
        SUM(income) as income,
        SUM(expense) as expense
    ')
            ->groupByRaw('MONTH(created_at)')
            ->get()
            ->map(function ($item) {
                $item->month_name = \Carbon\Carbon::create()->month($item->month)->translatedFormat('F');
                return $item;
            });

        $totalStudents = Student::count();
        $totalMale = Student::whereHas('gender', function ($query) {
            $query->where('name', 'Laki-laki');
        })->count();

        $totalFemale = Student::whereHas('gender', function ($query) {
            $query->where('name', 'Perempuan');
        })->count();

        return view('dashboard', compact('totals', 'monthly', 'totalStudents', 'totalMale', 'totalFemale'));
    }
}
