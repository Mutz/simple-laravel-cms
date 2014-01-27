<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>{{trans('messages.contact_form_received')}} {{Config::get('app.url')}}</h3>

        <div>
            <strong>Nome:</strong> {{$nome}}<br>
            <strong>Email:</strong> {{$email}}<br>
            <strong>Mensagem:</strong> <p>{{$mensagem}}</p>
        </div>
    </body>
</html>