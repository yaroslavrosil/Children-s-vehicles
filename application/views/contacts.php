<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE-->
    <title> SuiteCRM </title>

    <!-- META TAG -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CRM">
    <meta name="author" content="Yaroslav Rosil">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/public/css/style.css" rel="stylesheet">



</head>

<body>
<h2>My test SuiteCRM</h2>

<?php for ($i = 0; $i < $data['result_count']; $i++){ ?>
    <a href="/contacts/item/id/<?= $i ?>"> <?php echo $data['entry_list'][$i]['name_value_list']['full_name']['value'] ?> </a> <br>
<?php } ?>

<a href="/"><h4>Home</h4></a>

</body>
</html>

