@extends('layout.main')

@section('title','Form Ubah Data Produk') 

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-2">Form Ubah Data Produk</h1>

                <form method="post" action="/produk/{{ $produk->slug }}/edit">
                @method('patch')
                @csrf
                    <div class="form-group">
                        <label for="nama_produk">nama_Produk</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" placeholder="masukan nama_produk" name="nama_produk" value="{{( $produk->nama_produk )}}">
                        @error('nama_produk')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="masukan keterangan" name="keterangan" value="{{ $produk->keterangan }}">
                        @error('keterangan')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="masukan harga" name="harga" value="{{ $produk->harga }}">
                        @error('harga')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="masukan jumlah" name="jumlah" value="{{ $produk->jumlah }}">
                        @error('jumlah')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <button type="submit" class="bnt btn-primary">Ubah Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection 
