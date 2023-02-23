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
           @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
            :root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}
            body{
                position: relative;
                margin: var(--header-height) 0 0 0;
                padding: 0 1rem;font-family:
                var(--body-font);font-size:
                var(--normal-font-size);
                transition: .5s
            }
            a{text-decoration: none}
            .header{
                width: 100%;height:
                var(--header-height);
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
                color: var(--first-color);
                font-size: 1.5rem;
                cursor: pointer}
            .header_img{
                width:65px;
                height: 35px;
                /* display: flex; */
                /* justify-content: center; */
                /* border-radius: 30%; */
                overflow: hidden
            }
            .header_img img{
                width: 40px
            }
            .l-navbar{
                position: fixed;
                top: 0;
                left: -30%;
                width: var(--nav-width);
                height: 100vh;
                background-color:var(--first-color);
                padding: .5rem 1rem 0 0;
                transition: .5s;
                z-index:var(--z-fixed)
                }
            .nav{
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                overflow: hidden
            }
            .nav_logo, .nav_link{
                display: grid;
                grid-template-columns: max-content max-content;
                align-items: center;
                column-gap: 1rem;
                padding: .5rem 0 .5rem 1.5rem
            }
            .nav_logo{
                margin-bottom: 2rem
            }
            .nav_logo-icon{
                font-size: 1.25rem;
                color: var(--white-color)
            }
            .nav_logo-name{
                color: var(--white-color);
                font-weight: 700
            }
            .nav_link{
                position: relative;
                color: var(--first-color-light);
                margin-bottom: 1.5rem;
                transition: .3s}
            .nav_link:hover{
                color: var(--white-color)
            }
            .nav_icon{
                font-size: 1.25rem
            }
            /* .show{
                left: 0
            } */
            .body-pd{
                padding-left: calc(var(--nav-width) + 1rem)
            }
            .active{
                color: var(--white-color)
            }
            .active::before{
                content: '';
                position: absolute;
                left: 0;
                width: 2px;
                height: 32px;
                background-color: var(--white-color)
            }
            /* .height-100{
                height:100vh
            } */
            @media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}
            .header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}
            .header_img{width: 40px;height: 40px}
            .header_img img{width: 45px}
            .l-navbar{left: 0;padding: 1rem 1rem 0 0}
            .show{width: calc(var(--nav-width) + 156px)}
            .body-pd{padding-left: calc(var(--nav-width) + 188px)}}
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
                /* --light: #0C0C1E;
                --grey: #060714;
                --dark: #FBFBFB; */
            }

            body {
                background: var(--grey);
                overflow-x: hidden;
                font-family: 'Times New Roman', Times, serif;
            }
            #content {
                position: relative;
                width: calc(100% - 280px);
                left: 100px;
                transition:0.3s ease;
            }
            #content main {
                width: 120%;
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

                /* padding-bottom: 12px; */
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

            #add{
                background: rgb(254,231,154);
                border-radius: 5px;
                border: 1px solid #D69E31;
                color: #85592e;
                cursor: pointer;
                /* float: right; */
                margin-top:20px;
                margin-left:85%;
                height: 30px;
                position: relative;
                width: 80px;
            }
            #main{
                display: flex;
                margin-top: -40px;
            }
            .report{
                margin-left: 150px;


            }
</style>
<body id="body-pd">
	<section id="sidebar">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="{{url('img/m-d-foundation.png')}}" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">M&D Foundations</span> </a>
                    <div class="nav_list">
                        <a href="/user" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                        <a href="/allrentallist" class="nav_link"> <i class="fa-solid fa-list"></i> <span class="nav_name">Rental</span> </a>
                    </div>
                    <a href="/" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
                </div>
            </nav>
        </div>
	</section>
	<section id="content">
        <form action="/store/{id}" method="POST" autocomplete="off">
        @csrf
        <input type="hidden" name="user_id" value="{{$id}}">
            <main>
                <div class="table-data" >
                        <div class="head1">
                            <h3 class="text-success">New Rental Details</h3>
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
                        </div>
                        <div>
                            <table class="table table-bordered mt-3" >
                                <thead class="">
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
                        </div>
                         <div>
                                <table class="table table-bordered mt-3" >
                                    <thead class="">
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
                        </div>
                        <div>
                                <table class="table table-bordered mt-3">
                                    <thead class="">
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
                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="1" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Breakes inc.ABS/EBS"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">
                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="2" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Mirrors/Glass/Visibility"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">
                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="3" id="sno"></td>
                                            <td><input type="text"  name="view2[]"   class="form-control view border-0" style="text-align:center;" id='view' value="Truck Interior/Seat Belt"></td>
                                            <td><input type="file"  name="image2[]"  class="form-control image border-0" style="text-align:center;" id='image'></td>
                                            <td><input type="text"  name="feedback2[]"  class="form-control feedback border-0" style="text-align:center;" id='feedback'></td>
                                            <td><input type="text"  name="notes2[]" class="form-control notes border-0" style="text-align:center;" id='notes'></td>
                                            <td><input type="text"  name="action2[]"  class="form-control action border-0" style="text-align:center;" id='action'></td>
                                        </tr>
                                        <tr class="list">

                                            <td class="col-md-1"><input type="text"  name="sno[]"    class="form-control col-md-1 border-0" style="text-align:center;" value="4" id="sno"></td>
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

        document.addEventListener("DOMContentLoaded", function(event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)


                 if(toggle && nav && bodypd && headerpd){
                 toggle.addEventListener('click', ()=>{

                 nav.classList.toggle('show')

                 toggle.classList.toggle('bx-x')

                 headerpd.classList.toggle('body-pd')
                 })
                 }
             }
                 showNavbar('header-toggle','nav-bar','body-pd','header')
                 const linkColor = document.querySelectorAll('.nav_link')

                 function colorLink(){
                 if(linkColor){
                 linkColor.forEach(l=> l.classList.remove('active'))
                 this.classList.add('active')
                 }
                 }
                 linkColor.forEach(l=> l.addEventListener('click', colorLink))

        });
     </script>
</body>
</html>
