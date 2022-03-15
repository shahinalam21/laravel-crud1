<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table table-borderd">
        <thead>
          <tr>
            <th scope="col">Sl No</th>
            <th scope="col">name</th>
            <th scope="col">roll</th>
            <th scope="col">massage</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @php
              $i = 1;
          @endphp

            @foreach ($students as $student)
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->roll}}</td>
            <td>{{$student->massage}}</td>
            <td>
              <a class="btn btn-success" href="{{url('/student/create')}}">Insert</a>
              <a class="btn btn-success" href="{{url('/student/show/'.$student->id)}}">show</a>
              <a class="btn btn-success" href="{{url('/student/edit/'.$student->id)}}">eidt</a>
              <a class="btn btn-success" href="{{url('/student/destroy/'. $student->id)}}">delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>