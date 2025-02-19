<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'file_name', 'file_url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
