@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('product.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PRODUK</a>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA</th>
                            <th>STOCK</th>
                            <th>HARGA</th>
                            <th>GAMBAR</th>
                            <th style="width: 15%">AKSI</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->id  }}</td>
                                <td>{{ $product->nama  }}</td>
                                <td>{{ $product->jumlah  }}</td>
                                <td>{{ $product->harga  }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/foto/'.$product->foto) }}" class="rounded" style="width: 150px">
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <div class="alert">
                                Anda belum memiliki produk
                            </div>
                        @endforelse
                    </tbody>

                </table>
                {{-- {{ $product->links() }} --}}

            </div>
        </div>
    </div>
@endsection
