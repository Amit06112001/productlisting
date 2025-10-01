@extends('layouts.app')

@section('content')

<div class="filter-bar d-flex align-items-center mb-4">
    <a href="#" class="active">All Products</a>
    <a href="#">Bamboo</a>
    <a href="#">Plant-based</a>
    <a href="#">Toothpaste</a>
    <a href="#">Floss</a>
    <div class="ms-auto">
        <a href="#"><i class="fa fa-sliders"></i> Filters</a>
    </div>
</div>


<div class="row">
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-card">
                    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}">
                    <h6 class="product-title">{{ $product['title'] }}</h6>
                    <p class="product-price">€{{ number_format($product['price'], 2) }}</p>
                        <button class="btn btn-success w-100">
                            <i class="fas fa-cart-plus me-2"></i> Add to Cart
                        </button>

                </div>
                
            </div>
        @endforeach
    @else
        <div class="text-center py-5">
            <i class="fas fa-exclamation-triangle fa-3x text-warning mb-3"></i>
            <h4>No products available</h4>
            <p>Unable to fetch products at the moment.</p>
        </div>
    @endif
</div>

@endsection
