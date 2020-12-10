@extends('frontend.layouts.master')
@section('main')
 <main class="container">
    <div class="bg-white p-5 rounded d-flex" style="margin-top:50px;">
     <div class="col-md-4">
         <img src="{{ $product->getFirstMediaUrl('products') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
     </div>

     <div class="col-md-6 mx-auto">
         <h1>{{ $product->title }}</h1>
         <hr>
         <h2>Details:</h2>
         <p class="lead">{{ $product->description }}</p>
         <h3>Price: BDT-<span style="color:pink;">{{ $product->price }}</span></h3>
         <hr>
         <a class="btn btn-lg btn-primary" href="#" role="button">Add To Cart &raquo;</a>

     </div>
    </div>
  </main>
@endsection
