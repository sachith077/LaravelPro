<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="text-center">
       <h1> Daily Tasks </h1>
        <div class="row">
            <div class="col-md-12">

                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
                
                <form method="post" action='/saveTask'>
                {{csrf_field()}}
                <input type="text" class="form-control" name="task" placeholder="Enter you task here">
                    </br>
                    <input type="submit" class="btn btn-primary" value="SAVE">
                    <input type="button" class="btn btn-warning" value="CLEAR">
                </form>
                    <table class="table table-dark">
                
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <tr>
                        <td>1</td>
                        <td>I have to lean laravel today</td>
                        <td>Not yet</td>
                        </tr>
                </div>

        </div>
</div>
</div>
</body>
</html>