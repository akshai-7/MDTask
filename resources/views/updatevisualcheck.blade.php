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
        background: var(--light);
        padding: 24px;
        overflow-x: auto;
    }
    h3{
        margin-right: auto;
        font-weight: 600;
        color:#06064b;
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
        padding: 16px 10px;
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
             {{-- <div class="header_img"> <img src="{{url('img/m-d-foundation.png')}}" class="img"> </div> --}}
         </header>
         <main>
			<div class="table-data">
				<div class="order">
						<h3>Visual Check</h3>
                    <form action="/visualupdate/{user_id}" method="POST" autocomplete="off">
                        @csrf
                        <table >
                            <thead class="">
                                <th style="text-align:center;" class="col-md-1 ">Id</th>
                                <th style="text-align:center;" class="col-md-1 " >User_id</th>
                                <th style="text-align:center;" class="col-md-2 ">View</th>
                                <th style="text-align:center;" class="col-md-2 ">Image</th>
                                <th style="text-align:center;" class="col-md-3 ">Feed Back</th>
                                <th style="text-align:center;" class="col-md-2 t ">Action</th>
                                <th style="text-align:center;" class="col-md-2 t "></th>
                            </thead>
                            <tbody>
                                @foreach($visual as $visual)
                                    <tr class="table_row">
                                        <td style="text-align:center;"><input type="text"  class="form-control table_data "   name="id" value="{{$visual->id}}"></td>
                                        <td style="text-align:center;"><input type="text"  class="form-control table_data "   name="user_id" value="{{$visual->user_id}}"></td>
                                        <td style="text-align:center;"><input type="text" class="form-control table_data"   name="view" value="{{$visual->view}}"></td>
                                        <td style="text-align:center;"><img src="{{url('images/'.$visual->image)}}"   name="image" width="50px" height="50px" alt="" class="rounded-0 border border-secondary table_data"><input type="file" name="image"> </td>
                                        <td style="text-align:center;"><input type="text"  class="form-control table_data"  name="feedback" value="{{$visual->feedback}}"></td>
                                        <td style="text-align:center;"><input type="text"  class="form-control table_data"  name="action" value="{{$visual->action}}"></td>
                                        <td style="text-align:center;"><a href="/details/{{$visual->id}}/{{$visual->user_id}}"><input type="submit" name="submit" value="Submit" class="btn text-white table_data" style="background:#06064b "></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
				</div>
			</div>
		</main>
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
