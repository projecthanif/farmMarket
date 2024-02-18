<!-- resources/views/search_results.blade.php -->
@foreach ($results as $result)
    <div>{{ $result->product_name }}</div>
@endforeach
