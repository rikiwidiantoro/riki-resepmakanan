<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function author() {
        return $this->belongsTo(User::class, 'user_id'); // author aliasnya user_id di User
    }
}
