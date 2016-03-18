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
		<div class="vmenu"><h3 style="width:500px; text-align:left;">搜索结果：<?php echo $keywords;?></h3></div>
		<div class="border-notop"><div class="pd5">
			<ul class="newslist">
			<?php $_i=0;$rslist=(is_array($rslist))?$rslist:array();foreach($rslist AS  $key=>$value){$_i++; ?>
			<li><span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?>&nbsp;</span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo $value[title];?></a>点击率：<?php echo $value[hits];?></li>
			<?php } ?>
			</ul>
			<?php if($pagelist && is_array($pagelist) && count($pagelist)>0){?>
			<div class="line"></div>
			<div align="right">
				<table class="pagelist">
				<tr>
					<?php $_i=0;$pagelist=(is_array($pagelist))?$pagelist:array();foreach($pagelist AS  $key=>$value){$_i++; ?>
					<td><a href="<?php echo $value[url];?>" class="<?php echo $value[status] ? 'm' : 'n';?>"><?php echo $value[name];?></td>
					<?php } ?>
				</tr>
				</table>
			</div>
			<div class="line"></div>
			<?php } ?>
		</div>
	</div>
	<div class="clear line"></div>
</div>
<?php $APP->tpl->p("foot","","0");?>