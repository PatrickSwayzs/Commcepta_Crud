@yield('content')
<div class="container">
    <h1>Produtos</h1>
    <ul>
        @foreach($produtos as $prod)
            <li>{{ $prod->descricao }}<br>
                {{ $prod->categoria }}<br>
                {{ $prod->preco }}
            </li>
        @endforeach
    </ul>
</div>

