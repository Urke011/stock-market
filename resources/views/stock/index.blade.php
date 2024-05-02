<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/customCss.css')}}">
    <title>Stock Market</title>
</head>
<body>
<!-- logo part -->
<div class="logo-part d-flex align-items-center ">
    <div class="container text-center text-white">
        <h1>Easily invest with us in crypto and stock market shares</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, saepe!</p>
        <div>
            <button type="button" class="btn btn-primary m-2">Contact us!</button>

            <button type="button" class="btn btn-primary m-2">Portfolio</button>
        </div>
    </div>
</div>
<!-- main part -->
<div class="main-stock-wrapper bg-light mt-4 p-2" style="overflow: hidden;">
    <div class="row">
        <div class="col-2">
            <div>
                <div class="bg-dark">
                    <p class="text-white">Logo</p>
                    <p class="text-white">Cene ulaganja</p>
                </div>
                <p>Home</p>
                <p>Blog, News</p>
                <p>Setings</p>
                <p>Forum</p>
            </div>
        </div>
        <div class="col-10">
            <div>
                <div>
                    <h3>Moj portfolio</h3>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="d-flex mt-3">
                <div class="border col">
                    <p><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p>Name</p>
                    <p>Price</p>
                    <p>Score</p>
                </div>
                <div class="border col">
                    <p><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p>Name</p>
                    <p>Price</p>
                    <p>Score</p>
                </div>
                <div class="border col">
                    <p><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p>Name</p>
                    <p>Price</p>
                    <p>Score</p>
                </div>
                <div class="border col">
                    <p><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p>Name</p>
                    <p>Price</p>
                    <p>Score</p>
                </div>
                <div class="border col">
                    <p><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p>Name</p>
                    <p>Price</p>
                    <p>Score</p>
                </div>
            </div>
            <div class="d-flex">
            <div class="line-chart">
                <p><img src="{{'assets/images/logo/rtaImage.png'}}" alt=""></p>
            </div>
                <div>
                    <p>Lista zelja</p>
                    
                </div>
            </div>
        </div>
    </div>

</div>
<div>
    @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
</div>
@foreach($stocks as $stock)
    <div>
        <h2>
            Name: {{$stock->name}}
        </h2>
        <p>Num Stocks: {{$stock->num_stocks}}</p>
        <p>Price: {{$stock->price}}</p>
        @php
            $createDate = new DateTime($stock->created_at);
            $strip = $createDate->format('d-m-Y');

        @endphp
        <p>Created: {{$strip}}</p>
        <p><a href={{route('stock.edit',['stock'=>$stock])}}>Edit stock</a></p>
        <form action="{{route('stock.delete',['stock'=>$stock])}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
        </form>
    </div>
    <hr>
@endforeach
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/js/template.js')}}"></script>
</body>
</html>
