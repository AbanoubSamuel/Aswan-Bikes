
@extends("web/dashtemp")
@section("body")




<center>
  <br>
  


<h2>Our Categories</h2>
<br>
<a href="{{route("category.create")}}"><button type="button" >Add</button></a>


  <table   style="width:60%">
  <thead>

    <tr>
        <th scope='col'>id</th>
        <th scope='col'>name</th>
        <th scope='col'>action</th>
      </tr>
  </thead>
  <tbody>
@foreach ($data as $item)




        <tr>
        <th scope='row'>{{$item["id"]}}</th>

        <td>{{$item["name"]}}</td>


        <td> <form action="{{route("category.destroy",["category"=>$item])}}" method="POST">
            @csrf
            @method("Delete")
            <button value="delete" type="submit" >DELETE</button>
            {{-- <a href="{{route("category.create",["id"=>$item["id"]])}}"><button type="button" >Add</button></a> --}}
        </form></a>

             </td>
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
