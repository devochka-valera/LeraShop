<?php
include 'src/data.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="src/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
<table class="table table-hover">
    <caption> Shopping cart</caption>
    <thead>
    <tr>
        <th>Изображение</th>
        <th>Имя товара</th>
        <th>Модель</th>
        <th>Количество</th>
        <th>Цена за единицу</th>
        <th>Всего</th>
    </tr>
    </thead>
    <tbody>
    <?php?>

    <?php foreach($cart->products as $product) {?>
    <tr>
        <td> <img src="<?php echo $product->image ?>"> </td>
    </tr>
    <?php } ?>


    </tbody>
</table>
</body>
</html>
