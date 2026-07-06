<html>
    <head>
        <title>Página de Contatos</title> 
    </head>
    <body>
        <h3>Página de Contatos</h3>
        <table border=1>
            <tr>
                <td> Nome </td>
                <td> Celular </td>
            </tr>
            @foreach ($contatos as $contato)
                <tr>
                    <td> <p>{{ $contato['nome'] }} </p> </td>
                    <td> <p>{{ $contato['celular'] }} </p> </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>