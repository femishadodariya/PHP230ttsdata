<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <select>
        <option value="">-select country-</option>
        <?php
           $url="http://country.io/names.json";
           $data=file_get_contents($url,true);
           $list=json_decode($data);
           foreach($list as $list1)
           {
        ?>
        <option value="<?php echo $list1?>"><?php echo $list1?></option>
        <?php
           }
        ?>
    </select>
</body>
</html>