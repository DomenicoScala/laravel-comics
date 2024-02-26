@php
    $linksMenuHeader = [
        [
            'url' => '/',
            'name' => 'CHARACTERS',
            'active' => 'false',
        ],
        [
            'url' => '/',
            'name' => 'COMICS',
            'active' => 'true',
        ],
        [
            'url' => '/',
            'name' => 'MOVIES',
            'active' => 'false',
        ],
        [
            'url' => '/',
            'name' => 'TV',
            'active' => 'false',
        ],
        [
            'url' => '/',
            'name' => 'GAMES',
            'active' => 'false',
        ],
        [
            'url' => '/',
            'name' => 'COLLECTIBLES',
            'active' => 'false',
        ],
        [
            'url' => '/',
            'name' => 'VIDEOS',
            'active' => 'false',
        ],
        [
            'url' => '/',
            'name' => 'FANS',
            'active' => 'false',
        ],
        [
            'url' => '/',
            'name' => 'NEWS',
            'active' => 'false',
        ],
        [
            'url' => '/',
            'name' => 'SHOP',
            'active' => 'false',
        ],

    ]
@endphp 

<header>
    <div class="container-mio">
        <div class="header-flex">
            <div>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>

            <div>
                <ul>
                    @foreach ($linksMenuHeader as $link)
                        <li>
                            <a href="/">{{ $link['name'] }}</a>
                        </li>             
                    @endforeach
                </ul>
            </div>

            <div>
                <input type="search" id="search-bar" placeholder="Search">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </div>
    </div>

    <section>
        <div class="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
        </div>
    </section>
</header>
