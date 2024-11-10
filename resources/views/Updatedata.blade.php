 @include('Header')
<form method="get" action="{{route('updateuser',$data->id)}}">
  @csrf
    <h1 style="margin-left: 40%;padding:10px">update data data</h1>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div data-mdb-input-init class="form-outline">
          <input type="text" id="form6Example1" class="form-control" name="name" value="{{$data->name}}"/>
          <label class="form-label" for="form6Example1">Name</label>
        </div>
      </div>
    
    </div>
  
    <!-- Text input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" id="form6Example3" class="form-control" name="email" value="{{$data->email}}"/>
      <label class="form-label" for="form6Example3">Email</label>
    </div>
  
    <!-- Text input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" id="form6Example4" class="form-control" name="age" value="{{$data->age}}"/>
      <label class="form-label" for="form6Example4">Age</label>
    </div>
  
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" id="form6Example5" class="form-control" name="city" value="{{$data->city}}"/>
      <label class="form-label" for="form6Example5">city</label>
    </div>
      </div>
  
    <!-- Submit button -->
    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">update</button>
  </form>





@include('Footer')