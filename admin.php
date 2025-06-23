<?php 
include ("dbconn.php");

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Dashboard\style.css?v=<?php echo time();?>">

	<title>officerdashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="officerregister.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Add Officer</span>
				</a>
			</li>
			<li>
				<a href="userdetails.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">View User </span>
				</a>
			</li>
			<li>
				<a href="querydetails.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">View Query</span>
				</a>
			</li>
			<!-- <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li> -->
		</ul>
		<ul class="side-menu">
			
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text" >  <a href="http://localhost/New%20folder%20(2)/signin.php"></a>Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<?php
        $query="select * from offdetails";
        $result=mysqli_query($conn,$query);
        ?>


	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>OFFICER DASHBOARD</h1>
					

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3></h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
							<th>ID</th>
								<th>Firstname</th>
								<th>Last Name</th>
								<th>Gender</th>
								<th>Mobile number</th>
								<th>Address</th>
								<th>District</th>
								<th>Role</th>
								<th>Date of birth</th>
								<th>Email</th>
								<th>Password</th>
							</tr>
						</thead>
						<tbody>
						<?php

while($row=mysqli_fetch_assoc($result)){



?>
<tr>
 <td> <?php echo $row['id'] ?></td>
 <td> <?php echo $row['firstname'] ?></td>
				 <td> <?php echo $row['lastname'] ?></td>
				 <td> <?php echo $row['gender'] ?></td>
				 <td> <?php echo $row['mobilenumber'] ?></td>
				 <td> <?php echo $row['address'] ?></td>
				 <td> <?php echo $row['district'] ?></td>
				 <td> <?php echo $row['role'] ?></td>
				 <td> <?php echo $row['dob'] ?></td>
				 <td> <?php echo $row['email'] ?></td>
				 <td> <?php echo $row['password'] ?></td>

				<!-- <td><a href="update.php"><button>UPDATE</button></a></td> -->
				<td><a href="update.php?id=<?php echo $row['id'];?> "> <button>Edit</button></a></td>

				<td><a href="delete.php?id=<?php echo $row['id'];?> "><button>Delete</button></a></td>


				</tr>
				<?php
				}
				?>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		
	</section>
	
	

</body>
</html>