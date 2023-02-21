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
                /* --light: #0C0C1E; */
                /* --grey: #060714; */
                /* --dark: #FBFBFB; */
            }

            body {
                background: var(--grey);
                overflow-x: hidden;
                font-family: 'Times New Roman', Times, serif;
            }
             #sidebar {
                /* position: fixed; */
                /* top: 0;
                left: 0;
                width: 230px;
                height: 100%;
                background: var(--light);
                z-index: 2000;
                font-family: var(--lato);
                transition: .3s ease;
                overflow-x: hidden;
                scrollbar-width: none; */
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
                width: 85%;
                /* width: calc(100% - 280px); */
                left: 120px;
                transition: .3s ease;
            }
            #content main {
                width: 120%;
                /* padding: 36px 24px; */
                font-family: var(--poppins);
                max-height: calc(100vh - 56px);
                overflow-y: auto;s
            }
            #content main .table-data {
                margin-top: 80px;
            }

            #content main .table-data > div {
                border-radius:8px;
                background: var(--light);
                padding: 24px;
                overflow-x: auto;
                margin-right: 200px;
                /* position: fixed; */
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
                margin-top: 30px;
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


</style>
<body id="body-pd">
	<section id="sidebar">
     <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="{{('img/m-d-foundation.png')}}" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">M&D Foundations</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="/driver" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>
                    {{-- <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
                     <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a>
                      <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a>
                       <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div> --}}
            </div> <a href="/" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left" >
                    {{-- <h2 class="">Dashboard</h2> --}}
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3 class="text-success">User Details</h3>
                        <a href="/createuser"><input type="submit" value="Add-User" class="text-primary" id="add"></a>
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
                                 <tr>
                                    <td style="text-align:center;">{{$loop->iteration}}</td>
                                    <td style="text-align:center;">{{$user->name}}</td>
                                    <td style="text-align:center;">{{$user->email}}</td>
                                    <td style="text-align:center;">{{$user->role}}</td>
                                    <td style="text-align:center;">{{$user->created_at}}</td>
                                    <td style="text-align:center;">
                                    <a href="/driver/{{$user->id}}" ><i class="fa-solid fa-eye btn btn-primary" ></i></a>
                                    <a href="/updateuser/{{$user->id}}" ><i class="fa-solid fa-edit btn btn-success" ></i></i></a>
                                    <a href="/delete/{{$user->id}}" ><i class="fa-solid fa-trash btn btn-danger"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>
	</section>

	<!-- CONTENT -->

</body>



<script>
    document.addEventListener("DOMContentLoaded", function(event) {

   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to header
            headerpd.classList.toggle('body-pd')
            })
            }
        }

            showNavbar('header-toggle','nav-bar','body-pd','header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink(){
            if(linkColor){
            linkColor.forEach(l=> l.classList.remove('active'))
            this.classList.add('active')
            }
            }
            linkColor.forEach(l=> l.addEventListener('click', colorLink))

                // Your code to run since DOM is loaded and ready
   });
</script>
</html>
