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
    $num2= $_POST['date2'];
    $fuhao = $_POST['yunsuanfu'];

    if($fuhao =='+'){
        $jieguo = $num1+$num2;
    }else if($fuhao =='-'){
        $jieguo = $num1-$num2;
    }else if($fuhao =='*'){
        $jieguo = $num1*$num2;
    }else if($fuhao =='/'){
//        if($num2=='0'){
//            echo "除数不能为0";
//        }else{
            $jieguo = $num1/$num2;
//        }
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
        <option value="+" <?php if($fuhao=="+"){echo 'selected = "selected"';}; ?> >+</option>
        <option value="-" <?php if($fuhao=="-"){echo 'selected = "selected"';}; ?> >-</option>
        <option value="*" <?php if($fuhao=="*"){echo 'selected = "selected"';}; ?> >*</option>
        <option value="/" <?php if($fuhao=="/"){echo 'selected = "selected"';}; ?> >/</option>
    </select>
    <input type="text" name="date2"value="<?php echo $num2;?>">
    <input type="submit" value="=">
    <input type="text" name="result" value="<?php echo $jieguo;?>">
</form>


</body>
</html>