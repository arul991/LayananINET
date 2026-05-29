<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login - Layanan INET')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tabler-icons@latest/tabler-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
        .auth-container {
            width: 100%;
            max-width: 450px;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        .card-body {
            padding: 40px;
        }
        .logo-section {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo-section h2 {
            color: #2563eb;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .logo-section p {
            color: #6b7280;
            font-size: 14px;
        }
        .form-control {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 14px;
        }
        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: 600;
            color: #374151;
            font-size: 14px;
            margin-bottom: 8px;
        }
        .btn-login {
            background-color: #2563eb;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
        }
        .btn-login:hover {
            background-color: #1d4ed8;
        }
        .divider {
            text-align: center;
            margin: 20px 0;
            font-size: 14px;
            color: #9ca3af;
        }
        .divider::before,
        .divider::after {
            content: '';
            display: inline-block;
            width: 45%;
            height: 1px;
            background-color: #e5e7eb;
            vertical-align: middle;
        }
        .divider::before {
            margin-right: 10px;
        }
        .divider::after {
            margin-left: 10px;
        }
        .footer-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #6b7280;
        }
        .footer-link a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }
        .footer-link a:hover {
            text-decoration: underline;
        }
        .alert {
            border-radius: 8px;
            border: none;
            margin-bottom: 20px;
        }
        .form-check-label {
            font-size: 14px;
            color: #374151;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
