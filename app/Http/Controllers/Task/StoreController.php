<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class StoreController extends Controller
{
    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreRequest $request)
    {
        auth()->user()->tasks()->create($request->validated());
        return redirect()->route('task.index');
    }
}
