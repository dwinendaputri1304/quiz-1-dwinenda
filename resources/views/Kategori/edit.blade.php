@extends('layouts.app')

@section('content')

<div class="container">
	 <h3>Edit Data Kategori</h3>   
	 <form action="{{ url('/kategori/' . $row->kategori_id) }}" method="POST">   
	 	@method('patch') 
	 	 	@csrf
	 	<table>
	 		<tr>   
	 			<td>NAMA</td>   
	 			<td><input type="text" name="kategori_nama" value="{{ $row->kategori_nama }}"></td>   
	 		</tr>   
	 		<tr>   
	 			<td>KETERANGAN</td>   
	 			<td><input type="text" name="kategori_text" value="{{ $row->kategori_text }}"></td>   
	 		</tr>        
	 		<tr>   
	 			<td>CREATED AT</td>   
	 			<td><input type="date" name="created_at" value="{{ $row->created_at }}"></td>   
	 		</tr>   
	 		<tr>   
	 			<td>UPDATE AT</td>   
	 			<td><input type="date" name="updated_at" value="{{ $row->updated_at }}"></td>   
	 		</tr>   
	 		<tr>   
	 			<td></td>   
	 			<td><input type="submit" value="UPDATE"></td>   
	 		</tr>   
	 	</table>   
	 </form> 
	
</div>