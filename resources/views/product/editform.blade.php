

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
{{-- {{dd($data)}} --}}
    <form action="{{route("product.update",["product"=>$data["id"]])}}" method="POST" enctype="multipart/form-data" style="width:50% ;margin-left: 10%;padding: 5%;;border: 1px blue solid;">
@csrf
@method('put')
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">sport_id</label>
        <input type="number"name="sport_id" value="{{$data["sport_id"]}}"  class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">type_id</label>
        <input type="number"name="type_id"  value="{{$data["type_id"]}}" class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Name</label>
        <input type="text"name="name" value="{{$data["name"]}}" class="form-control" id="exampleInputPassword1">

      </div>


      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">size</label>
        <input type="number"name="size" value="{{$data["size"]}}" class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">COLOR</label>
        <input type="text"name="COLOR" value="{{$data["COLOR"]}}"  class="form-control" id="exampleInputPassword1">

      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">img</label>
        <input type="file"name="img" value="{{$data["img"]}}" class="form-control" id="exampleInputPassword1">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text"name="price" value="{{$data["price"]}}"  class="form-control" id="exampleInputPassword1">

          </div>

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">describe</label>
        <textarea name="describe" id="description" cols="50" rows="10" required>{{$data->describe}}</textarea>

      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>



