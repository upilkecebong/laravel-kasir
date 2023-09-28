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
        <div class="list">
            <div class="item">
                <div class="foto"><img src="{!! asset('images/dawet.jpeg') !!}"></div>
                <div class="title">DAWET SEGER</div>
                <div class="harga">Rp <span id="angka">5.000</span></div>
                <button class="add" onclick="addToCard(0)">Masukkan Keranjang</button>
            </div>
            <div class="item">
                <div class="foto"><img src="{!! asset('images/cenil.jpeg') !!}"></div>
                <div class="title">CENIL MUNGIL</div>
                <div class="harga">Rp <span id="angka">2.000</span></div>
                <button class="add" onclick="addToCard(1)">Masukkan Keranjang</button>
            </div>
            <div class="item">
                <div class="foto"><img src="{!! asset('images/bakwan.jfif') !!}""></div>
                <div class="title">BAKWAN TELO</div>
                <div class="harga">Rp <span id="angka">2.000</span></div>
                <button class="add" onclick="addToCard(2)">Masukkan Keranjang</button>
            </div>
            <div class="item">
                <div class="foto"><img src="{!! asset('images/wajik.jpg') !!}"></div>
                <div class="title">WAJIK KETAN</div>
                <div class="harga">Rp <span id="angka">2.000</span></div>
                <button class="add" onclick="addToCard(3)">Masukkan Keranjang</button>
            </div>
        </div>
        <div class="chart">
            <h4>Keranjang</h4>
            <div class="chart-items">
                <ul class="citem"></ul>
                <!-- nanti belanjaannya di sini kalo ga ada belanjaannya ya natr
                di tulis "Keranjang kamu kosong, ayo jajan dulu!" -->
            </div>
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