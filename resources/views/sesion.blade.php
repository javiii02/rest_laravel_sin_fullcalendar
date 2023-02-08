<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_perfil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
    <title>Sesion</title>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Cheers. Bar & Grill</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="reserva">Reserva</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-3">

                <ul class="list-group">
                    <li class="list-group-item text-muted">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Creacion del
                                perfil</strong><br></span>
                        05.04.2022</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Nombre</strong><br></span>
                        Javi</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Apellido</strong><br></span>
                        Aragón</li>

                </ul>

            </div>
            <div class="col-sm-9">

                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#mis_reservas" data-toggle="tab">Mis reservas</a></li>
                    <li>--</li>
                    <li><a href="#met_pago" data-toggle="tab">Métodos de pago</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="mis_reservas">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nº de reserva</th>
                                        <th>Dia</th>
                                        <th>Hora</th>
                                        <th>Nº Adultos </th>
                                        <th>Nº Niños</th>
                                    </tr>
                                </thead>
                                <tbody id="items">
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem Ipsun</td>
                                        <td>Lorem Ipsun</td>
                                        <td>Lorem Ipsun</td>
                                        <td>Lorem Ipsun</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Lorem Ipsun</td>
                                        <td>Lorem Ipsun</td>
                                        <td>Lorem Ipsun</td>
                                        <td>Lorem Ipsun</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                </div>
                            </div>
                        </div>

                        <hr>

                    </div>
                    <div class="tab-pane" id="met_pagos">

                        <h2></h2>

                    </div>
                    <div class="tab-pane" id="settings">


                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name">
                                        <h4>Last name</h4>
                                    </label>
                                    <input type="text" class="form-control" name="last_name" id="last_name"
                                        placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone">
                                        <h4>Phone</h4>
                                    </label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile">
                                        <h4>Mobile</h4>
                                    </label>
                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                        placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Email</h4>
                                    </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Location</h4>
                                    </label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere"
                                        title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Password</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Verify</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password2" id="password2"
                                        placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i
                                            class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                        Reset</button>
                                </div>
                            </div>
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