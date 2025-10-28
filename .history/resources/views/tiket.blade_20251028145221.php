<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Wisata Premium</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }
        
        .container {
            width: 100%;
            max-width: 800px;
            animation: slideUp 0.6s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .ticket-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            position: relative;
        }
        
        .ticket-header {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            padding: 30px 40px;
            color: white;
            position: relative;
        }
        
        .ticket-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 20px;
            background: url("data:image/svg+xml,%3Csvg width='100' height='20' viewBox='0 0 100 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 20 Q 25 10, 50 20 T 100 20 L 100 0 L 0 0 Z' fill='white'/%3E%3C/svg%3E");
            background-size: 100% 100%;
        }
        
        .ticket-title {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 8px;
            color: #94a3b8;
        }
        
        .ticket-subtitle {
            font-size: 28px;
            font-weight: 700;
            line-height: 1.2;
        }
        
        .ticket-body {
            padding: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        
        .ticket-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .info-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .info-label {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
        }
        
        .info-value {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
        }
        
        .ticket-price {
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
            border-radius: 15px;
            padding: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        
        .price-label {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
            margin-bottom: 8px;
        }
        
        .price-value {
            font-size: 36px;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 20px;
        }
        
        .btn-download {
            background: #1e293b;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn-download:hover {
            background: #334155;
            transform: translateY(-2px);
        }
        
        .ticket-footer {
            background: #f8fafc;
            padding: 25px 40px;
            border-top: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .footer-text {
            font-size: 13px;
            color: #64748b;
        }
        
        .barcode {
            display: flex;
            gap: 2px;
        }
        
        .barcode-line {
            width: 2px;
            height: 40px;
            background: #1e293b;
        }
        
        .barcode-line:nth-child(even) {
            height: 35px;
        }
        
        .ticket-divider {
            position: relative;
            height: 1px;
            background: #e2e8f0;
            margin: 0 40px;
        }
        
        .ticket-divider::before,
        .ticket-divider::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 50%;
            top: -10px;
        }
        
        .ticket-divider::before {
            left: -30px;
        }
        
        .ticket-divider::after {
            right: -30px;
        }
        
        .ticket-badge {
            position: absolute;
            top: 30px;
            right: 30px;
            background: #10b981;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .ticket-body {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .ticket-header {
                padding: 25px 30px;
            }
            
            .ticket-body {
                padding: 30px;
            }
            
            .ticket-footer {
                padding: 20px 30px;
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .ticket-subtitle {
                font-size: 24px;
            }
            
            .price-value {
                font-size: 32px;
            }
        }
        
        @media (max-width: 480px) {
            .ticket-header {
                padding: 20px 25px;
            }
            
            .ticket-body {
                padding: 25px;
            }
            
            .ticket-subtitle {
                font-size: 22px;
            }
            
            .info-value {
                font-size: 16px;
            }
            
            .price-value {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="ticket-card">
            <div class="ticket-badge">Valid</div>
            
            <div class="ticket-header">
                <div class="ticket-title">E-Ticket Wisata</div>
                <h1 class="ticket-subtitle" id="destination-title">Memuat...</h1>
            </div>
            
            <div class="ticket-body">
                <div class="ticket-info">
                    <div class="info-group">
                        <div class="info-label">Destinasi</div>
                        <div class="info-value" id="destination-name">Memuat...</div>
                    </div>
                    
                    <div class="info-group">
                        <div class="info-label">Tipe Tiket</div>
                        <div class="info-value" id="ticket-type">Reguler</div>
                    </div>
                    
                    <div class="info-group">
                        <div class="info-label">Tanggal</div>
                        <div class="info-value" id="ticket-date">Memuat...</div>
                    </div>
                    
                    <div class="info-group">
                        <div class="info-label">Kode Tiket</div>
                        <div class="info-value" id="ticket-code">WT-2023-001</div>
                    </div>
                </div>
                
                <div class="ticket-price">
                    <div class="price-label">Total Harga</div>
                    <div class="price-value" id="ticket-price">Memuat...</div>
                    <button class="btn-download" onclick="downloadTicket()">
                        Download Tiket
                    </button>
                </div>
            </div>
            
            <div class="ticket-divider"></div>
            
            <div class="ticket-footer">
                <div class="footer-text">
                    Selamat Menikmati Liburan Anda
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
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to extract parameters from URL
        function getUrlParameters() {
            const path = window.location.pathname;
            const parts = path.split('/').filter(part => part !== '');
            
            // Assuming URL structure: /tiket/{tempat}/{harga}
            if (parts.length >= 3 && parts[0] === 'tiket') {
                return {
                    tempat: parts[1],
                    harga: parts[2]
                };
            }
            return null;
        }

        // Function to format destination name
        function formatDestinationName(name) {
            // Replace underscores or dashes with spaces and capitalize each word
            return name.replace(/[_-]/g, ' ')
                      .split(' ')
                      .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
                      .join(' ');
        }

        // Function to format price
        function formatPrice(price) {
            return 'Rp ' + parseInt(price).toLocaleString('id-ID');
        }

        // Function to get current date in Indonesian format
        function getCurrentDate() {
            const months = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            const now = new Date();
            const day = now.getDate();
            const month = months[now.getMonth()];
            const year = now.getFullYear();
            return `${day} ${month} ${year}`;
        }

        // Function to generate random ticket code
        function generateTicketCode() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let code = 'WT-';
            for (let i = 0; i < 6; i++) {
                code += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return code;
        }

        // Function to initialize ticket data from URL
        function initializeTicketData() {
            const params = getUrlParameters();
            
            if (params) {
                const formattedName = formatDestinationName(params.tempat);
                const formattedPrice = formatPrice(params.harga);
                const currentDate = getCurrentDate();
                const ticketCode = generateTicketCode();
                
                // Update DOM elements
                document.getElementById('destination-title').textContent = formattedName;
                document.getElementById('destination-name').textContent = formattedName;
                document.getElementById('ticket-price').textContent = formattedPrice;
                document.getElementById('ticket-date').textContent = currentDate;
                document.getElementById('ticket-code').textContent = ticketCode;
                
                // Set ticket type based on price
                const price = parseInt(params.harga);
                let ticketType = 'Reguler';
                if (price > 100000) {
                    ticketType = 'Premium';
                } else if (price > 50000) {
                    ticketType = 'Eksekutif';
                }
                document.getElementById('ticket-type').textContent = ticketType;
                
            } else {
                // Default values if URL parameters are not found
                document.getElementById('destination-title').textContent = 'Destinasi Wisata';
                document.getElementById('destination-name').textContent = 'Destinasi Wisata';
                document.getElementById('ticket-price').textContent = 'Rp 0';
                document.getElementById('ticket-date').textContent = getCurrentDate();
                document.getElementById('ticket-code').textContent = generateTicketCode();
            }
        }
        
        // Function to download ticket
        function downloadTicket() {
            const button = document.querySelector('.btn-download');
            const originalText = button.innerHTML;
            
            button.innerHTML = 'Mengunduh...';
            button.disabled = true;
            
            setTimeout(() => {
                button.innerHTML = 'Berhasil Diunduh!';
                
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                }, 2000);
            }, 1500);
        }

        // Initialize ticket data when page loads
        document.addEventListener('DOMContentLoaded', initializeTicketData);
    </script>
</body>
</html>