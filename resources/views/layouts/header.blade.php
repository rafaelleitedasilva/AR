@if (in_array('AcessoMiddleware', Route::getCurrentRoute()->middleware()))
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 sticky-top">
        <a class="navbar-brand" href="#"><img src="{{ Vite::asset('resources/favicon/favicon.png') }}" width="40px"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item @if (Route::currentRouteName() == 'letter.view') active @endif">
                    <a class="nav-link" href="{{ route('letter.view') }}">Letter </a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() == 'series.view') active @endif">
                    <a class="nav-link" href="{{ route('series.view') }}">Séries</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Awa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{ route('water.view') }}" class="dropdown-item">Tomar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('water.me') }}">Eu</a>
                        <a class="dropdown-item" href="{{ route('water.heshe') }}">
                            @if (\App\Models\Partner::where('me_id', Auth::user()->id)->first()['sex'] == 'F')
                                Ela
                            @else
                                Ele
                            @endif
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ideias Futuras
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" wire:navigate>Filmes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" wire:navigate>Conselhos</a>
                    </div>
                </li>
            </ul>
            <span class="navbar-text float-lg-end">
                <a href="{{ route('logout') }}">Logout</a>
            </span>
        </div>
    </nav>
@endif
