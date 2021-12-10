@extends('/layouts/main')

@section('content')
    <header class="text-light gradient">

        @include('/partials/navbar')

        <div class="jumbotron bg-transparent text-center p-5">
            <div class="container">
                <h1 class="display-3 text-pacifico">Holovel</h1>
                <br>
                <p class="lead text-white-50">Something short and leading about the collection below—its contents, the
                    creator,
                    etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <br>
                <form action="">
                    <input class="form-control form-control-lg" type="text" name="" id=""
                        placeholder="Digite aqui a foto que deseja pesquisar">
                </form>
                <br>
            </div>
        </div>
    </header>

    <section class="container mt-4">
        <div class="row">

            @if ($photos->isEmpty())
                <div class="col-12 text-center p-5">
                    <h1>Nenhuma foto cadastrada</h1>
                    <i class="dar da-frown"></i>
                </div>
            @endif

            @foreach ($photos as $photo)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img class="bd-placeholder-img card-img-top" src="{{ url("/storage/photos/$photo->photo_url") }}"
                            alt="">
                        <div class="card-body">
                            <p class="card-text">{{ $photo->title }}
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted text-center">Por: {{ $photo->user->name }}</small>
                                <small class="text-muted text-center">{{ $photo->date }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

@endsection
