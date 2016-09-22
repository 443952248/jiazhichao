<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/6/28
 * Time: 14:26
 */
if ((strlen($_POST['IDCard']) <> 15) && (strlen($_POST['IDCard']) <> 18)) {
    echo "<script>alert('请输入15或18位身份证号码');history.back();</script>";
} else {
    echo "用户信息输入合法！";
}
