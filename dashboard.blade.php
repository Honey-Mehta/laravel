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
        <h4>Welcome To dashboard</h4>
        <hr>
        <table class="table">
             <thead> 
                  <th>Name</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Action</th>

             </thead>
             <tbody>
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                       <td> @if (!empty($data->profile_picture))
    <img src="{{ asset('storage/' . $data->profile_picture) }}" alt="User Profile Picture">
@else
    <p>No profile picture available</p>
@endif
</td>
                        <td><a href="logout">Logout</a>
                        <td><a href="{{"edit/".$data->id}}">EDIT</a>
                      </td>

                    </tr>
            </tbody>

        </table>
       
      </div>
  </div>
</div>

</body>
</html>
