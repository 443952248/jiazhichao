<?php
/**
 * Created by PhpStorm.
 * 字符串截取
 * User: TMJoker
 * Date: 2016/4/26
 * Time: 16:40
 * 方法一：
 *      自定义函数，
 * 方法二：
 *      用php内置函数mb_substr();
 */
header('Content-Type:text/html;charset=utf8');
/**
 * @param $str string 要处理的字符串
 * @param $start int 从哪个位置开始截取
 * @param null $lenth int 要截取字符串的个数，默认从其实位置到末尾
 * @return string 截取后的字符串
 */
function substr_utf8($str,$start,$lenth=null){
    return join("",array_slice(preg_split("//u",$str,-1,PREG_SPLIT_NO_EMPTY),$start,$lenth));
}
$str = '贾智超敬爱之巢';
echo substr_utf8($str,2,1);
echo "<br/>-----------------------------------------------------------------------------<br/>";
$str1 = '一二三四五六七吧九十';
echo mb_substr($str1,2,3);

echo "<br/>-----------------------------------------------------------------------------<br/>";
/**
 * 求解字符串的字符数，
 */
$a = '中国2北333京';
echo mb_strlen($a,'utf8');          //获取字符串长度
echo "<br/>";
echo mb_substr($a,3,1,'utf8');      //截取字符串

/**
 * 自定义函数实现求其长度
 * @param $str String要计算的字符串
 * @return int 字符串的长度
 */

echo "<br/>";
function strlen_utf8($str){
    return count(preg_split('//u',$str,-1,PREG_SPLIT_NO_EMPTY));
}
$a = '中国2北343433京';
echo substr_utf8($a,3,1);
