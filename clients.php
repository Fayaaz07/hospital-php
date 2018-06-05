<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" href="public/css/style.css" type="text/css">
</head>
<body>
	<h1>Hospital</h1>
	<ul>
		<li><a href="patients.php">Patiënts</a></li>
		<li><a href="clients.php">Clients</a></li>
		<li><a href="species.php">Species</a></li>
	</ul>

	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<tr>
				<td>John</td>
				<td>Doe</td>
				<td>0612345678</td>
				<td>johndoe@hismail.com</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<tr>
				<td>Jane</td>
				<td>Doe</td>
				<td>0687654321</td>
				<td>janedoe@hermail.com</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
		</tbody>
	</table>
		<p><a href="#">Create</a></p>
		<p><a href="index.php">Home</a></p>
	</body>
</html>