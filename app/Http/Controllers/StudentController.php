<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Gender;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Menampilkan halaman daftar student
    public function index()
    {
        $students = Student::with('gender')->get();
        return view('students.index', compact('students'));
    }

    // Menampilkan halaman form untuk menambah student
    public function create()
    {
        $genders = Gender::all();
        return view('students.create', compact('genders'));
    }

    // Menyimpan data student baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|integer',
            'name' => 'required|string|max:255',
            'gender_id' => 'required|exists:genders,id',
            'phone' => 'required|integer',
            'address' => 'required|string|max:255',
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    // Menampilkan halaman form untuk edit student
    public function edit(Student $student)
    {
        $genders = Gender::all();
        return view('students.edit', compact('student', 'genders'));
    }

    // Update data student
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nim' => 'required|numeric',
            'name' => 'required|string',
            'gender_id' => 'required|exists:genders,id',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        $student->update([
            'nim' => $request->nim,
            'name' => $request->name,
            'gender_id' => $request->gender_id,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('students.index')->with('success', 'Data berhasil diperbarui.');
    }


    // Menghapus data student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
