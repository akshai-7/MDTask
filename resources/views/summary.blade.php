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
            body {
                background: var(--grey);
                overflow-x: hidden;
                font-family: 'Times New Roman', Times, serif;
            }

                #content {
                    position: relative;
                    width: calc(100% - 280px);
                    left: 100px;
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
                button{
                    color:	#228B22;
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
                    overflow: hidden;
                }
                 button.active {
                /* background-color:#0d6efd; */
                color: #0d6efd;
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
        {{-- <section id='content'>
            <main>
                <div class="button">
                <button class="tablinks " onclick="openCheck(event, 'Visual')" id="defaultOpen"><h5 >Visual Damage</h5></button>
                <button class="tablinks" onclick="openCheck(event, 'Vehicle')"><h5 >Vehicle Check</h5></button>
                <button class="tablinks" onclick="openCheck(event,'Cabin')"><h5 >Cabin Checks</h5></button>
              </div>
            </main>

        </section> --}}
        <div><h5 >Visual Damage</h5></div>
        <div id="Visual" class="tabcontent">
            <section id="content">
                <main>
                    <div class="table-data">
                        <div class="order">
                            <table class="" >
                                    <thead class=" col-md-1">
                                        <th style="text-align:center;" class="text-primary">View</th>
                                        <th style="text-align:center;" class="text-primary">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($visual as $visual)
                                            <tr>
                                                <td style="text-align:center;">{{$visual->view}}</td>
                                                <td style="text-align:center;">{{$visual->action}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </section>
        </div>
        <div><h5 >Visual Damage</h5></div>
        <div id="Vehicle" class="tabcontent">
            <section id="content">
                <main>
                    <div class="table-data">
                        <div class="order">
                            <table class="col-md-1">
                                    <tbody>
                                        @foreach($vehicle as $vehicle)
                                         <tr>
                                            <td style="text-align:center;">{{$vehicle->view}}</td>
                                            <td style="text-align:center;">{{$vehicle->action}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </section>
        </div>
        <div><h5>Visual Damage</h5></div>
        <div id="Cabin" class="tabcontent">
            <section id="content">
                <main>
                    <div class="table-data">
                        <div class="order">
                            <table class="col-md-1">
                                    <tbody>
                                        @foreach($cabin as $cabin)
                                            <tr>
                                                <td style="text-align:center;">{{$cabin->view}}</td>
                                                <td style="text-align:center;">{{$cabin->action}}</td>
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

//sidebar
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
