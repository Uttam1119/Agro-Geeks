<?php
     include("../Functions/functions.php");
     ?>
<!DOCTYPE html>

<html lang="hi">
<head>
     <meta charset="UTF-8">
    <title>Rental Form</title>
    
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;500;600;700&family=Lora:ital,wght@1,400;1,500;1,600&family=Merriweather&family=Montserrat&family=Sacramento&family=Tiro+Devanagari+Hindi&family=Varela&family=Varela+Round&display=swap" rel="stylesheet"> -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<a href="https://icons8.com/icon/83325/roman-soldier"></a>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <style>
        * {
             margin: 0;
             box-sizing: border-box;
        }


        .header {
             position: sticky;
             z-index: 100;
             top: 0rem;
             height: 69px;
             width: 100%;
             background-color: #00b300;
        }

        .select_element {
             width: 20px;
             background-color: transparent;
             border: none;
             /* text: none; */
        }


        #logo {
             height: 66px;
             width: 100px;
             text-align: left;
             float: left;
        }

        .search_input {
             float: left;
             margin-left: 50px;
             margin-top: 20px;

        }

        .proicon {
             float: right;
             margin-right: 10px;
             margin-top: 20px;
        }

        .dropdown {
             float: right;
             margin-right: 35px;
             margin-top: 20px;

        }

        .options {
             color: yellow;
             margin-left: 20px;
             /* width: 25px; */
             margin-right: 50px;
             display: inline;
        }

        .icon2 {
             float: right;
             margin-right: 10px;
             margin-top: 20px;

        }

        .loginz {
             float: right;
             margin-right: 20px;
             margin-top: 20px;
        }

        .headerdown {
             margin-left: 15%;
             height: 50px;
             width: 80%;
        }

        .makeitgreen {
             color: #00b300;
        }

        .sel1 {
             color: green;
             float: left;
             margin-top: 3px;
        }

        .sel2 {
             border-color: green;
             color: green;
             float: left;
             margin-left: 600px;
             margin-top: 3px;
        }

        .sel3 {
             font-size: 20px;
             margin-top: 3px;
             float: right;
             margin-right: 5px;
        }



        #input1 {
             width: 220px;
             border: none;
        }


        #input1:active {
             background-color: tomato;
        }


        .wrapper {
             display: grid;
             grid-template-columns: 20% 20% 20% 20%;
             grid-column-gap: 20px;
             grid-row-gap: 10px;
             grid-column-gap: 20px;
             grid-row-gap: 10px;
             margin-left: 30px;
        }

        .inputwrapper {
             float: left;
             border-style: double;
             text-align: center;
             margin-left: 80px;
             width: 280px;
             margin-bottom: 20px;
             clear: auto;
        }


        .inputwrapper:last-child {
             margin-right: 30px;
        }

        .addtocart {
             background-color: #FFD700;
        }

        .numberinput {
             width: 35px;
        }

        .content_item {
             text-align: center;
             justify-content: center;
        }

        .etc {
             margin-left: -40px;
             min-width: 90px;
             font-size: 20px;
        }

        .crop_items {
             color: green;
        }

        .footer {
             height: 70px;
             width: 100%;
             clear: both;
        }

        .payment {
             float: left;
             margin-left: 520px;
             font-size: 20px;
             margin-top: 25px;
        }

        .cash {
             float: left;
             margin-top: 0px;
             margin-left: 20px;
             margin-right: 20px;
        }

        .paytm {
             float: left;
        }

        h3 {
             width: 100%;
             text-align: center;
             border-bottom: 1px solid #000;
             line-height: 0.1em;
             margin: 10px 0 20px;
        }

        h3 span {
             background: #fff;
             padding: 0 10px;
        }

        .morefooter {
             height: 100px;
             width: 100%;
             background-color: white;

        }

        .call {
             float: left;
             font-size: 20px;
             margin-left: 150px;
             margin-top: 25px;
        }

        .gmail {
             margin-top: 10px;
             float: right;
             margin-right: 150px;

        }

        .instagram {
             margin-top: 10px;
             float: left;
             margin-left: 420px;
        }

        .instaid {
             height: 10px;
             width: 100%;

        }

        .text {
             float: left;
             margin-left: 735px;
             margin-top: -50px;
        }

        .gmailid {
             float: right;
             margin-right: 80px;
             margin-top: -60px;
        }

        .copy {
             float: left;
             margin-top: -65px;
        }

        body {
             margin: 0;
             padding: 0;
             font-family: sans-serif;
             background-size: cover;
             background-position: center;
             box-sizing: border-box;
        }

        .wrapper {
             background-image: 100px;
        }

        .add_button {
             float: right;
             text-align: center;
        }


        h1 {
             font-family: 'Times New Roman', Times, serif;
             color: white;

        }

        .lost {
             /* <font-fam></font-fam>; */
             color: black;
             text-align: center;
             height: 8%;
             margin-top: 150px;
             border-radius: 30px;
             font-size: 30px;
             /* margin-top: 5em; */
             background-color: olive;
             margin-top: 120px;
             margin: auto;
        }

        .new {
             text-align: center;
        }

        .button {
             position: relative;
             float: right;
        }

        h2 {
             color: white;
             margin-top: 3em;
             text-align: center;

        }

        .hii {
             float: right;
             margin-right: 5em;
        }

        .ribbon {
             position: relative;
             top: -16px;
             right: -706px;
             float: left;
             top: 0px;
             left: 0px;
             height: 74px;
             background-color: green;
        }

        .over {
             background-color: green;
             border: 1px;
             width: 100%;
             white-space: nowrap;
             height: 70px;


        }

        .subtract {
             float: right;
             border-color: olive;
             margin-top: 2%;
             text-align: center;
             border-radius: 25px;
        }


        .wrapper {
             background-image: 100px;
        }

        .add_button {
             float: right;
             text-align: center;
        }


        h1 {
             font-family: 'Times New Roman', Times, serif;
             color: white;

        }

        .lost {
             font-family: Verdana, Geneva, Tahoma, sans-serif;
             color: black;
             text-align: center;
             margin-top: 220px;
             margin: auto;
        }


        .new {
             text-align: center;
        }

        .button {
             position: relative;
             float: right;
        }

        h2 {
             color: white;
             margin-top: 3em;
             text-align: center;

        }

        .hii {
             float: right;
             margin-right: 5em;
        }

        .ribbon {
             position: relative;
             top: -16px;
             right: -706px;
             float: left;
             top: 0px;
             left: 0px;
             height: 74px;
             background-color: green;
        }

        .over {
             background-color: green;
             border: 1px;
             width: 100%;
             white-space: nowrap;
             height: 70px;


        }

        .subtract {
             float: right;
             border-color: olive;
             margin-right: 12%;
             background-color: #00b300;
             text-align: center;
             /* border-radius: 25px; */
             width: 9%;
             height: 8%;
             margin-top: -5%;
             padding: 5px;

        }

        .items {
             width: 100%;
             margin: auto;
             height: auto;
        }

        .productbox {
             float: left;
             margin: 15px;
             margin-left: 30px;
             padding: 15px;
             border-style: outline;
             border: 2px solid;
             border-color: green;
             border-radius: 10px;
        }

        .productbox:hover {
             float: left;
             margin: 25px;
             margin-left: 30px;
             padding: 20px;
             border-style: outline;
             border: 2px solid;
             border-color: green;
             border-radius: 5px;
             font-weight: bolder;
             height: 325px;
             width: 240px;

        }

        .slideshow {
             margin-top: 10px;
             margin-left: 100px;
             margin-bottom: 20px;
             float: left;
             border-style: solid;
        }

        #navbar {

             padding: 20px;
             color: green;
             text-decoration: none;
             margin: 20px;
             font-size: 25px;
             padding-top: 10px;
        }

        #navbar:hover {
             padding: 20px;
             color: green;
             text-decoration: underline;
             margin: 15px;
             font-size: 25px;
             font-weight: bolder;
             padding-top: 10px;
        }

        #navbar i {
             padding-right: 1%;
        }

        .time {
             background-color: red;
             /* margin-left: 20px; */
        }

        .whats {
             text-align: center;
             margin-left: 30%;
        }

        .f1 {
             float: left;
             background-color: #fff;
             border: 1px solid red;
             height: 200px;
             border-radius: 50%;
             width: 200px;
             padding-top: 20px;
             border-style: solid;
             background-image: url("../Images/Website/f2.jpg");
             background-size: 200px 200px;
             background-repeat: no-repeat;
             border-color: #000;
             /* opacity: 5%; */
        }

        .t1 {
             padding-top: 70px;
             text-align: center;
             justify-items: center;
             color: black;
             font-weight: bold;
        }

        .t5 {
             margin-top: -13px;
        }

        .t4 {
             margin-top: -13px;

        }

        .whatsnew {
             /* background-image: url("../Images/Website/back.jpeg"); */

             background-color: red;

        }

        .f2 {
             margin-left: 130px;
             margin-right: 150px;
        }

        .f3 {
             margin-right: 150px;

        }

        .f4 {
             margin-right: 150px;
        }

        .pictus {
             margin-top: 200px;
             /* background-color: red; */
        }

        .pictus>img {
             height: 100px;

             width: 150px;
        }

        .imag1 {
             margin-top: 20px;
             margin-left: 180px;
        }

        .imag2 {
             margin-top: 20px;

             margin-left: 340px;

        }

        .imag3 {
             margin-top: 20px;

             margin-left: 350px;

        }

        .imag1_under {
             max-width: 250px;
             width: 100%;
             min-height: 100px;
             margin-left: 100px;
             text-align: center;
             font-size: 20px;

        }

        .imag2_under {
             max-width: 250px;
             width: 100%;
             min-height: 100px;
             margin-left: 290px;
             margin-top: 20px;
             text-align: center;
             font-size: 20px;
        }

        .imag3_under {
             max-width: 250px;
             width: 100%;
             font-size: 20px;

             min-height: 100px;
             margin-left: 290px;
             text-align: center;
        }

        .image {
             max-width: 200px;
        }

        .aligncenter {
             text-align: center;
        }

        .myfooter {
             background-color: #292b2c;
             color: goldenrod;
             margin-top: 15px;
        }

        a {
             color: goldenrod;
        }

        .navbar-inverse {
             background: #00cc00;
             color: black;
        }

        .navbar-inverse .navbar-brand,
        .navbar-inverse a {
             color: black;
        }

        .navbar-inverse .navbar-nav>li>a {
             color: clack;
        }

        .caros {
             margin-top: 30px;

        }

        

        hr {
             border: 0;
             height: 0.5px;
             clear: both;
             display: block;
             width: 99%;
             background-color: black;
             margin-left: 0.5em;
        }

        img {
             max-width: 100%;
             display: inline-block;
        }

        * {
             margin: 0;
             padding: 0;
             box-sizing: border-box;
        }

        nav {
             background-color: #292b2c;
        }

        .navbar-custom {
             background-color: #292b2c;
        }

        /* change the brand and text color */
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
             background-color: #292b2c;
        }

        .navbar-custom .navbar-nav .nav-link {
             background-color: #292b2c;
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
             background-color: #292b2c;
        }

        .firstimage {
             height: 500px;
             width: 100%;
        }

        .mybtn {
             border-color: green;
             border-style: solid;
        }

        .card {
             width: 100%;
             height: 100%;
             margin: 10px;
        }

        .right {
             display: flex;
        }

        .left {
             display: none;
        }

        .cart {
             /* margin-left:10px; */
             margin-right: -9px;
        }

        .profile {
             margin-right: 2px;

        }

        .login {
             margin-right: -2px;
             margin-top: 12px;
             display: none;
        }

        .searchbox {
             width: 60%;
        }

        .lists {
             display: inline-block;
        }

        .moblists {
             display: none;
        }

        .logins {
             text-align: center;
             margin-right: -30%;
             margin-left: 35%;
        }



        /* For medium devices (e.g. tablets) */
        /* @media (min-width: 420px) {
            img {
            max-width: 48%;
            }
       } */
        /* For large devices (e.g. desktops) */
        @media (min-width: 760px) {
             .resizing {
                  height: 500px;
             }
        }

        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
             .image {
                  max-width: 48%;
             }

             .firstimage {
                  height: auto;
                  width: 90%;
             }

             .card {
                  width: 80%;
                  margin-left: 10%;
                  margin-right: 10%;

             }

             .col {
                  margin-top: 20px;
             }

             .right {
                  display: none;
                  background-color: #ff5500;
             }

             /* 
        .settings{
        margin-left:79%;
    } */
             .left {
                  display: flex;
             }

             .moblogo {
                  display: none;
             }

             .logins {
                  text-align: center;
                  margin-right: 35%;
                  padding: 15px;
             }

             .searchbox {
                  width: 95%;
                  margin-right: 5%;
                  margin-left: 0%;
             }

             .moblists {
                  display: inline-block;
                  text-align: center;
                  width: 100%;
             }


        }
   </style>

	<style>
		@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

		body{
    		background-repeat: no-repeat;
    		/* background-position: center center; */
    		text-align: center;
    		background-size: 100% 100%;
    		background-attachment: fixed;
		}
		.myfooter {
			background-color: #292b2c;

			color: goldenrod;
			margin-top: 15px;
		}

		#a {
			text-align: center;
			font-size: 25px;
			border-style: solid;
			/*margin-border-top: 8%;*/
			margin-top: 10%;
			margin-left: 28%;
			margin-right: 20%;
			margin-bottom: 18%;
			max-width: 40%;
			min-width: 20%;
		}

		.aligncenter {
			text-align: center;
		}

		a {
			color: goldenrod;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		nav {
			background-color: #292b2c;
		}

		.navbar-custom {
			background-color: #292b2c;
		}

		/* change the brand and text color */
		.navbar-custom .navbar-brand,
		.navbar-custom .navbar-text {
			background-color: #292b2c;
		}

		.navbar-custom .navbar-nav .nav-link {
			background-color: #292b2c;
		}

		.navbar-custom .nav-item.active .nav-link,
		.navbar-custom .nav-item:hover .nav-link {
			background-color: #292b2c;
		}


		.mybtn {
			border-color: green;
			border-style: solid;
		}


		.right {
			display: flex;
		}

		.left {
			display: none;
		}

		.cart {
			/* margin-left:10px; */
			margin-right: -9px;
		}

		.profile {
			margin-right: 2px;

		}

		.login {
			margin-right: -2px;
			margin-top: 12px;
			display: none;
		}

		.searchbox {
			width: 60%;
		}

		.lists {
			display: inline-block;
		}

		.moblists {
			display: none;
		}

		.logins {
			text-align: center;
			margin-right: -30%;
			margin-left: 35%;
		}

		body {
			margin: 0;
			font-size: .9rem;
			font-weight: 400;
			line-height: 1.6;
			color: #212529;
			text-align: left ! important;
			background-color: #f5f8fa;
			text-align: center;
			background-size: 100% 100%;

		}

		.my-form,
		.login-form {
			font-family: Raleway, sans-serif;
			/* margin-top: 8%; */
		}

		.my-form {
			padding-top: 1.5rem;
			padding-bottom: 1.5rem;
		}

		.my-form .row {
			margin-left: 0;
			margin-right: 0;
		}

		.login-form {
			padding-top: 1.5rem;
			padding-bottom: 1.5rem;
		}

		.login-form .row {
			margin-left: 0;
			margin-right: 0;
		}

		@media only screen and (min-device-width:320px) and (max-device-width:480px) {
			/* .mycarousel {
            display: none;
        }

        .firstimage {
            height: auto;
            width: 90%;
        }

        .card {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;

        }

        .col {
            margin-top: 20px;
        } */

			.right {
				display: none;
				background-color: #ff5500;
			}

			/* 
            .settings{
            margin-left:79%;
        } */
			.left {
				display: flex;
			}

			.moblogo {
				display: none;
			}

			.logins {
				text-align: center;
				margin-right: 35%;
				padding: 15px;
			}

			.searchbox {
				width: 95%;
				margin-right: 5%;
				margin-left: 0%;
			}

			.moblists {
				display: inline-block;
				text-align: center;
				width: 100%;
			}

			/* .pic{
        height:auto;
    } */

			/* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
		}
	</style>
</head>
<body>

    <!-- <form action="connect.php" method="POST">

        <div>
            <label for="fname">first name:</label>
            <input type="text" id="fname" name="fname" placeholder="Spongebob" required>
        </div>

        <br>

        <div>
            <label for="lname">last name:</label>
            <input type="text" id="lname" name="lname" placeholder="Squarepants" required>
        </div>

        <br>

        <div>
            <label for="phone">phone #:</label>
            <input type="tel" id="phone" name="phone" placeholder="(123)-456-7890">
        </div>

        <br>

        <div>
            <label for="address">address: </label>
            <input type="address" id="address" name="address" placeholder="enter your address here">
        </div>


        <div>
            <label for="quantity">quantity:</label>
            <input type="number" id="quantity" name="quantity" min="0" max="99" value="1">
        </div>
        
        <br>

        <div>
            <label for="date">Date of check out: </label>
            <input type="date" id="check_out" name="checkOut">
        </div>
        <br>

        <div>
            <label for="date">Date of Scheduled Return: </label>
            <input type="date" id="scheduled_return" name="scheduledReturn">
        </div>

        <br>

        <div>
            <label for="payment">payment:</label>
            <select id="payment" name="payment">
                <option value="paytm">Paytm</option>
                <option value="cash">Cash</option>
            </select>
        </div>
        
        
        <br>

        <div>
            <input type="reset">
        </div>

        <br>

        <div>
            <input type="submit">
        </div>

    </form> -->

    <nav class="navbar navbar-expand-xl ">
     <!-- <a href="#" class="navbar-brand">Academind</a> -->
     <div class=" flex-row-reverse left ">

          <div class="p-2">
               <!-- <div class="icon2">
         <a href="CartPage.php"> <i class="fa" style=" color:green ;font-size:20px;margin-top:-20px;margin-bottom:20px;">&#61562;</i></a> -->
               <!-- <span id="icon" style="color:green"> 5 </span>
     </div>  -->
          </div>
          <!-- <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;'></i></div> -->
          <a class="float-left" href="#">
               <img src="agro-logo.ico" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
          </a>
     </div>
     <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
     </button>
     <a class="float-left" href="farmerHomepage.php">
          <img src="agro-logo.ico" class="float-left mr-2 moblogo" alt="Logo" style="height:65px;">
     </a>
     <a href="farmerHomepage.php">
         <div style="color:green; font-size:20px;">AGRO-GEEKS</div>
     </a>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">



          <div class="proicon">

               <?php
                   if (!isset($_SESSION['phonenumber'])) {
                        echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '></div></a>";
                   }
                   ?>
          </div>

          <div class="list-group moblists">

               <?php
                   if (isset($_SESSION['phonenumber'])) {

                        echo "<a href='farmerprofile2.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                        echo "<a href='Transactions.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
                        echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                   } else {
                        echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '>Login</div></a>";
                   }
                   ?>
               <div class='loginz' style="text-align:center;">
                    <?php getFarmerUsername(); ?>
               </div>
          </div>
     </div>




     <div class=" flex-row-reverse right ">
          <div class="p-2 cart">
               <!-- <div class="icon2">
         <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green;margin-top:-20px;">&#61562;</i></a>
         <span id="icon" style="color:green"> 5 </span>
     </div> -->
               <div class='loginz'>
                    <?php getFarmerUsername(); ?>
               </div>
          </div>
          <div class="dropdown p-2 settings ">
               <button class="btn  dropdown-toggle text-success" style="margin-top:-20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               सेटिंग
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                        if (isset($_SESSION['phonenumber'])) {
                             echo "<a href='FarmerProfile.php' class='dropdown-item' style='padding-right:-20px;'>प्रोफ़ाइल
                             </a>";
                             echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>आदेश
                             </a>";
                             echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>लॉग आउट</a>";
                        } else {
                             echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                        }
                        ?>
               </div>
          </div>
     </div>
</nav>
   <br>
   <div class="row" style="text-align:center;">
     <div class="col-md-2 col-sm-12">
          <a href="farmerHomepage.php" id="navbar"><i class="fa fa-home" aria-hidden="true"></i><label>घर</label></a>
     </div>
     <div class="col-md-2 col-sm-12">
          <a href="MyProducts.php" id="navbar"><i class="fa fa-leaf" aria-hidden="true"></i><label>मेरे उत्पाद
</label></a>
     </div>
     <div class="col-md-3 col-sm-12">
          <a href="Transactions.php" id="navbar"><i class="fa fa-exchange" aria-hidden="true"></i><label>मेरे लेन-देन</label></a>
     </div>
     <div class="col-md-3 col-sm-12">
          <a href="rentalProducts.php" id="navbar"><i class="fa fa-tractor"></i><label>उपकरण किराए पर लें</label></a>
     </div>
     <div class="col-md-2 col-sm-12">
          <a href="CallCenter.php" id="navbar"><i class="fa fa-phone fa-rotate-vertical" aria-hidden="true"></i><label>कॉल सेंटर/एसएमएस
</label></a>
     </div>
</div>
   <hr>
    <main class="my-form">
		<div class="cotainer">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card" >
						<div class="card-header text-left" style="background-color:#292b2c">
							<h4  style="font-style:bold;color:goldenrod;text-align:left">किराये का फॉर्म</h4>
						</div>
						<div class="card-body border border-dark">
							<form name="my-form" action="connect.php" method="post">

								<div class="form-group row">
									<label for="fname" class="col-md-4 col-form-label text-md-right"><b>पहला नाम: </b></label>
									<div class="col-md-6">
										<input type="text" id="fname" class="form-control border border-dark" name="fname" placeholder="अपना पहला नाम दर्ज करें" required>
									</div>
								</div>
                                

								<div class="form-group row">
									<label for="lname" class="col-md-4 col-form-label text-md-right"><b>उपनाम: </b></label>
									<div class="col-md-6">
										<input id="lname" class="form-control border border-dark" type="text" name="lname" placeholder="अपना अंतिम नाम दर्ज करें" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="phone" class="col-md-4 col-form-label text-md-right"><b>फ़ोन: </b></label>
									<div class="col-md-6">
										<input id="phone" class="form-control border border-dark" type="tel" name="phone" placeholder="अपना मोबाइल संख्या दर्ज करे" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="address" class="col-md-4 col-form-label text-md-right"><b>पता: </b></label>
									<div class="col-md-6">
										<input id="address" class="form-control border border-dark" type="address" name="address" placeholder="अपना पता दर्ज करें" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="quantity" class="col-md-4 col-form-label text-md-right"><b>मात्रा: </b></label>
									<div class="col-md-6">
										<input id="quantity" class="form-control border border-dark" type="number" name="quantity" placeholder="आवश्यक मात्रा दर्ज करें" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="date" class="col-md-4 col-form-label text-md-right"><b>चेक आउट की तिथि </b></label>
									<div class="col-md-6">
										<input id="check_out" class="form-control border border-dark" type="date" name="checkOut" placeholder="Enter the date of check out" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="date" class="col-md-4 col-form-label text-md-right"><b>निर्धारित वापसी की तिथि: </b></label>
									<div class="col-md-6">
										<input id="scheduled_return" class="form-control border border-dark" type="date" name="scheduledReturn" placeholder="Enter the date of scheduled return" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="payment" class="col-md-4 col-form-label text-md-right"><b>भुगतान विधि: </b></label>
									<div class="col-md-6">
										<select name="payment" class="form-control border border-dark" id="payment" required>
                                            <option value="paytm">पेटीएम</option>
                                            <option value="cash">नकद</option>
                                        </select>
									</div>
								</div>

								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary text-left border border-dark" style="background-color:#292b2c;color:goldenrod" name="submit" value="submit">
                                                  जमा करे
									</button>
								</div>
								<br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

    <br> <br>
    <section id="footer" class="myfooter">
                <div class="container">
                     <div class="row text-center text-xs-center text-sm-left text-md-left">
                          <div class="col aligncenter">
                               <br>
                               <h5>भुगतान विकल्प</h5>
                               <img src="../Images/Website/paytm1.jpg" alt="paytm">
                               <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                          </div>
                     </div>
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                               <ul class="list-unstyled list-inline social text-center">
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                               </ul>
                          </div>

                     </div>
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                               <p><u><a href="https://www.agrocraft.com/">Agro-Geeks Corporation</a></u> किसानों और व्यापारियों के लिए एक मल्टीट्रेडिंग कंपनी है</p>
                               <p class="h6">Copy All right Reversed.<a class="text-green ml-2" href="https://www.google.com" target="_blank">Agro-Geeks</a></p>
                          </div>
                          </hr>
                     </div>
                </div>
           </section>
</body>
</html>

