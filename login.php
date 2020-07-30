<?php
$page_title = 'Login Page';

// KEEP TRACK OF ERRORS
$errors = [
    'email' => '',
    'password' => '',
    'submit' => '',
];

// CHECK IF USER SUBMITTED
if (isset($_POST['submit'])) {

    // SET SUBMITTED EMAIL AND PASSWORD TO VARIABLES IF ITS NOT EMPTY
    $email = !empty($_POST['email']) ? trim($_POST['email']) : '';
    $password = !empty($_POST['email']) ? trim($_POST['password']) : '';
    // KEEP TRACK OF SIMPLE VALIDITY OF FORM
    $form_valid = true;

    // CHECK IF EMAIL IS FALSEY
    if (!$email) {
        //CHANGE VALIDITY OF FORM
        $form_valid = false;
        // PUSH ERROR TO SHOW
        $errors['email'] = 'A valid email is required';
    }

    // CHECK IF PASSWORD IS FALSEY
    if (!$password) {
        //CHANGE VALIDITY OF FORM
        $form_valid = false;
        // PUSH ERROR TO SHOW
        $errors['password'] = 'Password is required';
    }

    // CHECK IF FORM IS VALID
    if ($form_valid) {
        // CHECK VALIDITY OF EMAIL AND PASS VIA MYSQL

    }
}
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
                            <span class="text-danger"> <?= $errors['email']; ?> </span>
                        </div>
                        <div class="form-group">
                            <label for="password">* Password</label>
                            <input class="form-control" type="password" name="password" id="password">
                            <span class="text-danger"> <?= $errors['password']; ?></span>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark">LOGIN</button>
                        <span class="text-danger"> <?= $errors['submit']; ?></span>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>
<?php include 'template/footer.php'; ?>