<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> test email </h1>
    <h2> order details  </h2>
    @foreach ($order->products as $product)
        Name: {{ $product->name }} <br>
        Price: ${{ round($product->price / 100, 2)}} <br>
        Quantity: {{ $product->pivot->quantity }} <br>
   @endforeach

</body>
</html>

