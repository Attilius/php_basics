
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand mx-2" href="/php_basics/">My images</a>
    <?php if ($user["loggedIn"]):?>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
            <?php esc($user["name"]); ?>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/php_basics/logout">Logout</a>
            <a class="dropdown-item" href="/php_basics/profile">Profile</a>
        </div>
    </div>
    <?php else:?>
    <ul class="navbar-nav pull-right">
        <li class="nav-item active">
            <a class="nav-link" href="/php_basics/login">Login</a>
        </li>
    </ul>
    <?php endif; ?>
</nav>
