<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menadżer projektów</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContents" aria-controls="navbarContents" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContents">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('pages.index') }}">Strona domowa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.list') }}">Moje projekty</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.about') }}">O mnie</a>
            </li>
        </ul>
    </div>
</nav>
