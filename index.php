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
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<tr>
				<td>Bobbie</td>
				<td>hond</td>
				<td>Koorts, eet slecht, blaft veel te veel</td>
				<td>John Doe</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<tr>
				<td>Minoes</td>
				<td>kat</td>
				<td>Drinkt niet, haaruitval, mager</td>
				<td>Jane Doe</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<tr>
				<td>Kees</td>
				<td>hond</td>
				<td>Eet te veel, vetzucht, jankt en kotst</td>
				<td>John Doe</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
		</tbody>
	</table>
		<p><a href="#">Create</a></p>
		<p><a href="index.php">Home</a></p>
	</body>
</html>