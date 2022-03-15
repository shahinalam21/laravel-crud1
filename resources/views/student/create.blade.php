<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Add Student</h2>
    
    <form action="{{url('/student/store')}}" method="post">

        @csrf

        <label for="">Name</label>
        <input type="text" name="name" placeholder="name">

        <label for="">roll</label>
        <input type="text" name="roll" placeholder="roll">

        <label for="">massage</label>
        <input type="text" name="massage" placeholder="massage">

        <input type="submit" value="submit">

    </form>

</body>
</html>