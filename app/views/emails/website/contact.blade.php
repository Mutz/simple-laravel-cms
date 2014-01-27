<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>{{trans('messages.contact_form_received')}} {{Config::get('app.url')}}</h2>

        <div>
            <strong>Nome:</strong> {{$nome}}
            <strong>Email:</strong> {{$email}}
            <strong>Mensagem:</strong> {{$mensagem}}
        </div>
    </body>
</html>