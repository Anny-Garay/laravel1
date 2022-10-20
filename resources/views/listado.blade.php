<h1>Listado de alumnos</h1>
<table width="100%" border="1"> 
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>DNI</th>
        <th>Estado</th>
    </tr>
    @foreach ($oficinas as $oficina)
        <tr>
            <td>{{ $oficina->addressLine1}}</td>
        </tr>
    @endforeach
</table>