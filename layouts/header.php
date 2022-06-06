<header id="header" <? if ($isEntry) echo "class='is-entry'" ?>>
    <a class="logo" href="/">
                    <img src="../files/Logo.png" alt="Poshlost">
                </a>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/layouts/store.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/layouts/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="header-spacer" <? if ($isEntry) echo "class='is-entry'"?>></div>