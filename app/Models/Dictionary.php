<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionary'; // Nama tabel sudah ada
    protected $fillable = ['word', 'arti', 'type'];
    public $timestamps = false;  // Jika tabel tidak memiliki kolom 'created_at' dan 'updated_at'
}
