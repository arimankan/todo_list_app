<!DOCTYPE html>
<html>
    <head>
        <title>Edit Task</title>
    </head>
    <body>
    <h1>Edit Tasks</h1>
        <form action="/update-task" method="POST">
        @csrf
        <input name="id" type="hidden" value="{{$task->id}}">
        <input name="status" type="hidden" value="{{$task->status}}">
        
            <input type="text" name="title" value="{{$task->title}}">
            <input type="text" name="description" value="{{$task->description}}">
            <button type="submit">Edit Task</button>
        </form>
    </body>
</html>