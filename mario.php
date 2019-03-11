<html lang="en-us" data-blockbyte-bs-uid="72318"><head>
    <meta charset="utf-8">
    <title>Super Mario Bros in HTML5</title>

    <link href="mario.css" rel="stylesheet">
    <link href="Fonts/stylesheet.css" rel="stylesheet">
    
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-9602208238522604.js"></script><script src="data.js"></script>
    <script src="editor.js"></script>
    <script src="events.js"></script>
    <script src="generator.js"></script>
    <script src="library.js"></script>
    <script src="load.js"></script>
    <script src="maps.js"></script>
    <script src="mario.js"></script>
    <script src="quadrants.js"></script>
    <script src="sounds.js"></script>
    <script src="sprites.js"></script>
    <script src="things.js"></script>
    <script src="toned.js"></script>
    <script src="triggers.js"></script>
    <script src="upkeep.js"></script>
    <script src="utility.js"></script>
<style>
#newWin:hover {opacity:1}
#newWin {position: absolute;
    z-index: 99;
    top: 50px;
    right: 10px;
    display:block;
	opacity: 0.4;}
</style>
<script type="text/javascript">

function init() {
 var isInIFrame = (window.location != window.parent.location); 
if(isInIFrame==true){

}
else {
document.getElementById('newWin').style.display = "none";
}
}
window.onload = init;



</script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000"
    },
    "button": {
      "background": "#f1d600"
    }
  },
  "theme": "edgeless",
  "content": {
    "href": "http://super-nintendo-emulator.com/page/privacy-policy-2"
  }
})});
</script>
<link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=supermarioemulator.com" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=supermarioemulator.com"></script><link rel="preload" href="https://pagead2.googlesyndication.com/pagead/js/r20190306/r20190131/show_ads_impl.js" as="script"><style class="blockbyte-bs-style" data-name="content">body>div#blockbyte-bs-indicator>div{opacity:0;pointer-events:none}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible,body>iframe#blockbyte-bs-overlay.blockbyte-bs-visible{opacity:1;pointer-events:auto}body.blockbyte-bs-noscroll{overflow:hidden !important}body>div#blockbyte-bs-indicator>div{position:absolute;transform:translate3d(-40px, 0, 0);top:0;left:0;width:40px !important;height:100%;background:rgba(0,0,0,0.5);border-radius:0 10px 10px 0;transition:opacity 0.3s, transform 0.3s;z-index:2}body>div#blockbyte-bs-indicator>div>span{-webkit-mask:no-repeat center/32px;-webkit-mask-image:url(chrome-extension://jdbnofccmhefkmjbkkdkfiicjkgofkdh/img/icon-bookmark.svg);background-color:#ffffff;position:absolute;display:block;top:0;left:0;width:100%;height:100%}body>div#blockbyte-bs-indicator[data-pos='right']{left:auto;right:0}body>div#blockbyte-bs-indicator[data-pos='right']>div{transform:translate3d(40px, 0, 0);left:auto;right:0;border-radius:10px 0 0 10px}body>div#blockbyte-bs-indicator.blockbyte-bs-fullHeight>div{border-radius:0}body>div#blockbyte-bs-indicator.blockbyte-bs-hover>div{transform:translate3d(0, 0, 0);opacity:1}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb{height:100% !important;top:0 !important}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div{background:transparent}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div>span{-webkit-mask-position-y:20px}body>iframe#blockbyte-bs-sidebar{width:350px;max-width:none;height:0;z-index:2147483646;background-color:rgba(0,0,0,0.6) !important;border:none;display:block !important;transform:translate3d(-350px, 0, 0);transition:width 0s 0.3s, height 0s 0.3s, opacity 0.3s, transform 0.3s}body>iframe#blockbyte-bs-sidebar[data-pos='right']{left:auto;right:0;transform:translate3d(350px, 0, 0)}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible{width:calc(100% + 350px);height:100%;transform:translate3d(0, 0, 0);transition:opacity 0.3s, transform 0.3s}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask{background:none !important}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask:not(.blockbyte-bs-hover){width:calc(350px + 50px)}body>iframe#blockbyte-bs-overlay{width:100%;max-width:none;height:100%;z-index:2147483647;border:none;background:rgba(0,0,0,0.5) !important;transition:opacity 0.3s}
</style><style></style></head>

<body onload="FullScreenMario()"><div role="dialog" aria-live="polite" aria-label="cookieconsent" aria-describedby="cookieconsent:desc" class="cc-window cc-banner cc-type-info cc-theme-edgeless cc-bottom cc-color-override-688238583 cc-invisible" style="display: none;"><!--googleoff: all--><span id="cookieconsent:desc" class="cc-message">This website uses cookies to ensure you get the best experience on our website. <a aria-label="learn more about cookies" role="button" tabindex="0" class="cc-link" href="http://super-nintendo-emulator.com/page/privacy-policy-2" target="_blank">Learn more</a></span><div class="cc-compliance"><a aria-label="dismiss cookie message" role="button" tabindex="0" class="cc-btn cc-dismiss">Got it!</a></div><!--googleon: all--></div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-436053-24"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-436053-24');
</script>



<div id="newWin"><a href="http://supermarioemulator.com" target="_top" title="Super Mario Bros Emulator">
<img src="new_window.svg" class="nwin" title="Play Super Mario Bros Emulator in your computer" alt="Super Mario Bros Emulator" style="
    width: 75px;
    height: 75px;
">

</a></div>
<div style="position: absolute;
    z-index: 99;
    top: 421px;
    left: 27px;"><a href="http://online-emulators.com" target="_top" title="SEGA Megadrive / SEGA Genesis / Super Nintendo Emulator"><img src="super-nintendo-sega-emulators.png" title="SEGA Megadrive / SEGA Genesis Emulator" alt="SEGA Megadrive / SEGA Genesis Emulator">

</a></div>
<div style="
    position: absolute;
    z-index: 99;
    top: 433px;
    left: 410px;
    width: 54%;
    height: 152px;
    ">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Mario -->
<ins class="adsbygoogle" style="display: block; height: 280px;" data-ad-client="ca-pub-9602208238522604" data-ad-slot="5959867308" data-ad-format="auto" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:408px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:408px;background-color:transparent;"><iframe width="408" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0px;width:408px;height:280px;"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>

<iframe id="blockbyte-bs-sidebar" class="notranslate" data-pos="right"></iframe><div id="blockbyte-bs-indicator" class="blockbyte-bs-fullHeight blockbyte-bs-visible" data-pos="right" style="width: 20px; height: 100%; top: 0%;"><div><span></span></div></div><iframe id="google_osd_static_frame_6351673334359" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe><canvas width="1310" height="697" style="width: 1310px; height: 697px;"></canvas><table id="data_display" class="display" style="width: 1324px;"><td class="indisplay">SCORE<br>0</td><td class="indisplay">COINS<br>0</td><td class="indisplay">WORLD<br>1-1</td><td class="indisplay">TIME<br>387</td><td class="indisplay">LIVES<br>3</td></table><div class="text" style="margin-left: 80px; margin-top: 52px;"><div style="width:350px;max-height:189px;background-color:#d64d00;border-radius:7px;box-shadow:3px 3px #efb28b inset, -3px -3px black inset;background-image: url(&quot;Theme/Greeting.gif&quot;), url(&quot;Theme/Greeting.gif&quot;), url(&quot;Theme/Greeting.gif&quot;), url(&quot;Theme/Greeting.gif&quot;);background-repeat: no-repeat;background-position: 7px 7px, 336px 7px, 7px 168px, 336px 168px">  <p style="text-align:left;padding:7px 0 11px 11px;color:#ffcccc;font-family: Super Plumber Bros;font-size:77px;text-shadow:3px 8px black">    <span style="font-size:84px">super</span>    <br><br>    <span style="font-size:75px;line-height:76px">MARIO HTML5</span>  </p></div><iframe src="adsense.html" style="width: 485px;height:70px; border:none" scrolling="no"></iframe><p id="explanation" style="text-align:center;<!--/*text-shadow:2px 2px 1px black;*/-->margin-left:7px;">  Arrow/WASD keys move  <br>  Shift to fire/sprint  <br>  P/M to pause/mute</p></div></body><iframe id="google_shimpl" style="display: none;"></iframe><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20190306/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-9602208238522604" style="display: none;"></iframe></html>
