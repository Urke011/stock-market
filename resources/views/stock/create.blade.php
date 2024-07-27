@include("layouts/header")
<div class="stock-wrapper">
    <h1 style="background-color: #0f5132;" class="text-white">Create stock</h1>
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
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name" required>
        </div>
        <div>
            <label>Num stocks</label>
            <input type="text" class="form-control" name="num_stocks" id="exampleFormControlInput1" placeholder="Num stocks" required>
        </div>
         <div>
             <label>Price</label>
             <input type="text" class="form-control" name="price" id="exampleFormControlInput1" placeholder="Price" required>
         </div>
         <div>
             <label>Description</label>
             <input type="text" class="form-control" name="description" id="exampleFormControlInput1" placeholder="Description" required>
         </div>
        <input type="submit" class="btn btn-primary" value="Save new Stock">
    </form>
</div>
@include("layouts/footer")
