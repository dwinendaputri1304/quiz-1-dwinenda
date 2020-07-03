 @extends('layouts.app')

 @section('content')

 <div class="container"> 

 	 <h3>Daftar Post </h3>  
<a href="{{ url('post/create') }}">Tambah Data</a >
 <table>   
 	<tr>
 		<td>TANGGAL</td>
 		<td>SLUG</td> 
 		<td>JUDUL</td> 
 		<td>TEXT</td> 
 		<td>KATEGORI ID</td>
 		<td>EDIT</td>
 		<td>DELETE</td>
 	</tr>   

 	 @foreach($rows as $row) 

 	 <tr> 
 	 	<td>{{ $row->post_date }}</td> 
 	 	<td>{{ $row->post_slug }}</td>
 	 	<td>{{ $row->post_title }}</td>
 	 	<td>{{ $row->post_txt }}</td> 
 	 	<td>{{ $row->kategori_id }}</td> 
 	 	<td>
 	 		<a href="{{ url('post/' . $row->post_id . '/edit') }}">Edit</a>
 	 	</td>
 	 	<td><form action="{{ url('post/' . $row->post_id) }}" method="POST">
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