<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($sitetitle){?><?php echo $sitetitle;?> -<?php } ?><?php echo $_sys[sitename];?><?php if($_sys[seotitle]){?>-- <?php echo $_sys[seotitle];?><?php } ?></title>
<?php if($_sys[google_site_verification]){?>
<meta name="google-site-verification" content="<?php echo $_sys[google_site_verification];?>" />
<?php } ?>
<?php if($_sys[yahoo_site_key]){?>
<meta name="y_key" content="<?php echo $_sys[yahoo_site_key];?>" />
<?php } ?>
<?php if($_sys[ms_site_validate]){?>
<meta name="msvalidate.01" content="<?php echo $_sys[ms_site_validate];?>" />
<?php } ?>
<meta name="keywords" content="<?php echo $_sys[keywords];?>">
<meta name="description" content="<?php echo $_sys[description];?>">
<?php if($_sys[siteurl] && $_sys[site_type] == 'html'){?>
<base href="<?php echo $_sys[siteurl];?>" />
<?php } ?>
<script type="text/javascript">
var base_file = "<?php echo $_sys[siteurl];?><?php echo HOME_PAGE;?>";
var base_url = "<?php echo $_sys[siteurl];?><?php echo $sys_app->url;?>";
var base_ctrl = "<?php echo $sys_app->config->c;?>";
var base_func = "<?php echo $sys_app->config->f;?>";
var base_dir = "<?php echo $sys_app->config->d;?>";
var phpok_data = "";
var iframe_id = "";
</script>
<link rel = "Shortcut Icon" href=/fav.ico>
<link rel="stylesheet" type="text/css" href="../../libs/xheditor/xheditor_plugins/plugin.css" />
<link rel="stylesheet" type="text/css" href="tpl/www/images/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/www.js"></script>
<script src="js/jquery.form.js" type="text/javascript"></script>
<script src="js/php.js" type="text/javascript"></script>
<?php if($sys_app->control_name && file_exists(ROOT."js/www/".$sys_app->control_name.".js")){?>
<script type="text/javascript" src="js/www/<?php echo $sys_app->control_name;?>.js"></script>
<?php } ?>
<script>
var _hmt = _hmt || [];
(function() {
    var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?f0780d3001bc1f59579881026336efac";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
</script>
</head>

<body>
<div class="qbu">
<div class="header">
	<div class="hed_left">
    <img src="<?php echo $_sys[logo] ? $_sys[logo] : 'tpl/www/images/logo.jpg';?>" alt="<?php echo $_sys[sitename];?>" />
    </div>
	<div class="hed_right">
    	<div class="p">
    	<p>服务电话：<?php $fwdh = phpok('fwdh');?><?php echo $fwdh[content];?><?php unset($fwdh);?></p>
        <p><a href="mailto:<?php $yxdz = phpok('yxdz');?><?php echo $yxdz[content];?><?php unset($yxdz);?>?subject=Hello%20Realbio">E-mail：<?php $mail = phpok('mail');?><?php echo $mail[content];?><?php unset($mail);?></a></p>
        </div>
    </div>
	<div class="clear"></div>
    </div>
  <!--多级导航调用开始-->
  <div class="c_Nav">
  <div class="c_subNav"> 
  	<div class="usb" style="z-index:100;position: relative;">
    <ul>
	  <li class="li"><a class="option" href="index.php"><span>公司首页</span></a></li>	
      <li class='li' >
      <a class="option"  href="index.php?c=msg&id=530&"><span>走进锐翌</span></a>  
      <?php $left_catelist = phpok_catelist(63);?>
        <ul style="background:#fff;">
        <?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
          <li class='li_a'> <a style="color:#000;" href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
          <?php } ?>
        </ul>
        <?php unset($left_catelist);?>
      </li>

      <li class='li' >
        <a class="option"  href="index.php?c=list&cs=danjunjiyinzucexu"><span>科研服务</span></a>
        <?php $catelist = phpok_s_catelist('keyanfuwu','ts');?>
        <ul style="width:880px; padding:0; left:-210px; background:#fff; ">
        <?php $_i=0;$catelist=(is_array($catelist))?$catelist:array();foreach($catelist AS  $key=>$value){$_i++; ?>
          <li class='li_a' style="width:140px; float:left;">
          <div class="mm" style="padding:0  0 0 20px; text-align:left;"><a  style=" color:#2584c2; font-weight:bold;" href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a>
          <?php $sonlist = phpok_s_catelist($value[id]);?>
          <?php $_i=0;$sonlist=(is_array($sonlist))?$sonlist:array();foreach($sonlist AS  $k=>$v){$_i++; ?>
          	<div class="m_a"><a style="color:#2584c2; font-size:12px;" href="<?php echo list_url($v);?>"><?php echo $v[cate_name];?></a>
            <?php $t_list = phpok_s_catelist($v[id]);?>
       		<?php if($t_list){?>
                <div class="m_b">
                <?php $_i=0;$t_list=(is_array($t_list))?$t_list:array();foreach($t_list AS  $kk=>$vv){$_i++; ?>
                	<a style="font-size:12px; color:#000;" href="<?php echo list_url($vv);?>" ><?php echo $vv[cate_name];?></a>
                    <?php } ?>
                </div>
                <?php } ?>
       <?php unset($t_list);?> 
            </div>
          <?php } ?>
          </div>
          <?php unset($sonlist);?>
          </li>
          
          <?php } ?>
        </ul>
        <?php unset($catelist);?>
      </li>

      <li class='li' >
        <a class="option"  href="index.php?c=list&cs=wstphyjk"><span>医学服务</span></a>
        <?php $catelist = phpok_s_catelist('yixuefuwu','ts');?>
        <ul style="width:580px; padding:0; left:-210px; background:#fff; ">
        <?php $_i=0;$catelist=(is_array($catelist))?$catelist:array();foreach($catelist AS  $key=>$value){$_i++; ?>
          <li class='li_a' style="width:170px; float:left;">
          <div class="mm" style="padding:0  0 0 20px; text-align:left;"><a  style=" color:#2584c2; font-weight:bold;" href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a>
          <?php $sonlist = phpok_s_catelist($value[id]);?>
          <?php $_i=0;$sonlist=(is_array($sonlist))?$sonlist:array();foreach($sonlist AS  $k=>$v){$_i++; ?>
          	<div class="m_a"><a style="color:#2584c2; font-size:12px;" href="<?php echo list_url($v);?>"><?php echo $v[cate_name];?></a>
            <?php $t_list = phpok_s_catelist($v[id]);?>
       		<?php if($t_list){?>
                <div class="m_b">
                <?php $_i=0;$t_list=(is_array($t_list))?$t_list:array();foreach($t_list AS  $kk=>$vv){$_i++; ?>
                	<a style="font-size:12px; color:#000;" href="<?php echo list_url($vv);?>" ><?php echo $vv[cate_name];?></a>
                    <?php } ?>
                </div>
                <?php } ?>
       <?php unset($t_list);?> 
            </div>
          <?php } ?>
          </div>
          <?php unset($sonlist);?>
          </li>
          
          <?php } ?>
        </ul>
        <?php unset($catelist);?>
      </li>	
	   <li class='li' >
      <a class="option"  href="index.php?c=list&cs=cxhd"><span>市场动态</span></a>  
      <?php $left_catelist = phpok_catelist(86);?>
        <ul style="background:#fff;">
        <?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
          <li class='li_a'> <a style="color:#000;" href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
          <?php } ?>
        </ul>
        <?php unset($left_catelist);?>
      </li>	
       <li class='li' >
      <a class="option"  href="index.php?c=list&cs=ceshipingtai"><span>技术支持</span></a>  
      <?php $left_catelist = phpok_catelist(95);?>
        <ul style="background:#fff;">
        <?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
          <li class='li_a'> <a style="color:#000;" href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
          <?php } ?>
        </ul>
        <?php unset($left_catelist);?>
      </li>	
      <li class='li' >
      <a class="option"  href="index.php?c=list&cs=shehuizhaopin1"><span>加入我们</span></a>  
      <?php $left_catelist = phpok_catelist(109);?>
        <ul style="background:#fff;">
        <?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
          <li class='li_a'> <a style="color:#000;" href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
          <?php } ?>
        </ul>
        <?php unset($left_catelist);?>
      </li>
    </ul>
    
    </div>
    <div class="usb_right">
    <form method="post" action="<?php echo site_url('search');?>" name="b" onsubmit="return to_submita()">
  <div style="padding-top:7px;">
    <input name="keywords" id="keywords" onblur="if (value ==''){value='请输入关键字'}" onfocus="if (value =='请输入关键字'){value =''}" value="请输入关键字" type="text" class="ssk" />
    <input name="" type="submit"  value=" " class="an"/>
  </div>
  </div>
</form>
<script type="text/javascript">
function to_submita()
{
	  
if(b.keywords.value.indexOf ("请输入关键字") == 0){
alert("关键字为空，请填写关键字");
b.keywords.focus();
return false;}

}
</script>
    </div>
    <div style="clear:both"></div>
  </div>
  <!-- 多级导航结束 -->