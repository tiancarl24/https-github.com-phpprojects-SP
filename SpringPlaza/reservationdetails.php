<?php 
include 'utils.php';
?>
<?php 
$RNo = json_decode($_GET['Data'],true);
$TOTAL = intval($RNo['AMOUNT']) * intval($RNo['DAYS']);
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
<div class="wrapper">
	<div class="container">
		<form method="POST" action="function/AddReservation.php">
			<?php 
			wr('<textarea name="data" style="visibility: hidden">'.json_encode($RNo).'</textarea>');
			wr('<input type="hidden" id="fname" name="fname" value="'.$RNo['FNAME'].'" >');
			wr('<input type="hidden" id="fname" name="lname" value="'.$RNo['LNAME'].'" >');	
			?>
			<div class="row">
				<br>
				<br>
				<br>
				<br>
				<br>
				<div style="width: 80%; height: auto; border: solid 2px black; margin-right: auto; margin-left: auto; display: block;">
					<div style="padding: 10px; color: orange; font-size: 20px;">
						<h2 class="hometext"><center>Personal Details</center></h2>
						<br>
						<div class="row">
							<div class="col-md-6">
								<label>NAME :</label><input type="text" class="LabelInput" id="name" name="name" value="<?php echo $RNo['FNAME'] ?> <?php echo $RNo['LNAME'] ?>" >
							</div>
							<div class="col-md-6">
								<label>ADDRESS :</label><input type="text" class="LabelInput" id="address" name="address" value="<?php echo $RNo['ADDRESS'] ?>" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>CITY :</label><input type="text" class="LabelInput" id="city" name="city" value="<?php echo $RNo['CITY'] ?>" >
							</div>
							<div class="col-md-6">
								<label>ZIPCODE :</label><input type="text" class="LabelInput" id="zipcode" name="zipcode" value="<?php echo $RNo['ZIPCODE'] ?>" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>PHONE :</label><input type="text" class="LabelInput" id="phone" name="phone" value="<?php echo $RNo['PHONE'] ?>" >
							</div>
							<div class="col-md-6">
								<label>EMAIL :</label><input type="text" class="LabelInput" id="email" name="email" value="<?php echo $RNo['EMAIL'] ?>" >
							</div>
						</div>
					</div>
					<!-- RESERVATION -->
					<div style="padding: 10px; color: orange; font-size: 20px;">
						<h2 class="hometext"><center>Reservation Details</center></h2>
						<br>
						<div class="row">
							<label></label>
							<div class="col-md-6">
								<label>CHECK IN :</label><input type="text" class="LabelInput" id="cin" name="cin" value="<?php echo $RNo['CIN'] ?>" >
							</div>
							<div class="col-md-6">
								<label>CHECK OUT :</label><input type="text" class="LabelInput" id="cout" name="cout" value="<?php echo $RNo['COUT'] ?>" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>ROOM NO :</label><input type="text" class="LabelInput" id="roomno" name="roomno" value="<?php echo $RNo['ROOMNO'] ?>" >
							</div>
							<div class="col-md-6">
								<label>ROOM TYPE  :</label><input type="text" class="LabelInput" id="roomtype" name="roomtype" value="<?php echo $RNo['RTYPE'] ?>" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>ADULT :</label><input type="text" class="LabelInput" id="adult" name="adult" value="<?php echo $RNo['ADULT'] ?>" >
							</div>
							<div class="col-md-6">
								<label>CHILDREN :</label><input type="text" class="LabelInput" id="children" name="children" value="<?php echo $RNo['CHILD'] ?>" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>PRICE :</label><input type="text" class="LabelInput" id="price" name="price" value="<?php echo $RNo['AMOUNT'] ?>" >
							</div>
							<div class="col-md-6">
								<label>TOTAL DAYS :</label><input type="text" class="LabelInput" id="days" name="days" value="<?php echo $RNo['DAYS'] ?>" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-6">
								<label>TOTAL FEES :</label><input type="text" class="LabelInput" id="totalprice" name="totalprice" value="<?php echo $TOTAL ?>" >
							</div>
						</div>	
					</div>

					<br>
					<div class="row">
						<div class="col-md-4">
							<input type="submit" id="btnPayinbank" class="btn btn-inquiry-submit col-md-12" style="background-color: orange; color: white;" name="btnPayinbank" value="PAY IN BANK">
						</form>
					</div>
					<div class="col-md-4">
						<form method="POST" action="checkout.php">
							<input type="submit" id="btnPaypal" name="btnPaypal" class="btn btn-inquiry-submit col-md-12" style="background-color: orange; color: white;" value="PAY ONLINE">
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>





	<script type="text/javascript">
		var ctr;
		var ctr_ID;
		var tableForAudit = $('#tblResDetails').DataTable();
		$('#tblResDetails').on( 'click', 'tr', function () 
		{
			var tblBudget = $('#tblResDetails').DataTable();
			if ( $(this).hasClass('selected') )
			{
				$(this).removeClass('selected');
				ctr_ID = null;
			}
			else 
			{
				tableForAudit.$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
				ctr = tableForAudit.row(this).data();
				ctr_ID = ctr[0];

			}
		}); 
	</script>
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
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>
</body>
</html>

