<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'payroll_period_start',
        'payroll_period_end',
        'payment_date',
        'notes',
    ];

    public function details()
    {
        return $this->hasMany(PayrollDetail::class);
    }

    public function ranPayroll()
    {
        return $this->hasMany(RanPayrolls::class);
    }
}
