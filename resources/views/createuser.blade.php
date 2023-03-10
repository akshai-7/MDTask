<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>

	<title>M&D Foundations</title>
</head>
<style>
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
                font-family: 'Times New Roman', Times, serif;
                background: var(--grey);
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
                /* margin-right:200px; */
                background: var(--first-color);
            }
            #div-2{
                width: 95%;
                height: 200;
            }
            #message{
                position:fixed;
                top: 80px;
                right: 10px;
                display: flex;
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
                flex: 1;
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
            main{
                display: flex;
                padding: 20px;
            }
            .table-data{
                position: relative;
                margin-top: 50px;
                margin-left: 50px;
                width: 300px;
                height: 300px;
                border-radius:8px;
                background: var(--light);

            }
            .head {
                display: flex;
            }
            .head h3 {
                margin-right: auto;
                font-weight: 600;
                color: #06064b;
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

</style>
<body id="body-pd">
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
            {{-- <div class="header_img"> <img src="{{url('img/m-d-foundation.png')}}" class="img"> </div> --}}
        </header>

        <main>
			<div class="table-data">
                <div>
                    {{$user}}
                </div>
            </div>
            <div class="table-data">
			</div>
		</main>
     </div>
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
</script>
</html>
