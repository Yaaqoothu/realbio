<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>

<div class="main">
	<?php $APP->tpl->p("inc/left2","","0");?>
	<div class="left">
       
        <?php $left_catelist = phpok_catelist($cid);?>
        <div class="border-lr">
            <ul>
                <?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
                <li><a href="<?php echo $value[linkurl] ? $value[linkurl] : list_url($value);?>" title="<?php echo $value[cate_name];?>"><?php echo $value[cate_name];?></a></li>
                <?php } ?>
            </ul>
        </div>
        
    </div>
   
	<div class="right">
		<div class="vmenu">
        
        <h3 style="border-bottom:none;"><a href="<?php echo list_url($value);?>"  style=" display:block; padding-bottom:3px; border-bottom:5px solid #88c12a;" ><?php echo $rs[cate_name];?></a></h3>
        
        </div>
		<div class="border-notop" style="padding:20px;">
			<ul class="newslist" style=" background:url(tpl/www/images/sdd.jpg);">
			<?php $_i=0;$rslist=(is_array($rslist))?$rslist:array();foreach($rslist AS  $key=>$value){$_i++; ?>
			<li><span class="f_right"><?php echo date("Y-m-d",$value[post_date]);?>&nbsp;</span><a href="<?php echo msg_url($value);?>"<?php if($value[target]){?> target="_blank"<?php } ?> style="<?php echo $value[style];?>"><?php echo $value[title];?></a></li>
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
	</div>
	<div class="clear"></div>
</div>


<?php $APP->tpl->p("foot","","0");?>