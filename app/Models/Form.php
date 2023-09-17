<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'user_id',
        'loan_1',
        'term_expenses_1',
        'term_expenses_amout_1',
        'cost_living_1',
        'loan_2',
        'term_expenses_2',
        'term_expenses_amout_2',
        'cost_living_2',
        'created_at',
        'updated_at',
    ];
}
