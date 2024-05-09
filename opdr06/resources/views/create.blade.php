<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <form name="product-form" method="post" action="{{url('product-form')}}">
            
            @csrf

            <label for="code">Code: </label>
            <input type="text" id="code" name="code"><br><br>

            <label for="name">Name: </label>
            <input type="text" id="name" name="name"><br><br>

            <label for="quantity">Quantity: </label>
            <input type="text" id="quantity" name="quantity"><br><br>

            <label for="price">Price:</label>
            <input type="number" name="price" id="price" ><br><br>

            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea><br><br>
            
            <button type="submit">Add Product</button>
        </form>
    </section>

</body>
</html>