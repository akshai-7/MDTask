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
     @import url('https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap');
    :root{
        --header-height: 3rem;
        --first-color:#ddddfc;
        --first-color-light:black;
        --white-color: #F7F6FB;
        --z-fixed: 100;
        --light: #F9F9F9;
        --grey: #eee;
        --dark-grey: #AAAAAA;
        --dark: #342E37;s
    }
    html {
        overflow-x: hidden;
    }
    body{
        font-family: 'EB Garamond', serif;
        background: var(--grey);
        overflow: hidden;
    }
    a{
        text-decoration: none;
    }
    #container{
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: row

    }
    #div-1{
        width: 5%;
        height: 200;
        background: var(--first-color);
    }
    #div-2{
        width: 95%;
        height: 200;
    }
    #headers{
        width: 100%;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-content: center;
        background: #ddddfc;
    }
    .icon-name{
        justify-content: center;
        align-items: center;
        align-content: center;
        display: flex;
       flex: 1

    }
    .nav_name{
        flex: 2;
        display: none;
    }

    .header{
        width: inherit;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);
        transition: .5s
    }
    .header_toggle{
        color: black;
        font-size: 1.5rem;
        cursor: pointer
    }
    .img {
        width: 100px;
    }
    #img-container{
        width: 100%;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center
    }
    #img-logo{
        width: 60%;
    }
    .nav_list{
        width: 100%;
        padding: 0 10px;
        height: 7vh;
        border-radius: 4px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        color: black
    }
    .nav_list:hover{
        width: 100%;
        padding: 0 10px;
        height: 7vh;
        border-radius: 4px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        border-radius: 10px;
        background: whitesmoke;
        color:blue;
    }
    .nav_icon{
        font-size: 1.25rem
    }
    main {
        position: relative;
        width: 85%;
        left: 120px;
    }
    .table-data{
        background: var(--light);
        padding: 24px;
    }
    h3{
        margin-left: 20px;
        margin-top: 20px;
        color: #06064b;
    }
    .order table {
        width: 100%;
        margin-top: 2%;
    }
    .order table th {
        padding-bottom: 12px;
        font-size: 17px;
        color: black;
        border-bottom: 1px solid var(--grey);
    }
    .order table td {
        padding: 16px 0;
    }
    #add{
        background:#06064b;
        border-radius: 5px;
        border: 1px solid#06064b;
        cursor: pointer;
        top:20px;
        height: 30px;
        position: relative;
        width: 80px;
        float:right;
        margin-right: 100px;
    }
    .table_row {
        background: rgb(237, 233, 233);
    }
    .table_row:hover {
        background: white
    }
    .table_row:hover  .table_data{
        color: black;
    }
    #main{
        display: flex;
    }
    .main{
        margin-top: 20px;
        height: 75%;
        overflow: scroll;
    }
    .main::-webkit-scrollbar {
        display: none;
    }

    .form-group {
        display: flex;
        justify-content: space-between;
    }
    .report1{
         display: flex;
    }
    .report{
        width: 40%;
    }
    .subreport{
       margin-left: 50px;
       width: 40%;
    }
</style>
<body>
<section id="container">
        <div id="div-1">
            <div id="img-container">
             <img  id="img-logo" src="{{url('img/m-d-foundation.png')}}">
            </div>
             <a class="nav_list" href="/user" ><div class="icon-name"><i class='bx bx-grid-alt nav_icon'></i></div> <div class="nav_name">Dashboard </div> </a>
             <a  class="nav_list" href="/allrentallist" ><div class="icon-name"> <i class="fa-solid fa-list"></i> </div><span class="nav_name">Inspection List</span> </a>
             <a  class="nav_list"href="/" > <div class="icon-name"><i class='bx bx-log-out nav_icon'></i> </div><span class="nav_name">SignOut</span> </a>
        </div>
        <div id="div-2">
            <header class="headers" id="headers">
                 <div class="header_toggle" id="toggle-container"> <i class='bx bx-menu ' id="header-toggle"></i> </div>
            </header>
                <h3>New Inspection Details</h3>
            <form action="/store/{id}" method="POST" autocomplete="off" class="main">
                @csrf
                <input type="hidden" name="user_id" value="{{$id}}">
                    <main>
                        <div class="table-data">
                            <h5 class="" style="color:#06064b;" > <i class="fa-solid fa-user"></i> Driver & Vehicle Details</h5>

                            <div class="report1" >
                                <div class="report">
                                    <div class="form-group row mt-5 ">
                                        <label for="" class="col-sm-2  col-form-label"> Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="drivername" class="form-control" ><div style="color:rgb(216, 31, 31);font-size:14px;"> @error('drivername')*{{$message}}@enderror</div>
                                        </div>
                                    </div>
                                        <div class="form-group row mt-5 ">
                                            <label for="" class="col-sm-2  col-form-label"> Company</label>
                                            <div class="col-sm-9">
                                              <input type="text" name="company" class="form-control" ><div style="color:rgb(216, 31, 31);font-size:14px;"> @error('company')*{{$message}}@enderror</div>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-5 ">
                                            <label for="" class="col-sm-2  col-form-label"> Email</label>
                                            <div class="col-sm-9">
                                              <input type="text" name="deliveryemail" class="form-control" ><div style="color:rgb(216, 31, 31);font-size:14px;"> @error('deliveryemail')*{{$message}}@enderror</div>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-5 ">
                                            <label for="" class="col-sm-2 col-form-label"> Phone</label>
                                            <div class="col-sm-9">
                                              <input type="text" name="phone" class="form-control" ><div style="color:rgb(216, 31, 31);font-size:14px;"> @error('phone')*{{$message}}@enderror</div>
                                            </div>
                                        </div>
                                </div>
                                <div class="subreport">
                                    <div class="form-group row mt-5">
                                        <label for="" class="col-sm-2  col-form-label"> Date</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="date" class="form-control"  value="{{date('d.m.Y')}}"><div style="color:rgb(216, 31, 31);font-size:14px;"> @error('date')*{{$message}}@enderror</div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <label for="" class="col-sm-2 col-form-label">NumberPlate</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="number_plate" class="form-control" ><div style="color:rgb(216, 31, 31);font-size:14px;"> @error('number_plate')*{{$message}}@enderror</div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5 ">
                                        <label for="" class="col-sm-2 col-form-label"> Mileage</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="mileage" class="form-control" ><div style="color:rgb(216, 31, 31);font-size:14px;"> @error('mileage')*{{$message}}@enderror</div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5 ">
                                        <label for="" class="col-sm-2 col-form-label"> Report</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="report" class="form-control"><div style="color:rgb(216, 31, 31);font-size:14px;"> @error('report')*{{$message}}@enderror</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                    {{-- <h5 class="mt-4" style="color:#06064b;"> <i class="fa-solid fa-user"></i> Report on Incident</h5> --}}
                                    {{-- <div class="" id="main">
                                        <div class="report">
                                            <div class="form-group row mt-5 ">
                                                <label for="" class="col-sm-2 col-form-label"> Date</label>
                                                <div class="col-sm-9">
                                                    <input type="date" name="date_of_incident" class="form-control" ><div style="color:rgb(216, 31, 31);;"> @error('date_of_incident')*{{$message}}@enderror</div>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-5 ">
                                                <label for="" class="col-sm-2  col-form-label"> Location</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="location" class="form-control" value="none"><div style="color:rgb(216, 31, 31);;"> @error('location')*{{$message}}@enderror</div>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-5 ">
                                                <label for="" class="col-sm-2  col-form-label"> Witnessed_by</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="witnessed_by" class="form-control" value="none"><div style="color:rgb(216, 31, 31);;"> @error('witnessed_by')*{{$message}}@enderror</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subreport">
                                            <div class="form-group row mt-5 ">
                                                <label for="" class="col-sm-2  col-form-label"> Phone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="phone_number_of_witness" class="form-control" value="none"><div style="color:rgb(216, 31, 31);;"> @error('phone_number_of_witness')*{{$message}}@enderror</div>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-5 ">
                                                <label for="" class="col-sm-2  col-form-label"> Statement</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="brief_statement" class="form-control" value="none"><div style="color:rgb(216, 31, 31);;"> @error('brief_statement')*{{$message}}@enderror</div>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-5 ">
                                                <label for="" class="col-sm-2  col-form-label"> Image</label>
                                                <div class="col-sm-9">
                                                    <input type="file" name="upload_image" class="form-control" value="none"><div style="color:rgb(216, 31, 31);;"> @error('upload_image')*{{$message}}@enderror</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> --}}
                         </div>
                        <div class="table-data">
                                <div class="head">
                                    <h5 class="" style="color:#06064b;">Visual Check</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered mt-3" >
                                        <thead class="">
                                                <tr class="">
                                                    <th class="col-md-1" style="text-align:center;">S.no</th>
                                                    <th style="text-align:center;" class="col-md-2 ">View</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Image</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Feed Back</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Notes</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Action</th>
                                                    <th class="col-md-1 d-none" style="text-align:center;">Driver_id</th>
                                                </tr>
                                        </thead>
                                        <tbody id='row' >
                                                <tr class="">
                                                    <td class="col-md-1" ><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="1" id="sno"></td>
                                                    <td><input type="text"  name="view[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Front"></td>
                                                    <td><input type="file"  name="image[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="2" id="sno"></td>
                                                    <td><input type="text"  name="view[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Near Side"></td>
                                                    <td><input type="file"  name="image[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="3" id="sno"></td>
                                                    <td><input type="text"  name="view[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Rear"></td>
                                                    <td><input type="file"  name="image[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="4" id="sno"></td>
                                                    <td><input type="text"  name="view[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Off-side"></td>
                                                    <td><input type="file"  name="image[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="table-data">
                            <div class="head">
                                <h5 class="" style="color:#06064b;">Vehicle Check</h5>
                            </div>
                            <div>
                                <table class="table table-bordered mt-3" >
                                        <thead class="">
                                                <tr>
                                                    <th class="col-md-1" style="text-align:center;">S.no</th>
                                                    <th style="text-align:center;" class="col-md-2 ">View</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Image</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Feed Back</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Notes</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Action</th>
                                                    <th class="col-md-1 d-none" style="text-align:center;">Driver_id</th>
                                                </tr>
                                        </thead>
                                        <tbody id='row1' >
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="1" id="sno"></td>
                                                    <td><input type="text"  name="view1[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Adblue levels"></td>
                                                    <td><input type="file"  name="image1[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback1[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes1[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action1[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="2" id="sno"></td>
                                                    <td><input type="text"  name="view1[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Fuel/oil Leaks"></td>
                                                    <td><input type="file"  name="image1[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback1[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes1[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action1[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="3" id="sno"></td>
                                                    <td><input type="text"  name="view1[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Lights"></td>
                                                    <td><input type="file"  name="image1[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback1[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes1[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action1[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="4" id="sno"></td>
                                                    <td><input type="text"  name="view1[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Indicators/Signals"></td>
                                                    <td><input type="file"  name="image1[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback1[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes1[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action1[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="table-data">
                            <div class="head">
                                 <h5 class="" style="color:#06064b;">Cabin Check</h5>
                            </div>
                            <div>
                                <table class="table table-bordered mt-3">
                                        <thead class="">
                                                <tr>
                                                    <th class="col-md-1" style="text-align:center;">S.no</th>
                                                    <th style="text-align:center;" class="col-md-2 ">View</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Image</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Feed Back</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Notes</th>
                                                    <th style="text-align:center;" class="col-md-2 ">Action</th>
                                                    <th class="col-md-1 d-none" style="text-align:center;">Driver_id</th>
                                                </tr>
                                        </thead>
                                        <tbody id='row2' >
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="1" id="sno"></td>
                                                    <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Steering"></td>
                                                    <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="2" id="sno"></td>
                                                    <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Wipers"></td>
                                                    <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="3" id="sno"></td>
                                                    <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Washers"></td>
                                                    <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">

                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="4" id="sno"></td>
                                                    <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Horn"></td>
                                                    <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="5" id="sno"></td>
                                                    <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Breakes inc.ABS/EBS"></td>
                                                    <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="6" id="sno"></td>
                                                    <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Mirrors/Glass/Visibility"></td>
                                                    <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="7" id="sno"></td>
                                                    <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Truck Interior/Seat Belt"></td>
                                                    <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                                <tr class="list">
                                                    <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="8" id="sno"></td>
                                                    <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Warining Lamps/MIL"></td>
                                                    <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                                    <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                                    <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                                    <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action' placeholder="Good/Bad" ></td>
                                                </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </main>
                    <a href="#"><input type="submit" value="Submit" class="text-white" id="add" style="color:#06064b;"></a>
            </form>
        </div>
</section>
<script>
    var toggleBtn=document.getElementById("toggle-container");
    var isOpen=false;
    toggleBtn.addEventListener("click",()=>{
        if(isOpen){
            var divsToHide = document.getElementsByClassName("nav_name");
            document.getElementById("div-1").style.width="5%";
            document.getElementById("div-1").style.transition="0.6s";
            document.getElementById("div-2").style.width="95%";//divsToHide is an array

            document.getElementById("toggle-container").innerHTML = "<i class='bx bx-menu' id='header-toggle'></i>";
                for(var i = 0; i < divsToHide.length; i++){

                    divsToHide[i].style.display = "none"; // depending on what you're doing
                }

            isOpen=!isOpen;
        }else{
            document.getElementById("div-1").style.width="15%";
            document.getElementById("div-2").style.transition="0.6s";
            var divsToHide = document.getElementsByClassName("nav_name"); //divsToHide is an array
            document.getElementById("toggle-container").innerHTML = "<i class='bx bx-x' id='header-toggle'></i>";

                for(var i = 0; i < divsToHide.length; i++){
                    divsToHide[i].style.display = "block"; // depending on what you're doing
                }
            document.getElementById("div-2").style.width="85%";
            isOpen=!isOpen;
        }
})
</script>
</body>
</html>
