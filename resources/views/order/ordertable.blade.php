{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body> --}}


@extends("web/dashtemp")
@section("body")

<center>

<br>
<br>



<table style="width:80%">
<thead>
    {{-- <a href="{{route("order.create")}}"><button type="button" >Add</button></a> --}}

  <tr>
      <th scope='col'>id</th>
      <th scope='col'>user_id</th>
      <th scope='col'>total_price </th>
      <th scope='col'>action</th>

    </tr>
</thead>
<tbody>

    {{-- {{dd($data)}} --}}
@foreach ($data as $order )


 <tr>
      <th scope='row'>{{$order["id"]}}</th>

      <td>{{$order->user["name"]}}</td>
      <td>{{$order["total_price"]}}</td>


      <td>

        <form action="{{route("order.destroy",["order"=>$order])}}" method="POST">
            @csrf
            @method("DELETE")
            <button value="delete" type="submit">DELETE</button></a>
           <a href='{{route("order.edit",["order"=>$order["id"]])}}'><button type='button' >update</button></a> </td>
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
