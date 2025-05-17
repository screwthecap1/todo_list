<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = 'name';
    protected $guarded = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
