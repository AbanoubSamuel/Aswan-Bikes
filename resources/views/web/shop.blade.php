


@extends("web/templete")

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@section("body")

<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large"
    onclick="w3_close()">Close &times;</button>
    @foreach ($sport as $item)

    <a class="w3-bar-item w3-button" href="{{route("filtershop",['id'=>$item['id']])}}"> {{$item["name"]}}</a>
    @endforeach

  </div>
  <div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>




















<div class="d1">



    <section class="carts1">









            @foreach ($data as $product )
            <div class="card" style="display: flex;flex-direction:column;justify-content:space-between;">
                <div class="img">
                    <img src="/storage/img/{{$product["img"]}}" alt="" style="width:100%; height:300px;">
                </div>
                <h3>{{$product["name"]}}</h3>

                <P>{{$product["describe"]}} </P>
                <p>{{$product["COLOR"]}}</p>



                @auth

                <form action="{{route("cart.store")}}" method="POST">
                    @csrf
                    <input type="text" name="product_id" value="{{$product["id"]}}" hidden>
                    <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>



<center>

    <button type="submit" >booking</button>
</center>



            </form>

                @endauth






        </div>
        @endforeach
    </div>
    </div>
    </div>
</section>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
    </script>




















@endsection
