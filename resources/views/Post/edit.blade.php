@extends('layouts.app')

@section('content')

<div class="container">
	 <h3>Edit Data Post</h3>   
	 <form action="{{ url('/post/' . $row->post_id) }}" method="POST">   
	 	@method('patch') 
	 	 	@csrf
	 	<table>  
	 <tr> 
 		<td>TANGGAL</td>
 		<td><input type="date" name="post_date" value="{{ $row->post_date }}"></td>
 	 </tr>
 	 <tr>
 	 	<td>SLUG</td>
 	 	<td><input type="text" name="post_slug" value="{{ $row->post_slug }}"></td>
 	 </tr>
 	 <tr>
 	 	<td>JUDUL</td>
 	 	<td><input type="text" name="post_title" value="{{ $row->post_title }}"></td>
 	 </tr>
 	 <tr>
 	 	<td>TEXT</td>
 	 	<td><input type="text" name="post_txt" value="{{ $row->post_txt }}"></td>
 	 </tr>
 	  <tr>
 	 	<td>KATEGORI ID</td>
 	 	<td><input type="text" name="kategori_id" value="{{ $row->kategori_id}}"></td>
 	 </tr>
	 		<tr>   
	 			<td></td>   
	 			<td><input type="submit" value="UPDATE"></td>   
	 		</tr>   
	 	</table>   
	 </form> 
	
</div>