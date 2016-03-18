<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>



<div class="main">
	<?php $APP->tpl->p("inc/left2","","0");?>
    <style>
  	  .suckerdiv li{ float:left; padding:0 20px 0 20px;}
	  .sh{ height:114px; text-align:center; padding:18px 0 0 82px; border:1px solid #e3e3e3; margin-bottom:10px;}
	  .suckerdiv li p{ font-size:14px; padding-top:70px; }
  	  .suckerdiv li.lia a{ background:url(tpl/www/images/aa.jpg) no-repeat top; width:120px; height:100px; display:block;}
	  .suckerdiv li.lib a{ background:url(tpl/www/images/bb.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lic a{ background:url(tpl/www/images/cc.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lif a{ background:url(tpl/www/images/ff.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lid a{ background:url(tpl/www/images/dd.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lie a{ background:url(tpl/www/images/ee.jpg) no-repeat top; width:150px; height:100px; display:block;}
  	  .suckerdiv li.lia a:hover{ background:url(tpl/www/images/aaa.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lib a:hover{ background:url(tpl/www/images/aab.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lic a:hover{ background:url(tpl/www/images/aac.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lif a:hover{ background:url(tpl/www/images/aaf.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lid a:hover{ background:url(tpl/www/images/aad.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lie a:hover{ background:url(tpl/www/images/aae.jpg) no-repeat top; color:#88c12a;}
  </style>
  <div class="sh">
	<div class="suckerdiv">
	<ul id="suckertree1">
	<li class="lia" >
    <a  href="index.php?c=list&cs=danjundongzhiwudenovocexu" >
    <p>微生物基因组测序</p></a>
	</li>
    <li class="lib">
    <a style="background:url(tpl/www/images/aab.jpg) no-repeat top;" href="index.php?c=list&cs=mrnacexu" >
    <p>转录组测序</p></a>
	</li>
    <li  class="lic">
    <a href="index.php?c=list&cs=dongzhiwuzuzhongcexu" >
    <p>重测序</p></a>
	</li>
    <li  class="lif">
    <a  href="index.php?c=list&cs=dongzhiwudenovocexu" >
    <p>基因组测序</p></a>
	</li>
    <li  class="lid">
    <a href="index.php?c=list&cs=jiankujicexufuwu" >
    <p>建库及测序</p></a>
	</li>
    <li  class="lie">
    <a href="index.php?c=list&cs=fuwuqijiqundajian" >
    <p>集群搭建</p></a>
	</li>
	</ul>
	</div>
  </div>
  <style>
  		.border-lr li.dd a{ font-size:12px; font-weight:normal; padding-left:30px;}
  </style>
  <div class="clear"></div>
	<div class="left">     <!--<pre><?php echo print_r($rs,true);?></pre>--> 
     <?php $catelist = phpok_s_catelist(118);?>
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
		<div class="vmenu"><h3 style="width:110px;"><?php echo $rs[cate_name];?></h3></div>
		<div class="border-notop"><div class="pd5 lh"><?php echo $rs[jsjj];?></div></div>
	</div>
	<div class="clear"></div>
</div>
<?php $APP->tpl->p("foot","","0");?>