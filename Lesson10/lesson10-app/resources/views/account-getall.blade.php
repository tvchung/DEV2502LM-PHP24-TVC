<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <h1>Account List</h1>
        <hr/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>FullName</th>
                </tr>
            </thead>
            <tbody>
              
                @foreach ($accounts as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->Username}}</td>
                        <td>{{$item->Password}}</td>
                        <td>{{$item->FullName}}</td>
                    </tr>
                @endforeach
           
            </tbody>
        </table>
    </section>
    
    
</body>
</html>