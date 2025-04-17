<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashBalance extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'student_id',
        'income',
        'expense',
        'description',
    ];

    // Relasi ke model Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
