@extends('layouts.sbadmin2')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sendiri</title>
</head>
<body>
    <div>
        <img src="https://via.placeholder.com/150" alt="Foto Profil">
        <h1>Nama Lengkap</h1>
        <p>Umur: 20 tahun</p>
        <p>Email: contoh@email.com</p>
        <p>Telepon: 081234567890</p>
        <p>Alamat: Jalan Contoh, No. 1, Kota Contoh</p>
    </div>
    
</body>

</html>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Beranda') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
