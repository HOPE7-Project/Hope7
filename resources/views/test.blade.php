@extends('layout')
@section('content')
    

<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Funraise Donation Page Examples</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <link rel="stylesheet" href="styles/style.css"> --}}
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 

    <style>
      /*-------------------------------
Button
-------------------------------*/

.funButton {
  background: #13C5DD ;
  color: #fff;
  outline: none;
  border: 2px solid #13C5DD ;
  border-radius: 4px;
  padding: 15px 25px;
  font-weight: 600;
  font-size: 18px;
}

.rowButton25 {
  min-width: 24%;
}

.rowButton50 {
  min-width: 49%;
}

.textFunButton {
  background: #fff;
  font-weight: 600;
  color: #13C5DD ;
  outline: none;
  border: none;
  font-weight: 600;
  font-size: 18px;
}

.textFunButton i {
  font-size: 21px;
  color: #13C5DD ;
  margin-right: 7px;
}

.funButton:not(:hover) {
  background: #fff;
  color: #13C5DD ;
}
</style>
    <link rel="shortcut icon" href="https://assets.codepen.io/1097769/examplesFavicon.png">
    <script type="text/javascript" id="ftr__script" async="" src="https://09866830beaa.cdn4.forter.com/sn/09866830beaa/script.js"></script><script async="" src="https://assets-demo-2.funraise.io/widget/common/2.0/inject-form.js?orgId=67790fed-aa86-4965-b00d-0138ace5c5bd"></script><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


    <!-- Funraise Aware Code -->
    <script>
      (function(f,u,n,r,a,i,s,e){var data={window:window,document:document,tag:"script",data:"funraise",orgId:f,uri:u,common:n,client:r,script:a};var scripts;var funraiseScript;data.window[data.data]=data.window[data.data]||[];if(data.window[data.data].scriptIsLoading||data.window[data.data].scriptIsLoaded)return;data.window[data.data].loading=true;data.window[data.data].push("init",data);scripts=data.document.getElementsByTagName(data.tag)[0];funraiseScript=data.document.createElement(data.tag);funraiseScript.async=true;funraiseScript.src=data.uri+data.common+data.script+"?orgId="+data.orgId;scripts.parentNode.insertBefore(funraiseScript,scripts)})('67790fed-aa86-4965-b00d-0138ace5c5bd','https://assets-demo-2.funraise.io','/widget/common/2.0','/widget/client','/inject-form.js');
    </script>
    <script>
      window.funraise.push('create', { form: 271 });
      window.funraise.push('create', { form: 837 });
    </script>
  </head>

  <body style="height: initial; overflow: initial; position: initial;">
    <!-- Navigation -->
    {{-- <nav class="navbar fixed-top bg-white justify-content-between">
      <a href="/">
        <div class="alignMiddle">
          <img src="https://assets.codepen.io/1097769/exampleDonationPages_logo.png">
          <span class="logoText">Donation page layouts</span>
        </div>
      </a>
      <div class="nav-item dropdown d-none d-md-block">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Layouts
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <h6 class="dropdown-header">Placed</h6>
          <a class="dropdown-item" href="/placed-split.html">Story</a>
          <a class="dropdown-item" href="/placed-background.html">Background</a>
          <a class="dropdown-item" href="/placed-modern.html">Modern</a>
          <h6 class="dropdown-header">Buttons</h6>
          <a class="dropdown-item" href="/button-amounts.html">Amounts</a>
          <a class="dropdown-item" href="/button-amounts-wide.html">Amounts wide</a>
          <a class="dropdown-item" href="/button-amounts-sidebar.html">Amounts sidebar</a>
          <a class="dropdown-item" href="/button-frequency.html">Frequency</a>
          <a class="dropdown-item" href="/button-amounts-impact.html">Impact options</a>
          <a class="dropdown-item" href="/button-floating.html">Floating</a>
          <h6 class="dropdown-header">Launchers</h6>
          <a class="dropdown-item" href="/launcher-open-field.html">Open field</a>
          <a class="dropdown-item" href="/launcher-frequency-first.html">Frequency first</a>
        </div>
      </div>
    </nav> --}}

    <div class="fade-in">
      

<div class="container-lg mt-5 mb-5">
  <div class="pt-5"></div>
  <div class="row">
    <div class="col-12 col-lg-5 mt-5 pt-3">
      <h1>Your gift impacts our community</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <div class="d-flex justify-content-between mt-5">
        <button data-formid="271" data-amount="65" class="funButton rowButton25" type="button">$65</button>
        <button data-formid="271" data-amount="250" class="funButton rowButton25" type="button">$250</button>
        <button data-formid="271" data-amount="500" class="funButton rowButton25" type="button">$500</button>
        <button data-formid="271" class="funButton rowButton25" type="button">Other</button>
      </div>
      <div class="mt-4 mb-5">
        <button data-formid="271" data-frequency="m" class="textFunButton" type="button"><i data-formid="271" data-frequency="m" class="material-icons align-middle">favorite</i><span data-formid="271" data-frequency="m" class="align-middle">Give Monthly</span></button>
      </div>
    </div>
    <div class="col-12 col-lg-6 offset-lg-1">
      <img src="https://assets.codepen.io/1097769/examplesAmountImage.jpg" style="width: 100%; border-radius: 4px;">
    </div>
  </div>
</div>




    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
{{-- <iframe class="fr_funraise fr_toast" id="toast-67790fed-aa86-4965-b00d-0138ace5c5bd"
src="https://assets-demo-2.funraise.io/widget/common/2.0/toast.html?orgId=67790fed-aa86-4965-b00d-0138ace5c5bd&amp;host=000501861.codepen.website" 
style="-webkit-tap-highlight-color: transparent; transform: translate3d(0px, 0px, 0px); background: left top no-repeat
rgba(0, 0, 0, 0.004); border: 0px none transparent; display: block; height: 120px; width: 310px; bottom: 20px; left: 10px; margin: 0px; padding: 0px; z-index: 2147483647; overflow: hidden; position: fixed;"></iframe>
 --}}



{{-- <script id="09866830beaa" type="text/javascript">(
function () { var eu = "22g4zl{5jf5fjtlv1forxgiurqw1qhw2vwdwxv"; var siteId = "09866830beaa"; 
function t(t,e){for(var n=t.split(""),r=0;r<n.length;++r)n[r]=String.fromCharCode(n[r].charCodeAt(0)+e);return n.join("")}
function e(e){return t(e,-_).replace(/%SN%/g,siteId)}
function n(){var t="no"+"op"+"fn",e="g"+"a",n="n"+"ame";return window[e]&&window[e][n]===t}function r(){return!(!navigator.brave||"function"!=typeof navigator.brave.isBrave)}function o(){return document.currentScript&&document.currentScript.src}
function i(t){try{F.ex=t,n()&&F.ex.indexOf(V.uB)===-1&&(F.ex+=V.uB),r()&&F.ex.indexOf(V.uBr)===-1&&(F.ex+=V.uBr),o()&&F.ex.indexOf(V.nIL)===-1&&(F.ex+=V.nIL),window.ftr__snp_cwc||(F.ex+=V.s),C(F)}catch(e){}}
function a(t,e){function n(o){try{o.blockedURI===t&&(e(),document.removeEventListener(r,n))}catch(i){document.removeEventListener(r,n)}}var r="securitypolicyviolation";document.addEventListener(r,n),setTimeout(function(){document.removeEventListener(r,n)},2*60*1e3)}
function c(t,e,n,r){var o=!1;t="https://"+t,a(t,function(){r(!0),o=!0});var i=document.createElement("script");i.onerror=function(){if(!o)try{r(!1),o=!0}catch(t){}},i.onload=n,i.type="text/javascript",i.id="ftr__script",i.async=!0,i.src=t;
var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(i,c)}
function u(t,e,n){var r=new XMLHttpRequest;if(a(t,function(){n(new Error("CSP Violation"),!0),isErrorEventCalled=!0}),"withCredentials"in r)r.open("GET",t,!0);else{if("undefined"==typeof XDomainRequest)return;
r=new XDomainRequest,r.open("GET",t)}
r.onload=function(){"function"==typeof e&&e(r)},
r.onerror=function(t){
if("function"==typeof n&&!isErrorEventCalled)
try{n(t,!1),isErrorEventCalled=!0}catch(e){}},
r.onprogress=function(){},
r.ontimeout=function(){"function"==typeof n&&n("tim"+"eo"+"ut",!1)},setTimeout(function(){r.send()},0)}
function d(){u(y,function(n){try{var r=n.getAllResponseHeaders().toLowerCase();if(r.indexOf(x.toLowerCase())<0)return;
var o=n.getResponseHeader(x),i=t(o,-_-1);if(i){var a=i.split(":");if(a&&3===a.length){var c=a[0],u=a[1],d=a[2];switch(u){case"none":A=c+T;break;case"res":A=c+T+d;break;case"enc":A=c+e("1forxgiurqw1qhw2vq2(VQ(2vfulsw1mv");break;case"enc-res":for(var s="",v=0,l=0;v<20;++v)s+=v%3>0&&l<12?siteId.charAt(l++):F.id.charAt(v);var m=d.split(".");if(m.length>1){var h=m[0],w=m[1];A=c+T+h+"."+s+"."+w}}if(r.indexOf(S.toLowerCase())>=0){var p=n.getResponseHeader(S),g=t(p,-_-1);window.ftr__altd=g}j(V.dUAL),setTimeout(f,k,V.dUAL)}}}catch(y){}},function(t,e){i(e?V.uAS+V.cP:V.uAS)})}
function f(t){try{var e=t===V.uDF?L:A;if(!e)return;
var n=function(){try{Q(),i(t+V.uS)}catch(e){}},r=function(e){try{Q(),F.td=1*new Date-F.ts,i(e?t+V.uF+V.cP:t+V.uF),t===V.uDF&&d()}catch(n){i(V.eUoe)}};c(e,void 0,n,r)}catch(o){i(t+V.eTlu)}}var s="fort",v="erTo",l="ken",m=s+v+l,h=10,w={write:function(t,e,n,r){void 0===r&&(r=!0);var o,i;if(n?(o=new Date,o.setTime(o.getTime()+24*n*60*60*1e3),i="; expires="+o.toGMTString()):i="",!r)return void(document.cookie=escape(t)+"="+escape(e)+i+"; path=/");for(var a=1,c=document.domain.split("."),u=h,d=!0;d&&c.length>=a&&u>0;){var f=c.slice(-a).join(".");document.cookie=escape(t)+"="+escape(e)+i+"; path=/; domain="+f;var s=w.read(t);null!=s&&s==e||(f="."+f,document.cookie=escape(t)+"="+escape(e)+i+"; path=/; domain="+f),d=document.cookie.indexOf(t+"="+e)===-1,a++,u--}}
{{-- ,read:function(t){var e=null;try{for(var n=escape(t)+"=",r=document.cookie.split(";"),o=32,i=0;i<r.length;i++){for(var a=r[i];a.charCodeAt(0)===o;)a=a.substring(1,a.length);0===a.indexOf(n)&&(e=unescape(a.substring(n.length,a.length)))}}finally{return e}}},p="13";p+="ck";var g=function(t){var e=function(){var e=document.createElement("link");return e.setAttribute("rel","pre"+"con"+"nect"),e.setAttribute("cros"+"sori"+"gin","anonymous"),e.onload=function(){document.head.removeChild(e)},e.onerror=function(t){document.head.removeChild(e)},e.setAttribute("href",t),document.head.appendChild(e),e};if(document.head){var n=e();setTimeout(function(){document.head.removeChild(n)},3e3)}},_=3,y=e(eu||"22g4zl{5jf5fjtlv1forxgiurqw1qhw2vwdwxv"),T=t("1forxgiurqw1qhw2",-_),x=t("[0Uhtxhvw0LG",-_),S=t("[0Fruuhodwlrq0LG",-_),A,L=e("(VQ(1fgq71iruwhu1frp2vq2(VQ(2vfulsw1mv"),E=e("(VQ(1fgq71iruwhu1frp2vqV2(VQ(2vfulsw1mv"),k=10;window.ftr__startScriptLoad=1*new Date;var U=function(t){var e=1e3,n="ft"+"r:tok"+"enR"+"eady";window.ftr__tt&&clearTimeout(window.ftr__tt),window.ftr__tt=setTimeout(function(){try{delete window.ftr__tt,t+="_tt";var e=document.createEvent("Event");e.initEvent(n,!1,!1),e.detail=t,document.dispatchEvent(e)}catch(r){}},e)},C=function(t){var e=function(t){return t||""},n=e(t.id)+"_"+e(t.ts)+"_"+e(t.td)+"_"+e(t.ex)+"_"+e(p);w.write(m,n,1825,!0),U(n),window.ftr__gt=n},D=function(){var t=w.read(m)||"",e=t.split("_"),n=function(t){return e[t]||void 0};return{id:n(0),ts:n(1),td:n(2),ex:n(3),vr:n(4)}},q=function(){for(var t={},e="fgu",n=[],r=0;r<256;r++)n[r]=(r<16?"0":"")+r.toString(16);var o=function(t,e,r,o,i){var a=i?"-":"";return n[255&t]+n[t>>8&255]+n[t>>16&255]+n[t>>24&255]+a+n[255&e]+n[e>>8&255]+a+n[e>>16&15|64]+n[e>>24&255]+a+n[63&r|128]+n[r>>8&255]+a+n[r>>16&255]+n[r>>24&255]+n[255&o]+n[o>>8&255]+n[o>>16&255]+n[o>>24&255]},i=function(){if(window.Uint32Array&&window.crypto&&window.crypto.getRandomValues){var t=new window.Uint32Array(4);return window.crypto.getRandomValues(t),{d0:t[0],d1:t[1],d2:t[2],d3:t[3]}}return{d0:4294967296*Math.random()>>>0,d1:4294967296*Math.random()>>>0,d2:4294967296*Math.random()>>>0,d3:4294967296*Math.random()>>>0}},a=function(){var t="",e=function(t,e){for(var n="",r=t;r>0;--r)n+=e.charAt(1e3*Math.random()%e.length);return n};return t+=e(2,"0123456789"),t+=e(1,"123456789"),t+=e(8,"0123456789")};return t.safeGenerateNoDash=function(){try{var t=i();return o(t.d0,t.d1,t.d2,t.d3,!1)}catch(n){try{return e+a()}catch(n){}}},t.isValidNumericalToken=function(t){return t&&t.toString().length<=11&&t.length>=9&&parseInt(t,10).toString().length<=11&&parseInt(t,10).toString().length>=9},t.isValidUUIDToken=function(t){return t&&32===t.toString().length&&/^[a-z0-9]+$/.test(t)},t.isValidFGUToken=function(t){return 0==t.indexOf(e)&&t.length>=12},t}(),V={uDF:"UDF",dUAL:"dUAL",uAS:"UAS",mLd:"1",eTlu:"2",eUoe:"3",uS:"4",uF:"9",tmos:["T5","T10","T15","T30","T60"],tmosSecs:[5,10,15,30,60],bIR:"43",uB:"u",uBr:"b",cP:"c",nIL:"i",s:"s"},b=function(t,e){for(var n=V.tmos,r=0;r<n.length;r++)if(t+n[r]===e)return!0;return!1};try{var F=D();try{F.id&&(q.isValidNumericalToken(F.id)||q.isValidUUIDToken(F.id)||q.isValidFGUToken(F.id))?window.ftr__ncd=!1:(F.id=q.safeGenerateNoDash(),window.ftr__ncd=!0),F.ts=window.ftr__startScriptLoad,C(F),window.ftr__snp_cwc=!!w.read(m),window.ftr__snp_cwc||(L=E);for(var I="for"+"ter"+".co"+"m",R="ht"+"tps://c"+"dn9."+I,B="ht"+"tps://"+F.id+"-"+siteId+".cd"+"n."+I,G="http"+"s://cd"+"n3."+I,O=[R,B,G],M=0;M<O.length;M++)g(O[M]);var N=new Array(V.tmosSecs.length),j=function(t){for(var e=0;e<V.tmosSecs.length;e++)N[e]=setTimeout(i,1e3*V.tmosSecs[e],t+V.tmos[e])},Q=function(){for(var t=0;t<V.tmosSecs.length;t++)clearTimeout(N[t])};b(V.uDF,F.ex)?loadAlternate():(j(V.uDF),setTimeout(f,k,V.uDF))}catch(H){i(V.mLd)}}catch(H){}})();</script> --}}



<script src="{{asset('js/test.js')}}"></script>
<iframe class="fr_funraise fr_form" id="fr_formid_271-1" allowfullscreen="true" allowtransparency="true" frameborder="0" title="Transaction Form" 
src="https://assets-demo-2.funraise.io/widget/common/2.0/form.html?href=https%3A%2F%2Fassets-demo-2.funraise.io&amp;common=%2Fwidget%2Fcommon%2F2.0&amp;client=%2Fwidget%2Fclient&amp;orgid=67790fed-aa86-4965-b00d-0138ace5c5bd&amp;formid=271-1" style="-webkit-tap-highlight-color: transparent; transform: translate3d(0px, 0px, 0px); background: left top no-repeat rgba(0, 0, 0, 0.004); border: 0px none transparent; display: none; height: 100%; left: 0px; margin: 0px; padding: 0px; position: fixed; top: 0px; width: 100%; z-index: 2147483647;"></iframe>


{{-- 
<iframe class="fr_funraise fr_form" id="fr_formid_837-2" allowfullscreen="true" allowtransparency="true" frameborder="0" title="Transaction Form" src="https://assets-demo-2.funraise.io/widget/common/2.0/form.html?href=https%3A%2F%2Fassets-demo-2.funraise.io&amp;common=%2Fwidget%2Fcommon%2F2.0&amp;client=%2Fwidget%2Fclient&amp;orgid=67790fed-aa86-4965-b00d-0138ace5c5bd&amp;formid=837-2"
 style="-webkit-tap-highlight-color: transparent; transform: translate3d(0px, 0px, 0px); background: left top no-repeat rgba(0, 0, 0, 0.004); border: 0px none transparent; display: none; height: 100%; left: 0px; margin: 0px; padding: 0px; position: fixed; top: 0px; width: 100%; z-index: 2147483647;"></iframe>
</body> --}}

</html>

@endsection