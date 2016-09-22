<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/4/25
 * Time: 14:02
 */

/**
 * 百元百鸡问题
 * 已知：公鸡5元一只，母鸡3元一只，小鸡1元三只。现在用100元钱买了100只鸡，
 * 问：公鸡母鸡小鸡各几只？——请考虑尽可能高效的方法
 */

/**
 * 方法一：
 * 穷举思想
 * 把所有的情况都列出来，选出合适的条件
 */
$c=0;//计算次数
for ($gongji = 0; $gongji <= 100; $gongji++) {
    for ($muji = 0; $muji <= 100; $muji++) {
        for ($xiaoji = 0; $xiaoji <= 100; $xiaoji++) {
            $shuliang = $gongji + $muji + $xiaoji;
            $zongjia = 5 * $gongji + 3 * $muji + $xiaoji / 3;
            if ($shuliang == 100 && $zongjia == 100) {
                echo "<br>公鸡数量为：" . $gongji . " 母鸡数量为：" . $muji . " 小鸡数量为：" . $xiaoji . "</br>";
            }
            ++$c;

        }
    }
}
echo "<br>总计算次数".$c."</br>";

/**
 * 优化1
 */
$c=0;//计算次数
for ($gongji = 0; $gongji <= 100/5; $gongji++) {//考虑公鸡的价格
    for ($muji = 0; $muji <= 100/3; $muji++) {//考虑母鸡的价格
//        for ($xiaoji = 0; $xiaoji <= 100; $xiaoji++) {
            $xiaoji=100-$gongji-$muji;//公鸡母鸡数量确定后，小鸡不用算了
//            $shuliang = $gongji + $muji + $xiaoji;
            $zongjia = 5 * $gongji + 3 * $muji + $xiaoji / 3;
            if ($zongjia == 100) {
                echo "<br>公鸡数量为：" . $gongji . " 母鸡数量为：" . $muji . " 小鸡数量为：" . $xiaoji . "</br>";
            }
            ++$c;

//        }
    }
}
echo "<br>总计算次数".$c."</br>";

/**
 * 优化2
 */
$c=0;//计算次数
for ($gongji = 0; $gongji <= 100/5; $gongji++) {//考虑公鸡的价格
    for ($muji = 0; $muji <= (100-$gongji*5)/3; $muji++) {//考虑母鸡的价格
//        for ($xiaoji = 0; $xiaoji <= 100; $xiaoji++) {
        $xiaoji=100-$gongji-$muji;//公鸡母鸡数量确定后，小鸡不用算了
//            $shuliang = $gongji + $muji + $xiaoji;
        $zongjia = 5 * $gongji + 3 * $muji + $xiaoji / 3;
        if ($zongjia == 100) {
            echo "<br>公鸡数量为：" . $gongji . " 母鸡数量为：" . $muji . " 小鸡数量为：" . $xiaoji . "</br>";
        }
        ++$c;

//        }
    }
}
echo "<br>总计算次数".$c."</br>";

/**
 * 优化3
 */
$c=0;//计算次数
for ($gongji = 0; $gongji <= 100/5; $gongji++) {//考虑公鸡的价格
    for ($muji = 0; $muji <= (100-$gongji*5)/3; $muji++) {//考虑母鸡的价格
//        for ($xiaoji = 0; $xiaoji <= 100; $xiaoji++) {
        $xiaoji=100-$gongji-$muji;//公鸡母鸡数量确定后，小鸡不用算了
        if($xiaoji%3!=0){
            continue;//考虑小鸡的数量应该是3的倍数，价格才能取整
        }

//            $shuliang = $gongji + $muji + $xiaoji;
        $zongjia = 5 * $gongji + 3 * $muji + $xiaoji / 3;
        if ($zongjia == 100) {
            echo "<br>公鸡数量为：" . $gongji . " 母鸡数量为：" . $muji . " 小鸡数量为：" . $xiaoji . "</br>";
        }
        ++$c;

//        }
    }
}
echo "<br>总计算次数".$c."</br>";