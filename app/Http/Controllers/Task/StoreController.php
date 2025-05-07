<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use Illuminate\Http\Request;
Use App\Models\Task;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        auth()->user()->tasks()->create($request->validated());
        return redirect()->route('task.index');
    }
}
