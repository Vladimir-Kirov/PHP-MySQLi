<?php 

	include 'includes/config.php';
	if(!isset($_SESSION['is_logged'])) 
	{ 
		header('Location: login.php');
		exit;
	}

	$title = 'Форма';
	include 'includes/header.php';
	include 'employee-info.php';
	$positions = array(1 => 'Web designer', 2 => 'PHP Developer', 3 => 'Front-end Developer');

	$mysqli = new mysqli('localhost', 'root', '0896482336', 'web_based_system');

	if ($mysqli->connect_error) 
	{
	    die($mysqli->connect_error);
	} 
 
	if (isset($_POST['form_send']) && $_POST['form_send'] == 'Добави') 
	{

		$username = trim($_POST['name']);
		$address = trim($_POST['address']);
		$phone = trim($_POST['phone']);
		$department = trim($_POST['department']);
		$selectedPosition = (int)$_POST['position'];
		$position = trim($_POST['position']);
		$salary = (int)$_POST['salary'];


		$username_escaped = $mysqli->real_escape_string($username);
	    $address_escaped = $mysqli->real_escape_string($address);
	    $phone_escaped = $mysqli->real_escape_string($phone);
	    $department_escaped = $mysqli->real_escape_string($department);
	    $position_escaped = $mysqli->real_escape_string($position);
	    $salary_escaped = $mysqli->real_escape_string($salary);

	    $error_messages = [];
	    
		$error = false;

		if(mb_strlen($username) < 4) 
		{
			$error_messages[] = 'The name is too short!';
			$error = true;
		}

		if(mb_strlen($phone) < 6 || mb_strlen($phone) > 12) 
		{
			$error_messages[] = 'Invalid phone.';
			$error = true;
		}


		if(!array_key_exists($selectedPosition, $positions)) 
		{
			$error_messages[] = 'Invalid group.';
			$error = true;		
		}

		if(!$error) 
		{
			

	      $sql = "INSERT INTO personnel SET
	        name = '$username_escaped',
	        address = '$address_escaped',
	        phone = '$phone_escaped',
	        department = '$department_escaped',
	        position = '$position_escaped',
	        salary = '$salary_escaped'";
	   
	    	$mysqli->query($sql);

			header("Location: index.php");
				
		}
			
	 }

?>
	<div class="container">
		<button class="btn"><a href="index.php">Списък</a></button>
		<form  method="POST" class="smart-green" id="system_form">
			<h1>Basic Form
				<span>Please fill all the texts in the fields.</span>
			</h1>

			<?php

			if(isset($error_messages) && count($error_messages) > 0) 
			{
				printErrors($error_messages);
			}

			?>
			<div id="message">
                
        	</div>
			<label for="username">
				<span>Име: </span>
				<input type="text" name="name" id="username" placeholder="Your Full Name">
			</label>

			<label for="address">
				<span>Адрес: </span> 
				<input type="text" name="address" id="address" placeholder="Enter Valid Address">
			</label>
		
			<label for="phone">
				<span>Телефон: </span>
				<input type="text" name="phone" id="phone" placeholder="Your Phone Number">
			</label>

			<label for="department">
				<span>Отдел: </span>
				<input type="text" name="department" id="department" placeholder="Your Department">
			</label>

			<label for="position">
				<span>Длъжност: </span> 
				<select name="position" id="position">
					<?php
						foreach ($positions as $key => $value) {
						 	echo '<option value="' . $key . '">' . $value . '</option>';
						} 
					?>
				</select>
			</label>

			<label for="salary">
				<span>Заплата: </span> 
				<input type="text" name="salary" id="salary" placeholder="Your Salary per month">
			</label>

			<label>
				<span>&nbsp;</span> 	
				<input type="submit" name="form_send" class="button" value="Добави">
			</label> 
		</form>
	</div>
<?php 
	include 'includes/footer.php'; 
?>