<?php
$zTitle = "栗子计划";
?>
<!DOCTYPE html><html>
<head>
<meta charset="utf-8">
<title><?php echo $zTitle; ?></title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="bookmark" href="/favicon.ico" />
<link rel="stylesheet" href="/css/dotdig7.css" type="text/css" />
<link rel="stylesheet" href="/css/tfgirl-w.css" type="text/css" />
<link rel="stylesheet" href="/css/tfgirl-d.css" type="text/css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="//www.googletagmanager.com/gtag/js?id=UA-117441173-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-117441173-1');
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9236201446431167",
    enable_page_level_ads: true
  });
</script>
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<style type="text/css">
html{
  height: 100%;
}
body{
  display: -webkit-flex;
  display: flex;
  flex-flow: column nowrap;
  width: 100%;
  height: 100%;
  margin: 0 auto;
  min-width: 760px;
  text-align: center;
  line-height: 1.5;
  background-image: url(//img.vim-cn.com/dd/3cf2f5211de47b830ee6118383a4f189150f01.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font-family: Helvetia;
  position: relative;
}
input, textarea, select{
  font-size: inherit;
  font-family: inherit;
  background-color: #eff;
}
input:hover, textarea:hover, select:hover{
  background-color: #cff;
}
input:focus, textarea:focus{
  background-color: #bff;
}
[v-cloak]{
  display: none !important;
}
.hide{
  display: none !important;
}
.hidden{
  opacity: 0 !important;
  visibility: hidden !important;
}
.h-hide, .w-hide{
  opacity: 0 !important;
  border: none !important;
  box-shadow: none !important;
  font-size: 0 !important;
}
.h-hide{
  min-height: 0 !important;
  height: 0 !important;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}
.w-hide{
  min-width: 0 !important;
  width: 0 !important;
  margin-left: 0 !important;
  margin-right: 0 !important;
  padding-left: 0 !important;
  padding-right: 0 !important;
}
.scrollbar-none::-webkit-scrollbar{
  width: 0;
}
.scrollbar-blue, .scrollbar-none{
  overflow-y: auto;
}
.scrollbar-blue::-webkit-scrollbar{
  width: 4px;
}
.scrollbar-blue::-webkit-scrollbar-thumb{
  background-color: #0ae;
  background-image: -webkit-gradient(linear, 0 0, 0 100%,
                     color-stop(.5, rgba(255, 255, 255, .2)),
                     color-stop(.5, transparent), to(transparent));
}
.scrollbar-blue::-webkit-scrollbar-track{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #f5f5f5;
}
.center{
  margin: 0 auto;
}
.btn{
  display: inline-block;
  cursor: pointer;
  width: 20%;
}
.ro45{
  transform: rotate(45deg);
}
.ro90{
  transform: rotate(90deg);
}
.icon-plus{
  position: relative;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  border: 2px black dashed;
  flex-shrink: 0;
}
.icon-plus:before,
.icon-plus:after{
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  background-color: black;
}
.icon-plus:before{
  width: 70%;
  height: 4%;
  margin-top: -2%;
  margin-left: -35%;
}
.icon-plus:after{
  width: 4%;
  height: 70%;
  margin-top: -35%;
  margin-left: -2%;
}
.blur-back .back{
  width: 100%;
  height: 100%;
  position: absolute;
  background: inherit;
  filter: blur(5px);
}
input[type="number"].nobtn{
  -moz-appearance: textfield;
}
input[type="number"].nobtn::-webkit-outer-spin-button,
input[type="number"].nobtn::-webkit-inner-spin-button,{
  -webkit-appearance: none !important;
  margin: 0;
}
select.nobtn{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.tips,
.tips-left,
.tips-right,
.tips-bottom{
  position: absolute;
  width: 80px;
  padding: 0;
  border: none;
  transition: all .5s;
  font-size: 16px;
  line-height: 24px;
  height: 24px;
  opacity: 1;
  background-color: #444;
  color: #f96;
  border-radius: 5px;
  border: none;
  box-sizing: border-box;
  text-align: center;
  box-shadow: 1px 1px 1px #444;
  z-index: 9;
  flex: 0 0 auto;
}
.tips{
  top: -48px;
}
.tips-left{
  left: -90px;
}
.tips-right{
  right: -90px;
}
.tips-bottom{
  bottom: -48px;
}
.tips:before,
.tips-left:before,
.tips-right:before,
.tips-bottom:before{
  content: attr(tipstr);
}
.tips:after,
.tips-left:after,
.tips-right:after,
.tips-bottom:after{
  content: "";
  position: absolute;
  height: 0;
  width: 0;
  border-width: 10px;
  border-style: solid;
}
.tips:after,
.tips-bottom:after{
  left: 50%;
  margin-left: -10px;
}
.tips-left:after,
.tips-right:after{
  top: 50%;
  margin-top: -10px;
}
.tips:after{
  border-color: #444 transparent transparent transparent;
  bottom: -18px;
}
.tips-left:after{
  border-color: transparent transparent transparent #444;
  right: -18px;
}
.tips-right:after{
  border-color: transparent #444 transparent transparent;
  left: -18px;
}
.tips-bottom:after{
  border-color: transparent transparent #444 transparent;
  top: -18px;
}
.tips.showtips,
.tips-left.showtips,
.tips-right.showtips,
.tips-bottom.showtips{
  visibility: visible;
}
.tips.showtips{
  top: -24px;
}
.tips-left.showtips{
  left: -64px;
}
.tips-right.showtips{
  right: -64px;
}
.tips-bottom.showtips{
  bottom: -24px;
}
#topicon{
  cursor: pointer;
  width: 120px;
  height: 120px;
  position: absolute;
  right: 2%;
  bottom: 2%;
  background-image: url("/img/kud1.png");
  background-size: 100%;
}
#topicon:hover{
  background-image: url("/img/kud3.png");
}
#topicon:after{
  position: absolute;
  right: 2%;
  bottom: 0;
  content: "bg:pixiv-49281286";
  color: #dff;
  font-size: 9px;
  line-height: 0;
}
#header{
  flex: 0 0 auto;
  height: 120px;
  background-color: rgba(32,180,180,.8);
  font-size: 88px;
  letter-spacing: 20px;
  line-height: 100px;
  position: relative;
  overflow: hidden;
}
#header:before,
#header:after{
  position: absolute;
  left: 0;
  right: 0;
}
#header:before{
  top: 10px;
  color: #fff;
  font-family: tfgirl-d, tfgirl-w;
  content: "<?php echo $zTitle; ?>";
  z-index: 5;
}
#header:after{
  top: 60px;
  color: #aff;
  font-family: dotdig7;
  transform:scale(18);
  content: "Kuriko";
  letter-spacing: 1px;
  font-size: 12px;
  line-height: 20px;
  opacity: .5;
  z-index: 1;
}
#header span{
  position: absolute;
  font-size: 12px;
  line-height: 24px;
  letter-spacing: 0;
  color: #bff;
  bottom: 0;
  right: 50%;
  margin-right: -25%;
}
#header span:after{
  content: "命名：呆糕";
}
#signs .newsign{
  display: -webkit-flex;
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  margin: 10px 1%;
  margin-right: 200px;
  width: 90px;
  height: 90px;
  opacity: .9;
  box-shadow: 0 0 5px 0 white;
  position: relative;
  background: inherit;
  transition: all .3s;
}
#signs .newsign.spw{
  width: 22%;
  margin-right: 1%;
}
#signs .newsign.spi{
  min-width: 280px;
}
#signs .newsign.sph{
  height: 340px;
}
#signs .newsign:hover{
  box-shadow: 0 0 3px 2px white;
}
#signs .newsign:active{
  box-shadow: 0 0 10px 2px white;
}
#signs .newsign .back:active{
  filter: blur(7px);
}
#signs .newsign .icon-plus{
  width: 80px;
  height: 80px;
  bottom: 5px;
  right: 5px;
  border: none;
  opacity: .8;
  transition: all .5s;
  cursor: pointer;
}
#signs .newsign .icon-plus:before,
#signs .newsign .icon-plus:after{
  background-color: white;
}
#signs .newsign .icon-plus:hover{
  box-shadow: 0 0 2px 2px white;
}
#signs .newsign .icon-plus.sp{
  transform: rotate(135deg);
}
#signs .newsign .newbtn,
#signs .newsign input.iti,
#signs .newsign input.iname,
#signs .newsign select.imax,
#signs .newsign .imsg{
  position: absolute;
  height: 11%;
  z-index: 1;
  border: none;
  padding: 0 10px;
  margin: 0;
  box-sizing: border-box;
}
#signs .newsign input.iti{
  width: 90%;
  top: 5%;
  left: 50%;
  margin-left: -45%;
}
#signs .newsign .iti.tips-left{
  top: 6.5%;
}
#signs .newsign input.iname{
  width: 67%;
  top: 20%;
  left: 5%;
}
#signs .newsign .iname.tips-left{
  top: 21.5%;
}
#signs .newsign select.imax{
  width: 20%;
  top: 20%;
  right: 5%;
}
#signs .newsign select.imax option{
  background-color: white;
}
#signs .newsign select.imax option:nth-child(even){
  background-color: #dee;
}
#signs .newsign .imax.tips-right{
  top: 21.5%
}
#signs .newsign .imsg{
  width: 90%;
  top: 35%;
  left: 50%;
  margin-left: -45%;
  height: 38.5%;
  padding: 10px;
  word-break: break-all;
  resize: none;
}
#signs .newsign .newbtn{
  left: 5%;
  top: 79%;
  padding: 0 4px;
  background-color: white;
  height: 52px;
  width: 60%;
  font-size: 32px;
  cursor: pointer;
  box-sizing: content-box;
  overflow: hidden;
}
#signs .newsign .newbtn:after{
  position: relative;
  content: "创建";
}
#signs .newsign .newbtn:hover{
  background-color: #dfd;
}
#signs .newsign .newbtn:active{
  background-color: #bfb;
}
#signs{
  display: -webkit-flex;
  display: flex;
  flex-flow: row wrap;
  padding: 20px 12% 20px 6%;
  background: inherit;
}
.sign-wrap{
  display: -webkit--flex;
  display: flex;
  flex-flow: column nowrap;
  width: 22%;
  min-width: 280px;
  margin: 10px 1%;
  position: relative;
  background-color: white;
  height: 100%;
  min-height: 340px;
  max-height: 640px;
  opacity: .9;
  transition: all .1s linear;
  overflow: hidden;
}
.sign-wrap:hover{
  //box-shadow: 0 0 5px 2px #f6f;
}
.sign-wrap .sign-mask{
  position: absolute;
  width: 100%;
  height: 560px;
  background-color: #444;
  opacity: .5;
  transition: all .5s;
  z-index: 8;
}
.sign-wrap .h{
  padding: 6px 0 20px;
  font-size: 22px;
  position: relative;
  flex-shrink: 0;
  overflow: hidden;
}
.sign-wrap .delw .my{
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  height: 0;
  border-top: 40px solid white;
  border-left: 40px solid transparent;
}
.sign-wrap .delw .del{
  position: absolute;
  top: -4px;
  right: -4px;
  width: 30px;
  height: 30px;
  border: none;
  transition: all .4s;
  cursor: pointer;
}
.sign-wrap .delw .del:hover{
  transform: rotate(225deg);
}
.sign-wrap .delw .delc{
  position: absolute;
  padding: 0;
  border: none;
  transition: all .5s;
  top: 1px;
  right: 33px;
  width: 80%;
  height: 50px;
  font-size: 17px;
  line-height: 24px;
  opacity: 1;
  background-color: #444;
  color: #f96;
  border-radius: 5px;
  border: none;
  box-sizing: border-box;
  text-align: center;
  box-shadow: 1px 1px 1px #444;
  z-index: 9;
  flex: 0 0 auto;
}
.sign-wrap .delw .delc.hidden{
  right: 60px;
}
.sign-wrap .delw .delc:before{
  content: "";
  position: absolute;
  height: 0;
  width: 0;
  top: 1px;
  right: -18px;
  border-width: 10px;
  border-style: solid;
  border-color: transparent transparent transparent #444;
}
.sign-wrap .delw .delc:after{
  content: "－删除－";
}
.sign-wrap .delw .delc .confirm,
.sign-wrap .delw .delc .cancel{
  position: absolute;
  width: 20%;
  bottom: 4px;
  font-size: 15px;
  line-height: 18px;
  height: 20px;
  border-radius: 5px;
}
.sign-wrap .delw .delc .confirm:hover,
.sign-wrap .delw .delc .cancel:hover{
  box-shadow: 0 0 2px 2px white;
}
.sign-wrap .delw .delc .confirm{
  left: 50%;
  margin-left: -25%;
}
.sign-wrap .delw .delc .confirm:after{
  content: "确定";
}
.sign-wrap .delw .delc .cancel{
  right: 50%;
  margin-right: -25%;
}
.sign-wrap .delw .delc .cancel:after{
  content: "取消";
}
.sign-wrap .own,
.sign-wrap .sid,
.sign-wrap .ac{
  position: absolute;
  top: 36px;
  font-size: 13px;
}
.sign-wrap .own{
  left: 15px;
  z-index: 1;
}
.sign-wrap .sid{
  left: 0;
  right: 0;
  z-index: 0;
}
.sign-wrap .sid:before{
  content: "id:";
}
.sign-wrap .ac{
  right: 15px;
  z-index: 1;
}
.sign-wrap .msg{
  font-size: 17px;
  text-align: left;
  margin: 5px 10px;
  background-color: #eff;
  min-height: 72px;
  box-shadow: 0 0 2px #aaa;
  border-radius: 5px;
  word-break: break-all;
  resize: none;
  padding: 4px;
  border: none;
  box-sizing: border-box;
  position: relative;
}
.sign-wrap .msg:hover{
  background-color: #cff;
}
.sign-wrap .msg:hover{
  background-color: #bff;
}
.sign-wrap .msg.ro{
  background-color: #fff8dc !important;
}
.sign-wrap .msg:before,
.sign-wrap .msg:after{
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
}
.sign-wrap .msge{
  display: -webkit-flex;
  display: flex;
  justify-content: space-around;
  position: relative;
  height: 20px;
  //margin-bottom: 5px;
  line-height: 18px;
  font-size: 15px;
  transition: all .5s;
  color: #f96;
}
.sign-wrap .msge>div{
  width: 20%;
  overflow: hidden;
  background-color: #444;
  border-radius: 5px;
  cursor: pointer;
}
.sign-wrap .msge>div:hover{
  box-shadow: 1px 1px 2px #444;
}
.sign-wrap .msge>div:active{
  background-color: #feb;
  //color: #444;
  box-shadow: 1px 1px 5px #444;
}
.sign-wrap .msge .up{
  margin-right: -10%;
}
.sign-wrap .msge .rs{
  margin-left: -10%;
}
.sign-wrap .msge>div:before{
  content: attr(st);
}
.sign-wrap .msgh,
.sign-wrap .memh{
  position: relative;
  font-size: 14px;
  top: 4px;
}
.sign-wrap .msgh:before{
  content: "－留言－";
}
.sign-wrap .memh:before{
  content: "－成员－";
}
.sign-wrap .e{
  display: -webkit-flex;
  display: flex;
  font-size: 18px;
  line-height: 40px;
  margin-top: 5px;
  height: 40px;
  border-top: 2px #aaa solid;
  border-bottom: 2px #aaa solid;
  flex: 0 0 auto;
  position: relative;
}
.sign-wrap .e .dname,
.sign-wrap .e .uname{
  position: absolute;
  left: 0;
  width: 70%;
  height: 40px;
  padding: 0 10px;
  border: none;
  border-right: 2px #bbb solid;
  box-sizing: border-box;
  text-align: center;
}
.sign-wrap .e .btn{
  position: absolute;
  width: 30%;
  height: 40px;
}
.sign-wrap .e .btn:after{
  content: attr(st);
}
.sign-wrap .e .c{
  right: 0;
}
.sign-wrap .e .c:hover{
  background-color: #dfd;
}
.sign-wrap .e .c:active{
  background-color: #bfb;
}
.sign-wrap .e .tips{
  left: 50%;
  margin-left: calc(-40px - 15%);
}
.sign-wrap .e .exit:hover{
  background-color: #fdd;
}
.sign-wrap .e .exit:active{
  background-color: #fbb;
}
.sign-wrap .members{
  font-size: 14px;
  display: -webkit-flex;
  display: flex;
  flex-flow: column nowrap;
  overflow-y: auto;
}
.sign-wrap .members .m{
  border-bottom: 2px #bbb dashed;
  line-height: 36px;
  cursor: default;
  position: relative;
}
.sign-wrap .members .m:hover{
  background-color: #dff;
}
.sign-wrap .members .m .own{
  position: absolute;
  width: 0;
  height: 0;
  top: 0;
  left: calc(100% - 18px);
  border-top: 18px solid #f6f;
  border-left: 18px solid transparent;
}
.sign-wrap .members .marked:after{
  position: absolute;
  margin-left: 0;
}
.sign-wrap .members .isme{
  background-color: rgba(255,128,255,.1);
}
.sign-wrap .members .isme:after{
  content: "\3000<";
}
</style>
<script type="text/javascript">
var signs, signsv;
var updatetime = 5000;
var newsign = {"ti":"","own":"","msg":"","maxsel":"0", max:[4,6,18,30]};
var dateFormat = "yyyyMMdd";
var disableColor = "#888";
var disableBgColor = "#ddd";
var editbak = {};
var e=false;
time = new Date().getTime();
function addCookie(objName, objValue, objExp){
  var ms = objExp||3600*34*30*1000;
  var str = objName + "=" + escape(objValue);
  var date = new Date();
  date.setTime(date.getTime() + ms);
  str += "; expires=" + date.toGMTString() + "; path=/";
  document.cookie = str;
}
function addInfCookie(objName, objValue){
  addCookie(objName, objValue, "Fri, 31 Dec 9999 23:59:59 GMT");
}
function getCookie(name){
  var arr,reg = new RegExp("(^| )"+name+"=([^;]*)(;|$)");
  if (arr=document.cookie.match(reg))
    return unescape(arr[2]);
  else return null;
}
function delCookie(name){
  var exp= new Date();
  exp.setTime(exp.getTime() - 1);
  var n = getCookie(name);
  if (n)
    document.cookie = name+"="+n+"; expires="+exp.toGMTString();
}
function getCount(obj){
  return Object.keys(obj).length;
}
function dateFtt(fmt,date){
  var o = {
    "M+" : date.getMonth()+1,
    "d+" : date.getDate(),
    "h+" : date.getHours(),
    "m+" : date.getMinutes(),
    "s+" : date.getSeconds(),
    "q+" : Math.floor((date.getMonth()+3)/3),
    "S"  : date.getMilliseconds()
  };
  if(/(y+)/.test(fmt))
    fmt=fmt.replace(RegExp.$1, (date.getFullYear()+"").substr(4 - RegExp.$1.length));
  for(var k in o)
    if(new RegExp("("+ k +")").test(fmt))
  fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
  return fmt;
}
function disableInput(ii, d){
  var i = $(ii);
  i.attr("disabled", d);
  if (d){
    i.css("background-color", disableBgColor);
  }
  else{
    i.removeAttr("style");
  }
}
function disableBtn(di, d){
  var div = $(di);
  div.attr("disabled", d);
  if (d){
    div.removeAttr("onclick");
    div.css("cursor", "default");
    div.css("color", disableColor);
    div.css("background-color", disableBgColor);
  }
  else{
    div.removeAttr("style");
    div.attr("onclick", div.attr("cfunc"));
  }
}
function chknum(input, min){
  var i = $(input);
  if (i.val()<min) i.val(min);
}
function chknum(input, min, max){
  var i = $(input);
  if (i.val()<min) i.val(min);
  if (i.val()>max) i.val(max);
}
function getgrey(color){
  var t=$("#topicon");
  t.css("color", color);
  var c=t.css("color").replace("rgb(", "").replace(")", "").split(",");
  return c[0]*0.299+c[1]*0.587+c[2]*0.144;
}
function showtip(tipd, t){
  var ts = t||3000;
  tipd.removeClass("hidden")
      .addClass("showtips");
  setTimeout(function(){
    tipd.removeClass("showtips")
        .addClass("hidden");
  }, ts);
}
function cnvDuration(t){
  var r = t;
  if (t.substr(-1).toLowerCase()=="s")
    r = t.substr(0,t.length-1)*1000;
  return r;
}
function chstate(s){
  disableBtn(s, true);
  var st = $(s);
  var unamei = st.siblings(".uname");
  var sign=signsv.signs[st.parent().parent().attr("sid")];
  if (sign.cu.isin=="退出"){
    $.get("delsusr?sid="+sign.id+"&uid="+sign.cu.id, function(data){
      if (data!="0"&&data!="1") return;
      unamei.removeClass("hide");
      st.siblings(".dname").addClass("hide");
      st.removeClass("exit");
      updateMembers(sign.id);
    });
  }
  else{
    if (sign.cu.name!=""){
      $.get("addsusr?sid="+sign.id+"&name="+sign.cu.name, function(data){
        if (data=="") return;
        unamei.addClass("hide");
        st.siblings(".dname").removeClass("hide");
        st.addClass("exit");
        updateMembers(sign.id);
      });
    }
    else{
      showtip(st.siblings(".tips"));
      unamei.focus();
    }
  }
  setTimeout(function(){
    disableBtn(s, false);
  }, 1000);
}
function chAddBtn(e){
  var addbtn = $(e);
  var newsign = addbtn.parent();
  var animespeed = newsign.children(".icon-plus").css("transition-duration");
  var spspeed = newsign.css("transition-duration");
  animespeed = cnvDuration(animespeed);
  spspeed = cnvDuration(spspeed);
  if (addbtn.hasClass("sp")){
    addbtn.removeClass("sp");
    newsign.children().not(".back, .icon-plus").slideUp(animespeed);
    setTimeout(function(){
      newsign.removeClass("sph");
      setTimeout(function(){
        newsign.removeClass("spi spw");
      }, spspeed);
    }, animespeed);
  }
  else{
    newsign.addClass("spw");
    setTimeout(function(){
      newsign.addClass("spi sph");
      setTimeout(function(){
        addbtn.addClass("sp");
        newsign.children().not(".back, .icon-plus").slideDown(animespeed);
      }, spspeed);
    }, spspeed);
  }
}
function chkin(signc){
  var uid = getCookie("id");
  for (var j=0; j<getCount(signc.members); j++){
    if (signc.members[j].id==uid){
      signc.cu.isin = "退出";
      return true;
    }
  }
  signc.cu.isin = "加入";
  return false;
}
function loadlist(data){
  signs = JSON.parse(data);
  signsv = new Vue({
    el: "#signs",
    data: {signs: signs, newsign: newsign},
    methods: {
      timestr: function(time){
        return dateFtt(dateFormat, new Date(time*1000));
      },
      count: function(o){
        return getCount(o);
      },
      chkmy: function(i){
        chkin(i);
        if (i.own.id!=getCookie("id")) return false;
        i.cu.id = i.own.id;
        i.cu.name = i.own.name;
        return true;
      },
      chkme: function(i, u){
        if (getCookie("id")!=u.id) return "";
        i.cu.id = u.sid;
        i.cu.name = u.name;
        return "isme marked";
      },
      greychk: function(color){
        if (getgrey(color)<144) return "white";
        else return "black";
      }
    },
    directives: {
      s: {
        inserted: updateshadow,
        update: updateshadow
      }
    }
  });
}
function updateshadow(el){
  $(el).unbind("mouseenter")
       .unbind("mouseleave")
       .hover(
    function(){
      $(this).css("box-shadow", "0 0 5px 2px "+signsv.signs[$(this).attr("sid")].tic);
    },
    function(){
      $(this).removeAttr("style");
    }
  );
}
function updateList(){
  $.post("list", function(data){
    var s = JSON.parse(data);
    for (si in s)
      if (signsv.signs[si])
        s[si].cu = signsv.signs[si].cu;
    signsv.signs = {};
    signsv.signs = Object.assign({}, signsv.signs, s);
  });
}
function loopUpdate(){
  if (!e){
    updateList();
    setTimeout(function(){
      loopUpdate();
    }, updatetime);
  }
}
function updateMembers(signid){
  if (!signs[signid]) return;
  $.post("list", function(data){
    var s = JSON.parse(data);
    if (!s[signid])
      updateList();
    else{
      signsv.signs[signid].members = [];
      signsv.signs[signid].members = Object.assign({}, signsv.signs[signid].members, s[signid].members);
      chkin(signsv.signs[signid]);
    }
  });
}
function addsign(b){
  disableBtn(b, true);
  $(b).css("border","none");
  var nw = $(b).parent();
  var chkc = 0;
  if (newsign.ti==""){
    showtip(nw.find(".iti.tips-left"));
    chkc++;
  }
  if (newsign.own==""){
    showtip(nw.find(".iname.tips-left"));
    chkc++;
  }
  if (newsign.maxsel=="0"){
    showtip(nw.find(".imax.tips-right"));
    chkc++;
  }
  if (chkc==0){
    $.post("addsign", {
      ti: newsign.ti,
      own: newsign.own,
      max: newsign.maxsel,
      msg: newsign.msg
    }, function(data){
      if (data=="") return;
      newsign.ti=newsign.own=newsign.msg="";
      newsign.maxsel=0;
      updateList();
    });
  }
  setTimeout(function(){
    disableBtn(b, false);
  }, 1500);
}
function hidedelc(s){
  s.css("opacity", "0")
   .css("visibility", "hidden");
  s.parent().parent().siblings(".sign-mask").addClass("hidden");
  setTimeout(function(){
    s.addClass("hidden")
     .removeAttr("style");
  }, cnvDuration(s.css("transition-duration")));
}
function delsignchk(b){
  var t=$(b).siblings(".delc");
  t.removeClass("hidden");
  t.parent().parent().siblings(".sign-mask").removeClass("hidden");
}
function delsign(s){
  signw = $(s).parent().parent().parent().parent();
  $.get("delsign?sid="+signw.attr("sid"), function(data){
    if (data!="0") return;
    signw.css("transition", "all .5s")
         .addClass("w-hide");
    setTimeout(function(){
      hidedelc($(s).parent());
      updateList();
    }, 500);
  });
}
function setedit(b){
  if (b) e=true;
  else{
    e=false;
    setTimeout(function(){
      loopUpdate();
    }, updatetime*2);
  }
}
function chmsge(i){
  var msge = $(i).siblings(".msge");
  var sid = msge.parent().attr("sid");
  if (!editbak[sid]) editbak[sid]={clck: 0};
  if (signsv.signs[sid].own.id!=localStorage.id||editbak[sid].clck==1||!$(i).attr("readonly")) return;
  if (msge.hasClass("h-hide")){
    msge.removeClass("h-hide");
    setedit(true);
  }
  else{
    msge.addClass("h-hide");
    setedit(false);
  }
  editbak[sid].clck=1;
  setTimeout(function(){
    editbak[sid].clck=0;
  }, updatetime*.2);
}
function setinputro(tin, d){
  tin.attr("readonly", d);
  if (d) tin.addClass("ro");
  else tin.removeClass("ro");
}
function msgeup(b){
  var btn = $(b);
  var tin = btn.parent().siblings(".msg");
  var sid = tin.parent().attr("sid");
  if (btn.attr("st")=="修改"){
    setinputro(tin, false);
    btn.attr("st", "确定");
    btn.siblings(".rs").attr("st", "取消");
    editbak[sid].msg = tin.val();
  }
  else{
    setinputro(tin ,true);
    if (editbak[sid].msg!=tin.val()){
      $.post("msg.php", {sid: sid, msg: tin.val()}, function(){
        updateList();
      });
    }
    btn.attr("st", "修改");
    btn.siblings(".rs").attr("st", "刷新");
  }
}
function msgers(b){
  var btn = $(b);
  var tin = btn.parent().siblings(".msg");
  var sid= tin.parent().attr("sid");
  if (btn.attr("st")=="刷新")
    updateList();
  setinputro(tin, true);
  signsv.signs[sid].msg = editbak[sid].msg;
  btn.attr("st", "刷新");
  btn.siblings(".up").attr("st", "修改");
}
function setuser(id, pw){
  localStorage.id = id;
  localStorage.pw = pw;
  addCookie("id", id);
  addCookie("pw", pw);
}
function resetuser(){
  localStorage.removeItem("id");
  localStorage.removeItem("pw");
  delCookie("id");
  delCookie("pw");
}
$(function(){
  if (localStorage.cu)
    localStorage.removeItem("cu");
  if (!localStorage.pw){
    $.post("getusr", function(){
      localStorage.id = getCookie("id");
      localStorage.pw = getCookie("pw");
    });
  }
  else if (!getCookie("pw")){
    addCookie("id", localStorage.id);
    addCookie("pw", localStorage.pw);
  }
  $.post("list", loadlist);
  setTimeout(function(){
    loopUpdate();
  },updatetime)
});
</script>
</head>
<body>
  <div id="header"><span></span></div>
  <div id="signs" class="scrollbar-blue">
    <div v-for="i in signs" class="sign-wrap" :sid="i.id" :key="i.id" :ismy="chkmy(i)?'1':'0'" v-s v-cloak>
      <div class="h" :style="'background-color:'+i.tic+'; color: '+greychk(i.tic)" :oid="i.own.id">
        {{i.ti}}
        <div class="delw" v-if="chkmy(i)">
          <div class="my" :style="'border-top-color:'+i.owc"></div>
          <div class="del icon-plus ro45" onclick="delsignchk(this)"></div>
          <div class="delc hidden">
            <div class="confirm" onclick="delsign(this)"></div>
            <div class="cancel" onclick="hidedelc($(this).parent())"></div>
          </div>
        </div>
        <div class="own">{{i.own.name}}</div>
        <div class="sid">{{i.id}}</div>
        <div class="ac">{{timestr(i.time)}}　{{count(i.members)+1}}/{{i.max}}</div>
      </div>
      <div class="msgh"></div>
      <textarea class="msg ro" v-model="i.msg" placeholder="留言" readonly="readonly" onclick="chmsge(this)"></textarea>
      <div class="msge h-hide">
        <div class="up" st="修改" onclick="msgeup(this)"></div>
        <div class="rs" st="刷新" onclick="msgers(this)"></div>
      </div>
      <div class="memh"></div>
      <div class="e">
        <div :class="'dname'+(chkmy(i)?'':' hide')">{{i.cu.name}}</div>
        <input class="uname" type="text" v-if="!chkmy(i)" v-model="i.cu.name" maxlength="11" placeholder="名称" required="required" />
        <div class="c btn" v-if="chkmy(i)" st="退出" style="cursor: default; color: #888; background-color: #ddd" key="own"></div>
        <div class="c btn" v-else-if="count(i.members)+1==i.max&&i.cu.isin=='加入'" st="加入" style="cursor: default; color: #888; background-color: #ddd" key="max"></div>
        <div class="c btn" v-else onclick="chstate(this)" :st="i.cu.isin" cfunc="chstate(this)" key="normal"></div>
        <div class="tips hidden" tipstr="输入名称"></div>
      </div>
      <div class="members scrollbar-none">
        <div :class="'m '+chkme(i, i.own)" :uid="i.own.id">
          {{i.own.name}}
          <div class="own" :style="'border-top-color:'+i.owc"></div>
        </div>
        <div v-for="u in i.members" :class="'m '+chkme(i, u)" :uid="u.sid" :oid="u.id">{{u.name}}</div>
      </div>
      <div class="sign-mask hidden"></div>
    </div>
    <div class="newsign blur-back">
      <div class="back"></div>
      <input class="iti" type="text" v-model="newsign.ti" style="display: none;" placeholder="主题" required="required"/>
      <div class="iti tips-left hidden" tipstr="输入主题"></div>
      <input class="iname" type="text" v-model="newsign.own" style="display: none;" placeholder="创建者名称" maxlength="11" required="required"/>
      <div class="iname tips-left hidden" tipstr="输入名称"></div>
      <select class="imax nobtn" v-model="newsign.maxsel" style="display: none;">
        <option value="0">人数</option>
        <option v-for="x in newsign.max" :value="x">{{x}}</option>
      </select>
      <!--<input class="imax" type="text" v-model="newsign.max" style="display: none;" placeholder="人数" maxlength="2" pattern="[0-9]" onkeyup="value=value.replace(/[^\d]/g,'')" onblur="if(value!='')chknum(this, 2, 48)" required="required" />-->
      <div class="imax tips-right hidden" tipstr="选择人数"></div>
      <textarea class="imsg" v-model="newsign.msg" style="display: none;" placeholder="留言(可选)" required="required"></textarea>
      <div class="newbtn" onclick="addsign(this)" cfunc="addsign(this)" style="display: none;"></div>
      <div class="icon-plus" onclick="chAddBtn(this)"></div>
    </div>
  </div>
  <div id="user"></div>
  <div id="topicon" onclick="window.open('/','_self');" title="首页"></div>
</body>
</html>
