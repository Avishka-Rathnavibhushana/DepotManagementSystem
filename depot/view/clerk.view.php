<?php


include "../includes/class-autoload.inc.php";
session_start();


	if (!isset($_SESSION['userId'])) {
		header("location:index.php");
	}

	$CtrlFac = new ControllerFactory();
	$clerkObj = $CtrlFac->getController("CLERK");

	$buslis = $clerkObj->giveBus();
	$routelis = $clerkObj->giveDesti();
	$conlis = $clerkObj->giveConductor();
	$driverlis = $clerkObj->giveDriver();
	//$ticketbooklist = $clerkObj->giveTicketBook();
	$timeslot = $clerkObj->giveTimeslot();

	if (isset($_POST['add'])) {
		$feild = $_POST;
		//print_r($feild);
		$clerkObj->addNewDuty($feild);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<title>Clerk Dashbord</title>
</head>
<body>
<?php include '../includes/headerpart.php'; ?>

	<main>

		<h2>Add New Duty Record</h2>
		<div>
			<?php
				if (isset($_GET['error'])) {
					if ($_GET['error']=='no') {
						echo "<p>Add New Duty</p>";
					}
					else{
						echo "<p>Sellect All Values</p>";
					}

				}

			 ?>


		</div>
			<form action="clerk.view.php" method="post" style="width:500px;margin-left: 200px;">
			  <div class="form-group">
			    <label for="formGroupExampleInput">BUS ID: </label>
			    	<select name="busno" id="" style="width:500px;">
						<option value="0">Select Bus</option>
						<?php echo $buslis; ?>
					</select>
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">DESTINATION: </label>
			    	<select name="desti" id="" style="width:500px;">
						<option value="0">Select Destination</option>
						<?php echo $routelis; ?>
					</select>
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">DRIVER: </label>
			    	<select name="driver" id="" style="width:500px;">
						<option value="0">Select Driver</option>
						<?php echo $driverlis; ?>
					</select>
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">CONDUCTOR: </label>
			    	<select name="conductor" id="" style="width:500px;">
						<option value="0">Select Conductor</option>
						<?php echo $conlis; ?>
					</select>
			  </div>


			<label for="">Today is <?php echo date("l"); ?></label>
			  <div class="form-group">
 					<label for="appt">Select a Dispatch time:</label>
  					<select name="timeslot" id="" style="width:500px;">
						<option value="0">Select Time</option>
						<?php echo $timeslot; ?>
					</select>
			  </div>

			   <div class="form-group">
	             <input type="submit" value="AddDuty" name="add" class="btn btn-primary py-2 px-4">
	           </div>
			</form>



			<!-- test chart -->


	</main>
</body>
</html>
