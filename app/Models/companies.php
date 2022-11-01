<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $guarded = [];

    public function articles()
    {
        return $this->hasMany(article::class);
    }
}


