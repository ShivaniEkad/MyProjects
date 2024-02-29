!function(b){b(function(){var f=b.support,a;a:{a=document.createElement("bootstrap");var c={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"},d;for(d in c)if(void 0!==a.style[d]){a=c[d];break a}a=void 0}f.transition=a&&{end:a}})}(window.jQuery);
!function(b){var f=function(a){b(a).on("click",'[data-dismiss="alert"]',this.close)};f.prototype.close=function(a){function c(){g.trigger("closed").remove()}var d=b(this),e=d.attr("data-target"),g;e||(e=(e=d.attr("href"))&&e.replace(/.*(?=#[^\s]*$)/,""));g=b(e);a&&a.preventDefault();g.length||(g=d.hasClass("alert")?d:d.parent());g.trigger(a=b.Event("close"));a.isDefaultPrevented()||(g.removeClass("in"),b.support.transition&&g.hasClass("fade")?g.on(b.support.transition.end,c):c())};b.fn.alert=function(a){return this.each(function(){var c=
b(this),d=c.data("alert");d||c.data("alert",d=new f(this));"string"==typeof a&&d[a].call(c)})};b.fn.alert.Constructor=f;b(document).on("click.alert.data-api",'[data-dismiss="alert"]',f.prototype.close)}(window.jQuery);
!function(b){var f=function(a,c){this.$element=b(a);this.options=b.extend({},b.fn.button.defaults,c)};f.prototype.setState=function(a){var b=this.$element,d=b.data(),e=b.is("input")?"val":"html";a+="Text";d.resetText||b.data("resetText",b[e]());b[e](d[a]||this.options[a]);setTimeout(function(){"loadingText"==a?b.addClass("disabled").attr("disabled","disabled"):b.removeClass("disabled").removeAttr("disabled")},0)};f.prototype.toggle=function(){var a=this.$element.closest('[data-toggle="buttons-radio"]');
a&&a.find(".active").removeClass("active");this.$element.toggleClass("active")};b.fn.button=function(a){return this.each(function(){var c=b(this),d=c.data("button"),e="object"==typeof a&&a;d||c.data("button",d=new f(this,e));"toggle"==a?d.toggle():a&&d.setState(a)})};b.fn.button.defaults={loadingText:"loading..."};b.fn.button.Constructor=f;b(document).on("click.button.data-api","[data-toggle^=button]",function(a){a=b(a.target);a.hasClass("btn")||(a=a.closest(".btn"));a.button("toggle")})}(window.jQuery);
!function(b){var f=function(a,c){this.$element=b(a);this.options=c;this.options.slide&&this.slide(this.options.slide);"hover"==this.options.pause&&this.$element.on("mouseenter",b.proxy(this.pause,this)).on("mouseleave",b.proxy(this.cycle,this))};f.prototype={cycle:function(a){a||(this.paused=!1);this.options.interval&&!this.paused&&(this.interval=setInterval(b.proxy(this.next,this),this.options.interval));return this},to:function(a){var c=this.$element.find(".item.active"),d=c.parent().children(),
c=d.index(c),e=this;if(!(a>d.length-1||0>a))return this.sliding?this.$element.one("slid",function(){e.to(a)}):c==a?this.pause().cycle():this.slide(a>c?"next":"prev",b(d[a]))},pause:function(a){a||(this.paused=!0);this.$element.find(".next, .prev").length&&b.support.transition.end&&(this.$element.trigger(b.support.transition.end),this.cycle());clearInterval(this.interval);this.interval=null;return this},next:function(){if(!this.sliding)return this.slide("next")},prev:function(){if(!this.sliding)return this.slide("prev")},
slide:function(a,c){var d=this.$element.find(".item.active"),e=c||d[a](),g=this.interval,f="next"==a?"left":"right",k="next"==a?"first":"last",l=this;this.sliding=!0;g&&this.pause();e=e.length?e:this.$element.find(".item")[k]();k=b.Event("slide",{relatedTarget:e[0]});if(!e.hasClass("active")){if(b.support.transition&&this.$element.hasClass("slide")){this.$element.trigger(k);if(k.isDefaultPrevented())return;e.addClass(a);e[0].offsetWidth;d.addClass(f);e.addClass(f);this.$element.one(b.support.transition.end,
function(){e.removeClass([a,f].join(" ")).addClass("active");d.removeClass(["active",f].join(" "));l.sliding=!1;setTimeout(function(){l.$element.trigger("slid")},0)})}else{this.$element.trigger(k);if(k.isDefaultPrevented())return;d.removeClass("active");e.addClass("active");this.sliding=!1;this.$element.trigger("slid")}g&&this.cycle();return this}}};b.fn.carousel=function(a){return this.each(function(){var c=b(this),d=c.data("carousel"),e=b.extend({},b.fn.carousel.defaults,"object"==typeof a&&a),
g="string"==typeof a?a:e.slide;d||c.data("carousel",d=new f(this,e));if("number"==typeof a)d.to(a);else if(g)d[g]();else e.interval&&d.cycle()})};b.fn.carousel.defaults={interval:5E3,pause:"hover"};b.fn.carousel.Constructor=f;b(document).on("click.carousel.data-api","[data-slide]",function(a){var c=b(this),d,e=b(c.attr("data-target")||(d=c.attr("href"))&&d.replace(/.*(?=#[^\s]+$)/,"")),c=b.extend({},e.data(),c.data());e.carousel(c);a.preventDefault()})}(window.jQuery);
!function(b){var f=function(a,c){this.$element=b(a);this.options=b.extend({},b.fn.collapse.defaults,c);this.options.parent&&(this.$parent=b(this.options.parent));this.options.toggle&&this.toggle()};f.prototype={constructor:f,dimension:function(){return this.$element.hasClass("width")?"width":"height"},show:function(){var a,c,d,e;if(!this.transitioning){a=this.dimension();c=b.camelCase(["scroll",a].join("-"));if((d=this.$parent&&this.$parent.find("> .accordion-group > .in"))&&d.length){if((e=d.data("collapse"))&&
e.transitioning)return;d.collapse("hide");e||d.data("collapse",null)}this.$element[a](0);this.transition("addClass",b.Event("show"),"shown");b.support.transition&&this.$element[a](this.$element[0][c])}},hide:function(){var a;this.transitioning||(a=this.dimension(),this.reset(this.$element[a]()),this.transition("removeClass",b.Event("hide"),"hidden"),this.$element[a](0))},reset:function(a){var b=this.dimension();this.$element.removeClass("collapse")[b](a||"auto")[0].offsetWidth;this.$element[null!==
a?"addClass":"removeClass"]("collapse");return this},transition:function(a,c,d){var e=this,g=function(){"show"==c.type&&e.reset();e.transitioning=0;e.$element.trigger(d)};this.$element.trigger(c);c.isDefaultPrevented()||(this.transitioning=1,this.$element[a]("in"),b.support.transition&&this.$element.hasClass("collapse")?this.$element.one(b.support.transition.end,g):g())},toggle:function(){this[this.$element.hasClass("in")?"hide":"show"]()}};b.fn.collapse=function(a){return this.each(function(){var c=
b(this),d=c.data("collapse"),e="object"==typeof a&&a;d||c.data("collapse",d=new f(this,e));if("string"==typeof a)d[a]()})};b.fn.collapse.defaults={toggle:!0};b.fn.collapse.Constructor=f;b(document).on("click.collapse.data-api","[data-toggle=collapse]",function(a){var c=b(this),d;a=c.attr("data-target")||a.preventDefault()||(d=c.attr("href"))&&d.replace(/.*(?=#[^\s]+$)/,"");d=b(a).data("collapse")?"toggle":c.data();c[b(a).hasClass("in")?"addClass":"removeClass"]("collapsed");b(a).collapse(d)})}(window.jQuery);
!function(b){function f(){b("[data-toggle=dropdown]").each(function(){a(b(this)).removeClass("open")})}function a(a){var c=a.attr("data-target");c||(c=(c=a.attr("href"))&&/#/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,""));c=b(c);c.length||(c=a.parent());return c}var c=function(a){var c=b(a).on("click.dropdown.data-api",this.toggle);b("html").on("click.dropdown.data-api",function(){c.parent().removeClass("open")})};c.prototype={constructor:c,toggle:function(c){c=b(this);var e,g;if(!c.is(".disabled, :disabled"))return e=
a(c),g=e.hasClass("open"),f(),g||(e.toggleClass("open"),c.focus()),!1},keydown:function(c){var e,g,f;if(/(38|40|27)/.test(c.keyCode)&&(e=b(this),c.preventDefault(),c.stopPropagation(),!e.is(".disabled, :disabled"))){g=a(e);f=g.hasClass("open");if(!f||f&&27==c.keyCode)return e.click();e=b("[role=menu] li:not(.divider) a",g);e.length&&(g=e.index(e.filter(":focus")),38==c.keyCode&&0<g&&g--,40==c.keyCode&&g<e.length-1&&g++,~g||(g=0),e.eq(g).focus())}}};b.fn.dropdown=function(a){return this.each(function(){var e=
b(this),g=e.data("dropdown");g||e.data("dropdown",g=new c(this));"string"==typeof a&&g[a].call(e)})};b.fn.dropdown.Constructor=c;b(document).on("click.dropdown.data-api touchstart.dropdown.data-api",f).on("click.dropdown touchstart.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.dropdown.data-api touchstart.dropdown.data-api","[data-toggle=dropdown]",c.prototype.toggle).on("keydown.dropdown.data-api touchstart.dropdown.data-api","[data-toggle=dropdown], [role=menu]",
c.prototype.keydown)}(window.jQuery);
!function(b){var f=function(a,c){this.options=c;this.$element=b(a).delegate('[data-dismiss="modal"]',"click.dismiss.modal",b.proxy(this.hide,this));this.options.remote&&this.$element.find(".modal-body").load(this.options.remote)};f.prototype={constructor:f,toggle:function(){return this[this.isShown?"hide":"show"]()},show:function(){var a=this,c=b.Event("show");this.$element.trigger(c);this.isShown||c.isDefaultPrevented()||(this.isShown=!0,this.escape(),this.backdrop(function(){var c=b.support.transition&&
a.$element.hasClass("fade");a.$element.parent().length||a.$element.appendTo(document.body);a.$element.show();c&&a.$element[0].offsetWidth;a.$element.addClass("in").attr("aria-hidden",!1);a.enforceFocus();c?a.$element.one(b.support.transition.end,function(){a.$element.focus().trigger("shown")}):a.$element.focus().trigger("shown")}))},hide:function(a){a&&a.preventDefault();a=b.Event("hide");this.$element.trigger(a);this.isShown&&!a.isDefaultPrevented()&&(this.isShown=!1,this.escape(),b(document).off("focusin.modal"),
this.$element.removeClass("in").attr("aria-hidden",!0),b.support.transition&&this.$element.hasClass("fade")?this.hideWithTransition():this.hideModal())},enforceFocus:function(){var a=this;b(document).on("focusin.modal",function(c){a.$element[0]===c.target||a.$element.has(c.target).length||a.$element.focus()})},escape:function(){var a=this;if(this.isShown&&this.options.keyboard)this.$element.on("keyup.dismiss.modal",function(c){27==c.which&&a.hide()});else this.isShown||this.$element.off("keyup.dismiss.modal")},
hideWithTransition:function(){var a=this,c=setTimeout(function(){a.$element.off(b.support.transition.end);a.hideModal()},500);this.$element.one(b.support.transition.end,function(){clearTimeout(c);a.hideModal()})},hideModal:function(a){this.$element.hide().trigger("hidden");this.backdrop()},removeBackdrop:function(){this.$backdrop.remove();this.$backdrop=null},backdrop:function(a){var c=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var d=b.support.transition&&c;this.$backdrop=
b('<div class="modal-backdrop '+c+'" />').appendTo(document.body);this.$backdrop.click("static"==this.options.backdrop?b.proxy(this.$element[0].focus,this.$element[0]):b.proxy(this.hide,this));d&&this.$backdrop[0].offsetWidth;this.$backdrop.addClass("in");d?this.$backdrop.one(b.support.transition.end,a):a()}else!this.isShown&&this.$backdrop?(this.$backdrop.removeClass("in"),b.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one(b.support.transition.end,b.proxy(this.removeBackdrop,
this)):this.removeBackdrop()):a&&a()}};b.fn.modal=function(a){return this.each(function(){var c=b(this),d=c.data("modal"),e=b.extend({},b.fn.modal.defaults,c.data(),"object"==typeof a&&a);d||c.data("modal",d=new f(this,e));if("string"==typeof a)d[a]();else e.show&&d.show()})};b.fn.modal.defaults={backdrop:!0,keyboard:!0,show:!0};b.fn.modal.Constructor=f;b(document).on("click.modal.data-api",'[data-toggle="modal"]',function(a){var c=b(this),d=c.attr("href"),e=b(c.attr("data-target")||d&&d.replace(/.*(?=#[^\s]+$)/,
"")),d=e.data("modal")?"toggle":b.extend({remote:!/#/.test(d)&&d},e.data(),c.data());a.preventDefault();e.modal(d).one("hide",function(){c.focus()})})}(window.jQuery);
!function(b){var f=function(a,c){this.init("tooltip",a,c)};f.prototype={constructor:f,init:function(a,c,d){this.type=a;this.$element=b(c);this.options=this.getOptions(d);this.enabled=!0;if("click"==this.options.trigger)this.$element.on("click."+this.type,this.options.selector,b.proxy(this.toggle,this));else"manual"!=this.options.trigger&&(a="hover"==this.options.trigger?"mouseenter":"focus",c="hover"==this.options.trigger?"mouseleave":"blur",this.$element.on(a+"."+this.type,this.options.selector,
b.proxy(this.enter,this)),this.$element.on(c+"."+this.type,this.options.selector,b.proxy(this.leave,this)));this.options.selector?this._options=b.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},getOptions:function(a){a=b.extend({},b.fn[this.type].defaults,a,this.$element.data());a.delay&&"number"==typeof a.delay&&(a.delay={show:a.delay,hide:a.delay});return a},enter:function(a){var c=b(a.currentTarget)[this.type](this._options).data(this.type);if(!c.options.delay||!c.options.delay.show)return c.show();
clearTimeout(this.timeout);c.hoverState="in";this.timeout=setTimeout(function(){"in"==c.hoverState&&c.show()},c.options.delay.show)},leave:function(a){var c=b(a.currentTarget)[this.type](this._options).data(this.type);this.timeout&&clearTimeout(this.timeout);if(!c.options.delay||!c.options.delay.hide)return c.hide();c.hoverState="out";this.timeout=setTimeout(function(){"out"==c.hoverState&&c.hide()},c.options.delay.hide)},show:function(){var a,c,b,e,g,f,k;if(this.hasContent()&&this.enabled){a=this.tip();
this.setContent();this.options.animation&&a.addClass("fade");f="function"==typeof this.options.placement?this.options.placement.call(this,a[0],this.$element[0]):this.options.placement;c=/in/.test(f);a.detach().css({top:0,left:0,display:"block"}).insertAfter(this.$element);b=this.getPosition(c);e=a[0].offsetWidth;g=a[0].offsetHeight;switch(c?f.split(" ")[1]:f){case "bottom":k={top:b.top+b.height,left:b.left+b.width/2-e/2};break;case "top":k={top:b.top-g,left:b.left+b.width/2-e/2};break;case "left":k=
{top:b.top+b.height/2-g/2,left:b.left-e};break;case "right":k={top:b.top+b.height/2-g/2,left:b.left+b.width}}a.offset(k).addClass(f).addClass("in")}},setContent:function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b);a.removeClass("fade in top bottom left right")},hide:function(){function a(){var a=setTimeout(function(){c.off(b.support.transition.end).detach()},500);c.one(b.support.transition.end,function(){clearTimeout(a);c.detach()})}var c=this.tip();
c.removeClass("in");b.support.transition&&this.$tip.hasClass("fade")?a():c.detach();return this},fixTitle:function(){var a=this.$element;(a.attr("title")||"string"!=typeof a.attr("data-original-title"))&&a.attr("data-original-title",a.attr("title")||"").removeAttr("title")},hasContent:function(){return this.getTitle()},getPosition:function(a){return b.extend({},a?{top:0,left:0}:this.$element.offset(),{width:this.$element[0].offsetWidth,height:this.$element[0].offsetHeight})},getTitle:function(){var a=
this.$element,b=this.options;return a.attr("data-original-title")||("function"==typeof b.title?b.title.call(a[0]):b.title)},tip:function(){return this.$tip=this.$tip||b(this.options.template)},validate:function(){this.$element[0].parentNode||(this.hide(),this.options=this.$element=null)},enable:function(){this.enabled=!0},disable:function(){this.enabled=!1},toggleEnabled:function(){this.enabled=!this.enabled},toggle:function(a){a=b(a.currentTarget)[this.type](this._options).data(this.type);a[a.tip().hasClass("in")?
"hide":"show"]()},destroy:function(){this.hide().$element.off("."+this.type).removeData(this.type)}};b.fn.tooltip=function(a){return this.each(function(){var c=b(this),d=c.data("tooltip"),e="object"==typeof a&&a;d||c.data("tooltip",d=new f(this,e));if("string"==typeof a)d[a]()})};b.fn.tooltip.Constructor=f;b.fn.tooltip.defaults={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover",title:"",
delay:0,html:!1}}(window.jQuery);
!function(b){var f=function(a,b){this.init("popover",a,b)};f.prototype=b.extend({},b.fn.tooltip.Constructor.prototype,{constructor:f,setContent:function(){var a=this.tip(),b=this.getTitle(),d=this.getContent();a.find(".popover-title")[this.options.html?"html":"text"](b);a.find(".popover-content > *")[this.options.html?"html":"text"](d);a.removeClass("fade top bottom left right in")},hasContent:function(){return this.getTitle()||this.getContent()},getContent:function(){var a=this.$element,b=this.options;
return a.attr("data-content")||("function"==typeof b.content?b.content.call(a[0]):b.content)},tip:function(){this.$tip||(this.$tip=b(this.options.template));return this.$tip},destroy:function(){this.hide().$element.off("."+this.type).removeData(this.type)}});b.fn.popover=function(a){return this.each(function(){var c=b(this),d=c.data("popover"),e="object"==typeof a&&a;d||c.data("popover",d=new f(this,e));if("string"==typeof a)d[a]()})};b.fn.popover.Constructor=f;b.fn.popover.defaults=b.extend({},b.fn.tooltip.defaults,
{placement:"right",trigger:"click",content:"",template:'<div class="popover"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>'})}(window.jQuery);
!function(b){function f(a,c){var d=b.proxy(this.process,this),e=b(a).is("body")?b(window):b(a),f;this.options=b.extend({},b.fn.scrollspy.defaults,c);this.$scrollElement=e.on("scroll.scroll-spy.data-api",d);this.selector=(this.options.target||(f=b(a).attr("href"))&&f.replace(/.*(?=#[^\s]+$)/,"")||"")+" .nav li > a";this.$body=b("body");this.refresh();this.process()}f.prototype={constructor:f,refresh:function(){var a=this;this.offsets=b([]);this.targets=b([]);this.$body.find(this.selector).map(function(){var a=
b(this),a=a.data("target")||a.attr("href"),d=/^#\w/.test(a)&&b(a);return d&&d.length&&[[d.position().top,a]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){a.offsets.push(this[0]);a.targets.push(this[1])})},process:function(){var a=this.$scrollElement.scrollTop()+this.options.offset,b=(this.$scrollElement[0].scrollHeight||this.$body[0].scrollHeight)-this.$scrollElement.height(),d=this.offsets,e=this.targets,f=this.activeTarget,h;if(a>=b)return f!=(h=e.last()[0])&&this.activate(h);for(h=
d.length;h--;)f!=e[h]&&a>=d[h]&&(!d[h+1]||a<=d[h+1])&&this.activate(e[h])},activate:function(a){this.activeTarget=a;b(this.selector).parent(".active").removeClass("active");a=b(this.selector+'[data-target="'+a+'"],'+this.selector+'[href="'+a+'"]').parent("li").addClass("active");a.parent(".dropdown-menu").length&&(a=a.closest("li.dropdown").addClass("active"));a.trigger("activate")}};b.fn.scrollspy=function(a){return this.each(function(){var c=b(this),d=c.data("scrollspy"),e="object"==typeof a&&a;
d||c.data("scrollspy",d=new f(this,e));if("string"==typeof a)d[a]()})};b.fn.scrollspy.Constructor=f;b.fn.scrollspy.defaults={offset:10};b(window).on("load",function(){b('[data-spy="scroll"]').each(function(){var a=b(this);a.scrollspy(a.data())})})}(window.jQuery);
!function(b){var f=function(a){this.element=b(a)};f.prototype={constructor:f,show:function(){var a=this.element,c=a.closest("ul:not(.dropdown-menu)"),d=a.attr("data-target"),e,f;d||(d=(d=a.attr("href"))&&d.replace(/.*(?=#[^\s]*$)/,""));a.parent("li").hasClass("active")||(e=c.find(".active:last a")[0],f=b.Event("show",{relatedTarget:e}),a.trigger(f),f.isDefaultPrevented()||(d=b(d),this.activate(a.parent("li"),c),this.activate(d,d.parent(),function(){a.trigger({type:"shown",relatedTarget:e})})))},activate:function(a,
c,d){function e(){f.removeClass("active").find("> .dropdown-menu > .active").removeClass("active");a.addClass("active");h?(a[0].offsetWidth,a.addClass("in")):a.removeClass("fade");a.parent(".dropdown-menu")&&a.closest("li.dropdown").addClass("active");d&&d()}var f=c.find("> .active"),h=d&&b.support.transition&&f.hasClass("fade");h?f.one(b.support.transition.end,e):e();f.removeClass("in")}};b.fn.tab=function(a){return this.each(function(){var c=b(this),d=c.data("tab");d||c.data("tab",d=new f(this));
if("string"==typeof a)d[a]()})};b.fn.tab.Constructor=f;b(document).on("click.tab.data-api",'[data-toggle="tab"], [data-toggle="pill"]',function(a){a.preventDefault();b(this).tab("show")})}(window.jQuery);
!function(b){var f=function(a,c){this.$element=b(a);this.options=b.extend({},b.fn.typeahead.defaults,c);this.matcher=this.options.matcher||this.matcher;this.sorter=this.options.sorter||this.sorter;this.highlighter=this.options.highlighter||this.highlighter;this.updater=this.options.updater||this.updater;this.$menu=b(this.options.menu).appendTo("body");this.source=this.options.source;this.shown=!1;this.listen()};f.prototype={constructor:f,select:function(){var a=this.$menu.find(".active").attr("data-value");
this.$element.val(this.updater(a)).change();return this.hide()},updater:function(a){return a},show:function(){var a=b.extend({},this.$element.offset(),{height:this.$element[0].offsetHeight});this.$menu.css({top:a.top+a.height,left:a.left});this.$menu.show();this.shown=!0;return this},hide:function(){this.$menu.hide();this.shown=!1;return this},lookup:function(a){this.query=this.$element.val();return!this.query||this.query.length<this.options.minLength?this.shown?this.hide():this:(a=b.isFunction(this.source)?
this.source(this.query,b.proxy(this.process,this)):this.source)?this.process(a):this},process:function(a){var c=this;a=b.grep(a,function(a){return c.matcher(a)});a=this.sorter(a);return a.length?this.render(a.slice(0,this.options.items)).show():this.shown?this.hide():this},matcher:function(a){return~a.toLowerCase().indexOf(this.query.toLowerCase())},sorter:function(a){for(var b=[],d=[],e=[],f;f=a.shift();)f.toLowerCase().indexOf(this.query.toLowerCase())?~f.indexOf(this.query)?d.push(f):e.push(f):
b.push(f);return b.concat(d,e)},highlighter:function(a){var b=this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&");return a.replace(new RegExp("("+b+")","ig"),function(a,b){return"<strong>"+b+"</strong>"})},render:function(a){var c=this;a=b(a).map(function(a,e){a=b(c.options.item).attr("data-value",e);a.find("a").html(c.highlighter(e));return a[0]});a.first().addClass("active");this.$menu.html(a);return this},next:function(a){a=this.$menu.find(".active").removeClass("active").next();a.length||
(a=b(this.$menu.find("li")[0]));a.addClass("active")},prev:function(a){a=this.$menu.find(".active").removeClass("active").prev();a.length||(a=this.$menu.find("li").last());a.addClass("active")},listen:function(){this.$element.on("blur",b.proxy(this.blur,this)).on("keypress",b.proxy(this.keypress,this)).on("keyup",b.proxy(this.keyup,this));if(this.eventSupported("keydown"))this.$element.on("keydown",b.proxy(this.keydown,this));this.$menu.on("click",b.proxy(this.click,this)).on("mouseenter","li",b.proxy(this.mouseenter,
this))},eventSupported:function(a){var b=a in this.$element;b||(this.$element.setAttribute(a,"return;"),b="function"===typeof this.$element[a]);return b},move:function(a){if(this.shown){switch(a.keyCode){case 9:case 13:case 27:a.preventDefault();break;case 38:a.preventDefault();this.prev();break;case 40:a.preventDefault(),this.next()}a.stopPropagation()}},keydown:function(a){this.suppressKeyPressRepeat=!~b.inArray(a.keyCode,[40,38,9,13,27]);this.move(a)},keypress:function(a){this.suppressKeyPressRepeat||
this.move(a)},keyup:function(a){switch(a.keyCode){case 40:case 38:case 16:case 17:case 18:break;case 9:case 13:if(!this.shown)return;this.select();break;case 27:if(!this.shown)return;this.hide();break;default:this.lookup()}a.stopPropagation();a.preventDefault()},blur:function(a){var b=this;setTimeout(function(){b.hide()},150)},click:function(a){a.stopPropagation();a.preventDefault();this.select()},mouseenter:function(a){this.$menu.find(".active").removeClass("active");b(a.currentTarget).addClass("active")}};
b.fn.typeahead=function(a){return this.each(function(){var c=b(this),d=c.data("typeahead"),e="object"==typeof a&&a;d||c.data("typeahead",d=new f(this,e));if("string"==typeof a)d[a]()})};b.fn.typeahead.defaults={source:[],items:8,menu:'<ul class="typeahead dropdown-menu"></ul>',item:'<li><a href="#"></a></li>',minLength:1};b.fn.typeahead.Constructor=f;b(document).on("focus.typeahead.data-api",'[data-provide="typeahead"]',function(a){var c=b(this);c.data("typeahead")||(a.preventDefault(),c.typeahead(c.data()))})}(window.jQuery);
!function(b){var f=function(a,c){this.options=b.extend({},b.fn.affix.defaults,c);this.$window=b(window).on("scroll.affix.data-api",b.proxy(this.checkPosition,this)).on("click.affix.data-api",b.proxy(function(){setTimeout(b.proxy(this.checkPosition,this),1)},this));this.$element=b(a);this.checkPosition()};f.prototype.checkPosition=function(){if(this.$element.is(":visible")){var a=b(document).height(),c=this.$window.scrollTop(),d=this.$element.offset(),e=this.options.offset,f=e.bottom,h=e.top;"object"!=
typeof e&&(f=h=e);"function"==typeof h&&(h=e.top());"function"==typeof f&&(f=e.bottom());a=null!=this.unpin&&c+this.unpin<=d.top?!1:null!=f&&d.top+this.$element.height()>=a-f?"bottom":null!=h&&c<=h?"top":!1;this.affixed!==a&&(this.affixed=a,this.unpin="bottom"==a?d.top-c:null,this.$element.removeClass("affix affix-top affix-bottom").addClass("affix"+(a?"-"+a:"")))}};b.fn.affix=function(a){return this.each(function(){var c=b(this),d=c.data("affix"),e="object"==typeof a&&a;d||c.data("affix",d=new f(this,
e));if("string"==typeof a)d[a]()})};b.fn.affix.Constructor=f;b.fn.affix.defaults={offset:0};b(window).on("load",function(){b('[data-spy="affix"]').each(function(){var a=b(this),c=a.data();c.offset=c.offset||{};c.offsetBottom&&(c.offset.bottom=c.offsetBottom);c.offsetTop&&(c.offset.top=c.offsetTop);a.affix(c)})})}(window.jQuery);