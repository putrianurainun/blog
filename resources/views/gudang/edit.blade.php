<!DOCTYPE html>
<html>
<head>
	<title>Edit	</title>
</head>
<body>
	<a href="{{route('gudang.index')}}">Kembali</a>
	@foreach ($dataguda as $data)
	<form method="post" action="{{route('gudang.update',$data->$id)}}">	
		@csrf
		@method ('PUT')
		
		Nama Gudang : <input type="text" name="nama_gudang" value="{{$data->$nama_gudang}}">
		<button type="submit">Kirim</button>
		

	</form>
	@endforeach
</body>
</html>