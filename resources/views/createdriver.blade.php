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
                transition:0.3s ease;
            }
            #content main {
                width: 100%;
                padding: 36px 24px;
                font-family: var(--poppins);
                max-height: calc(100vh - 56px);
                overflow-y: auto;
            }
            #content main .table-data {
                margin-top: 30px;
            }
            #content main .table-data > div {
                border-radius: 4px;
                background: var(--light);
                padding: 24px;
                overflow-x: auto;
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
            form{
                display: flex;
            }
            #report{
                /* margin-left: 100px; */

            }
            #report1{
                margin-right: 170px;

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
				<div class="left" >
					<h2 class="text-black">Dashboard</h2>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 class="text-success">New Driver</h3>
					</div>
                   <form action="/" method="POST" autocomplete="off">
                    @csrf
                   <div class="form-group row" id="report">
                        <div class="">
                            <label for="" class="col-sm-3 col-form-label">Name</label>
                            <input type="text" required name="name"  />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Company</label>
                            <input type="text" required name="company"  />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Email</label>
                            <input type="text" required name="email" />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Date</label>
                            <input type="text" required name="date" />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">NumberPlate</label>
                            <input type="text" required name="number_plate" />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Mileage</label>
                            <input type="text" required name="mileage" />
                        </div>
                   </div>
                    <div class="form-group row" id="report1">
                        <h5 align="left" class="text-success">Report On Incident</h5>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Date-of-incident</label>
                            <input type="text" required name="date_of_incident" />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Location</label>
                            <input type="text" required name="location" />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Witnessed-by</label>
                            <input type="text" required name="witnessed_by" />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Phone</label>
                            <input type="text" required name="phone_number_of_witness" />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Statement</label>
                            <input type="text" required name="brief_statement" />
                        </div>
                        <div>
                            <label for="" class="col-sm-3 col-form-label">Image</label>
                            <input type="file" required name="upload_image" />
                        </div>
                    <div>
                        {{-- <input type="submit" value="Login" > --}}
                    </div>
                   </form>
				</div>
			</div>
		</main>
	</section>
</body>
</html>
