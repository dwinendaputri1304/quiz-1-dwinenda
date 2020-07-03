@extends('layouts.app')

@section('content')

<div class="container">
	 <h3>Edit Data Photo</h3>   
	 <form action="{{ url('/photo/' . $row->photo_id) }}" method="POST">   
	 	@method('patch') 
	 	 	@csrf
	 	<table>  
 	 <tr> 
 		<td>TANGGAL</td>
 		<td><input type="date" name="photo_date" value="{{ $row->photo_date }}"></td>
 	 </tr>
 	 <tr>
 	 	<td>JUDUL</td>
 	 	<td><input type="text" name="photo_title" value="{{ $row->photo_title }}"></td>
 	 </tr>
 	 <tr>
 	 	<td>PHOTO</td>
 	 	<td><input type="text" name="photo_post" value="{{ $row->photo_post }}"></td>
 	 </tr>
 	 <tr>
 	 	<td>TEKS</td>
 	 	<td><input type="text" name="photo_text" value="{{ $row->photo_text }}"></td>
 	 </tr>
 	 <tr>
 	 	<td>POST ID</td>
 	 	<td><input type="date" name="post_id" value="{{ $row->post_id }}"></td>
 	 </tr>
	 		<tr>   
	 			<td></td>   
	 			<td><input type="submit" value="UPDATE"></td>   
	 		</tr>   
	 	</table>   
	 </form> 
	
</div>