<!DOCTYPE html>
<html>

<head>
    <meta charset = "UTF8">
    <title>Интернет-магазин модной одежды</title>
    <link rel="stylesheet" href="../css_styles/styles_product.css">
</head>

<body>

<?php
    session_start();

    $link = mysqli_connect("172.18.0.3","mike","124356+A","gbphp");

    $sql = "SELECT name,depiction,cost FROM catalog WHERE name=" . $_GET['name'];
    $res = mysqli_query($link, $sql);

    $row = mysqli_fetch_assoc($res);

?>

<div class="content">

    <div class="header">

        <div class="header-left">
            <ul type="none">
                <li><a href="#">Главная</a></li>
                <li><a href="../pages/catalog.html">Каталог товаров</a></li>
            </ul>
        </div>

        <div class="header-right">
            <p><a href="../pages/userLK.html">Личный кабинет</a></p>
            <p><a href="../php_scripts/exitLK.php">Выход</a></p>
        </div>

    </div>

    <div class="productSingle">

        <div class="productSingle-left">
            <img id="productImages" src="<?php echo "http://109.173.124.170/gbphp_2/" . $row['depiction']; ?>" alt="">
        </div>

        <div class="productSingle-right">

            <p id="productName"> <?php echo $row['name']; ?> </p>
            <p id="productCost"> <?php echo $row['cost']; ?> </p>

            <a id="productSingle_link" href="#">Добавить в заказ</a>

        </div>

    </div>

</div>

</div>

<script>

    var addToCart = document.getElementById("productSingle_link");
    addToCart.addEventListener("click", function() {

        var orderInfo = {
            prod_name: "",
            images: "",
            cost: ""
        };

        var elem = document.getElementById('productName');
        orderInfo.prod_name = elem.textContent;

        var elem = document.getElementById('productImages');
        orderInfo.images = elem.src;        

        var elem = document.getElementById('productCost');
        orderInfo.cost = elem.textContent;

        /* создание AJAX-запроса */
        /* данные отправляются на сервер методом post */
        var xhr = new XMLHttpRequest();
        xhr.open("post", "addToCart.php", true);

        /* функция JSON.stringify() преобразует объект orderInfo в формат JSON */
        xhr.send(JSON.stringify(orderInfo));

        /* отслеживание статуса завершения AJAX-запроса */
        /* если запрос завершился успешно, то вывести пользователю короткое сообщение */
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                alert("Товар добавлен в заказ.");
            }

        };

    }, false);
</script>

</body>

</html>