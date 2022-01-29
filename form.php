<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

<p>Через несколько секунд Вы будете перенаправлены на страницу оплаты. Если не хотите ждать, нажмите на кнопку ниже...</p>

<?php if(!empty($_SESSION['payment'])) : ?>
    <form id="payment" name="payment" method="POST" action="https://sci.interkassa.com/" enctype="utf-8">
        <input type="hidden" name="ik_co_id" value="61f5af501b94b9544243a425" />
        <input type="hidden" name="ik_pm_no" value="<?=$_SESSION['payment']['id'] ?>" />
        <input type="hidden" name="ik_am" value="<?=$_SESSION['payment']['price'] ?>" />
        <input type="hidden" name="ik_desc" value="Оплата товара" />
        <input type="submit" value="Оплатить">
    </form>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    setTimeout(function() {
        $('form').submit();
    },2000)
</script>
</body>
</html>
