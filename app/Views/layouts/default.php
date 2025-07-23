<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?= base_url('/assets/images/favicon.ico') ?>">

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
            <div class="btnBack">
                <a href="<?= get_href() ?>" class="btn btn-dark">&#x25c0; Home page</a>
            </div>
                <h1 class="text-center h2 my-3">Brevity is the sister of talent</h1>
        </div>
        <div class="row mt-2">
            <form action="" method="post" id="getUrlForm">
                <div class="input-group">
                    <input type="url" name="longLink" class="form-control" id="longLink" placeholder="Your long e-link">
                    <span class="input-group-text" id="clear-longLink">×</span>
                </div>
                <button type="submit" id="btn-get-url" class="btn btn-primary mt-2 rounded-1 btn-get">Get li'l URL</button>
            </form>

        </div>

        <div class="row" style="height: 150px">
            <div class="result" id="result">
                <div class="lilUrl" id="lilUrl"></div>
                <p class="instruction">click to copy</p>
            </div>
        </div>

        <div class="row">
            <div id="history"></div>

        </div>
        <div id="loader">
            <img src="/assets/images/ripple.svg" alt="">
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
<script type="text/javascript" src="<?= base_url('/assets/js/mark.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/js/main.js')?>"></script>

<div class="iziModal-alert-success"></div>
<div class="iziModal-alert-error"></div>
</body>
</html>