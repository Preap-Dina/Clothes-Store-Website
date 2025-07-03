@extends('frontend.layout')
@section('title')
    Home
@endsection
@section('content')
    <main class="home">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title text-primary border-bottom pb-2 border-primary">
                            NEW PRODUCTS
                        </h3>
                    </div>
                </div>  
                <div class="row gap-0">
                    @foreach ($newProducts as $item)
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
                                            {{-- <div>id: {{ $item->id }}</div> --}}
                                            <div class="price d-none">US 10</div>
                                            <div class="">Price: <span class="sale-price">US {{ $item->sale_price }}</span></div>
                                        </div>
                                        <p class="fw-bold text-secondary">{{ $item->product_name }}</p>
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
                                            {{-- <div>id: {{ $item->id }}</div> --}}
                                            <div class="price d-none">US 10</div>
                                            <div class="regular-price ">Price: <strike>US {{ $item->regular_price }}</strike></div>
                                            <div class="sale-price ">US {{ $item->sale_price }}</div>
                                        </div>
                                        <p class="fw-bold text-secondary">{{ $item->product_name }}</p>
                                    </div>
                                </figure>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    {{ $newProducts->links() }}
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title text-primary border-bottom pb-2 border-primary">
                            PROMOTION PRODUCTS
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($promoProducts as $item)
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
                                            {{-- <div>id: {{ $item->id }}</div> --}}
                                            <div class="price d-none">US 10</div>
                                            <div class="">Price: <span class="sale-price">US {{ $item->sale_price }}</span></div>
                                        </div>
                                        <p class="fw-bold text-secondary">US {{ $item->product_name }}</p>
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
                                            {{-- <div>id: {{ $item->id }}</div> --}}
                                            <div class="price d-none">US 10</div>
                                            <div class="regular-price ">Price: <strike>US {{ $item->regular_price }}</strike></div>
                                            <div class="sale-price ">{{ $item->sale_price }}</div>
                                        </div>
                                        <p class="fw-bold text-secondary">US {{ $item->product_name }}</p>
                                    </div>
                                </figure>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    {{ $promoProducts->links() }}
                </div>
            </div>
        </section>  

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title text-primary border-bottom pb-2 border-primary">
                            POPULAR PRODUCTS
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($popProducts as $item)
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
                                            {{-- <div>id: {{ $item->id }}</div> --}}
                                            <div class="price d-none">US 10</div>
                                            <div class="">Price: <span class="sale-price">US {{ $item->sale_price }}</span></div>
                                        </div>
                                        <p class="fw-bold text-secondary">US {{ $item->product_name }}</p>
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
                                            {{-- <div>id: {{ $item->id }}</div> --}}
                                            <div class="price d-none">US 10</div>
                                            <div class="regular-price ">Price: <strike>US {{ $item->regular_price }}</strike></div>
                                            <div class="sale-price ">US {{ $item->sale_price }}</div>
                                        </div>
                                        <p class="fw-bold text-secondary">{{ $item->product_name }}</p>
                                    </div>
                                </figure>
                            </div>
                        @endif
                    @endforeach 
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    {{ $popProducts->links() }}
                </div>
            </div>
        </section>

    </main>  
@endsection
