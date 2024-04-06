@extends('layouts.sbadmin2')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        {{ $deskripsi }}
                        <div>
                            <br>
                            TOTAL Order: {{ $order->count() }}
                        </div>
                        <br>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-secondary ">
                                    <td>No</td>
                                    <td>Menu</td>
                                    <td>Jumlah</td>
                                    <td>Nama</td>
                                    <td>Alamat</td>
                                    <td>Tanggal</td>
                                    <td>Total</td>
                                    <td>Status</td>
                                    @if (auth()->user()->role == 'admin')
                                    <td>Aksi</td>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($order as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->menu->nama  }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                        <td>{{ $item->pelanggan->nama}}</td>
                                        <td>{{ $item->pelanggan->alamat}}</td>
                                        <td>{{ $item->created_at  }}</td>
                                        <td>Rp {{ $item->jumlah * $item->menu->harga }}.000</td>
                                        <td>{{ $item->status }}</td>
                                        @if (auth()->user()->role == 'admin')
                                        <td>
                                            <a href="{{ route('order.edit', $item->id) }}" class="btn btn-primary">
                                                Edit
                                            </a>
                                            {!! Form::open([
                                                'route' => ['order.destroy', $item->id],
                                                'method' => 'delete',
                                                'style' => 'display:inline',
                                            ]) !!}
                                            {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>

    
@endsection