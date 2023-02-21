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
            #sidebar {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                height: 100%;
                background: var(--light);
                z-index: 2000;
                font-family: var(--lato);
                transition: .3s ease;
                overflow-x: hidden;
                scrollbar-width: none;
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
                width: calc(100% - 280px);
                left: 280px;
                transition: .3s ease;
            }
            #content main {
                width: 100%;
                padding: 36px 24px;
                font-family: var(--poppins);
                max-height: calc(100vh - 56px);
                overflow-y: auto;
            }
            #content main .table-data {
                display: flex;
                flex-wrap: wrap;
                grid-gap: 24px;
                margin-top: 24px;
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
                /* font-size: 24px; */
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
            #content main .table-data .order table tr td .status {
                font-size: 10px;
                padding: 6px 16px;
                color: var(--light);
                border-radius: 20px;
                font-weight: 700;
            }
            .log{
                margin-top: 20px;
                margin-left: 40px;
                font-size: 20px;
            }
            .board{
                margin-top: 150px;
                 margin-left: 40px;
                font-size: 20px;
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

	<!-- CONTENT -->
	<section id="content">
		<main>
			<div class="head-title">
				<div class="left">
					<h2 class="text-secondary">Dashboard</h2>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 class="text-success">Driver Details</h3>
                        {{-- <a href="/createdriver/{user_id}"><input type="submit" value="Add-User" class="text-primary" id="add"></a> --}}
                        {{-- @dd($id); --}}
					</div>
                    <table class="" >
                        <thead class="text-primary">
                            <th style="text-align:;">S.No</th>
                            <th style="text-align:center;">Driver Name</th>
                            <th style="text-align:center;">Company</th>
                            <th style="text-align:center;">Email</th>
                            <th style="text-align:center;">Phone</th>
                            <th style="text-align:center;" class="text-primary">Number Plate</th>
                            <th style="text-align:center;">Creation Date</th>
                            <th style="text-align:center;">Action</th>

                        </thead>
                        <tbody>
                            @foreach($driver as $driver)

                                 <tr>
                                    <td style="text-align:center;">{{$loop->iteration}}</td>
                                    <td style="text-align:center;">{{$driver->drivername}}</td>
                                    <td style="text-align:center;">{{$driver->company}}</td>
                                    <td style="text-align:center;">{{$driver->deliveryemail}}</td>
                                    <td style="text-align:center;">{{$driver->phone}}</td>
                                    <td style="text-align:center;">{{$driver->report->number_plate}}</td>
                                    <td style="text-align:center;">{{$driver->created_at}}</td>
                                    <td style="text-align:center;">
                                    <a href="/report/{{$driver->user_id}}"><i class="fa-solid fa-eye btn btn-primary" ></i></a>
                                    <a href="/createdriver/{{$driver->user_id}}"><i class="fa-solid fa-plus btn btn-success"></i></a>
                                    <a href="/remove/{{$driver->id}}" ><i class="fa-solid fa-trash btn btn-danger"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
				</div>

			</div>
		</main>
	</section>
</body>
</html>
