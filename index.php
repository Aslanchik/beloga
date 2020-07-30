<?php
session_start();
$page_title = 'Home Page'
?>
<?php include 'template/header.php'; ?>
<main class="h-850">
    <div class="container">
        <section id="page-header">
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <h1 class="display-4">
                        ITS JUST FISH
                    </h1>
                    <p>YOU WANT FISH? WE GOT FISH, TALK FISH AND POST FISH.</p>
                    <p><a class="btn btn-dark" href="register">START FISH</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3 text-center">
                    FEATURED POSTS
                </div>
            </div>
        </section>
    </div>
</main>
<?php include 'template/footer.php'; ?>