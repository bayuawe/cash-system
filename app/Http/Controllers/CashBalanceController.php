<?php

namespace App\Http\Controllers;

use App\Models\CashBalance;
use App\Models\Student;
use Illuminate\Http\Request;

class CashBalanceController extends Controller
{
    // Menampilkan semua data pembayaran kas kelas
    public function index()
    {
        // Mengambil semua data cash balance dengan relasi student
        $cashBalances = CashBalance::with('student')->get();

        // Mengambil total pemasukan, pengeluaran, dan saldo
        $totals = CashBalance::selectRaw('SUM(income) as total_income, SUM(expense) as total_expense, SUM(income - expense) as total_balance')
            ->first();

        // Mengirim data cashBalances dan totals ke view
        return view('cash-balances.index', compact('cashBalances', 'totals'));
    }

    // Menampilkan form untuk menambah data pembayaran kas
    public function create()
    {
        $students = Student::all();
        return view('cash-balances.create', compact('students'));
    }

    // Menyimpan data pembayaran kas kelas
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'income' => 'required|integer',
            'expense' => 'nullable|integer',
            'description' => 'required|string|max:255',
        ]);

        // Simpan data
        CashBalance::create([
            'student_id' => $request->student_id,
            'income' => $request->income,
            'expense' => $request->expense ?? 0,
            'description' => $request->description,
        ]);

        return redirect()->route('cash-balances.index')->with('success', 'Pembayaran Kas berhasil ditambahkan');
    }

    // Menampilkan form untuk edit data pembayaran kas
    public function edit(CashBalance $cashBalance)
    {
        $students = Student::all();
        return view('cash-balances.edit', compact('cashBalance', 'students'));
    }

    // Memperbarui data pembayaran kas
    public function update(Request $request, CashBalance $cashBalance)
    {
        // Validasi data
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'income' => 'required|integer',
            'expense' => 'nullable|integer',
            'description' => 'required|string|max:255',
        ]);

        // Update data
        $cashBalance->update([
            'student_id' => $request->student_id,
            'income' => $request->income,
            'expense' => $request->expense ?? 0,
            'description' => $request->description,
        ]);

        return redirect()->route('cash-balances.index')->with('success', 'Pembayaran Kas berhasil diperbarui');
    }

    // Menghapus data pembayaran kas
    public function destroy(CashBalance $cashBalance)
    {
        $cashBalance->delete();
        return redirect()->route('cash-balances.index')->with('success', 'Pembayaran Kas berhasil dihapus');
    }
}
