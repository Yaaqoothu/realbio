<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<script type="text/javascript" charset="utf-8" async="" src="tpl/www/images/b.js"></script>
<script type="text/javascript" src="tpl/www/images/common.js"></script>
<style>
	.recruit-content td{ font-size:16px; line-height:35px;}
</style>
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
		<div class="vmenu">
        <?php $left_catelist = phpok_catelist($cid);?>
        <?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
        <h3 style=" border-bottom:none;"><a href="<?php echo list_url($value);?>"  <?php if($value[id] == $cid){?> style=" display:block; padding-bottom:3px; border-bottom:5px solid #88c12a;"<?php } ?> ><?php echo $value[cate_name];?></a></h3>
        <?php } ?>
        <?php unset($left_catelist);?>
        </div>
		<div class="border-notop" style="padding:20px;">
			<div class="recruit-content">
<div>
<table cellspacing="0" cellpadding="0" style="word-break:break-all; word-wrap:break-word;">
<tbody>
<?php $_i=0;$rslist=(is_array($rslist))?$rslist:array();foreach($rslist AS  $key=>$value){$_i++; ?>
<tr style="font-size: 14px; cursor: pointer; background-image: none; color: rgb(112, 112, 112); background-position: initial initial; background-repeat: initial initial; ">
<td width="400" class="re-name" style="font-size:14px;color: rgb(7, 62, 110); font-weight:bold;"><span class="less"></span><?php echo $value[title];?></td>
<td width="100" style="font-size:14px"><?php echo $value[fwb];?></td>
<td width="100" style="font-size:14px"><?php echo $value[df];?></td>
<td width="100" style="font-size:14px"><?php echo date("Y-m-d",$value[post_date]);?></td>
</tr>
<tr style="display: none; ">
<td colspan="3" style="padding-left:20px;word-break:break-all; word-wrap:break-all; font-size:14px; line-height:25px; color:#707070; ">
<?php echo $value[content];?>
</td>
</tr>
<?php } ?>

</tbody>
</table>
</div>

</div>
		</div>
	</div>
	<div class="clear"></div>
</div>


<?php $APP->tpl->p("foot","","0");?>