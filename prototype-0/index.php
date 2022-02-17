
<?php
$getfile = file_get_contents('people.json');
$data = json_decode($getfile);
?>
<div >
		<a href="insert.php"><i></i> Insert Data</a>
			<table>
				<tr>
					<th>No.</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
					
				</tr>		
				<? foreach ($data as $person){
				?>
				<tr>
					<td><?php echo $person[0];?></td>
					<td><?php echo $person[1]; ?></td>
					<td><?php echo $person[2]; ?></td>
					<td><?php echo $person[3]; ?></td>
					
				</tr>
				<?php }?>
			</table>
		</div> 
	</div>
</div>
</body>
</html>