 <h1>saludo lista empleados con estado {{$estado}}</h1>
    <ul>
    @foreach ( $empleados as $empleado )
        <li
            @if ($empleado->nombre[0] == 'A')
                style='color:green;text-transform:uppercase;'
            @endif
        > hola les dice
         {{ $empleado->nombre }} 
         </li>
    @endforeach
</ul>
