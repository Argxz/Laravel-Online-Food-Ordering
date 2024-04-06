@extends('layouts.sbadmin2')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">

                        {!! Form::model($pelanggan, ['route' => $route, 'method' => $method]) !!}
                        <div class="card-body">
                            {!! Form::model($pelanggan, ['route' => $route, 'method' => $method]) !!}
                            <div class="form-group">
                                <label for="my-input">Nama</label>
                                {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Nomor HP</label>
                                {!! Form::text('nomorhp', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('nomorhp') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Alamat</label>
                                {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
                            </div>

                                <br>
                                <div class="form-group mt-2">
                                    <br>
                                    {!! Form::submit($tombol, ['class' => 'btn btn-primary']) !!}
    
                                    {!! Form::close() !!}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
