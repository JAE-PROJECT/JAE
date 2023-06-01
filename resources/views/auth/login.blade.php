<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
    <title>JAE Connexion</title>
    <style>



    </style>
</head>

<body>
    {{-- si la l'inscription à un programme a échouer en raison de la déconnexion de l'utilisateur --}}
    <div class="bg">
            <div class="inscription ">
            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <p>Bienvenue à la JAE</p>
                @error('email')
                    <span class="error_message">{{ __($message) }}</span><br>
                @enderror
                <input type="email" id="email" name="email" autofocus autocomplete="username"  value="{{ old('email') }}" required placeholder="Email"><br>

                <input id="password" type="password" name="password"  autocomplete="current-password" required placeholder="Mot de passe" ><br>
                <div class="remember">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <label for="remember_me" class="">{{ __('Se souvenir de moi') }}</label> <br>
                </div>


                <input type="submit" value="Connexion"><br>
                <span class="hvntaccount"> Vous n'avez pas de compte? <a href="{{ route('rejoindre') }}">S'inscrire</a></span><br>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="my-3">{{__('Mot de passe oublié ?')}}</a>
                @endif
                </form>

                <div class="drop drop-1"></div>
                <div class="drop drop-2">
                </div>
                <div class="drop drop-3"></div>
                <div class="drop drop-4">
                    {{-- <a href="{{ route('rejoindre') }}">S'inscrire</a> --}}
                </div>
                <div class="drop drop-5"></div>
            </div>

        </div>

    </div>

</body>
</html>

