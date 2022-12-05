@extends("web/templete")
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@section("body")

<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large"
    onclick="w3_close()">Close &times;</button>

        @foreach ($category as $item)
        <a class="w3-bar-item w3-button" href="{{route("filter",['id'=>$item['id']])}}"> {{$item["name"]}}</a>

        @endforeach
    </div>
    <div>
        <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>

        <h1>Aswan Tours</h1>
        <div class="d1">



            <section class="carts1">





  @foreach ($data as $item )
  <div class="card">
      <div class="img" >
          <img src="/storage/img/{{$item["img"]}}" alt="" style="width:100%; height:300px; border-radius:5px;">
      </div>


      <P>{{$item["description"]}} </P>











</div>
@endforeach
</div>
</div>
</div>
</section>



  @endsection
  <script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
    </script>
