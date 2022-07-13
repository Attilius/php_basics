
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand mx-2" href="/php_basics/">My images</a>
    <ul class="navbar-nav pull-right">
        <li class="nav-item active">
            <?php if ($loggedIn):?>
            <a class="nav-link" href="/php_basics/logout">Logout</a>
            <?php else:?>
            <a class="nav-link" href="/php_basics/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
