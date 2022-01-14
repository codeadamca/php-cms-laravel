<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/app.css">

        <script src="/app.js" ty></script>
        
    </head>
    <body>


        <header class="w3-padding">

            <h1 class="w3-text-red">Portfolio Console</h1>

            <?php if(Auth::check()): ?>
                You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?> | 
                <a href="/console/logout">Log Out</a> | 
                <a href="/console/dashboard">Dashboard</a>
            <?php else: ?>
                <a href="/">Return to My Portfolio</a>
            <?php endif; ?>

        </header>

        <hr>

        <section class="w3-padding">

            <form method="post" action="/console/login" novalidate>

                <?= csrf_field() ?>

                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value="<?= old('email') ?>" required>
                
                <?php if($errors->first('email')): ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                <?php endif; ?>

                <br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>

                <?php if($errors->first('password')): ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                <?php endif; ?>

                <br>

                <button type="submit">Log In</button>

            </form>

        </section>

    </body>
</html>


        