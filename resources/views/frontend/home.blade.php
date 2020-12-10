@extends('frontend.layouts.master')
@section('main')
<main role="main">

   @include('frontend.partials._hero')

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          @foreach ($products as $product)
            {{-- {{ dd($product->getMedia('products')) }} --}}
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ route('frontend.product.details',['slug' => $product->slug]) }}">
                        <img class="card-img-top" src="{{ $product->getFirstMediaUrl('products') }}" alt="{{ $product->title }}">
                    <a>
                    {{-- <img class="card-img-top" src="{{ $product->getMedia('products')}}" alt="{{ $product->title }}"> --}}
                <div class="card-body">
                    <a href="{{ route('frontend.product.details',['slug' => $product->slug]) }}">
                        <p class="card-text">
                            {{ $product->title }}
                        </p>
                    </a>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to cart</button>
                    </div>
                    <strong class="text-muted">BDT {{ $product->price }}</strong>
                    </div>
                </div>
                </div>
            </div>
          @endforeach



        </div>
        <hr>
        {{ $products->links() }}

      </div>
    </div>

  </main>
@endsection
