<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
        <div class="dados">
           
                <p>Nome: {{$data->nome}}</p>
                <p>Email: {{$data->email}}</p>
                <p>IP: {{$data->ip}}</p>
                <p>Endereço: {{$data->enderco}}</p>
                <p>Telefone: {{$data->telefone}}</p>   
        </div>
</body>
</html>