@extends("web/templete")
@section("body")


	<title>Shopping Cart</title>



	<link rel="stylesheet" type="text/css" href="assets/css/total.css">

</head>

<body>






		<div class="container">

			<h1>Shopping Cart</h1>

			<div class="cart">

				<div class="products">

                 @foreach ($data as $cart)


					<div class="product">


						<img
							src="storage/img/{{$cart->product["img"]}}"  style="width: 100%">
						<div>
                            <div  class="product-info">
							<p class="product-name">{{$cart->product["name"]}}</p>
                        </div>
                        <div >
							<p class="product-price">Size:{{$cart->product["size"]}}</p>
                        </div>
							<p class="product-offer">Color:{{$cart->product["COLOR"]}}</p>
                               <br>
                               <br>

                            <h4 class="product-offer">Price: {{$cart["total"]}}</h4>


							{{-- <p class="product-remove">

								<i class="fa fa-trash" aria-hidden="true"></i>



							</p> --}}



                        <form action="{{route("cart.destroy",["cart"=>$cart["id"]])}}" method="post">
                            @method('Delete')
                            @csrf

                                <button  type="submit"  style=" width:120px;margin-left:350px;" class="btn btn-danger">delete</button>
                         </form>


						</div>

                        <form id="frmDate" action="{{route("cart.update",["cart"=>$cart])}}" method="post"  style="width: 30%">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" value="{{$cart->product["id"]}}" class="form-control"  name="product_id" hidden >
                                </div>

                            <div class="form-group">
                                startdate: <input type="datetime-local" class="form-control" value="{{$cart["startdate"]}}" name="startdate" >
                              </div>

                              <div class="form-group">
								returndate: <input type="datetime-local" value="{{$cart["returndate"]}}" class="form-control" name="returndate" >
                              </div>

                              <p class="product-quantity">Qnt: <input type="number" value="{{$cart["quantity"]}}" name="quantity">
                                <button type="submit"  style="width: 100px" class="btn btn-primary">Refresh</button>


                                {{-- <input type="submit" value="edit"> --}}



                              <div class="form-group">
                              <input type="text" value="{{$cart->product["price"]}}" class="form-control" name="price" hidden >
                              </div>



                              {{-- <h4 class="product-offer">{{$data}}</h4> --}}


					</div>

                </form>
                    @endforeach

					<!-- <div class="product">

						<img
							src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5y5SmWwTuBoRuF103Mtx6vYM0wDJzL6h5f9rem8g8bo6YSKHgkAuSP-Eu4NergZvi3PY&usqp=CAU">

						<div class="product-info">

							<h3 class="product-name">New bikes</h3>

							<h4 class="product-price">LE 2,000</h4>

							<h4 class="product-offer">40%</h4>

							<p class="product-quantity">Qnt: <input value="1" name="">

							<p class="product-remove">

								<i class="fa fa-trash" aria-hidden="true"></i>

								<span class="remove">Remove</span>

							</p>

						</div> -->

					</div>

				</div>



				<div class="total">

					<p>

						<span><h3>Total Price : {{$tottal}} LE</h3></span>



					</p>

					<p>

						<span ><h5>Number of Items : {{count($data)}} </h5></span>

						<span></span>

					</p>



         <form action="{{route("orderstore")}}"  method="post">
            @csrf

            <input type="number" name="tottal" value="{{$tottal}}" hidden>

            <button type="submit" class="btn btn-success">Confirm</button>

                </form>
				</div>

			</div>

		</div>



		@endsection
