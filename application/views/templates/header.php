<html>

<head>
        <title>CodeIgniter Tutorial</title>
</head>

<body>

        <h1><?php echo $title; ?></h1>

        <a href="<?php echo site_url('news/'); ?>">
                <button id="button_all_news">All News</button>
        </a>
        <a href="<?php echo site_url('news/create/'); ?>">
                <button id="button_create">Create News</button>
        </a>