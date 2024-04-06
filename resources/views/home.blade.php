{{-- @extends('layouts.sbadmin2')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
        <br>
        <br>
        <br>
        <h1><b>
            SELAMAT DATANG</h1>
            </b>
        <h1><b>
            DI</h1>
            </b>
        <h1><b>
            KO-FOOD</h1>
            </b> 
        
        
    </div>
    <br>
    <br>
    <br>
    <div style="display: flex; justify-content: center;">
        <button onclick="window.location.href='/menu'"style="margin-right: 35px;"class=" btn btn-primary">DAFTAR MENU</button>
        <button onclick="window.location.href='/pelanggan'"class="btn btn-primary">PELANGGAN</button>
    </div>
    
</body>

</html>
@endsection --}}

@extends('layouts.sbadmin2')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Ko-Food</title>
    <style>
        body {
            background-color: #ff00e1; /* Ganti dengan warna latar belakang yang diinginkan */
        }

        .welcome-container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            margin-top: 130px; /* Sesuaikan dengan kebutuhan */
        }

        .welcome-title {
            font-weight: bold;
            font-size: 2.5em;
            color: #007bff; /* Ganti dengan warna teks yang diinginkan */
            text-align: center;
            margin-bottom: 50px; /* Sesuaikan dengan kebutuhan */
        }

        .sub-title {
            font-size: 2.5em;
            color: #28a745; /* Ganti dengan warna teks yang diinginkan */
            text-align: center;
            margin-bottom: 50px; /* Sesuaikan dengan kebutuhan */
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 50px; /* Sesuaikan dengan kebutuhan */
        }

        .action-buttons button {
            margin-right: 35px;
            font-size: 1.2em;
            padding: 10px 20px;
            background-color: #000000; /* Warna latar belakang */
            color: #ffffff; /* Warna teks */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-buttons button:hover {
        background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <h1 class="welcome-title">
            SELAMAT DATANG <br>DI <br> KO-FOOD
        </h1>
        <h2 class="sub-title">
            Nikmati Pengalaman Kuliner Terbaik Bersama Kami
        </h2>
    </div>

    <div class="action-buttons">
        <button onclick="window.location.href='/menu'" class="btn btn-primary">DAFTAR MENU</button>
        <button onclick="window.location.href='/pelanggan'" class="btn btn-primary">PELANGGAN</button>
    </div>
    
</body>
</html>
@endsection