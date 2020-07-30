<?php
$page_title = 'Login Page'
?>
<?php include 'template/header.php'; ?>
<main class="h-850">
    <div class="container">
        <section id="page-header">
            <div class="row">
                <div class="col-12 mt-3">
                    <h1 class="display-4">
                        LOGIN TO YOUR USER SO YOU CAN SEE FISH
                    </h1>
                    <p><a href="register.php">ABOUT FISH BELUGA FISH FISH YES</a></p>
                </div>
            </div>

        </section>
        <section id="login-form">
            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="" id="login" autocomplete="off" novalidate>
                        <div class="form-group">
                            <label for="email">* Email</label>
                            <input class="form-control" type="email" name="email" id="email">
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">* Password</label>
                            <input class="form-control" type="password" name="password" id="password">
                            <span class="text-danger"></span>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark">LOGIN</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>
<?php include 'template/footer.php'; ?>