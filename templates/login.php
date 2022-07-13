<main class="container pt-5">
    <form method="post" action="/php_basics/login">
        <?php if ($containsError):?>
        <div class="alert alert-danger">
            The username or password aren't matching!
        </div>
        <?php endif; ?>
        <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email address...">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password...">
        </div>
        <button class="btn btn-primary" type="submit">Login</button>
    </form>
</main>
