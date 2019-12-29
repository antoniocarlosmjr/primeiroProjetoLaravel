<h3>Clientes:</h3>
<a href="{{route('clientes.create')}}">NOVO CLIENTE</a>
<ol>
    @foreach ($clientes as $cliente)
        <li>
            {{$cliente['nome']}} | 
            <a href="{{route('clientes.edit', $cliente['id'])}}">Editar</a>
        </li>    
    @endforeach 
</ol>