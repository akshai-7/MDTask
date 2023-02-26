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
                --nav-width: 68px;
                --first-color: #4723D9;
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
                color: var(--first-color);
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
                width: 85%;

                left: 120px;
                transition: .3s ease;
            }
            #content main {
                width: 120%;

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
                color: black;
                text-align: left;
                border-bottom: 1px solid var(--grey);
            }
            #content main .table-data .order table td {
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
		<main>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 class=""  style="color:	#06064b;">Cabin Checks</h3>
					</div>
                    <form action="/cabinupdate/{user_id}" method="POST" autocomplete="off">
                        @csrf
                        <table class="" style="width:1100px">
                            <thead class="">
                                <th style="text-align:center;" class="col-md-1 ">Id</th>
                                <th style="text-align:center;" class="col-md-1 " >User_id</th>
                                <th style="text-align:center;" class="col-md-2 ">View</th>
                                <th style="text-align:center;" class="col-md-2 ">Image</th>
                                <th style="text-align:center;" class="col-md-3 ">Feed Back</th>
                                <th style="text-align:center;" class="col-md-2 t ">Action</th>
                            </thead>
                            <tbody>
                                @foreach($cabin as $cabin)
                                    <tr class="table_row ">
                                        <td style="text-align:center;"><input type="text"  class="form-control table_data"   name="id" value="{{$cabin->id}}"></td>
                                        <td style="text-align:center;"><input type="text"  class="form-control table_data"   name="user_id" value="{{$cabin->user_id}}"></td>
                                        <td style="text-align:center;"><input type="text" class="form-control table_data"   name="view" value="{{$cabin->view}}"></td>
                                        <td style="text-align:center;"><img src="{{url('images/'.$cabin->image)}}"  width="50px" height="50px" class="rounded-0 border border-secondary table_data" alt=""><input type="file" name="image"></td>
                                        <td style="text-align:center;"><input type="text"  class="form-control table_data"  name="feedback" value="{{$cabin->feedback}}"></td>
                                        <td style="text-align:center;"><a href="/details/{{$cabin->id}}/{{$cabin->user_id}}"><input type="submit" name="submit" value="Submit" class="btn btn-primary table_data"></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
				</div>
			</div>
		</main>
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
