@extends('layouts.app')

@section('content')

<div class="container"> 

	<h3>Tambah Data Kategori</h3>

	<form action="{{ url('/kategori') }}" method="POST"> 

	 @csrf

 <table>
 	<tr> 
 		<td>NAMA</td>
 		<td><input type="text" name="kategori_nama"></td>
 	 </tr>
 	 <tr>
 	 	<td>KETERANGAN</td>
 	 	<td><input type="text" name="kategori_text"></td>
 	 </tr>
 	 <tr>
 	 	<td>CREATED AT</td>
 	 	<td><input type="date" name="created_at"></td>
 	 </tr>
 	 <tr>
 	 	<td>UPDATE AT</td>
 	 	<td><input type="date" name="updated_at"></td>
 	 </tr>
 	  <tr>
 	  	<td></td>
 	  	<td><input type="submit" value="SIMPAN"></td>
 	  </tr>   
 	</table>
 </form>
</div>

@endsection