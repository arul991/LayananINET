<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan INET - Booking Internet ISP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tabler-icons@latest/tabler-icons.css">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
        .hero {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        .hero .btn {
            margin: 0 10px;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: 600;
        }
        .features {
            padding: 80px 0;
        }
        .feature-card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 8px;
            background: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .feature-card i {
            font-size: 48px;
            color: #2563eb;
            margin-bottom: 20px;
        }
        .navbar {
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: 700;
            color: #2563eb !important;
            font-size: 24px;
        }
        .nav-link {
            color: #6b7280 !important;
            font-weight: 500;
            margin-left: 20px;
        }
        .nav-link:hover {
            color: #2563eb !important;
        }
        .footer {
            background-color: #1f2937;
            color: white;
            padding: 40px 0 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="ti ti-wifi me-2"></i>Layanan INET
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarNav">
                <div class="ms-auto d-flex align-items-center">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="container">
            <h1>Layanan INET</h1>
            <p>Platform Booking Internet ISP Terpercaya dan Terjangkau</p>
            <div>
                <a href="{{ route('register') }}" class="btn btn-light">
                    <i class="ti ti-user-plus me-2"></i>Daftar Sekarang
                </a>
                <a href="{{ route('login') }}" class="btn btn-outline-light">
                    <i class="ti ti-login me-2"></i>Login
                </a>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="container">
            <h2 class="text-center mb-5" style="font-size: 32px; font-weight: 700;">Keunggulan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="ti ti-speed"></i>
                        <h5>Kecepatan Tinggi</h5>
                        <p>Nikmati internet berkecepatan tinggi hingga 100 Mbps</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="ti ti-heart-handshake"></i>
                        <h5>Layanan Terpercaya</h5>
                        <p>Dukungan pelanggan 24/7 siap membantu Anda</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="ti ti-coin"></i>
                        <h5>Harga Terjangkau</h5>
                        <p>Paket internet dengan harga yang kompetitif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>&copy; 2024 Layanan INET. Hak Cipta Dilindungi. Semua Hak Tersedia.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
