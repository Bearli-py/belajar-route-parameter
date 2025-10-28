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
            padding: 40px 20px;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Animated Background Circles */
        .bg-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 20s infinite ease-in-out;
        }
        
        .circle-1 {
            width: 400px;
            height: 400px;
            top: -200px;
            left: -200px;
            animation-delay: 0s;
        }
        
        .circle-2 {
            width: 300px;
            height: 300px;
            bottom: -150px;
            right: -150px;
            animation-delay: 3s;
        }
        
        .circle-3 {
            width: 200px;
            height: 200px;
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
            width: 100%;
            max-width: 1200px;
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
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: grid;
            grid-template-columns: 400px 1fr;
            min-height: 500px;
        }
        
        .ticket-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 40px 110px rgba(0, 0, 0, 0.4);
        }
        
        /* Left Section - Image */
        .ticket-left {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        
        .ticket-left::before {
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
        
        .destination-image-large {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .ticket-card:hover .destination-image-large {
            transform: scale(1.05);
        }
        
        .image-placeholder-large {
            width: 100%;
            height: 350px;
            border-radius: 20px;
            background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.1) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 120px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            margin-bottom: 20px;
        }
        
        .ticket-icon {
            font-size: 60px;
            filter: drop-shadow(0 5px 15px rgba(0,0,0,0.3));
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }
        
        /* Right Section - Details */
        .ticket-right {
            padding: 50px 60px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }
        
        /* Decorative Circles on Border */
        .ticket-right::before {
            content: '';
            position: absolute;
            left: -15px;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background: #764ba2;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
        }
        
        .ticket-header-text {
            margin-bottom: 30px;
        }
        
        .ticket-title {
            color: #667eea;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }
        
        .ticket-subtitle {
            color: #2d3748;
            font-size: 42px;
            font-weight: 900;
            line-height: 1.2;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateX(20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .ticket-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .detail-item {
            background: linear-gradient(135deg, #f5f7fa 0%, #e3e7f0 100%);
            padding: 25px;
            border-radius: 15px;
            border-left: 5px solid #667eea;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .detail-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }
        
        .detail-label {
            color: #667eea;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .detail-value {
            color: #2d3748;
            font-size: 24px;
            font-weight: 700;
        }
        
        .price-section {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            padding: 30px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 30px rgba(17, 153, 142, 0.4);
            position: relative;
            overflow: hidden;
        }
        
        .price-section::before {
            content: '💰';
            position: absolute;
            font-size: 180px;
            opacity: 0.1;
            top: -40px;
            right: -40px;
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
        
        .price-info {
            position: relative;
            z-index: 2;
        }
        
        .price-label {
            color: rgba(255,255,255,0.9);
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }
        
        .price-value {
            color: white;
            font-size: 48px;
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
        
        .btn-download {
            background: white;
            color: #11998e;
            border: none;
            padding: 15px 35px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            position: relative;
            z-index: 2;
        }
        
        .btn-download:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        .btn-download:active {
            transform: translateY(-1px);
        }
        
        .ticket-footer {
            text-align: center;
            margin-top: 20px;
        }
        
        .footer-text {
            color: #6c757d;
            font-size: 13px;
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
        
        /* Barcode Decoration */
        .barcode {
            display: flex;
            gap: 3px;
            justify-content: center;
            margin-top: 15px;
            opacity: 0.3;
        }
        
        .barcode-line {
            width: 3px;
            height: 40px;
            background: #2d3748;
        }
        
        .barcode-line:nth-child(even) {
            height: 30px;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .ticket-card {
                grid-template-columns: 1fr;
                max-width: 600px;
                margin: 0 auto;
            }
            
            .ticket-right {
                padding: 40px 30px;
            }
            
            .ticket-right::before {
                display: none;
            }
            
            .ticket-subtitle {
                font-size: 32px;
            }
            
            .ticket-details {
                grid-template-columns: 1fr;
            }
            
            .price-section {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
        }
        
        @media (max-width: 600px) {
            .ticket-subtitle {
                font-size: 24px;
            }
            
            .detail-value {
                font-size: 20px;
            }
            
            .price-value {
                font-size: 36px;
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
            <!-- Left Section - Image -->
            <div class="ticket-left">
                <div class="image-placeholder-large">🏖️</div>
                <div class="ticket-icon">🎫</div>
            </div>
            
            <!-- Right Section - Details -->
            <div class="ticket-right">
                <div>
                    <div class="ticket-header-text">
                        <div class="ticket-title">🌴 E-Ticket Wisata Indonesia</div>
                        <h1 class="ticket-subtitle">{{ $tempat }}</h1>
                    </div>
                    
                    <div class="ticket-details">
                        <div class="detail-item">
                            <div class="detail-label">
                                <span>📍</span> Destinasi
                            </div>
                            <div class="detail-value">{{ $tempat }}</div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-label">
                                <span>🎟️</span> Tipe Tiket
                            </div>
                            <div class="detail-value">Reguler</div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-label">
                                <span>📅</span> Tanggal
                            </div>
                            <div class="detail-value">{{ date('d M Y') }}</div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-label">
                                <span>👤</span> Status
                            </div>
                            <div class="detail-value">Valid</div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="price-section">
                        <div class="price-info">
                            <div class="price-label">💳 Total Harga</div>
                            <div class="price-value">Rp {{ number_format($harga, 0, ',', '.') }}</div>
                        </div>
                        <button class="btn-download" onclick="alert('Tiket berhasil diunduh! 🎉')">
                            📥 Download Tiket
                        </button>
                    </div>
                    
                    <div class="ticket-footer">
                        <div class="footer-text">
                            <span class="sparkle">✨</span>
                            Selamat Menikmati Liburan Anda!
                            <span class="sparkle">✨</span>
                        </div>
                        <div class="barcode">
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>