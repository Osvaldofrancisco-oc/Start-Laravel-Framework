<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Login</title>
</head>
<body>
<div class="main-login">
    <div class="login-left">
    <img src="{{asset('img/logo.png')}}" alt="">
    <h1>Itel PAP 2022/2023</h1>
        <img src="{{asset('img/navigator-amico.svg')}}" class="login-left-image" alt="GPS">
    </div>
    <div class="login-right">
        <div  class="card-login">
            <h1>LOGIN</h1>

            <form class="fom-login" method="POST" action="{{ route('login')}}">
            @csrf
            <div class="textfield">
                
                <label for="inputname">Usuário</label>
                <input type="text" name ="name" id="name"  placeholder="Digite o nome do usuário" required>
                

            </div>
            <div class="textfield">
                
                <label for="inputPassword">Senha</label>
                <input type="password" id="password" name ="password" placeholder="Digite a sua senha" required>
                
            </div>
            
            <br>
                     <button style="margin: -2px;" id="btn-login" class="btn btn-primary">Login</button>
            <br><br>
            @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('error')}}
            </div>
            @endif
            </form>
        </div>
    </div>

</div>
</body>
</html>