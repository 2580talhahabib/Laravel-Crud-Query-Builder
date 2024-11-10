@include('Header')
<table class="table caption-top">
    <caption style="font-size: 20px;margin:10px;text-align:center">
      List of users
    </caption>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">City</th>
        <th scope="col">Show Data</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    @foreach ($user as $data)
        
    <tbody>
        <tr>
          <th scope="row">{{$data->id}}</th>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->age}}</td>
          <td>{{$data->city}}</td>
         <td> <a href="{{route('singledata',$data->id)}}"><button type="button" class="btn btn-primary" data-mdb-ripple-init>view </button></a></td>
         <td> <a href="{{route('deletedata',$data->id)}}"><button type="button" class="btn btn-danger" data-mdb-ripple-init>Delete </button></a></td>
          <td> <a href="{{route('updatedata',$data->id)}}"><button type="button" class="btn btn-secondary" data-mdb-ripple-init>Update </button></a></td>
        </tr>
      
      </tbody>


    @endforeach
   
  </table>
  <div class="mt-5">
    {{$user->links()}}
  </div>
  <div class="mt-5">
    {{-- Total user: {{ $user->total()}} --}}
    {{-- Current page: {{ $user->currentPage()}} --}}
  </div>

@include('Footer')