<!DOCTYPE html>
<html lang="en">
<head>
  <title>Custom Authentication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


  
<div class="container">
  <div class="row">
      <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
        <h4>Update</h4>
        <hr>
        <form action="{{route('edit')}}" method="post">
          @csrf
        
          
             <input type="text" name="id" value="{{$data->id}}">
             <div class="form-group">
                 <label for="name">Full Name</label>
                 <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="{{$data->name}}">
               
             </div>

             <div class="form-group">
                 <label for="email">Email</label>
                 <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{$data->email}}">
                
             </div>

          

             <div class="form-group">
                 <button class="btn btn-block btn-primary" type="submit">
                  Update


                 </button>
             </div>
             <br>
             <a href="/login">Already Registered !! Login Here</a>
        </form>
      </div>
  </div>
</div>

</body>
</html>
