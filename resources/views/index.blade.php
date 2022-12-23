<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/my-style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><strong>FRESH</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-
        target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-
        label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('items.create')}}">Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('orders.index')}}">Orders</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container text-center">
        <h3>Total Item</h3>
        <h3>Total Order</h3>
    </div>
<script src="/js/app.js"></script>
<script src="/js/my-style.js"></script>
</body>
</html>
