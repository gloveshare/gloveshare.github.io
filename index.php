<?php
session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "ini.php";
//版权：开发者
//作者：开发者
//网址：kaifazhe.org.cn

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php echo $ini['title']?></title>
  <meta name="keywords" content="<?php echo $ini['keywords']?>" />
  <meta name="description" content="<?php echo $ini['description']?>" />
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="public/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>
</head>
<body background="./img/bj.png">
  <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
  <h3 class="text-muted" align="center"><?php echo $ini['title']?></h3>
<hr>
	<table class="table table-bordered">
	<tbody>
	   <div class="col-md-14 column">
    <div class="panel panel-default">
     <div id="kj" class="panel-body">
      <iframe src="./public/vip_js/index.htm" id="player" width="100%" height="400px" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
     </div>
    </div>
   </div>
		<tr>
   <div class="col-md-14 column">
    <form method="get" id="1233911832">
     <div class="input-group" style="width: 100%;">
      <span class="input-group-addon input-lg" style="width: 80px; ">选择接口</span>
      <select class="form-control input-lg" id="jk">
	  <option value="http://v.72du.com/api/?url=" selected="">1号接口（接口较全）</option>
<option value="http://000o.cc/jx/ty.php?url=">2号接口</option>
<option value="http://yyygwz.com/index.php?url=">3号接口</option>
<option value="http://www.wmxz.wang/video.php?url=">4号接口</option> 
<option value="http://yun.zihu.tv/play.html?url=">5号接口</option>
<option value="http://www.vipjiexi.com/yun.php?url=">6号接口</option>
<option value="http://api.cloudparse.com/?url=">7号接口</option>
<option value="https://jxapi.nepian.com/ckparse/?url=">8号接口</option>
<option value="http://jx.71ki.com/tong.php?url=">9号接口</option>
<option value="http://www.yydy8.com/Common/?url=">10号接口</option>
<option value="http://api.47ks.com/webcloud/?v=">11号接口</option>
<option value="http://p2.api.47ks.com/webcloud/?v=">12号接口</option>
<option value="http://www.ou522.cn/t2/1.php?url=">13号接口</option>
<option value="http://2gty.com/apiurl/yun.php?url=">14号接口</option>
<option value="http://player.gakui.top/?url=">优酷乐视专用接口</option>
<option value="http://qtzr.net/s/?qt=">乐视搜狐专用接口</option>
<option value="http://api.baiyug.cn/vip/index.php?url=">优酷专用接口</option> 
<option value="http://apn.zhibo99.cn/mdparse/letv.php?id=">乐视专用接口</option> 
<option value="http://jx.71ki.com/index.php?url=">乐视专用接口2</option>
<option value="https://apiv.ga/magnet/">万能磁力链接解析</option>
<option value="http:// ">更多接口待添加...</option> </select>
     </div>
     <br>
     <div class="input-group" style="width: 100%;">
      <span class="input-group-addon input-lg" style="width: 80px;">播放地址</span>
      <input class="form-control input-lg" type="search" placeholder="输入播放地址" id="url">
     </div>
     <br>
     <div>
      <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">Go</button>
     </div>
    </form>
   </div>
		</tr>
      </tbody>
	  <!--换行-->
          </table>
		  	<table class="table table-bordered">
	<thead>
		<tr>
			<th>使用介绍/接口可用情况</th>
			<th>↓↓↓公告↓↓↓</th>
		</tr>
	</thead>
	<tbody>
	    <tr>
			<th><a href="http://static.hdslb.com/miniloader.swf?aid=8588155&page=1" title="风沙娱乐" target="_blank">不会用点我</a></span>
			如果接口失效，麻烦第一时间点击右下角联系我</th>
			<th>腾讯VIP视频已支持解析</th>
		</tr>
	</thead>
	<tbody>
		<tr>
            <td><b>
<ol><h5><b>
<li>1号接口：爱奇艺、优酷、乐视、搜狐、PPTV、土豆、腾讯</li><br>
<li>2号接口：爱奇艺、优酷、乐视、芒果、搜狐、PPTV、土豆</li><br>
<li>3号接口：优酷、乐视、芒果、搜狐、PPTV、土豆</li><br>
<li>4号接口：爱奇艺、优酷、乐视、芒果、搜狐、PPTV、土豆</li><br>
<li>5号接口：优酷、乐视、芒果、搜狐、PPTV、土豆</li><br>
<li>6号接口：优酷、乐视、芒果、搜狐、PPTV、土豆、腾讯</li><br>
<li>7号接口：优酷、乐视、芒果、搜狐、PPTV、土豆</li><br>
<li>8号接口：优酷、乐视、芒果、搜狐、土豆</li><br>
<li>9号接口：优酷、乐视、芒果、搜狐、PPTV、土豆、腾讯</li><br>
<li>10号接口：爱奇艺、优酷、乐视、芒果、搜狐、PPTV、土豆、腾讯</li><br>
<li>11号接口：爱奇艺、优酷、乐视、芒果、搜狐、PPTV、土豆、腾讯</li><br>
<li>12号接口：爱奇艺、优酷、乐视、芒果、搜狐、PPTV、土豆</li><br>
<li>13号接口：优酷、芒果、搜狐、PPTV、土豆</li><br>
<li>14号接口：优酷、乐视、芒果、搜狐、PPTV、土豆、腾讯</li><br>
<li>磁力引擎：老司机专用通道，你的懂的.....</li><br>
<li>有些时候接口可能在维护，如果不能播放，可以换个接口</li><br></b></h5>
</ol>
			</b>
			<td><b>
			<ol><h5><b>
<li>网站更新日志</li><br>
<li>2017年2月17日：整理网站，新加入更多接口，新支持PPTV、土豆解析</li><br>
<li>2017年3月2日：部分接口可以解析爱奇艺了;12号接口更新，支持解析更多视频</li><br>
<li>2017年3月8日：磁力链接维修完成</li><br>
<li>2017年3月13日：腾讯视频维修完成</li><br>

</ol>
 </td>
		</tr>
      </tbody>
	  <!--换行-->
          </table>
<?php include "foot.php";?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6dc20597a867a84298f7e3b6834d5f1c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>

