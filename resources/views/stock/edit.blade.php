@include("layouts/header")
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
@include("layouts/footer")
