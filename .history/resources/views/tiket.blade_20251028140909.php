<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Wisata</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        
        .icon {
            font-size: 60px;
            margin-bottom: 20px;
        }
        
        h1 {
            color: #667eea;
            font-size: 28px;
            margin-bottom: 30px;
        }
        
        .info-box {
            background: #f8f9fa;
            border-left: 5px solid #667eea;
            padding: 20px;
            margin: 15px 0;
            text-align: left;
            border-radius: 10px;
        }
        
        .label {
            color: #6c757d;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        
        .value {
            color: #212529;
            font-size: 24px;
            font-weight: bold;
        }
        
        .price {
            color: #28a745;
            font-size: 32px;
            font-weight: bold;
        }
        
        .footer {
            margin-top: 30px;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon">🎫</div>
        <h1>Informasi Tiket Wisata</h1>
        
        <div class="info-box">
            <div class="label">Tempat Wisata</div>
            <div class="value">{{ $tempat }}</div>
        </div>
        
        <div class="info-box">
            <div class="label">Harga Tiket</div>
            <div class="price">Rp {{ number_format($harga, 0, ',', '.') }}</div>
        </div>
        
        <div class="footer">
            ✨ Selamat menikmati liburan Anda! ✨
        </div>
    </div>
</body>
</html>