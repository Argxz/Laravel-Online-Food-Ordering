@extends('layouts.sbadmin2')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">
                        LIST PELANGGAN
                    </div>
                    <div class="card-body">
                        <br>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-secondary ">
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Nomor HP</td>
                                    <td>Alamat</td>
                                    @if (auth()->user()->role == 'user')
                                    <td>Aksi</td>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($pelanggan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nomorhp }}</td>
                                        <td>{{ $item->alamat }}</td>
                                            @if (auth()->user()->role == 'user')
                                        <td>
                                            <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-primary">
                                                Edit
                                            </a>
                                            {!! Form::open([
                                                'route' => ['pelanggan.destroy', $item->id],
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