<!DOCTYPE html>
<html>
    <head>
        <title>List of Tasks</title>
    </head>
    <body>
    <div>
    <a href="{{url('/create-task')}}">Create new Task</a>
    </div>
    <h1>List of Tasks</h1>
        <div>
            <table>
            <th>Title</th>
            <th>Description</th>
            <th></th>
            <th></th>
            <th></th>
            @foreach($tasks as $task)
            <tr>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->status}}</td>
                <td>
                @if($task->status == 'ongoing')
                    <a href="{{url('/complete-task/'. $task->id)}}">Complete Task</a>
                @endif
                </td>
                <td>
                    <a href="{{url('/edit-task/'. $task->id)}}">Edit Task</a>
                </td>
                <td>
                    <a href="{{url('/view-task/'. $task->id)}}">View Task</a>
                </td>
                <td>
                    <a href="{{url('/delete-task/'. $task->id)}}">Delete Task</a>
                </td>
            </tr>
            @endforeach
            </table>
        </div>
    </body>
</html>