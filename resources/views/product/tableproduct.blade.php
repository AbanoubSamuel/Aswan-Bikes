@extends("web/dashtemp")
@section("body")

<br>

<center>
    <h2>Our Products</h2>

    <a href="{{route("product.create")}}"><button type="button" >Add</button></a>


<table   style="width:80%">
<thead>

  <tr>
      <th scope='col'>id</th>
      <th scope='col'>sport_id</th>
      <th scope='col'>type_id </th>
      <th scope='col'>Name</th>
      <th scope='col'>size</th>
      <th scope='col'>COLOR</th>
      <th scope='col'>img</th>
      <th scope='col'>describe</th>
      <th scope='col'>price</th>


      <th scope='col'>action</th>

    </tr>
</thead>
<tbody>
@foreach ($data as $product )


 <tr>
      <th scope='row'>{{$product["id"]}}</th>

      <td>{{$product->sport["name"]}}</td>
      <td>{{$product->type["name"]}}</td>
      <td>{{$product["name"]}}</td>
      <td>{{$product["size"]}}</td>
      <td>{{$product["COLOR"]}}</td>
      <td><img src="storage/img/{{$product["img"]}}" alt="" width="100px"></td>
      <td>{{$product["describe"]}}</td>
      <td>{{$product["price"]}}</td>

      <td>

        <form action="{{route("product.destroy",["product"=>$product["id"]])}}" method="POST">

            @csrf
            @method("Delete")
            <button value="delete" type="submit" >DELETE</button>

        </form>
           <a href='{{route("product.edit",["product"=>$product["id"]])}}'><button type='button' >update</button></a> </td>
    </tr>


    @endforeach
</tbody>
</table>
</center>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection
</html>
