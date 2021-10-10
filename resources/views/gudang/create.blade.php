<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<caption>	Tambah Data</caption></br>
	<a href="{{route('gudang.index')}}">Kembali</a>
	<form method="post" action="{{route('gudang.store')}}">	
		@csrf
		Nama Gudang : <input type="text" name="nama_gudang">
		<button type="submit">Kirim</button>
		

	</form>
</body>
</html>