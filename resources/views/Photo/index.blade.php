 @extends('layouts.app')

 @section('content')

 <div class="container"> 

 	 <h3>Daftar Photo </h3>  
<a href="{{ url('photo/create') }}">Tambah Data</a >
 <table>   
 	<tr>
 		<td>TANGGAL</td>
 		<td>JUDUL</td> 
 		<td>PHOTO</td> 
 		<td>TEXT</td> 
 		<td>POST ID</td>
 		<td>EDIT</td>
 		<td>DELETE</td>
 	</tr>   

 	 @foreach($rows as $row) 

 	 <tr> 
 	 	<td>{{ $row->photo_date }}</td> 
 	 	<td>{{ $row->photo_title }}</td> 
 	 	<td>{{ $row->photo_post }}</td> 
 	 	<td>{{ $row->photo_text }}</td> 
 	 	<td>{{ $row->post_id }}</td>
 	 	<td>
 	 		<a href="{{ url('photo/' . $row->photo_id . '/edit') }}">Edit</a>
 	 	</td>
 	 	<td><form action="{{ url('photo/' . $row->photo_id) }}" method="POST">
 	 		<input name="_method" type="hidden" value="DELETE">   
 	 		@csrf        
 	 		<button>Hapus</button>  
 			</form>
 		</td> 
 	 </tr>
 	 	 @endforeach 
 	 	</table> 
 	 </div>

 	  @endsection  