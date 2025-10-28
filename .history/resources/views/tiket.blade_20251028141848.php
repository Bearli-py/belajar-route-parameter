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
            font-family: 'Poppins', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        
        /* Animated Background Circles */
        .bg-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 20s infinite ease-in-out;
        }
        
        .circle-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            left: -150px;
            animation-delay: 0s;
        }
        
        .circle-2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            right: -100px;
            animation-delay: 3s;
        }
        
        .circle-3 {
            width: 150px;
            height: 150px;
            top: 50%;
            right: 10%;
            animation-delay: 6s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-50px) rotate(180deg);
            }
        }
        
        .container {
            position: relative;
            z-index: 10;
            animation: slideUp 0.8s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .ticket-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            box-shadow: 0 30px 90px rgba(0, 0, 0, 0.3);
            max-width: 550px;
            width: 100%;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .ticket-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 40px 110px rgba(0, 0, 0, 0.4);
        }
        
        .ticket-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .ticket-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: shine 3s infinite;
        }
        
        @keyframes shine {
            0% {
                left: -100%;
            }
            50%, 100% {
                left: 100%;
            }
        }
        
        .icon-container {
            position: relative;
            display: inline-block;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        .ticket-icon {
            font-size: 80px;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3));
        }
        
        .ticket-title {
            color: white;
            font-size: 32px;
            font-weight: 700;
            margin-top: 15px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
            letter-spacing: 1px;
        }
        
        .ticket-body {
            padding: 40px 30px;
        }
        
        .info-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .info-card:hover {
            transform: translateX(10px);
            box-shadow: -5px 5px 20px rgba(102, 126, 234, 0.4);
        }
        
        .info-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
        }
        
        .info-label {
            color: #667eea;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .info-value {
            color: #2d3748;
            font-size: 28px;
            font-weight: 700;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .price-card {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            color: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(17, 153, 142, 0.4);
        }
        
        .price-card::before {
            content: '💰';
            position: absolute;
            font-size: 150px;
            opacity: 0.1;
            top: -30px;
            right: -30px;
            animation: rotate 10s linear infinite;
        }
        
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        .price-label {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
            opacity: 0.9;
        }
        
        .price-value {
            font-size: 42px;
            font-weight: 900;
            text-shadow: 0 4px 10px rgba(0,0,0,0.2);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        .ticket-footer {
            background: #f8f9fa;
            padding: 25px 30px;
            text-align: center;
        }
        
        .footer-text {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .sparkle {
            display: inline-block;
            animation: sparkle 1.5s infinite;
        }
        
        @keyframes sparkle {
            0%, 100% {
                opacity: 1;
                transform: scale(1);
            }
            50% {
                opacity: 0.5;
                transform: scale(1.3);
            }
        }
        
        .btn-download {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }
        
        .btn-download:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.6);
        }
        
        .btn-download:active {
            transform: translateY(-1px);
        }
        
        /* Responsive */
        @media (max-width: 600px) {
            .ticket-title {
                font-size: 24px;
            }
            
            .info-value {
                font-size: 22px;
            }
            
            .price-value {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-circle circle-1"></div>
    <div class="bg-circle circle-2"></div>
    <div class="bg-circle circle-3"></div>
    
    <div class="container">
        <div class="ticket-card">
            <!-- Header -->
            <div class="ticket-header">
                <div class="icon-container">
                    <div class="ticket-icon">🎫</div>
                </div>
                <h1 class="ticket-title">E-TICKET WISATA</h1>
            </div>
            
            <!-- Body -->
            <div class="ticket-body">
                <!-- Info Tempat -->
                <div class="info-card">
                    <div class="info-label">
                        <span>📍</span> DESTINASI WISATA
                    </div>
                    <div class="info-value">{{ $tempat }}</div>
                </div>
                
                <!-- Info Harga -->
                <div class="price-card">
                    <div class="price-label">💳 Harga Tiket</div>
                    <div class="price-value">Rp {{ number_format($harga, 0, ',', '.') }}</div>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="ticket-footer">
                <div class="footer-text">
                    <span class="sparkle">✨</span>
                    Selamat Menikmati Liburan Anda!
                    <span class="sparkle">✨</span>
                </div>
                <button class="btn-download" onclick="alert('Fitur download akan segera hadir! 🎉')">
                    📥 Download Tiket
                </button>
            </div>
        </div>
    </div>
</body>
</html>