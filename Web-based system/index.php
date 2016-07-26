<?php

	include 'includes/config.php';
	if(!isset($_SESSION['is_logged'])) 
	{ 
		header('Location: login.php');
		exit;
	}
	
	$title = 'Списък';
	include 'includes/header.php';
	include 'employee-info.php';

?>

	<button class="btn"><a href="form.php">Добави служител</a></button>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Име</th>
				<th>Адрес</th>
				<th>Телефон</th>
				<th>Отдел</th>
				<th>Длъжност</th>
				<th>Заплата</th>
			</tr>
		</thead>
		<?php
		
	    $result = $mysqli->query("SELECT * FROM personnel");
	    while ($data = $result->fetch_object()) 
	    {
	        
	    ?>
	    <tbody>
		    <tr>
		      	<td><?php echo $data->id; ?></td>
				<td><?php echo $data->name; ?></td>
				<td><?php echo $data->address; ?></td>
				<td><?php echo $data->phone; ?></td>
		        <td><?php echo $data->department; ?></td>
				<td><?php echo $data->position; ?></td>
				<td><?php echo $data->salary; ?></td>
		    </tr>
		</tbody>
		<?php
	  	}
	  	
		?>

	</table>
<?php 
	include 'includes/footer.php'; 
?>