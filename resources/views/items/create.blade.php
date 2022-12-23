@extends('layout.master')

@section('title', 'Add New Item')

@section('content')
    <h2>Add New Item</h2>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                    value="{{ old('nama') }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga"
                    min="1" value="{{ old('harga') }}">
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="genre">Stok</label>
                <input type="number" class="form-control @error('stok') is-invalid @enderror"
                    name="stok" id="stok" min="1" value="{{ old('stok') }}">
                @error('stok')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
    </form>
@endsection
