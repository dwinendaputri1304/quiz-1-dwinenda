 @extends('layouts.app')

 @section('content')

 <div class="container"> 

 	 <h3>Daftar Album </h3>  
<a href="{{ url('album/create') }}">Tambah Data</a >
 <table>   
 	<tr>
 		<td>NAMA</td>
 		<td>KETERANGAN</td> 
 		<td>PHOTO ID</td> 
 		<td>EDIT</td>
 		<td>DELETE</td>
 	</tr>   

 	 @foreach($rows as $row) 

 	 <tr> 
 	 	<td>{{ $row->album_name }}</td> 
 	 	<td>{{ $row->album_text }}</td> 
 	 	<td>{{ $row->photo_id }}</td>  
 	 	<td>
 	 		<a href="{{ url('album/' . $row->album_id . '/edit') }}">Edit</a>
 	 	</td>
 	 	<td><form action="{{ url('album/' . $row->album_id) }}" method="POST">
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