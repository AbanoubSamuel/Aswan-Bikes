<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<center>
    <form action="{{route("store")}}" method="POST" enctype="multipart/form-data" style="width:60% ;margin-left:5%; box-shadow:2px 2px 5px gray;
    margin-top:15px; margin-bottom:10px; padding: 3%;">
@csrf

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">name</label>
        <input type="text"name="name"  class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">email</label>
        <input type="text"name="email"  class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">pass</label>
        <input type="password"name="password"  class="form-control" id="exampleInputPassword1">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text"name="address"  class="form-control" id="exampleInputPassword1">



        <label for="exampleInputPassword1" class="form-label">img</label>

        <input type="file" name="img"  class="form-control" id="exampleInputPassword1">

      </div>

      <div class="mb-3">

        <label for="exampleInputPassword1" class="form-label" style="padding: 5px;">role</label>
        <input type="radio" name="role" value="user" id="role"> user
        <input type="radio" name="role" value="admin" id="role"> admain

        </div>


      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">phone</label>
        <input type="text"name="phone"  class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" style="padding: 5px;">gender</label>
        <input type="radio" name="gender" value="female" id="gander"> female
        <input type="radio" name="gender" value="male" id="gander"> male

      </div>




      <button type="submit" style="width: 100px;
      height:30px; background:black; color:white;  border-radius:5px;">Submit</button>
      </form>
    </center>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>



