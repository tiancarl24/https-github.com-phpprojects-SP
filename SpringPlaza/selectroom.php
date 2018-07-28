<?php
include "utils.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Hotel Spring Plaza</title>
	<meta name="description"
	content="Accomodation is developed for hotels, motels, guest house and accommodation planning like Vacation Rentals, Homes, Apartments & Rooms and much more.">
	<meta name="author" content="Themeinjection.com">

	<!-- Bootstrap -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Bootstrap 3 Date Picker -->
	<link href="bower_components/bootstrap-3-datepicker/dist/css/bootstrap-datepicker.min.css" rel='stylesheet' type='text/css'>

	<!-- Google Open Sans Font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<!-- Font Awesome -->
	<link href="bower_components/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

	<!-- Animate Css -->
	<link href="bower_components/animate.css/animate.min.css" rel='stylesheet' type='text/css'>

	<!-- Simple Line Icons -->
	<link href="bower_components/simple-line-icons/css/simple-line-icons.css" rel='stylesheet' type='text/css'>


	<!-- Theme Style -->
	<link rel="stylesheet" href="css/styles.css">
    <!-- Available main styles: styles-blue.css, styles-green.css, styles-orange.css, styles-pink.css,
    	styles-violet.css, styles-gray.css-->

    	<style>
    	form .website_hp{
    		display: none;
    	}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="img/ico/favicon.png">

</head>
<body>
	<div id="page-top"></div>

	<!--Navigation Top start-->
	<section class="top-navbar container navbar-fixed-top">
		<nav class="navbar navbar-default" id="navigation-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--Brand / Logo start-->
				<a class="navbar-brand scroll-to" href="#page-top">
					<img src="img/navbar-logo.png" class="img-responsive" alt="Accommodation Landing Page"/>
				</a>
				<!--Brand / Logo end-->
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			</div>
		</div>
	</nav>
</section>
<!--Navigation Top end-->
<!--Teaser Slider end-->

<!--Start content before Slider-->
<div class="content-after-slider">
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
		<div class="header">
			<div class="bg-color">
				<header id="main-header">
					<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container">
						</div>
					</nav>
				</header>
				<div class="wrapper">
					<div class="container">
						<br>
						<div class="row">
							<br>
							<br>
							<br>
							<form method="GET" action="reservationdetails.php">
								<?php 
								$RTYPE = $_GET['cboRoom'];
								$CIN = $_GET['dtCheckIN'];
								$COUT = $_GET['dtCheckOUT'];
								$ADULT = $_GET['txtAdult'];
								$CHILD = $_GET['txtChild'];
								$FNAME = $_GET['txtFirstname'];
								$LNAME = $_GET['txtLastname'];
								$ADDRESS = $_GET['txtAddress'];
								$ZIPCODE = $_GET['txtZipcode'];
								$CITY = $_GET['txtCity'];
								$PHONE = $_GET['txtPhone'];
								$EMAIL = $_GET['txtEmail'];

								$dayin = explode('/', $CIN);
								$dayin = intval($dayin[1]);

								$dayout = explode('/', $COUT);
								$dayout = intval($dayout[1]);

								$DAYS = $dayout - $dayin;

								wr("<input type='hidden' value='$CIN'>");
								wr("<input type='hidden' value='$COUT'>");
								wr("<input type='hidden' value='$ADULT'>");
								wr("<input type='hidden' value='$CHILD'>");
								wr("<input type='hidden' value='$RTYPE'>");
								wr("<input type='hidden' value='$FNAME'>");
								wr("<input type='hidden' value='$LNAME'>");
								wr("<input type='hidden' value='$ADDRESS'>");
								wr("<input type='hidden' value='$ZIPCODE'>");
								wr("<input type='hidden' value='$CITY'>");
								wr("<input type='hidden' value='$PHONE'>");
								wr("<input type='hidden' value='$EMAIL'>");
								wr("<input type='hidden' value='$DAYS'>");
								wr('<br>');
								wr("<h3 class='hometext'>Select Available Room</h3>");
								DBOpen();
								$rs = DBGetData(" SELECT roomimage.filename, roominformation.roomdescription, roominformation.roomtype, roominformation.roomprice, roominformation.roomavailability, roominformation.roomid, roominformation.id, roominformation.roomno from roomimage join roominformation on roomimage.roomid = roominformation.roomid where roominformation.roomtype LIKE '%$RTYPE%' and roominformation.roomavailability = 'Available' ");

								wr(" <table id = 'tblSelectRoom' name = 'tblSelectRoom' class = 'table' style = 'font-size: 13px;'> ");
								wr(" <thead style='color: orange; border: none;'> ");
								wr(" <tr> ");
								wr(" <th> ROOM PIC </th> ");
								wr(" <th> ROOM ID </th> ");
								wr(" <th> ROOM TYPE </th> ");
								wr(" <th> ROOM DESCRIPTION </th> ");
								wr(" <th> PRICE </th> ");
								wr(" <th> <center>ACTION</center> </th> ");			
								wr(" </tr> ");
								wr(" </thead> ");
								wr(" <tbody style='color: orange; font-size: 20px;'> ");



								foreach($rs as $rs)
								{

									$array1 = array(
										'CIN' => $CIN,
										'COUT' => $COUT,
										'ADULT' => $ADULT,
										'CHILD' => $CHILD,
										'RTYPE' => $RTYPE,
										'IMAGE' => $rs[0],
										'DESCRIPTION'=> $rs[1],
										'AMOUNT' => $rs[3],
										'AVAILABILITY' => $rs[4],
										'ROOMNO' => $rs[7],
										'DAYS'	=>	$DAYS,
										'FNAME'	=>	$FNAME,
										'LNAME'	=>	$LNAME,
										'ADDRESS'	=>	$ADDRESS,
										'ZIPCODE'	=>	$ZIPCODE,
										'CITY'	=>	$CITY,
										'PHONE'	=>	$PHONE,
										'EMAIL'	=>	$EMAIL,
									);



									wr(" <tr> ");
									wr(" <td><img src='../HotelReservation/Function/RoomImages/$rs[0]' style='width: 100%; height:190px;'></td> ");
									wr(" <td>$rs[7]</td> ");
									wr(" <td>$rs[1]</td> ");
									wr(" <td>$rs[2]</td> ");
									wr(" <td>₱ $rs[3]</td> ");
									wr(" <td style='text-align:center;'><a href ='reservationdetails.php?Data=".json_encode($array1)."'>BOOK NOW!!</a></td> ");						
									wr(" </tr> ");
								}
								wr(" </tbody> ");
								wr(" </table> ");
								DBClose();
								wr('<br>');


								?>
							</form>
						</div>
					</div>
				</div>
			</div>
			<section id="contact" class="section-padding wow fadeIn delay-05s">
				<div class="container">
					<div class="row">
						<center>
							© Copyright <a href="index.php" onclick="return confirm('Are you sure to Cancel your Reservation?');"> SPRING PLAZA HOTEL </a>. All Rights Reserved
						</center>
						<br>
					</div>
				</div>
			</section>
		</body>
		</html>
		<script type="text/javascript">
			var ctr;
			var ctr_ID;
			var tblSelectRoom = $('#tblSelectRoom').DataTable();
			$('#tblSelectRoom').on( 'click', 'tr', function () 
			{
				var tblBudget = $('#tblSelectRoom').DataTable();
				if ( $(this).hasClass('selected') )
				{
					$(this).removeClass('selected');
					ctr_ID = null;
				}
				else 
				{
					tblSelectRoom.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
					ctr = tblSelectRoom.row(this).data();
					ctr_ID = ctr[0];
				}
			}); 
		</script>
