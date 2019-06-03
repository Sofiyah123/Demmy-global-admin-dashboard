<!DOCTYPE html>
<html>
<head>
	<title>Demy Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script  src="jquery-3.3.1.min.js"></script>
	<script  src="bootstrap-3.3.7/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

</head>
<body>
	<!-- <div class="container-fluid"> -->
		<div class="header">
			<img src="images/demy_logo.png" class="img-responsive" width="300px" height="300px">
		</div>

		<div class="cont">
			<div class="topnav" id="myTopnav">
						<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					    	<i class="fa fa-bars"></i>
					  	</a>
					  
						  <a href="#home" <span style="padding-right:9px;"><i class="fa fa-dashboard" ></i></span>Dashboard</a>
						  <hr>

						  <a href="#news">
						  	<i class="fa fa-users" ></i>Customers
						  </a>
						  	<hr class="responsive">
						  <a href="#contact">Manage Referral</a>
						  	<hr class="responsive">
						  <a href="#about">Manage Network</a>
						  	<hr class="responsive">
						  <a href="wallet.php">Manage wallet</a><hr class="responsive">
						  <a href="glo_generate.php">
						  	<i class="fa fa-shopping-cart" style="margin-left:2px;"></i>Generate Glo Recharge</a>
						  		<hr class="responsive">
						  <a href="#about">
						  	<i class="fa fa-shopping-cart"style="margin-left:2px;"></i>Generate MTN Recharg
						  	e</a><hr class="responsive">
						  <a href="#about"><i class="fa fa-laptop" style="margin-left:2px;" ></i>Recharge Card Report</a><hr class="responsive">
						  <a href="#about"><i class="fa fa-print" style="margin-left:2px;" ></i>Reprint Cards</a><hr class="responsive">
						  <a href="#">Query Records</a><hr class="responsive">
						  <a href="dashboard_user.php"><i class="fa fa-user" style="margin-left:2px;" ></i>Admin Users</a><hr class="responsive">
						  <a href="#about"><i class="fa fa-laptop" style="margin-left:2px;" ></i>Monthly Report</a><hr class="responsive">
						  <a href="#about"><i class="glyphicon glyphicon-log-out" style="margin-left:2px;" ></i>Logout</a>
					  </span>
					  </span>
					  </span>
			 <!--  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
			    <i class="fa fa-bars">Menu</i> -->
			 
			</div>
			<!-- body section -->
			<div class="container">

			<!-- <div class="row">
				<div class="col-sm-6">
					<h1>Dash Board: Users</h1>

					</div>
					<div class="col-sm-6">
					<button class="btn btn-primary">Add User</button>
					</div>
					
			</div>	 -->
			<hr style="color:red;" class="hr">
			<div class="dashUser-cont">
				<div class="top-dashUser-cont"><h4 style="color:black; margin:15px;margin-top:0px;">Customer Wallet</h4></div>
				<div class="row">
					<!-- <div class="col-sm-6" style="display:inline;"> -->
				        <form class="form-inline" role="form" style="float:left; margin-left:20px;">
				        	<br>
						<label>Show </label><div class="input-group">
				         <select class="form-control" style="margin-top:5px;">
				         <option>100</option>
				         <option>200</option>
				         <option>300</option>
				         </select>
				         </div> <label>Entries</label>
				         </form>
				      
					<!-- </div> -->
					<!-- <div class="col-sm-6" style="display:inline;"> -->
					<form class="form-inline" role="form" style="float:right; ">
					<br>
						<label>Search:<input type="text" class="form-control" id="input" placeholder="Any random number"></label>
					</form>
					<!-- </div> -->
				</div>
				<table class="table table-striped table-bordered">
 					<caption></caption>
				   <thead>
				      <tr>
				         <th>S/N</th>
				         <th>Customer Name</th>
				         <th>Phone Number</th>
				         <th>Balance</th>
				         <th>Recharge Date</th>
				         <th>Transaction ID</th>
				         <th>Account Details</th>
				      </tr>
				   </thead>
				   <tbody>
				      <tr>
				         <td>1</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				         <td>Bangalore</td>
				         <td><button class="btn btn-success view-details button"><i class="fa fa-list-alt"></i>View Details</button></td>
				      </tr>
				      <tr>
				         <td>2</td>
				         <td>Mumbai</td>
				         <td>400003</td>
				         <td>560001</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				         <td><button class="btn btn-success view-details button" style="background-color:#ffc837;"><i class="fa fa-list-alt"></i>View Details</button></td>
				        
				      </tr>
				    
				   </tbody>
				</table>
				
  <!-- Trigger the modal with a button -->
 
			</div>
			</div>



		<script>
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  // var y = document.getElementById("display");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		    // y.className.display="none";

		  } else {
		    x.className = "topnav";
		  }
		}
		</script>
	<!-- </div> -->
	<!--Creates the popup body-->

</body>
</html>