<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/edit/update/{{$var->id}}" method="post">
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="{{$var->nama}}"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas" value="{{$var->kelas}}"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat">{{$var->alamat}}</textarea></td>
			</tr>

			<tr>
				<td><button type="submit">Kirim</button></td>
			</tr>


		</table>

	</form>

</body>
</html>