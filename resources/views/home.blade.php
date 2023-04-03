

@extends("layouts.master")

@section("contenu")
    <div class="row">
    <div class="col-12 p-4">
        <div class="jumbotron">

            <h1 class="display-3">Bienvenue, <strong> {{userFullName()}} </strong></h1>
            <p class="lead">this is a simple hero aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to  space content  out within the larg
            <p class="lead">
            <a class="btn btn-primary btn_lg" href="#" role="buton">Lire plus</a>
            </p>

        </div>
    </div>
    </div>
@endsection
