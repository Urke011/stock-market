@include("layouts/header")
    <h1>Create Stock</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('stock.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label>Num stocks</label>
            <input type="text" name="num_stocks" placeholder="Num stocks">
        </div>
         <div>
             <label>Price</label>
             <input type="text" name="price" placeholder="Price">
         </div>
         <div>
             <label>Description</label>
             <input type="text" name="description" placeholder="Description">
         </div>
        <input type="submit" value="Save new Stock">
    </form>
@include("layouts/footer")
