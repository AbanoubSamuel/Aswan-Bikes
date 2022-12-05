<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{route("type.store")}}" method="POST" enctype="multipart/form-data" style="width:40% ;margin-left:22%; box-shadow:2px 2px 5px gray;
    margin-top:15px; margin-bottom:10px; padding: 3%;">
@csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input  name="name" type="text" style="width: 300px; height:20px;">

        </div>
        <button type="submit" style="width: 100px; HEIGHT:25px; margin:10px 70px;" >Submit</button>
      </form>
</body>
</html>
