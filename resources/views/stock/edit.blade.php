<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Edit Stock</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('stock.update',['stock'=>$stock])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$stock->name}}">
        </div>
        <div>
            <label>Num stocks</label>
            <input type="text" name="num_stocks" placeholder="Num stocks" value="{{$stock->num_stocks}}">
        </div>
         <div>
             <label>Price</label>
             <input type="text" name="price" placeholder="Price" value="{{$stock->price}}">
         </div>
         <div>
             <label>Description</label>
             <input type="text" name="description" placeholder="Description" value="{{$stock->description}}">
         </div>
        <input type="submit" value="Update">
    </form>

</body>
</html>
