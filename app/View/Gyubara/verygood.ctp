<h1>
	ああ牛バラうまい
</h1>

<h3>
<?php
echo $taste;
?>
points!!
</h3>

<?php
foreach ($item_list as $row) {
	echo $row['Item']['name'];
	echo ':';
	echo $row['Item']['rank'];
	echo '<br/>';
}
?>

<form action="mikke" method="POST">
	<input type="text" size="14" name="nikunamae">
	<select name='rank'>
		<option value='A'>A</option>
		<option value='B'>B</option>
		<option value='C'>C</option>			
	</select>
	<input type="submit" value="GOGOGOGO">
</form>