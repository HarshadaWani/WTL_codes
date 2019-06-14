<html>
<?php include("func.php"); ?>
<head>
<title>student data</title>
</head>
<body>
<div class="main">
<h1>For Insert Data</h1>
<form method="post" action="func.php">
<label>Id:</label><br>
<input type="text" name="Id"><br>
<label>Name:</label><br>
<input type="text" name="Name"><br>
<label>Percentage</label><br>
<input type="text" name="Percentage"><br>
<input type="submit" name="Insert" value="Insert">
</form>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Percentage</th>
</tr>
<?php get_data();?><br><br>
</table>

<h1>For Delete Data</h1>
<form method="post" action="func.php">
<label>Id</label><text>
<input type="text" name="Id"><br>
<input type="submit" name="Delete" value="Delete"><br>
</form>


<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Percentage</th>
</tr>
<?php get_data()?>
</table>



<h1>Update Data</h1>
<form method="post" action="func.php">
<label>Id</label><br>
<input type="text" name="Id"><br>
<h2>Update Following fields</h2>
<label>Name</label><br>
<input type="text" name="Name"><br>
<label>Percentage</label><br>
<input type="text" name="Percentage"><br>
<input type="submit" name="Update" value="Update">
</form>
<table border="1">
<tr>
<th>Id</th>
<th>Name</th>
<th>Percentage</th>
</tr>
<?php get_data();?>
</table>


</div>
</body>
</html>