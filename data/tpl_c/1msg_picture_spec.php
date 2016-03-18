<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<div class="main">
<?php $APP->tpl->p("inc/left2","","0");?>
	<div class="left">
		<?php $left_catelist = phpok_catelist($cid);?>
		<div class="border-lr">
		<ul>
			<?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
			<li><a href="<?php echo list_url($value);?>" title="<?php echo $value[cate_name];?>"><?php echo $value[cate_name];?></a></li>
				
			<?php } ?>
		</ul>
		</div>
	</div>
	<div class="right">
		<div class="vmenu"><h3 ><?php echo $rs[cate_name];?></h3></div>
		<div class="border-notop"><div class="pd5 lh"><?php echo $rs[note];?></div></div>
	</div>
	<div class="clear"></div>
</div>
<?php $APP->tpl->p("foot","","0");?>