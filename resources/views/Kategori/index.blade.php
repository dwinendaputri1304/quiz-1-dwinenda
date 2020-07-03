 @extends('layouts.app')

 @section('content')

 <div class="container"> 

 	 <h3>Daftar Kategori </h3>  
<a href="{{ url('kategori/create') }}">Tambah Data</a >
 <table>   
 	<tr>
 		<td>NAMA</td>
 		<td>KETERANGAN</td> 
 		<td>CREATED AT</td> 
 		<td>UPDATED AT</td> 
 		<td>EDIT</td>
 		<td>DELETE</td>
 	</tr>   

 	 @foreach($rows as $row) 

 	 <tr> 
 	 	<td>{{ $row->kategori_nama }}</td> 
 	 	<td>{{ $row->kategori_text }}</td> 
 	 	<td>{{ $row->created_at }}</td> 
 	 	<td>{{ $row->updated_at }}</td> 
 	 	<td>
 	 		<a href="{{ url('kategori/' . $row->kategori_id . '/edit') }}">Edit</a>
 	 	</td>
 	 	<td><form action="{{ url('kategori/' . $row->kategori_id) }}" method="POST">
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