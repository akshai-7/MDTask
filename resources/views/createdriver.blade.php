<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<title>M&D Foundations</title>
</head>
<style>
            a {
                text-decoration: none;
            }

            li {
                list-style: none;
            }

            :root {
                --light: #F9F9F9;
                --blue: #3C91E6;
                --light-blue: #CFE8FF;
                --grey: #eee;
                --dark-grey: #AAAAAA;
                --dark: #342E37;s
                --red: #DB504A;
                --yellow: #FFCE26;
                --light-yellow: #FFF2C6;
                --orange: #FD7238;
                --light-orange: #FFE0D3;
            }

            html {
                overflow-x: hidden;
            }

            body.dark {
                --light: #0C0C1E;
                --grey: #060714;
                --dark: #FBFBFB;
            }

            body {
                background: var(--grey);
                overflow-x: hidden;
                font-family: 'Times New Roman', Times, serif;
            }
            #sidebar {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                height: 100%;
                background: var(--light);
                z-index: 2000;
                font-family: var(--lato);
                transition: .3s ease;
                overflow-x: hidden;
                scrollbar-width: none;
            }
            #sidebar .brand {
                height: 40px;
                position: fixed;
                top: 20px;
                margin-left: 40px;
            }
            #sidebar .side-menu li.active::before {
                content: '';
                position: absolute;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                top: -40px;
                right: 0;
                z-index: -1;
            }
            #content {
                position: relative;
                width: calc(100% - 280px);
                left: 280px;
                transition:0.3s ease;
            }
            #content main {
                width: 100%;
                padding: 36px 24px;
                font-family: var(--poppins);
                max-height: calc(100vh - 56px);
                overflow-y: auto;
            }
            #content main .table-data {
                margin-top: 30px;
            }
            #content main .table-data > div {
                border-radius: 5px;
                background: var(--light);
                padding: 24px;
                overflow-x: auto;
                margin-right: 50px;
            }
            #content main .table-data .head {
                display: flex;
            }
            #content main .table-data .head h3 {
                margin-right: auto;
                font-weight: 600;
            }
            #content main .table-data .order {
                flex-grow: 1;
                flex-basis: 500px;
            }
            #content main .table-data .order table {
                width: 100%;
                border-collapse: collapse;

            }
            #content main .table-data .order table th {

                padding-bottom: 12px;
                font-size: 17px;
                text-align: left;
                border-bottom: 1px solid var(--grey);
            }
            #content main .table-data .order table td {
                padding: 16px 0;
            }
            #content main .table-data .order table tbody tr:hover {
                background: var(--grey);
            }
            .log{
                margin-top: 20px;
                margin-left: 40px;
                font-size: 20px;
            }
            .board{
                margin-top: 150px;
                 margin-left: 40px;
                font-size: 20px;

            }
            #add{
                background: rgb(254,231,154);
                border-radius: 5px;
                border: 1px solid #D69E31;
                color: #85592e;
                cursor: pointer;
                /* float: right; */
                top:-5px;
                height: 30px;
                position: relative;
                width: 80px;
            }
            #main{
                display: flex;
            }
            .report{
                margin-left: 150px;
            }
         #btn-add-row{
            margin-left: 850px;
         }
         #btn-add-row1{
            margin-left: 850px;
         }
         #btn-add-row2{
            margin-left: 850px;
         }

</style>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
        <a href="#" class="brand">
			<img src="{{asset('img/m-d-foundation.png')}}" alt="">
		</a>
        <ul class="board">
			<li class="">
				<a href="/user">
					<i class='bx bxs-dashboard' ></i>
					<span class="">Dashboard</span>
				</a>
			</li>
        </ul>
        <ul class="log">
                <li>
                    <a href="/" class="logout">
                        <i class='bx bxs-log-out-circle text-danger' ></i>
                        <span class="text-danger">Logout</span>
                    </a>
                </li>
        </ul>
	</section>
	<!-- CONTENT -->
	<section id="content">
        <form action="/store/{id}" method="POST" autocomplete="off">
        @csrf
        <input type="hidden" name="user_id" value="{{$id}}">
        {{-- @dd($id) --}}
            <main>
                <div class="table-data" >
                        <div class="head">
                            <h3 class="text-success">New Driver</h3>
                        </div>
                        <div id="main">
                            <div class="col-md-5 report">
                                <h5 class="text-primary mb-3 mt-4" > <i class="fa-solid fa-user"></i> Driver & Vehicle Details</h5>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"> <i class="fa-solid fa-user"></i> Name</label>
                                        <input type="text" name="drivername"  class="form-control">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"> <i class="fa-solid fa-location-dot "></i> Company</label>
                                        <input type="text" name="company"  class="form-control">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"><i class="fa-solid fa-envelope "></i> Email</label>
                                        <input type="text" name="deliveryemail" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"> <i class="fa-solid fa-phone "></i> Phone</label>
                                        <input type="number" name="phone"  class="form-control">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"> <i class="fa-solid fa-calendar-days"></i> Date</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"> <i class="fa-solid fa-ticket "></i>  NumberPlate</label>
                                        <input type="text" name="number_plate"  class="form-control">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"><i class="fa-solid fa-gauge "></i> Mileage </label>
                                        <input type="text" name="mileage"  class="form-control">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"><i class="fa-solid fa-gauge "></i> Report </label>
                                        <input type="text" name="report"  class="form-control">
                                    </div>
                            </div>
                            <div class="col-md-5 ">
                                <h5 class="text-primary mb-3 mt-4" > <i class="fa-solid fa-user"></i> Report on Incident</h5>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"> <i class="fa-solid fa-calendar-days"></i> Date</label>
                                        <input type="date" name="date_of_incident"  class="form-control" value="none">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"> <i class="fa-solid fa-location-dot "></i> Location</label>
                                        <input type="text" name="location"  class="form-control" value="none">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"><i class="fa-solid fa-user "></i> Witnessed_by</label>
                                        <input type="text" name="witnessed_by"  class="form-control" value="none">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"> <i class="fa-solid fa-phone "></i> Phone</label>
                                        <input type="text" name="phone_number_of_witness"  class="form-control" value="none">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"> <i class="fa-solid fa-file "></i> Statement</label>
                                        <input type="text" name="brief_statement"  class="form-control" value="none">
                                    </div>
                                    <div class="form-group col-sm-7 mb-3">
                                        <label class="mb-2"><i class="fa-solid fa-image"></i> Image </label>
                                        <input type="file" name="upload_image"  class="form-control" value="none">
                                    </div>
                            </div>
                        </div>
                </div>
                <div class="table-data">
                        <div class="head">
                            <h5 class="text-success">Visual Check</h5>
                            {{-- <input type="button" value="+" class=" btn btn-success btn-sm border-0" id="btn-add-row" style="text-align:center;"> --}}

                        </div>

                        <div>
                            <table class="table table-bordered mt-3" style="width:1000px;">
                                <thead class="header">
                                        <tr>
                                            <th class="col-md-1 text-primary" style="text-align:center;">S.no</th>

                                            <th style="text-align:center;" class="col-md-2 text-primary">View</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Image</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Feed Back</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Notes</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Action</th>
                                            <th class="col-md-1 text-primary d-none" style="text-align:center;">User_id</th>
                                        </tr>
                                </thead>
                                <tbody id='row' >
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="1" id="sno"></td>
                                            <td><input type="text"  name="view[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Front"></td>
                                            <td><input type="file"  name="image[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="2" id="sno"></td>
                                            <td><input type="text"  name="view[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Near Side"></td>
                                            <td><input type="file"  name="image[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="3" id="sno"></td>
                                            <td><input type="text"  name="view[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Rear"></td>
                                            <td><input type="file"  name="image[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="4" id="sno"></td>
                                            <td><input type="text"  name="view[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Off-side"></td>
                                            <td><input type="file"  name="image[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="table-data">
                        <div class="head">
                            <h5 class="text-success">Vehicle Check</h5>
                            {{-- <td style="text-align:center;"><input type="button" value="+" class=" btn btn-success btn-sm border-0" id=btn-add-row1 style="text-align:center;"></td> --}}
                        </div>
                         <div>
                                <table class="table table-bordered mt-3" style="width:1000px;">
                                    <thead class="header">
                                        <tr>
                                            <th class="col-md-1 text-primary" style="text-align:center;">S.no</th>

                                            <th style="text-align:center;" class="col-md-2 text-primary">View</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Image</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Feed Back</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Notes</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Action</th>
                                            <th class="col-md-1 text-primary d-none" style="text-align:center;"></th>
                                        </tr>
                                    </thead>
                                    <tbody id='row1' >
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="1" id="sno"></td>
                                            <td><input type="text"  name="view1[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Adblue levels"></td>
                                            <td><input type="file"  name="image1[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback1[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes1[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action1[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="2" id="sno"></td>
                                            <td><input type="text"  name="view1[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Fuel/oil Leaks"></td>
                                            <td><input type="file"  name="image1[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback1[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes1[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action1[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="3" id="sno"></td>
                                            <td><input type="text"  name="view1[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Lights"></td>
                                            <td><input type="file"  name="image1[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback1[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes1[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action1[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="4" id="sno"></td>
                                            <td><input type="text"  name="view1[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Indicators/Signals"></td>
                                            <td><input type="file"  name="image1[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback1[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes1[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action1[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                </div>
                <div class="table-data">
                        <div class="head">
                            <h5 class="text-success">Cabin Check</h5>
                            {{-- <td style="text-align:center;"><input type="button" value="+" class=" btn btn-success btn-sm border-0" id=btn-add-row2 style="text-align:center;"></td> --}}

                        </div>
                        <div>
                                <table class="table table-bordered mt-3" style="width:1000px;">
                                    <thead class="header">
                                        <tr>
                                            <th class="col-md-1 text-primary" style="text-align:center;">S.no</th>

                                            <th style="text-align:center;" class="col-md-2 text-primary">View</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Image</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Feed Back</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Notes</th>
                                            <th style="text-align:center;" class="col-md-2 text-primary">Action</th>
                                            <th class="col-md-1 text-primary d-none" style="text-align:center;"></th>
                                        </tr>
                                    </thead>
                                    <tbody id='row2' >
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="1" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Steering"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="2" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Wipers"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="3" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Washers"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="4" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Horn"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="5" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Breakes inc.ABS/EBS"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="6" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Mirrors/Glass/Visibility"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="7" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Truck Interior/Seat Belt"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="8" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Warining Lamps/MIL"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                </div>
                <a href=""><input type="submit" value="Submit" class="text-primary" id="add"></a>
            </main>
        </form>
	</section>
    <script>
        $(document).ready (function(){
                // var i=1;
                // $("#btn-add-row").click(function(){
                // i++
                // $("#row").append("<tr class='list'><td id='row_num "+i+"'><input type='text' required name='sno[]' class='form-control' value="+i+" style='text-align:center;'></td>'+'<td><input type='text'  name='view[]' class='form-control view border-0' style='text-align:center;'></td>'+' <td><input type='file'  name='image[]' class='form-control image border-0' style='text-align:center;'></td>'+'<td><input type='text'  name='feedback[]' class='form-control feedback border-0' style='text-align:center;'></td>'+'<td><input type='text'  name='notes[]' class='form-control notes border-0' style='text-align:center;'></td>'+'<td><input type='text'  name='action[]' class='form-control action border-0' style='text-align:center;'></td></tr>");
                // })

                // var j=1;
                // $("#btn-add-row1").click(function(){
                // j++
                // $("#row1").append("<tr class='list'><td id='row_num "+j+"'><input type='text' required name='sno[]' class='form-control' value="+j+" style='text-align:center;'></td>'+'<td><input type='text'  name='view[]' class='form-control view border-0' style='text-align:center;'></td>'+' <td><input type='file'  name='image[]' class='form-control image border-0' style='text-align:center;'></td>'+'<td><input type='text'  name='feedback[]' class='form-control feedback border-0' style='text-align:center;'></td>'+'<td><input type='text'  name='notes[]' class='form-control notes border-0' style='text-align:center;'></td>'+'<td><input type='text'  name='action[]' class='form-control action border-0' style='text-align:center;'></td></tr>");
                // })

                // var k=1;
                // $("#btn-add-row2").click(function(){
                // k++
                // $("#row2").append("<tr class='list'><td id='row_num "+k+"'><input type='text' required name='sno[]' class='form-control' value="+k+" style='text-align:center;'></td>'+'<td><input type='text'  name='view[]' class='form-control view border-0' style='text-align:center;'></td>'+' <td><input type='file'  name='image[]' class='form-control image border-0' style='text-align:center;'></td>'+'<td><input type='text'  name='feedback[]' class='form-control feedback border-0' style='text-align:center;'></td>'+'<td><input type='text'  name='notes[]' class='form-control notes border-0' style='text-align:center;'></td>'+'<td><input type='text'  name='action[]' class='form-control action border-0' style='text-align:center;'></td></tr>");
                // })
         });

    </script>
</body>
</html>
