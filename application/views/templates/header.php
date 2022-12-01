<html>

<head>
        <title>CodeIgniter Tutorial</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

        <h1><?php echo $title; ?></h1>

        <a href="<?php echo site_url('news/'); ?>">
                <button id="button_all_news" class="btn btn-primary">All News</button>
        </a>
        <a href="<?php echo site_url('news/create/'); ?>">
                <button id="button_create" class="btn btn-primary">Create News</button>
        </a>