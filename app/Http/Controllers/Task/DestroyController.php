<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Task $task)
    {
        $this->authorize('delete', $task);

        $task->delete();
        return redirect()->route('task.index');
    }
}
