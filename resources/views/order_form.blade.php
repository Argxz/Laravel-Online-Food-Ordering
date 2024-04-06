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

                        {!! Form::model($order, ['route' => $route, 'method' => $method]) !!}
                        <div class="card-body">
                            {!! Form::model($order, ['route' => $route, 'method' => $method]) !!}

                            <div class="form-group mt-2">
                                <label for="menuid">Pilih Menu</label>
                                <select name="menuid" class="form-control">
                                    @foreach ($list_menu as $item)
                                        <option value="{{ $item->id }}">
                                            {{ "{$item->nama} - Harga {$item->harga} K" }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('menuid') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Jumlah</label>
                                {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                            </div>

                            <div class="form-group mt-2">
                                <label for="pelangganid">Pilih Penerima</label>
                                <select name="pelangganid" class="form-control">
                                    @foreach ($list_pelanggan as $item)
                                        <option value="{{ $item->id }}">
                                            {{ "{$item->nama} - {$item->nomorhp} - {$item->alamat}" }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('pelangganid') }}</span>
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
