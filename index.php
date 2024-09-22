<?php



?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: hidden;
            background-color: #ad3dbe8a;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #1e90ff;
            color: black;
        }

        .header a.active {
            background-color: red;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }

        .container {
            display: inline-block;
            cursor: pointer;
            padding-left: 100px;
            padding-right: 20px;
        }

        .bar1,
        .bar2,
        .bar3 {
            width: 35px;
            height: 5px;
            background-color: #333;
            margin: 6px 0;
            transition: 0.4s;
        }

        .change .bar1 {
            transform: translate(0, 11px) rotate(-45deg);
        }

        .change .bar2 {
            opacity: 0;
        }

        .change .bar3 {
            transform: translate(0, -11px) rotate(45deg);
        }
    </style>
</head>

<body>
<header>
    <div class="header">
        <a href="#default" class="logo">Student Management System </a>
        <div class="header-right">
            <a class="active" href="#home"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>

                <div class="container" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
       
        </div>
    </div>
    </header>
    <div style="padding-left:20px">
        <h1>Responsive Header</h1>
        <p>Resize the browser window to see the effect.</p>
        <p>Some content..</p>
    </div>

</body>

</html>


<script>
        function myFunction(x) {
            x.classList.toggle("change");
            var links = document.getElementById("myLinks");
            if (links.className === "header-right") {
                links.className += " responsive";
            } else {
                links.className = "header-right";
            }
        }
</script>