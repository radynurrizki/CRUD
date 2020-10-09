@extends('layout.main')

@section('title','Rady Nur Rizki')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">DAFTAR PRODUK</h1>

            <a href="/produk/create" class="btn btn-primary my-3">Tambah PRODUK</a>

            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama_Produk</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produks as $produk)
                    <tr>
                        <th scope="row">{{ $produk->id }}</th>
                        <td>{{ $produk->nama_produk }}</td>
                        <td>{{ $produk->keterangan }}</td>
                        <td>{{ number_format($produk->harga) }}</td>
                        <td>{{ $produk->jumlah }}</td>
                        <td>
                            <div class="row justy-content-between">
                                <a href="/produk/{{ $produk->slug }}/edit" class="btn btn-info btn-sm">Edit</a>
                                <form action="/produk/{{ $produk->slug }}/delete" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection