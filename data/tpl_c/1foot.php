<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><div class="copyright">
	<div style="float:left; width:13px;"><img src="tpl/www/images/a1.jpg"></div>
	<div class="cpyt">
    	<div style=" height:222px; overflow:hidden;">
		<div class="zjth">
        <span>走进锐翌</span>
        <ul>
        	 <?php $left_catelist = phpok_catelist(63);?>
        	 <?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
            <li><a href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
            <?php } ?>
         	<?php unset($left_catelist);?>
        </ul>
        </div>
        <div class="zjth">
        	<span>科研服务</span>
        <ul>
        <?php $left_catelist = phpok_catelist(116);?>
        <?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
        	<li><a href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
         <?php } ?>
         <?php unset($left_catelist);?>
        </ul>
        </div>
        <div class="zjth">
        	<span>医学服务</span>
        <ul>
        <?php $left_catelist = phpok_catelist(178);?>
        <?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
        	<li><a href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
         <?php } ?>
         <?php unset($left_catelist);?>
        </ul>
        </div>
        <div class="zjth">
        	<span>市场动态</span>
        <ul>
        	 <?php $left_catelist = phpok_catelist(86);?>
        	<?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
        	<li><a href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
         	<?php } ?>
         	<?php unset($left_catelist);?>
        </ul>
        </div>
        <div class="zjth">
        	<span>技术支持</span>
        <ul>
        	 <?php $left_catelist = phpok_catelist(95);?>
        	<?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
        	<li><a href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
         	<?php } ?>
         	<?php unset($left_catelist);?>
        </ul>
        </div>
        <div class="zjth">
        	<span>加入我们</span>
        <ul>
        	 <?php $left_catelist = phpok_catelist(109);?>
        	<?php $_i=0;$left_catelist[rslist]=(is_array($left_catelist[rslist]))?$left_catelist[rslist]:array();foreach($left_catelist[rslist] AS  $key=>$value){$_i++; ?>
        	<li><a href="<?php echo list_url($value);?>"><?php echo $value[cate_name];?></a></li>
         	<?php } ?>
         	<?php unset($left_catelist);?>
        </ul>
        </div>
        <script type="text/javascript" src="tpl/www/images/novogene_homey.js"></script>
        <div class="zjth" style=" width:150px;">
        	<span style="color:#fda100;">联系我们</span>
        <ul>
        	<li style="background:url(tpl/www/images/gzwb.jpg) no-repeat; height:29px; padding-left:50px; margin-bottom:10px; line-height:29px;"><a href="javascript:showtable()">关注微信</a></li>
            <div style=" width:130px; height:130px; z-index: 9999; left: 1000px; top: 1080px; border: 1px solid rgb(204, 204, 204); display: none;" id="toutiaoweixin">
 			<a class="closewei" href="#"><?php $ewm = phpok('ewm');?><?php echo $ewm[content];?><?php unset($ewm);?></a></div>
           <!-- <li style="background:url(tpl/www/images/sw.jpg) no-repeat; height:29px; padding-left:50px; margin-bottom:10px; line-height:29px;"><a href="mailto:<?php $yxdz = phpok('yxdz');?><?php echo $yxdz[content];?><?php unset($yxdz);?>?subject=<?php $yxdz = phpok('yxdz');?><?php echo $yxdz[title];?><?php unset($yxdz);?>">市场部邮箱</a></li>-->
        </ul>
        </div>
        </div>
        <div class="bottom"><?php $intro = phpok('intro');?><?php echo $intro[content];?><?php unset($intro);?></div>
	</div>
	<div style="float:right; width:6px;"><img src="tpl/www/images/a3.jpg"></div>
</div>
</div>

<?php $kflist = phpok('qq');?>
<?php if($kflist[rslist] && is_array($kflist[rslist]) && count($kflist[rslist])>0){?>
<style type="text/css">
.middle-bg{background:url("tpl/www/images/qq-middle.jpg") repeat-y;}
.myqq{text-align:center;padding-top:3px;padding-bottom:3px;}
#qqonline_float{ line-height:20px; text-align:center; color:#fff; height:141px; position:fixed;*_position:absolute;right:10px;top:200px;}
</style>
<script type="text/javascript">
if($.browser.msie && parseInt($.browser.version, 10) < 7)
{
	$(document).ready(function(){
		 $(window).scroll(function(){
			 $("#qqonline_float").css({top:$(this).scrollTop()+$(this).height()-500});
		 });
	});
}
</script>
<div id="qqonline_float">
	<?php $ewm1 = phpok('ewm1');?><?php echo $ewm1[content];?><?php unset($ewm1);?>
</div>
<?php } ?>
<script type="text/javascript" src="js/ftjs.js"></script>
<?php echo $plugin_html;?>
<script type="text/javascript"> 
function startmarquee(lh,speed,delay,index){ 
  var t; 
  var p=false; 
  var o=document.getElementById("marqueebox"+index); 
  o.innerHTML+=o.innerHTML; 
  o.onmouseover=function(){p=true} 
  o.onmouseout=function(){p=false} 
  o.scrollTop = 0; 
  function start(){ 
    t=setInterval(scrolling,speed); 
    if(!p){ o.scrollTop += 1;} 
  } 
  function scrolling(){ 
    if(o.scrollTop%lh!=0){ 
      o.scrollTop += 1; 
      if(o.scrollTop>=o.scrollHeight/2) o.scrollTop = 0; 
    }else{ 
      clearInterval(t); 
      setTimeout(start,delay); 
    } 
  } 
  setTimeout(start,delay); 
} 
startmarquee(41,30,3000,0); 
startmarquee(25,40,0,1); 
</script> 
<script type="text/javascript">
jQuery(".fullSlide").hover(function() {
    jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
},
function() {
    jQuery(this).find(".prev,.next").fadeOut()
});
jQuery(".fullSlide").slide({
    titCell: ".hd ul",
    mainCell: ".bd ul",
    effect: "fold",
    autoPlay: true,
    autoPage: true,
    trigger: "click",
    startFun: function(i) {
        var curLi = jQuery(".fullSlide .bd li").eq(i);
        if ( !! curLi.attr("_src")) {
            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
        }
    }
});
</script>
<script type="text/javascript"> var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0780d3001bc1f59579881026336efac' type='text/javascript'%3E%3C/script%3E")) </script>
</body>
</html>