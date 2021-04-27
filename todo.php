<?php 
	session_start();
    // initialize errors variable
	$errors = "";
	$tej=$_SESSION['username'];

	// connect to database
	$db = mysqli_connect("localhost","root","", "list");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])&&empty($_POST['prio'])) 
		{
			$errors = "You must fill all details";
		}else{
			$task = $_POST['task'];
			$prio1=$_POST['prio'];
			$sql = "INSERT INTO $tej(tasks) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: todo.php');
		}
	}	
	if(isset($_GET['logout']))
	{
		unset($_SESSION);
		session_destroy();
		header('Location:client.php');
	}

	// delete task
	if (isset($_GET['del_task'])) {
		$id = $_GET['del_task'];

		mysqli_query($db, "DELETE FROM $tej WHERE id=".$id);
		header('location: todo.php');
	}

	if (isset($_GET['com_task'])) {
		$id = $_GET['com_task'];

		mysqli_query($db, "UPDATE $tej SET completed=1 WHERE id=".$id);
		header('location: todo.php');

	}
	if (isset($_GET['undo_task'])) {
		$id = $_GET['undo_task'];

		mysqli_query($db, "UPDATE $tej SET completed=0 WHERE id=".$id);
		header('location: todo.php');

	}

	if (isset($_GET['imp_task'])) {
		$id = $_GET['imp_task'];

		mysqli_query($db, "UPDATE $tej SET priority=1 WHERE id=".$id);
		header('location: todo.php');

	}
	if (isset($_GET['pend_task'])) {
		$id = $_GET['pend_task'];

		mysqli_query($db, "UPDATE $tej SET priority=0 WHERE id=".$id);
		header('location: todo.php');

	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>To-Do</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">
		.heading{
			width: 50%;
			margin: 30px auto;
			text-align: center;
			color: 	#6B8E23;
			background: #FFF8DC;
			border: 2px solid #6B8E23;
			border-radius: 20px;
		}
		form {
			width: 50%; 
			margin: 30px auto; 
			border-radius: 5px; 
			padding: 10px;
			background: #d8d8d8;
			border: 1px solid #aeaeae;
		}
		form p {
			color: red;
			margin: 0px;
		}
		.task_input {
			width: 75%;
			height: 15px; 
			padding: 10px;
			border: 2px solid #aeaeae;
		}
		.add_btn {
			height: 39px;
			background: #d8d8d8;
			color: 	black;
			border: 2px solid #aeaeae;
			border-radius: 5px; 
			padding: 5px 20px;
		}

		table {
		    width: 50%;
		    margin: 30px auto;
		    border-collapse: collapse;
		}

		tr {
			border-bottom: 1px solid #cbcbcb;
		}

		th {
			font-size: 19px;
			color: #6B8E23;
		}

		th, td{
			border: none;
		    height: 30px;
		    padding: 2px;
		}

		tr:hover {
			background: #E9E9E9;
		}

		.task {
			text-align: left;
		}

		.delete{
			text-align: center;
		}
		.delete a{
			color: white;
			background: #a52a2a;
			padding: 1px 6px;
			border-radius: 3px;
			text-decoration: none;
		}
		.undo{
			text-align: center;
		}
		.undo a{
			color: white;
			background: blue;
			padding: 1px 6px;
			border-radius: 3px;
			text-decoration: none;
		}
		.pend{
			text-align: center;
		}
		.pend a{
			color: white;
			background: #400080;
			padding: 1px 6px;
			border-radius: 3px;
			text-decoration: none;
		}
		.comp{
			text-align: center;
		}
		.comp a{
			color: white;
			background: green;
			padding: 1px 6px;
			border-radius: 3px;
			text-decoration: none;
		}
		.imp{
			text-align: center;
		}
		.imp a{
			color: white;
			background: #ff8000;
			padding: 1px 6px;
			border-radius: 3px;
			text-decoration: none;
		}
		.logout{
			text-align: center;
		}
		.logout a{
			padding: 8px 8px 8px 8px;
			border-radius: 3px;
			text-decoration: none;
  			color: #fff;
  			background-color: #007bff;
  			border-color: #007bff;
		}
		.logout a:hover {
				  color: #fff;
				  background-color: #0069d9;
				  border-color: #0062cc;
				}
	</style>
</head>
<body style="background-color: #d8d8d8">
		<div class="container-fluid col-md-4 card card-outline-info mt-4" style="border: 2px solid #aeaeae;">
			<div class="card-header" style="background-color: #FF4765">
                <h5 class="m-b-0"><center>To Do List</center></h5>
            </div>
            <div class="card-block col-md-12">
            	<center>
					<form method="post" action="todo.php" class="input_form" style="border: 2px solid #aeaeae;">
						<input type="text" name="task" class="task_input form-group" placeholder="Enter Task">
						<br>
						<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
						<?php if (isset($errors)) { ?>
							<p><?php echo $errors; ?></p>
						<?php } ?>
					</form>
				</center>
			</div>
			<div class="card card-block card-outline-info col-md-12 mt-3" style="border: 2px solid #aeaeae;">
				<div class="card-header" style="background-color: #e5e5e5">
				<center><h4>Important Tasks</h4></center>
				</div>
				<table>
					<thead>
						<tr>
							<th>No.</th>
							<th>Tasks</th>
							<th colspan="3" style="width: 60px;text-align: center;">Action</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$tasks = mysqli_query($db, "SELECT * FROM $tej Where priority>=1 AND completed=0");

						$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
							<tr>
								<td> <?php echo $i; ?> </td>
								<td class="task"> <?php echo $row['tasks']; ?> </td>
								<td class="comp"> 
									<a href="todo.php?com_task=<?php echo $row['id'] ?>">C</a> 
								</td>
								<td class="pend"> 
									<a href="todo.php?pend_task=<?php echo $row['id'] ?>">P</a> 
								</td>
								<td class="delete"> 
									<a href="todo.php?del_task=<?php echo $row['id'] ?>">D</a> 
								</td>
							</tr>
						<?php $i++;} ?>	
					</tbody>
				</table>
			</div>
			<div class="card card-block card-outline-info col-md-12 mt-3" style="border: 2px solid #aeaeae;">
				<div class="card-header" style="background-color: #e5e5e5">
				<center><h4>Pending Tasks</h4></center>
				</div>
				<table>
					<thead>
						<tr>
							<th>No.</th>
							<th>Tasks</th>
							<th colspan="3" style="width: 60px;text-align: center;">Action</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$tasks = mysqli_query($db, "SELECT * FROM $tej Where priority=0 AND completed=0");

						$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
							<tr>
								<td> <?php echo $i; ?> </td>
								<td class="task"> <?php echo $row['tasks']; ?> </td>
								<td class="imp"> 
									<a href="todo.php?imp_task=<?php echo $row['id'] ?>">I</a> 
								</td>
								<td class="comp"> 
									<a href="todo.php?com_task=<?php echo $row['id'] ?>">C</a> 
								</td>
								<td class="delete"> 
									<a href="todo.php?del_task=<?php echo $row['id'] ?>">D</a> 
								</td>
							</tr>
						<?php $i++; } ?>	
					</tbody>
				</table>
			</div>
			<div class="card card-block card-outline-info col-md-12 mt-3" style="border: 2px solid #aeaeae;">
				<div class="card-header" style="background-color: #e5e5e5">
				<center><h4>Completed Tasks</h4></center>
				</div>
				<table>
					<thead>
						<tr>
							<th>No.</th>
							<th>Tasks</th>
							<th colspan="3" style="width: 60px;text-align: center;">Action</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$tasks1 = mysqli_query($db, "SELECT * FROM $tej Where completed=1");

						$i = 1; while ($row = mysqli_fetch_array($tasks1)) { ?>
							<tr>
								<td> <?php echo $i; ?> </td>
								<td class="task"> <?php echo $row['tasks']; ?> </td>
								<td class="imp"> 
									<a href="todo.php?imp_task=<?php echo $row['id'] ?>">I</a> 
								</td>
								<td class="undo"> 
									<a href="todo.php?undo_task=<?php echo $row['id'] ?>">U</a> 
								</td>
								<td class="delete"> 
									<a href="todo.php?del_task=<?php echo $row['id'] ?>">D</a> 
								</td>
							</tr>
						<?php $i++; } ?>	
					</tbody>
				</table>
				
			</div>
			<div class="logout mt-3 mb-3">
				<center>
			<a href="todo.php?logout">logout</a></center>
			</div>
			</div>	
		</div>
</body>
</html>