<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navigation">
    <div class="container-fluid my-4">
        <a class="navbar-brand {{ request()->path() !== '/' ? 'text-white' : '' }}" href="/">Dinasti Garuda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="{{ request()->path() !== '/' ? 'text-white' : '' }} nav-item nav-link mr-4 active"
                    href="/">Home
                    <span class="sr-only">(current)</span></a>
                <a class="{{ request()->path() !== '/' ? 'text-white' : '' }} nav-item nav-link mr-4"
                    href="{{ route('kingdom') }}">Kingdom</a>
                <a class="{{ request()->path() !== '/' ? 'text-white' : '' }} nav-item nav-link mr-4"
                    href="{{ route('collection') }}">Collection</a>
                <a class="{{ request()->path() !== '/' ? 'text-white' : '' }} nav-item nav-link mr-4"
                    href="#">Events</a>
                <a class="{{ request()->path() !== '/' ? 'text-white' : '' }} nav-item nav-link mr-4"
                    href="#">News</a>
                <a class="{{ request()->path() !== '/' ? 'text-white' : '' }} nav-item nav-link mr-4" href="#">About
                    Us</a>
                <a class="{{ request()->path() !== '/' ? 'text-white' : '' }} nav-item nav-link btn btn-custom px-4"
                    href="#">Download</a>
            </div>
        </div>
    </div>
</nav>
