<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<title>户籍观察</title>
<style>
.tuijin_li {height:420px;overflow: hidden;}
.tuijin_li li{border-bottom: #d4d5d5 dotted 1px;height:30px;}
.unstyled li:hover{color:#fff; background:#000;}
.unstyled li a:hover{color:#fff; background:#000;text-decoration: none;  }
.border_h3{
height: 3px;
background: #3A3737;
width: 100%;
margin-bottom:10px;
}
</style>

﻿﻿</head>
<body>

 <div class="container">
<div class="row">
<div class="span12">
<div class="page-header">
  <h1>户籍观察 <small></small></h1>
  
</div>
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="index.htm">首页</a>
    <ul class="nav">
<li class="active"><a href="list1.htm">动态</a></li>

  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><li ><a href="list2.htm"><?php echo ($vo2["class"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
<li><a href="#myModal"  data-toggle="modal">关于我们</a></li>
    </ul>
  </div>
</div>

</div>


<div class="span8">

<div id="myCarousel" class="carousel slide" >
  
  <!-- Carousel items -->
  <div class="carousel-inner">
  <?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="active item">
	 <img src="<?php echo ($vo["img"]); ?>"  width="620px" style="height:460px" />
	 <div class="carousel-caption"><h4><?php echo ($vo["title"]); ?></h4> <p><?php echo ($vo["summary"]); ?></p></div></div><?php endforeach; endif; else: echo "" ;endif; ?>
 <?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,2,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
	 <img src="<?php echo ($vo["img"]); ?>"  width="620px" style="height:460px" />
	 <div class="carousel-caption"><h4><?php echo ($vo["title"]); ?></h4> <p><?php echo ($vo["summary"]); ?></p></div></div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

</div>
  <div class="span4">
  <ul class="unstyled well tuijin_li">
   <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?><li ><a href="show.php?s=32,4"><?php echo (mb_substr($vo3["title"],0,16,'utf-8')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>  
  
  </div>
  
  <div class="clearfix"></div>
  
  <div class="span6">
  
  <div class="hero-unit">
  <h4>教育</h4>

  <ul class="unstyled li_hidden">
            <li ><a href="show.php?s=34,2">三女生状告教育部 北京重本线山东念专科</a></li><li ><a href="show.php?s=36,2">户籍制度下的教育不平等研究综述</a></li><li ><a href="show.php?s=37,2">深化户籍制度改革,遏制“高考移民”</a></li> 
  
</ul>
</div>  
  
  </div>
  
   <div class="span6">  
  
  <div class="hero-unit">
   <h4>社保</h4>
  
  <ul class="unstyled">
            <li ><a href="show.php?s=38,3">土地换社保这笔买卖做不得</a></li><li ><a href="show.php?s=39,3">专家：现行户籍下不同社会身份社保权益不</a></li><li ><a href="show.php?s=40,3">通过顶层设计协调推进户籍与社保改革</a></li><li ><a href="show.php?s=41,3">取消现有户籍制度 建立全国一统的社保体</a></li><li ><a href="show.php?s=42,3">华生：户籍和社保改革重于土地改革</a></li> 
</ul>
</div>    
  </div>
  
  <div class="span6">
  
  <div class="hero-unit">
   <h4>动态</h4>
  
  <ul class="unstyled">
            <li ><a href="show.php?s=30,1">临时救助需破户籍制约</a></li><li ><a href="show.php?s=31,1">刘晓庄委员支招户籍制度改革</a></li><li ><a href="show.php?s=33,1">公安部：到2020年形成新型户籍制度</a></li><li ><a href="show.php?s=50,1">11个省市开始统一城乡户口 北京暂时未</a></li><li ><a href="show.php?s=51,1">公安部正完善户籍改革意见 提1亿人落户</a></li><li ><a href="show.php?s=52,1">中国颁布首个城镇化规划 涵盖四大任务五</a></li><li ><a href="show.php?s=53,1">两会观察：中国户籍制度改革从形式走向实</a></li><li ><a href="show.php?s=54,1">发改委：2014分类推进户籍制度改革</a></li>  
</ul>
</div>  
  
  </div>
  <div class="span6">
  
  <div class="hero-unit">
   <h4>政策</h4>
     
  <ul class="unstyled ">
          <li ><a href="show.php?s=32,4">公安部：到2020年形成新型户籍制度</a></li><li ><a href="show.php?s=43,4">黄险峰：户籍与非户籍的社保待遇将日益缩</a></li><li ><a href="show.php?s=44,4">上海社保将论岗位不论户籍</a></li><li ><a href="show.php?s=45,4">广东实施积分制入户政策</a></li><li ><a href="show.php?s=46,4">重庆户籍改革开启 千万农村人口将转市民</a></li><li ><a href="show.php?s=47,4">深圳户籍新规破解用工荒 应届毕业生无限</a></li><li ><a href="show.php?s=48,4">杭州：攒够积分，外地人就能落户</a></li><li ><a href="show.php?s=49,4">上海浦东以户口政策竞争国际化人才高地</a></li> 
 
</ul>
</div>  
  
  </div>
<div class="span12">
<div class="footer hero-unit">
<ul class="nav nav-pills">
      
  <li ><a href="http://www.hujizhidu.com">户口查询网</a></li><li ><a href="http://www.hukouwang.com">户口网</a></li><li ><a href="http://www.ogichina.org01301.pdf">透明中国</a></li>  
</ul></div>
</div>

 <!--about-->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">关于我们</h3>
  </div>
  <div class="modal-body">
   <p>选举是善治和良政的基础，确保施政目标符合民意，约束权力不被滥用。但只有公正的选举才能达到这些目的。</p>
   <p>选举观察是一种对选举本身进行监督和评估的机制，以确保选举的公正和依法进行。</p>
   <p>在国际社会中，选举观察已经形成一套完整的规范，并得到了长期的实践运用，在中国，选举观察还处于起步阶段。</p>
   <p>中国选举观察（www.chinaelect.org）旨在倡导国际先进的选举规范和技术，促进国内选举环境的改善，推动选举法律的改革和完善。</p>
   <p>目前，中国基层人大代表和村民（居民）委员会的选举是选民能够直接参与的，若您愿意成为选举观察员，或对更广泛的选举议题、选举实践有自己的见解，欢迎联系我们。</p>
   <p>联系方式：election.china@gmail.com</p>
   
   <h3>About Us</h3>
   <p>Election is the basis of democracy and good governance. It ensures the public policy objectives compliant with popular will, and limits political powers not to be abused. However, only free and fair elections can achieve these goals.</p>
   <p>Election observation is a kind of mechanism for monitoring and evaluating elections, to ensure fare and legitimate elections.</p>
   <p>Internationally, election observation has formed a complete set of norms and get a long-term practical application. But in China, election observation is still in its infancy.</p>
   <p>China Election Obersavation (www.chinaelect.org) aims to initiate the internationally advanced election norms and technology, to promote the improvement of the domestic election environment , and to push forward the reform of electoral laws in China.</p>
  <p>We recruit and train election observers in the elections of China’s local People’s Congresses and villagers (residents) committees.</p>
  <p>We welcome other related organizations to contact us and cooperate.</p>
  <p>Contact us：election.china@gmail.com</p>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
   
  </div>
</div> 
 <!--about--> 
<!--row--> </div>
<!--container--> </div>
</body>
</html>