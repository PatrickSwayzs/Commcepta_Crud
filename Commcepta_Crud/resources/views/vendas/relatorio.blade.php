<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<div class="container">
    <h1>Relário de Vendas - Valor (Ordem Ascendente)</h1>

    <table style="width:100%">
        <thead>
        <tr>
            <th>Produto</th>
            <th>Vendedor</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vendas as $ven)
            <tr>
                <td> {{ $ven->descricao }} </td>
                <td> {{ $ven->nome }} </td>
                <td> {{ $ven->quantidade }} </td>
                <td> {{ $ven->valor }} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>




