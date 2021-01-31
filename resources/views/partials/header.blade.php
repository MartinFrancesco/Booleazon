<header>
    <div class="container">
        <div class="header-top">
            <ul>
                <li>
                    <a href=""><i class="fas fa-bars"></i></a>
                </li>
                <li>
                    <i class="fab fa-apple"></i>
                </li>
                <li>
                    <a href=""><i class="fas fa-user-circle"></i></a>
                </li>
            </ul>
        </div>
        <div class="header-bottom">
            <navbar>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li>
                        <a href="{{ route('contatti') }}">Contatti</a>
                    </li>
                    <li>
                        <a href="{{route('cds.index')}} ">ARCHIVIO</a>
                    </li>
                    <li>
                        <input type="text">
                        <i class="fas fa-search"></i>
                    </li>
                </ul>
            </navbar>
        </div>
    </div>
</header>