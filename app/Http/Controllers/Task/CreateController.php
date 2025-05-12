<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        Task::all();
        return view('tasks.create');
    }
}
