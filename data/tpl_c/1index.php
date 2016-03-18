<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<link rel="stylesheet" type="text/css" href="tpl/www/images/superslides.css">
<script type="text/javascript" src="tpl/www/images/jquery.js"></script>
<script type="text/javascript" src="tpl/www/images/superslide.2.1.js"></script>

<div class="fullSlide">
  <div class="bd">
    <ul>
    <?php $hotpic = phpok("hdp");?>
    <?php $_i=0;$hotpic[rslist]=(is_array($hotpic[rslist]))?$hotpic[rslist]:array();foreach($hotpic[rslist] AS  $key=>$value){$_i++; ?>
      <li _src="url('<?php echo $value[picture];?>')" style="background:#FEFF19 center 0 no-repeat;"><a target="_blank" href="<?php echo $value[lj];?>"></a></li>
    <?php } ?>
    <?php unset($hotpic);?>
    </ul>
  </div>
  
  <div class="hd">
    <ul>
    </ul>
  </div>
  <span class="prev"></span> <span class="next"></span> 
</div>
<div class="clear"></div>
<style type="text/css"> 
.box{float:left;  width:580px; height:41px;line-height:41px; overflow:hidden;} 
.box ul{margin:0; padding:0} 
.box li{height:41px; line-height:41px; font-size:12px; text-align:left; list-style-type:none;} 
.box li a {padding-left:50px; }
</style>
<div class="zxgg"><span style="float:left;">最新公告：</span>
	<div class="box" id="marqueebox0">
  <ul>
    <?php $news = phpok("zxgg");?>
    <?php $_i=0;$news[rslist]=(is_array($news[rslist]))?$news[rslist]:array();foreach($news[rslist] AS  $key=>$value){$_i++; ?>
<li><a href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>"><?php echo $value[title];?></a></li>
	<?php } ?>
    <?php unset($news);?>
</ul>
</div>
    <div class="zx_right"><?php echo date("Y年m月d日");?></div>
</div>
<div class="clear"></div>
<div class="cen">
  <div class="cen_left">
    <a href="index.php?c=list&cs=danjunjiyinzucexu">
    <?php $zxqj = phpok_msg("zxqj");?>
    <img src="<?php echo $zxqj[tp];?>" width="288" height="288">
    </a>
  </div>
  <div class="cen_center">
    <a href="index.php?c=list&cs=wstphyjk">
    <?php $zxqj = phpok_msg("yxdt");?>
    <img src="<?php echo $zxqj[tp];?>" width="288" height="288">
    <?php unset($yxdt);?>
    </a>
  </div>
  <div class="cen_right">
    <a href="index.php?c=list&cs=tesefuwu">
    <?php $tsfw = phpok_msg("tsfw");?>
    <img src="<?php echo $tsfw[tp];?>" width="288" height="288">
    <?php unset($tsfw);?>
    </a>
  </div>
</div>
<div class="clear"></div>
<div class="middle">
    <style>#tag span{ color:#fff;}</style>
    <div class="left_a" style="padding:0;">
      <dl class="logindl_2" style="margin:0;">
        <p class="tag" id="tag" style="line-height:40px; font-size:16px; text-align:center;"><span class="focus1" >公司新闻</span></p>
        <div class="ph-con5 numlist clearfix" id="mlist_0" style="padding:0 20px;">
          <ul>
          <?php $news = phpok("gsxw");?>
          <?php $_i=0;$news[rslist]=(is_array($news[rslist]))?$news[rslist]:array();foreach($news[rslist] AS  $key=>$value){$_i++; ?>
            <li>
              <a href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>">
              <div style=" display:block; width:330px; float:left;"><?php echo sys_cutstring($value[title],48);?>...</div>
              <?php if(time()-$value[post_date]<864000){?>
              <img src="tpl/www/images/new.gif">
              <?php } ?>
              <div style="width:69px; float:right; display:block;"><?php echo date("Y-m-d",$value[post_date]);?></div>
              </a>
            </li>
          <?php } ?>
          </ul>
          <div class="gd"><a href="<?php echo list_url($news[me]);?>">更多&gt;&gt;</a></div>
          <?php unset($news);?>
        </div>
      </dl>
    </div>
    <div class="right_a" style="padding:0;">
      <dl class="logindl_2" style="margin:0;">
        <p class="tag" id="tag" style="line-height:40px; font-size:16px; text-align:center;"><span>科研动态</span></p>
        <div class="ph-con5 numlist clearfix" id="mlist_0" style="padding:0 20px;"> 
          <ul>
          <?php $news = phpok("tjwz");?>
          <?php $_i=0;$news[rslist]=(is_array($news[rslist]))?$news[rslist]:array();foreach($news[rslist] AS  $key=>$value){$_i++; ?>
            <li>
              <a href="<?php echo msg_url($value);?>" title="<?php echo $value[title];?>">
              <div style=" display:block; width:330px; float:left;"><?php echo sys_cutstring($value[title],48);?>...</div>
              <?php if(time()-$value[post_date]<259200){?>
              <img src="tpl/www/images/new.gif">
              <?php } ?>
              <div style="width:69px; float:right; display:block;"><?php echo date("Y-m-d",$value[post_date]);?></div>
              </a>
            </li>
            <?php } ?>
          </ul>
          <div class="gd"><a href="<?php echo list_url($news[me]);?>">更多&gt;&gt;</a></div>
          <?php unset($news);?>
        </div>
      </dl>
    </div>
</div>
<div class="clear"></div>
<?php $APP->tpl->p("foot","","0");?>