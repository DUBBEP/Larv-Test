<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Employer extends Model
{
    use HasFactory;

    public function Job()
    {
        return $this->hasmany(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
