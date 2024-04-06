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

                        {!! Form::model($menu, ['route' => $route, 'method' => $method,'enctype'=>'multipart/form-data']) !!}
                        <div class="card-body">
                            {!! Form::model($menu, ['route' => $route, 'method' => $method]) !!}
                            <div class="form-group">
                                <label for="my-input">Nama Menu</label>
                                {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            </div>

                            <div class="form-group">
                                <label for ="my-input">Jenis</label>
                                <select name="jenis" class="form-control">
                                    @foreach ( $list_sp as $key => $value )
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Harga</label>
                                {!! Form::text('harga', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('harga') }}</span>
                            </div>

                            <div class="form-group mt-3">
                                <label for="gambar">Gambar</label>
                                <input class="form-control" type="file" name="gambar" value="{{ old('gambar') }}">
                                <span class="text-danger">{{ $errors->first('gambar') }}</span>
                            </div>

                            </form>
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
