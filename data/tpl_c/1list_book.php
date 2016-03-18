<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<script type="text/javascript" src="js/php.js"></script>
<style type="text/css">.reply{margin:5px 15px;padding:3px 5px;border:1px solid #DDD;line-height:150%;}</style>

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
        <h3 style="border-bottom:none;"><a href="<?php echo list_url($value);?>"  <?php if($value[id] == $cid){?> style=" display:block; padding-bottom:3px; border-bottom:5px solid #88c12a;"<?php } ?> ><?php echo $value[cate_name];?></a></h3>
        <?php } ?>
        <?php unset($left_catelist);?>
        </div>
     
		<div id="post_book"></div>
	</div>
	<div class="clear"></div>
</div>
<script type="text/javascript">
function js_book(rs,id)
{
	getid(id).innerHTML = rs;
}
function to_submit()
{
	var subject = getid("subject").value;
	if(!subject)
	{
		alert("主题不允许为空");
		getid("subject").focus();
		return false;
	}
	var email = getid("email").value;
	if(!email)
	{
		alert("联系方式不能为空");
		return false;
	}
	var content = getid("content").value;
	if(!content)
	{
		alert("请填写留言内容");
		return false;
	}
	getid("_phpok_submit").disabled = true;
	return true;
}
func_php("post&ms=book",js_book,"post_book");
</script>
<?php $APP->tpl->p("foot","","0");?>