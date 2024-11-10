@include('Header')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">City</th>
      </tr>
    </thead>
    <tbody>
@foreach ($data as $id)
      <tr class="table-dark">
        <th scope="row">{{$id->id}}</th>
        <td>{{$id->name}} </td>
        <td>{{$id->email}}</td>
        <td>{{$id->age}}</td>
        <td>{{$id->city}}</td>
      </tr>
    </tbody>
@endforeach
  </table>
@include('Footer')