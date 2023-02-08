@extends('layouts.app')


@section('content')

    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Selecciona una fecha</h1>
                        </div>
                        <form action="login">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <input class="form-control" type="date" required> <span
                                            class="form-label">Fecha</span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <input class="form-control" type="time" required> <span
                                            class="form-label">Hora</span> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <select class="form-control" required>
                                            <option value="" selected hidden>Número de adultos</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select> <span class="select-arrow"></span> <span
                                            class="form-label">Adultos</span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <select class="form-control" required>
                                            <option value="" selected hidden>Número de niños</option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select> <span class="select-arrow"></span> <span
                                            class="form-label">Niños</span> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-btn"><button class="submit-btn">Iniciar Sesion y
                                                reservar</button></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-btn"><button formaction="sin_registro"
                                                class="submit-btn">Reservar sin registrarse</button></div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection