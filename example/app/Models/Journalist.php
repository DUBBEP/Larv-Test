<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    /** @use HasFactory<\Database\Factories\JournalistFactory> */
    use HasFactory;

    public function Article()
    {
        return $this->hasmany(Article::class);
    }
}
