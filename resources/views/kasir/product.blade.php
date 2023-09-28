@extends('kasir.layout')
@section('product')
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
@endsection

@section('chart')
<p>halo</p>
@endsection

