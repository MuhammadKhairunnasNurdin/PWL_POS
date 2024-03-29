@extends('layouts.app')

{{--Customize layout sections--}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

{{--Content body: main page content--}}
@section('content')
    <div class="container">
        <div class="card-header">
            <h3 class="card-title">Buat Kategori baru</h3>
        </div>

        <form method="post" action="../kategori">
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_kategori">Kode Kategori</label>
                    <input type="text" id="kode_kategori" name="kategori_kode" class="form-control @error('kategori_kode') is-invalid @enderror">

                    @error('kategori_kode')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control @error('kategori_nama') is-invalid @enderror" id="namaKategori" name="kategori_nama" placeholder="">

                    @error('kategori_nama')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            {{--show all error below form row--}}
            {{--@if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif--}}
        </form>

    </div>
@endsection
