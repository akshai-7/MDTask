<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<style>
    body{
        font-family: 'Times New Roman', Times, serif;
        height: 100vh;
        width: 100vw;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .section{
        overflow: hidden;
        /* background-color: black; */
        height:1000%;
        width:100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .sidebar{
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 60px;
        left: 0;
        /* background-color:gray; */
        border-right: 1px solid black;
        overflow-x: hidden;
        padding-top: 20px;
    }
    .navbar {
        width: 100%;
        height: 60px;
        /* background-color:#e91e63; */
        border-bottom: 1px solid black;
        overflow: hidden;
        margin-top: -8px;
        margin-left: -8px;
    }
    .box{
        padding: 0px 15px;
        border-bottom: 1px solid #ccc;
        width: 150px;
        height: 40px;
    }
    .box1{
        padding: 15px 15px;
        width: 150px;
        height: 40px;
        margin-top: 0px;
        text-decoration: none;
    }
    .table{
        margin-left: 100px;
    }

</style>
<body>
    <header>
        <div class="navbar">

          </div>
    </header>


    <section class="section">
        <div class="sidebar" id="show">
            <div class="box">
                <h3> M&D Fundations </h3>
            </div>
            <div class="box1">
               <a href="">Rental</a>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center table">
            <table class="table table-striped table-bordered col-md-5 mt-3" style="width:1200px">
                <thead class="header">
                     <th style="text-align:center;">S.No</th>
                    <th style="text-align:center;">Date Of Incident</th>
                    <th style="text-align:center;">Location</th>
                    <th style="text-align:center;">Witnessed By</th>
                    <th style="text-align:center;">Phone No Of Witness</th>
                    <th style="text-align:center;">Date</th>
                    <th style="text-align:center;">Number Plate</th>
                    <th style="text-align:center;">Milage</th>
                    <th style="text-align:center;">Report</th>
                    <th style="text-align:center;">Action</th>

                </thead>
                <tbody>
                    @foreach($report as $report)
                    {{-- @dd($report); --}}
                        <tr>
                            <td style="text-align:center;">{{$loop->iteration}}</td>
                            <td style="text-align:center;">{{$report->date_of_incident}}</td>
                            <td style="text-align:center;">{{$report->location}}</td>
                            <td style="text-align:center;">{{$report->witnessed_by}}</td>
                            <td style="text-align:center;">{{$report->phone_number_of_witness}}</td>
                            <td style="text-align:center;">{{$report->date}}</td>
                            <td style="text-align:center;">{{$report->number_plate}}</td>
                            <td style="text-align:center;">{{$report->mileage}}</td>
                            <td style="text-align:center;">{{$report->report}}</td>
                            <td style="text-align:center;">
                            <a href="/store/{{$report->user_id}}" data-toggle="tooltip" title="View"><i class="fa-solid fa-eye btn btn-primary" ></i></a>
                            {{-- @dd($report->user_id); --}}
                            <a href="" ><i class="fa-solid fa-trash btn btn-danger"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </section>
</body>
</html>
