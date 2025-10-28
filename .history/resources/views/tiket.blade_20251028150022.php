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
            transition: all 0.3s ease;
        }
        
        .ticket-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
        }
        
        .ticket-header {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            padding: 30px 40px;
            color: white;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .ticket-header:hover {
            background: linear-gradient(135deg, #334155 0%, #475569 100%);
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
            transition: color 0.3s ease;
        }
        
        .ticket-header:hover .ticket-title {
            color: #cbd5e1;
        }
        
        .ticket-subtitle {
            font-size: 28px;
            font-weight: 700;
            line-height: 1.2;
            transition: transform 0.3s ease;
        }
        
        .ticket-header:hover .ticket-subtitle {
            transform: translateX(5px);
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
            padding: 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid transparent;
        }
        
        .info-group:hover {
            background: #f8fafc;
            border-color: #e2e8f0;
            transform: translateX(5px);
        }
        
        .info-label {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: color 0.3s ease;
        }
        
        .info-group:hover .info-label {
            color: #475569;
        }
        
        .info-value {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            transition: color 0.3s ease;
        }
        
        .info-group:hover .info-value {
            color: #0f172a;
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
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .ticket-price:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .ticket-price::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.5s;
        }
        
        .ticket-price:hover::before {
            left: 100%;
        }
        
        .price-label {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
            margin-bottom: 8px;
            transition: color 0.3s ease;
        }
        
        .ticket-price:hover .price-label {
            color: #475569;
        }
        
        .price-value {
            font-size: 36px;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .ticket-price:hover .price-value {
            transform: scale(1.05);
            color: #0f172a;
        }
        
        .price-value::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: #1e293b;
            transition: width 0.3s ease;
        }
        
        .ticket-price:hover .price-value::after {
            width: 80%;
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
            position: relative;
            overflow: hidden;
        }
        
        .btn-download:hover {
            background: #334155;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(30, 41, 59, 0.3);
        }
        
        .btn-download:active {
            transform: translateY(0);
        }
        
        .btn-download::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s;
        }
        
        .btn-download:active::before {
            width: 100%;
            height: 100%;
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
            transition: color 0.3s ease;
            cursor: pointer;
        }
        
        .footer-text:hover {
            color: #475569;
        }
        
        .barcode {
            display: flex;
            gap: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .barcode:hover {
            transform: scale(1.05);
        }
        
        .barcode-line {
            width: 2px;
            height: 40px;
            background: #1e293b;
            transition: all 0.3s ease;
        }
        
        .barcode-line:nth-child(even) {
            height: 35px;
        }
        
        .barcode:hover .barcode-line {
            background: #475569;
        }
        
        .barcode:hover .barcode-line:nth-child(odd) {
            height: 45px;
        }
        
        .barcode:hover .barcode-line:nth-child(even) {
            height: 40px;
        }
        
        .ticket-divider {
            position: relative;
            height: 1px;
            background: #e2e8f0;
            margin: 0 40px;
            transition: all 0.3s ease;
        }
        
        .ticket-divider:hover {
            background: #cbd5e1;
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
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .ticket-divider:hover::before,
        .ticket-divider:hover::after {
            border-color: #cbd5e1;
            background: #f1f5f9;
        }
        
        .ticket-divider::before {
            left: -30px;
        }
        
        .ticket-divider::after {
            right: -30px;
        }
        
        .ticket-divider:hover::before {
            transform: translateX(-3px);
        }
        
        .ticket-divider:hover::after {
            transform: translateX(3px);
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
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .ticket-badge:hover {
            background: #059669;
            transform: scale(1.05);
        }
        
        .confetti {
            position: absolute;
            width: 8px;
            height: 8px;
            background: #10b981;
            opacity: 0;
            animation: confetti-fall 2s ease-in-out;
        }
        
        @keyframes confetti-fall {
            0% {
                transform: translateY(-100px) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(500px) rotate(360deg);
                opacity: 0;
            }
        }
        
        .pulse {
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
            <div class="ticket-badge" onclick="toggleStatus()">Valid</div>
            
            <div class="ticket-header" onclick="animateHeader()">
                <div class="ticket-title">E-Ticket Wisata</div>
                <h1 class="ticket-subtitle" id="destination-title">Memuat...</h1>
            </div>
            
            <div class="ticket-body">
                <div class="ticket-info">
                    <div class="info-group" onclick="copyToClipboard('destination-name')">
                        <div class="info-label">
                            <span>📍</span> Destinasi
                        </div>
                        <div class="info-value" id="destination-name">Memuat...</div>
                    </div>
                    
                    <div class="info-group" onclick="changeTicketType()">
                        <div class="info-label">
                            <span>🎫</span> Tipe Tiket
                        </div>
                        <div class="info-value" id="ticket-type">Reguler</div>
                    </div>
                    
                    <div class="info-group" onclick="showCalendar()">
                        <div class="info-label">
                            <span>📅</span> Tanggal
                        </div>
                        <div class="info-value" id="ticket-date">Memuat...</div>
                    </div>
                    
                    <div class="info-group" onclick="copyToClipboard('ticket-code')">
                        <div class="info-label">
                            <span>🔢</span> Kode Tiket
                        </div>
                        <div class="info-value" id="ticket-code">WT-2023-001</div>
                    </div>
                </div>
                
                <div class="ticket-price">
                    <div class="price-label">Total Harga</div>
                    <div class="price-value pulse" id="ticket-price">Memuat...</div>
                    <button class="btn-download" onclick="downloadTicket()">
                        📥 Download Tiket
                    </button>
                </div>
            </div>
            
            <div class="ticket-divider" onclick="animateDivider()"></div>
            
            <div class="ticket-footer">
                <div class="footer-text" onclick="showMessage()">
                    Selamat Menikmati Liburan Anda
                </div>
                <div class="barcode" onclick="scanBarcode()">
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
        
        // Function to create confetti effect
        function createConfetti() {
            const colors = ['#10b981', '#3b82f6', '#8b5cf6', '#f59e0b', '#ef4444'];
            const container = document.querySelector('.container');
            
            for (let i = 0; i < 50; i++) {
                const confetti = document.createElement('div');
                confetti.className = 'confetti';
                confetti.style.left = Math.random() * 100 + '%';
                confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.animationDelay = Math.random() * 2 + 's';
                container.appendChild(confetti);
                
                // Remove confetti after animation
                setTimeout(() => {
                    confetti.remove();
                }, 2000);
            }
        }
        
        // Function to download ticket
        function downloadTicket() {
            createConfetti();
            
            const button = document.querySelector('.btn-download');
            const originalText = button.innerHTML;
            
            button.innerHTML = '⏳ Mengunduh...';
            button.disabled = true;
            
            setTimeout(() => {
                button.innerHTML = '✅ Berhasil Diunduh!';
                
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                }, 2000);
            }, 1500);
        }

        // Function to copy text to clipboard
        function copyToClipboard(elementId) {
            const text = document.getElementById(elementId).textContent;
            navigator.clipboard.writeText(text).then(() => {
                const element = document.getElementById(elementId);
                const originalText = element.textContent;
                element.textContent = '✓ Disalin!';
                setTimeout(() => {
                    element.textContent = originalText;
                }, 1000);
            });
        }

        // Function to toggle ticket status
        function toggleStatus() {
            const badge = document.querySelector('.ticket-badge');
            if (badge.textContent === 'Valid') {
                badge.textContent = 'Used';
                badge.style.background = '#64748b';
            } else {
                badge.textContent = 'Valid';
                badge.style.background = '#10b981';
            }
        }

        // Function to change ticket type
        function changeTicketType() {
            const types = ['Reguler', 'Eksekutif', 'Premium', 'VIP'];
            const currentType = document.getElementById('ticket-type');
            const currentIndex = types.indexOf(currentType.textContent);
            const nextIndex = (currentIndex + 1) % types.length;
            currentType.textContent = types[nextIndex];
        }

        // Function to show calendar
        function showCalendar() {
            const dateElement = document.getElementById('ticket-date');
            dateElement.textContent = 'Pilih tanggal...';
            setTimeout(() => {
                dateElement.textContent = getCurrentDate();
            }, 1000);
        }

        // Function to animate header
        function animateHeader() {
            const header = document.querySelector('.ticket-header');
            header.style.transform = 'scale(0.98)';
            setTimeout(() => {
                header.style.transform = 'scale(1)';
            }, 150);
        }

        // Function to animate divider
        function animateDivider() {
            const divider = document.querySelector('.ticket-divider');
            divider.style.height = '3px';
            divider.style.background = '#10b981';
            setTimeout(() => {
                divider.style.height = '1px';
                divider.style.background = '#e2e8f0';
            }, 300);
        }

        // Function to scan barcode
        function scanBarcode() {
            const barcodeLines = document.querySelectorAll('.barcode-line');
            
            barcodeLines.forEach((line, index) => {
                setTimeout(() => {
                    line.style.background = '#10b981';
                    line.style.transform = 'scaleX(1.5)';
                    
                    setTimeout(() => {
                        line.style.background = '#1e293b';
                        line.style.transform = 'scaleX(1)';
                    }, 200);
                }, index * 100);
            });
            
            setTimeout(() => {
                alert('🎫 Tiket berhasil dipindai! Selamat menikmati wisata Anda!');
            }, 1200);
        }

        // Function to show message
        function showMessage() {
            const messages = [
                'Selamat menikmati liburan! 🌴',
                'Jangan lupa bawa kamera! 📸',
                'Have a great trip! ✈️',
                'Enjoy your vacation! 🏖️'
            ];
            const randomMessage = messages[Math.floor(Math.random() * messages.length)];
            const footerText = document.querySelector('.footer-text');
            const originalText = footerText.textContent;
            
            footerText.textContent = randomMessage;
            setTimeout(() => {
                footerText.textContent = originalText;
            }, 2000);
        }

        // Initialize ticket data when page loads
        document.addEventListener('DOMContentLoaded', initializeTicketData);
    </script>
</body>
</html>