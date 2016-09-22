<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
if(!empty($_POST)){
    $num1 = $_POST['date1'];
    $fuhao = $_POST['yunsuanfu'];

    switch($fuhao){
        case "10-2";
            $jieguo = decbin($num1);
            break;
        case "10-8";
            $jieguo = decoct($num1);
            break;
        case "10-16";
            $jieguo = dechex($num1);
            break;
        case "2-8";
            $jieguo = decoct(bindec($num1));
            break;
        case "8-16";
            $jieguo = dechex(octdec($num1));
            break;
        case "16-2";
            $jieguo = decbin(hexdec($num1));
            break;
    }
}else{
    $jieguo = "";
    $num1= "";
    $num2= "";
    $fuhao = "";
}
?>

<form action="" method="post">
    <input type="text" name="date1" value="<?php echo $num1;?>">
    <select name="yunsuanfu">
        <option value="10-2" <?php if($fuhao=="10-2"){echo 'selected = "selected"';}; ?> >10-2</option>
        <option value="10-8" <?php if($fuhao=="10-8"){echo 'selected = "selected"';}; ?> >10-8</option>
        <option value="10-16" <?php if($fuhao=="10-16"){echo 'selected = "selected"';}; ?> >10-16</option>
        <option value="2-8" <?php if($fuhao=="2-8"){echo 'selected = "selected"';}; ?> >2-8</option>
        <option value="8-16" <?php if($fuhao=="8-16"){echo 'selected = "selected"';}; ?> >8-16</option>
        <option value="16-2" <?php if($fuhao=="16-2" ){echo 'selected = "selected"';}; ?> >16-2</option>
    </select>
    <input type="submit" value="转化">
    <input type="text" name="result" value="<?php echo $jieguo;?>">
</form>


</body>
</html>