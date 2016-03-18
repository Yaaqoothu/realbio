<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>



<div class="main">
	<div class="dy"><img src="tpl/www/images/dy.jpg"></div>
    <div class="nav_line">当前所在位置：<a href="index.php">首页</a> 
  <?php if($leader && is_array($leader)){?> 
  <?php $_i=0;$leader=(is_array($leader))?$leader:array();foreach($leader AS  $key=>$value){$_i++; ?> 
  <?php if($value[url]){?> 
  &gt; <a href="<?php echo $value[url];?>"><?php echo $value[title];?></a> 
  <?php }else{ ?> 
  <?php } ?> 
  <?php } ?> 
  <?php }else{ ?> 
  <?php } ?></div>
  <style>
  	  .suckerdiv li{ float:left; padding-right:70px;}
	  .sh{ height:114px; text-align:center; padding:18px 0 0 138px; border:1px solid #e3e3e3; margin-bottom:10px;}
	  .suckerdiv li p{ font-size:14px; margin-top:10px;}
  </style>
  <div class="sh">
  	 <?php $catelist = phpok_s_catelist(68);?>
	<div class="suckerdiv">
	<ul id="suckertree1">
	<?php $_i=0;$catelist=(is_array($catelist))?$catelist:array();foreach($catelist AS  $key=>$value){$_i++; ?>
	<li>
    <a href="<?php echo list_url($value);?>" >
    <img src="tpl/www/images/aa.jpg">
    <p><?php echo $value[cate_name];?></p></a>
	</li>
	<?php } ?>
	</ul>
	</div>
	<?php unset($catelist);?>
  </div>
  <div class="clear"></div>
	<div class="left">      <pre style="display:none;"><?php echo print_r($rs,true);?></pre>
     <?php $catelist = phpok_s_catelist($rs[cate_id]);?>
<div class="suckerdiv">
<ul id="suckertree1">
<?php $_i=0;$catelist=(is_array($catelist))?$catelist:array();foreach($catelist AS  $key=>$value){$_i++; ?>
<li><a href="<?php echo list_url($value);?>" >(2)<?php echo $value[cate_name];?></a>
   <?php $sonlist = phpok_s_catelist($value[id]);?>
  <ul>
    <?php $_i=0;$sonlist=(is_array($sonlist))?$sonlist:array();foreach($sonlist AS  $k=>$v){$_i++; ?>
    <li><a href="<?php echo list_url($v);?>" >(3)<?php echo $v[cate_name];?></a>

       <?php $t_list = phpok_s_catelist($v[id]);?>
       <?php if($t_list){?>
       <ul>
            <?php $_i=0;$t_list=(is_array($t_list))?$t_list:array();foreach($t_list AS  $kk=>$vv){$_i++; ?>
                 <li><a href="<?php echo list_url($vv);?>" >(4)<?php echo $vv[cate_name];?></a>

        <?php $t_list = phpok_s_catelist($vv[id]);?>
      <?php if($t_list){?>
       <ul>
            <?php $_i=0;$t_list=(is_array($t_list))?$t_list:array();foreach($t_list AS  $kkk=>$vvv){$_i++; ?>
                 <li><a href="<?php echo list_url($vvv);?>" >(5)<?php echo $vvv[cate_name];?></a></li>
            <?php } ?>
       </ul>
       <?php } ?>
       <?php unset($t_list);?> 

                 </li>
            <?php } ?>
       </ul> <?php } ?>
       <?php unset($t_list);?> 

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
		.tag span{ font-size:14px; color:#333; font-weight:bold; display:block; float:left;  text-align:center; margin-left:38px; width:90px; padding-top:3px; padding-bottom:3px;}
    	.tag .focus{ border-bottom:5px solid #88c12a;}
		.ph-con5{ padding:0 10px;}
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
		<?php echo $rs[content];?>
        </div>
        <div class="ph-con5 numlist clearfix"  id="mlist_1" style="display:none;">
		<?php echo $rs[jslx];?>
        </div>
        <div class="ph-con5 numlist clearfix"  id="mlist_2" style="display:none;">
		<?php echo $rs[jsys];?>
        </div>
        <div class="ph-con5 numlist clearfix"  id="mlist_3" style="display:none;">
		<?php echo $rs[ypyq];?>
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