<div>

    <div class="d-flex justify-content-between align-items-center">
        <a href="{{route('cart.details')}}" class="btn btn-primary text-capitalize font-weight-bolder">
            Cart :{{ $totalProduct }}
        </a>

        <p class="btn btn-warning" wire:click='clearCart' style="cursor: pointer">
            Clear Cart
        </p>

    </div>
</div>
