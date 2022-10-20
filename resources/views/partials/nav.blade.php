<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="">Laravel Tutorial</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}"> {{ __('messages.dashboard') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page"
                        href="{{ route('product.create') }}">{{ __('messages.new_product') }}</a>
                </li>


            </ul>

        </div>
    </div>
</nav>
