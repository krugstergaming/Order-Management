@extends('layout')


@section('main-content')


<div id="top-content">

    <p>rjo</p>
    <p>rjo</p>
    <p>rjo</p>

</div>

<div id="best-sellers">

    <h3>BEST SELLERS</h3>
    <div class="card-container-wrapper">
        <div class="card-containers">

            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/sample-shirt.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">T-Shirt with Girl</h5>
                    <p class="card-text-sub">T-Shirt is a little off. It is white and has a picture of a girl on
                        it.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>

            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/tshirt-2.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Plain Black Tee</h5>
                    <p class="card-text-sub">Plain Black T-shirt.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>

            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/sample-shirt1.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Black Coffee Shirt</h5>
                    <p class="card-text-sub">Oversized tee with coffee icon.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>

            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/sample-shirt2.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Garfield Shirt</h5>
                    <p class="card-text-sub">Limited Edition shirt of Garfield collection.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>

            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/sample-shirt3.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Statement Shirt</h5>
                    <p class="card-text-sub">Statment shirt with quote in the middle.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>


        </div>
    </div>

</div>

<div id="new-products">

    <h3>NEW PRODUCTS</h3>

    <div class="card-container-wrapper">
        <div class="card-containers">
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/sample-shirt4.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">T-Shirt with Girl</h5>
                    <p class="card-text-sub">T-Shirt is a little off. It is white and has a picture of a girl on
                        it.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/sample-shirt5.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">T-Shirt with Girl</h5>
                    <p class="card-text-sub">T-Shirt is a little off. It is white and has a picture of a girl on
                        it.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/sample-shirt6.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">T-Shirt with Girl</h5>
                    <p class="card-text-sub">T-Shirt is a little off. It is white and has a picture of a girl on
                        it.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/sample-shirt7.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">T-Shirt with Girl</h5>
                    <p class="card-text-sub">T-Shirt is a little off. It is white and has a picture of a girl on
                        it.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/sample-shirt8.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">T-Shirt with Girl</h5>
                    <p class="card-text-sub">T-Shirt is a little off. It is white and has a picture of a girl on
                        it.</p>
                </div>
                <button class="card-btn btn btn-success">Buy</button>
            </div>
        </div>
    </div>

</div>


@endsection
