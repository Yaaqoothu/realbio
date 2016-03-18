<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><div class="dy"><img src="<?php echo $rs[ico];?>"></div>
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