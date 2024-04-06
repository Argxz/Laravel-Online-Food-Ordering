@extends('layouts.sbadmin2')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach ($menu as $item)
            <div class="col-md-4 mb-3">
                <div class="card text-center mt-5" style="width: 20rem;">
                    @if ($item->gambar != '')
                        <div class="col-md-15 mb-15 px-2 py-2">
                        <a href="{{ Storage::url($item->gambar) }}" target="blank">
                        <img src="{{ Storage::url($item->gambar) }}" alt="Foto"
                                    class="card-img-top">
                        </a>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"> <b>{{ $item->nama }}</b></h5>
                        <p class="card-text">{{ $item->jenis }}</p>
                        <p class="card-text">RP {{ $item->harga }}.000</p>
                        @if (auth()->user()->role != 'admin')
                        <a href="{{ route('order.create') }}" class="btn btn-warning btn-outline-dark">Order</a>
                        @endif
                        @if (auth()->user()->role == 'admin')
                        <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        {!! Form::open([
                            'route' => ['menu.destroy', $item->id],
                            'method' => 'delete',
                            'style' => 'display:inline',
                        ]) !!}
                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection