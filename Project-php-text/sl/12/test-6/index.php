<?php
include("F:/TMJoker/xampp/jpgraph/jpgraph/jpgraph.php");
include "F:/TMJoker/xampp/jpgraph/jpgraph/jpgraph_bar.php";

//定义销量数组
$datay=array(160,180,203,289,405,488,489,408,299,166,187,105);

//创建画布
$graph = new Graph(600,300,"auto");
$graph->SetScale("textlin");
$graph->yaxis->scale->SetGrace(20);

//创建画布阴影
$graph->SetShadow();

//设置显示区左、右、上、下距边线的距离，单位为像素
$graph->img->SetMargin(40,30,30,40);

//创建一个矩形的对象
$bplot = new BarPlot($datay);

//设置柱形图的颜色
$bplot->SetFillColor('orange');
//设置显示数字
$bplot->value->Show();
//在柱形图中显示格式化的图书销量
$bplot->value->SetFormat('%d');
//将柱形图添加到图像中
$graph->Add($bplot);

//设置画布背景色为淡蓝色
$graph->SetMarginColor("lightblue");

//创建标题
$graph->title->Set("《PHP从入门到精通》2009年销量统计");

//设置X坐标轴文字
$a=array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
$graph->xaxis->SetTickLabels($a);

//设置字体
$graph->title->SetFont(FF_SIMSUN);
$graph->xaxis->SetFont(FF_SIMSUN);

//输出矩形图表
$graph->Stroke();
?>