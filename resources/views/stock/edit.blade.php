@include("layouts/header")
<div class="edit-stock-wrapper">
    <h1 style="background-color: #0f5132;" class="text-white">Edit Stock</h1>
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
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control"  name="name" placeholder="Name" value="{{$stock->name}}">
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">Num stocks</label>
            <input type="text" class="form-control" name="num_stocks" placeholder="Num stocks" value="{{$stock->num_stocks}}">
        </div>
         <div>
             <label for="exampleFormControlInput1" class="form-label">Price</label>
             <input type="text" class="form-control" name="price" placeholder="Price" value="{{$stock->price}}">
         </div>
         <div>
             <label for="exampleFormControlInput1" class="form-label">Description</label>
             <input type="text" class="form-control" name="description" placeholder="Description" value="{{$stock->description}}">
         </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
</div>
@include("layouts/footer")
