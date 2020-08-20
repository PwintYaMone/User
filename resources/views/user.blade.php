
<!DOCTYPE html>
<html>
<head><center><h1>User List</h1></center></head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<section>
  <form method="post" action="">

  @csrf
<table class="table table-primary">
 <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Roll</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($register as $row)
  <tr>
  <td>{{$row->id}}</td>
  <td>{{$row->name}}</td>
  <td>{{$row->email}}</td>
  <td>{{$row->roll}}</td>
  <td><a href="{{URL::to('users/'.$row->id)}}">Edit</a></td>
  <td><a href="delete">Delete</a></td>
  </tbody>
  @endforeach
</table>
</form>
</section>
</body>
</html>


