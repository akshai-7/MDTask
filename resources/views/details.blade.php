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
    {{-- <style>
            :root{
                --header-height: 3rem;
                --nav-width: 68px;
                --first-color: #74e5d2;
                --first-color-light: #AFA5D9;
                --white-color: #F7F6FB;
                --body-font: 'Nunito', sans-serif;
                --normal-font-size: 1rem;
                --z-fixed: 100;
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
            body{
                position: relative;
                margin: var(--header-height) 0 0 0;
                padding: 0 1rem;
                font-size:var(--normal-font-size);
                transition: .5s;
                background: var(--grey);
                overflow-x: hidden;
                font-family: 'Times New Roman', Times, serif;
            }
            a{text-decoration: none}
            .header{
                width: 100%;
                height:var(--header-height);
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
                cursor: pointer}
            .header_img{
                width: 100%;
                height:var(--header-height);
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
                color: black;
            }
            .nav_logo-name{
                color: black;
                font-weight: 700
            }
            .nav_link{
                position: relative;
                color:black;
                margin-bottom: 1.5rem;
                transition: .3s}
            .nav_link:hover{
                color: var(--white-color);
            }
            .nav_icon{
                font-size: 1.25rem
            }

            .active{
                color: blue;
            }
            .active::before{
                content: '';
                position: absolute;
                left: 0;
                width: 2px;
                height: 32px;
                background-color: var(--white-color)
            }

            @media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}
            .header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}
            .header_img{width: 40px;height: 40px}
            .header_img img{width: 45px}
            .l-navbar{left: 0;padding: 1rem 1rem 0 0}
            .show{width: calc(var(--nav-width) + 156px)}
            .body-pd{padding-left: calc(var(--nav-width) + 188px)}}


            li {
                list-style: none;
            }
                #content {
                    position: relative;
                    width: calc(100% - 280px);
                    left: 100px;
                    transition: .3s ease;
                }

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
                    font-size: 17px;
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
                #content main .table-data .order table td img
                {
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    object-fit: cover;
                }

                #content main .table-data .order table tr td .status {
                    font-size: 10px;
                    padding: 6px 20px;

                    font-weight: 700;
                }
                button{
                    color:	#06064b;
                    padding: 20px;
                }
                .button{
                    margin-right: 600px;
                    margin-top: 60px;
                }
                .tablinks{
                    padding: 5px 5px;
                    border: none;
                    border-radius: 4px;
                    outline: none;
                    cursor: pointer;
                    transition: 0.2s;
                    /* overflow: hidden; */
                }
                 button.active {

                color: #0d6efd;
                }

                .btnid{
                    display: flex;
                }


                #add{
                background:#74e5d2;
                border-radius: 5px;
                border: #74e5d2;

                cursor: pointer;
                float: right;
                margin-right: 70px;
                height: 30px;
                position: relative;
                width: 80px;
            }
             img{
                border-radius: 0px;
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

    </style> --}}
    <style>
        :root{
            --header-height: 3rem;
            --first-color: #74e5d2;
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
            font-family: 'Times New Roman', Times, serif;
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
            background: #fff;
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
            width: 60px;
            height:40px;
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
            background: #edf7f8;
            color:#269784;
        }
        .nav_icon{
            font-size: 1.25rem
        }
        main {
            position: relative;
            width: 85%;
            left: 120px;
            margin-top: 70px;
        }
        .table-data{
            border-radius:8px;
            background: var(--light);
            padding: 24px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            margin-top: 2%;
        }
         table th {
            padding-bottom: 12px;
            font-size: 17px;
            color: black;
            border-bottom: 1px solid var(--grey);
        }
        table td {
            padding: 10px ;
        }
        #add{
            background: #74e5d2;
            border-radius: 5px;
            border: 1px solid #74e5d2;
            cursor: pointer;
            top:50px;
            height: 30px;
            position: relative;
            width: 80px;
            float: right;
            margin-right: 100px;
        }
        .table_row {
            background: rgb(237, 233, 233);
        }
        .table_row:hover {
            background: white
        }
        .table_row:hover .table_data{
            color: black;
        }
        .tablinks{
            padding: 5px 5px;
            border: none;
            border-radius: 4px;
            outline: none;
            cursor: pointer;
            transition: 0.6s;
        }
        button.active {
            background:#b7f3e9;
        }
        .main{
            margin-top: 50px;
        }
        .tabcontent{
            margin-top: 20px;
        }

</style>
<body>
	<section id="container">
        <div id="div-1">
            <div id="img-container">
             <img  id="img-logo" src="{{url('img/m-d-foundation.png')}}">
            </div>
             <a class="nav_list" href="/user" ><div class="icon-name"><i class='bx bx-grid-alt nav_icon'></i></div> <div class="nav_name">Dashboard </div> </a>
             <a  class="nav_list" href="/allrentallist" ><div class="icon-name"> <i class="fa-solid fa-list"></i> </div><span class="nav_name">Rental</span> </a>
             <a  class="nav_list"href="/" > <div class="icon-name"><i class='bx bx-log-out nav_icon'></i> </div><span class="nav_name">SignOut</span> </a>
        </div>
        <div id="div-2">
            <header class="headers" id="headers">
                 <div class="header_toggle" id="toggle-container"> <i class='bx bx-menu ' id="header-toggle"></i> </div>
                 <div class="header_img"> <img src="{{url('img/m-d-foundation.png')}}" class="img"> </div>
            </header>
            <main class="main">
                <div class="button">
                    <button class="tablinks " onclick="openCheck(event, 'Visual')" id="defaultOpen"><h5 >Visual Damage</h5></button>
                    <button class="tablinks" onclick="openCheck(event, 'Vehicle')"><h5 >Vehicle Check</h5></button>
                    <button class="tablinks" onclick="openCheck(event,'Cabin')"><h5 >Cabin Checks</h5></button>
                </div>
                <div id="Visual" class="tabcontent">
                    <div class="table-data">
                        <table >
                            <thead>
                                <th style="text-align:center;">S.No</th>
                                <th style="text-align:center;">View</th>
                                <th style="text-align:center;">Image</th>
                                <th style="text-align:center;">Feed Back</th>
                                <th style="text-align:center;">Action</th>
                            </thead>
                            <tbody>
                                @foreach($visual as $visual)
                                    <tr class="table_row">
                                        <td style="text-align:center;" class="table_data">{{$loop->iteration}}</td>
                                        <td style="text-align:center;" class="table_data">{{$visual->view}}</td>
                                        <td style="text-align:center;" class="table_data"><img src="{{url('images/'.$visual->image)}}" class="rounded-0 border border-secondary"  width="50px" height="50px" ></td>
                                        <td style="text-align:center;" class="table_data">{{$visual->feedback}}</td>
                                        <td style="text-align:center;" class="table_data">
                                        <a href="/updatevisualcheck/{{$visual->id}}"><i class="fa-solid fa-edit btn btn-success" ></i></a>
                                        <a href="/deletevisual/{{$visual->id}}" ><i class="fa-solid fa-trash btn btn-danger"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                    </div>
                </div>
                <div id="Vehicle" class="tabcontent">
                    <div class="table-data">
                        <table>
                            <thead>
                                <th style="text-align:center;">S.No</th>
                                <th style="text-align:center;">View</th>
                                <th style="text-align:center;">Image</th>
                                <th style="text-align:center;">Feed Back</th>
                                <th style="text-align:center;">Action</th>
                            </thead>
                            <tbody>
                                @foreach($vehicle as $vehicle)
                                 <tr class="table_row">
                                    <td style="text-align:center;" class="table_data">{{$loop->iteration}}</td>
                                    <td style="text-align:center;" class="table_data">{{$vehicle->view}}</td>
                                    <td style="text-align:center;" class="table_data"><img src="{{url('images/'.$vehicle->image)}}"  width="50px" height="50px" alt="" class="rounded-0 border border-secondary " ></td>
                                    <td style="text-align:center;" class="table_data">{{$vehicle->feedback}}</td>
                                    <td style="text-align:center;" class="table_data">
                                    <a href="/updatevehiclecheck/{{$vehicle->id}}"><i class="fa-solid fa-edit btn btn-success" ></i></a>
                                    <a href="/deletevehicle/{{$vehicle->id}}" ><i class="fa-solid fa-trash btn btn-danger"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="Cabin" class="tabcontent">
                    <div class="table-data">
                        <table>
                            <thead>
                                <th style="text-align:center;">S.No</th>
                                <th style="text-align:center;">View</th>
                                <th style="text-align:center;">Image</th>
                                <th style="text-align:center;">Feed Back</th>
                                <th style="text-align:center;">Action</th>
                            </thead>
                            <tbody>
                                @foreach($cabin as $cabin)
                                <tr class="table_row">
                                    <td style="text-align:center;" class="table_data">{{$loop->iteration}}</td>
                                    <td style="text-align:center;" class="table_data">{{$cabin->view}}</td>
                                    <td style="text-align:center;" class="table_data"><img src="{{url('images/'.$cabin->image)}}"  width="50px" height="50px" alt="" class="rounded-0 border border-secondary"></td>
                                    <td style="text-align:center;" class="table_data">{{$cabin->feedback}}</td>
                                    <td style="text-align:center;" class="table_data">
                                        <a href="/updatecabincheck/{{$cabin->id}}"><i class="fa-solid fa-edit btn btn-success" ></i></a>
                                        <a href="/deletecabin/{{$cabin->id}}" ><i class="fa-solid fa-trash btn btn-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                 </div>
           </main>
            <div>
                <a href="/summary/{{$cabin->user_id}}"><input type="submit" value="Summary" class="text-black" id="add"></a>
            </div>
        </div>
    </section>
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


        //sidebar
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
