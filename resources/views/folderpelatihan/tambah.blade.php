<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="tambah/store" method="post">
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>

			<tr>
				<td><button type="submit">Kirim</button></td>
			</tr>


		</table>

	</form>

</body>
</html>