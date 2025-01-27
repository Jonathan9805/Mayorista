<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        .top-header {
            background-color: #1A1A3C;
            color: white;
            padding: 20px 0;
        }
        .top-header .logo img {
            height: 80px;
        }
        .top-header .contact-info p {
            margin: 0;
            font-size: 16px;
        }
        .top-header .search-bar input {
            border-radius: 20px;
        }
        .top-header .search-bar button {
            border-radius: 20px;
        }
        .navbar-custom {
            background-color: #12124e;
        }
        .navbar-custom .nav-link {
            color: white !important;
            font-weight: bold;
        }
        .navbar-custom .nav-link:hover {
            color: #FFD700 !important;
        }
    </style>
</head>
<body>
    <!-- Encabezado superior -->
    <div class="top-header d-flex justify-content-between align-items-center px-4">
        <div class="d-flex align-items-center">
            <div class="logo me-3">
                <img src="{{ url('assets/img/loogoo.png') }}" alt="Logo Latacunga">
            </div>
            <div class="contact-info">
                <p><i class="bi bi-geo-alt"></i> Centro Comercial Popular, Calle Antonia Vela y Félix Valencia</p>
                <p><i class="bi bi-telephone"></i> (593) 033700440 Ext 1440 | <i class="bi bi-envelope"></i> tienda@latacunga.gob.ec</p>
            </div>
        </div>
        <div class="search-bar">
            <form class="d-flex">
                <input type="text" class="form-control me-2" placeholder="Buscar aquí...">
                <button class="btn btn-warning" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contáctanos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manual-Tienda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer style="background-color: #1A1A3C; color: white; padding: 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <img src="{{ url('assets/img/foooter.png') }}" alt="Logo Dirección de TIC" style="height: 60px;">
                    </div>
                    <p style="margin-top: 10px;">Latacunga del Tamaño de tus Sueños</p>
                </div>
                <div class="col-md-6">
                    <h5>Contáctanos</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt"></i> Sánchez de Orellana y Ramírez Fita</li>
                        <li><i class="bi bi-telephone"></i> +593 (03) 2813 772</li>
                        <li><i class="bi bi-envelope"></i> info@latacunga.gob.ec</li>
                        <li><i class="bi bi-facebook"></i> Municipio de Latacunga</li>
                        <li><i class="bi bi-facebook"></i> KAISERMASTER</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
