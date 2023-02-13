<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>

    body {
    background: #DCDDDF;
    color: #000;
    font-family: 'Times New Roman', Times, serif;
    padding: 0;
    position: relative;
    }
    .clearfix:after,
    form:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }
    .container {
         margin: 200px auto;
         position: relative;
         /* width: 900px; */

     }
    #content {
        background: #f9f9f9;
        box-shadow: 0 1px 0 #fff inset;
        border: 1px solid #c4c6ca;
        margin: 0 auto;
        padding: 25px 0 0;
        position: relative;
        text-align: center;
        text-shadow: 0 1px 0 #fff;
        width: 400px;
    }
    #content h3 {
        color: #7E7E7E;
        /* font: bold 25px Helvetica, Arial, sans-serif; */
        letter-spacing: -0.05em;
        line-height: 20px;
        margin: 10px 0 30px;
    }
    #content h3:before,
    #content h3:after {
        content: "";
        height: 1px;
        position: absolute;
        top: 10px;
        width: 27%;
    }
    #content h3:after {
        background: rgb(126,126,126);
     right: 0;
    }
    #content h3:before {
     background: rgb(126,126,126);
     left: 0;
    }
    #content:after,
    #content:before {
    background: #f9f9f9;
    border: 1px solid #c4c6ca;
    content: "";
    display: block;
    height: 100%;
    left: -1px;
    position: absolute;
    width: 100%;
    }
    #content:after {
    -webkit-transform: rotate(2deg);
    -moz-transform: rotate(2deg);
    -ms-transform: rotate(2deg);
    -o-transform: rotate(2deg);
    transform: rotate(2deg);
    top: 0;
    z-index: -1;
    }
    #content:before {
    -webkit-transform: rotate(-3deg);
    -moz-transform: rotate(-3deg);
    -ms-transform: rotate(-3deg);
    -o-transform: rotate(-3deg);
    transform: rotate(-3deg);
    top: 0;
    z-index: -2;
    }
    #content form { margin: 0 20px; position: relative }
    #content form input[type="text"],
    #content form input[type="password"] {
    background: #eae7e7;
    border: 1px solid #c8c8c8;
    border-radius: 10px;
    margin: 0 0 5px;
    padding: 7px 7px 7px 7px;
    width: 80%;
    }

    #content form input[type="submit"] {
    background: rgb(254,231,154);
    border-radius: 30px;
    border: 1px solid #D69E31;
    color: #85592e;
    cursor: pointer;
    float: left;
    height: 35px;
    margin: 20px 0 35px 15px;
    position: relative;
    width: 120px;
    }
    .check{
       margin-right: 160px;
       margin-top: 10px;
       color:blue;
       font-size: 15px;
    }

    #content form a input{
        background: rgb(254,231,154);
        border-radius: 30px;
        border: 1px solid #D69E31;
        color: #85592e;
        cursor: pointer;
        float: right;
        height: 35px;
        margin: 20px 0 3px 15px;
        position: relative;
        width: 120px;

    }

</style>
</head>
<body>
    <div class="container">
        <section id="content">
            <form action="/index" method="POST" autocomplete="off">
                @csrf
                <h3 class="text-primary">Login Form</h3>
                <div>
                    <input type="text" placeholder="Enter Email" required name="email" />
                </div>
                <div>
                    <input type="password" placeholder="Password" required name="password" id="myInput" />
                    <label class="check"><input type="checkbox" onclick="myFunction()"> Show Password</label>
                </div>

                <div>
                    <input type="submit" value="Login" >
                    {{-- <a href="/register"><input type="button" value="Register"></a> --}}
                </div>
            </form>
        </section>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
</body>
</html>
