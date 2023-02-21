<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
                /* --poppins: 'Poppins', sans-serif; */
                /* --lato: 'Lato', sans-serif; */
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
            /* SIDEBAR */
                #sidebar {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 280px;
                    height: 100%;
                    background: var(--light);
                    z-index: 2000;
                    font-family: var(--lato);
                    transition: .3s ease;
                    overflow-x: hidden;
                    scrollbar-width: none;
                }
                /* #sidebar::--webkit-scrollbar {
                    display: none;
                } */
                /* #sidebar.hide {
                    width: 60px;
                } */
                #sidebar .brand {

                    height: 56px;
                    align-items: center;
                    position: fixed;
                    top: 20px;
                    margin-left: 20px;
                    background: var(--light);
                    z-index: 500;
                    padding-bottom: 20px;
                    box-sizing: content-box;
                }
                /* #sidebar .brand .bx {
                    min-width: 60px;
                    display: flex;
                    justify-content: center;
                }
                #sidebar .side-menu {
                    width: 100%;
                    margin-top: 48px;
                }
                #sidebar .side-menu li {
                    height: 48px;
                    background: transparent;
                    margin-left: 6px;
                    border-radius: 48px 0 0 48px;
                    padding: 4px;
                } */
                /* #sidebar .side-menu li.active {
                    background: var(--grey);
                    position: relative;
                } */
                /* #sidebar .side-menu li.active::before {
                    content: '';
                    position: absolute;
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    top: -40px;
                    right: 0;
                    box-shadow: 20px 20px 0 var(--grey);
                    z-index: -1;
                } */

                #sidebar .side-menu li a {
                    width: 100%;
                    height: 100%;
                    background: var(--light);
                    display: flex;
                    align-items: center;
                    border-radius: 48px;
                    font-size: 16px;
                    color: var(--dark);
                    white-space: nowrap;
                    overflow-x: hidden;
                }
                #sidebar .side-menu.top li.active a {
                    color: var(--blue);
                }

                #sidebar .side-menu li a.logout {
                    color: var(--red);
                }
                #sidebar .side-menu.top li a:hover {
                    color: var(--blue);
                }
                #sidebar .side-menu li a .bx {
                    min-width: calc(60px  - ((4px + 6px) * 2));
                    display: flex;
                    justify-content: center;
                }
            /* SIDEBAR */
            /* CONTENT */
                #content {
                    position: relative;
                    width: calc(100% - 280px);
                    left: 280px;
                    transition: .3s ease;
                }
                #sidebar.hide ~ #content {
                    width: calc(100% - 60px);
                    left: 60px;
                }
            /* MAIN */
                #content main {
                    width: 100%;
                    padding: 36px 24px;
                    font-family: var(--poppins);
                    max-height: calc(100vh - 56px);
                    overflow-y: auto;
                }
                #content main .head-title {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    grid-gap: 16px;
                    flex-wrap: wrap;
                }
                #content main .head-title .left h1 {
                    font-size: 36px;
                    font-weight: 600;
                    margin-bottom: 10px;
                    color: var(--dark);
                }
                #content main .head-title .left .breadcrumb {
                    display: flex;
                    align-items: center;
                    grid-gap: 16px;
                }
                #content main .head-title .left .breadcrumb li {
                    color: var(--dark);
                }
                #content main .head-title .left .breadcrumb li a {
                    color: var(--dark-grey);
                    pointer-events: none;
                }
                #content main .head-title .left .breadcrumb li a.active {
                    color: var(--blue);
                    pointer-events: unset;
                }
                #content main .head-title .btn-download {
                    height: 36px;
                    padding: 0 16px;
                    border-radius: 3px;
                    background: var(--blue);
                    color: var(--light);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    grid-gap: 10px;
                    font-weight: 500;
                }
                #content main .box-info {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                    grid-gap: 24px;
                    margin-top: 36px;
                }
                #content main .box-info li {
                    padding: 24px;
                    /* background: var(--light); */
                    border-radius: 3px;
                    display: flex;
                    align-items: center;
                    grid-gap: 24px;
                }
                #content main .box-info li .bx {
                    width: 80px;
                    height: 80px;
                    border-radius: 10px;
                    font-size: 36px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                #content main .box-info li:nth-child(1) .bx {
                    background: var(--light-blue);
                    color: var(--blue);
                }
                #content main .box-info li:nth-child(2) .bx {
                    background: var(--light-yellow);
                    color: var(--yellow);
                }
                #content main .box-info li:nth-child(3) .bx {
                    background: var(--light-orange);
                    color: var(--orange);
                }
                #content main .box-info li .text h3 {
                    font-size: 24px;
                    font-weight: 600;
                    color: var(--dark);
                }
                #content main .box-info li .text p {
                    color: var(--dark);
                }
                #content main .table-data {
                    display: flex;
                    flex-wrap: wrap;
                    grid-gap: 24px;
                    margin-top: -30px;
                    width: 100%;
                    color: var(--dark);
                }
                #content main .table-data > div {
                    border-radius: 4px;
                    background: var(--light);
                    padding: 24px;
                    overflow-x: auto;
                }
                #content main .table-data .head {
                    display: flex;
                    align-items: center;
                    grid-gap: 16px;
                    margin-bottom: 24px;
                }
                #content main .table-data .head h3 {
                    margin-right: auto;
                    font-size: 20px;
                    font-weight: 600;
                }
                #content main .table-data .head .bx {
                    cursor: pointer;
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
                    font-size: 13px;
                    text-align: left;
                    border-bottom: 1px solid var(--grey);
                }
                #content main .table-data .order table td {
                    padding: 16px 0;
                }
                #content main .table-data .order table tr td:first-child {
                    display: flex;
                    align-items: center;
                    grid-gap: 12px;
                    padding-left: 6px;
                }
                #content main .table-data .order table td img {
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    object-fit: cover;
                }
                #content main .table-data .order table tbody tr:hover {
                    background: var(--grey);
                }
                #content main .table-data .order table tr td .status {
                    font-size: 10px;
                    padding: 6px 16px;
                    color: var(--light);
                    border-radius: 20px;
                    font-weight: 700;
                }
                #content main .table-data .order table tr td .status.completed {
                    background: var(--blue);
                }
                #content main .table-data .order table tr td .status.process {
                    background: var(--yellow);
                }
                #content main .table-data .order table tr td .status.pending {
                    background: var(--orange);
                }

                button{
                    color:	#228B22;
                }

                .tabcontent {
                    /* width: 70%; */
                    display: none;

                }
                .button{
                    margin-right: 600px;
                    box-align: center;
                }
                .tablinks{
                    padding: 5px 20px;
                    border: none;
                    border-radius: 4px;
                    outline: none;
                    cursor: pointer;
                    transition: 0.2s;
                    margin-top: 7px;
                }
                 button.active {
                background-color:white;
                }



                /* Button used to open the contact form - fixed at the bottom of the page */
                .open-button {
                background-color: #555;
                color: white;
                /* padding: 16px 20px; */
                border: none;
                cursor: pointer;
                opacity: 0.8;
                position: fixed;
                /* bottom: 23px; */
                /* right: 28px; */
                /* width: 280px; */
                }

                /* The popup form - hidden by default */
                .form-popup {
                display: none;
                position: fixed;
                bottom: 50px;
                right: 15px;
                /* border: 1px solid black; */
                z-index: 9;
                }

                /* Add styles to the form container */
                .form-container {
                max-width: 500px;
                /* height: 100px; */
                padding: 100px;
                background-color: white;
                margin-right: 200px;
                }

                /* Full-width input fields */
                .form-container input[type=text], .form-container input[type=file] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background: #f1f1f1;
                }

                /* When the inputs get focus, do something */
                .form-container input[type=text]:focus, .form-container input[type=password]:focus {
                background-color: #ddd;
                outline: none;
                }

                /* Set a style for the submit/login button */
                .form-container .btn {
                background-color: #04AA6D;
                color: white;
                padding: 1px 2px;
                border: none;
                cursor: pointer;
                width: 30%;
                margin-bottom:10px;
                opacity: 0.8;
                }
                /* Add a red background color to the cancel button */
                .form-container .cancel {
                background-color: red;
                }

                /* Add some hover effects to buttons */
                .form-container .btn:hover, .open-button:hover {
                opacity: 1;
                }
                .btnid{
                    display: flex;
                }

                .log{
                margin-top: 20px;
            }
            .board{
                margin-top: 150px;
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
				<a href="#">
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
        <section id='content'>
            <main>
                <div class="head-title">
                    <div class="left">
                        <h2 class="text-primary">Dashboard</h2>
                    </div>
                </div>
                <div class="button">
                <button class="tablinks " onclick="openCheck(event, 'Visual')" id="defaultOpen"><h5 >Visual Check</h5></button>
                <button class="tablinks" onclick="openCheck(event, 'Vehicle')"><h5 >Vehicle Check</h5></button>
                <button class="tablinks" onclick="openCheck(event,'Cabin')"><h5 >Cabin Check</h5></button>
              </div>
            </main>
        </section>

        <div id="Visual" class="tabcontent">
            <section id="content">
                <main>
                    <div class="table-data">
                        <div class="order">
                            <table class="" style="width:1000px">
                                    <thead class="header col-md-1">
                                        <th style="text-align:;" class="text-primary">S.No</th>
                                        <th style="text-align:center;" class="text-primary">View</th>
                                        <th style="text-align:center;" class="text-primary">Image</th>
                                        <th style="text-align:center;" class="text-primary">Feed Back</th>
                                        <th style="text-align:center;" class="text-primary">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($visual as $visual)
                                            <tr>
                                                <td style="text-align:center;">{{$loop->iteration}}</td>
                                                <td style="text-align:center;">{{$visual->view}}</td>
                                                {{-- <td style="text-align:center;">{{$visual->image}}</td> --}}
                                                <td style="text-align:center;"><img src="{{asset('public/images'.$visual->image)}}"  width="50px" height="50px" alt=""></td>
                                                <td style="text-align:center;">{{$visual->feedback}}</td>
                                                <td style="text-align:center;">
                                                <a href="/updatevisualcheck/{{$visual->id}}"><i class="fa-solid fa-edit btn btn-primary" ></i></a>
                                                <a href="/delete/{{$visual->id}}" ><i class="fa-solid fa-trash btn btn-danger"></i></a></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </section>
        </div>
        <div id="Vehicle" class="tabcontent">
            <section id="content">
                <main>
                    <div class="table-data">
                        <div class="order">
                            <table class="col-md-1" style="width:1000px">
                                    <thead class="header">
                                        <th style="text-align:;" class="text-primary">S.No</th>
                                        <th style="text-align:center;" class="text-primary">View</th>
                                        <th style="text-align:center;" class="text-primary">Image</th>
                                        <th style="text-align:center;" class="text-primary">Feed Back</th>
                                        <th style="text-align:center;" class="text-primary">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($vehicle as $vehicle)
                                         <tr>
                                            <td style="text-align:center;">{{$loop->iteration}}</td>
                                            <td style="text-align:center;">{{$vehicle->view}}</td>
                                            {{-- <td style="text-align:center;">{{$vehicle->image}}</td> --}}
                                            <td style="text-align:center;"><img src="{{asset('public/images'.$vehicle->image)}}"  width="50px" height="50px" alt=""></td>
                                            <td style="text-align:center;">{{$vehicle->feedback}}</td>
                                            <td style="text-align:center;">
                                            <a href="/updatevehiclecheck/{{$vehicle->id}}"><i class="fa-solid fa-edit btn btn-primary" ></i></a>
                                            <a href="/delete/{{$vehicle->id}}" ><i class="fa-solid fa-trash btn btn-danger"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>

                    </div>
                </main>
            </section>
        </div>
        <div id="Cabin" class="tabcontent">
            <section id="content">
                <main>
                    <div class="table-data">
                        <div class="order">
                            <table class="col-md-1" style="width:1000px">
                                <thead class="header">
                                    <th style="text-align:;" class="text-primary col-md-1">S.No</th>
                                    <th style="text-align:center;" class="text-primary">View</th>
                                    <th style="text-align:center;" class="text-primary">Image</th>
                                    <th style="text-align:center;" class="text-primary">Feed Back</th>
                                    <th style="text-align:center;" class="text-primary">Action</th>
                                </thead>
                                    <tbody>
                                        @foreach($cabin as $cabin)
                                            <tr>
                                                <td style="text-align:center;">{{$loop->iteration}}</td>
                                                <td style="text-align:center;">{{$cabin->view}}</td>
                                                {{-- <td style="text-align:center;">{{$cabin->image}}</td> --}}
                                                <td style="text-align:center;"><img src="{{asset('public/images'.$cabin->image)}}"  width="50px" height="50px" alt=""></td>
                                                <td style="text-align:center;">{{$cabin->feedback}}</td>
                                                <td style="text-align:center;">
                                                    <a href="/updatecabincheck/{{$cabin->id}}"><i class="fa-solid fa-edit btn btn-primary" ></i></a>
                                                    <a href="/delete/{{$cabin->id}}" ><i class="fa-solid fa-trash btn btn-danger"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </section>
        </div>
        <script>
        function openCheck(evt,Name) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(Name).style.display = "block";
          evt.currentTarget.className +=" active";

        }
        document.getElementById("defaultOpen").click();


        </script>
</body>
</html>
