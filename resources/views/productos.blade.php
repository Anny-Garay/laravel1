<h1>Productos</h1>
@php
    $nombre="Anny";
    $edad=23;
@endphp

<h2>Hola {{ $nombre }}</h2>

@if ($edad>=18)
    <h3>Eres mayor de edad </h3>
@else 
    <h3>Eres menor de edad</h3>
@endif


