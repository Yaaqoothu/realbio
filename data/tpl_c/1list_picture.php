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
		<div class="vmenu"><h3><?php echo $rs[cate_name];?></h3><span>&nbsp;</span></div>
		<div class="border-notop" style="padding:20px;">
			<ul class="picture">
			<?php $_i=0;$rslist=(is_array($rslist))?$rslist:array();foreach($rslist AS  $key=>$value){$_i++; ?>
			<li>
				<div style="float:left;"><img src="<?php echo $value[picture];?>" border="0" alt="<?php echo $value[title];?>" /></div>
				<div style="float:left; padding-left:20px;"><a href="<?php echo $value[lj];?>"><?php echo $value[title];?></a></div>
                <div class="clear"></div>
			</li>
			<?php } ?>
			</ul>
			<div class="clear line"></div>
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
	</div>
	<div class="clear"></div>
</div>
<?php $APP->tpl->p("foot","","0");?>