"use strict";var tabFilter,menu=[],liIndex,curNav,delMenu;layui.define(["element","jquery"],function(t){var e,i=layui.element(),n=layui.jquery,o=function(){this.tabConfig={closed:!0,openTabNum:void 0,tabFilter:"bodyTab",url:void 0}};o.prototype.render=function(){var t=this.tabConfig.url;n.get(t,function(t){if(""==n(".navBar").html()){n(".navBar").html(navBar(t)).height(n(window).height()-245),i.init(),n(window).resize(function(){n(".navBar").height(n(window).height()-245)})}})},o.prototype.set=function(t){var e=this;return n.extend(!0,e.tabConfig,t),e},o.prototype.getLayId=function(t){return n(".layui-tab-title.top_tab li").each(function(){n(this).find("cite").text()==t&&(e=n(this).attr("lay-id"))}),e},o.prototype.hasTab=function(t){var e=-1;return n(".layui-tab-title.top_tab li").each(function(){n(this).find("cite").text()==t&&(e=1)}),e};var a=0;o.prototype.tabAdd=function(t){window.sessionStorage.getItem("menu")&&(menu=JSON.parse(window.sessionStorage.getItem("menu")));var e=this,o=(e.tabConfig.closed,e.tabConfig.openTabNum);if(tabFilter=e.tabConfig.tabFilter,"_blank"==t.attr("target"))window.location.href=t.attr("data-url");else{var s="";if(void 0!=t.find("i.iconfont,i.layui-icon").attr("data-icon")&&(void 0!=t.find("i.iconfont").attr("data-icon")?s+='<i class="iconfont '+t.find("i.iconfont").attr("data-icon")+'"></i>':s+='<i class="layui-icon">'+t.find("i.layui-icon").attr("data-icon")+"</i>"),-1==e.hasTab(t.find("cite").text())&&0==t.siblings("dl.layui-nav-child").length){if(n(".layui-tab-title.top_tab li").length==o)return void layer.msg("只能同时打开"+o+"个选项卡哦。不然系统会卡的！");a++,s+="<cite>"+t.find("cite").text()+"</cite>",s+='<i class="layui-icon layui-unselect layui-tab-close" data-id="'+a+'">&#x1006;</i>',i.tabAdd(tabFilter,{title:s,content:"<iframe src='"+t.attr("data-url")+"' data-id='"+a+"'></frame>",id:(new Date).getTime()});var r={icon:void 0!=t.find("i.iconfont").attr("data-icon")?t.find("i.iconfont").attr("data-icon"):t.find("i.layui-icon").attr("data-icon"),title:t.find("cite").text(),href:t.attr("data-url"),layId:(new Date).getTime()};menu.push(r),window.sessionStorage.setItem("menu",JSON.stringify(menu)),window.sessionStorage.setItem("curmenu",JSON.stringify(r)),i.tabChange(tabFilter,e.getLayId(t.find("cite").text())),e.tabMove()}else{var r={icon:void 0!=t.find("i.iconfont").attr("data-icon")?t.find("i.iconfont").attr("data-icon"):t.find("i.layui-icon").attr("data-icon"),title:t.find("cite").text(),href:t.attr("data-url")};window.sessionStorage.setItem("curmenu",JSON.stringify(r)),i.tabChange(tabFilter,e.getLayId(t.find("cite").text())),e.tabMove()}}},o.prototype.tabMove=function(){n(window).on("resize",function(){var t=(n("#top_tabs_box"),n("#top_tabs_box").width()),e=n("#top_tabs"),i=n("#top_tabs").width(),o=e.find("li.layui-this"),a=document.getElementById("top_tabs");if(!(i>t))return e.off("mousedown",down),e.off("mousemove",move),e.off("mouseup",end),e.off("touchstart",down),e.off("touchmove",move),e.off("touchend",end),e.removeAttr("style"),!1;var s=function(){f=!0;var t;t=event.touches?event.touches[0]:event,m.x=t.clientX,c=a.offsetLeft},r=function(){if(window.getSelection?window.getSelection().removeAllRanges():document.selection.empty(),f){var e;e=event.touches?event.touches[0]:event,u=e.clientX-m.x,l=c+u,l=l>0?0:l<t-i?t-i:c+u,a.style.left=l+"px",document.addEventListener("touchmove",function(){event.preventDefault()},!1)}},d=function(){f=!1};o.position().left>t||o.position().left+t>i?e.css("left",t-i):e.css("left",-o.position().left);var u,c,l,f=!1,m={x:0,y:0};e.on("mousedown",s),e.on("mousemove",r),n(document).on("mouseup",d),e.on("touchstart",s),e.on("touchmove",r),e.on("touchend",d)}).resize()},n("body").on("click",".top_tab li",function(){var t="",e=JSON.parse(window.sessionStorage.getItem("menu"));t=e[n(this).index()-1],0==n(this).index()?window.sessionStorage.setItem("curmenu",""):(window.sessionStorage.setItem("curmenu",JSON.stringify(t)),"undefined"==window.sessionStorage.getItem("curmenu")&&(curNav!=JSON.stringify(delMenu)?window.sessionStorage.setItem("curmenu",curNav):window.sessionStorage.setItem("curmenu",JSON.stringify(e[liIndex-1])))),i.tabChange(tabFilter,n(this).attr("lay-id")).init()}),n("body").on("click",".top_tab li i.layui-tab-close",function(){liIndex=n(this).parent("li").index();var t=JSON.parse(window.sessionStorage.getItem("menu"));delMenu=t[liIndex-1];var e="undefined"==window.sessionStorage.getItem("curmenu")?void 0:""==window.sessionStorage.getItem("curmenu")?"":JSON.parse(window.sessionStorage.getItem("curmenu"));JSON.stringify(e)!=JSON.stringify(t[liIndex-1])?curNav=JSON.stringify(e):n(this).parent("li").length>liIndex?(window.sessionStorage.setItem("curmenu",e),curNav=e):(window.sessionStorage.setItem("curmenu",JSON.stringify(t[liIndex-1])),curNav=JSON.stringify(t[liIndex-1])),t.splice(liIndex-1,1),window.sessionStorage.setItem("menu",JSON.stringify(t)),i.tabDelete("bodyTab",n(this).parent("li").attr("lay-id")).init(),(new o).tabMove()});var s=new o;t("bodyTab",function(t){return s.set(t)})});