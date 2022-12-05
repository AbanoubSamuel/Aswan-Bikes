<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/form.css">

    <title>Document</title>
</head>
<body>

    <form action="{{route("product.store")}}" method="POST" enctype="multipart/form-data" style="width:60% ;margin-left:22%; box-shadow:2px 2px 5px gray;
    margin-top:15px; margin-bottom:10px; padding: 3%;">
@csrf

        <div class="mb-3">
            <label  for="exampleInputPassword1" class="form-label">sport_id</label>
            <select  name="sport_id" style="width: 90px;">

              @foreach($data as $x )


              <option value="{{$x["id"]}}">{{$x["name"]}}</option>
              @endforeach
              </select>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="width: 55px;">type_id</label>
            <select name="type_id" style="width: 90px;>
              @foreach($type as $type )

              <option value="{{$type["id"]}}" >{{$type["name"]}}</option>
              @endforeach
              </select>


              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="width: 55px;">size</label>
                <select name="size" style="width: 90px;">
                  @foreach($size as $size )

                  <option >{{$size["size"]}}</option>
                  @endforeach
                  </select>

      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Name</label>
        <input type="text"name="name"  class="form-control" id="exampleInputPassword1">

      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Color</label>
        <input type="text"name="COLOR"  class="form-control" id="exampleInputPassword1">

      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Img</label>
        <input type="file"name="img"  class="form-control" id="exampleInputPassword1">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text"name="Price"  class="form-control" id="exampleInputPassword1">

          </div>

      </div>
      <label for="exampleInputPassword1" class="form-label">describe</label>
      <div class="mb-3">

        <textarea name="describe" id="description" cols="50" rows="10" ></textarea>

      </div>
    </div>


      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>



