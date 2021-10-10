<!DOCTYPE html>
<html>
<head>
	<title>	 Gudang</title>
</head>
<body>
<a href="{{route('gudang.create')}}">Tambah</a>
<table border="2">
	<tr>
		<td>Nama Gudang</td>
		<td colspan="2">Aksi</td>
	</tr>
	@foreach ($datagudang as $datagu)
	<tr>
		
		<td>{{$datagu->nama_gudang}}</td>
		
		<td><a href="{{route('gudang.edit',$datagu->id)}}">edit</a></td>
		<td><a href="{{route('gudang.destroy',$datagu->id)}}">apus</a></td>
	
	</tr>
	@endforeach
</table>
</body>
</html>