<?php
$param = \common\Router::getInstance()->getParameters();
$id = $param['id'];
?>

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

<table>
    <tr>
        <td> Name </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['name']['value']?> </td>
    </tr>
    <tr>
        <td> Phone work </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['phone_work']['value']?> </td>
    </tr>
    <tr>
        <td> Primary address street </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['primary_address_street']['value']?> </td>
    </tr>
    <tr>
        <td> Primary address city </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['primary_address_city']['value']?> </td>
    </tr>
    <tr>
        <td> Primary address state </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['primary_address_state']['value']?> </td>
    </tr>
    <tr>
        <td> Primary address country </td>
        <td> <?php echo $data['entry_list'][$id]['name_value_list']['primary_address_country']['value']?> </td>
    </tr>
</table>

<a href="/leads"><h4>Back</h4></a>
<a href="/"><h4>Home</h4></a>

</body>
</html>
