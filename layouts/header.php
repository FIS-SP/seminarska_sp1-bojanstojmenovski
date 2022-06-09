<header id="header" <? if ($isEntry) echo "class='is-entry'" ?>>
    <a class="logo" href="/">
        <img src="../files/Logo.png" alt="Poshlost">
    </a>
    <button id="nav-toggler" type="button">
        <span class="nav-line up"></span>
        <span class="nav-line middle"></span>
        <span class="nav-line down"></span>
    </button>
    <nav class="navbar">
        <ul class="nav-links">
            <li class="nav-item">
                <a class="nav-link" href="/layouts/store.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
            </li>
        </ul>
    </nav>
</header>
<div id="header-spacer" <? if ($isEntry) echo "class='is-entry'" ?>></div>