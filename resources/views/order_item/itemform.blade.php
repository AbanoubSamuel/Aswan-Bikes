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

    <form action="{{route("item.store")}}" method="POST" enctype="multipart/form-data" style="width:60% ;margin-left:22%; box-shadow:2px 2px 5px gray;
    margin-top:15px; margin-bottom:10px; padding: 3%;>
@csrf


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">product_id</label>
            <select name="product_id">
              @foreach($product as $product )

              <option value="{{$product["name"]}}" >{{$product["name"]}}</option>
              @endforeach
              </select>



      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">order_id</label>
        <select name="order_id">
          @foreach($order as $order )

          <option value="{{$order["id"]}}">{{$order["id"]}}</option>
          @endforeach
          </select>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">number</label>
        <input type="number"name="number"  class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">rent_date</label>
        <input type="date"name="rent_date"  class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">return_date</label>
        <input type="date"name="return_date"  class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">price</label>
          <input type="text"name="price"  class="form-control" id="exampleInputPassword1">
        </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>



