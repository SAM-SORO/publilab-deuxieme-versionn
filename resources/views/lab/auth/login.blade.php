@php
    $excludeFooter = true;
@endphp

@extends('baseVisite')

@section('title','Login')

{{-- ajouter ceci au menu du navbar --}}
@section('Authentification')
    <a class="nav-link font-weight-bold active" href="#">Authentification</a>
@endsection

@section ('contenue-main')
    <div class="sign-height bg-light mx-auto justify-content-center py-5 mt-2">
        {{-- <div class="alert alert-danger alert-dismissible fade show col-10 col-lg-4 col-sm-8 col-md-9 mt-3 mx-auto" role="alert" id="alert-danger-login">
            les informations saisis sont incorrect
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div> --}}

        <div class="container-fluid d-flex align-items-center justify-content-center" id="login">
            <form action="{{route('home')}}" method="POST" id="form-login" class="shadow p-3 mb-5 bg-white rounded autocomplete-off col-12 col-sm-10 col-md-9 col-lg-4 mt-5 mt-sm-5 mt-md-5">
                <div class="text-center"><h2>Connexion</h2></div><hr>
                @csrf
                <div class="form-group mb-4 mt-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autocomplete="email" autofocus value="{{old('email')}}">
                    <small id="error-email" class="form-text text-danger"></small>
                    @error('email')
                        <div class="error"><small id="error-email" class="form-text text-muted"></small></div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label for="password">Mot de passe</label>
                    <div class="input-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="toggle-password1">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <small id="error-password" class="form-text text-danger"></small>
                    @error('password')
                        <div class="error"><small id="error-password" class="form-text text-muted"></small></div>
                    @enderror
                </div>
                <div class="row p-3 justify-content-between">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Se souvenir de moi</label>
                      </div>
                    <div>
                        <a href="#">Mot de passe oublié !</a>
                    </div>
                </div>

                <button type="submit" class="btn mb-2 w-100" style="background-color: #9b59b6; color: white; border:#9b59b6" id="submit-connexion" >Se connecter</button>
                {{-- style="background-color: #9b59b6; color: white; border:#9b59b6 !important; --}}

                <div class="my-2 text-center"> Pas de compte ? <a href="{{route('register')}}" class="ml-2"> S'inscrire</a></div>
            </form>
        </div>
    </div>

    <script>
        document.querySelector('.navbar').classList.add('bg-light');
    </script>

@endsection