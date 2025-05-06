<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $guarded = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
