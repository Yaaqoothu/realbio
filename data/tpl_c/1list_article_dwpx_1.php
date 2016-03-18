<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>



<div class="main">
	<?php $APP->tpl->p("inc/left2","","0");?>
 <style>
  	  .suckerdiv li{ float:left; padding-right:60px;}
	  .sh{ height:114px; text-align:center; padding:18px 0 0 110px; border:1px solid #e3e3e3; margin-bottom:10px;}
	  .suckerdiv li p{ font-size:14px; padding-top:70px; }
  	  .suckerdiv li.lia a{ background:url(tpl/www/images/aa.jpg) no-repeat top; width:120px; height:100px; display:block;}
	  .suckerdiv li.lib a{ background:url(tpl/www/images/bb.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lic a{ background:url(tpl/www/images/cc.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lid a{ background:url(tpl/www/images/dd.jpg) no-repeat top; width:100px; height:100px; display:block;}
	  .suckerdiv li.lie a{ background:url(tpl/www/images/ee.jpg) no-repeat top; width:150px; height:100px; display:block;}
  	  .suckerdiv li.lia a:hover{ background:url(tpl/www/images/aaa.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lib a:hover{ background:url(tpl/www/images/aab.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lic a:hover{ background:url(tpl/www/images/aac.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lid a:hover{ background:url(tpl/www/images/aad.jpg) no-repeat top; color:#88c12a;}
	  .suckerdiv li.lie a:hover{ background:url(tpl/www/images/aae.jpg) no-repeat top; color:#88c12a;}
  </style>
  <style>
  		.border-lr li.dd a{ font-size:12px; font-weight:normal; padding-left:30px;}
  </style>
  <div class="clear"></div>
	<div class="left"> 
            
     <?php $catelist = phpok_s_catelist(86);?>
<div class="border-lr">
<ul id="suckertree1">
<?php $_i=0;$catelist=(is_array($catelist))?$catelist:array();foreach($catelist AS  $key=>$value){$_i++; ?>
<li><a href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
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
		<span class="focus" >最新培训</span>
		<span>过往培训</span>
		</p>
        <div class="ph-con5 numlist clearfix" id="mlist_0">
		<?php echo $rs[jsjj];?>
        </div>
        <div class="ph-con5 numlist clearfix"  id="mlist_1" style="display:none;">

			<ul class="newslist" style=" background:url(tpl/www/images/sdd.jpg);">
			<?php $_i=0;$rslist=(is_array($rslist))?$rslist:array();foreach($rslist AS  $key=>$value){$_i++; ?>
      <?php $i=$i+1;?> 
        <?php if($i>1){?>
			<li><span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?>&nbsp;</span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo $value[title];?></a></li>
			  <?php } ?>
			<?php } ?>
			</ul>
            <div class="line"></div>
                
                
			<?php if($pagelist && is_array($pagelist) && count($pagelist)>0){?>         
			<div align="right">
			<table class="pagelist">
			<tr>
            <td width="220" align="left">共<?php echo $pagelist[0]['total'];?>条 <?php echo $pagelist[0]['currentPage'];?>/<?php echo $pagelist[0]['totalPage'];?></td>
				<?php $_i=0;$pagelist=(is_array($pagelist))?$pagelist:array();foreach($pagelist AS  $key=>$value){$_i++; ?>
				<td><a href="<?php echo $value[url];?>" class="<?php echo $value[status] ? 'm' : 'n';?>"><?php echo $value[name];?></a></td>
				<?php } ?>
                                <td width="230"><?php echo $pagelist[0]['selectPage'];?><?php echo $pagelist[0]['inputPage'];?></td>
			</tr>
			</table>           
			</div>
			<?php } ?>
                        
			<div class="line"></div>
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