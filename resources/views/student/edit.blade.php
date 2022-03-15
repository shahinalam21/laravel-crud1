<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>edit Student</h2>
    
    <form action="/student/update/{{$student->id}}" method="post">

        @csrf

        <label for="">Name</label>
        <input type="text" name="name" placeholder="name" value="{{$student->name}}">

        <label for="">roll</label>
        <input type="text" name="roll" placeholder="roll" value="{{$student->roll}}">

        <label for="">massage</label>
        <input type="text" name="massage" placeholder="massage" value="{{$student->massage}}">

        <input type="submit" value="update">

    </form>
</body>
</html>