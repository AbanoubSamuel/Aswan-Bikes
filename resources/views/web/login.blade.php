@extends("web.templete")
@section("body")



    <title>Aswan Bikes</title>
    <link rel="stylesheet" href="assets/css/formreg.css">
 </head>
<body>
<div class="container ">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif




    <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">

        @csrf





        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

<center>
    {{-- <input type="reset" name="reset" value="Reset" class="bottom"> --}}
    <input type="submit" name="submit" value="Submit" class="bottom">
</center>


    </form>

</div>
</body>
<script src="assets/js/form.js">

</script>
@endsection
</html>
