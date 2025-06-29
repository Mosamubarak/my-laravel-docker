<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boekenbeheer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8fafc; }
        .container { background: #fff; border-radius: 8px; box-shadow: 0 2px 8px #0001; margin-top: 40px; padding: 30px; }
        h1 { color: #bfa14a; } /* goudkleur */
        .navbar, .bg-primary { background: #111 !important; }
        .navbar-brand, .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link {
            color: #bfa14a !important;
        }
        .btn-primary, .btn-primary:active, .btn-primary:focus, .btn-primary:hover {
            background-color: #bfa14a !important;
            border-color: #bfa14a !important;
            color: #111 !important;
        }
        .btn-info, .btn-info:active, .btn-info:focus, .btn-info:hover {
            background-color: #bfa14a !important;
            border-color: #bfa14a !important;
            color: #111 !important;
        }
        .btn-warning, .btn-warning:active, .btn-warning:focus, .btn-warning:hover {
            background-color: #bfa14a !important;
            border-color: #bfa14a !important;
            color: #111 !important;
        }
        .btn-success, .btn-success:active, .btn-success:focus, .btn-success:hover {
            background-color: #bfa14a !important;
            border-color: #bfa14a !important;
            color: #111 !important;
        }
        .btn-danger, .btn-danger:active, .btn-danger:focus, .btn-danger:hover {
            background-color: #111 !important;
            border-color: #bfa14a !important;
            color: #bfa14a !important;
        }
        .alert-success {
            background-color: #bfa14a;
            color: #111;
            border-color: #bfa14a;
        }
        a { color: #bfa14a; }
        a:hover { color: #111; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Boekenbeheer</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/books">Boeken</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
