<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- fav icon -->
    <link rel="stylesheet" href="<?= base_url('assets/images/logo.png') ?>" type="image/png">

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/libs/bootstrap/bootstrap.min.css') ?>">

    <!-- font awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/libs/fontawesome/all.min.css') ?>">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet" />


    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">

</head>

<body>
    <!-- render section -->
    <?= $this->renderSection('content') ?>


    <!-- bootstrap js -->
    <script src="<?= base_url('assets/libs/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>