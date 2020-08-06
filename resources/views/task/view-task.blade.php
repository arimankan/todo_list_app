<!DOCTYPE html>
<html>
    <head>
        <title>View Task</title>
    </head>
    <body>
    <table>
    <td><a href="{{url('/')}}">Back</a></td>
    <td></td>
        <td><a href="{{url('/edit-task/'. $task->id)}}">Edit Task</a></td>
        <td></td>
        <td><a href="{{url('/delete-task/'. $task->id)}}">Delete Task</a></td>
        <td></td>
    </table>
    <h1>Title: {{$task->title}}</h1>
    <h1>Description: {{$task->description}}</h1>
    <h1>Status: {{$task->status}}</h1>
    </body>
</html>