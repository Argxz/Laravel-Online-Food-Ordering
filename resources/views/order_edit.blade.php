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

                            <div class="form-group">
                                <label for ="my-input">Status</label>
                                <select name="status" class="form-control">
                                    @foreach ( $list_stat as $key => $value )
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
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
