@extends('layout.master')

@section('title', $item->nama)

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-8">
                <h2>{{ $item->nama}}</h2>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{route('items.edit', $item->id)}}" class="btn btn-primary ml-3">
                            Edit
                        </a>
                        <form action={{route('items.destroy', $item->id)}} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-3">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <ul class="list-inline">
            <li class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                <em>{{$item->stok}}</em>
            </li>
            <li class="list-inline-item">
                <i class="fa fa-dollar-sign fa-fw"></i>
                <em>{{$item->harga}}</em>
            </li>
        </ul>
    </div>
@endsection



