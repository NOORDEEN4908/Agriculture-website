<?php 
include ("dbconn.php");

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

 
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
 
	<link rel="stylesheet" href="Dashboard\style.css?v=<?php echo time();?>">

	<title>AdminHub</title>
</head>
<body>


 
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-angry'></i>
			<span class="text">Offuser</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			
			
			<li>
				<a href="offquerydetails.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">View Query</span>
				</a>
			</li>
			 
		</ul>
		<ul class="side-menu">
		 
			<li>
				<a href="logot.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
 

	<?php
        $query="select * from user";
        $result=mysqli_query($conn,$query);
        ?>

 
	<section id="content">
 
 
		<main>
			<div class="head-title">
				<div class="left">
					<h1>USER Details</h1>
					
				</div>
			 
			</div>

			 

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
								<th>Name</th>
								<th>Email</th>
								<th>Password</th>
								<th>Date of birth</th>
                                <th>Address</th>
								
							</tr>
						</thead>
						<tbody>
						<?php

while($row=mysqli_fetch_assoc($result)){



?>
<tr>
                <td> <?php echo $row['id'] ?></td>
                <td> <?php echo $row['name'] ?></td>
                <td> <?php echo $row['email'] ?></td>
                <td> <?php echo $row['password'] ?></td>
                <td> <?php echo $row['dob'] ?></td>
                <td> <?php echo $row['address'] ?></td>
			

				<!-- <td><a href="update.php"><button>UPDATE</button></a></td> -->
				

				<td><a href="userdelete.php?id=<?php echo $row['id'];?> "><button>Delete</button></a></td>


				</tr>
				<?php
				}
				?>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="Dash board\script.js"></script>
</body>
</html>