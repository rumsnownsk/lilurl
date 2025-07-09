<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?= base_url('/images/favicon.ico') ?>">

    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/font-awesome.min.css') ?>">
    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">

    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/iziModal.min.css') ?>">

    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/main.css') ?>">

    <!----webfonts---->


</head>
<body>
<!---header---->
<header id="header" class="header">
    <div class="container">

    </div>
</header>
<!---//end_header---->

<?php get_alerts(); ?>

<!---content---->
<section id="content" class="content">

    <div class="container">
        <div class="row mt-5">
                <h1 class="text-center h2 my-3">Remember, brevity is the soul of wit</h1>
        </div>
        <div class="row mt-2">
            <form action="" method="post" id="getUrlForm">
                <div class="input-group">
                    <input type="text" name="longLink" class="form-control" id="longLink" placeholder="Your long e-link">
                    <span class="input-group-text" id="clear-longLink">×</span>
                </div>
                <!--                <div id="text" class="form-text">some text</div>-->
                <!--    <div class="mb-3 form-check">-->
                <!--        <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
                <!--        <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
                <!--    </div>-->
                <button type="submit" id="btn-get-url" class="btn btn-primary mt-5 rounded-1 btn-get">Get li'l URL</button>
            </form>

        </div>

        <div class="row">
            <div class="result" id="result">
                <div class="lilUrl" id="lilUrl"></div>
                <p class="instruction">click to copy</p>
            </div>
        </div>


    </div>

</section>
<!---//end_content---->



<!---footer---->
<footer id="footer" class="footer">
    <div class="container">
    </div>
</footer>
<!---//end_footer---->


<script type="text/javascript" src="<?= base_url('/assets/js/jquery-3.7.1.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/js/bootstrap.min.js')?>"></script>

<script type="text/javascript" src="<?= base_url('/assets/js/iziModal.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/js/main.js')?>"></script>

<div class="iziModal-alert-success"></div>
<div class="iziModal-alert-error"></div>
</body>
</html>