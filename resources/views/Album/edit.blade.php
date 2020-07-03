@extends('layouts.app')

@section('content')

<div class="container">
	 <h3>Edit Data Kategori</h3>   
	 <form action="{{ url('/album/' . $row->album_id) }}" method="POST">   
	 	@method('patch') 
	 	 	@csrf
	 	<table>
	 		<tr> 
 		<td>NAMA</td>
 		<td><input type="text" name="album_name" value="{{ $row->album_name }}"></td>
 	 </tr>
 	 <tr>
 	 	<td>KETERANGAN</td>
 	 	<td><input type="text" name="album_text" value="{{ $row->album_text }}"></td>
 	 </tr>
 	 <tr>
 	 	<td>PHOTO ID</td>
 	 	<td><input type="text" name="photo_id" value="{{ $row->photo_id }}"></td>
 	 </tr>   
	 		<tr>   
	 			<td></td>   
	 			<td><input type="submit" value="UPDATE"></td>   
	 		</tr>   
	 	</table>   
	 </form> 
	
</div>