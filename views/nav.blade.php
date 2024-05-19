<nav class="w3-bar w3-teal">
    <a href="/" class="w3-bar-item">
        HOME
    </a>
    <a href="/about" class="w3-bar-item">
        ABOUT
    </a>
    <a href="/contacts" class="w3-bar-item">
        CONTACTS
    </a>

    @if ($isUserLoggedIn)
        <a href="/logout" class="w3-bar-item w3-right">
            LOGOUT
        </a>
    @else
        <a href="/login" class="w3-bar-item w3-right">
            LOGIN
        </a>
    @endif
</nav>
