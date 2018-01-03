<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index-Tasks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   @foreach ($tasks as $task)
       <li>
         <a href="tasks/{{$task->id}}">
         {{ $task->body }} 
        </li>
    </a>
   @endforeach
</body>
</html>