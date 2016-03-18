<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>



<div class="main">
	<?php $APP->tpl->p("inc/left2","","0");?>
 <style>
  	  .suckerdiv li{ float:left; padding:0 20px 0 20px;}
	  .sh{ height:114px; text-align:center; padding:18px 0 0 82px; border:1px solid #e3e3e3; margin-bottom:10px;}
	  .suckerdiv li p{ font-size:14px; padding-top:70px; }
  	  .suckerdiv li.lia a{ background:url(tpl/www/images/aa.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lib a{ background:url(tpl/www/images/bb.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lic a{ background:url(tpl/www/images/cc.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lif a{ background:url(tpl/www/images/ff.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lid a{ background:url(tpl/www/images/dd.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lie a{ background:url(tpl/www/images/ee.jpg) no-repeat top; width:100px; height:100px; display:block;}
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
    <a  href="index.php?c=list&cs=mrnacexu" >
    <p>转录组测序</p></a>
	</li>
    <li  class="lic">
    <a  href="index.php?c=list&cs=dongzhiwuzuzhongcexu" >
    <p>重测序</p></a>
	</li>
    <li  class="lif">
    <a  style="background:url(tpl/www/images/aaf.jpg) no-repeat top;" href="index.php?c=list&cs=dongzhiwudenovocexu" >
    <p>基因组测序</p></a>
	</li>
    <li  class="lid">
    <a href="index.php?c=list&cs=jiankujicexufuwu" >
    <p>建库及测序</p></a>
	</li>
    <li  class="lie">
    <a  href="index.php?c=list&cs=fuwuqijiqundajian" >
    <p>集群搭建</p></a>
	</li>
	</ul>
	</div>
  </div>
  <style>
  		.border-lr li.dd a{ font-size:12px; font-weight:normal; padding-left:30px;}
  </style>
  <div class="clear"></div>
	<div class="left"> 
            
     <?php $catelist = phpok_s_catelist(196);?>
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
     <style>
    	.tag{ border-bottom:1px solid #e3e3e3; padding-bottom:10px; height:20px;}
		.tag span{ font-size:14px; color:#333; font-weight:bold; display:block; float:left;  text-align:center; margin-left:38px; width:100px; padding-top:3px; padding-bottom:3px;}
    	.tag .focus{ border-bottom:5px solid #88c12a;}
		.ph-con5{ padding:20px; line-height:20px;}
    </style>
	<div class="right">
		<dl class="logindl_2">
        <p class="tag" id="tag">
		<span class="focus" >技术简介</span>
		<span>技术路线</span>
        <span>技术优势</span>
        <span>DNA样品要求</span>
        <span>案例解析</span>
		</p>
        <div class="ph-con5 numlist clearfix" id="mlist_0">
		<?php echo $rs[jsjj];?>
        </div>
        <div class="ph-con5 numlist clearfix"  id="mlist_1" style="display:none;">
		<?php echo $rs[jslx];?>
        </div>
        <div class="ph-con5 numlist clearfix"  id="mlist_2" style="display:none;">
		<?php echo $rs[jsys];?>
        </div>
        <div class="ph-con5 numlist clearfix"  id="mlist_3" style="display:none;">
		<?php echo $rs[dna];?>
        </div>
        <div class="ph-con5 numlist clearfix"  id="mlist_4" style="display:none;">
		<?php echo $rs[aljx];?>
        </div>
        
      </dl>
      <script type="text/javascript">
      function changeshow(id,childID){
try{
	var btn = document.getElementById(id).getElementsByTagName("span");
	for( i=0;i<btn.length;i++){
		btn[i].id = "btn_"+i;
		btn[i].onmouseover = function(){
			for( i=0;i<btn.length;i++){
				btn[i].className = "";
				document.getElementById(childID+i).style.display = "none";
			}
			this.className = "focus";
			document.getElementById(childID+this.id.slice(-1)).style.display = "";
		}	
	}
}catch(e){}
}
changeshow('tag','mlist_');
</script>
	</div>
	<div class="clear"></div>
</div>
<?php $APP->tpl->p("foot","","0");?>