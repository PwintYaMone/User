<!DOCTYPE html>
<html>
<head><center><h1>User List</h1></center></head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<section>

  @foreach($register as $row) 
<form method="post" action="{{url('users',$row->id)}}">
          @method('PUT')
          @csrf
        <h2>User Registration</h2>
         <div class="form-group">
          <div class="form-group">
            
                   
        
         <div>
            <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{$row->name}}">
          </div>
          
            <div>
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$row->email}}" >
          </div>
          <div>
           <div>
            <label for="password">Roll No</label>
            <input type="text" class="form-control" name="rollno" id="rollno" aria-describedby="passwordHelp" value="{{$row->roll}}">
          </div>
          <br>         
   
                    <button type="submit" class="btn btn-primary">Update</button>
                    


      </form>
         @endforeach
</body>
</html>