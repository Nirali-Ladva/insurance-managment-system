﻿!function (s) { s.fn.rgbslide = function (e) { var l = 0; for (s(this).children().each(function () { l++, s(this).prop("class", "sliderBox"), s(this).prop("id", "sl" + l) }), e = e || 3300, s("head").prepend("<style>.sliderBox{background-color:#222;z-index:-1;margin:0;position:absolute;left:0;top:0;width:100%;height:80vh;}#sliderControl{padding:0;text-align:center;z-index:100;height:22px;width:100%;position:absolute;left:0;bottom:0;background:rgba(0,0,0,0.4)}.sliderBull{transition:color 0.2s;cursor:pointer;highlight:none;color:#aaa;padding-left:4px;padding-right:4px;margin:0;text-align:center;display:inline;font-size:37px;position:relative;top:-16px;}.sliderArr{transition:background 0.2s;z-index:100;position:absolute;top:32vh;bottom:48vh;width:50px;height:50px;padding:8px;background:rgba(0,0,0,0.05);border-radius:0px 5px 5px 0px;cursor:pointer;}.sliderArr:hover{background:rgba(0,0,0,0.4)}body{overflow-x:hidden}#" + s(this).prop("id") + '{margin: 0; background: #ddd; width: 100vw;height: 80vh;overflow: hidden; position: relative;font-family: "Quicksand","Segoe UI", Tahoma, Geneva, Verdana, sans-serif"; color:#eee}</style><link href="https://fonts.googleapis.com/css?family=Quicksand:300" rel="stylesheet"> '), s(this).append('<div id="sliderControl"></div>'), s(this).append('<img class="sliderArr" id="sliderLeft" style="left:-5px;" src="http://i.imgur.com/5aJOioi.png"/>'), s(this).append('<img class="sliderArr" style="transform:rotate(180deg);right:-5px;" id="sliderRight" src="http://i.imgur.com/5aJOioi.png"/>'), i = 1; i <= l; i++) s("#sliderControl").append('<p class="sliderBull" id="sb' + i + '"> &bull; </p>'); s("#sliderControl").hover(function () { o = !o }), s(".sliderArr").hover(function () { o = !o }); var o = !0, r = 1, t = !1; return s("#sl1").css("z-index", "1"), s("#sb1").css("color", "#fff"), s("#sliderLeft").click(function () { s(".sliderBox").css("z-index", "0"), s(".sliderBox").css("left", "0"), s(".sliderBull").css("color", "#aaa"), r--, 0 == r && (r = l), r == l ? (s("#sl1").css("z-index", "1"), s("#sl" + l).css("z-index", "2"), s("#sl" + l).css("left", "-100%"), s("#sl" + l).animate({ left: "0" }, 500), s("#sb" + l).css("color", "#fff")) : (s("#sl" + (r + 1)).css("z-index", "1"), s("#sl" + r).css("z-index", "2"), s("#sl" + r).css("left", "-100%"), s("#sl" + r).animate({ left: "0" }, 500), s("#sb" + r).css("color", "#fff")), t = !0, window.setTimeout(function () { t = !1 }, e) }), s("#sliderRight").click(function () { s(".sliderBox").css("z-index", "0"), s(".sliderBox").css("left", "0"), s(".sliderBull").css("color", "#aaa"), r == l && (r = 0), r++, 1 == r ? (s("#sl" + l).css("z-index", "2"), s("#sl1").css("z-index", "1"), s("#sl" + l).animate({ left: "-100%" }, 500), s("#sb1").css("color", "#fff")) : (s("#sl" + (r - 1)).css("z-index", "2"), s("#sl" + r).css("z-index", "1"), s("#sl" + (r - 1)).animate({ left: "-100%" }, 500), s("#sb" + r).css("color", "#fff")), t = !0, window.setTimeout(function () { t = !1 }, e) }), s(".sliderBull").click(function () { if (bullNum = parseInt(s(this).prop("id").replace("sb", "")), bullNum != r - 1) { s(".sliderBull").css("color", "#aaa"), s(s(this)).css("color", "#fff"), s(".sliderBox").css("left", "0"); for (var i = 1; l >= i; i++) if ("1" == s("#sl" + i).css("z-index")) { var o = s("#sl" + i); break } s(".sliderBox").css("z-index", "0"), o.css("z-index", "2"), s("#sl" + bullNum).css("z-index", "1"), o.animate({ left: "-100%" }, 500), r = bullNum == l ? 0 : bullNum, t = !0, window.setTimeout(function () { t = !1 }, e) } }), window.setInterval(function () { o && !t && (r == l && (r = 0), r++, s(".sliderBox").css("z-index", "0"), s(".sliderBox").css("left", "0"), s(".sliderBull").css("color", "#aaa"), 1 == r ? (s("#sl" + l).css("z-index", "2"), s("#sl1").css("z-index", "1"), s("#sl" + l).animate({ left: "-100%" }, 500), s("#sb1").css("color", "#fff")) : (s("#sl" + (r - 1)).css("z-index", "2"), s("#sl" + r).css("z-index", "1"), s("#sl" + (r - 1)).animate({ left: "-100%" }, 500), s("#sb" + r).css("color", "#fff"))) }, e), this } }(jQuery);
// Made with ♥ by RGBPlaza © 2016