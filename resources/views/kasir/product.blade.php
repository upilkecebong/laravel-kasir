@extends('kasir.main')

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
    <div class="chart-footer">
        <div class="total">
            <h5>TOTAL</h5>
            <h3>Rp<span id="total">0</span></h3>
        </div>
        <button class="bayar" data-toggle="modal" data-target="#bayarModal">BAYAR</button>
    </div>
@endsection

<div class="modal fade" id="bayarModal" tabindex="-1" role="dialog" aria-labelledby="bayarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bayarModalLabel">Formulir Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Formulir pelanggan di sini -->
                <form action="{{ route('customer.store') }}" method="POST">
                    @csrf
                    <!-- Tambahkan elemen formulir sesuai dengan tabel customer -->
                    <div class="form-group">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <!-- Tambahkan elemen formulir lainnya -->

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="app.js"></script>



