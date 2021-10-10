<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<caption>Tabel Siswa</caption>
	<br><br>
	<a href="/tambah">Tambah</a>
	<table border="2">
		<tr>
			<td>id </td>
			<td>nama </td>
			<td>kelas </td>
			<td>alamat </td>
			<td>method</td>
		</tr>
		@foreach ($data as $pelatihan)
		<tr>
			<td>{{$pelatihan->id}} </td>
			<td>{{$pelatihan->nama}} </td>
			<td>{{$pelatihan->kelas}} </td>
			<td>{{$pelatihan->alamat}}</td>
			<td>
				<a href="/edit/{{$pelatihan->id}}">Edit</a>
				<a href="/hapus/{{$pelatihan->id}}">Hapus</a>
			</td>
			
		</tr>
		@endforeach
	</table>
</body>
</html>