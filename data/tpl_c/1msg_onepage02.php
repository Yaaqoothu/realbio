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
	
		<div class="border-notop"><div class="pd5 lh"><?php echo phpok_c($id,"content");?></div></div>
	
</div>
<?php $APP->tpl->p("foot","","0");?>