!function(t){t.fn.typeWatch=function(e){function n(e,n){var a=t(e.el).val();(a.length>=i.captureLength&&a.toUpperCase()!=e.text||n&&a.length>=i.captureLength||i.fireOnEmpty&&0==a.length&&e.text)&&(e.text=a.toUpperCase(),e.cb(a))}function a(e){if("TEXT"==e.type.toUpperCase()||"TEXTAREA"==e.nodeName.toUpperCase()){var a={timer:null,text:t(e).val().toUpperCase(),cb:i.callback,el:e,wait:i.wait};i.highlight&&t(e).focus(function(){this.select()});var c=function(t){var e=a.wait,i=!1;13==t.keyCode&&"TEXT"==this.type.toUpperCase()&&(e=1,i=!0);var c=function(){n(a,i)};clearTimeout(a.timer),a.timer=setTimeout(c,e)};t(e).keyup(c)}}var i=t.extend({wait:500,callback:function(){},highlight:!0,captureLength:2,fireOnEmpty:!1},e);return this.each(function(){a(this)})}}($);