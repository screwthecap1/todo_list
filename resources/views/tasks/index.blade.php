@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <a href="{{ route('task.create') }}" class="btn btn-block btn-primary w-100">Create</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Name</th>
                            <th colspan="3" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $task->name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- ./col -->
    </div>
@endsection
