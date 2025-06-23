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

	<title>Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-angry'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admin.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">BACK</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
		
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		 
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>USER Details</h1>
					 
			</div>

			 
			<?php
        $query="select * from user";
        $result=mysqli_query($conn,$query);
        ?>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<input type="search" placeholder="Search..." id="serach-iteam">
					  <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
							  <th>ID</th>
								<th>Name</th>
                <th>Email </th>
                <th>Date of Birth </th>
                <th>Password </th>
								<th>Address </th>
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
								 <td> <?php echo $row['dob'] ?></td> 
								 <td> <?php echo $row['password'] ?></td>
                 <td> <?php echo $row['address'] ?></td>

								<!-- <td><a href="update.php"><button>UPDATE</button></a></td> -->
								 <!-- <td><a href="update.php?id=<?php echo $row['id'];?> "><button>Edit</button></a></td>

								<td><a href="delete.php?id=<?php echo $row['id'];?> "><button>Delete</button></a></td>   -->
	 
	
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