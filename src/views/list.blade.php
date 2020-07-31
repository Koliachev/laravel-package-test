@extends('wisdmlabs.todolist.app')
@section('content')
    @if(isset($task))
        <h3>Edit : </h3>

    @else
        <h3>Add New Task : </h3>

    @endif
    <div class="form-inline">
        <div class="form-group">

        </div>
        <div class="form-group">

        </div>
    </div>

    <hr>
    <h4>Tasks To Do : </h4>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>

                    <div class='btn-group'>
                        <a href="{!! route('task.edit', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
