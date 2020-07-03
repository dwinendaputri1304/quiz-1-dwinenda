@extends('layouts.app')

@section('content')

<div class="container"> 

	<h3>Tambah Data Photo</h3>

	<form action="{{ url('/photo') }}" method="POST"> 

	 @csrf

 <table>
 	<tr> 
 		<td>TANGGAL</td>
 		<td><input type="date" name="photo_date"></td>
 	 </tr>
 	 <tr>
 	 	<td>JUDUL</td>
 	 	<td><input type="text" name="photo_title"></td>
 	 </tr>
 	 <tr>
 	 	<td>PHOTO</td>
 	 	<td><input type="text" name="photo_post"></td>
 	 </tr>
 	 <tr>
 	 	<td>TEKS</td>
 	 	<td><textarea name="photo_text"></textarea></td>
 	 </tr>
 	 <tr>
 	 	<td>POST ID</td>
 	 	<td><input type="text" name="post_id"></td>
 	 </tr>
 	  <tr>
 	  	<td></td>
 	  	<td><input type="submit" value="SIMPAN"></td>
 	  </tr>   
 	</table>
 </form>
</div>

@endsection