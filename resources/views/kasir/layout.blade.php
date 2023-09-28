<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mochiy Pop P One' rel='stylesheet'>
    <link  type="text/css" rel="stylesheet" href="{!! asset('css/index.css') !!}">
    <title>WARUNG | XII-SIJA-A</title>
</head>
<body>

    <div class="container">
        <header>
            <h1>Jajan Yuk!</h1>
            <h5>Selamat datang di  warung 12-SIJA-A! Mau jajan apa hari ini?</h5>
        </header>
    </div>

    <div class="list-container">
        @yield('product')
        <div class="chart">
            <h4>Keranjang</h4>
            @yield('chart')
            <div class="chart-footer">
                <div class="total">
                    <h5>TOTAL</h5>
                    <h3>Rp<span id="total">0</span></h3>
                </div>
                <button class="bayar" onclick="bayar()">BAYAR</button>
            </div>
        </div>
    </div>


    <script src="app.js"></script>
</body>
</html>
