<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
    <?= $this->include('Backend/Parts/Head') ?>
</head>

<body class="bg-dark">
    <main class="mt-5">
        <?=$this->renderSection('main')?>
    </main>

    <?= $this->include('Backend/Parts/Footer-Scripts') ?>

</body>

</html>