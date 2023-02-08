@extends('layouts.plantilla')

@section('content')

    <h2>Mis reservas</h2>
    <table>
        <tr>
            <th>Nombre</th>
            {{-- <th>Precio</th> --}}
            {{-- <th>Fecha</th>
            <th>Fecha</th>
            <th>Fecha</th>
            <th>Fecha</th>
            <th>Fecha</th> --}}
        </tr>

        @isset($reservas)
            @foreach ($reservas as $r)
                <tr>
                    {{-- <td>{{ $r->fechaReserva->fecha }}</td>
                    <td>{{ $r->fechaReserva->hora }}</td> --}}
                    <td>{{ $r->email_verified_at }}</td>
                    {{-- <td>{{ $r->num_personas }}</td> --}}
                    {{-- <td>{{ $r->menus->precio }}</td> --}}
                    {{-- <td>{{ $r->num_personas*$r->menu->precio }}</td> --}}

                </tr>
            @endforeach
        </table>
    @endisset


@endsection
