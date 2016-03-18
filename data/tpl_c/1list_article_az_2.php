<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>



<div class="main">
	<?php $APP->tpl->p("inc/left2","","0");?>
 <style>
  	  .suckerdiv li{ float:left; padding-right:60px;}
	  .sh{ height:114px; text-align:center; padding:18px 0 0 110px; border:1px solid #e3e3e3; margin-bottom:10px;}
	  .suckerdiv li p{ font-size:14px; padding-top:70px; }
  	  .suckerdiv li.lia a{ background:url(tpl/www/images/y-aa.jpg) no-repeat top; width:120px; height:100px; display:block;}
	  .suckerdiv li.lib a{ background:url(tpl/www/images/y-bb.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lic a{ background:url(tpl/www/images/y-cc.jpg) no-repeat top; width:100px; height:100px; display:block;}
  	  .suckerdiv li.lia a:hover{ background:url(tpl/www/images/y-aaa.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lib a:hover{ background:url(tpl/www/images/y-bbb.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lic a:hover{ background:url(tpl/www/images/y-ccc.jpg) no-repeat top; color:#88c12a;}
  </style>
  <div class="sh">
	<div class="suckerdiv">
	<ul id="suckertree1">
	<li class="lia" >
    <a  href="index.php?c=list&cs=wstphyjk" >
    <p>人体微生态平衡与健康</p></a>
	</li>
    <li class="lib">
    <a  style="background:url(tpl/www/images/y-bbb.jpg) no-repeat top;"href="index.php?c=list&cs=azzdyyy" >
    <p>癌症诊断与用药</p></a>
	</li>
    <li  class="lic">
    <a  href="index.php?c=list&cs=ysyy" >
    <p>优生优育</p></a>
	</li>
	</ul>
	</div>
  </div>
  <style>
  		.border-lr li.dd a{ font-size:12px; font-weight:normal; padding-left:30px;}
  </style>
  <div class="clear"></div>
	<div class="left"> 
            
     <?php $catelist = phpok_s_catelist(180);?>
<div class="border-lr">
<ul id="suckertree1">
<?php $_i=0;$catelist=(is_array($catelist))?$catelist:array();foreach($catelist AS  $key=>$value){$_i++; ?>
<li><a href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a>
   <?php $sonlist = phpok_s_catelist($value[id]);?>
  <ul>
    <?php $_i=0;$sonlist=(is_array($sonlist))?$sonlist:array();foreach($sonlist AS  $k=>$v){$_i++; ?>
    <li class="dd"><a href="<?php echo list_url($v);?>" ><?php echo $v[cate_name];?></a>
  </li>
   <?php } ?>
  </ul>
  <?php unset($sonlist);?>
</li>
<?php } ?>
</ul>
</div>
<?php unset($catelist);?>
    </div>
	<div class="right">
		<div class="vmenu"><h3 style="width:120px;"><?php echo $rs[cate_name];?></h3></div>
		<div class="border-notop"><div class="pd5 lh"><?php echo $rs[jsjj];?></div></div>
	</div>
	<div class="clear"></div>
</div>
<?php $APP->tpl->p("foot","","0");?>