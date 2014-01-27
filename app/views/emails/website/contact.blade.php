<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Você recebeu um email pelo formulario de contato do site {{Config::get('app.url')}}</h2>

        <div>
            <strong>Nome:</strong> {{$data['nome']}}
            <strong>Email:</strong> {{$data['email']}}
            <strong>Mensagem:</strong> {{$data['mensagem']}}
        </div>
    </body>
</html>