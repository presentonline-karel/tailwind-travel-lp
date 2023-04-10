<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= css('assets/css/styles.css') ?>
</head>

<body class="bg-black">
    <div class="md:flex">
        <h1 class="text-prim-100"><?= $page->title() ?></h1>
        <p class="mt-20 w-64 bg-white shadow rounded-xl p-2">Test</p>

        <div class="p-24">
            <h1 class="text-prim-300">Test</h1>
        </div>
    </div>
</body>

</html>