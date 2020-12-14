@extends('frontend.layouts.master')
@section('main')
<main role="main">

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @livewire('cart-status')
            </div>
    </div>

</main>
@endsection
