<?php if (!defined('THINK_PATH')) exit();?>
<html>
 <head>
   <title></title>
 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <body>
<table cellpadding=3 cellspacing=5>
 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
 <td ><?php echo ($vo["id"]); ?>  <?php echo ($vo["user_name"]); ?> </td>
 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
 <tr>        
 </tr>
 </table>
 <div class="result page"><?php echo ($page); ?></div>
 <FORM method="post" action="__URL__/checkcode">
标题：<INPUT type="text" name="verify"><br/>

 <INPUT type="submit" value="提交">
 </FORM>
 <script language="JavaScript">
 function fleshVerify(){ 
    //重载验证码
    var time = new Date().getTime();
        document.getElementById('verifyImg').src= '/app/Public/verify/'+time;
 }
 </script>
 <img id="verifyImg" src='/app/Public/verify/' onclick="fleshVerify()" />
 </body>
 </html>