<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 style="color: {{$color}}">Person</h1>
        <p>This is the person view.</p>
        <hr>
        <h3> Name: {{$name}} <br></h3>
        <h3> Age: {{$age}} <br></h3>
        <h3> Address: {{$address}} <br> </h3>
    
        @if ($age < 18)
            <h3 style="color: red">Cannot vote!</h3>
        @else
            <h3 style="color: green">Can vote!</h3>
        @endif
        <hr>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($siblings as $sibling)
                <tr>
                <td>{{$sibling['name']}}</td>
                <td>{{$sibling['age']}}</td>
                @if ($sibling['age'] < 18)
                <td class="text-danger">Cannot vote!</td>
                @else
                <td class="text-success">Can vote!</td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

</body>
</html>