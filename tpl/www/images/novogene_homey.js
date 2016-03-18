/**
	*更换图标
 */
 $(document).ready(function () {
	 $("#li_wei").bind('mouseover',function(){
		 	$("#weixin").attr("src","http://www.novogene.cn/statics/images/weixin.png");
		 });
		 $("#li_wei").bind('mouseout',function(){
		 	$("#weixin").attr("src","http://www.novogene.cn/statics/images/weixin1.png");
		});
 });
 /**
	*更换图标
 */
 $(document).ready(function () {
	 $("#li_zixun").bind('mouseover',function(){
		 	$("#zixun").attr("src","http://www.novogene.cn/statics/images/zixun.png");
		 });
		 $("#li_zixun").bind('mouseout',function(){
		 	$("#zixun").attr("src","http://www.novogene.cn/statics/images/zixun2.png");
		});
 });
 /**
	*更换图标
 */
 $(document).ready(function () {
	 $("#li_fankui").bind('mouseover',function(){
		 	$("#fankui").attr("src","http://www.novogene.cn/statics/images/fankui.png");
		 });
		 $("#li_fankui").bind('mouseout',function(){
		 	$("#fankui").attr("src","http://www.novogene.cn/statics/images/fankui2.png");
		});
 });
 /*
 $(document).ready(function(){
	 $("#guanwei").bind('click',function(){
		 if($("#toutiaoweixin").style.display=='none'){
			$("#toutiaoweixin").show();
			}
		else{
			$("#toutiaoweixin").hide();
			}
		 });
	 
	 });*/
function showtable()
{
if(document.all("toutiaoweixin").style.display=="none")
{document.all("toutiaoweixin").style.display="";}
else
{document.all("toutiaoweixin").style.display="none";}
}

function showsubmenu(sid)
{
	var obj1= "ss" + sid
	whichEl = eval("submenu" + sid);
	if (whichEl.style.display == "none")
	{
	eval("submenu" + sid + ".style.display=\"\";");
	document.getElementById('menuTitle'+sid).innerHTML='关闭';
	}
	else
	{
	eval("submenu" + sid + ".style.display=\"none\";");
	document.getElementById('menuTitle'+sid).innerHTML='展开';
	}
}
