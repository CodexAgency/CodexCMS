<!doctype html>
<html lang="en">

<head>
    <?= view('backend/parts/head') ?>
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col col-md-8 col-lg-4">
                <form class="form-signin">
                    <h1 class="mb-3 text-center">CodexCMS</h1>
                    <div class="form-group">
                        <label for="">Nome utente o indirizzo email</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Ricordami
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                </form>
            </div>
        </div>
    </div>

    <?= view('backend/parts/footer-scripts') ?>

</body>

</html>