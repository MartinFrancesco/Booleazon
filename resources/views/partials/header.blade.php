<header>
    <div class="container">
    <div class="header-top">

    </div>

    <div class="header-bottom">
        <navbar>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Brand</a>
                </li>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('shop') }}">Shop</a>
                </li>
                <li>
                    <a href="{{ route('contatti') }}">Contatti</a>
                </li>
            </ul>
        </navbar>
        <div>
            <input type="text">
        </div>
    </div>
    <div id="archive">
        <a href="{{route('cds.index')}}">ARCHIVIO</a>
    </div>
</div>
</header>