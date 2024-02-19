<!-- resources/views/search_results.blade.php -->
@foreach ($results as $result)
    <h3 class="product-name">
        {{-- <a class="" href="#">Link 1</a> --}}
        <a class="dropdown-item product-link fs-3"
            href="{{ route('shop.product.details', ['product_name' => $result]) }}">{{ $result }}</a>
    </h3>
@endforeach
