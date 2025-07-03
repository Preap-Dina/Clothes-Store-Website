@extends('frontend.layout')
@section('title')
    Product Detail
@endsection
@section('content')
<main class="product-detail">

    <section class="review">
        <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="thumbnail">
                            <img src="{{ $product->image }}" alt="" class="w-100 object-fit-contain border" height="400px">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="detail">
                            <div class="price-list">
                                <div class="price d-none">US 30.5</div>
                                <span class="title m-0">Price: </span> 
                                <span class="m-0 mx-1">US </span> 
                                @if ($product->regular_price != $product->sale_price)
                                    <div class="regular-price"><strike> {{ $product->regular_price }} </strike></div>    
                                @endif
                                <div class="sale-price"> {{ $product->sale_price }} </div>
                            </div>
                            <h5 class="title"> {{ $product->product_name }} </h5>
                            <div class="group-size">
                                <span class="title">Color Available</span>
                                <div class="group">
                                    {{ $product->color }}
                                </div>
                            </div>
                            <div class="group-size">
                                <span class="title">Size Available</span>
                                <div class="group">
                                    {{ $product->size }}
                                </div>
                            </div>
                            <div class="group-size">
                                <span class="title">Description</span>
                                <div class="description">
                                    {{ $product->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        RELATED PRODUCTS
                    </h3>
                </div>
            </div>
            <div class="row">
                @foreach ($relateProducts as $item)
                    @if ($item->regular_price == $item->sale_price)
                        <div class="col-3 overflow-hidden">
                            <figure class=" rounded-3" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                                <div class="thumbnail">
                                    <a href="{{ route('productDetail', $item) }}">
                                        <img src="{{ $item->image }}" alt="" height="250px" class="object-fit-contain">
                                    </a>
                                </div>
                                <div class="detail border-top">
                                    <div class="price-list">
                                        <div>id: {{ $item->id }}</div>
                                        <div class="price d-none">US 10</div>
                                        <div class="">Price: <span class="sale-price">{{ $item->sale_price }}</span></div>
                                    </div>
                                    <h5 class="title">{{ $item->product_name }}</h5>
                                </div>
                            </figure>
                        </div>
                    @else
                        <div class="col-3 overflow-hidden">
                            <figure class=" rounded-3 overflow-hidden" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                                <div class="thumbnail ">
                                    <div class="status">
                                        Promotion
                                    </div>
                                    <a href="{{ route('productDetail', $item) }}">
                                        <img src="{{ $item->image }}" alt="" height="250px" class="object-fit-contain">
                                    </a>
                                </div>
                                <div class="detail border-top">
                                    <div class="price-list">
                                        <div>id: {{ $item->id }}</div>
                                        <div class="price d-none">US 10</div>
                                        <div class="regular-price ">Price: <strike>{{ $item->regular_price }}</strike></div>
                                        <div class="sale-price ">{{ $item->sale_price }}</div>
                                    </div>
                                    <h5 class="title">{{ $item->product_name }}</h5>
                                </div>
                            </figure>
                        </div>
                    @endif
                @endforeach

                {{-- @for ($i = 0; $i < 4; $i++)
                @endfor --}}
            </div>
        </div>
    </section>

</main>
@endsection