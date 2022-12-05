

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
    <form action="{{route("tours.update",["tour"=>$data["id"]])}}" method="POST" enctype="multipart/form-data" style="width:50% ;margin-left: 10%;padding: 5%;;border: 1px blue solid;">
@csrf
@method('put')
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">category_id</label>
        <select name="category_id">

          @foreach($category as $category )

          <option value="{{$category["id"]}}">{{$category["name"]}}</option>
          @endforeach
          </select>

        {{-- <select name="category_id">

            @foreach($data as $tour )

            <option value="{{$tour["id"]}}">{{$tour["name"]}}</option>
            @endforeach
            </select> --}}
        {{-- <input type="number"name="category_id" value="{{$data["category_id"]}}"  class="form-control" id="exampleInputPassword1"> --}}

      </div>




      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">img</label>
        <input type="file"name="img" value="{{$data["img"]}}" class="form-control" id="exampleInputPassword1">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">describe</label>
    <textarea name="description" id="description" cols="50" rows="10" value="{{$data["description"]}}"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>



