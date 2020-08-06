<!DOCTYPE html>
<html>
    <head>
        <title>Create Task</title>
    </head>
    <body>
    <h1>Create Tasks</h1>
        <form action="/save-task" method="POST">
        @csrf
        <input name="status" type="hidden" value="ongoing">
            <input type="text" name="title">
            <input type="text" name="description">
            <button type="submit">Create Task</button>
        </form>
    </body>
</html>