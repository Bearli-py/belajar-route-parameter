<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Wisata Colorful</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #ff6b6b 0%, #ffa726 25%, #66bb6a 50%, #42a5f5 75%, #ab47bc 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Animated Background Elements */
        .bg-element {
            position: absolute;
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
            opacity: 0.7;
        }
        
        .element-1 {
            width: 400px;
            height: 400px;
            top: -200px;
            left: -200px;
            background: radial-gradient(circle, #ff6b6b, transparent);
            animation-delay: 0s;
        }
        
        .element-2 {
            width: 300px;
            height: 300px;
            bottom: -150px;
            right: -150px;
            background: radial-gradient(circle, #42a5f5, transparent);
            animation-delay: 3s;
        }
        
        .element-3 {
            width: 200px;
            height: 200px;
            top: 50%;
            right: 10%;
            background: radial-gradient(circle, #ffa726, transparent);
            animation-delay: 6s;
        }
        
        .element-4 {
            width: 250px;
            height: 250px;
            bottom: 10%;
            left: 5%;
            background: radial-gradient(circle, #66bb6a, transparent);
            animation-delay: 9s;
        }
        
        .element-5 {
            width: 180px;
            height: 180px;
            top: 20%;
            left: 15%;
            background: radial-gradient(circle, #ab47bc, transparent);
            animation-delay: 12s;
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
            position: relative;
        }
        
        .ticket-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 40px 110px rgba(0, 0, 0, 0.4);
        }
        
        /* Left Section - Image */
        .ticket-left {
            background: linear-gradient(135deg, #ff6b6b 0%, #ffa726 25%, #66bb6a 50%, #42a5f5 75%, #ab47bc 100%);
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
            transition: all 0.5s ease;
            cursor: pointer;
        }
        
        .image-placeholder-large:hover {
            transform: scale(1.05) rotate(5deg);
            background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0.2) 100%);
        }
        
        .ticket-icon {
            font-size: 60px;
            filter: drop-shadow(0 5px 15px rgba(0,0,0,0.3));
            animation: bounce 2s infinite;
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        
        .ticket-icon:hover {
            transform: scale(1.2) rotate(15deg);
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
            background: linear-gradient(135deg, #ff6b6b, #ffa726);
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }
        
        .ticket-header-text {
            margin-bottom: 30px;
        }
        
        .ticket-title {
            color: #ff6b6b;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }
        
        .ticket-title:hover {
            color: #42a5f5;
        }
        
        .ticket-subtitle {
            background: linear-gradient(135deg, #ff6b6b, #ffa726, #66bb6a, #42a5f5, #ab47bc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 42px;
            font-weight: 900;
            line-height: 1.2;
            animation: fadeIn 0.5s ease, colorShift 5s infinite alternate;
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
        
        @keyframes colorShift {
            0% {
                filter: hue-rotate(0deg);
            }
            100% {
                filter: hue-rotate(360deg);
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
            border-left: 5px solid;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .detail-item:nth-child(1) {
            border-left-color: #ff6b6b;
        }
        
        .detail-item:nth-child(2) {
            border-left-color: #ffa726;
        }
        
        .detail-item:nth-child(3) {
            border-left-color: #66bb6a;
        }
        
        .detail-item:nth-child(4) {
            border-left-color: #42a5f5;
        }
        
        .detail-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        .detail-item:hover::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, transparent 100%);
            animation: shimmer 1s;
        }
        
        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }
        
        .detail-label {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: color 0.3s ease;
        }
        
        .detail-item:nth-child(1) .detail-label {
            color: #ff6b6b;
        }
        
        .detail-item:nth-child(2) .detail-label {
            color: #ffa726;
        }
        
        .detail-item:nth-child(3) .detail-label {
            color: #66bb6a;
        }
        
        .detail-item:nth-child(4) .detail-label {
            color: #42a5f5;
        }
        
        .detail-item:hover .detail-label {
            color: #ab47bc;
        }
        
        .detail-value {
            color: #2d3748;
            font-size: 24px;
            font-weight: 700;
            transition: color 0.3s ease;
        }
        
        .detail-item:hover .detail-value {
            color: #5a67d8;
        }
        
        .price-section {
            background: linear-gradient(135deg, #ff6b6b 0%, #ffa726 25%, #66bb6a 50%, #42a5f5 75%, #ab47bc 100%);
            padding: 30px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .price-section:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
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
            background: linear-gradient(135deg, #ff6b6b, #ffa726, #66bb6a, #42a5f5, #ab47bc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            overflow: hidden;
        }
        
        .btn-download:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        .btn-download:active {
            transform: translateY(-1px);
        }
        
        .btn-download::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
            transition: left 0.5s;
        }
        
        .btn-download:hover::before {
            left: 100%;
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
            transition: opacity 0.3s ease;
            cursor: pointer;
        }
        
        .barcode:hover {
            opacity: 0.7;
        }
        
        .barcode-line {
            width: 3px;
            height: 40px;
            background: #2d3748;
            transition: all 0.3s ease;
        }
        
        .barcode-line:nth-child(even) {
            height: 30px;
        }
        
        .barcode:hover .barcode-line {
            background: linear-gradient(135deg, #ff6b6b, #ffa726, #66bb6a, #42a5f5, #ab47bc);
        }
        
        /* Confetti Effect */
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #ff6b6b;
            opacity: 0;
            animation: confetti-fall 3s ease-in-out;
        }
        
        @keyframes confetti-fall {
            0% {
                transform: translateY(-100px) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(1000px) rotate(720deg);
                opacity: 0;
            }
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
    <div class="bg-element element-1"></div>
    <div class="bg-element element-2"></div>
    <div class="bg-element element-3"></div>
    <div class="bg-element element-4"></div>
    <div class="bg-element element-5"></div>
    
    <div class="container">
        <div class="ticket-card">
            <!-- Left Section - Image -->
            <div class="ticket-left">
                <div class="image-placeholder-large" id="destination-image" onclick="changeImage(this)">🏖️</div>
                <div class="ticket-icon" onclick="animateIcon(this)">🎫</div>
            </div>
            
            <!-- Right Section - Details -->
            <div class="ticket-right">
                <div>
                    <div class="ticket-header-text">
                        <div class="ticket-title">🌴 E-Ticket Wisata Indonesia</div>
                        <h1 class="ticket-subtitle" id="destination-title">Memuat...</h1>
                    </div>
                    
                    <div class="ticket-details">
                        <div class="detail-item" onclick="changeDetail(this)">
                            <div class="detail-label">
                                <span>📍</span> Destinasi
                            </div>
                            <div class="detail-value" id="destination-name">Memuat...</div>
                        </div>
                        
                        <div class="detail-item" onclick="changeDetail(this)">
                            <div class="detail-label">
                                <span>🎟️</span> Tipe Tiket
                            </div>
                            <div class="detail-value" id="ticket-type">Reguler</div>
                        </div>
                        
                        <div class="detail-item" onclick="changeDetail(this)">
                            <div class="detail-label">
                                <span>📅</span> Tanggal
                            </div>
                            <div class="detail-value" id="ticket-date">Memuat...</div>
                        </div>
                        
                        <div class="detail-item" onclick="changeDetail(this)">
                            <div class="detail-label">
                                <span>👤</span> Status
                            </div>
                            <div class="detail-value" id="ticket-status">Valid</div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="price-section">
                        <div class="price-info">
                            <div class="price-label">💳 Total Harga</div>
                            <div class="price-value" id="ticket-price">Memuat...</div>
                        </div>
                        <button class="btn-download" onclick="downloadTicket()">
                            📥 Download Tiket
                        </button>
                    </div>
                    
                    <div class="ticket-footer">
                        <div class="footer-text">
                            <span class="sparkle">✨</span>
                            Selamat Menikmati Liburan Anda!
                            <span class="sparkle">✨</span>
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
                            <div class="barcode-line"></div>
                            <div class="barcode-line"></div>
                        </div>
                    </div>
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

        // Function to get appropriate emoji based on destination
        function getDestinationEmoji(destination) {
            const destinationLower = destination.toLowerCase();
            
            if (destinationLower.includes('pantai') || destinationLower.includes('beach')) {
                return '🏖️';
            } else if (destinationLower.includes('gunung') || destinationLower.includes('mountain')) {
                return '⛰️';
            } else if (destinationLower.includes('taman') || destinationLower.includes('park')) {
                return '🏞️';
            } else if (destinationLower.includes('safari')) {
                return '🦁';
            } else if (destinationLower.includes('candi') || destinationLower.includes('temple')) {
                return '🏛️';
            } else if (destinationLower.includes('danau') || destinationLower.includes('lake')) {
                return '🌊';
            } else {
                return '🎯';
            }
        }

        // Function to format price
        function formatPrice(price) {
            return 'Rp ' + parseInt(price).toLocaleString('id-ID');
        }

        // Function to get current date in Indonesian format
        function getCurrentDate() {
            const months = [
                'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
            ];
            const now = new Date();
            const day = now.getDate();
            const month = months[now.getMonth()];
            const year = now.getFullYear();
            return `${day} ${month} ${year}`;
        }

        // Function to initialize ticket data from URL
        function initializeTicketData() {
            const params = getUrlParameters();
            
            if (params) {
                const formattedName = formatDestinationName(params.tempat);
                const emoji = getDestinationEmoji(params.tempat);
                const formattedPrice = formatPrice(params.harga);
                const currentDate = getCurrentDate();
                
                // Update DOM elements
                document.getElementById('destination-title').textContent = formattedName;
                document.getElementById('destination-name').textContent = formattedName;
                document.getElementById('destination-image').textContent = emoji;
                document.getElementById('ticket-price').textContent = formattedPrice;
                document.getElementById('ticket-date').textContent = currentDate;
                
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
            }
        }

        // Function to create confetti effect
        function createConfetti() {
            const colors = ['#ff6b6b', '#ffa726', '#66bb6a', '#42a5f5', '#ab47bc'];
            const container = document.querySelector('.container');
            
            for (let i = 0; i < 100; i++) {
                const confetti = document.createElement('div');
                confetti.className = 'confetti';
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.animationDelay = Math.random() * 3 + 's';
                container.appendChild(confetti);
                
                // Remove confetti after animation
                setTimeout(() => {
                    confetti.remove();
                }, 3000);
            }
        }
        
        // Function to download ticket with confetti effect
        function downloadTicket() {
            createConfetti();
            
            // Simulate download process
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
        
        // Function to change image on click
        function changeImage(element) {
            const images = ['🏖️', '🏞️', '🏰', '⛰️', '🏕️', '🗼', '🦁', '🌊', '🏛️', '🎯'];
            const currentImage = element.innerHTML;
            let newImage;
            
            do {
                newImage = images[Math.floor(Math.random() * images.length)];
            } while (newImage === currentImage);
            
            element.innerHTML = newImage;
        }
        
        // Function to animate icon on click
        function animateIcon(element) {
            element.style.animation = 'none';
            setTimeout(() => {
                element.style.animation = 'bounce 2s infinite';
            }, 10);
            
            // Add rotation effect
            element.style.transform = 'rotate(360deg)';
            setTimeout(() => {
                element.style.transform = 'rotate(0deg)';
            }, 1000);
        }
        
        // Function to change detail on click
        function changeDetail(element) {
            const detailValue = element.querySelector('.detail-value');
            const originalText = detailValue.textContent;
            
            // Add a temporary effect
            detailValue.style.transform = 'scale(0.8)';
            detailValue.style.opacity = '0.5';
            
            setTimeout(() => {
                detailValue.style.transform = 'scale(1)';
                detailValue.style.opacity = '1';
            }, 300);
        }
        
        // Function to simulate barcode scanning
        function scanBarcode() {
            const barcodeLines = document.querySelectorAll('.barcode-line');
            
            barcodeLines.forEach((line, index) => {
                setTimeout(() => {
                    line.style.height = '50px';
                    line.style.background = '#ff6b6b';
                    
                    setTimeout(() => {
                        line.style.height = (index % 2 === 0) ? '40px' : '30px';
                        line.style.background = '#2d3748';
                    }, 300);
                }, index * 100);
            });
            
            // Show scan success message
            setTimeout(() => {
                alert('🎉 Tiket berhasil dipindai! Selamat menikmati wisata Anda!');
            }, 1500);
        }
        
        // Add hover effect to price section
        document.querySelector('.price-section').addEventListener('mouseenter', function() {
            this.style.background = 'linear-gradient(135deg, #ab47bc 0%, #42a5f5 25%, #66bb6a 50%, #ffa726 75%, #ff6b6b 100%)';
        });
        
        document.querySelector('.price-section').addEventListener('mouseleave', function() {
            this.style.background = 'linear-gradient(135deg, #ff6b6b 0%, #ffa726 25%, #66bb6a 50%, #42a5f5 75%, #ab47bc 100%)';
        });

        // Initialize ticket data when page loads
        document.addEventListener('DOMContentLoaded', initializeTicketData);
    </script>
</body>
</html>