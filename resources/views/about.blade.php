<<!DOCTYPE html>
<html>
<head>
    <title>Call my name Page !!</title>
</head>
<body>
    @foreach($tasks as $task)
<li>{{$task->body}}</li>
    @endforeach
</body>
</html>