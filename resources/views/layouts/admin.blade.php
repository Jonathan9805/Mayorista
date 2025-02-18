<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Sweetalert2-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        .custom-navbar {
    background-color: #282855; /* Cambia este valor por el color azul deseado */
  }

  .custom-navbar .navbar-nav .nav-link,
  .custom-navbar .navbar-brand,
  .custom-navbar .btn {
    color: rgb(216, 168, 9); /* Establece el color de las letras a blanco */
  }

  .custom-navbar .navbar-nav .nav-item {
    padding-right: 20px; /* Añade espacio a la derecha de cada elemento del navbar */
  }

  .custom-navbar .btn {
    border-radius: 25px; /* Hace el botón más elegante con bordes redondeados */
    padding: 10px 10px; /* Añade más espacio dentro del botón */
    font-weight: bold; /* Aumenta la negrita del texto */
    transition: background-color 0.3s ease; /* Transición para cuando el botón se pase por encima */
  }

  .custom-navbar .btn:hover {
    background-color: #b7cbd8; /* Color de fondo del botón al pasar el ratón */
    color: white; /* Asegura que el texto siga blanco al pasar el ratón */
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
                <p><i class="bi bi-geo-alt"></i> Mercado Mayorista, Calle Antonia Vela y Félix Valencia</p>
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
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">Mayorista</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('custom-page') }}">Requisitos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('puestos-page') }}">Locales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ver</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <a class="btn btn-outline-light btn-lg" href="{{ url('login') }}">Iniciar sesión</a>
          </div>
        </div>
      </nav>
    @if (($message = Session::get('mensaje')) && ($icono = Session::get('icono')))
    <script>
        Swal.fire({
            position: "top-end",
            icon: "{{ $icono }}",
            title: "{{ $message }}",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif
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
 <!-- Vendor JS Files -->
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

 <!-- Main JS File -->
 <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
