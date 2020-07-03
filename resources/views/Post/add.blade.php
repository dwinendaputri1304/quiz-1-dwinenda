@extends('layouts.app')

@section('content')

<div class="container"> 

	<h3>Tambah Data Post</h3>

	<form action="{{ url('/post') }}" method="POST"> 

	 @csrf

 <table>
 	<tr> 
 		<td>TANGGAL</td>
 		<td><input type="date" name="post_date"></td>
 	 </tr>
 	 <tr>
 	 	<td>SLUG</td>
 	 	<td><input type="text" name="post_slug"></td>
 	 </tr>
 	 <tr>
 	 	<td>JUDUL</td>
 	 	<td><input type="text" name="post_title"></td>
 	 </tr>
 	 <tr>
 	 	<td>TEXT</td>
 	 	<td><textarea name="post_txt"></textarea></td>
 	 </tr>
 	  <tr>
 	 	<td>KATEGORI ID</td>
 	 	<td>
 	 		<select name="kategori_id" id="kategori_id">
 	 		@foreach($rows as $row)
 	 		<option name="kategori_id" id="kategori_id" value="{{$row->kategori_id}}">{{$row->kategori_id}}</option> 
 	 		@endforeach
 	 		</select>
 	 	</td>
 	 </tr>
 	  <tr>
 	  	<td></td>
 	  	<td><input type="submit" value="SIMPAN"></td>
 	  </tr>   
 	</table>
 </form>
</div>

@endsection