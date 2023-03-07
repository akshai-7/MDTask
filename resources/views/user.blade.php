<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>

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
                overflow-y: hidden;
            }
            body{
                /* font-family: 'EB Garamond', serif; */
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
                flex-direction: row;
            }
            #div-1{
                width: 5%;
                height: 200;
                background:	#ddddfc;

            }
            #div-2{
                width: 95%;
                height: 200;
                position: relative;
            }
            #message{
                position:fixed;
                top: 70px;
                right: 10px;
                animation-duration: 1s;
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
                /* height:40px; */
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
                margin-top: 10%;
                border-radius:8px;
                background:var(--light);
                padding: 24px;
                overflow-x: auto;
            }
            .head {
                display: flex;
            }
            .head h3 {
                margin-right: auto;
                font-weight: 600;
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
                background: rgb(254,231,154);
                border-radius: 5px;
                border: 1px solid #D69E31;
                color: #85592e;
                cursor: pointer;
                top:-5px;
                height: 30px;
                position: relative;
                width: 80px;
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
            .main{
                /* margin-top: 30px; */
                height: 80%;
                overflow: scroll;
            }
            .main::-webkit-scrollbar {
             display: none;
            }
            .popup {
                display: none;
                position: fixed;
                padding: 20px;
                width: 600px;
                height: 500px;
                left: 50%;
                margin-left: -250px;
                top: 30%;
                margin-top: -50px;
                background: #FFF;
                z-index: 20;
            }

            #popup:after {
                position: fixed;
                content: "";
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                background: rgba(0,0,0,0.5);
                z-index: -2;
            }
            #popup:before {
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                background:var(--light);
                z-index: -1;
            }
            form{
                margin-left: 50px;
            }
            .table-data1{
                position: relative;
                color: #06064b;
                margin-top: 50px;
                margin-left: 120px;
                width: 220px;
                height: 90px;
                border-radius:8px;
                background: var(--light);
            }
            .usercount{
                margin-left: 15px;
                padding:10px;

            }

            .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


.dropdown {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover {background-color: #f1f1f1}


.dropdown:hover .dropdown-content {
  display: block;
}


.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>


<body>
<section id="container">

    <div id="div-1">
       <div id="img-container">
        <img  id="img-logo" src="{{url('img/m-d-foundation.png')}}">
       </div>
        {{-- <a class="nav_list" href="/createuser" ><div class="icon-name"><i class='bx bx-grid-alt nav_icon'></i></div> <div class="nav_name">Dashboard </div> </a> --}}
        <a class="nav_list" href="/user" ><div class="icon-name"><i class='bx bx-grid-alt nav_icon'></i></div> <div class="nav_name">Dashboard </div> </a>
        <a  class="nav_list" href="/allrentallist" ><div class="icon-name"> <i class="fa-solid fa-list"></i> </div><span class="nav_name">Rental</span> </a>
        <a  class="nav_list"href="/"> <div class="icon-name"><i class='bx bx-log-out nav_icon'></i> </div><span class="nav_name">SignOut</span> </a>

        <div class="dropdown">
            {{-- <button class="drpbtn"><i class='bx bx-log-out nav_icon'></i> </button> --}}
            {{-- <a  class="drpbtn"href="#"><i class='bx bx-log-out nav_icon'></i> </a> --}}
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
    </div>
    <div id="div-2">
        <header class="headers" id="headers">
            <div class="header_toggle" id="toggle-container"> <i class='bx bx-menu ' id="header-toggle"></i> </div>
            {{-- <div class="header_img"> <img src="{{url('img/m-d-foundation.png')}}" class="img"> </div> --}}
        </header>
        <div class="message" id="message">
            @if (session()->has('message'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" style="width: 200px;height:20px">
                <div   div class="alert alert-success">
                    {{session('message')}}
                </div>
            </div>
            @endif
        </div>
        <div class="table-data1">
            <div class="usercount">
                <h4> <i class="fa-solid fa-user"></i> Total Users </h4>
                <h1 align="right" style="margin-right: 50px;color:blue;font-weight: 600;">{{$user1}}</h1>
            </div>
        </div>
        <div class="message1" id="message">
            @if (session()->has('message1'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" style="width: 200px;height:20px;">
                    <div class="alert alert-danger">
                        {{session('message1')}}
                    </div>
                </div>
            @endif
        </div>
        <main class="main">
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>User Details</h3>
                        <a href="#"><input type="submit" value="Add-User" class="text-primary button" id="add" onclick="show('popup')"></a>
                    </div>
                    <table class="">
                        <thead class="text-primary">
                            <th style="text-align:center;">S.No</th>
                            <th style="text-align:center;">Name</th>
                            <th style="text-align:center;">Email</th>
                            <th style="text-align:center;">Role</th>
                            <th style="text-align:center;">Creation Date</th>
                            <th style="text-align:center;">Action</th>
                        </thead>
                        <tbody>
                            @foreach($user as $user)
                                 <tr class="table_row">
                                    <td style="text-align:center;" class="table_data">{{$loop->iteration}}</td>
                                    <td style="text-align:center;" class="table_data">{{$user->name}}</td>
                                    <td style="text-align:center;" class="table_data">{{$user->email}}</td>
                                    <td style="text-align:center;" class="table_data">{{$user->role}}</td>
                                    <td style="text-align:center;" class="table_data">{{$user->created_at->format('d.m.Y')}}</td>
                                    <td style="text-align:center;" class="table_data">
                                        <a href="/driver/{{$user->id}}"><i class="fa-solid fa-eye btn  text-white" style="background:#06064b"></i></a>
                                        <a href="/updateuser/{{$user->id}}" ><i class="fa-solid fa-edit btn btn-success" ></i></i></a>
                                        <a href="/createdriver/{{$user->id}}"><i class="fa-solid fa-plus btn btn-secondary"></i></a>
                                        <a href="/delete/{{$user->id}}" ><i class="fa-solid fa-trash btn btn-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <div class="popup" id="popup">
            <form action="/createuser" method="POST" autocomplete="off" >
                @csrf
                <div class=" row mt-5">
                    <label for="" class="col-sm-2  col-form-label"> Name</label>
                    <div class="col-sm-8">
                    <input type="text" name="name" class="form-control"  placeholder="User Name"><div style="color:rgb(216, 31, 31);;"> @error('name')*{{$message}}@enderror</div>
                    </div>
                </div>
                <div class="row  mt-5">
                    <label for="" class="col-sm-2  col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="email" placeholder=" Enter Your Email"><div style="color:rgb(216, 31, 31);;"> @error('email')*{{$message}}@enderror</div>
                    </div>
                </div>
                <div class=" row  mt-5">
                    <label for="" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" placeholder=" Enter Password"><div style="color:rgb(216, 31, 31);;"> @error('password')*{{$message}}@enderror</div>
                        <input type="submit" name="" value="Submit" class="btn text-white mt-5" style="float:right;background:#06064b;">
                    </div>
                <a href="#" onclick="hide('popup')" style="color:red;text-align: center;">Close</a>

            </form>
            <a href="/sendnotification">Send Mail</a>
        </div>

    </div>
</section>

</body>
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


        $ = function(id) {
        return document.getElementById(id);
        }

        var show = function(id) {
            $(id).style.display ='block';
        }
        var hide = function(id) {
            $(id).style.display ='none';
        }
</script>
</html>
