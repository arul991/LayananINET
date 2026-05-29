<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Layanan INET')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tabler-icons@latest/tabler-icons.css">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #f97316;
            --danger: #dc2626;
            --success: #16a34a;
            --warning: #eab308;
            --info: #0ea5e9;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 280px;
            height: 100vh;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            overflow-y: auto;
            padding-top: 20px;
            z-index: 1000;
        }
        .sidebar .logo {
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }
        .sidebar .nav-item {
            padding: 0;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-left-color: #f97316;
        }
        .main-content {
            margin-left: 280px;
            padding-top: 70px;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 280px;
            right: 0;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            z-index: 999;
            height: 70px;
            display: flex;
            align-items: center;
            padding: 0 30px;
        }
        .navbar-brand {
            font-weight: 600;
            color: #2563eb;
        }
        .page-header {
            margin-bottom: 30px;
        }
        .page-header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 5px;
        }
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 0;
        }
        .card {
            border: none;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .card-header {
            background-color: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
            border-radius: 8px 8px 0 0;
            font-weight: 600;
        }
        .badge {
            font-size: 12px;
            padding: 6px 12px;
            border-radius: 20px;
        }
        .badge-pending {
            background-color: #fef3c7;
            color: #92400e;
        }
        .badge-approved {
            background-color: #d1fae5;
            color: #065f46;
        }
        .badge-assigned {
            background-color: #dbeafe;
            color: #1e40af;
        }
        .badge-progress {
            background-color: #fce7f3;
            color: #831843;
        }
        .badge-completed {
            background-color: #dcfce7;
            color: #166534;
        }
        .badge-rejected {
            background-color: #fee2e2;
            color: #991b1b;
        }
        .stat-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .stat-card-icon {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 15px;
        }
        .stat-card-icon.primary {
            background-color: #dbeafe;
            color: #2563eb;
        }
        .stat-card-icon.secondary {
            background-color: #fed7aa;
            color: #f97316;
        }
        .stat-card-icon.success {
            background-color: #dcfce7;
            color: #16a34a;
        }
        .stat-card-icon.danger {
            background-color: #fee2e2;
            color: #dc2626;
        }
        .stat-card h6 {
            font-size: 13px;
            color: #6b7280;
            font-weight: 500;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .stat-card h3 {
            font-size: 28px;
            font-weight: 700;
            color: #1f2937;
            margin: 0;
        }
        .table {
            font-size: 14px;
        }
        .table thead th {
            background-color: #f9fafb;
            border-top: none;
            border-bottom: 2px solid #e5e7eb;
            color: #374151;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }
        .btn-primary {
            background-color: #2563eb;
            border-color: #2563eb;
        }
        .btn-primary:hover {
            background-color: #1d4ed8;
            border-color: #1d4ed8;
        }
        .btn-secondary {
            background-color: #f97316;
            border-color: #f97316;
        }
        .btn-secondary:hover {
            background-color: #ea580c;
            border-color: #ea580c;
        }
        .alert {
            border-radius: 8px;
            border: none;
        }
        .footer {
            background-color: white;
            padding: 20px;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
            border-top: 1px solid #e5e7eb;
            margin-top: 50px;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding-bottom: 20px;
            }
            .main-content {
                margin-left: 0;
                padding-top: 0;
            }
            .navbar {
                left: 0;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
