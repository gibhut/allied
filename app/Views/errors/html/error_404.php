
<!-- DEBUG-VIEW START 5 APPPATH\Views\layouts\master.php -->
<!-- DEBUG-VIEW START 1 APPPATH\Views\layouts\header.php -->
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <script type="text/javascript"  id="debugbar_loader" data-time="1660363003.077633" src="http://localhost/?debugbar"></script><script type="text/javascript"  id="debugbar_dynamic_script"></script><style type="text/css"  id="debugbar_dynamic_style"></style><script class="kint-rich-script">void 0===window.kintShared&&(window.kintShared=function(){"use strict";var e={dedupe:function(e,n){return[].forEach.call(document.querySelectorAll(e),function(e){e!==(n=!n||!n.ownerDocument.contains(n)?e:n)&&e.parentNode.removeChild(e)}),n},runOnce:function(e){"complete"===document.readyState?e():window.addEventListener("load",e)}};return window.addEventListener("click",function(e){var n;e.target.classList.contains("kint-ide-link")&&((n=new XMLHttpRequest).open("GET",e.target.href),n.send(null),e.preventDefault())}),e}());
        void 0===window.kintRich&&(window.kintRich=function(){"use strict";var l={selectText:function(e){var t=window.getSelection(),a=document.createRange();a.selectNodeContents(e),t.removeAllRanges(),t.addRange(a)},toggle:function(e,t){var a=l.getChildren(e);a&&(e.classList.toggle("kint-show",t),1===a.childNodes.length&&(a=a.childNodes[0].childNodes[0])&&a.classList&&a.classList.contains("kint-parent")&&l.toggle(a,t))},toggleChildren:function(e,t){var a=l.getChildren(e);if(a){var o=a.getElementsByClassName("kint-parent"),n=o.length;for(void 0===t&&(t=e.classList.contains("kint-show"));n--;)l.toggle(o[n],t)}},switchTab:function(e){var t=e.previousSibling,a=0;for(e.parentNode.getElementsByClassName("kint-active-tab")[0].classList.remove("kint-active-tab"),e.classList.add("kint-active-tab");t;)1===t.nodeType&&a++,t=t.previousSibling;for(var o=e.parentNode.nextSibling.childNodes,n=0;n<o.length;n++)n===a?(o[n].classList.add("kint-show"),1===o[n].childNodes.length&&(t=o[n].childNodes[0].childNodes[0])&&t.classList.contains("kint-parent")&&l.toggle(t,!0)):o[n].classList.remove("kint-show")},mktag:function(e){return"<"+e+">"},openInNewWindow:function(e){var t=window.open();t&&(t.document.open(),t.document.write(l.mktag("html")+l.mktag("head")+l.mktag("title")+"Kint ("+(new Date).toISOString()+")"+l.mktag("/title")+l.mktag('meta charset="utf-8"')+l.mktag('script class="kint-rich-script" nonce="'+l.script.nonce+'"')+l.script.innerHTML+l.mktag("/script")+l.mktag('style class="kint-rich-style" nonce="'+l.style.nonce+'"')+l.style.innerHTML+l.mktag("/style")+l.mktag("/head")+l.mktag("body")+'<input class="kint-note-input" placeholder="Take some notes!"><div class="kint-rich">'+e.parentNode.outerHTML+"</div>"+l.mktag("/body")),t.document.close())},sortTable:function(e,a){var t=e.tBodies[0];[].slice.call(e.tBodies[0].rows).sort(function(e,t){if(e=e.cells[a].textContent.trim().toLocaleLowerCase(),t=t.cells[a].textContent.trim().toLocaleLowerCase(),isNaN(e)||isNaN(t)){if(isNaN(e)&&!isNaN(t))return 1;if(isNaN(t)&&!isNaN(e))return-1}else e=parseFloat(e),t=parseFloat(t);return e<t?-1:t<e?1:0}).forEach(function(e){t.appendChild(e)})},showAccessPath:function(e){for(var t=e.childNodes,a=0;a<t.length;a++)if(t[a].classList.contains("access-path"))return t[a].classList.toggle("kint-show"),void(t[a].classList.contains("kint-show")&&l.selectText(t[a]))},showSearchBox:function(e){var t=e.querySelector(".kint-search");t&&(t.classList.toggle("kint-show"),t.classList.contains("kint-show")?(e.classList.add("kint-show"),t.focus(),t.select(),l.search(e.parentNode,t.value)):e.parentNode.classList.remove("kint-search-root"))},search:function(e,t){e.querySelectorAll(".kint-search-match").forEach(function(e){e.classList.remove("kint-search-match")}),e.classList.remove("kint-search-match"),e.classList.toggle("kint-search-root",t.length),t.length&&l.findMatches(e,t)},findMatches:function(e,t){var a,o,n,r=e.cloneNode(!0);if(r.querySelectorAll(".access-path").forEach(function(e){e.remove()}),-1!=r.textContent.toUpperCase().indexOf(t.toUpperCase())){for(s in e.classList.add("kint-search-match"),e.childNodes)if("DD"==e.childNodes[s].tagName){a=e.childNodes[s];break}if(a)if([].forEach.call(a.childNodes,function(e){"DL"==e.tagName?l.findMatches(e,t):"UL"==e.tagName&&(e.classList.contains("kint-tabs")?o=e.childNodes:e.classList.contains("kint-tab-contents")&&(n=e.childNodes))}),o&&n&&o.length==n.length)for(var s=0;s<o.length;s++){var i=!1;-1!=o[s].textContent.toUpperCase().indexOf(t.toUpperCase())?i=!0:((r=n[s].cloneNode(!0)).querySelectorAll(".access-path").forEach(function(e){e.remove()}),-1!=r.textContent.toUpperCase().indexOf(t.toUpperCase())&&(i=!0)),i&&(o[s].classList.add("kint-search-match"),[].forEach.call(n[s].childNodes,function(e){"DL"==e.tagName&&l.findMatches(e,t)}))}}},getParentByClass:function(e,t){for(;(e=e.parentNode)&&e.classList&&!e.classList.contains(t););return e},getParentHeader:function(e,t){for(var a=e.nodeName.toLowerCase();"dd"!==a&&"dt"!==a&&l.getParentByClass(e,"kint-rich");)a=(e=e.parentNode).nodeName.toLowerCase();return l.getParentByClass(e,"kint-rich")?(e="dd"===a&&t?e.previousElementSibling:e)&&"dt"===e.nodeName.toLowerCase()&&e.classList.contains("kint-parent")?e:void 0:null},getChildren:function(e){for(;(e=e.nextElementSibling)&&"dd"!==e.nodeName.toLowerCase(););return e},isFolderOpen:function(){if(l.folder&&l.folder.querySelector("dd.kint-foldout"))return l.folder.querySelector("dd.kint-foldout").previousSibling.classList.contains("kint-show")},initLoad:function(){l.style=window.kintShared.dedupe("style.kint-rich-style",l.style),l.script=window.kintShared.dedupe("script.kint-rich-script",l.script),l.folder=window.kintShared.dedupe(".kint-rich.kint-folder",l.folder);var t,e=document.querySelectorAll("input.kint-search");[].forEach.call(e,function(t){function e(e){window.clearTimeout(a),t.value!==o&&(a=window.setTimeout(function(){o=t.value,l.search(t.parentNode.parentNode,o)},500))}var a=null,o=null;t.removeEventListener("keyup",e),t.addEventListener("keyup",e)}),l.folder&&(t=l.folder.querySelector("dd"),[].forEach.call(document.querySelectorAll(".kint-rich.kint-file"),function(e){e.parentNode!==l.folder&&t.appendChild(e)}),document.body.appendChild(l.folder),l.folder.classList.add("kint-show"))},keyboardNav:{targets:[],target:0,active:!1,fetchTargets:function(){var e=l.keyboardNav.targets[l.keyboardNav.target];l.keyboardNav.targets=[],document.querySelectorAll(".kint-rich nav, .kint-tabs>li:not(.kint-active-tab)").forEach(function(e){l.isFolderOpen()&&!l.folder.contains(e)||0===e.offsetWidth&&0===e.offsetHeight||l.keyboardNav.targets.push(e)}),e&&-1!==l.keyboardNav.targets.indexOf(e)&&(l.keyboardNav.target=l.keyboardNav.targets.indexOf(e))},sync:function(e){var t=document.querySelector(".kint-focused");t&&t.classList.remove("kint-focused"),l.keyboardNav.active&&((t=l.keyboardNav.targets[l.keyboardNav.target]).classList.add("kint-focused"),e||l.keyboardNav.scroll(t))},scroll:function(e){var t,a;e!==l.folder.querySelector("dt > nav")&&(a=(t=function(e){return e.offsetTop+(e.offsetParent?t(e.offsetParent):0)})(e),l.isFolderOpen()?(e=l.folder.querySelector("dd.kint-foldout")).scrollTo(0,a-e.clientHeight/2):window.scrollTo(0,a-window.innerHeight/2))},moveCursor:function(e){for(l.keyboardNav.target+=e;l.keyboardNav.target<0;)l.keyboardNav.target+=l.keyboardNav.targets.length;for(;l.keyboardNav.target>=l.keyboardNav.targets.length;)l.keyboardNav.target-=l.keyboardNav.targets.length;l.keyboardNav.sync()},setCursor:function(e){if(l.isFolderOpen()&&!l.folder.contains(e))return!1;l.keyboardNav.fetchTargets();for(var t=0;t<l.keyboardNav.targets.length;t++)if(e===l.keyboardNav.targets[t])return l.keyboardNav.target=t,!0;return!1}},mouseNav:{lastClickTarget:null,lastClickTimer:null,lastClickCount:0,renewLastClick:function(){window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTimer=window.setTimeout(function(){l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTimer=null,l.mouseNav.lastClickCount=0},250)}},style:null,script:null,folder:null};return window.addEventListener("click",function(e){var t=e.target;if(l.mouseNav.lastClickTarget&&l.mouseNav.lastClickTimer&&l.mouseNav.lastClickCount)if(t=l.mouseNav.lastClickTarget,1===l.mouseNav.lastClickCount)l.toggleChildren(t.parentNode),l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.mouseNav.lastClickCount++,l.mouseNav.renewLastClick();else{for(var a=t.parentNode.classList.contains("kint-show"),o=document.getElementsByClassName("kint-parent"),n=o.length;n--;)l.toggle(o[n],a);l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.keyboardNav.scroll(t),window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickCount=0}else if(l.getParentByClass(t,"kint-rich")){var r=t.nodeName.toLowerCase();if("dfn"===r&&l.selectText(t),"th"!==r)if((t=l.getParentHeader(t))&&(l.keyboardNav.setCursor(t.querySelector("nav")),l.keyboardNav.sync(!0)),t=e.target,"li"===r&&"kint-tabs"===t.parentNode.className)"kint-active-tab"!==t.className&&l.switchTab(t),(t=l.getParentHeader(t,!0))&&(l.keyboardNav.setCursor(t.querySelector("nav")),l.keyboardNav.sync(!0));else if("nav"===r)"footer"===t.parentNode.nodeName.toLowerCase()?(l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),(t=t.parentNode).classList.toggle("kint-show")):(l.toggle(t.parentNode),l.keyboardNav.fetchTargets(),l.mouseNav.lastClickCount=1,l.mouseNav.lastClickTarget=t,l.mouseNav.renewLastClick());else if(t.classList.contains("kint-popup-trigger")){var s=t.parentNode;if("footer"===s.nodeName.toLowerCase())s=s.previousSibling;else for(;s&&!s.classList.contains("kint-parent");)s=s.parentNode;l.openInNewWindow(s)}else t.classList.contains("kint-access-path-trigger")?l.showAccessPath(t.parentNode):t.classList.contains("kint-search-trigger")?l.showSearchBox(t.parentNode):t.classList.contains("kint-search")||("pre"===r&&3===e.detail?l.selectText(t):l.getParentByClass(t,"kint-source")&&3===e.detail?l.selectText(l.getParentByClass(t,"kint-source")):t.classList.contains("access-path")?l.selectText(t):"a"!==r&&(t=l.getParentHeader(t))&&(l.toggle(t),l.keyboardNav.fetchTargets()));else e.ctrlKey||l.sortTable(t.parentNode.parentNode.parentNode,t.cellIndex)}},!0),window.addEventListener("keydown",function(e){if(e.target===document.body&&!e.altKey&&!e.ctrlKey){if(68===e.keyCode){if(l.keyboardNav.active)l.keyboardNav.active=!1;else if(l.keyboardNav.active=!0,l.keyboardNav.fetchTargets(),0===l.keyboardNav.targets.length)return void(l.keyboardNav.active=!1);return l.keyboardNav.sync(),void e.preventDefault()}if(l.keyboardNav.active){if(9===e.keyCode)return l.keyboardNav.moveCursor(e.shiftKey?-1:1),void e.preventDefault();if(38===e.keyCode||75===e.keyCode)return l.keyboardNav.moveCursor(-1),void e.preventDefault();if(40===e.keyCode||74===e.keyCode)return l.keyboardNav.moveCursor(1),void e.preventDefault();var t,a,o=l.keyboardNav.targets[l.keyboardNav.target];if("li"===o.nodeName.toLowerCase()){if(32===e.keyCode||13===e.keyCode)return l.switchTab(o),l.keyboardNav.fetchTargets(),l.keyboardNav.sync(),void e.preventDefault();if(39===e.keyCode||76===e.keyCode)return l.keyboardNav.moveCursor(1),void e.preventDefault();if(37===e.keyCode||72===e.keyCode)return l.keyboardNav.moveCursor(-1),void e.preventDefault()}o=o.parentNode,65===e.keyCode?(l.showAccessPath(o),e.preventDefault()):"footer"===o.nodeName.toLowerCase()&&o.parentNode.classList.contains("kint-rich")?32===e.keyCode||13===e.keyCode?(o.classList.toggle("kint-show"),e.preventDefault()):37===e.keyCode||72===e.keyCode?(o.classList.remove("kint-show"),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode||(o.classList.add("kint-show"),e.preventDefault()):32===e.keyCode||13===e.keyCode?(l.toggle(o),l.keyboardNav.fetchTargets(),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode&&37!==e.keyCode&&72!==e.keyCode||(t=39===e.keyCode||76===e.keyCode,o.classList.contains("kint-show")?l.toggleChildren(o,t):t||(a=l.getParentHeader(o.parentNode.parentNode,!0))&&(l.keyboardNav.setCursor((o=a).querySelector("nav")),l.keyboardNav.sync()),l.toggle(o,t),l.keyboardNav.fetchTargets(),e.preventDefault())}}},!0),l}()),window.kintShared.runOnce(window.kintRich.initLoad);
        void 0===window.kintMicrotimeInitialized&&(window.kintMicrotimeInitialized=1,window.addEventListener("load",function(){"use strict";var a={},t=Array.prototype.slice.call(document.querySelectorAll("[data-kint-microtime-group]"),0);t.forEach(function(t){var i,e;t.querySelector(".kint-microtime-lap")&&(i=t.getAttribute("data-kint-microtime-group"),e=parseFloat(t.querySelector(".kint-microtime-lap").innerHTML),t=parseFloat(t.querySelector(".kint-microtime-avg").innerHTML),void 0===a[i]&&(a[i]={}),(void 0===a[i].min||a[i].min>e)&&(a[i].min=e),(void 0===a[i].max||a[i].max<e)&&(a[i].max=e),a[i].avg=t)}),t.forEach(function(t){var i,e,r,o,n=t.querySelector(".kint-microtime-lap");null!==n&&(i=parseFloat(n.textContent),o=t.dataset.kintMicrotimeGroup,e=a[o].avg,r=a[o].max,o=a[o].min,i===(t.querySelector(".kint-microtime-avg").textContent=e)&&i===o&&i===r||(n.style.background=e<i?"hsl("+(40-40*((i-e)/(r-e)))+", 100%, 65%)":"hsl("+(40+80*(e===o?0:(e-i)/(e-o)))+", 100%, 65%)"))})}));
    </script><style class="kint-rich-style">.kint-rich{font-size:13px;overflow-x:auto;white-space:nowrap;background:rgba(255,255,255,0.9)}.kint-rich.kint-folder{position:fixed;bottom:0;left:0;right:0;z-index:999999;width:100%;margin:0;display:block}.kint-rich.kint-folder dd.kint-foldout{max-height:calc(100vh - 100px);padding-right:8px;overflow-y:scroll;display:none}.kint-rich.kint-folder dd.kint-foldout.kint-show{display:block}.kint-rich::selection,.kint-rich::-moz-selection,.kint-rich::-webkit-selection{background:#aaa;color:#1d1e1e}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich,.kint-rich::before,.kint-rich::after,.kint-rich *,.kint-rich *::before,.kint-rich *::after{box-sizing:border-box;border-radius:0;color:#1d1e1e;float:none !important;font-family:Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;line-height:15px;margin:0;padding:0;text-align:left}.kint-rich{margin:8px 0}.kint-rich dt,.kint-rich dl{width:auto}.kint-rich dt,.kint-rich div.access-path{background:#f8f8f8;border:1px solid #d7d7d7;color:#1d1e1e;display:block;font-weight:bold;list-style:none outside none;overflow:auto;padding:4px}.kint-rich dt:hover,.kint-rich div.access-path:hover{border-color:#aaa}.kint-rich>dl dl{padding:0 0 0 12px}.kint-rich dt.kint-parent>nav,.kint-rich>footer>nav{background:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMCAxNTAiPjxwYXRoIGQ9Ik02IDdoMThsLTkgMTV6bTAgMzBoMThsLTkgMTV6bTAgNDVoMThsLTktMTV6bTAgMzBoMThsLTktMTV6bTAgMTJsMTggMThtLTE4IDBsMTgtMTgiIGZpbGw9IiM1NTUiLz48cGF0aCBkPSJNNiAxMjZsMTggMThtLTE4IDBsMTgtMTgiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlPSIjNTU1Ii8+PC9zdmc+") no-repeat scroll 0 0/15px 75px transparent;cursor:pointer;display:inline-block;height:15px;width:15px;margin-right:3px;vertical-align:middle}.kint-rich dt.kint-parent:hover>nav,.kint-rich>footer>nav:hover{background-position:0 25%}.kint-rich dt.kint-parent.kint-show>nav,.kint-rich>footer.kint-show>nav{background-position:0 50%}.kint-rich dt.kint-parent.kint-show:hover>nav,.kint-rich>footer.kint-show>nav:hover{background-position:0 75%}.kint-rich dt.kint-parent.kint-locked>nav{background-position:0 100%}.kint-rich dt.kint-parent+dd{display:none;border-left:1px dashed #d7d7d7}.kint-rich dt.kint-parent.kint-show+dd{display:block}.kint-rich var,.kint-rich var a{color:#06f;font-style:normal}.kint-rich dt:hover var,.kint-rich dt:hover var a{color:red}.kint-rich dfn{font-style:normal;font-family:monospace;color:#1d1e1e}.kint-rich pre{color:#1d1e1e;margin:0 0 0 12px;padding:5px;overflow-y:hidden;border-top:0;border:1px solid #d7d7d7;background:#f8f8f8;display:block;word-break:normal}.kint-rich .kint-popup-trigger,.kint-rich .kint-access-path-trigger,.kint-rich .kint-search-trigger{background:rgba(29,30,30,0.8);border-radius:3px;height:16px;font-size:16px;margin-left:5px;font-weight:bold;width:16px;text-align:center;float:right !important;cursor:pointer;color:#f8f8f8;position:relative;overflow:hidden;line-height:17.6px}.kint-rich .kint-popup-trigger:hover,.kint-rich .kint-access-path-trigger:hover,.kint-rich .kint-search-trigger:hover{color:#1d1e1e;background:#f8f8f8}.kint-rich dt.kint-parent>.kint-popup-trigger{line-height:19.2px}.kint-rich .kint-search-trigger{font-size:20px}.kint-rich input.kint-search{display:none;border:1px solid #d7d7d7;border-top-width:0;border-bottom-width:0;padding:4px;float:right !important;margin:-4px 0;color:#1d1e1e;background:#f8f8f8;height:24px;width:160px;position:relative;z-index:100}.kint-rich input.kint-search.kint-show{display:block}.kint-rich .kint-search-root ul.kint-tabs>li:not(.kint-search-match){background:#f8f8f8;opacity:0.5}.kint-rich .kint-search-root dl:not(.kint-search-match){opacity:0.5}.kint-rich .kint-search-root dl:not(.kint-search-match)>dt{background:#f8f8f8}.kint-rich .kint-search-root dl:not(.kint-search-match) dl,.kint-rich .kint-search-root dl:not(.kint-search-match) ul.kint-tabs>li:not(.kint-search-match){opacity:1}.kint-rich div.access-path{background:#f8f8f8;display:none;margin-top:5px;padding:4px;white-space:pre}.kint-rich div.access-path.kint-show{display:block}.kint-rich footer{padding:0 3px 3px;font-size:9px;background:transparent}.kint-rich footer>.kint-popup-trigger{background:transparent;color:#1d1e1e}.kint-rich footer nav{height:10px;width:10px;background-size:10px 50px}.kint-rich footer>ol{display:none;margin-left:32px}.kint-rich footer.kint-show>ol{display:block}.kint-rich a{color:#1d1e1e;text-shadow:none;text-decoration:underline}.kint-rich a:hover{color:#1d1e1e;border-bottom:1px dotted #1d1e1e}.kint-rich ul{list-style:none;padding-left:12px}.kint-rich ul:not(.kint-tabs) li{border-left:1px dashed #d7d7d7}.kint-rich ul:not(.kint-tabs) li>dl{border-left:none}.kint-rich ul.kint-tabs{margin:0 0 0 12px;padding-left:0;background:#f8f8f8;border:1px solid #d7d7d7;border-top:0}.kint-rich ul.kint-tabs>li{background:#f8f8f8;border:1px solid #d7d7d7;cursor:pointer;display:inline-block;height:24px;margin:2px;padding:0 12px;vertical-align:top}.kint-rich ul.kint-tabs>li:hover,.kint-rich ul.kint-tabs>li.kint-active-tab:hover{border-color:#aaa;color:red}.kint-rich ul.kint-tabs>li.kint-active-tab{background:#f8f8f8;border-top:0;margin-top:-1px;height:27px;line-height:24px}.kint-rich ul.kint-tabs>li:not(.kint-active-tab){line-height:20px}.kint-rich ul.kint-tabs li+li{margin-left:0}.kint-rich ul.kint-tab-contents>li{display:none}.kint-rich ul.kint-tab-contents>li.kint-show{display:block}.kint-rich dt:hover+dd>ul>li.kint-active-tab{border-color:#aaa;color:red}.kint-rich dt>.kint-color-preview{width:16px;height:16px;display:inline-block;vertical-align:middle;margin-left:10px;border:1px solid #d7d7d7;background-color:#ccc;background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2 2"><path fill="%23FFF" d="M0 0h1v2h1V1H0z"/></svg>');background-size:100%}.kint-rich dt>.kint-color-preview:hover{border-color:#aaa}.kint-rich dt>.kint-color-preview>div{width:100%;height:100%}.kint-rich table{border-collapse:collapse;empty-cells:show;border-spacing:0}.kint-rich table *{font-size:12px}.kint-rich table dt{background:none;padding:2px}.kint-rich table dt .kint-parent{min-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.kint-rich table td,.kint-rich table th{border:1px solid #d7d7d7;padding:2px;vertical-align:center}.kint-rich table th{cursor:alias}.kint-rich table td:first-child,.kint-rich table th{font-weight:bold;background:#f8f8f8;color:#1d1e1e}.kint-rich table td{background:#f8f8f8;white-space:pre}.kint-rich table td>dl{padding:0}.kint-rich table pre{border-top:0;border-right:0}.kint-rich table thead th:first-child{background:none;border:0}.kint-rich table tr:hover>td{box-shadow:0 0 1px 0 #aaa inset}.kint-rich table tr:hover var{color:red}.kint-rich table ul.kint-tabs li.kint-active-tab{height:20px;line-height:17px}.kint-rich pre.kint-source{margin-left:-1px}.kint-rich pre.kint-source[data-kint-filename]:before{display:block;content:attr(data-kint-filename);margin-bottom:4px;padding-bottom:4px;border-bottom:1px solid #f8f8f8}.kint-rich pre.kint-source>div:before{display:inline-block;content:counter(kint-l);counter-increment:kint-l;border-right:1px solid #aaa;padding-right:8px;margin-right:8px}.kint-rich pre.kint-source>div.kint-highlight{background:#f8f8f8}.kint-rich .kint-microtime-lap{text-shadow:-1px 0 #aaa,0 1px #aaa,1px 0 #aaa,0 -1px #aaa;color:#f8f8f8;font-weight:bold}input.kint-note-input{width:100%}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich dt{font-weight:normal}.kint-rich dt.kint-parent{margin-top:4px}.kint-rich dl dl{margin-top:4px;padding-left:25px;border-left:none}.kint-rich>dl>dt{background:#f8f8f8}.kint-rich ul{margin:0;padding-left:0}.kint-rich ul:not(.kint-tabs)>li{border-left:0}.kint-rich ul.kint-tabs{background:#f8f8f8;border:1px solid #d7d7d7;border-width:0 1px 1px 1px;padding:4px 0 0 12px;margin-left:-1px;margin-top:-1px}.kint-rich ul.kint-tabs li,.kint-rich ul.kint-tabs li+li{margin:0 0 0 4px}.kint-rich ul.kint-tabs li{border-bottom-width:0;height:25px}.kint-rich ul.kint-tabs li:first-child{margin-left:0}.kint-rich ul.kint-tabs li.kint-active-tab{border-top:1px solid #d7d7d7;background:#fff;font-weight:bold;padding-top:0;border-bottom:1px solid #fff !important;margin-bottom:-1px}.kint-rich ul.kint-tabs li.kint-active-tab:hover{border-bottom:1px solid #fff}.kint-rich ul>li>pre{border:1px solid #d7d7d7}.kint-rich dt:hover+dd>ul{border-color:#aaa}.kint-rich pre{background:#fff;margin-top:4px;margin-left:25px}.kint-rich .kint-source{margin-left:-1px}.kint-rich .kint-source .kint-highlight{background:#cfc}.kint-rich .kint-parent.kint-show>.kint-search{border-bottom-width:1px}.kint-rich table td{background:#fff}.kint-rich table td>dl{padding:0;margin:0}.kint-rich table td>dl>dt.kint-parent{margin:0}.kint-rich table td:first-child,.kint-rich table td,.kint-rich table th{padding:2px 4px}.kint-rich table dd,.kint-rich table dt{background:#fff}.kint-rich table tr:hover>td{box-shadow:none;background:#cfc}
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Allied Tech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.webp">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Font Family CSS -->
    <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/vendor/linea-icons.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate-text.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


<div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>

<!--====================  header area ====================-->
<div class="header-area header-area--default">
    <!-- Header Bottom Wrap Start -->
    <div class="header-bottom-wrap header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header default-menu-style position-relative">

                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo-dark.webp" width="160" height="48" class="img-fluid" alt="">
                            </a>
                        </div>

                        <!-- header midle box  -->
                        <div class="header-midle-box">
                            <div class="header-bottom-wrap d-md-block d-none">
                                <div class="header-bottom-inner">
                                    <div class="header-bottom-left-wrap">
                                        <!-- navigation menu -->
                                        <div class="header__navigation d-none d-xl-block">
                                            <nav class="navigation-menu primary--menu">

                                                <ul>
                                                    <li>
                                                        <a href="/"><span>Home</span></a>
                                                    </li>
                                                    <li class="has-children has-children--multilevel-submenu">
                                                        <a href="#"><span>Company</span></a>
                                                        <ul class="submenu">
                                                            <li>
                                                                <a href="about"><span>About us</span></a>
                                                            </li>
                                                            <li><a href="contact"><span>Contact us</span></a></li>
                                                            <li><a href="choose"><span>Why choose us</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-children has-children--multilevel-submenu">
                                                        <a href="#"><span>IT solutions</span></a>
                                                        <ul class="submenu">
                                                            <li><a href="/services"><span>IT Services</span></a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- header right box -->
                        <div class="header-right-box">
                            <div class="header-right-inner" id="hidden-icon-wrapper">



                            </div>

                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                            <!-- hidden icons menu -->
                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <a href="javascript:void(0)">
                                    <i class="far fa-ellipsis-h-alt"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Wrap End -->

</div>
<!--====================  End of header area  ====================-->
<!-- DEBUG-VIEW ENDED 1 APPPATH\Views\layouts\header.php -->

<!-- DEBUG-VIEW START 3 APPPATH\Views\layouts\content.php -->
<!-- DEBUG-VIEW START 2 APPPATH\Views\testing_content.php -->
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title">Error 404</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">

                        <li class="breadcrumb-item active">Looks like the page you are looking for we forgot to create</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- DEBUG-VIEW ENDED 2 APPPATH\Views\testing_content.php -->

<!-- DEBUG-VIEW ENDED 3 APPPATH\Views\layouts\content.php -->

<!-- DEBUG-VIEW START 4 APPPATH\Views\layouts\footer.php -->
<!--====================  footer area ====================-->
<div class="footer-area-wrapper reveal-footer bg-gray">
    <div class="footer-area section-space--ptb_80">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                    <div class="footer-widget__logo mb-30">
                        <img src="assets/images/logo/dark-logo-160x48.webp" width="160" height="48" class="img-fluid" alt="">
                    </div>

                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Company</h6>
                    <ul class="footer-widget__list">
                        <li><a href="/about" class="hover-style-link">About Us</a></li>
                        <li><a href="/choose" class="hover-style-link">Why Choose Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Support</h6>
                    <ul class="footer-widget__list">
                        <li><a href="/contact" class="hover-style-link">Contact Us</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <span class="copyright-text">&copy;<?=date( "Y" )?> Allied Tech . All Rights Reserved.</span>
                </div>
                <!--
                 <div class="col-md-6 text-center text-md-end">
                     <ul class="list ht-social-networks solid-rounded-icon">

                         <li class="item">
                             <a href="https://twitter.com" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                 <i class="fab fa-twitter link-icon"></i>
                             </a>
                         </li>
                         <li class="item">
                             <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                 <i class="fab fa-facebook-f link-icon"></i>
                             </a>
                         </li>
                         <li class="item">
                             <a href="https://instagram.com" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                 <i class="fab fa-instagram link-icon"></i>
                             </a>
                         </li>
                         <li class="item">
                             <a href="https://linkedin.com" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                 <i class="fab fa-linkedin link-icon"></i>
                             </a>
                         </li>
                     </ul>
                 </div>
                 -->
            </div>
        </div>
    </div>
</div>
<!--====================  End of footer area  ====================-->









</div>
<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->


<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo-dark.webp" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-end">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                            <li><a href="index-processing.html"><span>Processing</span></a></li>
                            <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                            <li><a href="index-services.html"><span>Services</span></a></li>
                            <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                            <li><a href="index-cybersecurity.html"><span>cybersecurity</span></a></li>
                            <li><a href="index-modern-it-company.html"><span>Modern IT Company</span></a></li>
                            <li><a href="index-machine-learning.html"><span>Machine Learning</span></a></li>
                            <li><a href="index-software-innovation.html"><span>Software Innovation</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Company</a>
                        <ul class="sub-menu">
                            <li class="has-children">
                                <a href="about-us-01.html"><span>About us</span></a>
                                <ul class="sub-menu">
                                    <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                    <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                    <li class="has-children">
                                        <a href="#"><span>Submenu Level Two</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="#"><span>Submenu Level Three</span></a></li>
                                            <li><a href="#"><span>Submenu Level Three</span></a></li>
                                            <li><a href="#"><span>Submenu Level Three</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html"><span>Contact us</span></a></li>
                            <li><a href="leadership.html"><span>Leadership</span></a></li>
                            <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                            <li><a href="our-history.html"><span>Our history</span></a></li>
                            <li><a href="faqs.html"><span>FAQs</span></a></li>
                            <li><a href="careers.html"><span>Careers</span></a></li>
                            <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">IT solutions</a>
                        <ul class="sub-menu">
                            <li><a href="it-services.html"><span>IT Services</span></a></li>
                            <li><a href="managed-it-service.html"><span>Managed IT Services</span></a></li>
                            <li><a href="industries.html"><span>Industries</span></a></li>
                            <li><a href="business-solution.html"><span>Business solution</span></a></li>
                            <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                        </ul>
                    </li>
                </ul>
                </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->


<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/js/vendor/bootstrap.min.js"></script>

<!-- wow JS -->
<script src="assets/js/plugins/wow.min.js"></script>

<!-- Swiper Slider JS -->
<script src="assets/js/plugins/swiper.min.js"></script>

<!-- Light gallery JS -->
<script src="assets/js/plugins/lightgallery.min.js"></script>

<!-- Waypoints JS -->
<script src="assets/js/plugins/waypoints.min.js"></script>

<!-- Counter down JS -->
<script src="assets/js/plugins/countdown.min.js"></script>

<!-- Isotope JS -->
<script src="assets/js/plugins/isotope.min.js"></script>

<!-- Masonry JS -->
<script src="assets/js/plugins/masonry.min.js"></script>

<!-- ImagesLoaded JS -->
<script src="assets/js/plugins/images-loaded.min.js"></script>

<!-- Wavify JS -->
<script src="assets/js/plugins/wavify.js"></script>

<!-- jQuery Wavify JS -->
<script src="assets/js/plugins/jquery.wavify.js"></script>

<!-- circle progress JS -->
<script src="assets/js/plugins/circle-progress.min.js"></script>

<!-- counterup JS -->
<script src="assets/js/plugins/counterup.min.js"></script>

<!-- animation text JS -->
<script src="assets/js/plugins/animation-text.min.js"></script>

<!-- Vivus JS -->
<script src="assets/js/plugins/vivus.min.js"></script>

<!-- Some plugins JS -->
<script src="assets/js/plugins/some-plugins.js"></script>


<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

<!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>

</html>
<!-- DEBUG-VIEW ENDED 4 APPPATH\Views\layouts\footer.php -->

<!-- DEBUG-VIEW ENDED 5 APPPATH\Views\layouts\master.php -->
