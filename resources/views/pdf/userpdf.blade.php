<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>user.pdf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
    <style>

        table,th,td
        {
        border:1px solid black;
        padding: 10px;
        margin-left: 50px;
        border-spacing: 10px;
        }
        .check{
            margin-left: 50px;
        }


    </style>
<body>
     <h2> Report Summary</h2>
        <h5 class="text-secondary" class="check">Visual Damage</h5>
        <table style="width:80%" class="table table-bordered">
            <tr>
                <th class="col-md-5">View</th>
                <th style="text-align: ">Action</th>
            </tr>
            @foreach($visual as $visual)
                <tr style="tect-align:center;">
                    <td >{{$visual->view}}</td>
                    <td style="text-align:center; ">{{$visual->action}}</td>
                </tr>
            @endforeach
        </table>
        <h5 class="text-secondary"  class="check">Vehicle Check</h5>
        <table style="width:80%" class="vehicle">
            @foreach($vehicle as $vehicle)
                <tr>
                    <td>{{$vehicle->view}}</td>
                    <td style="text-align:center;">{{$vehicle->action}}</td>
                </tr>
            @endforeach
        </table>
        <h5 class="text-secondary" class="check">Cabin Checks</h5>
        <table  style="width:80%">
            @foreach($cabin as $cabin)
                <tr>
                    <td >{{$cabin->view}}</td>
                    <td style="text-align: center">{{$cabin->action}}</td>
                </tr>
                <tr>
                    <td >{{$cabin->view}}</td>
                    <td style="text-align:center; ">{{$cabin->action}}</td>
                </tr>
        @endforeach
        </table>
</body>
</html>
