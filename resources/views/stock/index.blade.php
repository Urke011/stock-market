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
            <a href="">
            <button type="button" class="btn btn-primary m-2">Contact us!</button>
            </a>
            <a href="#main-stock-wrapper">
            <button type="button" class="btn btn-primary m-2">Portfolio</button>
            </a>
        </div>
    </div>
</div>
<!-- main part -->
<div class="main-stock-wrapper bg-light mt-4 p-2" id="main-stock-wrapper" style="overflow: hidden;">
    <div class="row">
        <div class="col-2">
            <div class="bg-dark">
                <div class="bg-dark p-3">
                    <p class="text-white mb-5">Logo</p>
                    <p class="text-white">Cene ulaganja</p>
                </div>
                <div class="p-3 mt-5" style="background-color: #014c82;">
                <p class="mb-5 text-white">Home</p>
                <p class="mb-5 text-white">Blog, News</p>
                <p class="mb-5 text-white">Setings</p>
                <p class="mb-5 text-white">Forum</p>
                </div>
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
                <div class="border col p-2">
                    <p class="text-end"><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p class="fw-bold">Name</p>
                    <p class="fw-bold">Price</p>
                    <p class="fw-bold">Score</p>
                </div>
                <div class="border col p-2">
                    <p class="text-end"><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p class="fw-bold">Name</p>
                    <p class="fw-bold">Price</p>
                    <p class="fw-bold">Score</p>
                </div>
                <div class="border col p-2">
                    <p class="text-end"><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p class="fw-bold">Name</p>
                    <p class="fw-bold">Price</p>
                    <p class="fw-bold">Score</p>
                </div>
                <div class="border col p-2">
                    <p class="text-end"><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p class="fw-bold">Name</p>
                    <p class="fw-bold">Price</p>
                    <p class="fw-bold">Score</p>
                </div>
                <div class="border col p-2">
                    <p class="text-end"><img src="{{'assets/images/logo/Microsoft_logo_(2012).svg'}}" alt="logo"
                            style="width: 4rem;"></p>
                    <p class="fw-bold">Name</p>
                    <p class="fw-bold">Price</p>
                    <p class="fw-bold">Score</p>
                </div>
            </div>
            <div class="d-flex justify-content-around m-5">
            <div class="line-chart">
                <p><img src="{{'assets/images/logo/rtaImage.png'}}" alt="" style="width: 100%;"></p>
            </div>
                <div class="border rounded p-5 m-2 text-center" style="background-color: #7abd30;">
                    <p class="text-white fs-3">Lista zelja</p>
                    <div class="d-flex">
                        <div>
                        <ol>
                            <li class="text-white fs-4">Microsoft 120$</li>
                            <li class="text-white fs-4">Microsoft 120$</li>
                            <li class="text-white fs-4">Microsoft 120$</li>
                            <li class="text-white fs-4">Microsoft 120$</li>
                            <li class="text-white fs-4">Microsoft 120$</li>
                            <li class="text-white fs-4">Microsoft 120$</li>
                            <li class="text-white fs-4">Microsoft 120$</li>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-part">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 50vh;">
                    <img src="{{'assets/images/sliders/blogging-guide-K5DY18hy5JQ-unsplash.jpg'}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 50vh;">
                    <img src="{{'assets/images/sliders/nick-chong-N__BnvQ_w18-unsplash.jpg'}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 50vh;">
                    <img src="{{'assets/images/sliders/blogging-guide-K5DY18hy5JQ-unsplash.jpg'}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
