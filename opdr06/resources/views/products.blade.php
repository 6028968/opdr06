<!DOCTYPE html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <a href="{{ route('products.create') }}">Voeg product toe =></a>
    <h1>Products</h1>
    <section>
        <ul>
            @foreach ($products as $product)
                <li>
                    <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
                </li>
            @endforeach
        </ul>
    </section>
</body>
</html>