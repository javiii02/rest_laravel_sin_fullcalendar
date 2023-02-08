<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style_sesion.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
  <title>Reserva</title>
</head>

<body>

  <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Cheers. Bar & Grill</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#carta">Nuestra Carta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sobre_nosotros">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reserva</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">

          <div class="card-img-left d-none d-md-flex">
            <img src="images/rest_res.jpg" alt="">
          </div>
          <div class="card-body p-4 p-sm-5">
            <h1 class="card-title text-center mb-5 fw-light fs-5">¡Regístrate!</h1>
            <form action="login">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required
                  autofocus>
                <label for="floatingInputUsername">Nombre</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Correo Electrónico</label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                <label for="floatingPasswordConfirm">Repite la contraseña</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn" style="font-size: 2rem; background: linear-gradient(to right, #c6c6c6, #e9e9e9);"
                  type="submit">Registrarse y reservar</button>
              </div>

              <hr class="my-4">
              <a class="d-block text-center mt-2 small" href="inicio_sesion" style="color: black;">¿Tienes una cuenta? Iniciar
                sesión</a>



            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>