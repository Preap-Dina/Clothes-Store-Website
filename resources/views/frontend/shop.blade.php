@extends('frontend.layout')
@section('title')
    Shop
@endsection
@section('content')
<main class="shop">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        @foreach ($products as $item)
                            @if ($item->regular_price == $item->sale_price)
                                <div class="col-4 overflow-hidden">
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
                                <div class="col-4 overflow-hidden">
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
                        
                        <div class="mt-3 d-flex justify-content-end gap-0">
                            {{ $products->links() }}
                        </div>
                    </div>  
                </div>

                <div class="col-3 filter">
                    <h4 class="title">Category</h4>
                    <ul>
                        <li>
                            <a href="{{ route('shop') }}">ALL</a>
                        </li>

                        @foreach ($cate as $item)
                            <li>
                                <a href="{{ route('shop', ['cat' => $item->category_name]) }}">
                                    {{ $item->category_name }}
                                </a>
                            </li>
                        @endforeach
                        
                    </ul>
                    
                    <h4 class="title mt-4">Price</h4>
                    <div class="block-price mt-4">
                        <a href="/shop?price=max">High</a>
                        <a href="/shop?price=min">Low</a>
                    </div>

                    <h4 class="title mt-4">Promotion</h4>
                    <div class="block-price mt-4">
                        <a href="/shop?promotion=true">Promotion Product</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
@endsection