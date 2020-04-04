!function () {
    function e(t, n, i) {
        function o(s, a) {
            if (!n[s]) {
                if (!t[s]) {
                    var l = "function" == typeof require && require;
                    if (!a && l) return l(s, !0);
                    if (r) return r(s, !0);
                    var c = new Error("Cannot find module '" + s + "'");
                    throw c.code = "MODULE_NOT_FOUND", c
                }
                var u = n[s] = {exports: {}};
                t[s][0].call(u.exports, function (e) {
                    var n = t[s][1][e];
                    return o(n || e)
                }, u, u.exports, e, t, n, i)
            }
            return n[s].exports
        }

        for (var r = "function" == typeof require && require, s = 0; s < i.length; s++) o(i[s]);
        return o
    }

    return e
}()({
    1: [function (e, t, n) {
        !function () {
            "use strict";

            function e(t, n, i) {
                return ("string" == typeof n ? n : n.toString()).replace(t.define || s, function (e, n, o, r) {
                    return 0 === n.indexOf("def.") && (n = n.substring(4)), n in i || (":" === o ? (t.defineParams && r.replace(t.defineParams, function (e, t, o) {
                        i[n] = {arg: t, text: o}
                    }), n in i || (i[n] = r)) : new Function("def", "def['" + n + "']=" + r)(i)), ""
                }).replace(t.use || s, function (n, o) {
                    t.useParams && (o = o.replace(t.useParams, function (e, t, n, o) {
                        if (i[n] && i[n].arg && o) {
                            var r = (n + ":" + o).replace(/'|\\/g, "_");
                            return i.__exp = i.__exp || {}, i.__exp[r] = i[n].text.replace(new RegExp("(^|[^\\w$])" + i[n].arg + "([^\\w$])", "g"), "$1" + o + "$2"), t + "def.__exp['" + r + "']"
                        }
                    }));
                    var r = new Function("def", "return " + o)(i);
                    return r ? e(t, r, i) : r
                })
            }

            function n(e) {
                return e.replace(/\\('|\\)/g, "$1").replace(/[\r\t\n]/g, " ")
            }

            var i, o = {
                name: "doT",
                version: "1.1.1",
                templateSettings: {
                    evaluate: /\{\{([\s\S]+?(\}?)+)\}\}/g,
                    interpolate: /\{\{=([\s\S]+?)\}\}/g,
                    encode: /\{\{!([\s\S]+?)\}\}/g,
                    use: /\{\{#([\s\S]+?)\}\}/g,
                    useParams: /(^|[^\w$])def(?:\.|\[[\'\"])([\w$\.]+)(?:[\'\"]\])?\s*\:\s*([\w$\.]+|\"[^\"]+\"|\'[^\']+\'|\{[^\}]+\})/g,
                    define: /\{\{##\s*([\w\.$]+)\s*(\:|=)([\s\S]+?)#\}\}/g,
                    defineParams: /^\s*([\w$]+):([\s\S]+)/,
                    conditional: /\{\{\?(\?)?\s*([\s\S]*?)\s*\}\}/g,
                    iterate: /\{\{~\s*(?:\}\}|([\s\S]+?)\s*\:\s*([\w$]+)\s*(?:\:\s*([\w$]+))?\s*\}\})/g,
                    varname: "it",
                    strip: !0,
                    append: !0,
                    selfcontained: !1,
                    doNotSkipEncoded: !1
                },
                template: void 0,
                compile: void 0,
                log: !0
            };
            o.encodeHTMLSource = function (e) {
                var t = {"&": "&#38;", "<": "&#60;", ">": "&#62;", '"': "&#34;", "'": "&#39;", "/": "&#47;"},
                    n = e ? /[&<>"'\/]/g : /&(?!#?\w+;)|<|>|"|'|\//g;
                return function (e) {
                    return e ? e.toString().replace(n, function (e) {
                        return t[e] || e
                    }) : ""
                }
            }, i = function () {
                return this || (0, eval)("this")
            }(), "undefined" != typeof t && t.exports ? t.exports = o : "function" == typeof define && define.amd ? define(function () {
                return o
            }) : i.doT = o;
            var r = {
                append: {start: "'+(", end: ")+'", startencode: "'+encodeHTML("},
                split: {start: "';out+=(", end: ");out+='", startencode: "';out+=encodeHTML("}
            }, s = /$^/;
            o.template = function (t, a, l) {
                a = a || o.templateSettings;
                var c, u, d = a.append ? r.append : r.split, p = 0, f = a.use || a.define ? e(a, t, l || {}) : t;
                f = ("var out='" + (a.strip ? f.replace(/(^|\r|\n)\t* +| +\t*(\r|\n|$)/g, " ").replace(/\r|\n|\t|\/\*[\s\S]*?\*\//g, "") : f).replace(/'|\\/g, "\\$&").replace(a.interpolate || s, function (e, t) {
                    return d.start + n(t) + d.end
                }).replace(a.encode || s, function (e, t) {
                    return c = !0, d.startencode + n(t) + d.end
                }).replace(a.conditional || s, function (e, t, i) {
                    return t ? i ? "';}else if(" + n(i) + "){out+='" : "';}else{out+='" : i ? "';if(" + n(i) + "){out+='" : "';}out+='"
                }).replace(a.iterate || s, function (e, t, i, o) {
                    return t ? (p += 1, u = o || "i" + p, t = n(t), "';var arr" + p + "=" + t + ";if(arr" + p + "){var " + i + "," + u + "=-1,l" + p + "=arr" + p + ".length-1;while(" + u + "<l" + p + "){" + i + "=arr" + p + "[" + u + "+=1];out+='") : "';} } out+='"
                }).replace(a.evaluate || s, function (e, t) {
                    return "';" + n(t) + "out+='"
                }) + "';return out;").replace(/\n/g, "\\n").replace(/\t/g, "\\t").replace(/\r/g, "\\r").replace(/(\s|;|\}|^|\{)out\+='';/g, "$1").replace(/\+''/g, ""), c && (a.selfcontained || !i || i._encodeHTML || (i._encodeHTML = o.encodeHTMLSource(a.doNotSkipEncoded)), f = "var encodeHTML = typeof _encodeHTML !== 'undefined' ? _encodeHTML : (" + o.encodeHTMLSource.toString() + "(" + (a.doNotSkipEncoded || "") + "));" + f);
                try {
                    return new Function(a.varname, f)
                } catch (e) {
                    throw"undefined" != typeof console && console.log("Could not create a template function: " + f), e
                }
            }, o.compile = function (e, t) {
                return o.template(e, null, t)
            }
        }()
    }, {}],
    2: [function (e, t, n) {
        function i(e, t) {
            this.query = e, this.isUnconditional = t, this.handlers = [], this.mql = window.matchMedia(e);
            var n = this;
            this.listener = function (e) {
                n.mql = e.currentTarget || e, n.assess()
            }, this.mql.addListener(this.listener)
        }

        var o = e("./QueryHandler"), r = e("./Util").each;
        i.prototype = {
            constuctor: i, addHandler: function (e) {
                var t = new o(e);
                this.handlers.push(t), this.matches() && t.on()
            }, removeHandler: function (e) {
                var t = this.handlers;
                r(t, function (n, i) {
                    if (n.equals(e)) return n.destroy(), !t.splice(i, 1)
                })
            }, matches: function () {
                return this.mql.matches || this.isUnconditional
            }, clear: function () {
                r(this.handlers, function (e) {
                    e.destroy()
                }), this.mql.removeListener(this.listener), this.handlers.length = 0
            }, assess: function () {
                var e = this.matches() ? "on" : "off";
                r(this.handlers, function (t) {
                    t[e]()
                })
            }
        }, t.exports = i
    }, {"./QueryHandler": 4, "./Util": 5}],
    3: [function (e, t, n) {
        function i() {
            if (!window.matchMedia) throw new Error("matchMedia not present, legacy browsers require a polyfill");
            this.queries = {}, this.browserIsIncapable = !window.matchMedia("only all").matches
        }

        var o = e("./MediaQuery"), r = e("./Util"), s = r.each, a = r.isFunction, l = r.isArray;
        i.prototype = {
            constructor: i, register: function (e, t, n) {
                var i = this.queries, r = n && this.browserIsIncapable;
                return i[e] || (i[e] = new o(e, r)), a(t) && (t = {match: t}), l(t) || (t = [t]), s(t, function (t) {
                    a(t) && (t = {match: t}), i[e].addHandler(t)
                }), this
            }, unregister: function (e, t) {
                var n = this.queries[e];
                return n && (t ? n.removeHandler(t) : (n.clear(), delete this.queries[e])), this
            }
        }, t.exports = i
    }, {"./MediaQuery": 2, "./Util": 5}],
    4: [function (e, t, n) {
        function i(e) {
            this.options = e, !e.deferSetup && this.setup()
        }

        i.prototype = {
            constructor: i, setup: function () {
                this.options.setup && this.options.setup(), this.initialised = !0
            }, on: function () {
                !this.initialised && this.setup(), this.options.match && this.options.match()
            }, off: function () {
                this.options.unmatch && this.options.unmatch()
            }, destroy: function () {
                this.options.destroy ? this.options.destroy() : this.off()
            }, equals: function (e) {
                return this.options === e || this.options.match === e
            }
        }, t.exports = i
    }, {}],
    5: [function (e, t, n) {
        function i(e, t) {
            var n, i = 0, o = e.length;
            for (i; i < o && (n = t(e[i], i), n !== !1); i++) ;
        }

        function o(e) {
            return "[object Array]" === Object.prototype.toString.apply(e)
        }

        function r(e) {
            return "function" == typeof e
        }

        t.exports = {isFunction: r, isArray: o, each: i}
    }, {}],
    6: [function (e, t, n) {
        var i = e("./MediaQueryDispatch");
        t.exports = new i
    }, {"./MediaQueryDispatch": 3}],
    7: [function (e, t, n) {
        (function (n) {
            jQuery = n.jQuery = e("jquery.js");
            (function (e, t, n) {
                !function (e) {
                    "use strict";
                    "function" == typeof t && t.amd ? t(["jquery"], e) : jQuery && !jQuery.fn.hoverIntent && e(jQuery)
                }(function (e) {
                    "use strict";
                    var t, n, i = {interval: 100, sensitivity: 6, timeout: 0}, o = 0, r = function (e) {
                        t = e.pageX, n = e.pageY
                    }, s = function (e, i, o, a) {
                        return Math.sqrt((o.pX - t) * (o.pX - t) + (o.pY - n) * (o.pY - n)) < a.sensitivity ? (i.off(o.event, r), delete o.timeoutId, o.isActive = !0, e.pageX = t, e.pageY = n, delete o.pX, delete o.pY, a.over.apply(i[0], [e])) : (o.pX = t, o.pY = n, o.timeoutId = setTimeout(function () {
                            s(e, i, o, a)
                        }, a.interval), void 0)
                    }, a = function (e, t, n, i) {
                        return delete t.data("hoverIntent")[n.id], i.apply(t[0], [e])
                    };
                    e.fn.hoverIntent = function (t, n, l) {
                        var c = o++, u = e.extend({}, i);
                        e.isPlainObject(t) ? (u = e.extend(u, t), e.isFunction(u.out) || (u.out = u.over)) : u = e.isFunction(n) ? e.extend(u, {
                            over: t,
                            out: n,
                            selector: l
                        }) : e.extend(u, {over: t, out: t, selector: n});
                        var d = function (t) {
                            var n = e.extend({}, t), i = e(this), o = i.data("hoverIntent");
                            o || i.data("hoverIntent", o = {});
                            var l = o[c];
                            l || (o[c] = l = {id: c}), l.timeoutId && (l.timeoutId = clearTimeout(l.timeoutId));
                            var d = l.event = "mousemove.hoverIntent.hoverIntent" + c;
                            if ("mouseenter" === t.type) {
                                if (l.isActive) return;
                                l.pX = n.pageX, l.pY = n.pageY, i.off(d, r).on(d, r), l.timeoutId = setTimeout(function () {
                                    s(n, i, l, u)
                                }, u.interval)
                            } else {
                                if (!l.isActive) return;
                                i.off(d, r), l.timeoutId = setTimeout(function () {
                                    a(n, i, l, u.out)
                                }, u.timeout)
                            }
                        };
                        return this.on({"mouseenter.hoverIntent": d, "mouseleave.hoverIntent": d}, u.selector)
                    }
                })
            }).call(n, t, void 0, void 0)
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {"jquery.js": 10}],
    8: [function (e, t, n) {
        !function (n) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], n) : "undefined" != typeof t && t.exports ? t.exports = n(e("jquery")) : n(jQuery)
        }(function (e) {
            var t = -1, n = -1, i = function (e) {
                return parseFloat(e) || 0
            }, o = function (t) {
                var n = 1, o = e(t), r = null, s = [];
                return o.each(function () {
                    var t = e(this), o = t.offset().top - i(t.css("margin-top")),
                        a = s.length > 0 ? s[s.length - 1] : null;
                    null === a ? s.push(t) : Math.floor(Math.abs(r - o)) <= n ? s[s.length - 1] = a.add(t) : s.push(t), r = o
                }), s
            }, r = function (t) {
                var n = {byRow: !0, property: "height", target: null, remove: !1};
                return "object" == typeof t ? e.extend(n, t) : ("boolean" == typeof t ? n.byRow = t : "remove" === t && (n.remove = !0), n)
            }, s = e.fn.matchHeight = function (t) {
                var n = r(t);
                if (n.remove) {
                    var i = this;
                    return this.css(n.property, ""), e.each(s._groups, function (e, t) {
                        t.elements = t.elements.not(i)
                    }), this
                }
                return this.length <= 1 && !n.target ? this : (s._groups.push({
                    elements: this,
                    options: n
                }), s._apply(this, n), this)
            };
            s.version = "0.7.2", s._groups = [], s._throttle = 80, s._maintainScroll = !1, s._beforeUpdate = null, s._afterUpdate = null, s._rows = o, s._parse = i, s._parseOptions = r, s._apply = function (t, n) {
                var a = r(n), l = e(t), c = [l], u = e(window).scrollTop(), d = e("html").outerHeight(!0),
                    p = l.parents().filter(":hidden");
                return p.each(function () {
                    var t = e(this);
                    t.data("style-cache", t.attr("style"))
                }), p.css("display", "block"), a.byRow && !a.target && (l.each(function () {
                    var t = e(this), n = t.css("display");
                    "inline-block" !== n && "flex" !== n && "inline-flex" !== n && (n = "block"), t.data("style-cache", t.attr("style")), t.css({
                        display: n,
                        "padding-top": "0",
                        "padding-bottom": "0",
                        "margin-top": "0",
                        "margin-bottom": "0",
                        "border-top-width": "0",
                        "border-bottom-width": "0",
                        height: "100px",
                        overflow: "hidden"
                    })
                }), c = o(l), l.each(function () {
                    var t = e(this);
                    t.attr("style", t.data("style-cache") || "")
                })), e.each(c, function (t, n) {
                    var o = e(n), r = 0;
                    if (a.target) r = a.target.outerHeight(!1); else {
                        if (a.byRow && o.length <= 1) return void o.css(a.property, "");
                        o.each(function () {
                            var t = e(this), n = t.attr("style"), i = t.css("display");
                            "inline-block" !== i && "flex" !== i && "inline-flex" !== i && (i = "block");
                            var o = {display: i};
                            o[a.property] = "", t.css(o), t.outerHeight(!1) > r && (r = t.outerHeight(!1)), n ? t.attr("style", n) : t.css("display", "")
                        })
                    }
                    o.each(function () {
                        var t = e(this), n = 0;
                        a.target && t.is(a.target) || ("border-box" !== t.css("box-sizing") && (n += i(t.css("border-top-width")) + i(t.css("border-bottom-width")), n += i(t.css("padding-top")) + i(t.css("padding-bottom"))), t.css(a.property, r - n + "px"))
                    })
                }), p.each(function () {
                    var t = e(this);
                    t.attr("style", t.data("style-cache") || null)
                }), s._maintainScroll && e(window).scrollTop(u / d * e("html").outerHeight(!0)), this
            }, s._applyDataApi = function () {
                var t = {};
                e("[data-match-height], [data-mh]").each(function () {
                    var n = e(this), i = n.attr("data-mh") || n.attr("data-match-height");
                    i in t ? t[i] = t[i].add(n) : t[i] = n
                }), e.each(t, function () {
                    this.matchHeight(!0)
                })
            };
            var a = function (t) {
                s._beforeUpdate && s._beforeUpdate(t, s._groups), e.each(s._groups, function () {
                    s._apply(this.elements, this.options)
                }), s._afterUpdate && s._afterUpdate(t, s._groups)
            };
            s._update = function (i, o) {
                if (o && "resize" === o.type) {
                    var r = e(window).width();
                    if (r === t) return;
                    t = r
                }
                i ? n === -1 && (n = setTimeout(function () {
                    a(o), n = -1
                }, s._throttle)) : a(o)
            }, e(s._applyDataApi);
            var l = e.fn.on ? "on" : "bind";
            e(window)[l]("load", function (e) {
                s._update(!1, e)
            }), e(window)[l]("resize orientationchange", function (e) {
                s._update(!0, e)
            })
        })
    }, {jquery: 10}],
    9: [function (e, t, n) {
        (function (n) {
            jQuery = n.jQuery = e("jquery.js");
            (function (e, t, n) {
                !function (e) {
                    e.fn.niceSelect = function (t) {
                        function n(t) {
                            t.after(e("<div></div>").addClass("nice-select").addClass(t.attr("class") || "").addClass(t.attr("disabled") ? "disabled" : "").attr("tabindex", t.attr("disabled") ? null : "0").html('<span class="current"></span><ul class="list"></ul>'));
                            var n = t.next(), i = t.find("option"), o = t.find("option:selected");
                            n.find(".current").html(o.data("display") || o.text()), i.each(function (t) {
                                var i = e(this), o = i.data("display");
                                n.find("ul").append(e("<li></li>").attr("data-value", i.val()).attr("data-display", o || null).addClass("option" + (i.is(":selected") ? " selected" : "") + (i.is(":disabled") ? " disabled" : "")).html(i.text()))
                            })
                        }

                        if ("string" == typeof t) return "update" == t ? this.each(function () {
                            var t = e(this), i = e(this).next(".nice-select"), o = i.hasClass("open");
                            i.length && (i.remove(), n(t), o && t.next().trigger("click"))
                        }) : "destroy" == t ? (this.each(function () {
                            var t = e(this), n = e(this).next(".nice-select");
                            n.length && (n.remove(), t.css("display", ""))
                        }), 0 == e(".nice-select").length && e(document).off(".nice_select")) : console.log('Method "' + t + '" does not exist.'), this;
                        this.hide(), this.each(function () {
                            var t = e(this);
                            t.next().hasClass("nice-select") || n(t)
                        }), e(document).off(".nice_select"), e(document).on("click.nice_select", ".nice-select", function (t) {
                            var n = e(this);
                            e(".nice-select").not(n).removeClass("open"), n.toggleClass("open"), n.hasClass("open") ? (n.find(".option"), n.find(".focus").removeClass("focus"), n.find(".selected").addClass("focus")) : n.focus()
                        }), e(document).on("click.nice_select", function (t) {
                            0 === e(t.target).closest(".nice-select").length && e(".nice-select").removeClass("open").find(".option")
                        }), e(document).on("click.nice_select", ".nice-select .option:not(.disabled)", function (t) {
                            var n = e(this), i = n.closest(".nice-select");
                            i.find(".selected").removeClass("selected"), n.addClass("selected");
                            var o = n.data("display") || n.text();
                            i.find(".current").text(o), i.prev("select").val(n.data("value")).trigger("change")
                        }), e(document).on("keydown.nice_select", ".nice-select", function (t) {
                            var n = e(this), i = e(n.find(".focus") || n.find(".list .option.selected"));
                            if (32 == t.keyCode || 13 == t.keyCode) return n.hasClass("open") ? i.trigger("click") : n.trigger("click"), !1;
                            if (40 == t.keyCode) {
                                if (n.hasClass("open")) {
                                    var o = i.nextAll(".option:not(.disabled)").first();
                                    o.length > 0 && (n.find(".focus").removeClass("focus"), o.addClass("focus"))
                                } else n.trigger("click");
                                return !1
                            }
                            if (38 == t.keyCode) {
                                if (n.hasClass("open")) {
                                    var r = i.prevAll(".option:not(.disabled)").first();
                                    r.length > 0 && (n.find(".focus").removeClass("focus"), r.addClass("focus"))
                                } else n.trigger("click");
                                return !1
                            }
                            if (27 == t.keyCode) n.hasClass("open") && n.trigger("click"); else if (9 == t.keyCode && n.hasClass("open")) return !1
                        });
                        var i = document.createElement("a").style;
                        return i.cssText = "pointer-events:auto", "auto" !== i.pointerEvents && e("html").addClass("no-csspointerevents"), this
                    }
                }(jQuery)
            }).call(n, t, void 0, void 0)
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {"jquery.js": 10}],
    10: [function (e, t, n) {
        (function (e) {
            (function (e, t, n, i, o) {
                !function (t, n) {
                    "use strict";
                    "object" == typeof e && "object" == typeof e.exports ? e.exports = t.document ? n(t, !0) : function (e) {
                        if (!e.document) throw new Error("jQuery requires a window with a document");
                        return n(e)
                    } : n(t)
                }("undefined" != typeof window ? window : this, function (e, t) {
                    "use strict";

                    function n(e, t, n) {
                        n = n || ce;
                        var i, o, r = n.createElement("script");
                        if (r.text = e, t) for (i in Ce) o = t[i] || t.getAttribute && t.getAttribute(i), o && r.setAttribute(i, o);
                        n.head.appendChild(r).parentNode.removeChild(r)
                    }

                    function o(e) {
                        return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? me[ge.call(e)] || "object" : typeof e
                    }

                    function r(e) {
                        var t = !!e && "length" in e && e.length, n = o(e);
                        return !xe(e) && !ke(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e)
                    }

                    function s(e, t) {
                        return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
                    }

                    function a(e, t, n) {
                        return xe(t) ? _e.grep(e, function (e, i) {
                            return !!t.call(e, i, e) !== n
                        }) : t.nodeType ? _e.grep(e, function (e) {
                            return e === t !== n
                        }) : "string" != typeof t ? _e.grep(e, function (e) {
                            return he.call(t, e) > -1 !== n
                        }) : _e.filter(t, e, n)
                    }

                    function l(e, t) {
                        for (; (e = e[t]) && 1 !== e.nodeType;) ;
                        return e
                    }

                    function c(e) {
                        var t = {};
                        return _e.each(e.match(He) || [], function (e, n) {
                            t[n] = !0
                        }), t
                    }

                    function u(e) {
                        return e
                    }

                    function d(e) {
                        throw e
                    }

                    function p(e, t, n, i) {
                        var o;
                        try {
                            e && xe(o = e.promise) ? o.call(e).done(t).fail(n) : e && xe(o = e.then) ? o.call(e, t, n) : t.apply(void 0, [e].slice(i))
                        } catch (e) {
                            n.apply(void 0, [e])
                        }
                    }

                    function f() {
                        ce.removeEventListener("DOMContentLoaded", f), e.removeEventListener("load", f), _e.ready()
                    }

                    function h(e, t) {
                        return t.toUpperCase()
                    }

                    function m(e) {
                        return e.replace(Qe, "ms-").replace(Re, h)
                    }

                    function g() {
                        this.expando = _e.expando + g.uid++
                    }

                    function v(e) {
                        return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : Ve.test(e) ? JSON.parse(e) : e)
                    }

                    function y(e, t, n) {
                        var i;
                        if (void 0 === n && 1 === e.nodeType) if (i = "data-" + t.replace(Be, "-$&").toLowerCase(), n = e.getAttribute(i), "string" == typeof n) {
                            try {
                                n = v(n)
                            } catch (e) {
                            }
                            Ue.set(e, t, n)
                        } else n = void 0;
                        return n
                    }

                    function b(e, t, n, i) {
                        var o, r, s = 20, a = i ? function () {
                                return i.cur()
                            } : function () {
                                return _e.css(e, t, "")
                            }, l = a(), c = n && n[3] || (_e.cssNumber[t] ? "" : "px"),
                            u = e.nodeType && (_e.cssNumber[t] || "px" !== c && +l) && Ye.exec(_e.css(e, t));
                        if (u && u[3] !== c) {
                            for (l /= 2, c = c || u[3], u = +l || 1; s--;) _e.style(e, t, u + c), (1 - r) * (1 - (r = a() / l || .5)) <= 0 && (s = 0), u /= r;
                            u *= 2, _e.style(e, t, u + c), n = n || []
                        }
                        return n && (u = +u || +l || 0, o = n[1] ? u + (n[1] + 1) * n[2] : +n[2], i && (i.unit = c, i.start = u, i.end = o)), o
                    }

                    function w(e) {
                        var t, n = e.ownerDocument, i = e.nodeName, o = nt[i];
                        return o ? o : (t = n.body.appendChild(n.createElement(i)), o = _e.css(t, "display"), t.parentNode.removeChild(t), "none" === o && (o = "block"), nt[i] = o, o)
                    }

                    function x(e, t) {
                        for (var n, i, o = [], r = 0, s = e.length; r < s; r++) i = e[r], i.style && (n = i.style.display, t ? ("none" === n && (o[r] = Fe.get(i, "display") || null, o[r] || (i.style.display = "")), "" === i.style.display && et(i) && (o[r] = w(i))) : "none" !== n && (o[r] = "none", Fe.set(i, "display", n)));
                        for (r = 0; r < s; r++) null != o[r] && (e[r].style.display = o[r]);
                        return e
                    }

                    function k(e, t) {
                        var n;
                        return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && s(e, t) ? _e.merge([e], n) : n
                    }

                    function C(e, t) {
                        for (var n = 0, i = e.length; n < i; n++) Fe.set(e[n], "globalEval", !t || Fe.get(t[n], "globalEval"))
                    }

                    function T(e, t, n, i, r) {
                        for (var s, a, l, c, u, d, p = t.createDocumentFragment(), f = [], h = 0, m = e.length; h < m; h++) if (s = e[h], s || 0 === s) if ("object" === o(s)) _e.merge(f, s.nodeType ? [s] : s); else if (at.test(s)) {
                            for (a = a || p.appendChild(t.createElement("div")), l = (ot.exec(s) || ["", ""])[1].toLowerCase(), c = st[l] || st._default, a.innerHTML = c[1] + _e.htmlPrefilter(s) + c[2], d = c[0]; d--;) a = a.lastChild;
                            _e.merge(f, a.childNodes), a = p.firstChild, a.textContent = ""
                        } else f.push(t.createTextNode(s));
                        for (p.textContent = "", h = 0; s = f[h++];) if (i && _e.inArray(s, i) > -1) r && r.push(s); else if (u = Ke(s), a = k(p.appendChild(s), "script"), u && C(a), n) for (d = 0; s = a[d++];) rt.test(s.type || "") && n.push(s);
                        return p
                    }

                    function _() {
                        return !0
                    }

                    function S() {
                        return !1
                    }

                    function j(e, t) {
                        return e === $() == ("focus" === t)
                    }

                    function $() {
                        try {
                            return ce.activeElement
                        } catch (e) {
                        }
                    }

                    function A(e, t, n, i, o, r) {
                        var s, a;
                        if ("object" == typeof t) {
                            "string" != typeof n && (i = i || n, n = void 0);
                            for (a in t) A(e, a, n, i, t[a], r);
                            return e
                        }
                        if (null == i && null == o ? (o = n, i = n = void 0) : null == o && ("string" == typeof n ? (o = i, i = void 0) : (o = i, i = n, n = void 0)), o === !1) o = S; else if (!o) return e;
                        return 1 === r && (s = o, o = function (e) {
                            return _e().off(e), s.apply(this, arguments)
                        }, o.guid = s.guid || (s.guid = _e.guid++)), e.each(function () {
                            _e.event.add(this, t, o, i, n)
                        })
                    }

                    function E(e, t, n) {
                        return n ? (Fe.set(e, t, !1), void _e.event.add(e, t, {
                            namespace: !1, handler: function (e) {
                                var i, o, r = Fe.get(this, t);
                                if (1 & e.isTrigger && this[t]) {
                                    if (r.length) (_e.event.special[t] || {}).delegateType && e.stopPropagation(); else if (r = de.call(arguments), Fe.set(this, t, r), i = n(this, t), this[t](), o = Fe.get(this, t), r !== o || i ? Fe.set(this, t, !1) : o = {}, r !== o) return e.stopImmediatePropagation(), e.preventDefault(), o.value
                                } else r.length && (Fe.set(this, t, {value: _e.event.trigger(_e.extend(r[0], _e.Event.prototype), r.slice(1), this)}), e.stopImmediatePropagation())
                            }
                        })) : void (void 0 === Fe.get(e, t) && _e.event.add(e, t, _))
                    }

                    function O(e, t) {
                        return s(e, "table") && s(11 !== t.nodeType ? t : t.firstChild, "tr") ? _e(e).children("tbody")[0] || e : e
                    }

                    function D(e) {
                        return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
                    }

                    function q(e) {
                        return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
                    }

                    function P(e, t) {
                        var n, i, o, r, s, a, l, c;
                        if (1 === t.nodeType) {
                            if (Fe.hasData(e) && (r = Fe.access(e), s = Fe.set(t, r), c = r.events)) {
                                delete s.handle, s.events = {};
                                for (o in c) for (n = 0, i = c[o].length; n < i; n++) _e.event.add(t, o, c[o][n])
                            }
                            Ue.hasData(e) && (a = Ue.access(e), l = _e.extend({}, a), Ue.set(t, l))
                        }
                    }

                    function N(e, t) {
                        var n = t.nodeName.toLowerCase();
                        "input" === n && it.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue)
                    }

                    function L(e, t, i, o) {
                        t = pe.apply([], t);
                        var r, s, a, l, c, u, d = 0, p = e.length, f = p - 1, h = t[0], m = xe(h);
                        if (m || p > 1 && "string" == typeof h && !we.checkClone && ft.test(h)) return e.each(function (n) {
                            var r = e.eq(n);
                            m && (t[0] = h.call(this, n, r.html())), L(r, t, i, o)
                        });
                        if (p && (r = T(t, e[0].ownerDocument, !1, e, o), s = r.firstChild, 1 === r.childNodes.length && (r = s), s || o)) {
                            for (a = _e.map(k(r, "script"), D), l = a.length; d < p; d++) c = r, d !== f && (c = _e.clone(c, !0, !0), l && _e.merge(a, k(c, "script"))), i.call(e[d], c, d);
                            if (l) for (u = a[a.length - 1].ownerDocument, _e.map(a, q), d = 0; d < l; d++) c = a[d], rt.test(c.type || "") && !Fe.access(c, "globalEval") && _e.contains(u, c) && (c.src && "module" !== (c.type || "").toLowerCase() ? _e._evalUrl && !c.noModule && _e._evalUrl(c.src, {nonce: c.nonce || c.getAttribute("nonce")}) : n(c.textContent.replace(ht, ""), c, u))
                        }
                        return e
                    }

                    function H(e, t, n) {
                        for (var i, o = t ? _e.filter(t, e) : e, r = 0; null != (i = o[r]); r++) n || 1 !== i.nodeType || _e.cleanData(k(i)), i.parentNode && (n && Ke(i) && C(k(i, "script")), i.parentNode.removeChild(i));
                        return e
                    }

                    function M(e, t, n) {
                        var i, o, r, s, a = e.style;
                        return n = n || gt(e), n && (s = n.getPropertyValue(t) || n[t], "" !== s || Ke(e) || (s = _e.style(e, t)), !we.pixelBoxStyles() && mt.test(s) && vt.test(t) && (i = a.width, o = a.minWidth, r = a.maxWidth, a.minWidth = a.maxWidth = a.width = s, s = n.width, a.width = i, a.minWidth = o, a.maxWidth = r)), void 0 !== s ? s + "" : s
                    }

                    function I(e, t) {
                        return {
                            get: function () {
                                return e() ? void delete this.get : (this.get = t).apply(this, arguments)
                            }
                        }
                    }

                    function z(e) {
                        for (var t = e[0].toUpperCase() + e.slice(1), n = yt.length; n--;) if (e = yt[n] + t, e in bt) return e
                    }

                    function Q(e) {
                        var t = _e.cssProps[e] || wt[e];
                        return t ? t : e in bt ? e : wt[e] = z(e) || e
                    }

                    function R(e, t, n) {
                        var i = Ye.exec(t);
                        return i ? Math.max(0, i[2] - (n || 0)) + (i[3] || "px") : t
                    }

                    function W(e, t, n, i, o, r) {
                        var s = "width" === t ? 1 : 0, a = 0, l = 0;
                        if (n === (i ? "border" : "content")) return 0;
                        for (; s < 4; s += 2) "margin" === n && (l += _e.css(e, n + Xe[s], !0, o)), i ? ("content" === n && (l -= _e.css(e, "padding" + Xe[s], !0, o)), "margin" !== n && (l -= _e.css(e, "border" + Xe[s] + "Width", !0, o))) : (l += _e.css(e, "padding" + Xe[s], !0, o), "padding" !== n ? l += _e.css(e, "border" + Xe[s] + "Width", !0, o) : a += _e.css(e, "border" + Xe[s] + "Width", !0, o));
                        return !i && r >= 0 && (l += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - r - l - a - .5)) || 0), l
                    }

                    function F(e, t, n) {
                        var i = gt(e), o = !we.boxSizingReliable() || n,
                            r = o && "border-box" === _e.css(e, "boxSizing", !1, i), s = r, a = M(e, t, i),
                            l = "offset" + t[0].toUpperCase() + t.slice(1);
                        if (mt.test(a)) {
                            if (!n) return a;
                            a = "auto"
                        }
                        return (!we.boxSizingReliable() && r || "auto" === a || !parseFloat(a) && "inline" === _e.css(e, "display", !1, i)) && e.getClientRects().length && (r = "border-box" === _e.css(e, "boxSizing", !1, i), s = l in e, s && (a = e[l])), a = parseFloat(a) || 0, a + W(e, t, n || (r ? "border" : "content"), s, i, a) + "px"
                    }

                    function U(e, t, n, i, o) {
                        return new U.prototype.init(e, t, n, i, o)
                    }

                    function V() {
                        St && (ce.hidden === !1 && e.requestAnimationFrame ? e.requestAnimationFrame(V) : e.setTimeout(V, _e.fx.interval), _e.fx.tick())
                    }

                    function B() {
                        return e.setTimeout(function () {
                            _t = void 0
                        }), _t = Date.now()
                    }

                    function G(e, t) {
                        var n, i = 0, o = {height: e};
                        for (t = t ? 1 : 0; i < 4; i += 2 - t) n = Xe[i], o["margin" + n] = o["padding" + n] = e;
                        return t && (o.opacity = o.width = e), o
                    }

                    function Y(e, t, n) {
                        for (var i, o = (K.tweeners[t] || []).concat(K.tweeners["*"]), r = 0, s = o.length; r < s; r++) if (i = o[r].call(n, t, e)) return i
                    }

                    function X(e, t, n) {
                        var i, o, r, s, a, l, c, u, d = "width" in t || "height" in t, p = this, f = {}, h = e.style,
                            m = e.nodeType && et(e), g = Fe.get(e, "fxshow");
                        n.queue || (s = _e._queueHooks(e, "fx"), null == s.unqueued && (s.unqueued = 0, a = s.empty.fire, s.empty.fire = function () {
                            s.unqueued || a()
                        }), s.unqueued++, p.always(function () {
                            p.always(function () {
                                s.unqueued--, _e.queue(e, "fx").length || s.empty.fire()
                            })
                        }));
                        for (i in t) if (o = t[i], jt.test(o)) {
                            if (delete t[i], r = r || "toggle" === o, o === (m ? "hide" : "show")) {
                                if ("show" !== o || !g || void 0 === g[i]) continue;
                                m = !0
                            }
                            f[i] = g && g[i] || _e.style(e, i)
                        }
                        if (l = !_e.isEmptyObject(t), l || !_e.isEmptyObject(f)) {
                            d && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], c = g && g.display, null == c && (c = Fe.get(e, "display")), u = _e.css(e, "display"), "none" === u && (c ? u = c : (x([e], !0), c = e.style.display || c, u = _e.css(e, "display"), x([e]))), ("inline" === u || "inline-block" === u && null != c) && "none" === _e.css(e, "float") && (l || (p.done(function () {
                                h.display = c
                            }), null == c && (u = h.display, c = "none" === u ? "" : u)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function () {
                                h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                            })), l = !1;
                            for (i in f) l || (g ? "hidden" in g && (m = g.hidden) : g = Fe.access(e, "fxshow", {display: c}), r && (g.hidden = !m), m && x([e], !0), p.done(function () {
                                m || x([e]), Fe.remove(e, "fxshow");
                                for (i in f) _e.style(e, i, f[i])
                            })), l = Y(m ? g[i] : 0, i, p), i in g || (g[i] = l.start, m && (l.end = l.start, l.start = 0))
                        }
                    }

                    function J(e, t) {
                        var n, i, o, r, s;
                        for (n in e) if (i = m(n), o = t[i], r = e[n], Array.isArray(r) && (o = r[1], r = e[n] = r[0]), n !== i && (e[i] = r, delete e[n]), s = _e.cssHooks[i], s && "expand" in s) {
                            r = s.expand(r), delete e[i];
                            for (n in r) n in e || (e[n] = r[n], t[n] = o)
                        } else t[i] = o
                    }

                    function K(e, t, n) {
                        var i, o, r = 0, s = K.prefilters.length, a = _e.Deferred().always(function () {
                            delete l.elem
                        }), l = function () {
                            if (o) return !1;
                            for (var t = _t || B(), n = Math.max(0, c.startTime + c.duration - t), i = n / c.duration || 0, r = 1 - i, s = 0, l = c.tweens.length; s < l; s++) c.tweens[s].run(r);
                            return a.notifyWith(e, [c, r, n]), r < 1 && l ? n : (l || a.notifyWith(e, [c, 1, 0]), a.resolveWith(e, [c]), !1)
                        }, c = a.promise({
                            elem: e,
                            props: _e.extend({}, t),
                            opts: _e.extend(!0, {specialEasing: {}, easing: _e.easing._default}, n),
                            originalProperties: t,
                            originalOptions: n,
                            startTime: _t || B(),
                            duration: n.duration,
                            tweens: [],
                            createTween: function (t, n) {
                                var i = _e.Tween(e, c.opts, t, n, c.opts.specialEasing[t] || c.opts.easing);
                                return c.tweens.push(i), i
                            },
                            stop: function (t) {
                                var n = 0, i = t ? c.tweens.length : 0;
                                if (o) return this;
                                for (o = !0; n < i; n++) c.tweens[n].run(1);
                                return t ? (a.notifyWith(e, [c, 1, 0]), a.resolveWith(e, [c, t])) : a.rejectWith(e, [c, t]), this
                            }
                        }), u = c.props;
                        for (J(u, c.opts.specialEasing); r < s; r++) if (i = K.prefilters[r].call(c, e, u, c.opts)) return xe(i.stop) && (_e._queueHooks(c.elem, c.opts.queue).stop = i.stop.bind(i)), i;
                        return _e.map(u, Y, c), xe(c.opts.start) && c.opts.start.call(e, c), c.progress(c.opts.progress).done(c.opts.done, c.opts.complete).fail(c.opts.fail).always(c.opts.always), _e.fx.timer(_e.extend(l, {
                            elem: e,
                            anim: c,
                            queue: c.opts.queue
                        })), c
                    }

                    function Z(e) {
                        var t = e.match(He) || [];
                        return t.join(" ")
                    }

                    function ee(e) {
                        return e.getAttribute && e.getAttribute("class") || ""
                    }

                    function te(e) {
                        return Array.isArray(e) ? e : "string" == typeof e ? e.match(He) || [] : []
                    }

                    function ne(e, t, n, i) {
                        var r;
                        if (Array.isArray(t)) _e.each(t, function (t, o) {
                            n || It.test(e) ? i(e, o) : ne(e + "[" + ("object" == typeof o && null != o ? t : "") + "]", o, n, i)
                        }); else if (n || "object" !== o(t)) i(e, t); else for (r in t) ne(e + "[" + r + "]", t[r], n, i)
                    }

                    function ie(e) {
                        return function (t, n) {
                            "string" != typeof t && (n = t, t = "*");
                            var i, o = 0, r = t.toLowerCase().match(He) || [];
                            if (xe(n)) for (; i = r[o++];) "+" === i[0] ? (i = i.slice(1) || "*", (e[i] = e[i] || []).unshift(n)) : (e[i] = e[i] || []).push(n)
                        }
                    }

                    function oe(e, t, n, i) {
                        function o(a) {
                            var l;
                            return r[a] = !0, _e.each(e[a] || [], function (e, a) {
                                var c = a(t, n, i);
                                return "string" != typeof c || s || r[c] ? s ? !(l = c) : void 0 : (t.dataTypes.unshift(c), o(c), !1)
                            }), l
                        }

                        var r = {}, s = e === Jt;
                        return o(t.dataTypes[0]) || !r["*"] && o("*")
                    }

                    function re(e, t) {
                        var n, i, o = _e.ajaxSettings.flatOptions || {};
                        for (n in t) void 0 !== t[n] && ((o[n] ? e : i || (i = {}))[n] = t[n]);
                        return i && _e.extend(!0, e, i), e
                    }

                    function se(e, t, n) {
                        for (var i, o, r, s, a = e.contents, l = e.dataTypes; "*" === l[0];) l.shift(), void 0 === i && (i = e.mimeType || t.getResponseHeader("Content-Type"));
                        if (i) for (o in a) if (a[o] && a[o].test(i)) {
                            l.unshift(o);
                            break
                        }
                        if (l[0] in n) r = l[0]; else {
                            for (o in n) {
                                if (!l[0] || e.converters[o + " " + l[0]]) {
                                    r = o;
                                    break
                                }
                                s || (s = o)
                            }
                            r = r || s
                        }
                        if (r) return r !== l[0] && l.unshift(r), n[r]
                    }

                    function ae(e, t, n, i) {
                        var o, r, s, a, l, c = {}, u = e.dataTypes.slice();
                        if (u[1]) for (s in e.converters) c[s.toLowerCase()] = e.converters[s];
                        for (r = u.shift(); r;) if (e.responseFields[r] && (n[e.responseFields[r]] = t), !l && i && e.dataFilter && (t = e.dataFilter(t, e.dataType)), l = r, r = u.shift()) if ("*" === r) r = l; else if ("*" !== l && l !== r) {
                            if (s = c[l + " " + r] || c["* " + r], !s) for (o in c) if (a = o.split(" "), a[1] === r && (s = c[l + " " + a[0]] || c["* " + a[0]])) {
                                s === !0 ? s = c[o] : c[o] !== !0 && (r = a[0], u.unshift(a[1]));
                                break
                            }
                            if (s !== !0) if (s && e.throws) t = s(t); else try {
                                t = s(t)
                            } catch (e) {
                                return {state: "parsererror", error: s ? e : "No conversion from " + l + " to " + r}
                            }
                        }
                        return {state: "success", data: t}
                    }

                    var le = [], ce = e.document, ue = Object.getPrototypeOf, de = le.slice, pe = le.concat,
                        fe = le.push, he = le.indexOf, me = {}, ge = me.toString, ve = me.hasOwnProperty,
                        ye = ve.toString, be = ye.call(Object), we = {}, xe = function (e) {
                            return "function" == typeof e && "number" != typeof e.nodeType
                        }, ke = function (e) {
                            return null != e && e === e.window
                        }, Ce = {type: !0, src: !0, nonce: !0, noModule: !0}, Te = "3.4.1", _e = function (e, t) {
                            return new _e.fn.init(e, t)
                        }, Se = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    _e.fn = _e.prototype = {
                        jquery: Te, constructor: _e, length: 0, toArray: function () {
                            return de.call(this)
                        }, get: function (e) {
                            return null == e ? de.call(this) : e < 0 ? this[e + this.length] : this[e]
                        }, pushStack: function (e) {
                            var t = _e.merge(this.constructor(), e);
                            return t.prevObject = this, t
                        }, each: function (e) {
                            return _e.each(this, e)
                        }, map: function (e) {
                            return this.pushStack(_e.map(this, function (t, n) {
                                return e.call(t, n, t)
                            }))
                        }, slice: function () {
                            return this.pushStack(de.apply(this, arguments))
                        }, first: function () {
                            return this.eq(0)
                        }, last: function () {
                            return this.eq(-1)
                        }, eq: function (e) {
                            var t = this.length, n = +e + (e < 0 ? t : 0);
                            return this.pushStack(n >= 0 && n < t ? [this[n]] : [])
                        }, end: function () {
                            return this.prevObject || this.constructor()
                        }, push: fe, sort: le.sort, splice: le.splice
                    }, _e.extend = _e.fn.extend = function () {
                        var e, t, n, i, o, r, s = arguments[0] || {}, a = 1, l = arguments.length, c = !1;
                        for ("boolean" == typeof s && (c = s, s = arguments[a] || {}, a++), "object" == typeof s || xe(s) || (s = {}), a === l && (s = this, a--); a < l; a++) if (null != (e = arguments[a])) for (t in e) i = e[t], "__proto__" !== t && s !== i && (c && i && (_e.isPlainObject(i) || (o = Array.isArray(i))) ? (n = s[t], r = o && !Array.isArray(n) ? [] : o || _e.isPlainObject(n) ? n : {}, o = !1, s[t] = _e.extend(c, r, i)) : void 0 !== i && (s[t] = i));
                        return s
                    }, _e.extend({
                        expando: "jQuery" + (Te + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (e) {
                            throw new Error(e)
                        }, noop: function () {
                        }, isPlainObject: function (e) {
                            var t, n;
                            return !(!e || "[object Object]" !== ge.call(e)) && (!(t = ue(e)) || (n = ve.call(t, "constructor") && t.constructor, "function" == typeof n && ye.call(n) === be))
                        }, isEmptyObject: function (e) {
                            var t;
                            for (t in e) return !1;
                            return !0
                        }, globalEval: function (e, t) {
                            n(e, {nonce: t && t.nonce})
                        }, each: function (e, t) {
                            var n, i = 0;
                            if (r(e)) for (n = e.length; i < n && t.call(e[i], i, e[i]) !== !1; i++) ; else for (i in e) if (t.call(e[i], i, e[i]) === !1) break;
                            return e
                        }, trim: function (e) {
                            return null == e ? "" : (e + "").replace(Se, "")
                        }, makeArray: function (e, t) {
                            var n = t || [];
                            return null != e && (r(Object(e)) ? _e.merge(n, "string" == typeof e ? [e] : e) : fe.call(n, e)), n
                        }, inArray: function (e, t, n) {
                            return null == t ? -1 : he.call(t, e, n)
                        }, merge: function (e, t) {
                            for (var n = +t.length, i = 0, o = e.length; i < n; i++) e[o++] = t[i];
                            return e.length = o, e
                        }, grep: function (e, t, n) {
                            for (var i, o = [], r = 0, s = e.length, a = !n; r < s; r++) i = !t(e[r], r), i !== a && o.push(e[r]);
                            return o
                        }, map: function (e, t, n) {
                            var i, o, s = 0, a = [];
                            if (r(e)) for (i = e.length; s < i; s++) o = t(e[s], s, n), null != o && a.push(o); else for (s in e) o = t(e[s], s, n), null != o && a.push(o);
                            return pe.apply([], a)
                        }, guid: 1, support: we
                    }), "function" == typeof Symbol && (_e.fn[Symbol.iterator] = le[Symbol.iterator]), _e.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
                        me["[object " + t + "]"] = t.toLowerCase()
                    });
                    var je = function (e) {
                        function t(e, t, n, i) {
                            var o, r, s, a, l, c, u, p = t && t.ownerDocument, h = t ? t.nodeType : 9;
                            if (n = n || [], "string" != typeof e || !e || 1 !== h && 9 !== h && 11 !== h) return n;
                            if (!i && ((t ? t.ownerDocument || t : Q) !== q && D(t), t = t || q, N)) {
                                if (11 !== h && (l = be.exec(e))) if (o = l[1]) {
                                    if (9 === h) {
                                        if (!(s = t.getElementById(o))) return n;
                                        if (s.id === o) return n.push(s), n
                                    } else if (p && (s = p.getElementById(o)) && I(t, s) && s.id === o) return n.push(s), n
                                } else {
                                    if (l[2]) return Z.apply(n, t.getElementsByTagName(e)), n;
                                    if ((o = l[3]) && k.getElementsByClassName && t.getElementsByClassName) return Z.apply(n, t.getElementsByClassName(o)), n
                                }
                                if (k.qsa && !B[e + " "] && (!L || !L.test(e)) && (1 !== h || "object" !== t.nodeName.toLowerCase())) {
                                    if (u = e, p = t, 1 === h && de.test(e)) {
                                        for ((a = t.getAttribute("id")) ? a = a.replace(Ce, Te) : t.setAttribute("id", a = z),
                                                 c = S(e), r = c.length; r--;) c[r] = "#" + a + " " + f(c[r]);
                                        u = c.join(","), p = we.test(e) && d(t.parentNode) || t
                                    }
                                    try {
                                        return Z.apply(n, p.querySelectorAll(u)), n
                                    } catch (t) {
                                        B(e, !0)
                                    } finally {
                                        a === z && t.removeAttribute("id")
                                    }
                                }
                            }
                            return $(e.replace(le, "$1"), t, n, i)
                        }

                        function n() {
                            function e(n, i) {
                                return t.push(n + " ") > C.cacheLength && delete e[t.shift()], e[n + " "] = i
                            }

                            var t = [];
                            return e
                        }

                        function i(e) {
                            return e[z] = !0, e
                        }

                        function o(e) {
                            var t = q.createElement("fieldset");
                            try {
                                return !!e(t)
                            } catch (e) {
                                return !1
                            } finally {
                                t.parentNode && t.parentNode.removeChild(t), t = null
                            }
                        }

                        function r(e, t) {
                            for (var n = e.split("|"), i = n.length; i--;) C.attrHandle[n[i]] = t
                        }

                        function s(e, t) {
                            var n = t && e,
                                i = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
                            if (i) return i;
                            if (n) for (; n = n.nextSibling;) if (n === t) return -1;
                            return e ? 1 : -1
                        }

                        function a(e) {
                            return function (t) {
                                var n = t.nodeName.toLowerCase();
                                return "input" === n && t.type === e
                            }
                        }

                        function l(e) {
                            return function (t) {
                                var n = t.nodeName.toLowerCase();
                                return ("input" === n || "button" === n) && t.type === e
                            }
                        }

                        function c(e) {
                            return function (t) {
                                return "form" in t ? t.parentNode && t.disabled === !1 ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && Se(t) === e : t.disabled === e : "label" in t && t.disabled === e
                            }
                        }

                        function u(e) {
                            return i(function (t) {
                                return t = +t, i(function (n, i) {
                                    for (var o, r = e([], n.length, t), s = r.length; s--;) n[o = r[s]] && (n[o] = !(i[o] = n[o]))
                                })
                            })
                        }

                        function d(e) {
                            return e && "undefined" != typeof e.getElementsByTagName && e
                        }

                        function p() {
                        }

                        function f(e) {
                            for (var t = 0, n = e.length, i = ""; t < n; t++) i += e[t].value;
                            return i
                        }

                        function h(e, t, n) {
                            var i = t.dir, o = t.next, r = o || i, s = n && "parentNode" === r, a = W++;
                            return t.first ? function (t, n, o) {
                                for (; t = t[i];) if (1 === t.nodeType || s) return e(t, n, o);
                                return !1
                            } : function (t, n, l) {
                                var c, u, d, p = [R, a];
                                if (l) {
                                    for (; t = t[i];) if ((1 === t.nodeType || s) && e(t, n, l)) return !0
                                } else for (; t = t[i];) if (1 === t.nodeType || s) if (d = t[z] || (t[z] = {}), u = d[t.uniqueID] || (d[t.uniqueID] = {}), o && o === t.nodeName.toLowerCase()) t = t[i] || t; else {
                                    if ((c = u[r]) && c[0] === R && c[1] === a) return p[2] = c[2];
                                    if (u[r] = p, p[2] = e(t, n, l)) return !0
                                }
                                return !1
                            }
                        }

                        function m(e) {
                            return e.length > 1 ? function (t, n, i) {
                                for (var o = e.length; o--;) if (!e[o](t, n, i)) return !1;
                                return !0
                            } : e[0]
                        }

                        function g(e, n, i) {
                            for (var o = 0, r = n.length; o < r; o++) t(e, n[o], i);
                            return i
                        }

                        function v(e, t, n, i, o) {
                            for (var r, s = [], a = 0, l = e.length, c = null != t; a < l; a++) (r = e[a]) && (n && !n(r, i, o) || (s.push(r), c && t.push(a)));
                            return s
                        }

                        function y(e, t, n, o, r, s) {
                            return o && !o[z] && (o = y(o)), r && !r[z] && (r = y(r, s)), i(function (i, s, a, l) {
                                var c, u, d, p = [], f = [], h = s.length,
                                    m = i || g(t || "*", a.nodeType ? [a] : a, []),
                                    y = !e || !i && t ? m : v(m, p, e, a, l),
                                    b = n ? r || (i ? e : h || o) ? [] : s : y;
                                if (n && n(y, b, a, l), o) for (c = v(b, f), o(c, [], a, l), u = c.length; u--;) (d = c[u]) && (b[f[u]] = !(y[f[u]] = d));
                                if (i) {
                                    if (r || e) {
                                        if (r) {
                                            for (c = [], u = b.length; u--;) (d = b[u]) && c.push(y[u] = d);
                                            r(null, b = [], c, l)
                                        }
                                        for (u = b.length; u--;) (d = b[u]) && (c = r ? te(i, d) : p[u]) > -1 && (i[c] = !(s[c] = d))
                                    }
                                } else b = v(b === s ? b.splice(h, b.length) : b), r ? r(null, s, b, l) : Z.apply(s, b)
                            })
                        }

                        function b(e) {
                            for (var t, n, i, o = e.length, r = C.relative[e[0].type], s = r || C.relative[" "], a = r ? 1 : 0, l = h(function (e) {
                                return e === t
                            }, s, !0), c = h(function (e) {
                                return te(t, e) > -1
                            }, s, !0), u = [function (e, n, i) {
                                var o = !r && (i || n !== A) || ((t = n).nodeType ? l(e, n, i) : c(e, n, i));
                                return t = null, o
                            }]; a < o; a++) if (n = C.relative[e[a].type]) u = [h(m(u), n)]; else {
                                if (n = C.filter[e[a].type].apply(null, e[a].matches), n[z]) {
                                    for (i = ++a; i < o && !C.relative[e[i].type]; i++) ;
                                    return y(a > 1 && m(u), a > 1 && f(e.slice(0, a - 1).concat({value: " " === e[a - 2].type ? "*" : ""})).replace(le, "$1"), n, a < i && b(e.slice(a, i)), i < o && b(e = e.slice(i)), i < o && f(e))
                                }
                                u.push(n)
                            }
                            return m(u)
                        }

                        function w(e, n) {
                            var o = n.length > 0, r = e.length > 0, s = function (i, s, a, l, c) {
                                var u, d, p, f = 0, h = "0", m = i && [], g = [], y = A,
                                    b = i || r && C.find.TAG("*", c), w = R += null == y ? 1 : Math.random() || .1,
                                    x = b.length;
                                for (c && (A = s === q || s || c); h !== x && null != (u = b[h]); h++) {
                                    if (r && u) {
                                        for (d = 0, s || u.ownerDocument === q || (D(u), a = !N); p = e[d++];) if (p(u, s || q, a)) {
                                            l.push(u);
                                            break
                                        }
                                        c && (R = w)
                                    }
                                    o && ((u = !p && u) && f--, i && m.push(u))
                                }
                                if (f += h, o && h !== f) {
                                    for (d = 0; p = n[d++];) p(m, g, s, a);
                                    if (i) {
                                        if (f > 0) for (; h--;) m[h] || g[h] || (g[h] = J.call(l));
                                        g = v(g)
                                    }
                                    Z.apply(l, g), c && !i && g.length > 0 && f + n.length > 1 && t.uniqueSort(l)
                                }
                                return c && (R = w, A = y), m
                            };
                            return o ? i(s) : s
                        }

                        var x, k, C, T, _, S, j, $, A, E, O, D, q, P, N, L, H, M, I, z = "sizzle" + 1 * new Date,
                            Q = e.document, R = 0, W = 0, F = n(), U = n(), V = n(), B = n(), G = function (e, t) {
                                return e === t && (O = !0), 0
                            }, Y = {}.hasOwnProperty, X = [], J = X.pop, K = X.push, Z = X.push, ee = X.slice,
                            te = function (e, t) {
                                for (var n = 0, i = e.length; n < i; n++) if (e[n] === t) return n;
                                return -1
                            },
                            ne = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                            ie = "[\\x20\\t\\r\\n\\f]", oe = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
                            re = "\\[" + ie + "*(" + oe + ")(?:" + ie + "*([*^$|!~]?=)" + ie + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + oe + "))|)" + ie + "*\\]",
                            se = ":(" + oe + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + re + ")*)|.*)\\)|)",
                            ae = new RegExp(ie + "+", "g"),
                            le = new RegExp("^" + ie + "+|((?:^|[^\\\\])(?:\\\\.)*)" + ie + "+$", "g"),
                            ce = new RegExp("^" + ie + "*," + ie + "*"),
                            ue = new RegExp("^" + ie + "*([>+~]|" + ie + ")" + ie + "*"), de = new RegExp(ie + "|>"),
                            pe = new RegExp(se), fe = new RegExp("^" + oe + "$"), he = {
                                ID: new RegExp("^#(" + oe + ")"),
                                CLASS: new RegExp("^\\.(" + oe + ")"),
                                TAG: new RegExp("^(" + oe + "|[*])"),
                                ATTR: new RegExp("^" + re),
                                PSEUDO: new RegExp("^" + se),
                                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + ie + "*(even|odd|(([+-]|)(\\d*)n|)" + ie + "*(?:([+-]|)" + ie + "*(\\d+)|))" + ie + "*\\)|)", "i"),
                                bool: new RegExp("^(?:" + ne + ")$", "i"),
                                needsContext: new RegExp("^" + ie + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + ie + "*((?:-\\d)?\\d*)" + ie + "*\\)|)(?=[^-]|$)", "i")
                            }, me = /HTML$/i, ge = /^(?:input|select|textarea|button)$/i, ve = /^h\d$/i,
                            ye = /^[^{]+\{\s*\[native \w/, be = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, we = /[+~]/,
                            xe = new RegExp("\\\\([\\da-f]{1,6}" + ie + "?|(" + ie + ")|.)", "ig"),
                            ke = function (e, t, n) {
                                var i = "0x" + t - 65536;
                                return i !== i || n ? t : i < 0 ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320)
                            }, Ce = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, Te = function (e, t) {
                                return t ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
                            }, _e = function () {
                                D()
                            }, Se = h(function (e) {
                                return e.disabled === !0 && "fieldset" === e.nodeName.toLowerCase()
                            }, {dir: "parentNode", next: "legend"});
                        try {
                            Z.apply(X = ee.call(Q.childNodes), Q.childNodes), X[Q.childNodes.length].nodeType
                        } catch (e) {
                            Z = {
                                apply: X.length ? function (e, t) {
                                    K.apply(e, ee.call(t))
                                } : function (e, t) {
                                    for (var n = e.length, i = 0; e[n++] = t[i++];) ;
                                    e.length = n - 1
                                }
                            }
                        }
                        k = t.support = {}, _ = t.isXML = function (e) {
                            var t = e.namespaceURI, n = (e.ownerDocument || e).documentElement;
                            return !me.test(t || n && n.nodeName || "HTML")
                        }, D = t.setDocument = function (e) {
                            var t, n, i = e ? e.ownerDocument || e : Q;
                            return i !== q && 9 === i.nodeType && i.documentElement ? (q = i, P = q.documentElement, N = !_(q), Q !== q && (n = q.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", _e, !1) : n.attachEvent && n.attachEvent("onunload", _e)), k.attributes = o(function (e) {
                                return e.className = "i", !e.getAttribute("className")
                            }), k.getElementsByTagName = o(function (e) {
                                return e.appendChild(q.createComment("")), !e.getElementsByTagName("*").length
                            }), k.getElementsByClassName = ye.test(q.getElementsByClassName), k.getById = o(function (e) {
                                return P.appendChild(e).id = z, !q.getElementsByName || !q.getElementsByName(z).length
                            }), k.getById ? (C.filter.ID = function (e) {
                                var t = e.replace(xe, ke);
                                return function (e) {
                                    return e.getAttribute("id") === t
                                }
                            }, C.find.ID = function (e, t) {
                                if ("undefined" != typeof t.getElementById && N) {
                                    var n = t.getElementById(e);
                                    return n ? [n] : []
                                }
                            }) : (C.filter.ID = function (e) {
                                var t = e.replace(xe, ke);
                                return function (e) {
                                    var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
                                    return n && n.value === t
                                }
                            }, C.find.ID = function (e, t) {
                                if ("undefined" != typeof t.getElementById && N) {
                                    var n, i, o, r = t.getElementById(e);
                                    if (r) {
                                        if (n = r.getAttributeNode("id"), n && n.value === e) return [r];
                                        for (o = t.getElementsByName(e), i = 0; r = o[i++];) if (n = r.getAttributeNode("id"), n && n.value === e) return [r]
                                    }
                                    return []
                                }
                            }), C.find.TAG = k.getElementsByTagName ? function (e, t) {
                                return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : k.qsa ? t.querySelectorAll(e) : void 0
                            } : function (e, t) {
                                var n, i = [], o = 0, r = t.getElementsByTagName(e);
                                if ("*" === e) {
                                    for (; n = r[o++];) 1 === n.nodeType && i.push(n);
                                    return i
                                }
                                return r
                            }, C.find.CLASS = k.getElementsByClassName && function (e, t) {
                                if ("undefined" != typeof t.getElementsByClassName && N) return t.getElementsByClassName(e)
                            }, H = [], L = [], (k.qsa = ye.test(q.querySelectorAll)) && (o(function (e) {
                                P.appendChild(e).innerHTML = "<a id='" + z + "'></a><select id='" + z + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && L.push("[*^$]=" + ie + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || L.push("\\[" + ie + "*(?:value|" + ne + ")"), e.querySelectorAll("[id~=" + z + "-]").length || L.push("~="), e.querySelectorAll(":checked").length || L.push(":checked"), e.querySelectorAll("a#" + z + "+*").length || L.push(".#.+[+~]")
                            }), o(function (e) {
                                e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                                var t = q.createElement("input");
                                t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && L.push("name" + ie + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && L.push(":enabled", ":disabled"), P.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && L.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), L.push(",.*:")
                            })), (k.matchesSelector = ye.test(M = P.matches || P.webkitMatchesSelector || P.mozMatchesSelector || P.oMatchesSelector || P.msMatchesSelector)) && o(function (e) {
                                k.disconnectedMatch = M.call(e, "*"), M.call(e, "[s!='']:x"), H.push("!=", se)
                            }), L = L.length && new RegExp(L.join("|")), H = H.length && new RegExp(H.join("|")), t = ye.test(P.compareDocumentPosition), I = t || ye.test(P.contains) ? function (e, t) {
                                var n = 9 === e.nodeType ? e.documentElement : e, i = t && t.parentNode;
                                return e === i || !(!i || 1 !== i.nodeType || !(n.contains ? n.contains(i) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(i)))
                            } : function (e, t) {
                                if (t) for (; t = t.parentNode;) if (t === e) return !0;
                                return !1
                            }, G = t ? function (e, t) {
                                if (e === t) return O = !0, 0;
                                var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                                return n ? n : (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1, 1 & n || !k.sortDetached && t.compareDocumentPosition(e) === n ? e === q || e.ownerDocument === Q && I(Q, e) ? -1 : t === q || t.ownerDocument === Q && I(Q, t) ? 1 : E ? te(E, e) - te(E, t) : 0 : 4 & n ? -1 : 1)
                            } : function (e, t) {
                                if (e === t) return O = !0, 0;
                                var n, i = 0, o = e.parentNode, r = t.parentNode, a = [e], l = [t];
                                if (!o || !r) return e === q ? -1 : t === q ? 1 : o ? -1 : r ? 1 : E ? te(E, e) - te(E, t) : 0;
                                if (o === r) return s(e, t);
                                for (n = e; n = n.parentNode;) a.unshift(n);
                                for (n = t; n = n.parentNode;) l.unshift(n);
                                for (; a[i] === l[i];) i++;
                                return i ? s(a[i], l[i]) : a[i] === Q ? -1 : l[i] === Q ? 1 : 0
                            }, q) : q
                        }, t.matches = function (e, n) {
                            return t(e, null, null, n)
                        }, t.matchesSelector = function (e, n) {
                            if ((e.ownerDocument || e) !== q && D(e), k.matchesSelector && N && !B[n + " "] && (!H || !H.test(n)) && (!L || !L.test(n))) try {
                                var i = M.call(e, n);
                                if (i || k.disconnectedMatch || e.document && 11 !== e.document.nodeType) return i
                            } catch (e) {
                                B(n, !0)
                            }
                            return t(n, q, null, [e]).length > 0
                        }, t.contains = function (e, t) {
                            return (e.ownerDocument || e) !== q && D(e), I(e, t)
                        }, t.attr = function (e, t) {
                            (e.ownerDocument || e) !== q && D(e);
                            var n = C.attrHandle[t.toLowerCase()],
                                i = n && Y.call(C.attrHandle, t.toLowerCase()) ? n(e, t, !N) : void 0;
                            return void 0 !== i ? i : k.attributes || !N ? e.getAttribute(t) : (i = e.getAttributeNode(t)) && i.specified ? i.value : null
                        }, t.escape = function (e) {
                            return (e + "").replace(Ce, Te)
                        }, t.error = function (e) {
                            throw new Error("Syntax error, unrecognized expression: " + e)
                        }, t.uniqueSort = function (e) {
                            var t, n = [], i = 0, o = 0;
                            if (O = !k.detectDuplicates, E = !k.sortStable && e.slice(0), e.sort(G), O) {
                                for (; t = e[o++];) t === e[o] && (i = n.push(o));
                                for (; i--;) e.splice(n[i], 1)
                            }
                            return E = null, e
                        }, T = t.getText = function (e) {
                            var t, n = "", i = 0, o = e.nodeType;
                            if (o) {
                                if (1 === o || 9 === o || 11 === o) {
                                    if ("string" == typeof e.textContent) return e.textContent;
                                    for (e = e.firstChild; e; e = e.nextSibling) n += T(e)
                                } else if (3 === o || 4 === o) return e.nodeValue
                            } else for (; t = e[i++];) n += T(t);
                            return n
                        }, C = t.selectors = {
                            cacheLength: 50,
                            createPseudo: i,
                            match: he,
                            attrHandle: {},
                            find: {},
                            relative: {
                                ">": {dir: "parentNode", first: !0},
                                " ": {dir: "parentNode"},
                                "+": {dir: "previousSibling", first: !0},
                                "~": {dir: "previousSibling"}
                            },
                            preFilter: {
                                ATTR: function (e) {
                                    return e[1] = e[1].replace(xe, ke), e[3] = (e[3] || e[4] || e[5] || "").replace(xe, ke), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                                }, CHILD: function (e) {
                                    return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || t.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && t.error(e[0]), e
                                }, PSEUDO: function (e) {
                                    var t, n = !e[6] && e[2];
                                    return he.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && pe.test(n) && (t = S(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                                }
                            },
                            filter: {
                                TAG: function (e) {
                                    var t = e.replace(xe, ke).toLowerCase();
                                    return "*" === e ? function () {
                                        return !0
                                    } : function (e) {
                                        return e.nodeName && e.nodeName.toLowerCase() === t
                                    }
                                }, CLASS: function (e) {
                                    var t = F[e + " "];
                                    return t || (t = new RegExp("(^|" + ie + ")" + e + "(" + ie + "|$)")) && F(e, function (e) {
                                        return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "")
                                    })
                                }, ATTR: function (e, n, i) {
                                    return function (o) {
                                        var r = t.attr(o, e);
                                        return null == r ? "!=" === n : !n || (r += "", "=" === n ? r === i : "!=" === n ? r !== i : "^=" === n ? i && 0 === r.indexOf(i) : "*=" === n ? i && r.indexOf(i) > -1 : "$=" === n ? i && r.slice(-i.length) === i : "~=" === n ? (" " + r.replace(ae, " ") + " ").indexOf(i) > -1 : "|=" === n && (r === i || r.slice(0, i.length + 1) === i + "-"))
                                    }
                                }, CHILD: function (e, t, n, i, o) {
                                    var r = "nth" !== e.slice(0, 3), s = "last" !== e.slice(-4), a = "of-type" === t;
                                    return 1 === i && 0 === o ? function (e) {
                                        return !!e.parentNode
                                    } : function (t, n, l) {
                                        var c, u, d, p, f, h, m = r !== s ? "nextSibling" : "previousSibling",
                                            g = t.parentNode, v = a && t.nodeName.toLowerCase(), y = !l && !a, b = !1;
                                        if (g) {
                                            if (r) {
                                                for (; m;) {
                                                    for (p = t; p = p[m];) if (a ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) return !1;
                                                    h = m = "only" === e && !h && "nextSibling"
                                                }
                                                return !0
                                            }
                                            if (h = [s ? g.firstChild : g.lastChild], s && y) {
                                                for (p = g, d = p[z] || (p[z] = {}), u = d[p.uniqueID] || (d[p.uniqueID] = {}), c = u[e] || [], f = c[0] === R && c[1], b = f && c[2], p = f && g.childNodes[f]; p = ++f && p && p[m] || (b = f = 0) || h.pop();) if (1 === p.nodeType && ++b && p === t) {
                                                    u[e] = [R, f, b];
                                                    break
                                                }
                                            } else if (y && (p = t, d = p[z] || (p[z] = {}), u = d[p.uniqueID] || (d[p.uniqueID] = {}), c = u[e] || [], f = c[0] === R && c[1], b = f), b === !1) for (; (p = ++f && p && p[m] || (b = f = 0) || h.pop()) && ((a ? p.nodeName.toLowerCase() !== v : 1 !== p.nodeType) || !++b || (y && (d = p[z] || (p[z] = {}), u = d[p.uniqueID] || (d[p.uniqueID] = {}), u[e] = [R, b]), p !== t));) ;
                                            return b -= o, b === i || b % i === 0 && b / i >= 0
                                        }
                                    }
                                }, PSEUDO: function (e, n) {
                                    var o,
                                        r = C.pseudos[e] || C.setFilters[e.toLowerCase()] || t.error("unsupported pseudo: " + e);
                                    return r[z] ? r(n) : r.length > 1 ? (o = [e, e, "", n], C.setFilters.hasOwnProperty(e.toLowerCase()) ? i(function (e, t) {
                                        for (var i, o = r(e, n), s = o.length; s--;) i = te(e, o[s]), e[i] = !(t[i] = o[s])
                                    }) : function (e) {
                                        return r(e, 0, o)
                                    }) : r
                                }
                            },
                            pseudos: {
                                not: i(function (e) {
                                    var t = [], n = [], o = j(e.replace(le, "$1"));
                                    return o[z] ? i(function (e, t, n, i) {
                                        for (var r, s = o(e, null, i, []), a = e.length; a--;) (r = s[a]) && (e[a] = !(t[a] = r))
                                    }) : function (e, i, r) {
                                        return t[0] = e, o(t, null, r, n), t[0] = null, !n.pop()
                                    }
                                }), has: i(function (e) {
                                    return function (n) {
                                        return t(e, n).length > 0
                                    }
                                }), contains: i(function (e) {
                                    return e = e.replace(xe, ke), function (t) {
                                        return (t.textContent || T(t)).indexOf(e) > -1
                                    }
                                }), lang: i(function (e) {
                                    return fe.test(e || "") || t.error("unsupported lang: " + e), e = e.replace(xe, ke).toLowerCase(), function (t) {
                                        var n;
                                        do if (n = N ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return n = n.toLowerCase(), n === e || 0 === n.indexOf(e + "-"); while ((t = t.parentNode) && 1 === t.nodeType);
                                        return !1
                                    }
                                }), target: function (t) {
                                    var n = e.location && e.location.hash;
                                    return n && n.slice(1) === t.id
                                }, root: function (e) {
                                    return e === P
                                }, focus: function (e) {
                                    return e === q.activeElement && (!q.hasFocus || q.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                                }, enabled: c(!1), disabled: c(!0), checked: function (e) {
                                    var t = e.nodeName.toLowerCase();
                                    return "input" === t && !!e.checked || "option" === t && !!e.selected
                                }, selected: function (e) {
                                    return e.parentNode && e.parentNode.selectedIndex, e.selected === !0
                                }, empty: function (e) {
                                    for (e = e.firstChild; e; e = e.nextSibling) if (e.nodeType < 6) return !1;
                                    return !0
                                }, parent: function (e) {
                                    return !C.pseudos.empty(e)
                                }, header: function (e) {
                                    return ve.test(e.nodeName)
                                }, input: function (e) {
                                    return ge.test(e.nodeName)
                                }, button: function (e) {
                                    var t = e.nodeName.toLowerCase();
                                    return "input" === t && "button" === e.type || "button" === t
                                }, text: function (e) {
                                    var t;
                                    return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                                }, first: u(function () {
                                    return [0]
                                }), last: u(function (e, t) {
                                    return [t - 1]
                                }), eq: u(function (e, t, n) {
                                    return [n < 0 ? n + t : n]
                                }), even: u(function (e, t) {
                                    for (var n = 0; n < t; n += 2) e.push(n);
                                    return e
                                }), odd: u(function (e, t) {
                                    for (var n = 1; n < t; n += 2) e.push(n);
                                    return e
                                }), lt: u(function (e, t, n) {
                                    for (var i = n < 0 ? n + t : n > t ? t : n; --i >= 0;) e.push(i);
                                    return e
                                }), gt: u(function (e, t, n) {
                                    for (var i = n < 0 ? n + t : n; ++i < t;) e.push(i);
                                    return e
                                })
                            }
                        }, C.pseudos.nth = C.pseudos.eq;
                        for (x in {radio: !0, checkbox: !0, file: !0, password: !0, image: !0}) C.pseudos[x] = a(x);
                        for (x in {submit: !0, reset: !0}) C.pseudos[x] = l(x);
                        return p.prototype = C.filters = C.pseudos, C.setFilters = new p, S = t.tokenize = function (e, n) {
                            var i, o, r, s, a, l, c, u = U[e + " "];
                            if (u) return n ? 0 : u.slice(0);
                            for (a = e, l = [], c = C.preFilter; a;) {
                                i && !(o = ce.exec(a)) || (o && (a = a.slice(o[0].length) || a), l.push(r = [])), i = !1, (o = ue.exec(a)) && (i = o.shift(), r.push({
                                    value: i,
                                    type: o[0].replace(le, " ")
                                }), a = a.slice(i.length));
                                for (s in C.filter) !(o = he[s].exec(a)) || c[s] && !(o = c[s](o)) || (i = o.shift(), r.push({
                                    value: i,
                                    type: s,
                                    matches: o
                                }), a = a.slice(i.length));
                                if (!i) break
                            }
                            return n ? a.length : a ? t.error(e) : U(e, l).slice(0)
                        }, j = t.compile = function (e, t) {
                            var n, i = [], o = [], r = V[e + " "];
                            if (!r) {
                                for (t || (t = S(e)), n = t.length; n--;) r = b(t[n]), r[z] ? i.push(r) : o.push(r);
                                r = V(e, w(o, i)), r.selector = e
                            }
                            return r
                        }, $ = t.select = function (e, t, n, i) {
                            var o, r, s, a, l, c = "function" == typeof e && e, u = !i && S(e = c.selector || e);
                            if (n = n || [], 1 === u.length) {
                                if (r = u[0] = u[0].slice(0), r.length > 2 && "ID" === (s = r[0]).type && 9 === t.nodeType && N && C.relative[r[1].type]) {
                                    if (t = (C.find.ID(s.matches[0].replace(xe, ke), t) || [])[0], !t) return n;
                                    c && (t = t.parentNode), e = e.slice(r.shift().value.length)
                                }
                                for (o = he.needsContext.test(e) ? 0 : r.length; o-- && (s = r[o], !C.relative[a = s.type]);) if ((l = C.find[a]) && (i = l(s.matches[0].replace(xe, ke), we.test(r[0].type) && d(t.parentNode) || t))) {
                                    if (r.splice(o, 1), e = i.length && f(r), !e) return Z.apply(n, i), n;
                                    break
                                }
                            }
                            return (c || j(e, u))(i, t, !N, n, !t || we.test(e) && d(t.parentNode) || t), n
                        }, k.sortStable = z.split("").sort(G).join("") === z, k.detectDuplicates = !!O, D(), k.sortDetached = o(function (e) {
                            return 1 & e.compareDocumentPosition(q.createElement("fieldset"))
                        }), o(function (e) {
                            return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
                        }) || r("type|href|height|width", function (e, t, n) {
                            if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
                        }), k.attributes && o(function (e) {
                            return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
                        }) || r("value", function (e, t, n) {
                            if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
                        }), o(function (e) {
                            return null == e.getAttribute("disabled")
                        }) || r(ne, function (e, t, n) {
                            var i;
                            if (!n) return e[t] === !0 ? t.toLowerCase() : (i = e.getAttributeNode(t)) && i.specified ? i.value : null
                        }), t
                    }(e);
                    _e.find = je, _e.expr = je.selectors, _e.expr[":"] = _e.expr.pseudos, _e.uniqueSort = _e.unique = je.uniqueSort, _e.text = je.getText, _e.isXMLDoc = je.isXML, _e.contains = je.contains, _e.escapeSelector = je.escape;
                    var $e = function (e, t, n) {
                            for (var i = [], o = void 0 !== n; (e = e[t]) && 9 !== e.nodeType;) if (1 === e.nodeType) {
                                if (o && _e(e).is(n)) break;
                                i.push(e)
                            }
                            return i
                        }, Ae = function (e, t) {
                            for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
                            return n
                        }, Ee = _e.expr.match.needsContext,
                        Oe = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;
                    _e.filter = function (e, t, n) {
                        var i = t[0];
                        return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === i.nodeType ? _e.find.matchesSelector(i, e) ? [i] : [] : _e.find.matches(e, _e.grep(t, function (e) {
                            return 1 === e.nodeType
                        }))
                    }, _e.fn.extend({
                        find: function (e) {
                            var t, n, i = this.length, o = this;
                            if ("string" != typeof e) return this.pushStack(_e(e).filter(function () {
                                for (t = 0; t < i; t++) if (_e.contains(o[t], this)) return !0
                            }));
                            for (n = this.pushStack([]), t = 0; t < i; t++) _e.find(e, o[t], n);
                            return i > 1 ? _e.uniqueSort(n) : n
                        }, filter: function (e) {
                            return this.pushStack(a(this, e || [], !1))
                        }, not: function (e) {
                            return this.pushStack(a(this, e || [], !0))
                        }, is: function (e) {
                            return !!a(this, "string" == typeof e && Ee.test(e) ? _e(e) : e || [], !1).length
                        }
                    });
                    var De, qe = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/, Pe = _e.fn.init = function (e, t, n) {
                        var i, o;
                        if (!e) return this;
                        if (n = n || De, "string" == typeof e) {
                            if (i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : qe.exec(e), !i || !i[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
                            if (i[1]) {
                                if (t = t instanceof _e ? t[0] : t, _e.merge(this, _e.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : ce, !0)), Oe.test(i[1]) && _e.isPlainObject(t)) for (i in t) xe(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
                                return this
                            }
                            return o = ce.getElementById(i[2]), o && (this[0] = o, this.length = 1), this
                        }
                        return e.nodeType ? (this[0] = e, this.length = 1, this) : xe(e) ? void 0 !== n.ready ? n.ready(e) : e(_e) : _e.makeArray(e, this)
                    };
                    Pe.prototype = _e.fn, De = _e(ce);
                    var Ne = /^(?:parents|prev(?:Until|All))/, Le = {children: !0, contents: !0, next: !0, prev: !0};
                    _e.fn.extend({
                        has: function (e) {
                            var t = _e(e, this), n = t.length;
                            return this.filter(function () {
                                for (var e = 0; e < n; e++) if (_e.contains(this, t[e])) return !0
                            })
                        }, closest: function (e, t) {
                            var n, i = 0, o = this.length, r = [], s = "string" != typeof e && _e(e);
                            if (!Ee.test(e)) for (; i < o; i++) for (n = this[i]; n && n !== t; n = n.parentNode) if (n.nodeType < 11 && (s ? s.index(n) > -1 : 1 === n.nodeType && _e.find.matchesSelector(n, e))) {
                                r.push(n);
                                break
                            }
                            return this.pushStack(r.length > 1 ? _e.uniqueSort(r) : r)
                        }, index: function (e) {
                            return e ? "string" == typeof e ? he.call(_e(e), this[0]) : he.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
                        }, add: function (e, t) {
                            return this.pushStack(_e.uniqueSort(_e.merge(this.get(), _e(e, t))))
                        }, addBack: function (e) {
                            return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
                        }
                    }), _e.each({
                        parent: function (e) {
                            var t = e.parentNode;
                            return t && 11 !== t.nodeType ? t : null
                        }, parents: function (e) {
                            return $e(e, "parentNode")
                        }, parentsUntil: function (e, t, n) {
                            return $e(e, "parentNode", n)
                        }, next: function (e) {
                            return l(e, "nextSibling")
                        }, prev: function (e) {
                            return l(e, "previousSibling")
                        }, nextAll: function (e) {
                            return $e(e, "nextSibling")
                        }, prevAll: function (e) {
                            return $e(e, "previousSibling")
                        }, nextUntil: function (e, t, n) {
                            return $e(e, "nextSibling", n)
                        }, prevUntil: function (e, t, n) {
                            return $e(e, "previousSibling", n)
                        }, siblings: function (e) {
                            return Ae((e.parentNode || {}).firstChild, e)
                        }, children: function (e) {
                            return Ae(e.firstChild)
                        }, contents: function (e) {
                            return "undefined" != typeof e.contentDocument ? e.contentDocument : (s(e, "template") && (e = e.content || e), _e.merge([], e.childNodes))
                        }
                    }, function (e, t) {
                        _e.fn[e] = function (n, i) {
                            var o = _e.map(this, t, n);
                            return "Until" !== e.slice(-5) && (i = n), i && "string" == typeof i && (o = _e.filter(i, o)), this.length > 1 && (Le[e] || _e.uniqueSort(o), Ne.test(e) && o.reverse()), this.pushStack(o)
                        }
                    });
                    var He = /[^\x20\t\r\n\f]+/g;
                    _e.Callbacks = function (e) {
                        e = "string" == typeof e ? c(e) : _e.extend({}, e);
                        var t, n, i, r, s = [], a = [], l = -1, u = function () {
                            for (r = r || e.once, i = t = !0; a.length; l = -1) for (n = a.shift(); ++l < s.length;) s[l].apply(n[0], n[1]) === !1 && e.stopOnFalse && (l = s.length, n = !1);
                            e.memory || (n = !1), t = !1, r && (s = n ? [] : "")
                        }, d = {
                            add: function () {
                                return s && (n && !t && (l = s.length - 1, a.push(n)), function t(n) {
                                    _e.each(n, function (n, i) {
                                        xe(i) ? e.unique && d.has(i) || s.push(i) : i && i.length && "string" !== o(i) && t(i)
                                    })
                                }(arguments), n && !t && u()), this
                            }, remove: function () {
                                return _e.each(arguments, function (e, t) {
                                    for (var n; (n = _e.inArray(t, s, n)) > -1;) s.splice(n, 1), n <= l && l--
                                }), this
                            }, has: function (e) {
                                return e ? _e.inArray(e, s) > -1 : s.length > 0
                            }, empty: function () {
                                return s && (s = []), this
                            }, disable: function () {
                                return r = a = [], s = n = "", this
                            }, disabled: function () {
                                return !s
                            }, lock: function () {
                                return r = a = [], n || t || (s = n = ""), this
                            }, locked: function () {
                                return !!r
                            }, fireWith: function (e, n) {
                                return r || (n = n || [], n = [e, n.slice ? n.slice() : n], a.push(n), t || u()), this
                            }, fire: function () {
                                return d.fireWith(this, arguments), this
                            }, fired: function () {
                                return !!i
                            }
                        };
                        return d
                    }, _e.extend({
                        Deferred: function (t) {
                            var n = [["notify", "progress", _e.Callbacks("memory"), _e.Callbacks("memory"), 2], ["resolve", "done", _e.Callbacks("once memory"), _e.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", _e.Callbacks("once memory"), _e.Callbacks("once memory"), 1, "rejected"]],
                                i = "pending", o = {
                                    state: function () {
                                        return i
                                    }, always: function () {
                                        return r.done(arguments).fail(arguments), this
                                    }, catch: function (e) {
                                        return o.then(null, e)
                                    }, pipe: function () {
                                        var e = arguments;
                                        return _e.Deferred(function (t) {
                                            _e.each(n, function (n, i) {
                                                var o = xe(e[i[4]]) && e[i[4]];
                                                r[i[1]](function () {
                                                    var e = o && o.apply(this, arguments);
                                                    e && xe(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[i[0] + "With"](this, o ? [e] : arguments)
                                                })
                                            }), e = null
                                        }).promise()
                                    }, then: function (t, i, o) {
                                        function r(t, n, i, o) {
                                            return function () {
                                                var a = this, l = arguments, c = function () {
                                                    var e, c;
                                                    if (!(t < s)) {
                                                        if (e = i.apply(a, l), e === n.promise()) throw new TypeError("Thenable self-resolution");
                                                        c = e && ("object" == typeof e || "function" == typeof e) && e.then, xe(c) ? o ? c.call(e, r(s, n, u, o), r(s, n, d, o)) : (s++, c.call(e, r(s, n, u, o), r(s, n, d, o), r(s, n, u, n.notifyWith))) : (i !== u && (a = void 0, l = [e]), (o || n.resolveWith)(a, l))
                                                    }
                                                }, p = o ? c : function () {
                                                    try {
                                                        c()
                                                    } catch (e) {
                                                        _e.Deferred.exceptionHook && _e.Deferred.exceptionHook(e, p.stackTrace), t + 1 >= s && (i !== d && (a = void 0, l = [e]), n.rejectWith(a, l))
                                                    }
                                                };
                                                t ? p() : (_e.Deferred.getStackHook && (p.stackTrace = _e.Deferred.getStackHook()), e.setTimeout(p))
                                            }
                                        }

                                        var s = 0;
                                        return _e.Deferred(function (e) {
                                            n[0][3].add(r(0, e, xe(o) ? o : u, e.notifyWith)), n[1][3].add(r(0, e, xe(t) ? t : u)), n[2][3].add(r(0, e, xe(i) ? i : d))
                                        }).promise()
                                    }, promise: function (e) {
                                        return null != e ? _e.extend(e, o) : o
                                    }
                                }, r = {};
                            return _e.each(n, function (e, t) {
                                var s = t[2], a = t[5];
                                o[t[1]] = s.add, a && s.add(function () {
                                    i = a
                                }, n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), s.add(t[3].fire), r[t[0]] = function () {
                                    return r[t[0] + "With"](this === r ? void 0 : this, arguments), this
                                }, r[t[0] + "With"] = s.fireWith
                            }), o.promise(r), t && t.call(r, r), r
                        }, when: function (e) {
                            var t = arguments.length, n = t, i = Array(n), o = de.call(arguments), r = _e.Deferred(),
                                s = function (e) {
                                    return function (n) {
                                        i[e] = this, o[e] = arguments.length > 1 ? de.call(arguments) : n, --t || r.resolveWith(i, o)
                                    }
                                };
                            if (t <= 1 && (p(e, r.done(s(n)).resolve, r.reject, !t), "pending" === r.state() || xe(o[n] && o[n].then))) return r.then();
                            for (; n--;) p(o[n], s(n), r.reject);
                            return r.promise()
                        }
                    });
                    var Me = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
                    _e.Deferred.exceptionHook = function (t, n) {
                        e.console && e.console.warn && t && Me.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
                    }, _e.readyException = function (t) {
                        e.setTimeout(function () {
                            throw t
                        })
                    };
                    var Ie = _e.Deferred();
                    _e.fn.ready = function (e) {
                        return Ie.then(e).catch(function (e) {
                            _e.readyException(e)
                        }), this
                    }, _e.extend({
                        isReady: !1, readyWait: 1, ready: function (e) {
                            (e === !0 ? --_e.readyWait : _e.isReady) || (_e.isReady = !0, e !== !0 && --_e.readyWait > 0 || Ie.resolveWith(ce, [_e]))
                        }
                    }), _e.ready.then = Ie.then, "complete" === ce.readyState || "loading" !== ce.readyState && !ce.documentElement.doScroll ? e.setTimeout(_e.ready) : (ce.addEventListener("DOMContentLoaded", f), e.addEventListener("load", f));
                    var ze = function (e, t, n, i, r, s, a) {
                        var l = 0, c = e.length, u = null == n;
                        if ("object" === o(n)) {
                            r = !0;
                            for (l in n) ze(e, t, l, n[l], !0, s, a)
                        } else if (void 0 !== i && (r = !0, xe(i) || (a = !0), u && (a ? (t.call(e, i), t = null) : (u = t, t = function (e, t, n) {
                            return u.call(_e(e), n)
                        })), t)) for (; l < c; l++) t(e[l], n, a ? i : i.call(e[l], l, t(e[l], n)));
                        return r ? e : u ? t.call(e) : c ? t(e[0], n) : s
                    }, Qe = /^-ms-/, Re = /-([a-z])/g, We = function (e) {
                        return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
                    };
                    g.uid = 1, g.prototype = {
                        cache: function (e) {
                            var t = e[this.expando];
                            return t || (t = {}, We(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                                value: t,
                                configurable: !0
                            }))), t
                        }, set: function (e, t, n) {
                            var i, o = this.cache(e);
                            if ("string" == typeof t) o[m(t)] = n; else for (i in t) o[m(i)] = t[i];
                            return o
                        }, get: function (e, t) {
                            return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][m(t)]
                        }, access: function (e, t, n) {
                            return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
                        }, remove: function (e, t) {
                            var n, i = e[this.expando];
                            if (void 0 !== i) {
                                if (void 0 !== t) {
                                    Array.isArray(t) ? t = t.map(m) : (t = m(t), t = t in i ? [t] : t.match(He) || []), n = t.length;
                                    for (; n--;) delete i[t[n]]
                                }
                                (void 0 === t || _e.isEmptyObject(i)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                            }
                        }, hasData: function (e) {
                            var t = e[this.expando];
                            return void 0 !== t && !_e.isEmptyObject(t)
                        }
                    };
                    var Fe = new g, Ue = new g, Ve = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, Be = /[A-Z]/g;
                    _e.extend({
                        hasData: function (e) {
                            return Ue.hasData(e) || Fe.hasData(e)
                        }, data: function (e, t, n) {
                            return Ue.access(e, t, n)
                        }, removeData: function (e, t) {
                            Ue.remove(e, t)
                        }, _data: function (e, t, n) {
                            return Fe.access(e, t, n)
                        }, _removeData: function (e, t) {
                            Fe.remove(e, t)
                        }
                    }), _e.fn.extend({
                        data: function (e, t) {
                            var n, i, o, r = this[0], s = r && r.attributes;
                            if (void 0 === e) {
                                if (this.length && (o = Ue.get(r), 1 === r.nodeType && !Fe.get(r, "hasDataAttrs"))) {
                                    for (n = s.length; n--;) s[n] && (i = s[n].name, 0 === i.indexOf("data-") && (i = m(i.slice(5)), y(r, i, o[i])));
                                    Fe.set(r, "hasDataAttrs", !0)
                                }
                                return o
                            }
                            return "object" == typeof e ? this.each(function () {
                                Ue.set(this, e)
                            }) : ze(this, function (t) {
                                var n;
                                if (r && void 0 === t) {
                                    if (n = Ue.get(r, e), void 0 !== n) return n;
                                    if (n = y(r, e), void 0 !== n) return n
                                } else this.each(function () {
                                    Ue.set(this, e, t)
                                })
                            }, null, t, arguments.length > 1, null, !0)
                        }, removeData: function (e) {
                            return this.each(function () {
                                Ue.remove(this, e)
                            })
                        }
                    }), _e.extend({
                        queue: function (e, t, n) {
                            var i;
                            if (e) return t = (t || "fx") + "queue", i = Fe.get(e, t), n && (!i || Array.isArray(n) ? i = Fe.access(e, t, _e.makeArray(n)) : i.push(n)), i || []
                        }, dequeue: function (e, t) {
                            t = t || "fx";
                            var n = _e.queue(e, t), i = n.length, o = n.shift(), r = _e._queueHooks(e, t),
                                s = function () {
                                    _e.dequeue(e, t)
                                };
                            "inprogress" === o && (o = n.shift(), i--), o && ("fx" === t && n.unshift("inprogress"), delete r.stop, o.call(e, s, r)), !i && r && r.empty.fire()
                        }, _queueHooks: function (e, t) {
                            var n = t + "queueHooks";
                            return Fe.get(e, n) || Fe.access(e, n, {
                                empty: _e.Callbacks("once memory").add(function () {
                                    Fe.remove(e, [t + "queue", n])
                                })
                            })
                        }
                    }), _e.fn.extend({
                        queue: function (e, t) {
                            var n = 2;
                            return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? _e.queue(this[0], e) : void 0 === t ? this : this.each(function () {
                                var n = _e.queue(this, e, t);
                                _e._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && _e.dequeue(this, e)
                            })
                        }, dequeue: function (e) {
                            return this.each(function () {
                                _e.dequeue(this, e)
                            })
                        }, clearQueue: function (e) {
                            return this.queue(e || "fx", [])
                        }, promise: function (e, t) {
                            var n, i = 1, o = _e.Deferred(), r = this, s = this.length, a = function () {
                                --i || o.resolveWith(r, [r])
                            };
                            for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; s--;) n = Fe.get(r[s], e + "queueHooks"), n && n.empty && (i++, n.empty.add(a));
                            return a(), o.promise(t)
                        }
                    });
                    var Ge = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
                        Ye = new RegExp("^(?:([+-])=|)(" + Ge + ")([a-z%]*)$", "i"),
                        Xe = ["Top", "Right", "Bottom", "Left"], Je = ce.documentElement, Ke = function (e) {
                            return _e.contains(e.ownerDocument, e)
                        }, Ze = {composed: !0};
                    Je.getRootNode && (Ke = function (e) {
                        return _e.contains(e.ownerDocument, e) || e.getRootNode(Ze) === e.ownerDocument
                    });
                    var et = function (e, t) {
                        return e = t || e, "none" === e.style.display || "" === e.style.display && Ke(e) && "none" === _e.css(e, "display")
                    }, tt = function (e, t, n, i) {
                        var o, r, s = {};
                        for (r in t) s[r] = e.style[r], e.style[r] = t[r];
                        o = n.apply(e, i || []);
                        for (r in t) e.style[r] = s[r];
                        return o
                    }, nt = {};
                    _e.fn.extend({
                        show: function () {
                            return x(this, !0)
                        }, hide: function () {
                            return x(this)
                        }, toggle: function (e) {
                            return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () {
                                et(this) ? _e(this).show() : _e(this).hide()
                            })
                        }
                    });
                    var it = /^(?:checkbox|radio)$/i, ot = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
                        rt = /^$|^module$|\/(?:java|ecma)script/i, st = {
                            option: [1, "<select multiple='multiple'>", "</select>"],
                            thead: [1, "<table>", "</table>"],
                            col: [2, "<table><colgroup>", "</colgroup></table>"],
                            tr: [2, "<table><tbody>", "</tbody></table>"],
                            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                            _default: [0, "", ""]
                        };
                    st.optgroup = st.option, st.tbody = st.tfoot = st.colgroup = st.caption = st.thead, st.th = st.td;
                    var at = /<|&#?\w+;/;
                    !function () {
                        var e = ce.createDocumentFragment(), t = e.appendChild(ce.createElement("div")),
                            n = ce.createElement("input");
                        n.setAttribute("type", "radio"), n.setAttribute("checked", "checked"), n.setAttribute("name", "t"), t.appendChild(n), we.checkClone = t.cloneNode(!0).cloneNode(!0).lastChild.checked, t.innerHTML = "<textarea>x</textarea>", we.noCloneChecked = !!t.cloneNode(!0).lastChild.defaultValue
                    }();
                    var lt = /^key/, ct = /^(?:mouse|pointer|contextmenu|drag|drop)|click/, ut = /^([^.]*)(?:\.(.+)|)/;
                    _e.event = {
                        global: {}, add: function (e, t, n, i, o) {
                            var r, s, a, l, c, u, d, p, f, h, m, g = Fe.get(e);
                            if (g) for (n.handler && (r = n, n = r.handler, o = r.selector), o && _e.find.matchesSelector(Je, o), n.guid || (n.guid = _e.guid++),
                                        (l = g.events) || (l = g.events = {}), (s = g.handle) || (s = g.handle = function (t) {
                                return "undefined" != typeof _e && _e.event.triggered !== t.type ? _e.event.dispatch.apply(e, arguments) : void 0
                            }), t = (t || "").match(He) || [""], c = t.length; c--;) a = ut.exec(t[c]) || [], f = m = a[1], h = (a[2] || "").split(".").sort(), f && (d = _e.event.special[f] || {}, f = (o ? d.delegateType : d.bindType) || f, d = _e.event.special[f] || {}, u = _e.extend({
                                type: f,
                                origType: m,
                                data: i,
                                handler: n,
                                guid: n.guid,
                                selector: o,
                                needsContext: o && _e.expr.match.needsContext.test(o),
                                namespace: h.join(".")
                            }, r), (p = l[f]) || (p = l[f] = [], p.delegateCount = 0, d.setup && d.setup.call(e, i, h, s) !== !1 || e.addEventListener && e.addEventListener(f, s)), d.add && (d.add.call(e, u), u.handler.guid || (u.handler.guid = n.guid)), o ? p.splice(p.delegateCount++, 0, u) : p.push(u), _e.event.global[f] = !0)
                        }, remove: function (e, t, n, i, o) {
                            var r, s, a, l, c, u, d, p, f, h, m, g = Fe.hasData(e) && Fe.get(e);
                            if (g && (l = g.events)) {
                                for (t = (t || "").match(He) || [""], c = t.length; c--;) if (a = ut.exec(t[c]) || [], f = m = a[1], h = (a[2] || "").split(".").sort(), f) {
                                    for (d = _e.event.special[f] || {}, f = (i ? d.delegateType : d.bindType) || f, p = l[f] || [], a = a[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), s = r = p.length; r--;) u = p[r], !o && m !== u.origType || n && n.guid !== u.guid || a && !a.test(u.namespace) || i && i !== u.selector && ("**" !== i || !u.selector) || (p.splice(r, 1), u.selector && p.delegateCount--, d.remove && d.remove.call(e, u));
                                    s && !p.length && (d.teardown && d.teardown.call(e, h, g.handle) !== !1 || _e.removeEvent(e, f, g.handle), delete l[f])
                                } else for (f in l) _e.event.remove(e, f + t[c], n, i, !0);
                                _e.isEmptyObject(l) && Fe.remove(e, "handle events")
                            }
                        }, dispatch: function (e) {
                            var t, n, i, o, r, s, a = _e.event.fix(e), l = new Array(arguments.length),
                                c = (Fe.get(this, "events") || {})[a.type] || [], u = _e.event.special[a.type] || {};
                            for (l[0] = a, t = 1; t < arguments.length; t++) l[t] = arguments[t];
                            if (a.delegateTarget = this, !u.preDispatch || u.preDispatch.call(this, a) !== !1) {
                                for (s = _e.event.handlers.call(this, a, c), t = 0; (o = s[t++]) && !a.isPropagationStopped();) for (a.currentTarget = o.elem, n = 0; (r = o.handlers[n++]) && !a.isImmediatePropagationStopped();) a.rnamespace && r.namespace !== !1 && !a.rnamespace.test(r.namespace) || (a.handleObj = r, a.data = r.data, i = ((_e.event.special[r.origType] || {}).handle || r.handler).apply(o.elem, l), void 0 !== i && (a.result = i) === !1 && (a.preventDefault(), a.stopPropagation()));
                                return u.postDispatch && u.postDispatch.call(this, a), a.result
                            }
                        }, handlers: function (e, t) {
                            var n, i, o, r, s, a = [], l = t.delegateCount, c = e.target;
                            if (l && c.nodeType && !("click" === e.type && e.button >= 1)) for (; c !== this; c = c.parentNode || this) if (1 === c.nodeType && ("click" !== e.type || c.disabled !== !0)) {
                                for (r = [], s = {}, n = 0; n < l; n++) i = t[n], o = i.selector + " ", void 0 === s[o] && (s[o] = i.needsContext ? _e(o, this).index(c) > -1 : _e.find(o, this, null, [c]).length), s[o] && r.push(i);
                                r.length && a.push({elem: c, handlers: r})
                            }
                            return c = this, l < t.length && a.push({elem: c, handlers: t.slice(l)}), a
                        }, addProp: function (e, t) {
                            Object.defineProperty(_e.Event.prototype, e, {
                                enumerable: !0,
                                configurable: !0,
                                get: xe(t) ? function () {
                                    if (this.originalEvent) return t(this.originalEvent)
                                } : function () {
                                    if (this.originalEvent) return this.originalEvent[e]
                                },
                                set: function (t) {
                                    Object.defineProperty(this, e, {
                                        enumerable: !0,
                                        configurable: !0,
                                        writable: !0,
                                        value: t
                                    })
                                }
                            })
                        }, fix: function (e) {
                            return e[_e.expando] ? e : new _e.Event(e)
                        }, special: {
                            load: {noBubble: !0}, click: {
                                setup: function (e) {
                                    var t = this || e;
                                    return it.test(t.type) && t.click && s(t, "input") && E(t, "click", _), !1
                                }, trigger: function (e) {
                                    var t = this || e;
                                    return it.test(t.type) && t.click && s(t, "input") && E(t, "click"), !0
                                }, _default: function (e) {
                                    var t = e.target;
                                    return it.test(t.type) && t.click && s(t, "input") && Fe.get(t, "click") || s(t, "a")
                                }
                            }, beforeunload: {
                                postDispatch: function (e) {
                                    void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                                }
                            }
                        }
                    }, _e.removeEvent = function (e, t, n) {
                        e.removeEventListener && e.removeEventListener(t, n)
                    }, _e.Event = function (e, t) {
                        return this instanceof _e.Event ? (e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && e.returnValue === !1 ? _ : S, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && _e.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), void (this[_e.expando] = !0)) : new _e.Event(e, t)
                    }, _e.Event.prototype = {
                        constructor: _e.Event,
                        isDefaultPrevented: S,
                        isPropagationStopped: S,
                        isImmediatePropagationStopped: S,
                        isSimulated: !1,
                        preventDefault: function () {
                            var e = this.originalEvent;
                            this.isDefaultPrevented = _, e && !this.isSimulated && e.preventDefault()
                        },
                        stopPropagation: function () {
                            var e = this.originalEvent;
                            this.isPropagationStopped = _, e && !this.isSimulated && e.stopPropagation()
                        },
                        stopImmediatePropagation: function () {
                            var e = this.originalEvent;
                            this.isImmediatePropagationStopped = _, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
                        }
                    }, _e.each({
                        altKey: !0,
                        bubbles: !0,
                        cancelable: !0,
                        changedTouches: !0,
                        ctrlKey: !0,
                        detail: !0,
                        eventPhase: !0,
                        metaKey: !0,
                        pageX: !0,
                        pageY: !0,
                        shiftKey: !0,
                        view: !0,
                        char: !0,
                        code: !0,
                        charCode: !0,
                        key: !0,
                        keyCode: !0,
                        button: !0,
                        buttons: !0,
                        clientX: !0,
                        clientY: !0,
                        offsetX: !0,
                        offsetY: !0,
                        pointerId: !0,
                        pointerType: !0,
                        screenX: !0,
                        screenY: !0,
                        targetTouches: !0,
                        toElement: !0,
                        touches: !0,
                        which: function (e) {
                            var t = e.button;
                            return null == e.which && lt.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && ct.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
                        }
                    }, _e.event.addProp), _e.each({focus: "focusin", blur: "focusout"}, function (e, t) {
                        _e.event.special[e] = {
                            setup: function () {
                                return E(this, e, j), !1
                            }, trigger: function () {
                                return E(this, e), !0
                            }, delegateType: t
                        }
                    }), _e.each({
                        mouseenter: "mouseover",
                        mouseleave: "mouseout",
                        pointerenter: "pointerover",
                        pointerleave: "pointerout"
                    }, function (e, t) {
                        _e.event.special[e] = {
                            delegateType: t, bindType: t, handle: function (e) {
                                var n, i = this, o = e.relatedTarget, r = e.handleObj;
                                return o && (o === i || _e.contains(i, o)) || (e.type = r.origType, n = r.handler.apply(this, arguments), e.type = t), n
                            }
                        }
                    }), _e.fn.extend({
                        on: function (e, t, n, i) {
                            return A(this, e, t, n, i)
                        }, one: function (e, t, n, i) {
                            return A(this, e, t, n, i, 1)
                        }, off: function (e, t, n) {
                            var i, o;
                            if (e && e.preventDefault && e.handleObj) return i = e.handleObj, _e(e.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler), this;
                            if ("object" == typeof e) {
                                for (o in e) this.off(o, t, e[o]);
                                return this
                            }
                            return t !== !1 && "function" != typeof t || (n = t, t = void 0), n === !1 && (n = S), this.each(function () {
                                _e.event.remove(this, e, n, t)
                            })
                        }
                    });
                    var dt = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
                        pt = /<script|<style|<link/i, ft = /checked\s*(?:[^=]|=\s*.checked.)/i,
                        ht = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
                    _e.extend({
                        htmlPrefilter: function (e) {
                            return e.replace(dt, "<$1></$2>")
                        }, clone: function (e, t, n) {
                            var i, o, r, s, a = e.cloneNode(!0), l = Ke(e);
                            if (!(we.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || _e.isXMLDoc(e))) for (s = k(a), r = k(e), i = 0, o = r.length; i < o; i++) N(r[i], s[i]);
                            if (t) if (n) for (r = r || k(e), s = s || k(a), i = 0, o = r.length; i < o; i++) P(r[i], s[i]); else P(e, a);
                            return s = k(a, "script"), s.length > 0 && C(s, !l && k(e, "script")), a
                        }, cleanData: function (e) {
                            for (var t, n, i, o = _e.event.special, r = 0; void 0 !== (n = e[r]); r++) if (We(n)) {
                                if (t = n[Fe.expando]) {
                                    if (t.events) for (i in t.events) o[i] ? _e.event.remove(n, i) : _e.removeEvent(n, i, t.handle);
                                    n[Fe.expando] = void 0
                                }
                                n[Ue.expando] && (n[Ue.expando] = void 0)
                            }
                        }
                    }), _e.fn.extend({
                        detach: function (e) {
                            return H(this, e, !0)
                        }, remove: function (e) {
                            return H(this, e)
                        }, text: function (e) {
                            return ze(this, function (e) {
                                return void 0 === e ? _e.text(this) : this.empty().each(function () {
                                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                                })
                            }, null, e, arguments.length)
                        }, append: function () {
                            return L(this, arguments, function (e) {
                                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                                    var t = O(this, e);
                                    t.appendChild(e)
                                }
                            })
                        }, prepend: function () {
                            return L(this, arguments, function (e) {
                                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                                    var t = O(this, e);
                                    t.insertBefore(e, t.firstChild)
                                }
                            })
                        }, before: function () {
                            return L(this, arguments, function (e) {
                                this.parentNode && this.parentNode.insertBefore(e, this)
                            })
                        }, after: function () {
                            return L(this, arguments, function (e) {
                                this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                            })
                        }, empty: function () {
                            for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (_e.cleanData(k(e, !1)), e.textContent = "");
                            return this
                        }, clone: function (e, t) {
                            return e = null != e && e, t = null == t ? e : t, this.map(function () {
                                return _e.clone(this, e, t)
                            })
                        }, html: function (e) {
                            return ze(this, function (e) {
                                var t = this[0] || {}, n = 0, i = this.length;
                                if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                                if ("string" == typeof e && !pt.test(e) && !st[(ot.exec(e) || ["", ""])[1].toLowerCase()]) {
                                    e = _e.htmlPrefilter(e);
                                    try {
                                        for (; n < i; n++) t = this[n] || {}, 1 === t.nodeType && (_e.cleanData(k(t, !1)), t.innerHTML = e);
                                        t = 0
                                    } catch (e) {
                                    }
                                }
                                t && this.empty().append(e)
                            }, null, e, arguments.length)
                        }, replaceWith: function () {
                            var e = [];
                            return L(this, arguments, function (t) {
                                var n = this.parentNode;
                                _e.inArray(this, e) < 0 && (_e.cleanData(k(this)), n && n.replaceChild(t, this))
                            }, e)
                        }
                    }), _e.each({
                        appendTo: "append",
                        prependTo: "prepend",
                        insertBefore: "before",
                        insertAfter: "after",
                        replaceAll: "replaceWith"
                    }, function (e, t) {
                        _e.fn[e] = function (e) {
                            for (var n, i = [], o = _e(e), r = o.length - 1, s = 0; s <= r; s++) n = s === r ? this : this.clone(!0), _e(o[s])[t](n), fe.apply(i, n.get());
                            return this.pushStack(i)
                        }
                    });
                    var mt = new RegExp("^(" + Ge + ")(?!px)[a-z%]+$", "i"), gt = function (t) {
                        var n = t.ownerDocument.defaultView;
                        return n && n.opener || (n = e), n.getComputedStyle(t)
                    }, vt = new RegExp(Xe.join("|"), "i");
                    !function () {
                        function t() {
                            if (c) {
                                l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", Je.appendChild(l).appendChild(c);
                                var t = e.getComputedStyle(c);
                                i = "1%" !== t.top, a = 12 === n(t.marginLeft), c.style.right = "60%", s = 36 === n(t.right), o = 36 === n(t.width), c.style.position = "absolute", r = 12 === n(c.offsetWidth / 3), Je.removeChild(l), c = null
                            }
                        }

                        function n(e) {
                            return Math.round(parseFloat(e))
                        }

                        var i, o, r, s, a, l = ce.createElement("div"), c = ce.createElement("div");
                        c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", we.clearCloneStyle = "content-box" === c.style.backgroundClip, _e.extend(we, {
                            boxSizingReliable: function () {
                                return t(), o
                            }, pixelBoxStyles: function () {
                                return t(), s
                            }, pixelPosition: function () {
                                return t(), i
                            }, reliableMarginLeft: function () {
                                return t(), a
                            }, scrollboxSize: function () {
                                return t(), r
                            }
                        }))
                    }();
                    var yt = ["Webkit", "Moz", "ms"], bt = ce.createElement("div").style, wt = {},
                        xt = /^(none|table(?!-c[ea]).+)/, kt = /^--/,
                        Ct = {position: "absolute", visibility: "hidden", display: "block"},
                        Tt = {letterSpacing: "0", fontWeight: "400"};
                    _e.extend({
                        cssHooks: {
                            opacity: {
                                get: function (e, t) {
                                    if (t) {
                                        var n = M(e, "opacity");
                                        return "" === n ? "1" : n
                                    }
                                }
                            }
                        },
                        cssNumber: {
                            animationIterationCount: !0,
                            columnCount: !0,
                            fillOpacity: !0,
                            flexGrow: !0,
                            flexShrink: !0,
                            fontWeight: !0,
                            gridArea: !0,
                            gridColumn: !0,
                            gridColumnEnd: !0,
                            gridColumnStart: !0,
                            gridRow: !0,
                            gridRowEnd: !0,
                            gridRowStart: !0,
                            lineHeight: !0,
                            opacity: !0,
                            order: !0,
                            orphans: !0,
                            widows: !0,
                            zIndex: !0,
                            zoom: !0
                        },
                        cssProps: {},
                        style: function (e, t, n, i) {
                            if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                                var o, r, s, a = m(t), l = kt.test(t), c = e.style;
                                return l || (t = Q(a)), s = _e.cssHooks[t] || _e.cssHooks[a], void 0 === n ? s && "get" in s && void 0 !== (o = s.get(e, !1, i)) ? o : c[t] : (r = typeof n, "string" === r && (o = Ye.exec(n)) && o[1] && (n = b(e, t, o), r = "number"), null != n && n === n && ("number" !== r || l || (n += o && o[3] || (_e.cssNumber[a] ? "" : "px")), we.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (c[t] = "inherit"), s && "set" in s && void 0 === (n = s.set(e, n, i)) || (l ? c.setProperty(t, n) : c[t] = n)), void 0)
                            }
                        },
                        css: function (e, t, n, i) {
                            var o, r, s, a = m(t), l = kt.test(t);
                            return l || (t = Q(a)), s = _e.cssHooks[t] || _e.cssHooks[a], s && "get" in s && (o = s.get(e, !0, n)), void 0 === o && (o = M(e, t, i)), "normal" === o && t in Tt && (o = Tt[t]), "" === n || n ? (r = parseFloat(o), n === !0 || isFinite(r) ? r || 0 : o) : o
                        }
                    }), _e.each(["height", "width"], function (e, t) {
                        _e.cssHooks[t] = {
                            get: function (e, n, i) {
                                if (n) return !xt.test(_e.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? F(e, t, i) : tt(e, Ct, function () {
                                    return F(e, t, i)
                                })
                            }, set: function (e, n, i) {
                                var o, r = gt(e), s = !we.scrollboxSize() && "absolute" === r.position, a = s || i,
                                    l = a && "border-box" === _e.css(e, "boxSizing", !1, r),
                                    c = i ? W(e, t, i, l, r) : 0;
                                return l && s && (c -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(r[t]) - W(e, t, "border", !1, r) - .5)), c && (o = Ye.exec(n)) && "px" !== (o[3] || "px") && (e.style[t] = n, n = _e.css(e, t)), R(e, n, c)
                            }
                        }
                    }), _e.cssHooks.marginLeft = I(we.reliableMarginLeft, function (e, t) {
                        if (t) return (parseFloat(M(e, "marginLeft")) || e.getBoundingClientRect().left - tt(e, {marginLeft: 0}, function () {
                            return e.getBoundingClientRect().left
                        })) + "px"
                    }), _e.each({margin: "", padding: "", border: "Width"}, function (e, t) {
                        _e.cssHooks[e + t] = {
                            expand: function (n) {
                                for (var i = 0, o = {}, r = "string" == typeof n ? n.split(" ") : [n]; i < 4; i++) o[e + Xe[i] + t] = r[i] || r[i - 2] || r[0];
                                return o
                            }
                        }, "margin" !== e && (_e.cssHooks[e + t].set = R)
                    }), _e.fn.extend({
                        css: function (e, t) {
                            return ze(this, function (e, t, n) {
                                var i, o, r = {}, s = 0;
                                if (Array.isArray(t)) {
                                    for (i = gt(e), o = t.length; s < o; s++) r[t[s]] = _e.css(e, t[s], !1, i);
                                    return r
                                }
                                return void 0 !== n ? _e.style(e, t, n) : _e.css(e, t)
                            }, e, t, arguments.length > 1)
                        }
                    }), _e.Tween = U, U.prototype = {
                        constructor: U, init: function (e, t, n, i, o, r) {
                            this.elem = e, this.prop = n, this.easing = o || _e.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = i, this.unit = r || (_e.cssNumber[n] ? "" : "px")
                        }, cur: function () {
                            var e = U.propHooks[this.prop];
                            return e && e.get ? e.get(this) : U.propHooks._default.get(this)
                        }, run: function (e) {
                            var t, n = U.propHooks[this.prop];
                            return this.options.duration ? this.pos = t = _e.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : U.propHooks._default.set(this), this
                        }
                    }, U.prototype.init.prototype = U.prototype, U.propHooks = {
                        _default: {
                            get: function (e) {
                                var t;
                                return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = _e.css(e.elem, e.prop, ""), t && "auto" !== t ? t : 0)
                            }, set: function (e) {
                                _e.fx.step[e.prop] ? _e.fx.step[e.prop](e) : 1 !== e.elem.nodeType || !_e.cssHooks[e.prop] && null == e.elem.style[Q(e.prop)] ? e.elem[e.prop] = e.now : _e.style(e.elem, e.prop, e.now + e.unit)
                            }
                        }
                    }, U.propHooks.scrollTop = U.propHooks.scrollLeft = {
                        set: function (e) {
                            e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
                        }
                    }, _e.easing = {
                        linear: function (e) {
                            return e
                        }, swing: function (e) {
                            return .5 - Math.cos(e * Math.PI) / 2
                        }, _default: "swing"
                    }, _e.fx = U.prototype.init, _e.fx.step = {};
                    var _t, St, jt = /^(?:toggle|show|hide)$/, $t = /queueHooks$/;
                    _e.Animation = _e.extend(K, {
                        tweeners: {
                            "*": [function (e, t) {
                                var n = this.createTween(e, t);
                                return b(n.elem, e, Ye.exec(t), n), n
                            }]
                        }, tweener: function (e, t) {
                            xe(e) ? (t = e, e = ["*"]) : e = e.match(He);
                            for (var n, i = 0, o = e.length; i < o; i++) n = e[i], K.tweeners[n] = K.tweeners[n] || [], K.tweeners[n].unshift(t)
                        }, prefilters: [X], prefilter: function (e, t) {
                            t ? K.prefilters.unshift(e) : K.prefilters.push(e)
                        }
                    }), _e.speed = function (e, t, n) {
                        var i = e && "object" == typeof e ? _e.extend({}, e) : {
                            complete: n || !n && t || xe(e) && e,
                            duration: e,
                            easing: n && t || t && !xe(t) && t
                        };
                        return _e.fx.off ? i.duration = 0 : "number" != typeof i.duration && (i.duration in _e.fx.speeds ? i.duration = _e.fx.speeds[i.duration] : i.duration = _e.fx.speeds._default), null != i.queue && i.queue !== !0 || (i.queue = "fx"), i.old = i.complete, i.complete = function () {
                            xe(i.old) && i.old.call(this), i.queue && _e.dequeue(this, i.queue)
                        }, i
                    }, _e.fn.extend({
                        fadeTo: function (e, t, n, i) {
                            return this.filter(et).css("opacity", 0).show().end().animate({opacity: t}, e, n, i)
                        }, animate: function (e, t, n, i) {
                            var o = _e.isEmptyObject(e), r = _e.speed(t, n, i), s = function () {
                                var t = K(this, _e.extend({}, e), r);
                                (o || Fe.get(this, "finish")) && t.stop(!0)
                            };
                            return s.finish = s, o || r.queue === !1 ? this.each(s) : this.queue(r.queue, s)
                        }, stop: function (e, t, n) {
                            var i = function (e) {
                                var t = e.stop;
                                delete e.stop, t(n)
                            };
                            return "string" != typeof e && (n = t, t = e, e = void 0), t && e !== !1 && this.queue(e || "fx", []), this.each(function () {
                                var t = !0, o = null != e && e + "queueHooks", r = _e.timers, s = Fe.get(this);
                                if (o) s[o] && s[o].stop && i(s[o]); else for (o in s) s[o] && s[o].stop && $t.test(o) && i(s[o]);
                                for (o = r.length; o--;) r[o].elem !== this || null != e && r[o].queue !== e || (r[o].anim.stop(n), t = !1, r.splice(o, 1));
                                !t && n || _e.dequeue(this, e)
                            })
                        }, finish: function (e) {
                            return e !== !1 && (e = e || "fx"), this.each(function () {
                                var t, n = Fe.get(this), i = n[e + "queue"], o = n[e + "queueHooks"], r = _e.timers,
                                    s = i ? i.length : 0;
                                for (n.finish = !0, _e.queue(this, e, []), o && o.stop && o.stop.call(this, !0), t = r.length; t--;) r[t].elem === this && r[t].queue === e && (r[t].anim.stop(!0), r.splice(t, 1));
                                for (t = 0; t < s; t++) i[t] && i[t].finish && i[t].finish.call(this);
                                delete n.finish
                            })
                        }
                    }), _e.each(["toggle", "show", "hide"], function (e, t) {
                        var n = _e.fn[t];
                        _e.fn[t] = function (e, i, o) {
                            return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(G(t, !0), e, i, o)
                        }
                    }), _e.each({
                        slideDown: G("show"),
                        slideUp: G("hide"),
                        slideToggle: G("toggle"),
                        fadeIn: {opacity: "show"},
                        fadeOut: {opacity: "hide"},
                        fadeToggle: {opacity: "toggle"}
                    }, function (e, t) {
                        _e.fn[e] = function (e, n, i) {
                            return this.animate(t, e, n, i)
                        }
                    }), _e.timers = [], _e.fx.tick = function () {
                        var e, t = 0, n = _e.timers;
                        for (_t = Date.now(); t < n.length; t++) e = n[t], e() || n[t] !== e || n.splice(t--, 1);
                        n.length || _e.fx.stop(), _t = void 0
                    }, _e.fx.timer = function (e) {
                        _e.timers.push(e), _e.fx.start()
                    }, _e.fx.interval = 13, _e.fx.start = function () {
                        St || (St = !0, V())
                    }, _e.fx.stop = function () {
                        St = null
                    }, _e.fx.speeds = {slow: 600, fast: 200, _default: 400}, _e.fn.delay = function (t, n) {
                        return t = _e.fx ? _e.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function (n, i) {
                            var o = e.setTimeout(n, t);
                            i.stop = function () {
                                e.clearTimeout(o)
                            }
                        })
                    }, function () {
                        var e = ce.createElement("input"), t = ce.createElement("select"),
                            n = t.appendChild(ce.createElement("option"));
                        e.type = "checkbox", we.checkOn = "" !== e.value, we.optSelected = n.selected, e = ce.createElement("input"), e.value = "t", e.type = "radio", we.radioValue = "t" === e.value
                    }();
                    var At, Et = _e.expr.attrHandle;
                    _e.fn.extend({
                        attr: function (e, t) {
                            return ze(this, _e.attr, e, t, arguments.length > 1)
                        }, removeAttr: function (e) {
                            return this.each(function () {
                                _e.removeAttr(this, e)
                            })
                        }
                    }), _e.extend({
                        attr: function (e, t, n) {
                            var i, o, r = e.nodeType;
                            if (3 !== r && 8 !== r && 2 !== r) return "undefined" == typeof e.getAttribute ? _e.prop(e, t, n) : (1 === r && _e.isXMLDoc(e) || (o = _e.attrHooks[t.toLowerCase()] || (_e.expr.match.bool.test(t) ? At : void 0)), void 0 !== n ? null === n ? void _e.removeAttr(e, t) : o && "set" in o && void 0 !== (i = o.set(e, n, t)) ? i : (e.setAttribute(t, n + ""), n) : o && "get" in o && null !== (i = o.get(e, t)) ? i : (i = _e.find.attr(e, t), null == i ? void 0 : i))
                        }, attrHooks: {
                            type: {
                                set: function (e, t) {
                                    if (!we.radioValue && "radio" === t && s(e, "input")) {
                                        var n = e.value;
                                        return e.setAttribute("type", t), n && (e.value = n), t
                                    }
                                }
                            }
                        }, removeAttr: function (e, t) {
                            var n, i = 0, o = t && t.match(He);
                            if (o && 1 === e.nodeType) for (; n = o[i++];) e.removeAttribute(n)
                        }
                    }), At = {
                        set: function (e, t, n) {
                            return t === !1 ? _e.removeAttr(e, n) : e.setAttribute(n, n), n
                        }
                    }, _e.each(_e.expr.match.bool.source.match(/\w+/g), function (e, t) {
                        var n = Et[t] || _e.find.attr;
                        Et[t] = function (e, t, i) {
                            var o, r, s = t.toLowerCase();
                            return i || (r = Et[s], Et[s] = o, o = null != n(e, t, i) ? s : null, Et[s] = r), o
                        }
                    });
                    var Ot = /^(?:input|select|textarea|button)$/i, Dt = /^(?:a|area)$/i;
                    _e.fn.extend({
                        prop: function (e, t) {
                            return ze(this, _e.prop, e, t, arguments.length > 1)
                        }, removeProp: function (e) {
                            return this.each(function () {
                                delete this[_e.propFix[e] || e]
                            })
                        }
                    }), _e.extend({
                        prop: function (e, t, n) {
                            var i, o, r = e.nodeType;
                            if (3 !== r && 8 !== r && 2 !== r) return 1 === r && _e.isXMLDoc(e) || (t = _e.propFix[t] || t, o = _e.propHooks[t]), void 0 !== n ? o && "set" in o && void 0 !== (i = o.set(e, n, t)) ? i : e[t] = n : o && "get" in o && null !== (i = o.get(e, t)) ? i : e[t]
                        }, propHooks: {
                            tabIndex: {
                                get: function (e) {
                                    var t = _e.find.attr(e, "tabindex");
                                    return t ? parseInt(t, 10) : Ot.test(e.nodeName) || Dt.test(e.nodeName) && e.href ? 0 : -1
                                }
                            }
                        }, propFix: {for: "htmlFor", class: "className"}
                    }), we.optSelected || (_e.propHooks.selected = {
                        get: function (e) {
                            var t = e.parentNode;
                            return t && t.parentNode && t.parentNode.selectedIndex, null
                        }, set: function (e) {
                            var t = e.parentNode;
                            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
                        }
                    }), _e.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
                        _e.propFix[this.toLowerCase()] = this
                    }), _e.fn.extend({
                        addClass: function (e) {
                            var t, n, i, o, r, s, a, l = 0;
                            if (xe(e)) return this.each(function (t) {
                                _e(this).addClass(e.call(this, t, ee(this)))
                            });
                            if (t = te(e), t.length) for (; n = this[l++];) if (o = ee(n), i = 1 === n.nodeType && " " + Z(o) + " ") {
                                for (s = 0; r = t[s++];) i.indexOf(" " + r + " ") < 0 && (i += r + " ");
                                a = Z(i), o !== a && n.setAttribute("class", a)
                            }
                            return this
                        }, removeClass: function (e) {
                            var t, n, i, o, r, s, a, l = 0;
                            if (xe(e)) return this.each(function (t) {
                                _e(this).removeClass(e.call(this, t, ee(this)))
                            });
                            if (!arguments.length) return this.attr("class", "");
                            if (t = te(e), t.length) for (; n = this[l++];) if (o = ee(n), i = 1 === n.nodeType && " " + Z(o) + " ") {
                                for (s = 0; r = t[s++];) for (; i.indexOf(" " + r + " ") > -1;) i = i.replace(" " + r + " ", " ");
                                a = Z(i), o !== a && n.setAttribute("class", a)
                            }
                            return this
                        }, toggleClass: function (e, t) {
                            var n = typeof e, i = "string" === n || Array.isArray(e);
                            return "boolean" == typeof t && i ? t ? this.addClass(e) : this.removeClass(e) : xe(e) ? this.each(function (n) {
                                _e(this).toggleClass(e.call(this, n, ee(this), t), t)
                            }) : this.each(function () {
                                var t, o, r, s;
                                if (i) for (o = 0, r = _e(this), s = te(e); t = s[o++];) r.hasClass(t) ? r.removeClass(t) : r.addClass(t); else void 0 !== e && "boolean" !== n || (t = ee(this), t && Fe.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || e === !1 ? "" : Fe.get(this, "__className__") || ""))
                            })
                        }, hasClass: function (e) {
                            var t, n, i = 0;
                            for (t = " " + e + " "; n = this[i++];) if (1 === n.nodeType && (" " + Z(ee(n)) + " ").indexOf(t) > -1) return !0;
                            return !1
                        }
                    });
                    var qt = /\r/g;
                    _e.fn.extend({
                        val: function (e) {
                            var t, n, i, o = this[0];
                            {
                                if (arguments.length) return i = xe(e), this.each(function (n) {
                                    var o;
                                    1 === this.nodeType && (o = i ? e.call(this, n, _e(this).val()) : e, null == o ? o = "" : "number" == typeof o ? o += "" : Array.isArray(o) && (o = _e.map(o, function (e) {
                                        return null == e ? "" : e + ""
                                    })), t = _e.valHooks[this.type] || _e.valHooks[this.nodeName.toLowerCase()], t && "set" in t && void 0 !== t.set(this, o, "value") || (this.value = o))
                                });
                                if (o) return t = _e.valHooks[o.type] || _e.valHooks[o.nodeName.toLowerCase()], t && "get" in t && void 0 !== (n = t.get(o, "value")) ? n : (n = o.value, "string" == typeof n ? n.replace(qt, "") : null == n ? "" : n)
                            }
                        }
                    }), _e.extend({
                        valHooks: {
                            option: {
                                get: function (e) {
                                    var t = _e.find.attr(e, "value");
                                    return null != t ? t : Z(_e.text(e))
                                }
                            }, select: {
                                get: function (e) {
                                    var t, n, i, o = e.options, r = e.selectedIndex, a = "select-one" === e.type,
                                        l = a ? null : [], c = a ? r + 1 : o.length;
                                    for (i = r < 0 ? c : a ? r : 0; i < c; i++) if (n = o[i], (n.selected || i === r) && !n.disabled && (!n.parentNode.disabled || !s(n.parentNode, "optgroup"))) {
                                        if (t = _e(n).val(), a) return t;
                                        l.push(t)
                                    }
                                    return l
                                }, set: function (e, t) {
                                    for (var n, i, o = e.options, r = _e.makeArray(t), s = o.length; s--;) i = o[s], (i.selected = _e.inArray(_e.valHooks.option.get(i), r) > -1) && (n = !0);
                                    return n || (e.selectedIndex = -1), r
                                }
                            }
                        }
                    }), _e.each(["radio", "checkbox"], function () {
                        _e.valHooks[this] = {
                            set: function (e, t) {
                                if (Array.isArray(t)) return e.checked = _e.inArray(_e(e).val(), t) > -1
                            }
                        }, we.checkOn || (_e.valHooks[this].get = function (e) {
                            return null === e.getAttribute("value") ? "on" : e.value
                        })
                    }), we.focusin = "onfocusin" in e;
                    var Pt = /^(?:focusinfocus|focusoutblur)$/, Nt = function (e) {
                        e.stopPropagation()
                    };
                    _e.extend(_e.event, {
                        trigger: function (t, n, i, o) {
                            var r, s, a, l, c, u, d, p, f = [i || ce], h = ve.call(t, "type") ? t.type : t,
                                m = ve.call(t, "namespace") ? t.namespace.split(".") : [];
                            if (s = p = a = i = i || ce, 3 !== i.nodeType && 8 !== i.nodeType && !Pt.test(h + _e.event.triggered) && (h.indexOf(".") > -1 && (m = h.split("."), h = m.shift(), m.sort()), c = h.indexOf(":") < 0 && "on" + h, t = t[_e.expando] ? t : new _e.Event(h, "object" == typeof t && t), t.isTrigger = o ? 2 : 3, t.namespace = m.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + m.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), n = null == n ? [t] : _e.makeArray(n, [t]), d = _e.event.special[h] || {}, o || !d.trigger || d.trigger.apply(i, n) !== !1)) {
                                if (!o && !d.noBubble && !ke(i)) {
                                    for (l = d.delegateType || h, Pt.test(l + h) || (s = s.parentNode); s; s = s.parentNode) f.push(s), a = s;
                                    a === (i.ownerDocument || ce) && f.push(a.defaultView || a.parentWindow || e)
                                }
                                for (r = 0; (s = f[r++]) && !t.isPropagationStopped();) p = s, t.type = r > 1 ? l : d.bindType || h, u = (Fe.get(s, "events") || {})[t.type] && Fe.get(s, "handle"), u && u.apply(s, n), u = c && s[c], u && u.apply && We(s) && (t.result = u.apply(s, n), t.result === !1 && t.preventDefault());
                                return t.type = h, o || t.isDefaultPrevented() || d._default && d._default.apply(f.pop(), n) !== !1 || !We(i) || c && xe(i[h]) && !ke(i) && (a = i[c], a && (i[c] = null), _e.event.triggered = h, t.isPropagationStopped() && p.addEventListener(h, Nt), i[h](), t.isPropagationStopped() && p.removeEventListener(h, Nt), _e.event.triggered = void 0, a && (i[c] = a)), t.result
                            }
                        }, simulate: function (e, t, n) {
                            var i = _e.extend(new _e.Event, n, {type: e, isSimulated: !0});
                            _e.event.trigger(i, null, t)
                        }
                    }), _e.fn.extend({
                        trigger: function (e, t) {
                            return this.each(function () {
                                _e.event.trigger(e, t, this)
                            })
                        }, triggerHandler: function (e, t) {
                            var n = this[0];
                            if (n) return _e.event.trigger(e, t, n, !0)
                        }
                    }), we.focusin || _e.each({focus: "focusin", blur: "focusout"}, function (e, t) {
                        var n = function (e) {
                            _e.event.simulate(t, e.target, _e.event.fix(e))
                        };
                        _e.event.special[t] = {
                            setup: function () {
                                var i = this.ownerDocument || this, o = Fe.access(i, t);
                                o || i.addEventListener(e, n, !0), Fe.access(i, t, (o || 0) + 1)
                            }, teardown: function () {
                                var i = this.ownerDocument || this, o = Fe.access(i, t) - 1;
                                o ? Fe.access(i, t, o) : (i.removeEventListener(e, n, !0), Fe.remove(i, t))
                            }
                        }
                    });
                    var Lt = e.location, Ht = Date.now(), Mt = /\?/;
                    _e.parseXML = function (t) {
                        var n;
                        if (!t || "string" != typeof t) return null;
                        try {
                            n = (new e.DOMParser).parseFromString(t, "text/xml")
                        } catch (e) {
                            n = void 0
                        }
                        return n && !n.getElementsByTagName("parsererror").length || _e.error("Invalid XML: " + t), n
                    };
                    var It = /\[\]$/, zt = /\r?\n/g, Qt = /^(?:submit|button|image|reset|file)$/i,
                        Rt = /^(?:input|select|textarea|keygen)/i;
                    _e.param = function (e, t) {
                        var n, i = [], o = function (e, t) {
                            var n = xe(t) ? t() : t;
                            i[i.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
                        };
                        if (null == e) return "";
                        if (Array.isArray(e) || e.jquery && !_e.isPlainObject(e)) _e.each(e, function () {
                            o(this.name, this.value)
                        }); else for (n in e) ne(n, e[n], t, o);
                        return i.join("&")
                    }, _e.fn.extend({
                        serialize: function () {
                            return _e.param(this.serializeArray())
                        }, serializeArray: function () {
                            return this.map(function () {
                                var e = _e.prop(this, "elements");
                                return e ? _e.makeArray(e) : this
                            }).filter(function () {
                                var e = this.type;
                                return this.name && !_e(this).is(":disabled") && Rt.test(this.nodeName) && !Qt.test(e) && (this.checked || !it.test(e))
                            }).map(function (e, t) {
                                var n = _e(this).val();
                                return null == n ? null : Array.isArray(n) ? _e.map(n, function (e) {
                                    return {name: t.name, value: e.replace(zt, "\r\n")}
                                }) : {name: t.name, value: n.replace(zt, "\r\n")}
                            }).get()
                        }
                    });
                    var Wt = /%20/g, Ft = /#.*$/, Ut = /([?&])_=[^&]*/, Vt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
                        Bt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, Gt = /^(?:GET|HEAD)$/,
                        Yt = /^\/\//, Xt = {}, Jt = {}, Kt = "*/".concat("*"), Zt = ce.createElement("a");
                    Zt.href = Lt.href, _e.extend({
                        active: 0,
                        lastModified: {},
                        etag: {},
                        ajaxSettings: {
                            url: Lt.href,
                            type: "GET",
                            isLocal: Bt.test(Lt.protocol),
                            global: !0,
                            processData: !0,
                            async: !0,
                            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                            accepts: {
                                "*": Kt,
                                text: "text/plain",
                                html: "text/html",
                                xml: "application/xml, text/xml",
                                json: "application/json, text/javascript"
                            },
                            contents: {xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/},
                            responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"},
                            converters: {
                                "* text": String,
                                "text html": !0,
                                "text json": JSON.parse,
                                "text xml": _e.parseXML
                            },
                            flatOptions: {url: !0, context: !0}
                        },
                        ajaxSetup: function (e, t) {
                            return t ? re(re(e, _e.ajaxSettings), t) : re(_e.ajaxSettings, e)
                        },
                        ajaxPrefilter: ie(Xt),
                        ajaxTransport: ie(Jt),
                        ajax: function (t, n) {
                            function i(t, n, i, a) {
                                var c, p, f, w, x, k = n;
                                u || (u = !0, l && e.clearTimeout(l), o = void 0, s = a || "", C.readyState = t > 0 ? 4 : 0, c = t >= 200 && t < 300 || 304 === t, i && (w = se(h, C, i)), w = ae(h, w, C, c), c ? (h.ifModified && (x = C.getResponseHeader("Last-Modified"), x && (_e.lastModified[r] = x), x = C.getResponseHeader("etag"), x && (_e.etag[r] = x)), 204 === t || "HEAD" === h.type ? k = "nocontent" : 304 === t ? k = "notmodified" : (k = w.state, p = w.data, f = w.error, c = !f)) : (f = k, !t && k || (k = "error", t < 0 && (t = 0))), C.status = t, C.statusText = (n || k) + "", c ? v.resolveWith(m, [p, k, C]) : v.rejectWith(m, [C, k, f]), C.statusCode(b), b = void 0, d && g.trigger(c ? "ajaxSuccess" : "ajaxError", [C, h, c ? p : f]), y.fireWith(m, [C, k]), d && (g.trigger("ajaxComplete", [C, h]), --_e.active || _e.event.trigger("ajaxStop")))
                            }

                            "object" == typeof t && (n = t, t = void 0), n = n || {};
                            var o, r, s, a, l, c, u, d, p, f, h = _e.ajaxSetup({}, n), m = h.context || h,
                                g = h.context && (m.nodeType || m.jquery) ? _e(m) : _e.event, v = _e.Deferred(),
                                y = _e.Callbacks("once memory"), b = h.statusCode || {}, w = {}, x = {}, k = "canceled",
                                C = {
                                    readyState: 0, getResponseHeader: function (e) {
                                        var t;
                                        if (u) {
                                            if (!a) for (a = {}; t = Vt.exec(s);) a[t[1].toLowerCase() + " "] = (a[t[1].toLowerCase() + " "] || []).concat(t[2]);
                                            t = a[e.toLowerCase() + " "]
                                        }
                                        return null == t ? null : t.join(", ")
                                    }, getAllResponseHeaders: function () {
                                        return u ? s : null
                                    }, setRequestHeader: function (e, t) {
                                        return null == u && (e = x[e.toLowerCase()] = x[e.toLowerCase()] || e, w[e] = t), this
                                    }, overrideMimeType: function (e) {
                                        return null == u && (h.mimeType = e), this
                                    }, statusCode: function (e) {
                                        var t;
                                        if (e) if (u) C.always(e[C.status]); else for (t in e) b[t] = [b[t], e[t]];
                                        return this
                                    }, abort: function (e) {
                                        var t = e || k;
                                        return o && o.abort(t), i(0, t), this
                                    }
                                };
                            if (v.promise(C), h.url = ((t || h.url || Lt.href) + "").replace(Yt, Lt.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(He) || [""], null == h.crossDomain) {
                                c = ce.createElement("a");
                                try {
                                    c.href = h.url, c.href = c.href, h.crossDomain = Zt.protocol + "//" + Zt.host != c.protocol + "//" + c.host
                                } catch (e) {
                                    h.crossDomain = !0
                                }
                            }
                            if (h.data && h.processData && "string" != typeof h.data && (h.data = _e.param(h.data, h.traditional)), oe(Xt, h, n, C), u) return C;
                            d = _e.event && h.global, d && 0 === _e.active++ && _e.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Gt.test(h.type), r = h.url.replace(Ft, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(Wt, "+")) : (f = h.url.slice(r.length), h.data && (h.processData || "string" == typeof h.data) && (r += (Mt.test(r) ? "&" : "?") + h.data, delete h.data), h.cache === !1 && (r = r.replace(Ut, "$1"), f = (Mt.test(r) ? "&" : "?") + "_=" + Ht++ + f), h.url = r + f), h.ifModified && (_e.lastModified[r] && C.setRequestHeader("If-Modified-Since", _e.lastModified[r]), _e.etag[r] && C.setRequestHeader("If-None-Match", _e.etag[r])), (h.data && h.hasContent && h.contentType !== !1 || n.contentType) && C.setRequestHeader("Content-Type", h.contentType), C.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + Kt + "; q=0.01" : "") : h.accepts["*"]);
                            for (p in h.headers) C.setRequestHeader(p, h.headers[p]);
                            if (h.beforeSend && (h.beforeSend.call(m, C, h) === !1 || u)) return C.abort();
                            if (k = "abort", y.add(h.complete), C.done(h.success), C.fail(h.error), o = oe(Jt, h, n, C)) {
                                if (C.readyState = 1, d && g.trigger("ajaxSend", [C, h]), u) return C;
                                h.async && h.timeout > 0 && (l = e.setTimeout(function () {
                                    C.abort("timeout")
                                }, h.timeout));
                                try {
                                    u = !1, o.send(w, i)
                                } catch (e) {
                                    if (u) throw e;
                                    i(-1, e)
                                }
                            } else i(-1, "No Transport");
                            return C
                        },
                        getJSON: function (e, t, n) {
                            return _e.get(e, t, n, "json")
                        },
                        getScript: function (e, t) {
                            return _e.get(e, void 0, t, "script")
                        }
                    }), _e.each(["get", "post"], function (e, t) {
                        _e[t] = function (e, n, i, o) {
                            return xe(n) && (o = o || i, i = n, n = void 0), _e.ajax(_e.extend({
                                url: e,
                                type: t,
                                dataType: o,
                                data: n,
                                success: i
                            }, _e.isPlainObject(e) && e))
                        }
                    }), _e._evalUrl = function (e, t) {
                        return _e.ajax({
                            url: e,
                            type: "GET",
                            dataType: "script",
                            cache: !0,
                            async: !1,
                            global: !1,
                            converters: {
                                "text script": function () {
                                }
                            },
                            dataFilter: function (e) {
                                _e.globalEval(e, t)
                            }
                        })
                    }, _e.fn.extend({
                        wrapAll: function (e) {
                            var t;
                            return this[0] && (xe(e) && (e = e.call(this[0])), t = _e(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () {
                                for (var e = this; e.firstElementChild;) e = e.firstElementChild;
                                return e
                            }).append(this)), this
                        }, wrapInner: function (e) {
                            return xe(e) ? this.each(function (t) {
                                _e(this).wrapInner(e.call(this, t))
                            }) : this.each(function () {
                                var t = _e(this), n = t.contents();
                                n.length ? n.wrapAll(e) : t.append(e)
                            })
                        }, wrap: function (e) {
                            var t = xe(e);
                            return this.each(function (n) {
                                _e(this).wrapAll(t ? e.call(this, n) : e)
                            })
                        }, unwrap: function (e) {
                            return this.parent(e).not("body").each(function () {
                                _e(this).replaceWith(this.childNodes)
                            }), this
                        }
                    }), _e.expr.pseudos.hidden = function (e) {
                        return !_e.expr.pseudos.visible(e)
                    }, _e.expr.pseudos.visible = function (e) {
                        return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
                    }, _e.ajaxSettings.xhr = function () {
                        try {
                            return new e.XMLHttpRequest
                        } catch (e) {
                        }
                    };
                    var en = {0: 200, 1223: 204}, tn = _e.ajaxSettings.xhr();
                    we.cors = !!tn && "withCredentials" in tn, we.ajax = tn = !!tn, _e.ajaxTransport(function (t) {
                        var n, i;
                        if (we.cors || tn && !t.crossDomain) return {
                            send: function (o, r) {
                                var s, a = t.xhr();
                                if (a.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields) for (s in t.xhrFields) a[s] = t.xhrFields[s];
                                t.mimeType && a.overrideMimeType && a.overrideMimeType(t.mimeType),
                                t.crossDomain || o["X-Requested-With"] || (o["X-Requested-With"] = "XMLHttpRequest");
                                for (s in o) a.setRequestHeader(s, o[s]);
                                n = function (e) {
                                    return function () {
                                        n && (n = i = a.onload = a.onerror = a.onabort = a.ontimeout = a.onreadystatechange = null, "abort" === e ? a.abort() : "error" === e ? "number" != typeof a.status ? r(0, "error") : r(a.status, a.statusText) : r(en[a.status] || a.status, a.statusText, "text" !== (a.responseType || "text") || "string" != typeof a.responseText ? {binary: a.response} : {text: a.responseText}, a.getAllResponseHeaders()))
                                    }
                                }, a.onload = n(), i = a.onerror = a.ontimeout = n("error"), void 0 !== a.onabort ? a.onabort = i : a.onreadystatechange = function () {
                                    4 === a.readyState && e.setTimeout(function () {
                                        n && i()
                                    })
                                }, n = n("abort");
                                try {
                                    a.send(t.hasContent && t.data || null)
                                } catch (e) {
                                    if (n) throw e
                                }
                            }, abort: function () {
                                n && n()
                            }
                        }
                    }), _e.ajaxPrefilter(function (e) {
                        e.crossDomain && (e.contents.script = !1)
                    }), _e.ajaxSetup({
                        accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},
                        contents: {script: /\b(?:java|ecma)script\b/},
                        converters: {
                            "text script": function (e) {
                                return _e.globalEval(e), e
                            }
                        }
                    }), _e.ajaxPrefilter("script", function (e) {
                        void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
                    }), _e.ajaxTransport("script", function (e) {
                        if (e.crossDomain || e.scriptAttrs) {
                            var t, n;
                            return {
                                send: function (i, o) {
                                    t = _e("<script>").attr(e.scriptAttrs || {}).prop({
                                        charset: e.scriptCharset,
                                        src: e.url
                                    }).on("load error", n = function (e) {
                                        t.remove(), n = null, e && o("error" === e.type ? 404 : 200, e.type)
                                    }), ce.head.appendChild(t[0])
                                }, abort: function () {
                                    n && n()
                                }
                            }
                        }
                    });
                    var nn = [], on = /(=)\?(?=&|$)|\?\?/;
                    _e.ajaxSetup({
                        jsonp: "callback", jsonpCallback: function () {
                            var e = nn.pop() || _e.expando + "_" + Ht++;
                            return this[e] = !0, e
                        }
                    }), _e.ajaxPrefilter("json jsonp", function (t, n, i) {
                        var o, r, s,
                            a = t.jsonp !== !1 && (on.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && on.test(t.data) && "data");
                        if (a || "jsonp" === t.dataTypes[0]) return o = t.jsonpCallback = xe(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, a ? t[a] = t[a].replace(on, "$1" + o) : t.jsonp !== !1 && (t.url += (Mt.test(t.url) ? "&" : "?") + t.jsonp + "=" + o), t.converters["script json"] = function () {
                            return s || _e.error(o + " was not called"), s[0]
                        }, t.dataTypes[0] = "json", r = e[o], e[o] = function () {
                            s = arguments
                        }, i.always(function () {
                            void 0 === r ? _e(e).removeProp(o) : e[o] = r, t[o] && (t.jsonpCallback = n.jsonpCallback, nn.push(o)), s && xe(r) && r(s[0]), s = r = void 0
                        }), "script"
                    }), we.createHTMLDocument = function () {
                        var e = ce.implementation.createHTMLDocument("").body;
                        return e.innerHTML = "<form></form><form></form>", 2 === e.childNodes.length
                    }(), _e.parseHTML = function (e, t, n) {
                        if ("string" != typeof e) return [];
                        "boolean" == typeof t && (n = t, t = !1);
                        var i, o, r;
                        return t || (we.createHTMLDocument ? (t = ce.implementation.createHTMLDocument(""), i = t.createElement("base"), i.href = ce.location.href, t.head.appendChild(i)) : t = ce), o = Oe.exec(e), r = !n && [], o ? [t.createElement(o[1])] : (o = T([e], t, r), r && r.length && _e(r).remove(), _e.merge([], o.childNodes))
                    }, _e.fn.load = function (e, t, n) {
                        var i, o, r, s = this, a = e.indexOf(" ");
                        return a > -1 && (i = Z(e.slice(a)), e = e.slice(0, a)), xe(t) ? (n = t, t = void 0) : t && "object" == typeof t && (o = "POST"), s.length > 0 && _e.ajax({
                            url: e,
                            type: o || "GET",
                            dataType: "html",
                            data: t
                        }).done(function (e) {
                            r = arguments, s.html(i ? _e("<div>").append(_e.parseHTML(e)).find(i) : e)
                        }).always(n && function (e, t) {
                            s.each(function () {
                                n.apply(this, r || [e.responseText, t, e])
                            })
                        }), this
                    }, _e.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
                        _e.fn[t] = function (e) {
                            return this.on(t, e)
                        }
                    }), _e.expr.pseudos.animated = function (e) {
                        return _e.grep(_e.timers, function (t) {
                            return e === t.elem
                        }).length
                    }, _e.offset = {
                        setOffset: function (e, t, n) {
                            var i, o, r, s, a, l, c, u = _e.css(e, "position"), d = _e(e), p = {};
                            "static" === u && (e.style.position = "relative"), a = d.offset(), r = _e.css(e, "top"), l = _e.css(e, "left"), c = ("absolute" === u || "fixed" === u) && (r + l).indexOf("auto") > -1, c ? (i = d.position(), s = i.top, o = i.left) : (s = parseFloat(r) || 0, o = parseFloat(l) || 0), xe(t) && (t = t.call(e, n, _e.extend({}, a))), null != t.top && (p.top = t.top - a.top + s), null != t.left && (p.left = t.left - a.left + o), "using" in t ? t.using.call(e, p) : d.css(p)
                        }
                    }, _e.fn.extend({
                        offset: function (e) {
                            if (arguments.length) return void 0 === e ? this : this.each(function (t) {
                                _e.offset.setOffset(this, e, t)
                            });
                            var t, n, i = this[0];
                            if (i) return i.getClientRects().length ? (t = i.getBoundingClientRect(), n = i.ownerDocument.defaultView, {
                                top: t.top + n.pageYOffset,
                                left: t.left + n.pageXOffset
                            }) : {top: 0, left: 0}
                        }, position: function () {
                            if (this[0]) {
                                var e, t, n, i = this[0], o = {top: 0, left: 0};
                                if ("fixed" === _e.css(i, "position")) t = i.getBoundingClientRect(); else {
                                    for (t = this.offset(), n = i.ownerDocument, e = i.offsetParent || n.documentElement; e && (e === n.body || e === n.documentElement) && "static" === _e.css(e, "position");) e = e.parentNode;
                                    e && e !== i && 1 === e.nodeType && (o = _e(e).offset(), o.top += _e.css(e, "borderTopWidth", !0), o.left += _e.css(e, "borderLeftWidth", !0))
                                }
                                return {
                                    top: t.top - o.top - _e.css(i, "marginTop", !0),
                                    left: t.left - o.left - _e.css(i, "marginLeft", !0)
                                }
                            }
                        }, offsetParent: function () {
                            return this.map(function () {
                                for (var e = this.offsetParent; e && "static" === _e.css(e, "position");) e = e.offsetParent;
                                return e || Je
                            })
                        }
                    }), _e.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (e, t) {
                        var n = "pageYOffset" === t;
                        _e.fn[e] = function (i) {
                            return ze(this, function (e, i, o) {
                                var r;
                                return ke(e) ? r = e : 9 === e.nodeType && (r = e.defaultView), void 0 === o ? r ? r[t] : e[i] : void (r ? r.scrollTo(n ? r.pageXOffset : o, n ? o : r.pageYOffset) : e[i] = o)
                            }, e, i, arguments.length)
                        }
                    }), _e.each(["top", "left"], function (e, t) {
                        _e.cssHooks[t] = I(we.pixelPosition, function (e, n) {
                            if (n) return n = M(e, t), mt.test(n) ? _e(e).position()[t] + "px" : n
                        })
                    }), _e.each({Height: "height", Width: "width"}, function (e, t) {
                        _e.each({padding: "inner" + e, content: t, "": "outer" + e}, function (n, i) {
                            _e.fn[i] = function (o, r) {
                                var s = arguments.length && (n || "boolean" != typeof o),
                                    a = n || (o === !0 || r === !0 ? "margin" : "border");
                                return ze(this, function (t, n, o) {
                                    var r;
                                    return ke(t) ? 0 === i.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (r = t.documentElement, Math.max(t.body["scroll" + e], r["scroll" + e], t.body["offset" + e], r["offset" + e], r["client" + e])) : void 0 === o ? _e.css(t, n, a) : _e.style(t, n, o, a)
                                }, t, s ? o : void 0, s)
                            }
                        })
                    }), _e.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) {
                        _e.fn[t] = function (e, n) {
                            return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
                        }
                    }), _e.fn.extend({
                        hover: function (e, t) {
                            return this.mouseenter(e).mouseleave(t || e)
                        }
                    }), _e.fn.extend({
                        bind: function (e, t, n) {
                            return this.on(e, null, t, n)
                        }, unbind: function (e, t) {
                            return this.off(e, null, t)
                        }, delegate: function (e, t, n, i) {
                            return this.on(t, e, n, i)
                        }, undelegate: function (e, t, n) {
                            return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
                        }
                    }), _e.proxy = function (e, t) {
                        var n, i, o;
                        if ("string" == typeof t && (n = e[t], t = e, e = n), xe(e)) return i = de.call(arguments, 2), o = function () {
                            return e.apply(t || this, i.concat(de.call(arguments)))
                        }, o.guid = e.guid = e.guid || _e.guid++, o
                    }, _e.holdReady = function (e) {
                        e ? _e.readyWait++ : _e.ready(!0)
                    }, _e.isArray = Array.isArray, _e.parseJSON = JSON.parse, _e.nodeName = s, _e.isFunction = xe, _e.isWindow = ke, _e.camelCase = m, _e.type = o, _e.now = Date.now, _e.isNumeric = function (e) {
                        var t = _e.type(e);
                        return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
                    }, "function" == typeof i && i.amd && i("jquery", [], function () {
                        return _e
                    });
                    var rn = e.jQuery, sn = e.$;
                    return _e.noConflict = function (t) {
                        return e.$ === _e && (e.$ = sn), t && e.jQuery === _e && (e.jQuery = rn), _e
                    }, t || (e.jQuery = e.$ = _e), _e
                }), o("undefined" != typeof jQuery ? jQuery : window.jQuery)
            }).call(e, void 0, void 0, void 0, void 0, function (e) {
                t.exports = e
            })
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {}],
    11: [function (e, t, n) {
        !function (e) {
            var i = !1;
            if ("function" == typeof define && define.amd && (define(e), i = !0), "object" == typeof n && (t.exports = e(), i = !0), !i) {
                var o = window.Cookies, r = window.Cookies = e();
                r.noConflict = function () {
                    return window.Cookies = o, r
                }
            }
        }(function () {
            function e() {
                for (var e = 0, t = {}; e < arguments.length; e++) {
                    var n = arguments[e];
                    for (var i in n) t[i] = n[i]
                }
                return t
            }

            function t(n) {
                function i(t, o, r) {
                    var s;
                    if ("undefined" != typeof document) {
                        if (arguments.length > 1) {
                            if (r = e({path: "/"}, i.defaults, r), "number" == typeof r.expires) {
                                var a = new Date;
                                a.setMilliseconds(a.getMilliseconds() + 864e5 * r.expires), r.expires = a
                            }
                            r.expires = r.expires ? r.expires.toUTCString() : "";
                            try {
                                s = JSON.stringify(o), /^[\{\[]/.test(s) && (o = s)
                            } catch (e) {
                            }
                            o = n.write ? n.write(o, t) : encodeURIComponent(String(o)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), t = encodeURIComponent(String(t)), t = t.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent), t = t.replace(/[\(\)]/g, escape);
                            var l = "";
                            for (var c in r) r[c] && (l += "; " + c, r[c] !== !0 && (l += "=" + r[c]));
                            return document.cookie = t + "=" + o + l
                        }
                        t || (s = {});
                        for (var u = document.cookie ? document.cookie.split("; ") : [], d = /(%[0-9A-Z]{2})+/g, p = 0; p < u.length; p++) {
                            var f = u[p].split("="), h = f.slice(1).join("=");
                            this.json || '"' !== h.charAt(0) || (h = h.slice(1, -1));
                            try {
                                var m = f[0].replace(d, decodeURIComponent);
                                if (h = n.read ? n.read(h, m) : n(h, m) || h.replace(d, decodeURIComponent), this.json) try {
                                    h = JSON.parse(h)
                                } catch (e) {
                                }
                                if (t === m) {
                                    s = h;
                                    break
                                }
                                t || (s[m] = h)
                            } catch (e) {
                            }
                        }
                        return s
                    }
                }

                return i.set = i, i.get = function (e) {
                    return i.call(i, e)
                }, i.getJSON = function () {
                    return i.apply({json: !0}, [].slice.call(arguments))
                }, i.defaults = {}, i.remove = function (t, n) {
                    i(t, "", e(n, {expires: -1}))
                }, i.withConverter = t, i
            }

            return t(function () {
            })
        })
    }, {}],
    12: [function (e, t, n) {
        !function (e, n) {
            var i = n(e, e.document);
            e.lazySizes = i, "object" == typeof t && t.exports && (t.exports = i)
        }(window, function (e, t) {
            "use strict";
            if (t.getElementsByClassName) {
                var n, i, o = t.documentElement, r = e.Date, s = e.HTMLPictureElement, a = "addEventListener",
                    l = "getAttribute", c = e[a], u = e.setTimeout, d = e.requestAnimationFrame || u,
                    p = e.requestIdleCallback, f = /^picture$/i, h = ["load", "error", "lazyincluded", "_lazyloaded"],
                    m = {}, g = Array.prototype.forEach, v = function (e, t) {
                        return m[t] || (m[t] = new RegExp("(\\s|^)" + t + "(\\s|$)")), m[t].test(e[l]("class") || "") && m[t]
                    }, y = function (e, t) {
                        v(e, t) || e.setAttribute("class", (e[l]("class") || "").trim() + " " + t)
                    }, b = function (e, t) {
                        var n;
                        (n = v(e, t)) && e.setAttribute("class", (e[l]("class") || "").replace(n, " "))
                    }, w = function (e, t, n) {
                        var i = n ? a : "removeEventListener";
                        n && w(e, t), h.forEach(function (n) {
                            e[i](n, t)
                        })
                    }, x = function (e, i, o, r, s) {
                        var a = t.createEvent("CustomEvent");
                        return o || (o = {}), o.instance = n, a.initCustomEvent(i, !r, !s, o), e.dispatchEvent(a), a
                    }, k = function (t, n) {
                        var o;
                        !s && (o = e.picturefill || i.pf) ? (n && n.src && !t[l]("srcset") && t.setAttribute("srcset", n.src), o({
                            reevaluate: !0,
                            elements: [t]
                        })) : n && n.src && (t.src = n.src)
                    }, C = function (e, t) {
                        return (getComputedStyle(e, null) || {})[t]
                    }, T = function (e, t, n) {
                        for (n = n || e.offsetWidth; n < i.minSize && t && !e._lazysizesWidth;) n = t.offsetWidth, t = t.parentNode;
                        return n
                    }, _ = function () {
                        var e, n, i = [], o = [], r = i, s = function () {
                            var t = r;
                            for (r = i.length ? o : i, e = !0, n = !1; t.length;) t.shift()();
                            e = !1
                        }, a = function (i, o) {
                            e && !o ? i.apply(this, arguments) : (r.push(i), n || (n = !0, (t.hidden ? u : d)(s)))
                        };
                        return a._lsFlush = s, a
                    }(), S = function (e, t) {
                        return t ? function () {
                            _(e)
                        } : function () {
                            var t = this, n = arguments;
                            _(function () {
                                e.apply(t, n)
                            })
                        }
                    }, j = function (e) {
                        var t, n = 0, o = i.throttleDelay, s = i.ricTimeout, a = function () {
                            t = !1, n = r.now(), e()
                        }, l = p && s > 49 ? function () {
                            p(a, {timeout: s}), s !== i.ricTimeout && (s = i.ricTimeout)
                        } : S(function () {
                            u(a)
                        }, !0);
                        return function (e) {
                            var i;
                            (e = e === !0) && (s = 33), t || (t = !0, i = o - (r.now() - n), i < 0 && (i = 0), e || i < 9 ? l() : u(l, i))
                        }
                    }, $ = function (e) {
                        var t, n, i = 99, o = function () {
                            t = null, e()
                        }, s = function () {
                            var e = r.now() - n;
                            e < i ? u(s, i - e) : (p || o)(o)
                        };
                        return function () {
                            n = r.now(), t || (t = u(s, i))
                        }
                    };
                !function () {
                    var t, n = {
                        lazyClass: "lazyload",
                        loadedClass: "lazyloaded",
                        loadingClass: "lazyloading",
                        preloadClass: "lazypreload",
                        errorClass: "lazyerror",
                        autosizesClass: "lazyautosizes",
                        srcAttr: "data-src",
                        srcsetAttr: "data-srcset",
                        sizesAttr: "data-sizes",
                        minSize: 40,
                        customMedia: {},
                        init: !0,
                        expFactor: 1.5,
                        hFac: .8,
                        loadMode: 2,
                        loadHidden: !0,
                        ricTimeout: 0,
                        throttleDelay: 125
                    };
                    i = e.lazySizesConfig || e.lazysizesConfig || {};
                    for (t in n) t in i || (i[t] = n[t]);
                    e.lazySizesConfig = i, u(function () {
                        i.init && O()
                    })
                }();
                var A = function () {
                    var s, d, p, h, m, T, A, O, D, q, P, N, L, H, M = /^img$/i, I = /^iframe$/i,
                        z = "onscroll" in e && !/(gle|ing)bot/.test(navigator.userAgent), Q = 0, R = 0, W = 0, F = -1,
                        U = function (e) {
                            W--, e && e.target && w(e.target, U), (!e || W < 0 || !e.target) && (W = 0)
                        }, V = function (e, n) {
                            var i, r = e,
                                s = "hidden" == C(t.body, "visibility") || "hidden" != C(e.parentNode, "visibility") && "hidden" != C(e, "visibility");
                            for (O -= n, P += n, D -= n, q += n; s && (r = r.offsetParent) && r != t.body && r != o;) s = (C(r, "opacity") || 1) > 0, s && "visible" != C(r, "overflow") && (i = r.getBoundingClientRect(), s = q > i.left && D < i.right && P > i.top - 1 && O < i.bottom + 1);
                            return s
                        }, B = function () {
                            var e, r, a, c, u, p, f, m, g, v = n.elements;
                            if ((h = i.loadMode) && W < 8 && (e = v.length)) {
                                r = 0, F++, null == L && ("expand" in i || (i.expand = o.clientHeight > 500 && o.clientWidth > 500 ? 500 : 370), N = i.expand, L = N * i.expFactor), R < L && W < 1 && F > 2 && h > 2 && !t.hidden ? (R = L, F = 0) : R = h > 1 && F > 1 && W < 6 ? N : Q;
                                for (; r < e; r++) if (v[r] && !v[r]._lazyRace) if (z) if ((m = v[r][l]("data-expand")) && (p = 1 * m) || (p = R), g !== p && (T = innerWidth + p * H, A = innerHeight + p, f = p * -1, g = p), a = v[r].getBoundingClientRect(), (P = a.bottom) >= f && (O = a.top) <= A && (q = a.right) >= f * H && (D = a.left) <= T && (P || q || D || O) && (i.loadHidden || "hidden" != C(v[r], "visibility")) && (d && W < 3 && !m && (h < 3 || F < 4) || V(v[r], p))) {
                                    if (te(v[r]), u = !0, W > 9) break
                                } else !u && d && !c && W < 4 && F < 4 && h > 2 && (s[0] || i.preloadAfterLoad) && (s[0] || !m && (P || q || D || O || "auto" != v[r][l](i.sizesAttr))) && (c = s[0] || v[r]); else te(v[r]);
                                c && !u && te(c)
                            }
                        }, G = j(B), Y = function (e) {
                            y(e.target, i.loadedClass), b(e.target, i.loadingClass), w(e.target, J), x(e.target, "lazyloaded")
                        }, X = S(Y), J = function (e) {
                            X({target: e.target})
                        }, K = function (e, t) {
                            try {
                                e.contentWindow.location.replace(t)
                            } catch (n) {
                                e.src = t
                            }
                        }, Z = function (e) {
                            var t, n = e[l](i.srcsetAttr);
                            (t = i.customMedia[e[l]("data-media") || e[l]("media")]) && e.setAttribute("media", t), n && e.setAttribute("srcset", n)
                        }, ee = S(function (e, t, n, o, r) {
                            var s, a, c, d, h, m;
                            (h = x(e, "lazybeforeunveil", t)).defaultPrevented || (o && (n ? y(e, i.autosizesClass) : e.setAttribute("sizes", o)), a = e[l](i.srcsetAttr), s = e[l](i.srcAttr), r && (c = e.parentNode, d = c && f.test(c.nodeName || "")), m = t.firesLoad || "src" in e && (a || s || d), h = {target: e}, m && (w(e, U, !0), clearTimeout(p), p = u(U, 2500), y(e, i.loadingClass), w(e, J, !0)), d && g.call(c.getElementsByTagName("source"), Z), a ? e.setAttribute("srcset", a) : s && !d && (I.test(e.nodeName) ? K(e, s) : e.src = s), r && (a || d) && k(e, {src: s})), e._lazyRace && delete e._lazyRace, b(e, i.lazyClass), _(function () {
                                (!m || e.complete && e.naturalWidth > 1) && (m ? U(h) : W--, Y(h))
                            }, !0)
                        }), te = function (e) {
                            var t, n = M.test(e.nodeName), o = n && (e[l](i.sizesAttr) || e[l]("sizes")), r = "auto" == o;
                            (!r && d || !n || !e[l]("src") && !e.srcset || e.complete || v(e, i.errorClass) || !v(e, i.lazyClass)) && (t = x(e, "lazyunveilread").detail, r && E.updateElem(e, !0, e.offsetWidth), e._lazyRace = !0, W++, ee(e, t, r, o, n))
                        }, ne = function () {
                            if (!d) {
                                if (r.now() - m < 999) return void u(ne, 999);
                                var e = $(function () {
                                    i.loadMode = 3, G()
                                });
                                d = !0, i.loadMode = 3, G(), c("scroll", function () {
                                    3 == i.loadMode && (i.loadMode = 2), e()
                                }, !0)
                            }
                        };
                    return {
                        _: function () {
                            m = r.now(), n.elements = t.getElementsByClassName(i.lazyClass), s = t.getElementsByClassName(i.lazyClass + " " + i.preloadClass), H = i.hFac, c("scroll", G, !0), c("resize", G, !0), e.MutationObserver ? new MutationObserver(G).observe(o, {
                                childList: !0,
                                subtree: !0,
                                attributes: !0
                            }) : (o[a]("DOMNodeInserted", G, !0), o[a]("DOMAttrModified", G, !0), setInterval(G, 999)), c("hashchange", G, !0), ["focus", "mouseover", "click", "load", "transitionend", "animationend", "webkitAnimationEnd"].forEach(function (e) {
                                t[a](e, G, !0)
                            }), /d$|^c/.test(t.readyState) ? ne() : (c("load", ne), t[a]("DOMContentLoaded", G), u(ne, 2e4)), n.elements.length ? (B(), _._lsFlush()) : G()
                        }, checkElems: G, unveil: te
                    }
                }(), E = function () {
                    var e, n = S(function (e, t, n, i) {
                        var o, r, s;
                        if (e._lazysizesWidth = i, i += "px", e.setAttribute("sizes", i), f.test(t.nodeName || "")) for (o = t.getElementsByTagName("source"), r = 0, s = o.length; r < s; r++) o[r].setAttribute("sizes", i);
                        n.detail.dataAttr || k(e, n.detail)
                    }), o = function (e, t, i) {
                        var o, r = e.parentNode;
                        r && (i = T(e, r, i), o = x(e, "lazybeforesizes", {
                            width: i,
                            dataAttr: !!t
                        }), o.defaultPrevented || (i = o.detail.width, i && i !== e._lazysizesWidth && n(e, r, o, i)))
                    }, r = function () {
                        var t, n = e.length;
                        if (n) for (t = 0; t < n; t++) o(e[t])
                    }, s = $(r);
                    return {
                        _: function () {
                            e = t.getElementsByClassName(i.autosizesClass), c("resize", s)
                        }, checkElems: s, updateElem: o
                    }
                }(), O = function () {
                    O.i || (O.i = !0, E._(), A._())
                };
                return n = {
                    cfg: i,
                    autoSizer: E,
                    loader: A,
                    init: O,
                    uP: k,
                    aC: y,
                    rC: b,
                    hC: v,
                    fire: x,
                    gW: T,
                    rAF: _
                }
            }
        })
    }, {}],
    13: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            return "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='" + e + "' height='" + t + "'%3E%3C/svg%3E"
        }

        function o(e) {
            if (e.srcset && !y && window.picturefill) {
                var t = window.picturefill._;
                e[t.ns] && e[t.ns].evaled || t.fillImg(e, {reselect: !0}), e[t.ns].curSrc || (e[t.ns].supported = !1, t.fillImg(e, {reselect: !0})), e.currentSrc = e[t.ns].curSrc || e.src
            }
        }

        function r(e) {
            for (var t, n = getComputedStyle(e).fontFamily, i = {}; null !== (t = f.exec(n));) i[t[1]] = t[2];
            return i
        }

        function s(e, t, n) {
            var o = i(t || 1, n || 0);
            b.call(e, "src") !== o && w.call(e, "src", o)
        }

        function a(e, t) {
            e.naturalWidth ? t(e) : setTimeout(a, 100, e, t)
        }

        function l(e) {
            var t = r(e), n = e[p];
            if (t["object-fit"] = t["object-fit"] || "fill", !n.img) {
                if ("fill" === t["object-fit"]) return;
                if (!n.skipTest && m && !t["object-position"]) return
            }
            if (!n.img) {
                n.img = new Image(e.width, e.height), n.img.srcset = b.call(e, "data-ofi-srcset") || e.srcset, n.img.src = b.call(e, "data-ofi-src") || e.src, w.call(e, "data-ofi-src", e.src), e.srcset && w.call(e, "data-ofi-srcset", e.srcset), s(e, e.naturalWidth || e.width, e.naturalHeight || e.height), e.srcset && (e.srcset = "");
                try {
                    c(e)
                } catch (e) {
                    window.console && console.warn("https://bit.ly/ofi-old-browser")
                }
            }
            o(n.img), e.style.backgroundImage = 'url("' + (n.img.currentSrc || n.img.src).replace(/"/g, '\\"') + '")', e.style.backgroundPosition = t["object-position"] || "center", e.style.backgroundRepeat = "no-repeat", e.style.backgroundOrigin = "content-box", /scale-down/.test(t["object-fit"]) ? a(n.img, function () {
                n.img.naturalWidth > e.width || n.img.naturalHeight > e.height ? e.style.backgroundSize = "contain" : e.style.backgroundSize = "auto"
            }) : e.style.backgroundSize = t["object-fit"].replace("none", "auto").replace("fill", "100% 100%"), a(n.img, function (t) {
                s(e, t.naturalWidth, t.naturalHeight)
            })
        }

        function c(e) {
            var t = {
                get: function (t) {
                    return e[p].img[t ? t : "src"]
                }, set: function (t, n) {
                    return e[p].img[n ? n : "src"] = t, w.call(e, "data-ofi-" + n, t), l(e), t
                }
            };
            Object.defineProperty(e, "src", t), Object.defineProperty(e, "currentSrc", {
                get: function () {
                    return t.get("currentSrc")
                }
            }), Object.defineProperty(e, "srcset", {
                get: function () {
                    return t.get("srcset")
                }, set: function (e) {
                    return t.set(e, "srcset")
                }
            })
        }

        function u() {
            function e(e, t) {
                return e[p] && e[p].img && ("src" === t || "srcset" === t) ? e[p].img : e
            }

            g || (HTMLImageElement.prototype.getAttribute = function (t) {
                return b.call(e(this, t), t)
            }, HTMLImageElement.prototype.setAttribute = function (t, n) {
                return w.call(e(this, t), t, String(n))
            })
        }

        function d(e, t) {
            var n = !x && !e;
            if (t = t || {}, e = e || "img", g && !t.skipTest || !v) return !1;
            "img" === e ? e = document.getElementsByTagName("img") : "string" == typeof e ? e = document.querySelectorAll(e) : "length" in e || (e = [e]);
            for (var i = 0; i < e.length; i++) e[i][p] = e[i][p] || {skipTest: t.skipTest}, l(e[i]);
            n && (document.body.addEventListener("load", function (e) {
                "IMG" === e.target.tagName && d(e.target, {skipTest: t.skipTest})
            }, !0), x = !0, e = "img"), t.watchMQ && window.addEventListener("resize", d.bind(null, e, {skipTest: t.skipTest}))
        }

        var p = "bfred-it:object-fit-images", f = /(object-fit|object-position)\s*:\s*([-.\w\s%]+)/g,
            h = "undefined" == typeof Image ? {style: {"object-position": 1}} : new Image, m = "object-fit" in h.style,
            g = "object-position" in h.style, v = "background-size" in h.style, y = "string" == typeof h.currentSrc,
            b = h.getAttribute, w = h.setAttribute, x = !1;
        d.supportsObjectFit = m, d.supportsObjectPosition = g, u(), t.exports = d
    }, {}],
    14: [function (e, t, n) {
        !function (e, i) {
            "object" == typeof n && "object" == typeof t ? t.exports = i() : "function" == typeof define && define.amd ? define("scrollMonitor", [], i) : "object" == typeof n ? n.scrollMonitor = i() : e.scrollMonitor = i()
        }(this, function () {
            return function (e) {
                function t(i) {
                    if (n[i]) return n[i].exports;
                    var o = n[i] = {exports: {}, id: i, loaded: !1};
                    return e[i].call(o.exports, o, o.exports, t), o.loaded = !0, o.exports
                }

                var n = {};
                return t.m = e, t.c = n, t.p = "", t(0)
            }([function (e, t, n) {
                "use strict";
                var i = n(1), o = i.isInBrowser, r = n(2), s = new r(o ? document.body : null);
                s.setStateFromDOM(null), s.listenToDOM(), o && (window.scrollMonitor = s), e.exports = s
            }, function (e, t) {
                "use strict";
                t.VISIBILITYCHANGE = "visibilityChange", t.ENTERVIEWPORT = "enterViewport", t.FULLYENTERVIEWPORT = "fullyEnterViewport", t.EXITVIEWPORT = "exitViewport", t.PARTIALLYEXITVIEWPORT = "partiallyExitViewport", t.LOCATIONCHANGE = "locationChange", t.STATECHANGE = "stateChange", t.eventTypes = [t.VISIBILITYCHANGE, t.ENTERVIEWPORT, t.FULLYENTERVIEWPORT, t.EXITVIEWPORT, t.PARTIALLYEXITVIEWPORT, t.LOCATIONCHANGE, t.STATECHANGE], t.isOnServer = "undefined" == typeof window, t.isInBrowser = !t.isOnServer, t.defaultOffsets = {
                    top: 0,
                    bottom: 0
                }
            }, function (e, t, n) {
                "use strict";

                function i(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }

                function o(e) {
                    return l ? 0 : e === document.body ? window.innerHeight || document.documentElement.clientHeight : e.clientHeight
                }

                function r(e) {
                    return l ? 0 : e === document.body ? Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight, document.documentElement.offsetHeight, document.documentElement.clientHeight) : e.scrollHeight
                }

                function s(e) {
                    return l ? 0 : e === document.body ? window.pageYOffset || document.documentElement && document.documentElement.scrollTop || document.body.scrollTop : e.scrollTop
                }

                var a = n(1), l = a.isOnServer, c = a.isInBrowser, u = a.eventTypes, d = n(3), p = !1;
                if (c) try {
                    var f = Object.defineProperty({}, "passive", {
                        get: function () {
                            p = !0
                        }
                    });
                    window.addEventListener("test", null, f)
                } catch (e) {
                }
                var h = !!p && {capture: !1, passive: !0}, m = function () {
                    function e(t, n) {
                        function a() {
                            if (c.viewportTop = s(t), c.viewportBottom = c.viewportTop + c.viewportHeight, c.documentHeight = r(t), c.documentHeight !== d) {
                                for (p = c.watchers.length; p--;) c.watchers[p].recalculateLocation();
                                d = c.documentHeight
                            }
                        }

                        function l() {
                            for (f = c.watchers.length; f--;) c.watchers[f].update();
                            for (f = c.watchers.length; f--;) c.watchers[f].triggerCallbacks()
                        }

                        i(this, e);
                        var c = this;
                        this.item = t, this.watchers = [], this.viewportTop = null, this.viewportBottom = null, this.documentHeight = r(t), this.viewportHeight = o(t), this.DOMListener = function () {
                            e.prototype.DOMListener.apply(c, arguments)
                        }, this.eventTypes = u, n && (this.containerWatcher = n.create(t));
                        var d, p, f;
                        this.update = function () {
                            a(), l()
                        }, this.recalculateLocations = function () {
                            this.documentHeight = 0, this.update()
                        }
                    }

                    return e.prototype.listenToDOM = function () {
                        c && (window.addEventListener ? (this.item === document.body ? window.addEventListener("scroll", this.DOMListener, h) : this.item.addEventListener("scroll", this.DOMListener, h), window.addEventListener("resize", this.DOMListener)) : (this.item === document.body ? window.attachEvent("onscroll", this.DOMListener) : this.item.attachEvent("onscroll", this.DOMListener), window.attachEvent("onresize", this.DOMListener)), this.destroy = function () {
                            window.addEventListener ? (this.item === document.body ? (window.removeEventListener("scroll", this.DOMListener, h), this.containerWatcher.destroy()) : this.item.removeEventListener("scroll", this.DOMListener, h), window.removeEventListener("resize", this.DOMListener)) : (this.item === document.body ? (window.detachEvent("onscroll", this.DOMListener), this.containerWatcher.destroy()) : this.item.detachEvent("onscroll", this.DOMListener), window.detachEvent("onresize", this.DOMListener))
                        })
                    }, e.prototype.destroy = function () {
                    }, e.prototype.DOMListener = function (e) {
                        this.setStateFromDOM(e)
                    }, e.prototype.setStateFromDOM = function (e) {
                        var t = s(this.item), n = o(this.item), i = r(this.item);
                        this.setState(t, n, i, e)
                    }, e.prototype.setState = function (e, t, n, i) {
                        var o = t !== this.viewportHeight || n !== this.contentHeight;
                        if (this.latestEvent = i, this.viewportTop = e, this.viewportHeight = t, this.viewportBottom = e + t, this.contentHeight = n, o) for (var r = this.watchers.length; r--;) this.watchers[r].recalculateLocation();
                        this.updateAndTriggerWatchers(i)
                    }, e.prototype.updateAndTriggerWatchers = function (e) {
                        for (var t = this.watchers.length; t--;) this.watchers[t].update();
                        for (t = this.watchers.length; t--;) this.watchers[t].triggerCallbacks(e)
                    }, e.prototype.createCustomContainer = function () {
                        return new e
                    }, e.prototype.createContainer = function (t) {
                        "string" == typeof t ? t = document.querySelector(t) : t && t.length > 0 && (t = t[0]);
                        var n = new e(t, this);
                        return n.setStateFromDOM(), n.listenToDOM(), n
                    }, e.prototype.create = function (e, t) {
                        "string" == typeof e ? e = document.querySelector(e) : e && e.length > 0 && (e = e[0]);
                        var n = new d(this, e, t);
                        return this.watchers.push(n), n
                    }, e.prototype.beget = function (e, t) {
                        return this.create(e, t)
                    }, e
                }();
                e.exports = m
            }, function (e, t, n) {
                "use strict";

                function i(e, t, n) {
                    function i(e, t) {
                        if (0 !== e.length) for (w = e.length; w--;) x = e[w], x.callback.call(o, t, o), x.isOne && e.splice(w, 1)
                    }

                    var o = this;
                    this.watchItem = t, this.container = e, n ? n === +n ? this.offsets = {
                        top: n,
                        bottom: n
                    } : this.offsets = {
                        top: n.top || f.top,
                        bottom: n.bottom || f.bottom
                    } : this.offsets = f, this.callbacks = {};
                    for (var h = 0, m = p.length; h < m; h++) o.callbacks[p[h]] = [];
                    this.locked = !1;
                    var g, v, y, b, w, x;
                    this.triggerCallbacks = function (e) {
                        switch (this.isInViewport && !g && i(this.callbacks[s], e), this.isFullyInViewport && !v && i(this.callbacks[a], e), this.isAboveViewport !== y && this.isBelowViewport !== b && (i(this.callbacks[r], e), v || this.isFullyInViewport || (i(this.callbacks[a], e), i(this.callbacks[c], e)), g || this.isInViewport || (i(this.callbacks[s], e), i(this.callbacks[l], e))), !this.isFullyInViewport && v && i(this.callbacks[c], e), !this.isInViewport && g && i(this.callbacks[l], e), this.isInViewport !== g && i(this.callbacks[r], e), !0) {
                            case g !== this.isInViewport:
                            case v !== this.isFullyInViewport:
                            case y !== this.isAboveViewport:
                            case b !== this.isBelowViewport:
                                i(this.callbacks[d], e)
                        }
                        g = this.isInViewport, v = this.isFullyInViewport, y = this.isAboveViewport, b = this.isBelowViewport
                    }, this.recalculateLocation = function () {
                        if (!this.locked) {
                            var e = this.top, t = this.bottom;
                            if (this.watchItem.nodeName) {
                                var n = this.watchItem.style.display;
                                "none" === n && (this.watchItem.style.display = "");
                                for (var o = 0, r = this.container; r.containerWatcher;) o += r.containerWatcher.top - r.containerWatcher.container.viewportTop, r = r.containerWatcher.container;
                                var s = this.watchItem.getBoundingClientRect();
                                this.top = s.top + this.container.viewportTop - o, this.bottom = s.bottom + this.container.viewportTop - o, "none" === n && (this.watchItem.style.display = n)
                            } else this.watchItem === +this.watchItem ? this.watchItem > 0 ? this.top = this.bottom = this.watchItem : this.top = this.bottom = this.container.documentHeight - this.watchItem : (this.top = this.watchItem.top, this.bottom = this.watchItem.bottom);
                            this.top -= this.offsets.top, this.bottom += this.offsets.bottom, this.height = this.bottom - this.top, void 0 === e && void 0 === t || this.top === e && this.bottom === t || i(this.callbacks[u], null)
                        }
                    }, this.recalculateLocation(), this.update(), g = this.isInViewport, v = this.isFullyInViewport, y = this.isAboveViewport, b = this.isBelowViewport
                }

                var o = n(1), r = o.VISIBILITYCHANGE, s = o.ENTERVIEWPORT, a = o.FULLYENTERVIEWPORT, l = o.EXITVIEWPORT,
                    c = o.PARTIALLYEXITVIEWPORT, u = o.LOCATIONCHANGE, d = o.STATECHANGE, p = o.eventTypes,
                    f = o.defaultOffsets;
                i.prototype = {
                    on: function (e, t, n) {
                        switch (!0) {
                            case e === r && !this.isInViewport && this.isAboveViewport:
                            case e === s && this.isInViewport:
                            case e === a && this.isFullyInViewport:
                            case e === l && this.isAboveViewport && !this.isInViewport:
                            case e === c && this.isInViewport && this.isAboveViewport:
                                if (t.call(this, this.container.latestEvent, this), n) return
                        }
                        if (!this.callbacks[e]) throw new Error("Tried to add a scroll monitor listener of type " + e + ". Your options are: " + p.join(", "));
                        this.callbacks[e].push({callback: t, isOne: n || !1})
                    }, off: function (e, t) {
                        if (!this.callbacks[e]) throw new Error("Tried to remove a scroll monitor listener of type " + e + ". Your options are: " + p.join(", "));
                        for (var n, i = 0; n = this.callbacks[e][i]; i++) if (n.callback === t) {
                            this.callbacks[e].splice(i, 1);
                            break
                        }
                    }, one: function (e, t) {
                        this.on(e, t, !0)
                    }, recalculateSize: function () {
                        this.height = this.watchItem.offsetHeight + this.offsets.top + this.offsets.bottom, this.bottom = this.top + this.height
                    }, update: function () {
                        this.isAboveViewport = this.top < this.container.viewportTop, this.isBelowViewport = this.bottom > this.container.viewportBottom, this.isInViewport = this.top < this.container.viewportBottom && this.bottom > this.container.viewportTop, this.isFullyInViewport = this.top >= this.container.viewportTop && this.bottom <= this.container.viewportBottom || this.isAboveViewport && this.isBelowViewport
                    }, destroy: function () {
                        var e = this.container.watchers.indexOf(this), t = this;
                        this.container.watchers.splice(e, 1);
                        for (var n = 0, i = p.length; n < i; n++) t.callbacks[p[n]].length = 0
                    }, lock: function () {
                        this.locked = !0
                    }, unlock: function () {
                        this.locked = !1
                    }
                };
                for (var h = function (e) {
                    return function (t, n) {
                        this.on.call(this, e, t, n)
                    }
                }, m = 0, g = p.length; m < g; m++) {
                    var v = p[m];
                    i.prototype[v] = h(v)
                }
                e.exports = i
            }])
        })
    }, {}],
    15: [function (e, t, n) {
        !function (n) {
            "function" == typeof define && define.amd ? define(["jquery"], n) : "object" == typeof t && t.exports ? t.exports = function (t, i) {
                return void 0 === i && (i = "undefined" != typeof window ? e("jquery") : e("jquery")(t)), n(i), i
            } : n(jQuery)
        }(function (e) {
            var t = function () {
                if (e && e.fn && e.fn.select2 && e.fn.select2.amd) var t = e.fn.select2.amd;
                var t;
                return function () {
                    if (!t || !t.requirejs) {
                        t ? n = t : t = {};
                        var e, n, i;
                        !function (t) {
                            function o(e, t) {
                                return x.call(e, t)
                            }

                            function r(e, t) {
                                var n, i, o, r, s, a, l, c, u, d, p, f, h = t && t.split("/"), m = b.map,
                                    g = m && m["*"] || {};
                                if (e) {
                                    for (e = e.split("/"), s = e.length - 1, b.nodeIdCompat && C.test(e[s]) && (e[s] = e[s].replace(C, "")), "." === e[0].charAt(0) && h && (f = h.slice(0, h.length - 1), e = f.concat(e)), u = 0; u < e.length; u++) if (p = e[u], "." === p) e.splice(u, 1), u -= 1; else if (".." === p) {
                                        if (0 === u || 1 === u && ".." === e[2] || ".." === e[u - 1]) continue;
                                        u > 0 && (e.splice(u - 1, 2), u -= 2)
                                    }
                                    e = e.join("/")
                                }
                                if ((h || g) && m) {
                                    for (n = e.split("/"), u = n.length; u > 0; u -= 1) {
                                        if (i = n.slice(0, u).join("/"), h) for (d = h.length; d > 0; d -= 1) if (o = m[h.slice(0, d).join("/")], o && (o = o[i])) {
                                            r = o, a = u;
                                            break
                                        }
                                        if (r) break;
                                        !l && g && g[i] && (l = g[i], c = u)
                                    }
                                    !r && l && (r = l, a = c), r && (n.splice(0, a, r), e = n.join("/"))
                                }
                                return e
                            }

                            function s(e, n) {
                                return function () {
                                    var i = k.call(arguments, 0);
                                    return "string" != typeof i[0] && 1 === i.length && i.push(null), h.apply(t, i.concat([e, n]))
                                }
                            }

                            function a(e) {
                                return function (t) {
                                    return r(t, e)
                                }
                            }

                            function l(e) {
                                return function (t) {
                                    v[e] = t
                                }
                            }

                            function c(e) {
                                if (o(y, e)) {
                                    var n = y[e];
                                    delete y[e], w[e] = !0, f.apply(t, n)
                                }
                                if (!o(v, e) && !o(w, e)) throw new Error("No " + e);
                                return v[e]
                            }

                            function u(e) {
                                var t, n = e ? e.indexOf("!") : -1;
                                return n > -1 && (t = e.substring(0, n), e = e.substring(n + 1, e.length)), [t, e]
                            }

                            function d(e) {
                                return e ? u(e) : []
                            }

                            function p(e) {
                                return function () {
                                    return b && b.config && b.config[e] || {}
                                }
                            }

                            var f, h, m, g, v = {}, y = {}, b = {}, w = {}, x = Object.prototype.hasOwnProperty,
                                k = [].slice, C = /\.js$/;
                            m = function (e, t) {
                                var n, i = u(e), o = i[0], s = t[1];
                                return e = i[1], o && (o = r(o, s), n = c(o)), o ? e = n && n.normalize ? n.normalize(e, a(s)) : r(e, s) : (e = r(e, s), i = u(e), o = i[0], e = i[1], o && (n = c(o))), {
                                    f: o ? o + "!" + e : e,
                                    n: e,
                                    pr: o,
                                    p: n
                                }
                            }, g = {
                                require: function (e) {
                                    return s(e)
                                }, exports: function (e) {
                                    var t = v[e];
                                    return "undefined" != typeof t ? t : v[e] = {}
                                }, module: function (e) {
                                    return {id: e, uri: "", exports: v[e], config: p(e)}
                                }
                            }, f = function (e, n, i, r) {
                                var a, u, p, f, h, b, x, k = [], C = typeof i;
                                if (r = r || e, b = d(r), "undefined" === C || "function" === C) {
                                    for (n = !n.length && i.length ? ["require", "exports", "module"] : n, h = 0; h < n.length; h += 1) if (f = m(n[h], b), u = f.f, "require" === u) k[h] = g.require(e); else if ("exports" === u) k[h] = g.exports(e), x = !0; else if ("module" === u) a = k[h] = g.module(e); else if (o(v, u) || o(y, u) || o(w, u)) k[h] = c(u); else {
                                        if (!f.p) throw new Error(e + " missing " + u);
                                        f.p.load(f.n, s(r, !0), l(u), {}), k[h] = v[u]
                                    }
                                    p = i ? i.apply(v[e], k) : void 0, e && (a && a.exports !== t && a.exports !== v[e] ? v[e] = a.exports : p === t && x || (v[e] = p))
                                } else e && (v[e] = i)
                            }, e = n = h = function (e, n, i, o, r) {
                                if ("string" == typeof e) return g[e] ? g[e](n) : c(m(e, d(n)).f);
                                if (!e.splice) {
                                    if (b = e, b.deps && h(b.deps, b.callback), !n) return;
                                    n.splice ? (e = n, n = i, i = null) : e = t
                                }
                                return n = n || function () {
                                }, "function" == typeof i && (i = o, o = r), o ? f(t, e, n, i) : setTimeout(function () {
                                    f(t, e, n, i)
                                }, 4), h
                            }, h.config = function (e) {
                                return h(e)
                            }, e._defined = v, i = function (e, t, n) {
                                if ("string" != typeof e) throw new Error("See almond README: incorrect module build, no module name");
                                t.splice || (n = t, t = []), o(v, e) || o(y, e) || (y[e] = [e, t, n])
                            }, i.amd = {jQuery: !0}
                        }(), t.requirejs = e, t.require = n, t.define = i
                    }
                }(), t.define("almond", function () {
                }), t.define("jquery", [], function () {
                    var t = e || $;
                    return null == t && console && console.error && console.error("Select2: An instance of jQuery or a jQuery-compatible library was not found. Make sure that you are including jQuery before Select2 on your web page."), t
                }), t.define("select2/utils", ["jquery"], function (e) {
                    function t(e) {
                        var t = e.prototype, n = [];
                        for (var i in t) {
                            var o = t[i];
                            "function" == typeof o && "constructor" !== i && n.push(i)
                        }
                        return n
                    }

                    var n = {};
                    n.Extend = function (e, t) {
                        function n() {
                            this.constructor = e
                        }

                        var i = {}.hasOwnProperty;
                        for (var o in t) i.call(t, o) && (e[o] = t[o]);
                        return n.prototype = t.prototype, e.prototype = new n, e.__super__ = t.prototype, e
                    }, n.Decorate = function (e, n) {
                        function i() {
                            var t = Array.prototype.unshift, i = n.prototype.constructor.length,
                                o = e.prototype.constructor;
                            i > 0 && (t.call(arguments, e.prototype.constructor), o = n.prototype.constructor), o.apply(this, arguments)
                        }

                        function o() {
                            this.constructor = i
                        }

                        var r = t(n), s = t(e);
                        n.displayName = e.displayName, i.prototype = new o;
                        for (var a = 0; a < s.length; a++) {
                            var l = s[a];
                            i.prototype[l] = e.prototype[l]
                        }
                        for (var c = (function (e) {
                            var t = function () {
                            };
                            e in i.prototype && (t = i.prototype[e]);
                            var o = n.prototype[e];
                            return function () {
                                var e = Array.prototype.unshift;
                                return e.call(arguments, t), o.apply(this, arguments)
                            }
                        }), u = 0; u < r.length; u++) {
                            var d = r[u];
                            i.prototype[d] = c(d)
                        }
                        return i
                    };
                    var i = function () {
                        this.listeners = {}
                    };
                    i.prototype.on = function (e, t) {
                        this.listeners = this.listeners || {}, e in this.listeners ? this.listeners[e].push(t) : this.listeners[e] = [t]
                    }, i.prototype.trigger = function (e) {
                        var t = Array.prototype.slice, n = t.call(arguments, 1);
                        this.listeners = this.listeners || {}, null == n && (n = []), 0 === n.length && n.push({}), n[0]._type = e, e in this.listeners && this.invoke(this.listeners[e], t.call(arguments, 1)), "*" in this.listeners && this.invoke(this.listeners["*"], arguments)
                    }, i.prototype.invoke = function (e, t) {
                        for (var n = 0, i = e.length; n < i; n++) e[n].apply(this, t)
                    }, n.Observable = i, n.generateChars = function (e) {
                        for (var t = "", n = 0; n < e; n++) {
                            var i = Math.floor(36 * Math.random());
                            t += i.toString(36)
                        }
                        return t
                    }, n.bind = function (e, t) {
                        return function () {
                            e.apply(t, arguments)
                        }
                    }, n._convertData = function (e) {
                        for (var t in e) {
                            var n = t.split("-"), i = e;
                            if (1 !== n.length) {
                                for (var o = 0; o < n.length; o++) {
                                    var r = n[o];
                                    r = r.substring(0, 1).toLowerCase() + r.substring(1), r in i || (i[r] = {}), o == n.length - 1 && (i[r] = e[t]), i = i[r]
                                }
                                delete e[t]
                            }
                        }
                        return e
                    }, n.hasScroll = function (t, n) {
                        var i = e(n), o = n.style.overflowX, r = n.style.overflowY;
                        return (o !== r || "hidden" !== r && "visible" !== r) && ("scroll" === o || "scroll" === r || (i.innerHeight() < n.scrollHeight || i.innerWidth() < n.scrollWidth))
                    }, n.escapeMarkup = function (e) {
                        var t = {
                            "\\": "&#92;",
                            "&": "&amp;",
                            "<": "&lt;",
                            ">": "&gt;",
                            '"': "&quot;",
                            "'": "&#39;",
                            "/": "&#47;"
                        };
                        return "string" != typeof e ? e : String(e).replace(/[&<>"'\/\\]/g, function (e) {
                            return t[e]
                        })
                    }, n.appendMany = function (t, n) {
                        if ("1.7" === e.fn.jquery.substr(0, 3)) {
                            var i = e();
                            e.map(n, function (e) {
                                i = i.add(e)
                            }), n = i
                        }
                        t.append(n)
                    }, n.__cache = {};
                    var o = 0;
                    return n.GetUniqueElementId = function (e) {
                        var t = e.getAttribute("data-select2-id");
                        return null == t && (e.id ? (t = e.id, e.setAttribute("data-select2-id", t)) : (e.setAttribute("data-select2-id", ++o), t = o.toString())), t
                    }, n.StoreData = function (e, t, i) {
                        var o = n.GetUniqueElementId(e);
                        n.__cache[o] || (n.__cache[o] = {}), n.__cache[o][t] = i
                    }, n.GetData = function (t, i) {
                        var o = n.GetUniqueElementId(t);
                        return i ? n.__cache[o] && null != n.__cache[o][i] ? n.__cache[o][i] : e(t).data(i) : n.__cache[o]
                    }, n.RemoveData = function (e) {
                        var t = n.GetUniqueElementId(e);
                        null != n.__cache[t] && delete n.__cache[t]
                    }, n
                }), t.define("select2/results", ["jquery", "./utils"], function (e, t) {
                    function n(e, t, i) {
                        this.$element = e, this.data = i, this.options = t, n.__super__.constructor.call(this)
                    }

                    return t.Extend(n, t.Observable), n.prototype.render = function () {
                        var t = e('<ul class="select2-results__options" role="tree"></ul>');
                        return this.options.get("multiple") && t.attr("aria-multiselectable", "true"), this.$results = t, t
                    }, n.prototype.clear = function () {
                        this.$results.empty()
                    }, n.prototype.displayMessage = function (t) {
                        var n = this.options.get("escapeMarkup");
                        this.clear(), this.hideLoading();
                        var i = e('<li role="treeitem" aria-live="assertive" class="select2-results__option"></li>'),
                            o = this.options.get("translations").get(t.message);
                        i.append(n(o(t.args))), i[0].className += " select2-results__message", this.$results.append(i)
                    }, n.prototype.hideMessages = function () {
                        this.$results.find(".select2-results__message").remove()
                    }, n.prototype.append = function (e) {
                        this.hideLoading();
                        var t = [];
                        if (null == e.results || 0 === e.results.length) return void (0 === this.$results.children().length && this.trigger("results:message", {message: "noResults"}));
                        e.results = this.sort(e.results);
                        for (var n = 0; n < e.results.length; n++) {
                            var i = e.results[n], o = this.option(i);
                            t.push(o)
                        }
                        this.$results.append(t)
                    }, n.prototype.position = function (e, t) {
                        var n = t.find(".select2-results");
                        n.append(e)
                    }, n.prototype.sort = function (e) {
                        var t = this.options.get("sorter");
                        return t(e)
                    }, n.prototype.highlightFirstItem = function () {
                        var e = this.$results.find(".select2-results__option[aria-selected]"),
                            t = e.filter("[aria-selected=true]");
                        t.length > 0 ? t.first().trigger("mouseenter") : e.first().trigger("mouseenter"), this.ensureHighlightVisible()
                    }, n.prototype.setClasses = function () {
                        var n = this;
                        this.data.current(function (i) {
                            var o = e.map(i, function (e) {
                                return e.id.toString()
                            }), r = n.$results.find(".select2-results__option[aria-selected]");
                            r.each(function () {
                                var n = e(this), i = t.GetData(this, "data"), r = "" + i.id;
                                null != i.element && i.element.selected || null == i.element && e.inArray(r, o) > -1 ? n.attr("aria-selected", "true") : n.attr("aria-selected", "false")
                            })
                        })
                    }, n.prototype.showLoading = function (e) {
                        this.hideLoading();
                        var t = this.options.get("translations").get("searching"),
                            n = {disabled: !0, loading: !0, text: t(e)}, i = this.option(n);
                        i.className += " loading-results", this.$results.prepend(i)
                    }, n.prototype.hideLoading = function () {
                        this.$results.find(".loading-results").remove()
                    }, n.prototype.option = function (n) {
                        var i = document.createElement("li");
                        i.className = "select2-results__option";
                        var o = {role: "treeitem", "aria-selected": "false"};
                        n.disabled && (delete o["aria-selected"], o["aria-disabled"] = "true"), null == n.id && delete o["aria-selected"], null != n._resultId && (i.id = n._resultId), n.title && (i.title = n.title), n.children && (o.role = "group", o["aria-label"] = n.text, delete o["aria-selected"]);
                        for (var r in o) {
                            var s = o[r];
                            i.setAttribute(r, s)
                        }
                        if (n.children) {
                            var a = e(i), l = document.createElement("strong");
                            l.className = "select2-results__group";
                            e(l);
                            this.template(n, l);
                            for (var c = [], u = 0; u < n.children.length; u++) {
                                var d = n.children[u], p = this.option(d);
                                c.push(p)
                            }
                            var f = e("<ul></ul>", {class: "select2-results__options select2-results__options--nested"});
                            f.append(c), a.append(l), a.append(f)
                        } else this.template(n, i);
                        return t.StoreData(i, "data", n), i
                    }, n.prototype.bind = function (n, i) {
                        var o = this, r = n.id + "-results";
                        this.$results.attr("id", r), n.on("results:all", function (e) {
                            o.clear(), o.append(e.data), n.isOpen() && (o.setClasses(), o.highlightFirstItem())
                        }), n.on("results:append", function (e) {
                            o.append(e.data), n.isOpen() && o.setClasses()
                        }), n.on("query", function (e) {
                            o.hideMessages(), o.showLoading(e)
                        }), n.on("select", function () {
                            n.isOpen() && (o.setClasses(), o.highlightFirstItem())
                        }), n.on("unselect", function () {
                            n.isOpen() && (o.setClasses(), o.highlightFirstItem())
                        }), n.on("open", function () {
                            o.$results.attr("aria-expanded", "true"), o.$results.attr("aria-hidden", "false"), o.setClasses(), o.ensureHighlightVisible()
                        }), n.on("close", function () {
                            o.$results.attr("aria-expanded", "false"), o.$results.attr("aria-hidden", "true"), o.$results.removeAttr("aria-activedescendant")
                        }), n.on("results:toggle", function () {
                            var e = o.getHighlightedResults();
                            0 !== e.length && e.trigger("mouseup")
                        }), n.on("results:select", function () {
                            var e = o.getHighlightedResults();
                            if (0 !== e.length) {
                                var n = t.GetData(e[0], "data");
                                "true" == e.attr("aria-selected") ? o.trigger("close", {}) : o.trigger("select", {data: n})
                            }
                        }), n.on("results:previous", function () {
                            var e = o.getHighlightedResults(), t = o.$results.find("[aria-selected]"), n = t.index(e);
                            if (!(n <= 0)) {
                                var i = n - 1;
                                0 === e.length && (i = 0);
                                var r = t.eq(i);
                                r.trigger("mouseenter");
                                var s = o.$results.offset().top, a = r.offset().top,
                                    l = o.$results.scrollTop() + (a - s);
                                0 === i ? o.$results.scrollTop(0) : a - s < 0 && o.$results.scrollTop(l)
                            }
                        }), n.on("results:next", function () {
                            var e = o.getHighlightedResults(), t = o.$results.find("[aria-selected]"), n = t.index(e),
                                i = n + 1;
                            if (!(i >= t.length)) {
                                var r = t.eq(i);
                                r.trigger("mouseenter");
                                var s = o.$results.offset().top + o.$results.outerHeight(!1),
                                    a = r.offset().top + r.outerHeight(!1), l = o.$results.scrollTop() + a - s;
                                0 === i ? o.$results.scrollTop(0) : a > s && o.$results.scrollTop(l)
                            }
                        }), n.on("results:focus", function (e) {
                            e.element.addClass("select2-results__option--highlighted")
                        }), n.on("results:message", function (e) {
                            o.displayMessage(e)
                        }), e.fn.mousewheel && this.$results.on("mousewheel", function (e) {
                            var t = o.$results.scrollTop(), n = o.$results.get(0).scrollHeight - t + e.deltaY,
                                i = e.deltaY > 0 && t - e.deltaY <= 0, r = e.deltaY < 0 && n <= o.$results.height();
                            i ? (o.$results.scrollTop(0), e.preventDefault(), e.stopPropagation()) : r && (o.$results.scrollTop(o.$results.get(0).scrollHeight - o.$results.height()), e.preventDefault(), e.stopPropagation())
                        }), this.$results.on("mouseup", ".select2-results__option[aria-selected]", function (n) {
                            var i = e(this), r = t.GetData(this, "data");
                            return "true" === i.attr("aria-selected") ? void (o.options.get("multiple") ? o.trigger("unselect", {
                                originalEvent: n,
                                data: r
                            }) : o.trigger("close", {})) : void o.trigger("select", {originalEvent: n, data: r})
                        }), this.$results.on("mouseenter", ".select2-results__option[aria-selected]", function (n) {
                            var i = t.GetData(this, "data");
                            o.getHighlightedResults().removeClass("select2-results__option--highlighted"), o.trigger("results:focus", {
                                data: i,
                                element: e(this)
                            })
                        })
                    }, n.prototype.getHighlightedResults = function () {
                        var e = this.$results.find(".select2-results__option--highlighted");
                        return e
                    }, n.prototype.destroy = function () {
                        this.$results.remove()
                    }, n.prototype.ensureHighlightVisible = function () {
                        var e = this.getHighlightedResults();
                        if (0 !== e.length) {
                            var t = this.$results.find("[aria-selected]"), n = t.index(e),
                                i = this.$results.offset().top, o = e.offset().top,
                                r = this.$results.scrollTop() + (o - i), s = o - i;
                            r -= 2 * e.outerHeight(!1), n <= 2 ? this.$results.scrollTop(0) : (s > this.$results.outerHeight() || s < 0) && this.$results.scrollTop(r)
                        }
                    }, n.prototype.template = function (t, n) {
                        var i = this.options.get("templateResult"), o = this.options.get("escapeMarkup"), r = i(t, n);
                        null == r ? n.style.display = "none" : "string" == typeof r ? n.innerHTML = o(r) : e(n).append(r)
                    }, n
                }), t.define("select2/keys", [], function () {
                    var e = {
                        BACKSPACE: 8,
                        TAB: 9,
                        ENTER: 13,
                        SHIFT: 16,
                        CTRL: 17,
                        ALT: 18,
                        ESC: 27,
                        SPACE: 32,
                        PAGE_UP: 33,
                        PAGE_DOWN: 34,
                        END: 35,
                        HOME: 36,
                        LEFT: 37,
                        UP: 38,
                        RIGHT: 39,
                        DOWN: 40,
                        DELETE: 46
                    };
                    return e
                }), t.define("select2/selection/base", ["jquery", "../utils", "../keys"], function (e, t, n) {
                    function i(e, t) {
                        this.$element = e, this.options = t, i.__super__.constructor.call(this)
                    }

                    return t.Extend(i, t.Observable), i.prototype.render = function () {
                        var n = e('<span class="select2-selection" role="combobox"  aria-haspopup="true" aria-expanded="false"></span>');
                        return this._tabindex = 0, null != t.GetData(this.$element[0], "old-tabindex") ? this._tabindex = t.GetData(this.$element[0], "old-tabindex") : null != this.$element.attr("tabindex") && (this._tabindex = this.$element.attr("tabindex")), n.attr("title", this.$element.attr("title")), n.attr("tabindex", this._tabindex), this.$selection = n, n
                    }, i.prototype.bind = function (e, t) {
                        var i = this, o = (e.id + "-container", e.id + "-results");
                        this.container = e, this.$selection.on("focus", function (e) {
                            i.trigger("focus", e)
                        }), this.$selection.on("blur", function (e) {
                            i._handleBlur(e)
                        }), this.$selection.on("keydown", function (e) {
                            i.trigger("keypress", e), e.which === n.SPACE && e.preventDefault()
                        }), e.on("results:focus", function (e) {
                            i.$selection.attr("aria-activedescendant", e.data._resultId)
                        }), e.on("selection:update", function (e) {
                            i.update(e.data)
                        }), e.on("open", function () {
                            i.$selection.attr("aria-expanded", "true"), i.$selection.attr("aria-owns", o), i._attachCloseHandler(e)
                        }), e.on("close", function () {
                            i.$selection.attr("aria-expanded", "false"), i.$selection.removeAttr("aria-activedescendant"), i.$selection.removeAttr("aria-owns"), i.$selection.focus(), window.setTimeout(function () {
                                i.$selection.focus()
                            }, 0), i._detachCloseHandler(e)
                        }), e.on("enable", function () {
                            i.$selection.attr("tabindex", i._tabindex)
                        }), e.on("disable", function () {
                            i.$selection.attr("tabindex", "-1")
                        })
                    }, i.prototype._handleBlur = function (t) {
                        var n = this;
                        window.setTimeout(function () {
                            document.activeElement == n.$selection[0] || e.contains(n.$selection[0], document.activeElement) || n.trigger("blur", t)
                        }, 1)
                    }, i.prototype._attachCloseHandler = function (n) {
                        e(document.body).on("mousedown.select2." + n.id, function (n) {
                            var i = e(n.target), o = i.closest(".select2"), r = e(".select2.select2-container--open");
                            r.each(function () {
                                e(this);
                                if (this != o[0]) {
                                    var n = t.GetData(this, "element");
                                    n.select2("close")
                                }
                            })
                        })
                    }, i.prototype._detachCloseHandler = function (t) {
                        e(document.body).off("mousedown.select2." + t.id)
                    }, i.prototype.position = function (e, t) {
                        var n = t.find(".selection");
                        n.append(e)
                    }, i.prototype.destroy = function () {
                        this._detachCloseHandler(this.container)
                    }, i.prototype.update = function (e) {
                        throw new Error("The `update` method must be defined in child classes.")
                    }, i
                }), t.define("select2/selection/single", ["jquery", "./base", "../utils", "../keys"], function (e, t, n, i) {
                    function o() {
                        o.__super__.constructor.apply(this, arguments)
                    }

                    return n.Extend(o, t), o.prototype.render = function () {
                        var e = o.__super__.render.call(this);
                        return e.addClass("select2-selection--single"), e.html('<span class="select2-selection__rendered"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>'), e
                    }, o.prototype.bind = function (e, t) {
                        var n = this;
                        o.__super__.bind.apply(this, arguments);
                        var i = e.id + "-container";
                        this.$selection.find(".select2-selection__rendered").attr("id", i).attr("role", "textbox").attr("aria-readonly", "true"), this.$selection.attr("aria-labelledby", i), this.$selection.on("mousedown", function (e) {
                            1 === e.which && n.trigger("toggle", {originalEvent: e})
                        }), this.$selection.on("focus", function (e) {
                        }), this.$selection.on("blur", function (e) {
                        }), e.on("focus", function (t) {
                            e.isOpen() || n.$selection.focus()
                        })
                    }, o.prototype.clear = function () {
                        var e = this.$selection.find(".select2-selection__rendered");
                        e.empty(), e.removeAttr("title")
                    }, o.prototype.display = function (e, t) {
                        var n = this.options.get("templateSelection"), i = this.options.get("escapeMarkup");
                        return i(n(e, t))
                    }, o.prototype.selectionContainer = function () {
                        return e("<span></span>")
                    }, o.prototype.update = function (e) {
                        if (0 === e.length) return void this.clear();
                        var t = e[0], n = this.$selection.find(".select2-selection__rendered"), i = this.display(t, n);
                        n.empty().append(i), n.attr("title", t.title || t.text)
                    }, o
                }), t.define("select2/selection/multiple", ["jquery", "./base", "../utils"], function (e, t, n) {
                    function i(e, t) {
                        i.__super__.constructor.apply(this, arguments)
                    }

                    return n.Extend(i, t), i.prototype.render = function () {
                        var e = i.__super__.render.call(this);
                        return e.addClass("select2-selection--multiple"), e.html('<ul class="select2-selection__rendered"></ul>'), e
                    }, i.prototype.bind = function (t, o) {
                        var r = this;
                        i.__super__.bind.apply(this, arguments), this.$selection.on("click", function (e) {
                            r.trigger("toggle", {originalEvent: e})
                        }), this.$selection.on("click", ".select2-selection__choice__remove", function (t) {
                            if (!r.options.get("disabled")) {
                                var i = e(this), o = i.parent(), s = n.GetData(o[0], "data");
                                r.trigger("unselect", {originalEvent: t, data: s})
                            }
                        })
                    }, i.prototype.clear = function () {
                        var e = this.$selection.find(".select2-selection__rendered");
                        e.empty(), e.removeAttr("title")
                    }, i.prototype.display = function (e, t) {
                        var n = this.options.get("templateSelection"), i = this.options.get("escapeMarkup");
                        return i(n(e, t))
                    }, i.prototype.selectionContainer = function () {
                        var t = e('<li class="select2-selection__choice"><span class="select2-selection__choice__remove" role="presentation">&times;</span></li>');
                        return t
                    }, i.prototype.update = function (e) {
                        if (this.clear(), 0 !== e.length) {
                            for (var t = [], i = 0; i < e.length; i++) {
                                var o = e[i], r = this.selectionContainer(), s = this.display(o, r);
                                r.append(s), r.attr("title", o.title || o.text), n.StoreData(r[0], "data", o), t.push(r)
                            }
                            var a = this.$selection.find(".select2-selection__rendered");
                            n.appendMany(a, t)
                        }
                    }, i
                }), t.define("select2/selection/placeholder", ["../utils"], function (e) {
                    function t(e, t, n) {
                        this.placeholder = this.normalizePlaceholder(n.get("placeholder")), e.call(this, t, n)
                    }

                    return t.prototype.normalizePlaceholder = function (e, t) {
                        return "string" == typeof t && (t = {id: "", text: t}), t
                    }, t.prototype.createPlaceholder = function (e, t) {
                        var n = this.selectionContainer();
                        return n.html(this.display(t)), n.addClass("select2-selection__placeholder").removeClass("select2-selection__choice"), n
                    }, t.prototype.update = function (e, t) {
                        var n = 1 == t.length && t[0].id != this.placeholder.id, i = t.length > 1;
                        if (i || n) return e.call(this, t);
                        this.clear();
                        var o = this.createPlaceholder(this.placeholder);
                        this.$selection.find(".select2-selection__rendered").append(o)
                    }, t
                }), t.define("select2/selection/allowClear", ["jquery", "../keys", "../utils"], function (e, t, n) {
                    function i() {
                    }

                    return i.prototype.bind = function (e, t, n) {
                        var i = this;
                        e.call(this, t, n), null == this.placeholder && this.options.get("debug") && window.console && console.error && console.error("Select2: The `allowClear` option should be used in combination with the `placeholder` option."), this.$selection.on("mousedown", ".select2-selection__clear", function (e) {
                            i._handleClear(e)
                        }), t.on("keypress", function (e) {
                            i._handleKeyboardClear(e, t)
                        })
                    }, i.prototype._handleClear = function (e, t) {
                        if (!this.options.get("disabled")) {
                            var i = this.$selection.find(".select2-selection__clear");
                            if (0 !== i.length) {
                                t.stopPropagation();
                                var o = n.GetData(i[0], "data"), r = this.$element.val();
                                this.$element.val(this.placeholder.id);
                                var s = {data: o};
                                if (this.trigger("clear", s), s.prevented) return void this.$element.val(r);
                                for (var a = 0; a < o.length; a++) if (s = {data: o[a]}, this.trigger("unselect", s), s.prevented) return void this.$element.val(r);
                                this.$element.trigger("change"), this.trigger("toggle", {})
                            }
                        }
                    }, i.prototype._handleKeyboardClear = function (e, n, i) {
                        i.isOpen() || n.which != t.DELETE && n.which != t.BACKSPACE || this._handleClear(n)
                    }, i.prototype.update = function (t, i) {
                        if (t.call(this, i), !(this.$selection.find(".select2-selection__placeholder").length > 0 || 0 === i.length)) {
                            var o = e('<span class="select2-selection__clear">&times;</span>');
                            n.StoreData(o[0], "data", i), this.$selection.find(".select2-selection__rendered").prepend(o)
                        }
                    }, i
                }), t.define("select2/selection/search", ["jquery", "../utils", "../keys"], function (e, t, n) {
                    function i(e, t, n) {
                        e.call(this, t, n)
                    }

                    return i.prototype.render = function (t) {
                        var n = e('<li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" /></li>');
                        this.$searchContainer = n, this.$search = n.find("input");
                        var i = t.call(this);
                        return this._transferTabIndex(), i
                    }, i.prototype.bind = function (e, i, o) {
                        var r = this;
                        e.call(this, i, o), i.on("open", function () {
                            r.$search.trigger("focus")
                        }), i.on("close", function () {
                            r.$search.val(""), r.$search.removeAttr("aria-activedescendant"), r.$search.trigger("focus")
                        }), i.on("enable", function () {
                            r.$search.prop("disabled", !1), r._transferTabIndex()
                        }), i.on("disable", function () {
                            r.$search.prop("disabled", !0)
                        }), i.on("focus", function (e) {
                            r.$search.trigger("focus")
                        }), i.on("results:focus", function (e) {
                            r.$search.attr("aria-activedescendant", e.id)
                        }), this.$selection.on("focusin", ".select2-search--inline", function (e) {
                            r.trigger("focus", e)
                        }), this.$selection.on("focusout", ".select2-search--inline", function (e) {
                            r._handleBlur(e)
                        }), this.$selection.on("keydown", ".select2-search--inline", function (e) {
                            e.stopPropagation(), r.trigger("keypress", e), r._keyUpPrevented = e.isDefaultPrevented();
                            var i = e.which;
                            if (i === n.BACKSPACE && "" === r.$search.val()) {
                                var o = r.$searchContainer.prev(".select2-selection__choice");
                                if (o.length > 0) {
                                    var s = t.GetData(o[0], "data");
                                    r.searchRemoveChoice(s), e.preventDefault()
                                }
                            }
                        });
                        var s = document.documentMode, a = s && s <= 11;
                        this.$selection.on("input.searchcheck", ".select2-search--inline", function (e) {
                            return a ? void r.$selection.off("input.search input.searchcheck") : void r.$selection.off("keyup.search")
                        }), this.$selection.on("keyup.search input.search", ".select2-search--inline", function (e) {
                            if (a && "input" === e.type) return void r.$selection.off("input.search input.searchcheck");
                            var t = e.which;
                            t != n.SHIFT && t != n.CTRL && t != n.ALT && t != n.TAB && r.handleSearch(e)
                        })
                    }, i.prototype._transferTabIndex = function (e) {
                        this.$search.attr("tabindex", this.$selection.attr("tabindex")), this.$selection.attr("tabindex", "-1")
                    }, i.prototype.createPlaceholder = function (e, t) {
                        this.$search.attr("placeholder", t.text)
                    }, i.prototype.update = function (e, t) {
                        var n = this.$search[0] == document.activeElement;
                        if (this.$search.attr("placeholder", ""), e.call(this, t), this.$selection.find(".select2-selection__rendered").append(this.$searchContainer), this.resizeSearch(), n) {
                            var i = this.$element.find("[data-select2-tag]").length;
                            i ? this.$element.focus() : this.$search.focus()
                        }
                    }, i.prototype.handleSearch = function () {
                        if (this.resizeSearch(), !this._keyUpPrevented) {
                            var e = this.$search.val();
                            this.trigger("query", {term: e})
                        }
                        this._keyUpPrevented = !1
                    }, i.prototype.searchRemoveChoice = function (e, t) {
                        this.trigger("unselect", {data: t}), this.$search.val(t.text), this.handleSearch()
                    }, i.prototype.resizeSearch = function () {
                        this.$search.css("width", "25px");
                        var e = "";
                        if ("" !== this.$search.attr("placeholder")) e = this.$selection.find(".select2-selection__rendered").innerWidth(); else {
                            var t = this.$search.val().length + 1;
                            e = .75 * t + "em"
                        }
                        this.$search.css("width", e)
                    }, i
                }), t.define("select2/selection/eventRelay", ["jquery"], function (e) {
                    function t() {
                    }

                    return t.prototype.bind = function (t, n, i) {
                        var o = this,
                            r = ["open", "opening", "close", "closing", "select", "selecting", "unselect", "unselecting", "clear", "clearing"],
                            s = ["opening", "closing", "selecting", "unselecting", "clearing"];
                        t.call(this, n, i), n.on("*", function (t, n) {
                            if (e.inArray(t, r) !== -1) {
                                n = n || {};
                                var i = e.Event("select2:" + t, {params: n});
                                o.$element.trigger(i), e.inArray(t, s) !== -1 && (n.prevented = i.isDefaultPrevented())
                            }
                        })
                    }, t
                }), t.define("select2/translation", ["jquery", "require"], function (e, t) {
                    function n(e) {
                        this.dict = e || {}
                    }

                    return n.prototype.all = function () {
                        return this.dict
                    }, n.prototype.get = function (e) {
                        return this.dict[e]
                    }, n.prototype.extend = function (t) {
                        this.dict = e.extend({}, t.all(), this.dict)
                    }, n._cache = {}, n.loadPath = function (e) {
                        if (!(e in n._cache)) {
                            var i = t(e);
                            n._cache[e] = i
                        }
                        return new n(n._cache[e])
                    }, n
                }), t.define("select2/diacritics", [], function () {
                    var e = {
                        "Ⓐ": "A",
                        "Ａ": "A",
                        "À": "A",
                        "Á": "A",
                        "Â": "A",
                        "Ầ": "A",
                        "Ấ": "A",
                        "Ẫ": "A",
                        "Ẩ": "A",
                        "Ã": "A",
                        "Ā": "A",
                        "Ă": "A",
                        "Ằ": "A",
                        "Ắ": "A",
                        "Ẵ": "A",
                        "Ẳ": "A",
                        "Ȧ": "A",
                        "Ǡ": "A",
                        "Ä": "A",
                        "Ǟ": "A",
                        "Ả": "A",
                        "Å": "A",
                        "Ǻ": "A",
                        "Ǎ": "A",
                        "Ȁ": "A",
                        "Ȃ": "A",
                        "Ạ": "A",
                        "Ậ": "A",
                        "Ặ": "A",
                        "Ḁ": "A",
                        "Ą": "A",
                        "Ⱥ": "A",
                        "Ɐ": "A",
                        "Ꜳ": "AA",
                        "Æ": "AE",
                        "Ǽ": "AE",
                        "Ǣ": "AE",
                        "Ꜵ": "AO",
                        "Ꜷ": "AU",
                        "Ꜹ": "AV",
                        "Ꜻ": "AV",
                        "Ꜽ": "AY",
                        "Ⓑ": "B",
                        "Ｂ": "B",
                        "Ḃ": "B",
                        "Ḅ": "B",
                        "Ḇ": "B",
                        "Ƀ": "B",
                        "Ƃ": "B",
                        "Ɓ": "B",
                        "Ⓒ": "C",
                        "Ｃ": "C",
                        "Ć": "C",
                        "Ĉ": "C",
                        "Ċ": "C",
                        "Č": "C",
                        "Ç": "C",
                        "Ḉ": "C",
                        "Ƈ": "C",
                        "Ȼ": "C",
                        "Ꜿ": "C",
                        "Ⓓ": "D",
                        "Ｄ": "D",
                        "Ḋ": "D",
                        "Ď": "D",
                        "Ḍ": "D",
                        "Ḑ": "D",
                        "Ḓ": "D",
                        "Ḏ": "D",
                        "Đ": "D",
                        "Ƌ": "D",
                        "Ɗ": "D",
                        "Ɖ": "D",
                        "Ꝺ": "D",
                        "Ǳ": "DZ",
                        "Ǆ": "DZ",
                        "ǲ": "Dz",
                        "ǅ": "Dz",
                        "Ⓔ": "E",
                        "Ｅ": "E",
                        "È": "E",
                        "É": "E",
                        "Ê": "E",
                        "Ề": "E",
                        "Ế": "E",
                        "Ễ": "E",
                        "Ể": "E",
                        "Ẽ": "E",
                        "Ē": "E",
                        "Ḕ": "E",
                        "Ḗ": "E",
                        "Ĕ": "E",
                        "Ė": "E",
                        "Ë": "E",
                        "Ẻ": "E",
                        "Ě": "E",
                        "Ȅ": "E",
                        "Ȇ": "E",
                        "Ẹ": "E",
                        "Ệ": "E",
                        "Ȩ": "E",
                        "Ḝ": "E",
                        "Ę": "E",
                        "Ḙ": "E",
                        "Ḛ": "E",
                        "Ɛ": "E",
                        "Ǝ": "E",
                        "Ⓕ": "F",
                        "Ｆ": "F",
                        "Ḟ": "F",
                        "Ƒ": "F",
                        "Ꝼ": "F",
                        "Ⓖ": "G",
                        "Ｇ": "G",
                        "Ǵ": "G",
                        "Ĝ": "G",
                        "Ḡ": "G",
                        "Ğ": "G",
                        "Ġ": "G",
                        "Ǧ": "G",
                        "Ģ": "G",
                        "Ǥ": "G",
                        "Ɠ": "G",
                        "Ꞡ": "G",
                        "Ᵹ": "G",
                        "Ꝿ": "G",
                        "Ⓗ": "H",
                        "Ｈ": "H",
                        "Ĥ": "H",
                        "Ḣ": "H",
                        "Ḧ": "H",
                        "Ȟ": "H",
                        "Ḥ": "H",
                        "Ḩ": "H",
                        "Ḫ": "H",
                        "Ħ": "H",
                        "Ⱨ": "H",
                        "Ⱶ": "H",
                        "Ɥ": "H",
                        "Ⓘ": "I",
                        "Ｉ": "I",
                        "Ì": "I",
                        "Í": "I",
                        "Î": "I",
                        "Ĩ": "I",
                        "Ī": "I",
                        "Ĭ": "I",
                        "İ": "I",
                        "Ï": "I",
                        "Ḯ": "I",
                        "Ỉ": "I",
                        "Ǐ": "I",
                        "Ȉ": "I",
                        "Ȋ": "I",
                        "Ị": "I",
                        "Į": "I",
                        "Ḭ": "I",
                        "Ɨ": "I",
                        "Ⓙ": "J",
                        "Ｊ": "J",
                        "Ĵ": "J",
                        "Ɉ": "J",
                        "Ⓚ": "K",
                        "Ｋ": "K",
                        "Ḱ": "K",
                        "Ǩ": "K",
                        "Ḳ": "K",
                        "Ķ": "K",
                        "Ḵ": "K",
                        "Ƙ": "K",
                        "Ⱪ": "K",
                        "Ꝁ": "K",
                        "Ꝃ": "K",
                        "Ꝅ": "K",
                        "Ꞣ": "K",
                        "Ⓛ": "L",
                        "Ｌ": "L",
                        "Ŀ": "L",
                        "Ĺ": "L",
                        "Ľ": "L",
                        "Ḷ": "L",
                        "Ḹ": "L",
                        "Ļ": "L",
                        "Ḽ": "L",
                        "Ḻ": "L",
                        "Ł": "L",
                        "Ƚ": "L",
                        "Ɫ": "L",
                        "Ⱡ": "L",
                        "Ꝉ": "L",
                        "Ꝇ": "L",
                        "Ꞁ": "L",
                        "Ǉ": "LJ",
                        "ǈ": "Lj",
                        "Ⓜ": "M",
                        "Ｍ": "M",
                        "Ḿ": "M",
                        "Ṁ": "M",
                        "Ṃ": "M",
                        "Ɱ": "M",
                        "Ɯ": "M",
                        "Ⓝ": "N",
                        "Ｎ": "N",
                        "Ǹ": "N",
                        "Ń": "N",
                        "Ñ": "N",
                        "Ṅ": "N",
                        "Ň": "N",
                        "Ṇ": "N",
                        "Ņ": "N",
                        "Ṋ": "N",
                        "Ṉ": "N",
                        "Ƞ": "N",
                        "Ɲ": "N",
                        "Ꞑ": "N",
                        "Ꞥ": "N",
                        "Ǌ": "NJ",
                        "ǋ": "Nj",
                        "Ⓞ": "O",
                        "Ｏ": "O",
                        "Ò": "O",
                        "Ó": "O",
                        "Ô": "O",
                        "Ồ": "O",
                        "Ố": "O",
                        "Ỗ": "O",
                        "Ổ": "O",
                        "Õ": "O",
                        "Ṍ": "O",
                        "Ȭ": "O",
                        "Ṏ": "O",
                        "Ō": "O",
                        "Ṑ": "O",
                        "Ṓ": "O",
                        "Ŏ": "O",
                        "Ȯ": "O",
                        "Ȱ": "O",
                        "Ö": "O",
                        "Ȫ": "O",
                        "Ỏ": "O",
                        "Ő": "O",
                        "Ǒ": "O",
                        "Ȍ": "O",
                        "Ȏ": "O",
                        "Ơ": "O",
                        "Ờ": "O",
                        "Ớ": "O",
                        "Ỡ": "O",
                        "Ở": "O",
                        "Ợ": "O",
                        "Ọ": "O",
                        "Ộ": "O",
                        "Ǫ": "O",
                        "Ǭ": "O",
                        "Ø": "O",
                        "Ǿ": "O",
                        "Ɔ": "O",
                        "Ɵ": "O",
                        "Ꝋ": "O",
                        "Ꝍ": "O",
                        "Ƣ": "OI",
                        "Ꝏ": "OO",
                        "Ȣ": "OU",
                        "Ⓟ": "P",
                        "Ｐ": "P",
                        "Ṕ": "P",
                        "Ṗ": "P",
                        "Ƥ": "P",
                        "Ᵽ": "P",
                        "Ꝑ": "P",
                        "Ꝓ": "P",
                        "Ꝕ": "P",
                        "Ⓠ": "Q",
                        "Ｑ": "Q",
                        "Ꝗ": "Q",
                        "Ꝙ": "Q",
                        "Ɋ": "Q",
                        "Ⓡ": "R",
                        "Ｒ": "R",
                        "Ŕ": "R",
                        "Ṙ": "R",
                        "Ř": "R",
                        "Ȑ": "R",
                        "Ȓ": "R",
                        "Ṛ": "R",
                        "Ṝ": "R",
                        "Ŗ": "R",
                        "Ṟ": "R",
                        "Ɍ": "R",
                        "Ɽ": "R",
                        "Ꝛ": "R",
                        "Ꞧ": "R",
                        "Ꞃ": "R",
                        "Ⓢ": "S",
                        "Ｓ": "S",
                        "ẞ": "S",
                        "Ś": "S",
                        "Ṥ": "S",
                        "Ŝ": "S",
                        "Ṡ": "S",
                        "Š": "S",
                        "Ṧ": "S",
                        "Ṣ": "S",
                        "Ṩ": "S",
                        "Ș": "S",
                        "Ş": "S",
                        "Ȿ": "S",
                        "Ꞩ": "S",
                        "Ꞅ": "S",
                        "Ⓣ": "T",
                        "Ｔ": "T",
                        "Ṫ": "T",
                        "Ť": "T",
                        "Ṭ": "T",
                        "Ț": "T",
                        "Ţ": "T",
                        "Ṱ": "T",
                        "Ṯ": "T",
                        "Ŧ": "T",
                        "Ƭ": "T",
                        "Ʈ": "T",
                        "Ⱦ": "T",
                        "Ꞇ": "T",
                        "Ꜩ": "TZ",
                        "Ⓤ": "U",
                        "Ｕ": "U",
                        "Ù": "U",
                        "Ú": "U",
                        "Û": "U",
                        "Ũ": "U",
                        "Ṹ": "U",
                        "Ū": "U",
                        "Ṻ": "U",
                        "Ŭ": "U",
                        "Ü": "U",
                        "Ǜ": "U",
                        "Ǘ": "U",
                        "Ǖ": "U",
                        "Ǚ": "U",
                        "Ủ": "U",
                        "Ů": "U",
                        "Ű": "U",
                        "Ǔ": "U",
                        "Ȕ": "U",
                        "Ȗ": "U",
                        "Ư": "U",
                        "Ừ": "U",
                        "Ứ": "U",
                        "Ữ": "U",
                        "Ử": "U",
                        "Ự": "U",
                        "Ụ": "U",
                        "Ṳ": "U",
                        "Ų": "U",
                        "Ṷ": "U",
                        "Ṵ": "U",
                        "Ʉ": "U",
                        "Ⓥ": "V",
                        "Ｖ": "V",
                        "Ṽ": "V",
                        "Ṿ": "V",
                        "Ʋ": "V",
                        "Ꝟ": "V",
                        "Ʌ": "V",
                        "Ꝡ": "VY",
                        "Ⓦ": "W",
                        "Ｗ": "W",
                        "Ẁ": "W",
                        "Ẃ": "W",
                        "Ŵ": "W",
                        "Ẇ": "W",
                        "Ẅ": "W",
                        "Ẉ": "W",
                        "Ⱳ": "W",
                        "Ⓧ": "X",
                        "Ｘ": "X",
                        "Ẋ": "X",
                        "Ẍ": "X",
                        "Ⓨ": "Y",
                        "Ｙ": "Y",
                        "Ỳ": "Y",
                        "Ý": "Y",
                        "Ŷ": "Y",
                        "Ỹ": "Y",
                        "Ȳ": "Y",
                        "Ẏ": "Y",
                        "Ÿ": "Y",
                        "Ỷ": "Y",
                        "Ỵ": "Y",
                        "Ƴ": "Y",
                        "Ɏ": "Y",
                        "Ỿ": "Y",
                        "Ⓩ": "Z",
                        "Ｚ": "Z",
                        "Ź": "Z",
                        "Ẑ": "Z",
                        "Ż": "Z",
                        "Ž": "Z",
                        "Ẓ": "Z",
                        "Ẕ": "Z",
                        "Ƶ": "Z",
                        "Ȥ": "Z",
                        "Ɀ": "Z",
                        "Ⱬ": "Z",
                        "Ꝣ": "Z",
                        "ⓐ": "a",
                        "ａ": "a",
                        "ẚ": "a",
                        "à": "a",
                        "á": "a",
                        "â": "a",
                        "ầ": "a",
                        "ấ": "a",
                        "ẫ": "a",
                        "ẩ": "a",
                        "ã": "a",
                        "ā": "a",
                        "ă": "a",
                        "ằ": "a",
                        "ắ": "a",
                        "ẵ": "a",
                        "ẳ": "a",
                        "ȧ": "a",
                        "ǡ": "a",
                        "ä": "a",
                        "ǟ": "a",
                        "ả": "a",
                        "å": "a",
                        "ǻ": "a",
                        "ǎ": "a",
                        "ȁ": "a",
                        "ȃ": "a",
                        "ạ": "a",
                        "ậ": "a",
                        "ặ": "a",
                        "ḁ": "a",
                        "ą": "a",
                        "ⱥ": "a",
                        "ɐ": "a",
                        "ꜳ": "aa",
                        "æ": "ae",
                        "ǽ": "ae",
                        "ǣ": "ae",
                        "ꜵ": "ao",
                        "ꜷ": "au",
                        "ꜹ": "av",
                        "ꜻ": "av",
                        "ꜽ": "ay",
                        "ⓑ": "b",
                        "ｂ": "b",
                        "ḃ": "b",
                        "ḅ": "b",
                        "ḇ": "b",
                        "ƀ": "b",
                        "ƃ": "b",
                        "ɓ": "b",
                        "ⓒ": "c",
                        "ｃ": "c",
                        "ć": "c",
                        "ĉ": "c",
                        "ċ": "c",
                        "č": "c",
                        "ç": "c",
                        "ḉ": "c",
                        "ƈ": "c",
                        "ȼ": "c",
                        "ꜿ": "c",
                        "ↄ": "c",
                        "ⓓ": "d",
                        "ｄ": "d",
                        "ḋ": "d",
                        "ď": "d",
                        "ḍ": "d",
                        "ḑ": "d",
                        "ḓ": "d",
                        "ḏ": "d",
                        "đ": "d",
                        "ƌ": "d",
                        "ɖ": "d",
                        "ɗ": "d",
                        "ꝺ": "d",
                        "ǳ": "dz",
                        "ǆ": "dz",
                        "ⓔ": "e",
                        "ｅ": "e",
                        "è": "e",
                        "é": "e",
                        "ê": "e",
                        "ề": "e",
                        "ế": "e",
                        "ễ": "e",
                        "ể": "e",
                        "ẽ": "e",
                        "ē": "e",
                        "ḕ": "e",
                        "ḗ": "e",
                        "ĕ": "e",
                        "ė": "e",
                        "ë": "e",
                        "ẻ": "e",
                        "ě": "e",
                        "ȅ": "e",
                        "ȇ": "e",
                        "ẹ": "e",
                        "ệ": "e",
                        "ȩ": "e",
                        "ḝ": "e",
                        "ę": "e",
                        "ḙ": "e",
                        "ḛ": "e",
                        "ɇ": "e",
                        "ɛ": "e",
                        "ǝ": "e",
                        "ⓕ": "f",
                        "ｆ": "f",
                        "ḟ": "f",
                        "ƒ": "f",
                        "ꝼ": "f",
                        "ⓖ": "g",
                        "ｇ": "g",
                        "ǵ": "g",
                        "ĝ": "g",
                        "ḡ": "g",
                        "ğ": "g",
                        "ġ": "g",
                        "ǧ": "g",
                        "ģ": "g",
                        "ǥ": "g",
                        "ɠ": "g",
                        "ꞡ": "g",
                        "ᵹ": "g",
                        "ꝿ": "g",
                        "ⓗ": "h",
                        "ｈ": "h",
                        "ĥ": "h",
                        "ḣ": "h",
                        "ḧ": "h",
                        "ȟ": "h",
                        "ḥ": "h",
                        "ḩ": "h",
                        "ḫ": "h",
                        "ẖ": "h",
                        "ħ": "h",
                        "ⱨ": "h",
                        "ⱶ": "h",
                        "ɥ": "h",
                        "ƕ": "hv",
                        "ⓘ": "i",
                        "ｉ": "i",
                        "ì": "i",
                        "í": "i",
                        "î": "i",
                        "ĩ": "i",
                        "ī": "i",
                        "ĭ": "i",
                        "ï": "i",
                        "ḯ": "i",
                        "ỉ": "i",
                        "ǐ": "i",
                        "ȉ": "i",
                        "ȋ": "i",
                        "ị": "i",
                        "į": "i",
                        "ḭ": "i",
                        "ɨ": "i",
                        "ı": "i",
                        "ⓙ": "j",
                        "ｊ": "j",
                        "ĵ": "j",
                        "ǰ": "j",
                        "ɉ": "j",
                        "ⓚ": "k",
                        "ｋ": "k",
                        "ḱ": "k",
                        "ǩ": "k",
                        "ḳ": "k",
                        "ķ": "k",
                        "ḵ": "k",
                        "ƙ": "k",
                        "ⱪ": "k",
                        "ꝁ": "k",
                        "ꝃ": "k",
                        "ꝅ": "k",
                        "ꞣ": "k",
                        "ⓛ": "l",
                        "ｌ": "l",
                        "ŀ": "l",
                        "ĺ": "l",
                        "ľ": "l",
                        "ḷ": "l",
                        "ḹ": "l",
                        "ļ": "l",
                        "ḽ": "l",
                        "ḻ": "l",
                        "ſ": "l",
                        "ł": "l",
                        "ƚ": "l",
                        "ɫ": "l",
                        "ⱡ": "l",
                        "ꝉ": "l",
                        "ꞁ": "l",
                        "ꝇ": "l",
                        "ǉ": "lj",
                        "ⓜ": "m",
                        "ｍ": "m",
                        "ḿ": "m",
                        "ṁ": "m",
                        "ṃ": "m",
                        "ɱ": "m",
                        "ɯ": "m",
                        "ⓝ": "n",
                        "ｎ": "n",
                        "ǹ": "n",
                        "ń": "n",
                        "ñ": "n",
                        "ṅ": "n",
                        "ň": "n",
                        "ṇ": "n",
                        "ņ": "n",
                        "ṋ": "n",
                        "ṉ": "n",
                        "ƞ": "n",
                        "ɲ": "n",
                        "ŉ": "n",
                        "ꞑ": "n",
                        "ꞥ": "n",
                        "ǌ": "nj",
                        "ⓞ": "o",
                        "ｏ": "o",
                        "ò": "o",
                        "ó": "o",
                        "ô": "o",
                        "ồ": "o",
                        "ố": "o",
                        "ỗ": "o",
                        "ổ": "o",
                        "õ": "o",
                        "ṍ": "o",
                        "ȭ": "o",
                        "ṏ": "o",
                        "ō": "o",
                        "ṑ": "o",
                        "ṓ": "o",
                        "ŏ": "o",
                        "ȯ": "o",
                        "ȱ": "o",
                        "ö": "o",
                        "ȫ": "o",
                        "ỏ": "o",
                        "ő": "o",
                        "ǒ": "o",
                        "ȍ": "o",
                        "ȏ": "o",
                        "ơ": "o",
                        "ờ": "o",
                        "ớ": "o",
                        "ỡ": "o",
                        "ở": "o",
                        "ợ": "o",
                        "ọ": "o",
                        "ộ": "o",
                        "ǫ": "o",
                        "ǭ": "o",
                        "ø": "o",
                        "ǿ": "o",
                        "ɔ": "o",
                        "ꝋ": "o",
                        "ꝍ": "o",
                        "ɵ": "o",
                        "ƣ": "oi",
                        "ȣ": "ou",
                        "ꝏ": "oo",
                        "ⓟ": "p",
                        "ｐ": "p",
                        "ṕ": "p",
                        "ṗ": "p",
                        "ƥ": "p",
                        "ᵽ": "p",
                        "ꝑ": "p",
                        "ꝓ": "p",
                        "ꝕ": "p",
                        "ⓠ": "q",
                        "ｑ": "q",
                        "ɋ": "q",
                        "ꝗ": "q",
                        "ꝙ": "q",
                        "ⓡ": "r",
                        "ｒ": "r",
                        "ŕ": "r",
                        "ṙ": "r",
                        "ř": "r",
                        "ȑ": "r",
                        "ȓ": "r",
                        "ṛ": "r",
                        "ṝ": "r",
                        "ŗ": "r",
                        "ṟ": "r",
                        "ɍ": "r",
                        "ɽ": "r",
                        "ꝛ": "r",
                        "ꞧ": "r",
                        "ꞃ": "r",
                        "ⓢ": "s",
                        "ｓ": "s",
                        "ß": "s",
                        "ś": "s",
                        "ṥ": "s",
                        "ŝ": "s",
                        "ṡ": "s",
                        "š": "s",
                        "ṧ": "s",
                        "ṣ": "s",
                        "ṩ": "s",
                        "ș": "s",
                        "ş": "s",
                        "ȿ": "s",
                        "ꞩ": "s",
                        "ꞅ": "s",
                        "ẛ": "s",
                        "ⓣ": "t",
                        "ｔ": "t",
                        "ṫ": "t",
                        "ẗ": "t",
                        "ť": "t",
                        "ṭ": "t",
                        "ț": "t",
                        "ţ": "t",
                        "ṱ": "t",
                        "ṯ": "t",
                        "ŧ": "t",
                        "ƭ": "t",
                        "ʈ": "t",
                        "ⱦ": "t",
                        "ꞇ": "t",
                        "ꜩ": "tz",
                        "ⓤ": "u",
                        "ｕ": "u",
                        "ù": "u",
                        "ú": "u",
                        "û": "u",
                        "ũ": "u",
                        "ṹ": "u",
                        "ū": "u",
                        "ṻ": "u",
                        "ŭ": "u",
                        "ü": "u",
                        "ǜ": "u",
                        "ǘ": "u",
                        "ǖ": "u",
                        "ǚ": "u",
                        "ủ": "u",
                        "ů": "u",
                        "ű": "u",
                        "ǔ": "u",
                        "ȕ": "u",
                        "ȗ": "u",
                        "ư": "u",
                        "ừ": "u",
                        "ứ": "u",
                        "ữ": "u",
                        "ử": "u",
                        "ự": "u",
                        "ụ": "u",
                        "ṳ": "u",
                        "ų": "u",
                        "ṷ": "u",
                        "ṵ": "u",
                        "ʉ": "u",
                        "ⓥ": "v",
                        "ｖ": "v",
                        "ṽ": "v",
                        "ṿ": "v",
                        "ʋ": "v",
                        "ꝟ": "v",
                        "ʌ": "v",
                        "ꝡ": "vy",
                        "ⓦ": "w",
                        "ｗ": "w",
                        "ẁ": "w",
                        "ẃ": "w",
                        "ŵ": "w",
                        "ẇ": "w",
                        "ẅ": "w",
                        "ẘ": "w",
                        "ẉ": "w",
                        "ⱳ": "w",
                        "ⓧ": "x",
                        "ｘ": "x",
                        "ẋ": "x",
                        "ẍ": "x",
                        "ⓨ": "y",
                        "ｙ": "y",
                        "ỳ": "y",
                        "ý": "y",
                        "ŷ": "y",
                        "ỹ": "y",
                        "ȳ": "y",
                        "ẏ": "y",
                        "ÿ": "y",
                        "ỷ": "y",
                        "ẙ": "y",
                        "ỵ": "y",
                        "ƴ": "y",
                        "ɏ": "y",
                        "ỿ": "y",
                        "ⓩ": "z",
                        "ｚ": "z",
                        "ź": "z",
                        "ẑ": "z",
                        "ż": "z",
                        "ž": "z",
                        "ẓ": "z",
                        "ẕ": "z",
                        "ƶ": "z",
                        "ȥ": "z",
                        "ɀ": "z",
                        "ⱬ": "z",
                        "ꝣ": "z",
                        "Ά": "Α",
                        "Έ": "Ε",
                        "Ή": "Η",
                        "Ί": "Ι",
                        "Ϊ": "Ι",
                        "Ό": "Ο",
                        "Ύ": "Υ",
                        "Ϋ": "Υ",
                        "Ώ": "Ω",
                        "ά": "α",
                        "έ": "ε",
                        "ή": "η",
                        "ί": "ι",
                        "ϊ": "ι",
                        "ΐ": "ι",
                        "ό": "ο",
                        "ύ": "υ",
                        "ϋ": "υ",
                        "ΰ": "υ",
                        "ω": "ω",
                        "ς": "σ"
                    };
                    return e
                }), t.define("select2/data/base", ["../utils"], function (e) {
                    function t(e, n) {
                        t.__super__.constructor.call(this)
                    }

                    return e.Extend(t, e.Observable), t.prototype.current = function (e) {
                        throw new Error("The `current` method must be defined in child classes.")
                    }, t.prototype.query = function (e, t) {
                        throw new Error("The `query` method must be defined in child classes.")
                    }, t.prototype.bind = function (e, t) {
                    }, t.prototype.destroy = function () {
                    }, t.prototype.generateResultId = function (t, n) {
                        var i = t.id + "-result-";
                        return i += e.generateChars(4), i += null != n.id ? "-" + n.id.toString() : "-" + e.generateChars(4)
                    }, t
                }), t.define("select2/data/select", ["./base", "../utils", "jquery"], function (e, t, n) {
                    function i(e, t) {
                        this.$element = e, this.options = t, i.__super__.constructor.call(this)
                    }

                    return t.Extend(i, e), i.prototype.current = function (e) {
                        var t = [], i = this;
                        this.$element.find(":selected").each(function () {
                            var e = n(this), o = i.item(e);
                            t.push(o)
                        }), e(t)
                    }, i.prototype.select = function (e) {
                        var t = this;
                        if (e.selected = !0, n(e.element).is("option")) return e.element.selected = !0, void this.$element.trigger("change");
                        if (this.$element.prop("multiple")) this.current(function (i) {
                            var o = [];
                            e = [e], e.push.apply(e, i);
                            for (var r = 0; r < e.length; r++) {
                                var s = e[r].id;
                                n.inArray(s, o) === -1 && o.push(s)
                            }
                            t.$element.val(o), t.$element.trigger("change")
                        }); else {
                            var i = e.id;
                            this.$element.val(i), this.$element.trigger("change")
                        }
                    }, i.prototype.unselect = function (e) {
                        var t = this;
                        if (this.$element.prop("multiple")) return e.selected = !1, n(e.element).is("option") ? (e.element.selected = !1, void this.$element.trigger("change")) : void this.current(function (i) {
                            for (var o = [], r = 0; r < i.length; r++) {
                                var s = i[r].id;
                                s !== e.id && n.inArray(s, o) === -1 && o.push(s)
                            }
                            t.$element.val(o), t.$element.trigger("change")
                        })
                    }, i.prototype.bind = function (e, t) {
                        var n = this;
                        this.container = e, e.on("select", function (e) {
                            n.select(e.data)
                        }), e.on("unselect", function (e) {
                            n.unselect(e.data)
                        })
                    }, i.prototype.destroy = function () {
                        this.$element.find("*").each(function () {
                            t.RemoveData(this)
                        })
                    }, i.prototype.query = function (e, t) {
                        var i = [], o = this, r = this.$element.children();
                        r.each(function () {
                            var t = n(this);
                            if (t.is("option") || t.is("optgroup")) {
                                var r = o.item(t), s = o.matches(e, r);
                                null !== s && i.push(s)
                            }
                        }), t({results: i})
                    }, i.prototype.addOptions = function (e) {
                        t.appendMany(this.$element, e)
                    }, i.prototype.option = function (e) {
                        var i;
                        e.children ? (i = document.createElement("optgroup"), i.label = e.text) : (i = document.createElement("option"), void 0 !== i.textContent ? i.textContent = e.text : i.innerText = e.text), void 0 !== e.id && (i.value = e.id), e.disabled && (i.disabled = !0), e.selected && (i.selected = !0), e.title && (i.title = e.title);
                        var o = n(i), r = this._normalizeItem(e);
                        return r.element = i, t.StoreData(i, "data", r), o
                    }, i.prototype.item = function (e) {
                        var i = {};
                        if (i = t.GetData(e[0], "data"), null != i) return i;
                        if (e.is("option")) i = {
                            id: e.val(),
                            text: e.text(),
                            disabled: e.prop("disabled"),
                            selected: e.prop("selected"),
                            title: e.prop("title")
                        }; else if (e.is("optgroup")) {
                            i = {text: e.prop("label"), children: [], title: e.prop("title")};
                            for (var o = e.children("option"), r = [], s = 0; s < o.length; s++) {
                                var a = n(o[s]), l = this.item(a);
                                r.push(l)
                            }
                            i.children = r
                        }
                        return i = this._normalizeItem(i), i.element = e[0], t.StoreData(e[0], "data", i), i
                    }, i.prototype._normalizeItem = function (e) {
                        e !== Object(e) && (e = {id: e, text: e}), e = n.extend({}, {text: ""}, e);
                        var t = {selected: !1, disabled: !1};
                        return null != e.id && (e.id = e.id.toString()), null != e.text && (e.text = e.text.toString()), null == e._resultId && e.id && null != this.container && (e._resultId = this.generateResultId(this.container, e)), n.extend({}, t, e)
                    }, i.prototype.matches = function (e, t) {
                        var n = this.options.get("matcher");
                        return n(e, t)
                    }, i
                }), t.define("select2/data/array", ["./select", "../utils", "jquery"], function (e, t, n) {
                    function i(e, t) {
                        var n = t.get("data") || [];
                        i.__super__.constructor.call(this, e, t),
                            this.addOptions(this.convertToOptions(n))
                    }

                    return t.Extend(i, e), i.prototype.select = function (e) {
                        var t = this.$element.find("option").filter(function (t, n) {
                            return n.value == e.id.toString()
                        });
                        0 === t.length && (t = this.option(e), this.addOptions(t)), i.__super__.select.call(this, e)
                    }, i.prototype.convertToOptions = function (e) {
                        function i(e) {
                            return function () {
                                return n(this).val() == e.id
                            }
                        }

                        for (var o = this, r = this.$element.find("option"), s = r.map(function () {
                            return o.item(n(this)).id
                        }).get(), a = [], l = 0; l < e.length; l++) {
                            var c = this._normalizeItem(e[l]);
                            if (n.inArray(c.id, s) >= 0) {
                                var u = r.filter(i(c)), d = this.item(u), p = n.extend(!0, {}, c, d),
                                    f = this.option(p);
                                u.replaceWith(f)
                            } else {
                                var h = this.option(c);
                                if (c.children) {
                                    var m = this.convertToOptions(c.children);
                                    t.appendMany(h, m)
                                }
                                a.push(h)
                            }
                        }
                        return a
                    }, i
                }), t.define("select2/data/ajax", ["./array", "../utils", "jquery"], function (e, t, n) {
                    function i(e, t) {
                        this.ajaxOptions = this._applyDefaults(t.get("ajax")), null != this.ajaxOptions.processResults && (this.processResults = this.ajaxOptions.processResults), i.__super__.constructor.call(this, e, t)
                    }

                    return t.Extend(i, e), i.prototype._applyDefaults = function (e) {
                        var t = {
                            data: function (e) {
                                return n.extend({}, e, {q: e.term})
                            }, transport: function (e, t, i) {
                                var o = n.ajax(e);
                                return o.then(t), o.fail(i), o
                            }
                        };
                        return n.extend({}, t, e, !0)
                    }, i.prototype.processResults = function (e) {
                        return e
                    }, i.prototype.query = function (e, t) {
                        function i() {
                            var i = r.transport(r, function (i) {
                                var r = o.processResults(i, e);
                                o.options.get("debug") && window.console && console.error && (r && r.results && n.isArray(r.results) || console.error("Select2: The AJAX results did not return an array in the `results` key of the response.")), t(r)
                            }, function () {
                                "status" in i && (0 === i.status || "0" === i.status) || o.trigger("results:message", {message: "errorLoading"})
                            });
                            o._request = i
                        }

                        var o = this;
                        null != this._request && (n.isFunction(this._request.abort) && this._request.abort(), this._request = null);
                        var r = n.extend({type: "GET"}, this.ajaxOptions);
                        "function" == typeof r.url && (r.url = r.url.call(this.$element, e)), "function" == typeof r.data && (r.data = r.data.call(this.$element, e)), this.ajaxOptions.delay && null != e.term ? (this._queryTimeout && window.clearTimeout(this._queryTimeout), this._queryTimeout = window.setTimeout(i, this.ajaxOptions.delay)) : i()
                    }, i
                }), t.define("select2/data/tags", ["jquery"], function (e) {
                    function t(t, n, i) {
                        var o = i.get("tags"), r = i.get("createTag");
                        void 0 !== r && (this.createTag = r);
                        var s = i.get("insertTag");
                        if (void 0 !== s && (this.insertTag = s), t.call(this, n, i), e.isArray(o)) for (var a = 0; a < o.length; a++) {
                            var l = o[a], c = this._normalizeItem(l), u = this.option(c);
                            this.$element.append(u)
                        }
                    }

                    return t.prototype.query = function (e, t, n) {
                        function i(e, r) {
                            for (var s = e.results, a = 0; a < s.length; a++) {
                                var l = s[a], c = null != l.children && !i({results: l.children}, !0),
                                    u = (l.text || "").toUpperCase(), d = (t.term || "").toUpperCase(), p = u === d;
                                if (p || c) return !r && (e.data = s, void n(e))
                            }
                            if (r) return !0;
                            var f = o.createTag(t);
                            if (null != f) {
                                var h = o.option(f);
                                h.attr("data-select2-tag", !0), o.addOptions([h]), o.insertTag(s, f)
                            }
                            e.results = s, n(e)
                        }

                        var o = this;
                        return this._removeOldTags(), null == t.term || null != t.page ? void e.call(this, t, n) : void e.call(this, t, i)
                    }, t.prototype.createTag = function (t, n) {
                        var i = e.trim(n.term);
                        return "" === i ? null : {id: i, text: i}
                    }, t.prototype.insertTag = function (e, t, n) {
                        t.unshift(n)
                    }, t.prototype._removeOldTags = function (t) {
                        var n = (this._lastTag, this.$element.find("option[data-select2-tag]"));
                        n.each(function () {
                            this.selected || e(this).remove()
                        })
                    }, t
                }), t.define("select2/data/tokenizer", ["jquery"], function (e) {
                    function t(e, t, n) {
                        var i = n.get("tokenizer");
                        void 0 !== i && (this.tokenizer = i), e.call(this, t, n)
                    }

                    return t.prototype.bind = function (e, t, n) {
                        e.call(this, t, n), this.$search = t.dropdown.$search || t.selection.$search || n.find(".select2-search__field")
                    }, t.prototype.query = function (t, n, i) {
                        function o(t) {
                            var n = s._normalizeItem(t), i = s.$element.find("option").filter(function () {
                                return e(this).val() === n.id
                            });
                            if (!i.length) {
                                var o = s.option(n);
                                o.attr("data-select2-tag", !0), s._removeOldTags(), s.addOptions([o])
                            }
                            r(n)
                        }

                        function r(e) {
                            s.trigger("select", {data: e})
                        }

                        var s = this;
                        n.term = n.term || "";
                        var a = this.tokenizer(n, this.options, o);
                        a.term !== n.term && (this.$search.length && (this.$search.val(a.term), this.$search.focus()), n.term = a.term), t.call(this, n, i)
                    }, t.prototype.tokenizer = function (t, n, i, o) {
                        for (var r = i.get("tokenSeparators") || [], s = n.term, a = 0, l = this.createTag || function (e) {
                            return {id: e.term, text: e.term}
                        }; a < s.length;) {
                            var c = s[a];
                            if (e.inArray(c, r) !== -1) {
                                var u = s.substr(0, a), d = e.extend({}, n, {term: u}), p = l(d);
                                null != p ? (o(p), s = s.substr(a + 1) || "", a = 0) : a++
                            } else a++
                        }
                        return {term: s}
                    }, t
                }), t.define("select2/data/minimumInputLength", [], function () {
                    function e(e, t, n) {
                        this.minimumInputLength = n.get("minimumInputLength"), e.call(this, t, n)
                    }

                    return e.prototype.query = function (e, t, n) {
                        return t.term = t.term || "", t.term.length < this.minimumInputLength ? void this.trigger("results:message", {
                            message: "inputTooShort",
                            args: {minimum: this.minimumInputLength, input: t.term, params: t}
                        }) : void e.call(this, t, n)
                    }, e
                }), t.define("select2/data/maximumInputLength", [], function () {
                    function e(e, t, n) {
                        this.maximumInputLength = n.get("maximumInputLength"), e.call(this, t, n)
                    }

                    return e.prototype.query = function (e, t, n) {
                        return t.term = t.term || "", this.maximumInputLength > 0 && t.term.length > this.maximumInputLength ? void this.trigger("results:message", {
                            message: "inputTooLong",
                            args: {maximum: this.maximumInputLength, input: t.term, params: t}
                        }) : void e.call(this, t, n)
                    }, e
                }), t.define("select2/data/maximumSelectionLength", [], function () {
                    function e(e, t, n) {
                        this.maximumSelectionLength = n.get("maximumSelectionLength"), e.call(this, t, n)
                    }

                    return e.prototype.query = function (e, t, n) {
                        var i = this;
                        this.current(function (o) {
                            var r = null != o ? o.length : 0;
                            return i.maximumSelectionLength > 0 && r >= i.maximumSelectionLength ? void i.trigger("results:message", {
                                message: "maximumSelected",
                                args: {maximum: i.maximumSelectionLength}
                            }) : void e.call(i, t, n)
                        })
                    }, e
                }), t.define("select2/dropdown", ["jquery", "./utils"], function (e, t) {
                    function n(e, t) {
                        this.$element = e, this.options = t, n.__super__.constructor.call(this)
                    }

                    return t.Extend(n, t.Observable), n.prototype.render = function () {
                        var t = e('<span class="select2-dropdown"><span class="select2-results"></span></span>');
                        return t.attr("dir", this.options.get("dir")), this.$dropdown = t, t
                    }, n.prototype.bind = function () {
                    }, n.prototype.position = function (e, t) {
                    }, n.prototype.destroy = function () {
                        this.$dropdown.remove()
                    }, n
                }), t.define("select2/dropdown/search", ["jquery", "../utils"], function (e, t) {
                    function n() {
                    }

                    return n.prototype.render = function (t) {
                        var n = t.call(this),
                            i = e('<span class="select2-search select2-search--dropdown"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" /></span>');
                        return this.$searchContainer = i, this.$search = i.find("input"), n.prepend(i), n
                    }, n.prototype.bind = function (t, n, i) {
                        var o = this;
                        t.call(this, n, i), this.$search.on("keydown", function (e) {
                            o.trigger("keypress", e), o._keyUpPrevented = e.isDefaultPrevented()
                        }), this.$search.on("input", function (t) {
                            e(this).off("keyup")
                        }), this.$search.on("keyup input", function (e) {
                            o.handleSearch(e)
                        }), n.on("open", function () {
                            o.$search.attr("tabindex", 0), o.$search.focus(), window.setTimeout(function () {
                                o.$search.focus()
                            }, 0)
                        }), n.on("close", function () {
                            o.$search.attr("tabindex", -1), o.$search.val(""), o.$search.blur()
                        }), n.on("focus", function () {
                            n.isOpen() || o.$search.focus()
                        }), n.on("results:all", function (e) {
                            if (null == e.query.term || "" === e.query.term) {
                                var t = o.showSearch(e);
                                t ? o.$searchContainer.removeClass("select2-search--hide") : o.$searchContainer.addClass("select2-search--hide")
                            }
                        })
                    }, n.prototype.handleSearch = function (e) {
                        if (!this._keyUpPrevented) {
                            var t = this.$search.val();
                            this.trigger("query", {term: t})
                        }
                        this._keyUpPrevented = !1
                    }, n.prototype.showSearch = function (e, t) {
                        return !0
                    }, n
                }), t.define("select2/dropdown/hidePlaceholder", [], function () {
                    function e(e, t, n, i) {
                        this.placeholder = this.normalizePlaceholder(n.get("placeholder")), e.call(this, t, n, i)
                    }

                    return e.prototype.append = function (e, t) {
                        t.results = this.removePlaceholder(t.results), e.call(this, t)
                    }, e.prototype.normalizePlaceholder = function (e, t) {
                        return "string" == typeof t && (t = {id: "", text: t}), t
                    }, e.prototype.removePlaceholder = function (e, t) {
                        for (var n = t.slice(0), i = t.length - 1; i >= 0; i--) {
                            var o = t[i];
                            this.placeholder.id === o.id && n.splice(i, 1)
                        }
                        return n
                    }, e
                }), t.define("select2/dropdown/infiniteScroll", ["jquery"], function (e) {
                    function t(e, t, n, i) {
                        this.lastParams = {}, e.call(this, t, n, i), this.$loadingMore = this.createLoadingMore(), this.loading = !1
                    }

                    return t.prototype.append = function (e, t) {
                        this.$loadingMore.remove(), this.loading = !1, e.call(this, t), this.showLoadingMore(t) && this.$results.append(this.$loadingMore)
                    }, t.prototype.bind = function (t, n, i) {
                        var o = this;
                        t.call(this, n, i), n.on("query", function (e) {
                            o.lastParams = e, o.loading = !0
                        }), n.on("query:append", function (e) {
                            o.lastParams = e, o.loading = !0
                        }), this.$results.on("scroll", function () {
                            var t = e.contains(document.documentElement, o.$loadingMore[0]);
                            if (!o.loading && t) {
                                var n = o.$results.offset().top + o.$results.outerHeight(!1),
                                    i = o.$loadingMore.offset().top + o.$loadingMore.outerHeight(!1);
                                n + 50 >= i && o.loadMore()
                            }
                        })
                    }, t.prototype.loadMore = function () {
                        this.loading = !0;
                        var t = e.extend({}, {page: 1}, this.lastParams);
                        t.page++, this.trigger("query:append", t)
                    }, t.prototype.showLoadingMore = function (e, t) {
                        return t.pagination && t.pagination.more
                    }, t.prototype.createLoadingMore = function () {
                        var t = e('<li class="select2-results__option select2-results__option--load-more"role="treeitem" aria-disabled="true"></li>'),
                            n = this.options.get("translations").get("loadingMore");
                        return t.html(n(this.lastParams)), t
                    }, t
                }), t.define("select2/dropdown/attachBody", ["jquery", "../utils"], function (e, t) {
                    function n(t, n, i) {
                        this.$dropdownParent = i.get("dropdownParent") || e(document.body), t.call(this, n, i)
                    }

                    return n.prototype.bind = function (e, t, n) {
                        var i = this, o = !1;
                        e.call(this, t, n), t.on("open", function () {
                            i._showDropdown(), i._attachPositioningHandler(t), o || (o = !0, t.on("results:all", function () {
                                i._positionDropdown(), i._resizeDropdown()
                            }), t.on("results:append", function () {
                                i._positionDropdown(), i._resizeDropdown()
                            }))
                        }), t.on("close", function () {
                            i._hideDropdown(), i._detachPositioningHandler(t)
                        }), this.$dropdownContainer.on("mousedown", function (e) {
                            e.stopPropagation()
                        })
                    }, n.prototype.destroy = function (e) {
                        e.call(this), this.$dropdownContainer.remove()
                    }, n.prototype.position = function (e, t, n) {
                        t.attr("class", n.attr("class")), t.removeClass("select2"), t.addClass("select2-container--open"), t.css({
                            position: "absolute",
                            top: -999999
                        }), this.$container = n
                    }, n.prototype.render = function (t) {
                        var n = e("<span></span>"), i = t.call(this);
                        return n.append(i), this.$dropdownContainer = n, n
                    }, n.prototype._hideDropdown = function (e) {
                        this.$dropdownContainer.detach()
                    }, n.prototype._attachPositioningHandler = function (n, i) {
                        var o = this, r = "scroll.select2." + i.id, s = "resize.select2." + i.id,
                            a = "orientationchange.select2." + i.id, l = this.$container.parents().filter(t.hasScroll);
                        l.each(function () {
                            t.StoreData(this, "select2-scroll-position", {
                                x: e(this).scrollLeft(),
                                y: e(this).scrollTop()
                            })
                        }), l.on(r, function (n) {
                            var i = t.GetData(this, "select2-scroll-position");
                            e(this).scrollTop(i.y)
                        }), e(window).on(r + " " + s + " " + a, function (e) {
                            o._positionDropdown(), o._resizeDropdown()
                        })
                    }, n.prototype._detachPositioningHandler = function (n, i) {
                        var o = "scroll.select2." + i.id, r = "resize.select2." + i.id,
                            s = "orientationchange.select2." + i.id, a = this.$container.parents().filter(t.hasScroll);
                        a.off(o), e(window).off(o + " " + r + " " + s)
                    }, n.prototype._positionDropdown = function () {
                        var t = e(window), n = this.$dropdown.hasClass("select2-dropdown--above"),
                            i = this.$dropdown.hasClass("select2-dropdown--below"), o = null,
                            r = this.$container.offset();
                        r.bottom = r.top + this.$container.outerHeight(!1);
                        var s = {height: this.$container.outerHeight(!1)};
                        s.top = r.top, s.bottom = r.top + s.height;
                        var a = {height: this.$dropdown.outerHeight(!1)},
                            l = {top: t.scrollTop(), bottom: t.scrollTop() + t.height()}, c = l.top < r.top - a.height,
                            u = l.bottom > r.bottom + a.height, d = {left: r.left, top: s.bottom},
                            p = this.$dropdownParent;
                        "static" === p.css("position") && (p = p.offsetParent());
                        var f = p.offset();
                        d.top -= f.top, d.left -= f.left, n || i || (o = "below"), u || !c || n ? !c && u && n && (o = "below") : o = "above", ("above" == o || n && "below" !== o) && (d.top = s.top - f.top - a.height), null != o && (this.$dropdown.removeClass("select2-dropdown--below select2-dropdown--above").addClass("select2-dropdown--" + o), this.$container.removeClass("select2-container--below select2-container--above").addClass("select2-container--" + o)), this.$dropdownContainer.css(d)
                    }, n.prototype._resizeDropdown = function () {
                        var e = {width: this.$container.outerWidth(!1) + "px"};
                        this.options.get("dropdownAutoWidth") && (e.minWidth = e.width, e.position = "relative", e.width = "auto"), this.$dropdown.css(e)
                    }, n.prototype._showDropdown = function (e) {
                        this.$dropdownContainer.appendTo(this.$dropdownParent), this._positionDropdown(), this._resizeDropdown()
                    }, n
                }), t.define("select2/dropdown/minimumResultsForSearch", [], function () {
                    function e(t) {
                        for (var n = 0, i = 0; i < t.length; i++) {
                            var o = t[i];
                            o.children ? n += e(o.children) : n++
                        }
                        return n
                    }

                    function t(e, t, n, i) {
                        this.minimumResultsForSearch = n.get("minimumResultsForSearch"), this.minimumResultsForSearch < 0 && (this.minimumResultsForSearch = 1 / 0), e.call(this, t, n, i)
                    }

                    return t.prototype.showSearch = function (t, n) {
                        return !(e(n.data.results) < this.minimumResultsForSearch) && t.call(this, n)
                    }, t
                }), t.define("select2/dropdown/selectOnClose", ["../utils"], function (e) {
                    function t() {
                    }

                    return t.prototype.bind = function (e, t, n) {
                        var i = this;
                        e.call(this, t, n), t.on("close", function (e) {
                            i._handleSelectOnClose(e)
                        })
                    }, t.prototype._handleSelectOnClose = function (t, n) {
                        if (n && null != n.originalSelect2Event) {
                            var i = n.originalSelect2Event;
                            if ("select" === i._type || "unselect" === i._type) return
                        }
                        var o = this.getHighlightedResults();
                        if (!(o.length < 1)) {
                            var r = e.GetData(o[0], "data");
                            null != r.element && r.element.selected || null == r.element && r.selected || this.trigger("select", {data: r})
                        }
                    }, t
                }), t.define("select2/dropdown/closeOnSelect", [], function () {
                    function e() {
                    }

                    return e.prototype.bind = function (e, t, n) {
                        var i = this;
                        e.call(this, t, n), t.on("select", function (e) {
                            i._selectTriggered(e)
                        }), t.on("unselect", function (e) {
                            i._selectTriggered(e)
                        })
                    }, e.prototype._selectTriggered = function (e, t) {
                        var n = t.originalEvent;
                        n && n.ctrlKey || this.trigger("close", {originalEvent: n, originalSelect2Event: t})
                    }, e
                }), t.define("select2/i18n/en", [], function () {
                    return {
                        errorLoading: function () {
                            return "The results could not be loaded."
                        }, inputTooLong: function (e) {
                            var t = e.input.length - e.maximum, n = "Please delete " + t + " character";
                            return 1 != t && (n += "s"), n
                        }, inputTooShort: function (e) {
                            var t = e.minimum - e.input.length, n = "Please enter " + t + " or more characters";
                            return n
                        }, loadingMore: function () {
                            return "Loading more results…"
                        }, maximumSelected: function (e) {
                            var t = "You can only select " + e.maximum + " item";
                            return 1 != e.maximum && (t += "s"), t
                        }, noResults: function () {
                            return "No results found"
                        }, searching: function () {
                            return "Searching…"
                        }
                    }
                }), t.define("select2/defaults", ["jquery", "require", "./results", "./selection/single", "./selection/multiple", "./selection/placeholder", "./selection/allowClear", "./selection/search", "./selection/eventRelay", "./utils", "./translation", "./diacritics", "./data/select", "./data/array", "./data/ajax", "./data/tags", "./data/tokenizer", "./data/minimumInputLength", "./data/maximumInputLength", "./data/maximumSelectionLength", "./dropdown", "./dropdown/search", "./dropdown/hidePlaceholder", "./dropdown/infiniteScroll", "./dropdown/attachBody", "./dropdown/minimumResultsForSearch", "./dropdown/selectOnClose", "./dropdown/closeOnSelect", "./i18n/en"], function (e, t, n, i, o, r, s, a, l, c, u, d, p, f, h, m, g, v, y, b, w, x, k, C, T, _, S, j, $) {
                    function A() {
                        this.reset()
                    }

                    A.prototype.apply = function (d) {
                        if (d = e.extend(!0, {}, this.defaults, d), null == d.dataAdapter) {
                            if (null != d.ajax ? d.dataAdapter = h : null != d.data ? d.dataAdapter = f : d.dataAdapter = p, d.minimumInputLength > 0 && (d.dataAdapter = c.Decorate(d.dataAdapter, v)), d.maximumInputLength > 0 && (d.dataAdapter = c.Decorate(d.dataAdapter, y)), d.maximumSelectionLength > 0 && (d.dataAdapter = c.Decorate(d.dataAdapter, b)), d.tags && (d.dataAdapter = c.Decorate(d.dataAdapter, m)), null == d.tokenSeparators && null == d.tokenizer || (d.dataAdapter = c.Decorate(d.dataAdapter, g)), null != d.query) {
                                var $ = t(d.amdBase + "compat/query");
                                d.dataAdapter = c.Decorate(d.dataAdapter, $)
                            }
                            if (null != d.initSelection) {
                                var A = t(d.amdBase + "compat/initSelection");
                                d.dataAdapter = c.Decorate(d.dataAdapter, A)
                            }
                        }
                        if (null == d.resultsAdapter && (d.resultsAdapter = n, null != d.ajax && (d.resultsAdapter = c.Decorate(d.resultsAdapter, C)), null != d.placeholder && (d.resultsAdapter = c.Decorate(d.resultsAdapter, k)), d.selectOnClose && (d.resultsAdapter = c.Decorate(d.resultsAdapter, S))), null == d.dropdownAdapter) {
                            if (d.multiple) d.dropdownAdapter = w; else {
                                var E = c.Decorate(w, x);
                                d.dropdownAdapter = E
                            }
                            if (0 !== d.minimumResultsForSearch && (d.dropdownAdapter = c.Decorate(d.dropdownAdapter, _)), d.closeOnSelect && (d.dropdownAdapter = c.Decorate(d.dropdownAdapter, j)), null != d.dropdownCssClass || null != d.dropdownCss || null != d.adaptDropdownCssClass) {
                                var O = t(d.amdBase + "compat/dropdownCss");
                                d.dropdownAdapter = c.Decorate(d.dropdownAdapter, O)
                            }
                            d.dropdownAdapter = c.Decorate(d.dropdownAdapter, T)
                        }
                        if (null == d.selectionAdapter) {
                            if (d.multiple ? d.selectionAdapter = o : d.selectionAdapter = i, null != d.placeholder && (d.selectionAdapter = c.Decorate(d.selectionAdapter, r)), d.allowClear && (d.selectionAdapter = c.Decorate(d.selectionAdapter, s)), d.multiple && (d.selectionAdapter = c.Decorate(d.selectionAdapter, a)), null != d.containerCssClass || null != d.containerCss || null != d.adaptContainerCssClass) {
                                var D = t(d.amdBase + "compat/containerCss");
                                d.selectionAdapter = c.Decorate(d.selectionAdapter, D)
                            }
                            d.selectionAdapter = c.Decorate(d.selectionAdapter, l)
                        }
                        if ("string" == typeof d.language) if (d.language.indexOf("-") > 0) {
                            var q = d.language.split("-"), P = q[0];
                            d.language = [d.language, P]
                        } else d.language = [d.language];
                        if (e.isArray(d.language)) {
                            var N = new u;
                            d.language.push("en");
                            for (var L = d.language, H = 0; H < L.length; H++) {
                                var M = L[H], I = {};
                                try {
                                    I = u.loadPath(M)
                                } catch (e) {
                                    try {
                                        M = this.defaults.amdLanguageBase + M, I = u.loadPath(M)
                                    } catch (e) {
                                        d.debug && window.console && console.warn && console.warn('Select2: The language file for "' + M + '" could not be automatically loaded. A fallback will be used instead.');
                                        continue
                                    }
                                }
                                N.extend(I)
                            }
                            d.translations = N
                        } else {
                            var z = u.loadPath(this.defaults.amdLanguageBase + "en"), Q = new u(d.language);
                            Q.extend(z), d.translations = Q
                        }
                        return d
                    }, A.prototype.reset = function () {
                        function t(e) {
                            function t(e) {
                                return d[e] || e
                            }

                            return e.replace(/[^\u0000-\u007E]/g, t)
                        }

                        function n(i, o) {
                            if ("" === e.trim(i.term)) return o;
                            if (o.children && o.children.length > 0) {
                                for (var r = e.extend(!0, {}, o), s = o.children.length - 1; s >= 0; s--) {
                                    var a = o.children[s], l = n(i, a);
                                    null == l && r.children.splice(s, 1)
                                }
                                return r.children.length > 0 ? r : n(i, r)
                            }
                            var c = t(o.text).toUpperCase(), u = t(i.term).toUpperCase();
                            return c.indexOf(u) > -1 ? o : null
                        }

                        this.defaults = {
                            amdBase: "./",
                            amdLanguageBase: "./i18n/",
                            closeOnSelect: !0,
                            debug: !1,
                            dropdownAutoWidth: !1,
                            escapeMarkup: c.escapeMarkup,
                            language: $,
                            matcher: n,
                            minimumInputLength: 0,
                            maximumInputLength: 0,
                            maximumSelectionLength: 0,
                            minimumResultsForSearch: 0,
                            selectOnClose: !1,
                            sorter: function (e) {
                                return e
                            },
                            templateResult: function (e) {
                                return e.text
                            },
                            templateSelection: function (e) {
                                return e.text
                            },
                            theme: "default",
                            width: "resolve"
                        }
                    }, A.prototype.set = function (t, n) {
                        var i = e.camelCase(t), o = {};
                        o[i] = n;
                        var r = c._convertData(o);
                        e.extend(!0, this.defaults, r)
                    };
                    var E = new A;
                    return E
                }), t.define("select2/options", ["require", "jquery", "./defaults", "./utils"], function (e, t, n, i) {
                    function o(t, o) {
                        if (this.options = t, null != o && this.fromElement(o), this.options = n.apply(this.options), o && o.is("input")) {
                            var r = e(this.get("amdBase") + "compat/inputData");
                            this.options.dataAdapter = i.Decorate(this.options.dataAdapter, r)
                        }
                    }

                    return o.prototype.fromElement = function (e) {
                        var n = ["select2"];
                        null == this.options.multiple && (this.options.multiple = e.prop("multiple")), null == this.options.disabled && (this.options.disabled = e.prop("disabled")), null == this.options.language && (e.prop("lang") ? this.options.language = e.prop("lang").toLowerCase() : e.closest("[lang]").prop("lang") && (this.options.language = e.closest("[lang]").prop("lang"))), null == this.options.dir && (e.prop("dir") ? this.options.dir = e.prop("dir") : e.closest("[dir]").prop("dir") ? this.options.dir = e.closest("[dir]").prop("dir") : this.options.dir = "ltr"), e.prop("disabled", this.options.disabled), e.prop("multiple", this.options.multiple), i.GetData(e[0], "select2Tags") && (this.options.debug && window.console && console.warn && console.warn('Select2: The `data-select2-tags` attribute has been changed to use the `data-data` and `data-tags="true"` attributes and will be removed in future versions of Select2.'), i.StoreData(e[0], "data", i.GetData(e[0], "select2Tags")), i.StoreData(e[0], "tags", !0)), i.GetData(e[0], "ajaxUrl") && (this.options.debug && window.console && console.warn && console.warn("Select2: The `data-ajax-url` attribute has been changed to `data-ajax--url` and support for the old attribute will be removed in future versions of Select2."), e.attr("ajax--url", i.GetData(e[0], "ajaxUrl")), i.StoreData(e[0], "ajax-Url", i.GetData(e[0], "ajaxUrl")));
                        var o = {};
                        o = t.fn.jquery && "1." == t.fn.jquery.substr(0, 2) && e[0].dataset ? t.extend(!0, {}, e[0].dataset, i.GetData(e[0])) : i.GetData(e[0]);
                        var r = t.extend(!0, {}, o);
                        r = i._convertData(r);
                        for (var s in r) t.inArray(s, n) > -1 || (t.isPlainObject(this.options[s]) ? t.extend(this.options[s], r[s]) : this.options[s] = r[s]);
                        return this
                    }, o.prototype.get = function (e) {
                        return this.options[e]
                    }, o.prototype.set = function (e, t) {
                        this.options[e] = t
                    }, o
                }), t.define("select2/core", ["jquery", "./options", "./utils", "./keys"], function (e, t, n, i) {
                    var o = function (e, i) {
                        null != n.GetData(e[0], "select2") && n.GetData(e[0], "select2").destroy(), this.$element = e, this.id = this._generateId(e), i = i || {}, this.options = new t(i, e), o.__super__.constructor.call(this);
                        var r = e.attr("tabindex") || 0;
                        n.StoreData(e[0], "old-tabindex", r), e.attr("tabindex", "-1");
                        var s = this.options.get("dataAdapter");
                        this.dataAdapter = new s(e, this.options);
                        var a = this.render();
                        this._placeContainer(a);
                        var l = this.options.get("selectionAdapter");
                        this.selection = new l(e, this.options), this.$selection = this.selection.render(), this.selection.position(this.$selection, a);
                        var c = this.options.get("dropdownAdapter");
                        this.dropdown = new c(e, this.options), this.$dropdown = this.dropdown.render(), this.dropdown.position(this.$dropdown, a);
                        var u = this.options.get("resultsAdapter");
                        this.results = new u(e, this.options, this.dataAdapter), this.$results = this.results.render(), this.results.position(this.$results, this.$dropdown);
                        var d = this;
                        this._bindAdapters(), this._registerDomEvents(), this._registerDataEvents(), this._registerSelectionEvents(), this._registerDropdownEvents(), this._registerResultsEvents(), this._registerEvents(), this.dataAdapter.current(function (e) {
                            d.trigger("selection:update", {data: e})
                        }), e.addClass("select2-hidden-accessible"), e.attr("aria-hidden", "true"), this._syncAttributes(), n.StoreData(e[0], "select2", this), e.data("select2", this)
                    };
                    return n.Extend(o, n.Observable), o.prototype._generateId = function (e) {
                        var t = "";
                        return t = null != e.attr("id") ? e.attr("id") : null != e.attr("name") ? e.attr("name") + "-" + n.generateChars(2) : n.generateChars(4), t = t.replace(/(:|\.|\[|\]|,)/g, ""), t = "select2-" + t
                    }, o.prototype._placeContainer = function (e) {
                        e.insertAfter(this.$element);
                        var t = this._resolveWidth(this.$element, this.options.get("width"));
                        null != t && e.css("width", t)
                    }, o.prototype._resolveWidth = function (e, t) {
                        var n = /^width:(([-+]?([0-9]*\.)?[0-9]+)(px|em|ex|%|in|cm|mm|pt|pc))/i;
                        if ("resolve" == t) {
                            var i = this._resolveWidth(e, "style");
                            return null != i ? i : this._resolveWidth(e, "element")
                        }
                        if ("element" == t) {
                            var o = e.outerWidth(!1);
                            return o <= 0 ? "auto" : o + "px"
                        }
                        if ("style" == t) {
                            var r = e.attr("style");
                            if ("string" != typeof r) return null;
                            for (var s = r.split(";"), a = 0, l = s.length; a < l; a += 1) {
                                var c = s[a].replace(/\s/g, ""), u = c.match(n);
                                if (null !== u && u.length >= 1) return u[1]
                            }
                            return null
                        }
                        return t
                    }, o.prototype._bindAdapters = function () {
                        this.dataAdapter.bind(this, this.$container), this.selection.bind(this, this.$container), this.dropdown.bind(this, this.$container), this.results.bind(this, this.$container)
                    }, o.prototype._registerDomEvents = function () {
                        var t = this;
                        this.$element.on("change.select2", function () {
                            t.dataAdapter.current(function (e) {
                                t.trigger("selection:update", {data: e})
                            })
                        }), this.$element.on("focus.select2", function (e) {
                            t.trigger("focus", e)
                        }), this._syncA = n.bind(this._syncAttributes, this), this._syncS = n.bind(this._syncSubtree, this), this.$element[0].attachEvent && this.$element[0].attachEvent("onpropertychange", this._syncA);
                        var i = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
                        null != i ? (this._observer = new i(function (n) {
                            e.each(n, t._syncA), e.each(n, t._syncS)
                        }), this._observer.observe(this.$element[0], {
                            attributes: !0,
                            childList: !0,
                            subtree: !1
                        })) : this.$element[0].addEventListener && (this.$element[0].addEventListener("DOMAttrModified", t._syncA, !1), this.$element[0].addEventListener("DOMNodeInserted", t._syncS, !1), this.$element[0].addEventListener("DOMNodeRemoved", t._syncS, !1))
                    }, o.prototype._registerDataEvents = function () {
                        var e = this;
                        this.dataAdapter.on("*", function (t, n) {
                            e.trigger(t, n)
                        })
                    }, o.prototype._registerSelectionEvents = function () {
                        var t = this, n = ["toggle", "focus"];
                        this.selection.on("toggle", function () {
                            t.toggleDropdown()
                        }), this.selection.on("focus", function (e) {
                            t.focus(e)
                        }), this.selection.on("*", function (i, o) {
                            e.inArray(i, n) === -1 && t.trigger(i, o)
                        })
                    }, o.prototype._registerDropdownEvents = function () {
                        var e = this;
                        this.dropdown.on("*", function (t, n) {
                            e.trigger(t, n)
                        })
                    }, o.prototype._registerResultsEvents = function () {
                        var e = this;
                        this.results.on("*", function (t, n) {
                            e.trigger(t, n)
                        })
                    }, o.prototype._registerEvents = function () {
                        var e = this;
                        this.on("open", function () {
                            e.$container.addClass("select2-container--open")
                        }), this.on("close", function () {
                            e.$container.removeClass("select2-container--open")
                        }), this.on("enable", function () {
                            e.$container.removeClass("select2-container--disabled")
                        }), this.on("disable", function () {
                            e.$container.addClass("select2-container--disabled")
                        }), this.on("blur", function () {
                            e.$container.removeClass("select2-container--focus")
                        }), this.on("query", function (t) {
                            e.isOpen() || e.trigger("open", {}), this.dataAdapter.query(t, function (n) {
                                e.trigger("results:all", {data: n, query: t})
                            })
                        }), this.on("query:append", function (t) {
                            this.dataAdapter.query(t, function (n) {
                                e.trigger("results:append", {data: n, query: t})
                            })
                        }), this.on("keypress", function (t) {
                            var n = t.which;
                            e.isOpen() ? n === i.ESC || n === i.TAB || n === i.UP && t.altKey ? (e.close(), t.preventDefault()) : n === i.ENTER ? (e.trigger("results:select", {}), t.preventDefault()) : n === i.SPACE && t.ctrlKey ? (e.trigger("results:toggle", {}), t.preventDefault()) : n === i.UP ? (e.trigger("results:previous", {}), t.preventDefault()) : n === i.DOWN && (e.trigger("results:next", {}), t.preventDefault()) : (n === i.ENTER || n === i.SPACE || n === i.DOWN && t.altKey) && (e.open(), t.preventDefault())
                        })
                    }, o.prototype._syncAttributes = function () {
                        this.options.set("disabled", this.$element.prop("disabled")), this.options.get("disabled") ? (this.isOpen() && this.close(), this.trigger("disable", {})) : this.trigger("enable", {})
                    }, o.prototype._syncSubtree = function (e, t) {
                        var n = !1, i = this;
                        if (!e || !e.target || "OPTION" === e.target.nodeName || "OPTGROUP" === e.target.nodeName) {
                            if (t) if (t.addedNodes && t.addedNodes.length > 0) for (var o = 0; o < t.addedNodes.length; o++) {
                                var r = t.addedNodes[o];
                                r.selected && (n = !0)
                            } else t.removedNodes && t.removedNodes.length > 0 && (n = !0); else n = !0;
                            n && this.dataAdapter.current(function (e) {
                                i.trigger("selection:update", {data: e})
                            })
                        }
                    }, o.prototype.trigger = function (e, t) {
                        var n = o.__super__.trigger, i = {
                            open: "opening",
                            close: "closing",
                            select: "selecting",
                            unselect: "unselecting",
                            clear: "clearing"
                        };
                        if (void 0 === t && (t = {}), e in i) {
                            var r = i[e], s = {prevented: !1, name: e, args: t};
                            if (n.call(this, r, s), s.prevented) return void (t.prevented = !0)
                        }
                        n.call(this, e, t)
                    }, o.prototype.toggleDropdown = function () {
                        this.options.get("disabled") || (this.isOpen() ? this.close() : this.open())
                    }, o.prototype.open = function () {
                        this.isOpen() || this.trigger("query", {})
                    }, o.prototype.close = function () {
                        this.isOpen() && this.trigger("close", {})
                    }, o.prototype.isOpen = function () {
                        return this.$container.hasClass("select2-container--open")
                    }, o.prototype.hasFocus = function () {
                        return this.$container.hasClass("select2-container--focus")
                    }, o.prototype.focus = function (e) {
                        this.hasFocus() || (this.$container.addClass("select2-container--focus"), this.trigger("focus", {}))
                    }, o.prototype.enable = function (e) {
                        this.options.get("debug") && window.console && console.warn && console.warn('Select2: The `select2("enable")` method has been deprecated and will be removed in later Select2 versions. Use $element.prop("disabled") instead.'), null != e && 0 !== e.length || (e = [!0]);
                        var t = !e[0];
                        this.$element.prop("disabled", t)
                    }, o.prototype.data = function () {
                        this.options.get("debug") && arguments.length > 0 && window.console && console.warn && console.warn('Select2: Data can no longer be set using `select2("data")`. You should consider setting the value instead using `$element.val()`.');
                        var e = [];
                        return this.dataAdapter.current(function (t) {
                            e = t
                        }), e
                    }, o.prototype.val = function (t) {
                        if (this.options.get("debug") && window.console && console.warn && console.warn('Select2: The `select2("val")` method has been deprecated and will be removed in later Select2 versions. Use $element.val() instead.'), null == t || 0 === t.length) return this.$element.val();
                        var n = t[0];
                        e.isArray(n) && (n = e.map(n, function (e) {
                            return e.toString()
                        })), this.$element.val(n).trigger("change")
                    }, o.prototype.destroy = function () {
                        this.$container.remove(), this.$element[0].detachEvent && this.$element[0].detachEvent("onpropertychange", this._syncA), null != this._observer ? (this._observer.disconnect(), this._observer = null) : this.$element[0].removeEventListener && (this.$element[0].removeEventListener("DOMAttrModified", this._syncA, !1), this.$element[0].removeEventListener("DOMNodeInserted", this._syncS, !1), this.$element[0].removeEventListener("DOMNodeRemoved", this._syncS, !1)), this._syncA = null, this._syncS = null, this.$element.off(".select2"), this.$element.attr("tabindex", n.GetData(this.$element[0], "old-tabindex")), this.$element.removeClass("select2-hidden-accessible"), this.$element.attr("aria-hidden", "false"), n.RemoveData(this.$element[0]), this.$element.removeData("select2"), this.dataAdapter.destroy(), this.selection.destroy(), this.dropdown.destroy(), this.results.destroy(), this.dataAdapter = null, this.selection = null, this.dropdown = null, this.results = null
                    }, o.prototype.render = function () {
                        var t = e('<span class="select2 select2-container"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>');
                        return t.attr("dir", this.options.get("dir")), this.$container = t, this.$container.addClass("select2-container--" + this.options.get("theme")), n.StoreData(t[0], "element", this.$element), t
                    }, o
                }), t.define("jquery-mousewheel", ["jquery"], function (e) {
                    return e
                }), t.define("jquery.select2", ["jquery", "jquery-mousewheel", "./select2/core", "./select2/defaults", "./select2/utils"], function (e, t, n, i, o) {
                    if (null == e.fn.select2) {
                        var r = ["open", "close", "destroy"];
                        e.fn.select2 = function (t) {
                            if (t = t || {}, "object" == typeof t) return this.each(function () {
                                var i = e.extend(!0, {}, t);
                                new n(e(this), i)
                            }), this;
                            if ("string" == typeof t) {
                                var i, s = Array.prototype.slice.call(arguments, 1);
                                return this.each(function () {
                                    var e = o.GetData(this, "select2");
                                    null == e && window.console && console.error && console.error("The select2('" + t + "') method was called on an element that is not using Select2."), i = e[t].apply(e, s)
                                }), e.inArray(t, r) > -1 ? this : i
                            }
                            throw new Error("Invalid arguments for Select2: " + t)
                        }
                    }
                    return null == e.fn.select2.defaults && (e.fn.select2.defaults = i), n
                }), {define: t.define, require: t.require}
            }(), n = t.require("jquery.select2");
            return e.fn.select2.amd = t, n
        })
    }, {jquery: 10}],
    16: [function (e, t, n) {
        !function (i) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], i) : "undefined" != typeof n ? t.exports = i(e("jquery")) : i(jQuery)
        }(function (e) {
            "use strict";
            var t = window.Slick || {};
            t = function () {
                function t(t, i) {
                    var o, r = this;
                    r.defaults = {
                        accessibility: !0,
                        adaptiveHeight: !1,
                        appendArrows: e(t),
                        appendDots: e(t),
                        arrows: !0,
                        asNavFor: null,
                        prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                        nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
                        autoplay: 1,
                         infinite: 1,
                        autoplaySpeed: 3e3,
                        centerMode: !1,
                        centerPadding: "50px",
                        cssEase: "ease",
                        customPaging: function (t, n) {
                            return e('<button type="button" data-role="none" role="button" tabindex="0" />').text(n + 1)
                        },
                        dots: !1,
                        dotsClass: "slick-dots",
                        draggable: !0,
                        easing: "linear",
                        edgeFriction: .35,
                        fade: !1,
                        focusOnSelect: !1,
                        infinite: 1,
                        initialSlide: 1,
						lazyLoad: "ondemand",
                        mobileFirst: !1,
                        pauseOnHover: !0,
                        pauseOnFocus: !0,
                        pauseOnDotsHover: !1,
                        respondTo: "window",
                        responsive: null,
                        rows: 1,
                        rtl: !1,
                        slide: "",
                        slidesPerRow: 1,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        speed: 500,
                        swipe: !0,
                        swipeToSlide: !1,
                        touchMove: !0,
                        touchThreshold: 5,
                        useCSS: !0,
                        useTransform: !0,
                        variableWidth: !1,
                        vertical: !1,
                        verticalSwiping: !1,
                        waitForAnimate: !0,
                        zIndex: 1e3
                    }, r.initials = {
                        animating: !1,
                        dragging: !1,
                        autoPlayTimer: null,
                        currentDirection: 1,
                        currentLeft: null,
                        currentSlide: 1,
                        direction: 1,
                        $dots: null,
                        listWidth: null,
                        listHeight: null,
                        loadIndex: 0,
                        $nextArrow: null,
                        $prevArrow: null,
                        slideCount: null,
                        slideWidth: null,
                        $slideTrack: null,
                        $slides: null,
                        sliding: !1,
                        slideOffset: 0,
                        swipeLeft: null,
                        $list: null,
                        touchObject: {},
                        transformsEnabled: !1,
                        unslicked: !1
                    }, e.extend(r, r.initials), r.activeBreakpoint = null, r.animType = null, r.animProp = null, r.breakpoints = [], r.breakpointSettings = [], r.cssTransitions = !1, r.focussed = !1, r.interrupted = !1, r.hidden = "hidden", r.paused = !0, r.positionProp = null, r.respondTo = null, r.rowCount = 1, r.shouldClick = !0, r.$slider = e(t), r.$slidesCache = null, r.transformType = null, r.transitionType = null, r.visibilityChange = "visibilitychange", r.windowWidth = 0, r.windowTimer = null, o = e(t).data("slick") || {}, r.options = e.extend({}, r.defaults, i, o), r.currentSlide = r.options.initialSlide, r.originalSettings = r.options, "undefined" != typeof document.mozHidden ? (r.hidden = "mozHidden", r.visibilityChange = "mozvisibilitychange") : "undefined" != typeof document.webkitHidden && (r.hidden = "webkitHidden", r.visibilityChange = "webkitvisibilitychange"), r.autoPlay = e.proxy(r.autoPlay, r), r.autoPlayClear = e.proxy(r.autoPlayClear, r), r.autoPlayIterator = e.proxy(r.autoPlayIterator, r), r.changeSlide = e.proxy(r.changeSlide, r), r.clickHandler = e.proxy(r.clickHandler, r), r.selectHandler = e.proxy(r.selectHandler, r), r.setPosition = e.proxy(r.setPosition, r), r.swipeHandler = e.proxy(r.swipeHandler, r), r.dragHandler = e.proxy(r.dragHandler, r), r.keyHandler = e.proxy(r.keyHandler, r), r.instanceUid = n++, r.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, r.registerBreakpoints(), r.init(!0)
                }

                var n = 0;
                return t
            }(), t.prototype.activateADA = function () {
                var e = this;
                e.$slideTrack.find(".slick-active").attr({"aria-hidden": "false"}).find("a, input, button, select").attr({tabindex: "0"})
            }, t.prototype.addSlide = t.prototype.slickAdd = function (t, n, i) {
                var o = this;
                if ("boolean" == typeof n) i = n, n = null; else if (n < 0 || n >= o.slideCount) return !1;
                o.unload(), "number" == typeof n ? 0 === n && 0 === o.$slides.length ? e(t).appendTo(o.$slideTrack) : i ? e(t).insertBefore(o.$slides.eq(n)) : e(t).insertAfter(o.$slides.eq(n)) : i === !0 ? e(t).prependTo(o.$slideTrack) : e(t).appendTo(o.$slideTrack), o.$slides = o.$slideTrack.children(this.options.slide), o.$slideTrack.children(this.options.slide).detach(), o.$slideTrack.append(o.$slides), o.$slides.each(function (t, n) {
                    e(n).attr("data-slick-index", t)
                }), o.$slidesCache = o.$slides, o.reinit()
            }, t.prototype.animateHeight = function () {
                var e = this;
                if (1 === e.options.slidesToShow && e.options.adaptiveHeight === !0 && e.options.vertical === !1) {
                    var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
                    e.$list.animate({height: t}, e.options.speed)
                }
            }, t.prototype.animateSlide = function (t, n) {
                var i = {}, o = this;
                o.animateHeight(), o.options.rtl === !0 && o.options.vertical === !1 && (t = -t), o.transformsEnabled === !1 ? o.options.vertical === !1 ? o.$slideTrack.animate({left: t}, o.options.speed, o.options.easing, n) : o.$slideTrack.animate({top: t}, o.options.speed, o.options.easing, n) : o.cssTransitions === !1 ? (o.options.rtl === !0 && (o.currentLeft = -o.currentLeft), e({animStart: o.currentLeft}).animate({animStart: t}, {
                    duration: o.options.speed,
                    easing: o.options.easing,
                    step: function (e) {
                        e = Math.ceil(e), o.options.vertical === !1 ? (i[o.animType] = "translate(" + e + "px, 0px)", o.$slideTrack.css(i)) : (i[o.animType] = "translate(0px," + e + "px)", o.$slideTrack.css(i))
                    },
                    complete: function () {
                        n && n.call()
                    }
                })) : (o.applyTransition(), t = Math.ceil(t), o.options.vertical === !1 ? i[o.animType] = "translate3d(" + t + "px, 0px, 0px)" : i[o.animType] = "translate3d(0px," + t + "px, 0px)", o.$slideTrack.css(i), n && setTimeout(function () {
                    o.disableTransition(), n.call()
                }, o.options.speed))
            }, t.prototype.getNavTarget = function () {
                var t = this, n = t.options.asNavFor;
                return n && null !== n && (n = e(n).not(t.$slider)), n
            }, t.prototype.asNavFor = function (t) {
                var n = this, i = n.getNavTarget();
                null !== i && "object" == typeof i && i.each(function () {
                    var n = e(this).slick("getSlick");
                    n.unslicked || n.slideHandler(t, !0)
                })
            }, t.prototype.applyTransition = function (e) {
                var t = this, n = {};
                t.options.fade === !1 ? n[t.transitionType] = t.transformType + " " + t.options.speed + "ms " + t.options.cssEase : n[t.transitionType] = "opacity " + t.options.speed + "ms " + t.options.cssEase, t.options.fade === !1 ? t.$slideTrack.css(n) : t.$slides.eq(e).css(n)
            }, t.prototype.autoPlay = function () {
                var e = this;
                e.autoPlayClear(), e.slideCount > e.options.slidesToShow && (e.autoPlayTimer = setInterval(e.autoPlayIterator, e.options.autoplaySpeed))
            }, t.prototype.autoPlayClear = function () {
                var e = this;
                e.autoPlayTimer && clearInterval(e.autoPlayTimer)
            }, t.prototype.autoPlayIterator = function () {
                var e = this, t = e.currentSlide + e.options.slidesToScroll;
                e.paused || e.interrupted || e.focussed || (e.options.infinite === !1 && (1 === e.direction && e.currentSlide + 1 === e.slideCount - 1 ? e.direction = 0 : 0 === e.direction && (t = e.currentSlide - e.options.slidesToScroll, e.currentSlide - 1 === 0 && (e.direction = 1))), e.slideHandler(t))
            }, t.prototype.buildArrows = function () {
                var t = this;
                t.options.arrows === !0 && (t.$prevArrow = e(t.options.prevArrow).addClass("slick-arrow"), t.$nextArrow = e(t.options.nextArrow).addClass("slick-arrow"), t.slideCount > t.options.slidesToShow ? (t.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), t.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.prependTo(t.options.appendArrows), t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.appendTo(t.options.appendArrows), t.options.infinite !== !0 && t.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : t.$prevArrow.add(t.$nextArrow).addClass("slick-hidden").attr({
                    "aria-disabled": "true",
                    tabindex: "-1"
                }))
            }, t.prototype.buildDots = function () {
                var t, n, i = this;
                if (i.options.dots === !0 && i.slideCount > i.options.slidesToShow) {
                    for (i.$slider.addClass("slick-dotted"), n = e("<ul />").addClass(i.options.dotsClass), t = 0; t <= i.getDotCount(); t += 1) n.append(e("<li />").append(i.options.customPaging.call(this, i, t)));
                    i.$dots = n.appendTo(i.options.appendDots), i.$dots.find("li").first().addClass("slick-active").attr("aria-hidden", "false")
                }
            }, t.prototype.buildOut = function () {
                var t = this;
                t.$slides = t.$slider.children(t.options.slide + ":not(.slick-cloned)").addClass("slick-slide"), t.slideCount = t.$slides.length, t.$slides.each(function (t, n) {
                    e(n).attr("data-slick-index", t).data("originalStyling", e(n).attr("style") || "")
                }), t.$slider.addClass("slick-slider"), t.$slideTrack = 0 === t.slideCount ? e('<div class="slick-track"/>').appendTo(t.$slider) : t.$slides.wrapAll('<div class="slick-track"/>').parent(), t.$list = t.$slideTrack.wrap('<div aria-live="polite" class="slick-list"/>').parent(), t.$slideTrack.css("opacity", 0), t.options.centerMode !== !0 && t.options.swipeToSlide !== !0 || (t.options.slidesToScroll = 1), e("img[data-lazy]", t.$slider).not("[src]").addClass("slick-loading"), t.setupInfinite(), t.buildArrows(), t.buildDots(), t.updateDots(), t.setSlideClasses("number" == typeof t.currentSlide ? t.currentSlide : 0), t.options.draggable === !0 && t.$list.addClass("draggable")
            }, t.prototype.buildRows = function () {
                var e, t, n, i, o, r, s, a = this;
                if (i = document.createDocumentFragment(), r = a.$slider.children(), a.options.rows > 1) {
                    for (s = a.options.slidesPerRow * a.options.rows, o = Math.ceil(r.length / s), e = 0; e < o; e++) {
                        var l = document.createElement("div");
                        for (t = 0; t < a.options.rows; t++) {
                            var c = document.createElement("div");
                            for (n = 0; n < a.options.slidesPerRow; n++) {
                                var u = e * s + (t * a.options.slidesPerRow + n);
                                r.get(u) && c.appendChild(r.get(u))
                            }
                            l.appendChild(c)
                        }
                        i.appendChild(l)
                    }
                    a.$slider.empty().append(i), a.$slider.children().children().children().css({
                        width: 100 / a.options.slidesPerRow + "%",
                        display: "inline-block"
                    })
                }
            }, t.prototype.checkResponsive = function (t, n) {
                var i, o, r, s = this, a = !1, l = s.$slider.width(), c = window.innerWidth || e(window).width();
                if ("window" === s.respondTo ? r = c : "slider" === s.respondTo ? r = l : "min" === s.respondTo && (r = Math.min(c, l)), s.options.responsive && s.options.responsive.length && null !== s.options.responsive) {
                    o = null;
                    for (i in s.breakpoints) s.breakpoints.hasOwnProperty(i) && (s.originalSettings.mobileFirst === !1 ? r < s.breakpoints[i] && (o = s.breakpoints[i]) : r > s.breakpoints[i] && (o = s.breakpoints[i]));
                    null !== o ? null !== s.activeBreakpoint ? (o !== s.activeBreakpoint || n) && (s.activeBreakpoint = o, "unslick" === s.breakpointSettings[o] ? s.unslick(o) : (s.options = e.extend({}, s.originalSettings, s.breakpointSettings[o]), t === !0 && (s.currentSlide = s.options.initialSlide), s.refresh(t)), a = o) : (s.activeBreakpoint = o, "unslick" === s.breakpointSettings[o] ? s.unslick(o) : (s.options = e.extend({}, s.originalSettings, s.breakpointSettings[o]), t === !0 && (s.currentSlide = s.options.initialSlide), s.refresh(t)), a = o) : null !== s.activeBreakpoint && (s.activeBreakpoint = null, s.options = s.originalSettings, t === !0 && (s.currentSlide = s.options.initialSlide), s.refresh(t), a = o), t || a === !1 || s.$slider.trigger("breakpoint", [s, a])
                }
            }, t.prototype.changeSlide = function (t, n) {
                var i, o, r, s = this, a = e(t.currentTarget);
                switch (a.is("a") && t.preventDefault(), a.is("li") || (a = a.closest("li")), r = s.slideCount % s.options.slidesToScroll !== 0, i = r ? 0 : (s.slideCount - s.currentSlide) % s.options.slidesToScroll, t.data.message) {
                    case"previous":
                        o = 0 === i ? s.options.slidesToScroll : s.options.slidesToShow - i, s.slideCount > s.options.slidesToShow && s.slideHandler(s.currentSlide - o, !1, n);
                        break;
                    case"next":
                        o = 0 === i ? s.options.slidesToScroll : i, s.slideCount > s.options.slidesToShow && s.slideHandler(s.currentSlide + o, !1, n);
                        break;
                    case"index":
                        var l = 0 === t.data.index ? 0 : t.data.index || a.index() * s.options.slidesToScroll;
                        s.slideHandler(s.checkNavigable(l), !1, n), a.children().trigger("focus");
                        break;
                    default:
                        return
                }
            }, t.prototype.checkNavigable = function (e) {
                var t, n, i = this;
                if (t = i.getNavigableIndexes(), n = 0, e > t[t.length - 1]) e = t[t.length - 1]; else for (var o in t) {
                    if (e < t[o]) {
                        e = n;
                        break
                    }
                    n = t[o]
                }
                return e
            }, t.prototype.cleanUpEvents = function () {
                var t = this;
                t.options.dots && null !== t.$dots && e("li", t.$dots).off("click.slick", t.changeSlide).off("mouseenter.slick", e.proxy(t.interrupt, t, !0)).off("mouseleave.slick", e.proxy(t.interrupt, t, !1)), t.$slider.off("focus.slick blur.slick"), t.options.arrows === !0 && t.slideCount > t.options.slidesToShow && (t.$prevArrow && t.$prevArrow.off("click.slick", t.changeSlide), t.$nextArrow && t.$nextArrow.off("click.slick", t.changeSlide)), t.$list.off("touchstart.slick mousedown.slick", t.swipeHandler), t.$list.off("touchmove.slick mousemove.slick", t.swipeHandler), t.$list.off("touchend.slick mouseup.slick", t.swipeHandler), t.$list.off("touchcancel.slick mouseleave.slick", t.swipeHandler), t.$list.off("click.slick", t.clickHandler), e(document).off(t.visibilityChange, t.visibility), t.cleanUpSlideEvents(), t.options.accessibility === !0 && t.$list.off("keydown.slick", t.keyHandler), t.options.focusOnSelect === !0 && e(t.$slideTrack).children().off("click.slick", t.selectHandler), e(window).off("orientationchange.slick.slick-" + t.instanceUid, t.orientationChange), e(window).off("resize.slick.slick-" + t.instanceUid, t.resize), e("[draggable!=true]", t.$slideTrack).off("dragstart", t.preventDefault), e(window).off("load.slick.slick-" + t.instanceUid, t.setPosition), e(document).off("ready.slick.slick-" + t.instanceUid, t.setPosition)
            }, t.prototype.cleanUpSlideEvents = function () {
                var t = this;
                t.$list.off("mouseenter.slick", e.proxy(t.interrupt, t, !0)), t.$list.off("mouseleave.slick", e.proxy(t.interrupt, t, !1))
            }, t.prototype.cleanUpRows = function () {
                var e, t = this;
                t.options.rows > 1 && (e = t.$slides.children().children(), e.removeAttr("style"), t.$slider.empty().append(e))
            }, t.prototype.clickHandler = function (e) {
                var t = this;
                t.shouldClick === !1 && (e.stopImmediatePropagation(), e.stopPropagation(), e.preventDefault())
            }, t.prototype.destroy = function (t) {
                var n = this;
                n.autoPlayClear(), n.touchObject = {}, n.cleanUpEvents(), e(".slick-cloned", n.$slider).detach(), n.$dots && n.$dots.remove(), n.$prevArrow && n.$prevArrow.length && (n.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), n.htmlExpr.test(n.options.prevArrow) && n.$prevArrow.remove()), n.$nextArrow && n.$nextArrow.length && (n.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), n.htmlExpr.test(n.options.nextArrow) && n.$nextArrow.remove()), n.$slides && (n.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function () {
                    e(this).attr("style", e(this).data("originalStyling"))
                }), n.$slideTrack.children(this.options.slide).detach(), n.$slideTrack.detach(), n.$list.detach(), n.$slider.append(n.$slides)), n.cleanUpRows(), n.$slider.removeClass("slick-slider"), n.$slider.removeClass("slick-initialized"), n.$slider.removeClass("slick-dotted"), n.unslicked = !0, t || n.$slider.trigger("destroy", [n])
            }, t.prototype.disableTransition = function (e) {
                var t = this, n = {};
                n[t.transitionType] = "", t.options.fade === !1 ? t.$slideTrack.css(n) : t.$slides.eq(e).css(n)
            }, t.prototype.fadeSlide = function (e, t) {
                var n = this;
                n.cssTransitions === !1 ? (n.$slides.eq(e).css({zIndex: n.options.zIndex}), n.$slides.eq(e).animate({opacity: 1}, n.options.speed, n.options.easing, t)) : (n.applyTransition(e), n.$slides.eq(e).css({
                    opacity: 1,
                    zIndex: n.options.zIndex
                }), t && setTimeout(function () {
                    n.disableTransition(e), t.call()
                }, n.options.speed))
            }, t.prototype.fadeSlideOut = function (e) {
                var t = this;
                t.cssTransitions === !1 ? t.$slides.eq(e).animate({
                    opacity: 0,
                    zIndex: t.options.zIndex - 2
                }, t.options.speed, t.options.easing) : (t.applyTransition(e), t.$slides.eq(e).css({
                    opacity: 0,
                    zIndex: t.options.zIndex - 2
                }))
            }, t.prototype.filterSlides = t.prototype.slickFilter = function (e) {
                var t = this;
                null !== e && (t.$slidesCache = t.$slides, t.unload(), t.$slideTrack.children(this.options.slide).detach(), t.$slidesCache.filter(e).appendTo(t.$slideTrack), t.reinit())
            }, t.prototype.focusHandler = function () {
                var t = this;
                t.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*:not(.slick-arrow)", function (n) {
                    n.stopImmediatePropagation();
                    var i = e(this);
                    setTimeout(function () {
                        t.options.pauseOnFocus && (t.focussed = i.is(":focus"), t.autoPlay())
                    }, 0)
                })
            }, t.prototype.getCurrent = t.prototype.slickCurrentSlide = function () {
                var e = this;
                return e.currentSlide
            }, t.prototype.getDotCount = function () {
                var e = this, t = 0, n = 0, i = 0;
                if (e.options.infinite === !0) for (; t < e.slideCount;) ++i, t = n + e.options.slidesToScroll, n += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow; else if (e.options.centerMode === !0) i = e.slideCount; else if (e.options.asNavFor) for (; t < e.slideCount;) ++i, t = n + e.options.slidesToScroll, n += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow; else i = 1 + Math.ceil((e.slideCount - e.options.slidesToShow) / e.options.slidesToScroll);
                return i - 1
            }, t.prototype.getLeft = function (e) {
                var t, n, i, o = this, r = 0;
                return o.slideOffset = 0, n = o.$slides.first().outerHeight(!0), o.options.infinite === !0 ? (o.slideCount > o.options.slidesToShow && (o.slideOffset = o.slideWidth * o.options.slidesToShow * -1, r = n * o.options.slidesToShow * -1), o.slideCount % o.options.slidesToScroll !== 0 && e + o.options.slidesToScroll > o.slideCount && o.slideCount > o.options.slidesToShow && (e > o.slideCount ? (o.slideOffset = (o.options.slidesToShow - (e - o.slideCount)) * o.slideWidth * -1, r = (o.options.slidesToShow - (e - o.slideCount)) * n * -1) : (o.slideOffset = o.slideCount % o.options.slidesToScroll * o.slideWidth * -1, r = o.slideCount % o.options.slidesToScroll * n * -1))) : e + o.options.slidesToShow > o.slideCount && (o.slideOffset = (e + o.options.slidesToShow - o.slideCount) * o.slideWidth, r = (e + o.options.slidesToShow - o.slideCount) * n), o.slideCount <= o.options.slidesToShow && (o.slideOffset = 0, r = 0), o.options.centerMode === !0 && o.options.infinite === !0 ? o.slideOffset += o.slideWidth * Math.floor(o.options.slidesToShow / 2) - o.slideWidth : o.options.centerMode === !0 && (o.slideOffset = 0, o.slideOffset += o.slideWidth * Math.floor(o.options.slidesToShow / 2)), t = o.options.vertical === !1 ? e * o.slideWidth * -1 + o.slideOffset : e * n * -1 + r, o.options.variableWidth === !0 && (i = o.slideCount <= o.options.slidesToShow || o.options.infinite === !1 ? o.$slideTrack.children(".slick-slide").eq(e) : o.$slideTrack.children(".slick-slide").eq(e + o.options.slidesToShow), t = o.options.rtl === !0 ? i[0] ? (o.$slideTrack.width() - i[0].offsetLeft - i.width()) * -1 : 0 : i[0] ? i[0].offsetLeft * -1 : 0, o.options.centerMode === !0 && (i = o.slideCount <= o.options.slidesToShow || o.options.infinite === !1 ? o.$slideTrack.children(".slick-slide").eq(e) : o.$slideTrack.children(".slick-slide").eq(e + o.options.slidesToShow + 1), t = o.options.rtl === !0 ? i[0] ? (o.$slideTrack.width() - i[0].offsetLeft - i.width()) * -1 : 0 : i[0] ? i[0].offsetLeft * -1 : 0, t += (o.$list.width() - i.outerWidth()) / 2)), t
            }, t.prototype.getOption = t.prototype.slickGetOption = function (e) {
                var t = this;
                return t.options[e]
            }, t.prototype.getNavigableIndexes = function () {
                var e, t = this, n = 0, i = 0, o = [];
                for (t.options.infinite === !1 ? e = t.slideCount : (n = t.options.slidesToScroll * -1, i = t.options.slidesToScroll * -1, e = 2 * t.slideCount); n < e;) o.push(n), n = i + t.options.slidesToScroll, i += t.options.slidesToScroll <= t.options.slidesToShow ? t.options.slidesToScroll : t.options.slidesToShow;
                return o
            }, t.prototype.getSlick = function () {
                return this
            }, t.prototype.getSlideCount = function () {
                var t, n, i, o = this;
                return i = o.options.centerMode === !0 ? o.slideWidth * Math.floor(o.options.slidesToShow / 2) : 0, o.options.swipeToSlide === !0 ? (o.$slideTrack.find(".slick-slide").each(function (t, r) {
                    if (r.offsetLeft - i + e(r).outerWidth() / 2 > o.swipeLeft * -1) return n = r, !1
                }), t = Math.abs(e(n).attr("data-slick-index") - o.currentSlide) || 1) : o.options.slidesToScroll
            }, t.prototype.goTo = t.prototype.slickGoTo = function (e, t) {
                var n = this;
                n.changeSlide({data: {message: "index", index: parseInt(e)}}, t)
            }, t.prototype.init = function (t) {
                var n = this;
                e(n.$slider).hasClass("slick-initialized") || (e(n.$slider).addClass("slick-initialized"), n.buildRows(), n.buildOut(), n.setProps(), n.startLoad(), n.loadSlider(), n.initializeEvents(), n.updateArrows(), n.updateDots(), n.checkResponsive(!0), n.focusHandler()), t && n.$slider.trigger("init", [n]), n.options.accessibility === !0 && n.initADA(), n.options.autoplay && (n.paused = !1, n.autoPlay())
            }, t.prototype.initADA = function () {
                var t = this;
                t.$slides.add(t.$slideTrack.find(".slick-cloned")).attr({
                    "aria-hidden": "true",
                    tabindex: "-1"
                }).find("a, input, button, select").attr({tabindex: "-1"}), t.$slideTrack.attr("role", "listbox"), t.$slides.not(t.$slideTrack.find(".slick-cloned")).each(function (n) {
                    e(this).attr({role: "option", "aria-describedby": "slick-slide" + t.instanceUid + n})
                }), null !== t.$dots && t.$dots.attr("role", "tablist").find("li").each(function (n) {
                    e(this).attr({
                        role: "presentation",
                        "aria-selected": "false",
                        "aria-controls": "navigation" + t.instanceUid + n,
                        id: "slick-slide" + t.instanceUid + n
                    })
                }).first().attr("aria-selected", "true").end().find("button").attr("role", "button").end().closest("div").attr("role", "toolbar"), t.activateADA()
            }, t.prototype.initArrowEvents = function () {
                var e = this;
                e.options.arrows === !0 && e.slideCount > e.options.slidesToShow && (e.$prevArrow.off("click.slick").on("click.slick", {message: "previous"}, e.changeSlide), e.$nextArrow.off("click.slick").on("click.slick", {message: "next"}, e.changeSlide))
            }, t.prototype.initDotEvents = function () {
                var t = this;
                t.options.dots === !0 && t.slideCount > t.options.slidesToShow && e("li", t.$dots).on("click.slick", {message: "index"}, t.changeSlide), t.options.dots === !0 && t.options.pauseOnDotsHover === !0 && e("li", t.$dots).on("mouseenter.slick", e.proxy(t.interrupt, t, !0)).on("mouseleave.slick", e.proxy(t.interrupt, t, !1))
            }, t.prototype.initSlideEvents = function () {
                var t = this;
                t.options.pauseOnHover && (t.$list.on("mouseenter.slick", e.proxy(t.interrupt, t, !0)), t.$list.on("mouseleave.slick", e.proxy(t.interrupt, t, !1)))
            }, t.prototype.initializeEvents = function () {
                var t = this;
                t.initArrowEvents(), t.initDotEvents(), t.initSlideEvents(), t.$list.on("touchstart.slick mousedown.slick", {action: "start"}, t.swipeHandler), t.$list.on("touchmove.slick mousemove.slick", {action: "move"}, t.swipeHandler), t.$list.on("touchend.slick mouseup.slick", {action: "end"}, t.swipeHandler), t.$list.on("touchcancel.slick mouseleave.slick", {action: "end"}, t.swipeHandler), t.$list.on("click.slick", t.clickHandler), e(document).on(t.visibilityChange, e.proxy(t.visibility, t)), t.options.accessibility === !0 && t.$list.on("keydown.slick", t.keyHandler), t.options.focusOnSelect === !0 && e(t.$slideTrack).children().on("click.slick", t.selectHandler), e(window).on("orientationchange.slick.slick-" + t.instanceUid, e.proxy(t.orientationChange, t)), e(window).on("resize.slick.slick-" + t.instanceUid, e.proxy(t.resize, t)), e("[draggable!=true]", t.$slideTrack).on("dragstart", t.preventDefault), e(window).on("load.slick.slick-" + t.instanceUid, t.setPosition), e(document).on("ready.slick.slick-" + t.instanceUid, t.setPosition)
            }, t.prototype.initUI = function () {
                var e = this;
                e.options.arrows === !0 && e.slideCount > e.options.slidesToShow && (e.$prevArrow.show(), e.$nextArrow.show()), e.options.dots === !0 && e.slideCount > e.options.slidesToShow && e.$dots.show()
            }, t.prototype.keyHandler = function (e) {
                var t = this;
                e.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === e.keyCode && t.options.accessibility === !0 ? t.changeSlide({data: {message: t.options.rtl === !0 ? "next" : "previous"}}) : 39 === e.keyCode && t.options.accessibility === !0 && t.changeSlide({data: {message: t.options.rtl === !0 ? "previous" : "next"}}))
            }, t.prototype.lazyLoad = function () {
                function t(t) {
                    e("img[data-lazy]", t).each(function () {
                        var t = e(this), n = e(this).attr("data-lazy"), i = document.createElement("img");
                        i.onload = function () {
                            t.animate({opacity: 0}, 100, function () {
                                t.attr("src", n).animate({opacity: 1}, 200, function () {
                                    t.removeAttr("data-lazy").removeClass("slick-loading")
                                }), s.$slider.trigger("lazyLoaded", [s, t, n])
                            })
                        }, i.onerror = function () {
                            t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), s.$slider.trigger("lazyLoadError", [s, t, n])
                        }, i.src = n
                    })
                }

                var n, i, o, r, s = this;
                s.options.centerMode === !0 ? s.options.infinite === !0 ? (o = s.currentSlide + (s.options.slidesToShow / 2 + 1), r = o + s.options.slidesToShow + 2) : (o = Math.max(0, s.currentSlide - (s.options.slidesToShow / 2 + 1)), r = 2 + (s.options.slidesToShow / 2 + 1) + s.currentSlide) : (o = s.options.infinite ? s.options.slidesToShow + s.currentSlide : s.currentSlide, r = Math.ceil(o + s.options.slidesToShow), s.options.fade === !0 && (o > 0 && o--, r <= s.slideCount && r++)), n = s.$slider.find(".slick-slide").slice(o, r), t(n), s.slideCount <= s.options.slidesToShow ? (i = s.$slider.find(".slick-slide"), t(i)) : s.currentSlide >= s.slideCount - s.options.slidesToShow ? (i = s.$slider.find(".slick-cloned").slice(0, s.options.slidesToShow), t(i)) : 0 === s.currentSlide && (i = s.$slider.find(".slick-cloned").slice(s.options.slidesToShow * -1), t(i))
            }, t.prototype.loadSlider = function () {
                var e = this;
                e.setPosition(), e.$slideTrack.css({opacity: 1}), e.$slider.removeClass("slick-loading"), e.initUI(), "progressive" === e.options.lazyLoad && e.progressiveLazyLoad()
            }, t.prototype.next = t.prototype.slickNext = function () {
                var e = this;
                e.changeSlide({data: {message: "next"}})
            }, t.prototype.orientationChange = function () {
                var e = this;
                e.checkResponsive(), e.setPosition()
            }, t.prototype.pause = t.prototype.slickPause = function () {
                var e = this;
                e.autoPlayClear(), e.paused = !0
            }, t.prototype.play = t.prototype.slickPlay = function () {
                var e = this;
                e.autoPlay(), e.options.autoplay = !0, e.paused = !1, e.focussed = !1, e.interrupted = !1
            }, t.prototype.postSlide = function (e) {
                var t = this;
                t.unslicked || (t.$slider.trigger("afterChange", [t, e]), t.animating = !1, t.setPosition(), t.swipeLeft = null, t.options.autoplay && t.autoPlay(), t.options.accessibility === !0 && t.initADA())
            }, t.prototype.prev = t.prototype.slickPrev = function () {
                var e = this;
                e.changeSlide({data: {message: "previous"}})
            }, t.prototype.preventDefault = function (e) {
                e.preventDefault()
            }, t.prototype.progressiveLazyLoad = function (t) {
                t = t || 1;
                var n, i, o, r = this, s = e("img[data-lazy]", r.$slider);
                s.length ? (n = s.first(), i = n.attr("data-lazy"), o = document.createElement("img"), o.onload = function () {
                    n.attr("src", i).removeAttr("data-lazy").removeClass("slick-loading"), r.options.adaptiveHeight === !0 && r.setPosition(), r.$slider.trigger("lazyLoaded", [r, n, i]), r.progressiveLazyLoad()
                }, o.onerror = function () {
                    t < 3 ? setTimeout(function () {
                        r.progressiveLazyLoad(t + 1)
                    }, 500) : (n.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), r.$slider.trigger("lazyLoadError", [r, n, i]), r.progressiveLazyLoad())
                }, o.src = i) : r.$slider.trigger("allImagesLoaded", [r])
            }, t.prototype.refresh = function (t) {
                var n, i, o = this;
                i = o.slideCount - o.options.slidesToShow, !o.options.infinite && o.currentSlide > i && (o.currentSlide = i), o.slideCount <= o.options.slidesToShow && (o.currentSlide = 0), n = o.currentSlide, o.destroy(!0), e.extend(o, o.initials, {currentSlide: n}), o.init(), t || o.changeSlide({
                    data: {
                        message: "index",
                        index: n
                    }
                }, !1)
            }, t.prototype.registerBreakpoints = function () {
                var t, n, i, o = this, r = o.options.responsive || null;
                if ("array" === e.type(r) && r.length) {
                    o.respondTo = o.options.respondTo || "window";
                    for (t in r) if (i = o.breakpoints.length - 1, n = r[t].breakpoint, r.hasOwnProperty(t)) {
                        for (; i >= 0;) o.breakpoints[i] && o.breakpoints[i] === n && o.breakpoints.splice(i, 1), i--;
                        o.breakpoints.push(n), o.breakpointSettings[n] = r[t].settings
                    }
                    o.breakpoints.sort(function (e, t) {
                        return o.options.mobileFirst ? e - t : t - e
                    })
                }
            }, t.prototype.reinit = function () {
                var t = this;
                t.$slides = t.$slideTrack.children(t.options.slide).addClass("slick-slide"), t.slideCount = t.$slides.length, t.currentSlide >= t.slideCount && 0 !== t.currentSlide && (t.currentSlide = t.currentSlide - t.options.slidesToScroll), t.slideCount <= t.options.slidesToShow && (t.currentSlide = 0), t.registerBreakpoints(), t.setProps(), t.setupInfinite(), t.buildArrows(), t.updateArrows(), t.initArrowEvents(), t.buildDots(), t.updateDots(), t.initDotEvents(), t.cleanUpSlideEvents(), t.initSlideEvents(), t.checkResponsive(!1, !0), t.options.focusOnSelect === !0 && e(t.$slideTrack).children().on("click.slick", t.selectHandler), t.setSlideClasses("number" == typeof t.currentSlide ? t.currentSlide : 0), t.setPosition(), t.focusHandler(), t.paused = !t.options.autoplay, t.autoPlay(), t.$slider.trigger("reInit", [t])
            }, t.prototype.resize = function () {
                var t = this;
                e(window).width() !== t.windowWidth && (clearTimeout(t.windowDelay), t.windowDelay = window.setTimeout(function () {
                    t.windowWidth = e(window).width(), t.checkResponsive(), t.unslicked || t.setPosition()
                }, 50))
            }, t.prototype.removeSlide = t.prototype.slickRemove = function (e, t, n) {
                var i = this;
                return "boolean" == typeof e ? (t = e, e = t === !0 ? 0 : i.slideCount - 1) : e = t === !0 ? --e : e, !(i.slideCount < 1 || e < 0 || e > i.slideCount - 1) && (i.unload(), n === !0 ? i.$slideTrack.children().remove() : i.$slideTrack.children(this.options.slide).eq(e).remove(), i.$slides = i.$slideTrack.children(this.options.slide), i.$slideTrack.children(this.options.slide).detach(), i.$slideTrack.append(i.$slides), i.$slidesCache = i.$slides, void i.reinit())
            }, t.prototype.setCSS = function (e) {
                var t, n, i = this, o = {};
                i.options.rtl === !0 && (e = -e), t = "left" == i.positionProp ? Math.ceil(e) + "px" : "0px", n = "top" == i.positionProp ? Math.ceil(e) + "px" : "0px", o[i.positionProp] = e, i.transformsEnabled === !1 ? i.$slideTrack.css(o) : (o = {}, i.cssTransitions === !1 ? (o[i.animType] = "translate(" + t + ", " + n + ")", i.$slideTrack.css(o)) : (o[i.animType] = "translate3d(" + t + ", " + n + ", 0px)", i.$slideTrack.css(o)))
            }, t.prototype.setDimensions = function () {
                var e = this;
                e.options.vertical === !1 ? e.options.centerMode === !0 && e.$list.css({padding: "0px " + e.options.centerPadding}) : (e.$list.height(e.$slides.first().outerHeight(!0) * e.options.slidesToShow), e.options.centerMode === !0 && e.$list.css({padding: e.options.centerPadding + " 0px"})), e.listWidth = e.$list.width(), e.listHeight = e.$list.height(), e.options.vertical === !1 && e.options.variableWidth === !1 ? (e.slideWidth = Math.ceil(e.listWidth / e.options.slidesToShow), e.$slideTrack.width(Math.ceil(e.slideWidth * e.$slideTrack.children(".slick-slide").length))) : e.options.variableWidth === !0 ? e.$slideTrack.width(5e3 * e.slideCount) : (e.slideWidth = Math.ceil(e.listWidth), e.$slideTrack.height(Math.ceil(e.$slides.first().outerHeight(!0) * e.$slideTrack.children(".slick-slide").length)));
                var t = e.$slides.first().outerWidth(!0) - e.$slides.first().width();
                e.options.variableWidth === !1 && e.$slideTrack.children(".slick-slide").width(e.slideWidth - t)
            }, t.prototype.setFade = function () {
                var t, n = this;
                n.$slides.each(function (i, o) {
                    t = n.slideWidth * i * -1, n.options.rtl === !0 ? e(o).css({
                        position: "relative",
                        right: t,
                        top: 0,
                        zIndex: n.options.zIndex - 2,
                        opacity: 0
                    }) : e(o).css({position: "relative", left: t, top: 0, zIndex: n.options.zIndex - 2, opacity: 0})
                }), n.$slides.eq(n.currentSlide).css({zIndex: n.options.zIndex - 1, opacity: 1})
            }, t.prototype.setHeight = function () {
                var e = this;
                if (1 === e.options.slidesToShow && e.options.adaptiveHeight === !0 && e.options.vertical === !1) {
                    var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
                    e.$list.css("height", t)
                }
            }, t.prototype.setOption = t.prototype.slickSetOption = function () {
                var t, n, i, o, r, s = this, a = !1;
                if ("object" === e.type(arguments[0]) ? (i = arguments[0], a = arguments[1], r = "multiple") : "string" === e.type(arguments[0]) && (i = arguments[0], o = arguments[1], a = arguments[2], "responsive" === arguments[0] && "array" === e.type(arguments[1]) ? r = "responsive" : "undefined" != typeof arguments[1] && (r = "single")), "single" === r) s.options[i] = o; else if ("multiple" === r) e.each(i, function (e, t) {
                    s.options[e] = t
                }); else if ("responsive" === r) for (n in o) if ("array" !== e.type(s.options.responsive)) s.options.responsive = [o[n]]; else {
                    for (t = s.options.responsive.length - 1; t >= 0;) s.options.responsive[t].breakpoint === o[n].breakpoint && s.options.responsive.splice(t, 1), t--;
                    s.options.responsive.push(o[n])
                }
                a && (s.unload(), s.reinit())
            }, t.prototype.setPosition = function () {
                var e = this;
                e.setDimensions(), e.setHeight(), e.options.fade === !1 ? e.setCSS(e.getLeft(e.currentSlide)) : e.setFade(), e.$slider.trigger("setPosition", [e])
            }, t.prototype.setProps = function () {
                var e = this, t = document.body.style;
                e.positionProp = e.options.vertical === !0 ? "top" : "left", "top" === e.positionProp ? e.$slider.addClass("slick-vertical") : e.$slider.removeClass("slick-vertical"), void 0 === t.WebkitTransition && void 0 === t.MozTransition && void 0 === t.msTransition || e.options.useCSS === !0 && (e.cssTransitions = !0), e.options.fade && ("number" == typeof e.options.zIndex ? e.options.zIndex < 3 && (e.options.zIndex = 3) : e.options.zIndex = e.defaults.zIndex), void 0 !== t.OTransform && (e.animType = "OTransform", e.transformType = "-o-transform", e.transitionType = "OTransition", void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (e.animType = !1)), void 0 !== t.MozTransform && (e.animType = "MozTransform", e.transformType = "-moz-transform", e.transitionType = "MozTransition", void 0 === t.perspectiveProperty && void 0 === t.MozPerspective && (e.animType = !1)), void 0 !== t.webkitTransform && (e.animType = "webkitTransform", e.transformType = "-webkit-transform", e.transitionType = "webkitTransition", void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (e.animType = !1)), void 0 !== t.msTransform && (e.animType = "msTransform", e.transformType = "-ms-transform", e.transitionType = "msTransition", void 0 === t.msTransform && (e.animType = !1)), void 0 !== t.transform && e.animType !== !1 && (e.animType = "transform", e.transformType = "transform", e.transitionType = "transition"), e.transformsEnabled = e.options.useTransform && null !== e.animType && e.animType !== !1
            }, t.prototype.setSlideClasses = function (e) {
                var t, n, i, o, r = this;
                n = r.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true"), r.$slides.eq(e).addClass("slick-current"), r.options.centerMode === !0 ? (t = Math.floor(r.options.slidesToShow / 2), r.options.infinite === !0 && (e >= t && e <= r.slideCount - 1 - t ? r.$slides.slice(e - t, e + t + 1).addClass("slick-active").attr("aria-hidden", "false") : (i = r.options.slidesToShow + e, n.slice(i - t + 1, i + t + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === e ? n.eq(n.length - 1 - r.options.slidesToShow).addClass("slick-center") : e === r.slideCount - 1 && n.eq(r.options.slidesToShow).addClass("slick-center")), r.$slides.eq(e).addClass("slick-center")) : e >= 0 && e <= r.slideCount - r.options.slidesToShow ? r.$slides.slice(e, e + r.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : n.length <= r.options.slidesToShow ? n.addClass("slick-active").attr("aria-hidden", "false") : (o = r.slideCount % r.options.slidesToShow, i = r.options.infinite === !0 ? r.options.slidesToShow + e : e, r.options.slidesToShow == r.options.slidesToScroll && r.slideCount - e < r.options.slidesToShow ? n.slice(i - (r.options.slidesToShow - o), i + o).addClass("slick-active").attr("aria-hidden", "false") : n.slice(i, i + r.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false")), "ondemand" === r.options.lazyLoad && r.lazyLoad()
            }, t.prototype.setupInfinite = function () {
                var t, n, i, o = this;
                if (o.options.fade === !0 && (o.options.centerMode = !1), o.options.infinite === !0 && o.options.fade === !1 && (n = null, o.slideCount > o.options.slidesToShow)) {
                    for (i = o.options.centerMode === !0 ? o.options.slidesToShow + 1 : o.options.slidesToShow, t = o.slideCount; t > o.slideCount - i; t -= 1) n = t - 1, e(o.$slides[n]).clone(!0).attr("id", "").attr("data-slick-index", n - o.slideCount).prependTo(o.$slideTrack).addClass("slick-cloned");
                    for (t = 0; t < i; t += 1) n = t, e(o.$slides[n]).clone(!0).attr("id", "").attr("data-slick-index", n + o.slideCount).appendTo(o.$slideTrack).addClass("slick-cloned");
                    o.$slideTrack.find(".slick-cloned").find("[id]").each(function () {
                        e(this).attr("id", "")
                    })
                }
            }, t.prototype.interrupt = function (e) {
                var t = this;
                e || t.autoPlay(), t.interrupted = e
            }, t.prototype.selectHandler = function (t) {
                var n = this, i = e(t.target).is(".slick-slide") ? e(t.target) : e(t.target).parents(".slick-slide"),
                    o = parseInt(i.attr("data-slick-index"));
                return o || (o = 0), n.slideCount <= n.options.slidesToShow ? (n.setSlideClasses(o), void n.asNavFor(o)) : void n.slideHandler(o)
            }, t.prototype.slideHandler = function (e, t, n) {
                var i, o, r, s, a, l = null, c = this;
                if (t = t || !1, (c.animating !== !0 || c.options.waitForAnimate !== !0) && !(c.options.fade === !0 && c.currentSlide === e || c.slideCount <= c.options.slidesToShow)) return t === !1 && c.asNavFor(e), i = e, l = c.getLeft(i), s = c.getLeft(c.currentSlide), c.currentLeft = null === c.swipeLeft ? s : c.swipeLeft, c.options.infinite === !1 && c.options.centerMode === !1 && (e < 0 || e > c.getDotCount() * c.options.slidesToScroll) ? void (c.options.fade === !1 && (i = c.currentSlide, n !== !0 ? c.animateSlide(s, function () {
                    c.postSlide(i)
                }) : c.postSlide(i))) : c.options.infinite === !1 && c.options.centerMode === !0 && (e < 0 || e > c.slideCount - c.options.slidesToScroll) ? void (c.options.fade === !1 && (i = c.currentSlide, n !== !0 ? c.animateSlide(s, function () {
                    c.postSlide(i)
                }) : c.postSlide(i))) : (c.options.autoplay && clearInterval(c.autoPlayTimer), o = i < 0 ? c.slideCount % c.options.slidesToScroll !== 0 ? c.slideCount - c.slideCount % c.options.slidesToScroll : c.slideCount + i : i >= c.slideCount ? c.slideCount % c.options.slidesToScroll !== 0 ? 0 : i - c.slideCount : i, c.animating = !0, c.$slider.trigger("beforeChange", [c, c.currentSlide, o]), r = c.currentSlide, c.currentSlide = o, c.setSlideClasses(c.currentSlide), c.options.asNavFor && (a = c.getNavTarget(), a = a.slick("getSlick"), a.slideCount <= a.options.slidesToShow && a.setSlideClasses(c.currentSlide)), c.updateDots(), c.updateArrows(), c.options.fade === !0 ? (n !== !0 ? (c.fadeSlideOut(r), c.fadeSlide(o, function () {
                    c.postSlide(o)
                })) : c.postSlide(o), void c.animateHeight()) : void (n !== !0 ? c.animateSlide(l, function () {
                    c.postSlide(o)
                }) : c.postSlide(o)))
            }, t.prototype.startLoad = function () {
                var e = this;
                e.options.arrows === !0 && e.slideCount > e.options.slidesToShow && (e.$prevArrow.hide(), e.$nextArrow.hide()), e.options.dots === !0 && e.slideCount > e.options.slidesToShow && e.$dots.hide(), e.$slider.addClass("slick-loading")
            }, t.prototype.swipeDirection = function () {
                var e, t, n, i, o = this;
                return e = o.touchObject.startX - o.touchObject.curX, t = o.touchObject.startY - o.touchObject.curY, n = Math.atan2(t, e), i = Math.round(180 * n / Math.PI), i < 0 && (i = 360 - Math.abs(i)), i <= 45 && i >= 0 ? o.options.rtl === !1 ? "left" : "right" : i <= 360 && i >= 315 ? o.options.rtl === !1 ? "left" : "right" : i >= 135 && i <= 225 ? o.options.rtl === !1 ? "right" : "left" : o.options.verticalSwiping === !0 ? i >= 35 && i <= 135 ? "down" : "up" : "vertical"
            }, t.prototype.swipeEnd = function (e) {
                var t, n, i = this;
                if (i.dragging = !1, i.interrupted = !1, i.shouldClick = !(i.touchObject.swipeLength > 10), void 0 === i.touchObject.curX) return !1;
                if (i.touchObject.edgeHit === !0 && i.$slider.trigger("edge", [i, i.swipeDirection()]), i.touchObject.swipeLength >= i.touchObject.minSwipe) {
                    switch (n = i.swipeDirection()) {
                        case"left":
                        case"down":
                            t = i.options.swipeToSlide ? i.checkNavigable(i.currentSlide + i.getSlideCount()) : i.currentSlide + i.getSlideCount(), i.currentDirection = 0;
                            break;
                        case"right":
                        case"up":
                            t = i.options.swipeToSlide ? i.checkNavigable(i.currentSlide - i.getSlideCount()) : i.currentSlide - i.getSlideCount(), i.currentDirection = 1
                    }
                    "vertical" != n && (i.slideHandler(t), i.touchObject = {}, i.$slider.trigger("swipe", [i, n]))
                } else i.touchObject.startX !== i.touchObject.curX && (i.slideHandler(i.currentSlide), i.touchObject = {})
            }, t.prototype.swipeHandler = function (e) {
                var t = this;
                if (!(t.options.swipe === !1 || "ontouchend" in document && t.options.swipe === !1 || t.options.draggable === !1 && e.type.indexOf("mouse") !== -1)) switch (t.touchObject.fingerCount = e.originalEvent && void 0 !== e.originalEvent.touches ? e.originalEvent.touches.length : 1, t.touchObject.minSwipe = t.listWidth / t.options.touchThreshold, t.options.verticalSwiping === !0 && (t.touchObject.minSwipe = t.listHeight / t.options.touchThreshold), e.data.action) {
                    case"start":
                        t.swipeStart(e);
                        break;
                    case"move":
                        t.swipeMove(e);
                        break;
                    case"end":
                        t.swipeEnd(e)
                }
            }, t.prototype.swipeMove = function (e) {
                var t, n, i, o, r, s = this;
                return r = void 0 !== e.originalEvent ? e.originalEvent.touches : null, !(!s.dragging || r && 1 !== r.length) && (t = s.getLeft(s.currentSlide), s.touchObject.curX = void 0 !== r ? r[0].pageX : e.clientX, s.touchObject.curY = void 0 !== r ? r[0].pageY : e.clientY, s.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(s.touchObject.curX - s.touchObject.startX, 2))), s.options.verticalSwiping === !0 && (s.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(s.touchObject.curY - s.touchObject.startY, 2)))), n = s.swipeDirection(), "vertical" !== n ? (void 0 !== e.originalEvent && s.touchObject.swipeLength > 4 && e.preventDefault(), o = (s.options.rtl === !1 ? 1 : -1) * (s.touchObject.curX > s.touchObject.startX ? 1 : -1), s.options.verticalSwiping === !0 && (o = s.touchObject.curY > s.touchObject.startY ? 1 : -1), i = s.touchObject.swipeLength, s.touchObject.edgeHit = !1, s.options.infinite === !1 && (0 === s.currentSlide && "right" === n || s.currentSlide >= s.getDotCount() && "left" === n) && (i = s.touchObject.swipeLength * s.options.edgeFriction, s.touchObject.edgeHit = !0), s.options.vertical === !1 ? s.swipeLeft = t + i * o : s.swipeLeft = t + i * (s.$list.height() / s.listWidth) * o, s.options.verticalSwiping === !0 && (s.swipeLeft = t + i * o), s.options.fade !== !0 && s.options.touchMove !== !1 && (s.animating === !0 ? (s.swipeLeft = null, !1) : void s.setCSS(s.swipeLeft))) : void 0)
            }, t.prototype.swipeStart = function (e) {
                var t, n = this;
                return n.interrupted = !0, 1 !== n.touchObject.fingerCount || n.slideCount <= n.options.slidesToShow ? (n.touchObject = {}, !1) : (void 0 !== e.originalEvent && void 0 !== e.originalEvent.touches && (t = e.originalEvent.touches[0]), n.touchObject.startX = n.touchObject.curX = void 0 !== t ? t.pageX : e.clientX, n.touchObject.startY = n.touchObject.curY = void 0 !== t ? t.pageY : e.clientY, void (n.dragging = !0))
            }, t.prototype.unfilterSlides = t.prototype.slickUnfilter = function () {
                var e = this;
                null !== e.$slidesCache && (e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.appendTo(e.$slideTrack), e.reinit())
            }, t.prototype.unload = function () {
                var t = this;
                e(".slick-cloned", t.$slider).remove(), t.$dots && t.$dots.remove(), t.$prevArrow && t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove(), t.$nextArrow && t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove(), t.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
            }, t.prototype.unslick = function (e) {
                var t = this;
                t.$slider.trigger("unslick", [t, e]), t.destroy()
            }, t.prototype.updateArrows = function () {
                var e, t = this;
                e = Math.floor(t.options.slidesToShow / 2), t.options.arrows === !0 && t.slideCount > t.options.slidesToShow && !t.options.infinite && (t.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), t.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === t.currentSlide ? (t.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), t.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : t.currentSlide >= t.slideCount - t.options.slidesToShow && t.options.centerMode === !1 ? (t.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), t.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : t.currentSlide >= t.slideCount - 1 && t.options.centerMode === !0 && (t.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), t.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
            }, t.prototype.updateDots = function () {
                var e = this;
                null !== e.$dots && (e.$dots.find("li").removeClass("slick-active").attr("aria-hidden", "true"), e.$dots.find("li").eq(Math.floor(e.currentSlide / e.options.slidesToScroll)).addClass("slick-active").attr("aria-hidden", "false"))
            }, t.prototype.visibility = function () {
                var e = this;
                e.options.autoplay && (document[e.hidden] ? e.interrupted = !0 : e.interrupted = !1)
            }, e.fn.slick = function () {
                var e, n, i = this, o = arguments[0], r = Array.prototype.slice.call(arguments, 1), s = i.length;
                for (e = 0; e < s; e++) if ("object" == typeof o || "undefined" == typeof o ? i[e].slick = new t(i[e], o) : n = i[e].slick[o].apply(i[e].slick, r), "undefined" != typeof n) return n;
                return i
            }
        })
    }, {jquery: 10}],
    17: [function (e, t, n) {
        (function (n) {
            jQuery = n.jQuery = e("jquery.js");
            (function (e, t, n) {
                (function () {
                    var e, t;
                    e = this.jQuery || window.jQuery, t = e(window), e.fn.stick_in_parent = function (n) {
                        var i, o, r, s, a, l, c, u, d, p, f, h, m;
                        for (null == n && (n = {}), p = n.sticky_class, s = n.inner_scrolling, d = n.recalc_every, u = n.parent, l = n.offset_top, a = n.spacer, r = n.bottoming, null == l && (l = 0), null == u && (u = void 0), null == s && (s = !0), null == p && (p = "is_stuck"), i = e(document), null == r && (r = !0), c = function (e) {
                            var t, n, i;
                            return window.getComputedStyle ? (i = e[0], t = window.getComputedStyle(e[0]), n = parseFloat(t.getPropertyValue("width")) + parseFloat(t.getPropertyValue("margin-left")) + parseFloat(t.getPropertyValue("margin-right")), "border-box" !== t.getPropertyValue("box-sizing") && (n += parseFloat(t.getPropertyValue("border-left-width")) + parseFloat(t.getPropertyValue("border-right-width")) + parseFloat(t.getPropertyValue("padding-left")) + parseFloat(t.getPropertyValue("padding-right"))), n) : e.outerWidth(!0)
                        }, f = function (n, o, f, h, m, g, v, y) {
                            var b, w, x, k, C, T, _, S, j, $, A, E;
                            if (!n.data("sticky_kit")) {
                                if (n.data("sticky_kit", !0), C = i.height(), _ = n.parent(), null != u && (_ = _.closest(u)), !_.length) throw"failed to find stick parent";
                                if (x = !1, b = !1, A = null != a ? a && n.closest(a) : e("<div />"), A && A.css("position", n.css("position")), S = function () {
                                    var e, t, r;
                                    if (!y) return C = i.height(), e = parseInt(_.css("border-top-width"), 10), t = parseInt(_.css("padding-top"), 10), o = parseInt(_.css("padding-bottom"), 10), f = _.offset().top + e + t, h = _.height(), x && (x = !1, b = !1, null == a && (n.insertAfter(A), A.detach()), n.css({
                                       
                                        top: ""
                                    }).removeClass(p), r = !0), m = n.offset().top - (parseInt(n.css("margin-top"), 10) || 0) - l, g = n.outerHeight(!0), v = n.css("float"), A && A.css({
                                        width: c(n),
                                        height: g,
                                        display: n.css("display"),
                                        "vertical-align": n.css("vertical-align"),
                                        float: v
                                    }), r ? E() : void 0
                                }, S(), g !== h) return k = void 0, T = l, $ = d, E = function () {
                                    var e, c, u, w, j, E;
                                    if (!y) return u = !1, null != $ && ($ -= 1, $ <= 0 && ($ = d, S(), u = !0)), u || i.height() === C || (S(), u = !0), w = t.scrollTop(), null != k && (c = w - k), k = w, x ? (r && (j = w + g + T > h + f, b && !j && (b = !1, n.css({
                                        position: "",
                                        bottom: "",
                                        top: T
                                    }).trigger("sticky_kit:unbottom"))), w < m && (x = !1, T = l, null == a && ("left" !== v && "right" !== v || n.insertAfter(A), A.detach()), e = {
                                        position: "",
                                        width: "",
                                        top: ""
                                    }, n.css(e).removeClass(p).trigger("sticky_kit:unstick")), s && (E = t.height(), g + l > E && (b || (T -= c, T = Math.max(E - g, T), T = Math.min(l, T), x && n.css({top: T + "px"}))))) : w > m && (x = !0, e = {
                                        position: "",
                                        top: T
                                    }, e.width = "border-box" === n.css("box-sizing") ? n.outerWidth() + "px" : n.width() + "px", n.css(e).addClass(p), null == a && (n.after(A), "left" !== v && "right" !== v || A.append(n)), n.trigger("sticky_kit:stick")), x && r && (null == j && (j = w + g + T > h + f), !b && j) ? (b = !0, "static" === _.css("position") && _.css({position: "relative"}), n.css({
                                        position: "",
                                        bottom: o,
                                        top: "auto"
                                    }).trigger("sticky_kit:bottom")) : void 0
                                }, j = function () {
                                    return S(), E()
                                }, w = function () {
                                    if (y = !0, t.off("touchmove", E), t.off("scroll", E), t.off("resize", j), e(document.body).off("sticky_kit:recalc", j), n.off("sticky_kit:detach", w), n.removeData("sticky_kit"), n.css({
                                        position: "",
                                        bottom: "",
                                        top: "",
                                        width: ""
                                    }), _.position("position", ""), x) return null == a && ("left" !== v && "right" !== v || n.insertAfter(A), A.remove()), n.removeClass(p)
                                }, t.on("touchmove", E), t.on("scroll", E), t.on("resize", j), e(document.body).on("sticky_kit:recalc", j), n.on("sticky_kit:detach", w), setTimeout(E, 0)
                            }
                        }, h = 0, m = this.length; h < m; h++) o = this[h], f(e(o));
                        return this
                    }
                }).call(this)
            }).call(n, t, void 0, void 0)
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {"jquery.js": 10}],
    18: [function (e, t, n) {
        function i() {
        }

        i.prototype = {
            on: function (e, t, n) {
                var i = this.e || (this.e = {});
                return (i[e] || (i[e] = [])).push({fn: t, ctx: n}), this
            }, once: function (e, t, n) {
                function i() {
                    o.off(e, i), t.apply(n, arguments)
                }

                var o = this;
                return i._ = t, this.on(e, i, n)
            }, emit: function (e) {
                var t = [].slice.call(arguments, 1), n = ((this.e || (this.e = {}))[e] || []).slice(), i = 0,
                    o = n.length;
                for (i; i < o; i++) n[i].fn.apply(n[i].ctx, t);
                return this
            }, off: function (e, t) {
                var n = this.e || (this.e = {}), i = n[e], o = [];
                if (i && t) for (var r = 0, s = i.length; r < s; r++) i[r].fn !== t && i[r].fn._ !== t && o.push(i[r]);
                return o.length ? n[e] = o : delete n[e], this
            }
        }, t.exports = i
    }, {}],
    19: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var o = function e() {
            function t() {
                jQuery(".btn").each(function (e) {
                    var t = jQuery(this);
                    t.hasClass("btn--orange") || t.hasClass("btn--orange-line") ? t.prepend('<svg width="100%" height="100%" class="btn__outline"> <defs> <lineargradient id="grad' + e + '" x1="50%" y1="0%" x2="50%" y2="100%"> <stop offset="0%" style="stop-color:' + o + '; stop-opacity:1"></stop> <stop offset="100%" style="stop-color:' + n + ';stop-opacity:1"></stop> </lineargradient> </defs> <rect ry="25" rx="25" height="100%" width="100%" y="0" x="0" stroke="url(#grad' + e + ')" stroke-width="2" fill="none"></rect></svg>') : (t.hasClass("btn--orange-light") || t.hasClass("btn--white")) && t.prepend('<svg width="100%" height="100%" class="btn__outline"> <rect ry="25" rx="25" height="100%" width="100%" y="0" x="0" stroke="#fff" stroke-width="2" fill="none"></rect></svg>')
                })
            }

            i(this, e);
            var n = "#f0891e", o = "#ed5921";
            t()
        };
        n.default = o, t.exports = n.default
    }, {}],
    20: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (t, n, i) {
                return n && e(t.prototype, n), i && e(t, i), t
            }
        }(), s = e("jquery"), a = i(s);
        e("slick-carousel");
        var l = e("enquire.js"), c = (i(l), e("_helper")), u = "<s>", d = function () {
            function e() {
                o(this, e);
                var n = this;
                RegExp.escape = function (e) {
                    return e.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&")
                }, function (e) {
                    var n;
                    n = "undefined" != typeof a.default && a.default ? a.default : {}, n.csv = {
                        defaults: {separator: ",", delimiter: '"', headers: !0}, hooks: {
                            castToScalar: function (e) {
                                var t = /\./;
                                if (isNaN(e)) return e;
                                if (t.test(e)) return parseFloat(e);
                                var n = parseInt(e);
                                return isNaN(n) ? null : n
                            }
                        }, parsers: {
                            parse: function (t, n) {
                                function i() {
                                    if (c = 0, u = "", n.start && n.state.rowNum < n.start) return l = [], n.state.rowNum++, void (n.state.colNum = 1);
                                    if (n.onParseEntry === e) a.push(l); else {
                                        var t = n.onParseEntry(l, n.state);
                                        t !== !1 && a.push(t)
                                    }
                                    l = [], n.end && n.state.rowNum >= n.end && (d = !0), n.state.rowNum++, n.state.colNum = 1
                                }

                                function o() {
                                    if (n.onParseValue === e) l.push(u); else {
                                        var t = n.onParseValue(u, n.state);
                                        t !== !1 && l.push(t)
                                    }
                                    u = "", c = 0, n.state.colNum++
                                }

                                var r = n.separator, s = n.delimiter;
                                n.state.rowNum || (n.state.rowNum = 1), n.state.colNum || (n.state.colNum = 1);
                                var a = [], l = [], c = 0, u = "", d = !1, p = RegExp.escape(r), f = RegExp.escape(s),
                                    h = /(D|S|\r\n|\n|\r|[^DS\r\n]+)/, m = h.source;
                                return m = m.replace(/S/g, p), m = m.replace(/D/g, f), h = new RegExp(m, "gm"), t.replace(h, function (e) {
                                    if (!d) switch (c) {
                                        case 0:
                                            if (e === r) {
                                                u += "", o();
                                                break
                                            }
                                            if (e === s) {
                                                c = 1;
                                                break
                                            }
                                            if (/^(\r\n|\n|\r)$/.test(e)) {
                                                o(), i();
                                                break
                                            }
                                            u += e, c = 3;
                                            break;
                                        case 1:
                                            if (e === s) {
                                                c = 2;
                                                break
                                            }
                                            u += e, c = 1;
                                            break;
                                        case 2:
                                            if (e === s) {
                                                u += e, c = 1;
                                                break
                                            }
                                            if (e === r) {
                                                o();
                                                break
                                            }
                                            if (/^(\r\n|\n|\r)$/.test(e)) {
                                                o(), i();
                                                break
                                            }
                                            throw new Error("CSVDataError: Illegal State [Row:" + n.state.rowNum + "][Col:" + n.state.colNum + "]");
                                        case 3:
                                            if (e === r) {
                                                o();
                                                break
                                            }
                                            if (/^(\r\n|\n|\r)$/.test(e)) {
                                                o(), i();
                                                break
                                            }
                                            if (e === s) throw new Error("CSVDataError: Illegal Quote [Row:" + n.state.rowNum + "][Col:" + n.state.colNum + "]");
                                            throw new Error("CSVDataError: Illegal Data [Row:" + n.state.rowNum + "][Col:" + n.state.colNum + "]");
                                        default:
                                            throw new Error("CSVDataError: Unknown State [Row:" + n.state.rowNum + "][Col:" + n.state.colNum + "]")
                                    }
                                }), 0 !== l.length && (o(), i()), a
                            }, splitLines: function (t, n) {
                                function i() {
                                    if (a = 0, n.start && n.state.rowNum < n.start) return l = "", void n.state.rowNum++;
                                    if (n.onParseEntry === e) s.push(l); else {
                                        var t = n.onParseEntry(l, n.state);
                                        t !== !1 && s.push(t)
                                    }
                                    l = "", n.end && n.state.rowNum >= n.end && (c = !0), n.state.rowNum++
                                }

                                var o = n.separator, r = n.delimiter;
                                n.state.rowNum || (n.state.rowNum = 1);
                                var s = [], a = 0, l = "", c = !1, u = RegExp.escape(o), d = RegExp.escape(r),
                                    p = /(D|S|\n|\r|[^DS\r\n]+)/, f = p.source;
                                return f = f.replace(/S/g, u), f = f.replace(/D/g, d), p = new RegExp(f, "gm"), t.replace(p, function (e) {
                                    if (!c) switch (a) {
                                        case 0:
                                            if (e === o) {
                                                l += e, a = 0;
                                                break
                                            }
                                            if (e === r) {
                                                l += e, a = 1;
                                                break
                                            }
                                            if ("\n" === e) {
                                                i();
                                                break
                                            }
                                            if (/^\r$/.test(e)) break;
                                            l += e, a = 3;
                                            break;
                                        case 1:
                                            if (e === r) {
                                                l += e, a = 2;
                                                break
                                            }
                                            l += e, a = 1;
                                            break;
                                        case 2:
                                            var t = l.substr(l.length - 1);
                                            if (e === r && t === r) {
                                                l += e, a = 1;
                                                break
                                            }
                                            if (e === o) {
                                                l += e, a = 0;
                                                break
                                            }
                                            if ("\n" === e) {
                                                i();
                                                break
                                            }
                                            if ("\r" === e) break;
                                            throw new Error("CSVDataError: Illegal state [Row:" + n.state.rowNum + "]");
                                        case 3:
                                            if (e === o) {
                                                l += e, a = 0;
                                                break
                                            }
                                            if ("\n" === e) {
                                                i();
                                                break
                                            }
                                            if ("\r" === e) break;
                                            if (e === r) throw new Error("CSVDataError: Illegal quote [Row:" + n.state.rowNum + "]");
                                            throw new Error("CSVDataError: Illegal state [Row:" + n.state.rowNum + "]");
                                        default:
                                            throw new Error("CSVDataError: Unknown state [Row:" + n.state.rowNum + "]")
                                    }
                                }), "" !== l && i(), s
                            }, parseEntry: function (t, n) {
                                function i() {
                                    if (n.onParseValue === e) s.push(l); else {
                                        var t = n.onParseValue(l, n.state);
                                        t !== !1 && s.push(t)
                                    }
                                    l = "", a = 0, n.state.colNum++
                                }

                                var o = n.separator, r = n.delimiter;
                                n.state.rowNum || (n.state.rowNum = 1), n.state.colNum || (n.state.colNum = 1);
                                var s = [], a = 0, l = "";
                                if (!n.match) {
                                    var c = RegExp.escape(o), u = RegExp.escape(r), d = /(D|S|\n|\r|[^DS\r\n]+)/,
                                        p = d.source;
                                    p = p.replace(/S/g, c), p = p.replace(/D/g, u), n.match = new RegExp(p, "gm")
                                }
                                return t.replace(n.match, function (e) {
                                    switch (a) {
                                        case 0:
                                            if (e === o) {
                                                l += "", i();
                                                break
                                            }
                                            if (e === r) {
                                                a = 1;
                                                break
                                            }
                                            if ("\n" === e || "\r" === e) break;
                                            l += e, a = 3;
                                            break;
                                        case 1:
                                            if (e === r) {
                                                a = 2;
                                                break
                                            }
                                            l += e, a = 1;
                                            break;
                                        case 2:
                                            if (e === r) {
                                                l += e, a = 1;
                                                break
                                            }
                                            if (e === o) {
                                                i();
                                                break
                                            }
                                            if ("\n" === e || "\r" === e) break;
                                            throw new Error("CSVDataError: Illegal State [Row:" + n.state.rowNum + "][Col:" + n.state.colNum + "]");
                                        case 3:
                                            if (e === o) {
                                                i();
                                                break
                                            }
                                            if ("\n" === e || "\r" === e) break;
                                            if (e === r) throw new Error("CSVDataError: Illegal Quote [Row:" + n.state.rowNum + "][Col:" + n.state.colNum + "]");
                                            throw new Error("CSVDataError: Illegal Data [Row:" + n.state.rowNum + "][Col:" + n.state.colNum + "]");
                                        default:
                                            throw new Error("CSVDataError: Unknown State [Row:" + n.state.rowNum + "][Col:" + n.state.colNum + "]")
                                    }
                                }), i(), s
                            }
                        }, helpers: {
                            collectPropertyNames: function (e) {
                                var t, n, i = [];
                                for (t in e) for (n in e[t]) e[t].hasOwnProperty(n) && i.indexOf(n) < 0 && "function" != typeof e[t][n] && i.push(n);
                                return i
                            }
                        }, toArray: function (t, i, o) {
                            i = i !== e ? i : {};
                            var r = {};
                            r.callback = o !== e && "function" == typeof o && o, r.separator = "separator" in i ? i.separator : n.csv.defaults.separator, r.delimiter = "delimiter" in i ? i.delimiter : n.csv.defaults.delimiter;
                            var s = i.state !== e ? i.state : {};
                            i = {
                                delimiter: r.delimiter,
                                separator: r.separator,
                                onParseEntry: i.onParseEntry,
                                onParseValue: i.onParseValue,
                                state: s
                            };
                            var a = n.csv.parsers.parseEntry(t, i);
                            return r.callback ? void r.callback("", a) : a
                        }, toArrays: function (t, i, o) {
                            i = i !== e ? i : {};
                            var r = {};
                            r.callback = o !== e && "function" == typeof o && o, r.separator = "separator" in i ? i.separator : n.csv.defaults.separator, r.delimiter = "delimiter" in i ? i.delimiter : n.csv.defaults.delimiter;
                            var s = [];
                            return i = {
                                delimiter: r.delimiter,
                                separator: r.separator,
                                onPreParse: i.onPreParse,
                                onParseEntry: i.onParseEntry,
                                onParseValue: i.onParseValue,
                                onPostParse: i.onPostParse,
                                start: i.start,
                                end: i.end,
                                state: {rowNum: 1, colNum: 1}
                            }, i.onPreParse !== e && i.onPreParse(t, i.state), s = n.csv.parsers.parse(t, i), i.onPostParse !== e && i.onPostParse(s, i.state), r.callback ? void r.callback("", s) : s
                        }, toObjects: function (t, i, o) {
                            i = i !== e ? i : {};
                            var r = {};
                            r.callback = o !== e && "function" == typeof o && o, r.separator = "separator" in i ? i.separator : n.csv.defaults.separator, r.delimiter = "delimiter" in i ? i.delimiter : n.csv.defaults.delimiter, r.headers = "headers" in i ? i.headers : n.csv.defaults.headers, i.start = "start" in i ? i.start : 1, r.headers && i.start++, i.end && r.headers && i.end++;
                            var s = [], a = [];
                            i = {
                                delimiter: r.delimiter,
                                separator: r.separator,
                                onPreParse: i.onPreParse,
                                onParseEntry: i.onParseEntry,
                                onParseValue: i.onParseValue,
                                onPostParse: i.onPostParse,
                                start: i.start,
                                end: i.end,
                                state: {rowNum: 1, colNum: 1},
                                match: !1,
                                transform: i.transform
                            };
                            var l = {
                                delimiter: r.delimiter,
                                separator: r.separator,
                                start: 1,
                                end: 1,
                                state: {rowNum: 1, colNum: 1}
                            };
                            i.onPreParse !== e && i.onPreParse(t, i.state);
                            var c = n.csv.parsers.splitLines(t, l), u = n.csv.toArray(c[0], i);
                            s = n.csv.parsers.splitLines(t, i), i.state.colNum = 1, i.state.rowNum = u ? 2 : 1;
                            for (var d = 0, p = s.length; p > d; d++) {
                                for (var f = n.csv.toArray(s[d], i), h = {}, m = 0; m < u.length; m++) h[u[m]] = f[m];
                                a.push(i.transform !== e ? i.transform.call(e, h) : h), i.state.rowNum++
                            }
                            return i.onPostParse !== e && i.onPostParse(a, i.state), r.callback ? void r.callback("", a) : a
                        }, fromArrays: function (t, i, o) {
                            i = i !== e ? i : {};
                            var r = {};
                            r.callback = o !== e && "function" == typeof o && o, r.separator = "separator" in i ? i.separator : n.csv.defaults.separator, r.delimiter = "delimiter" in i ? i.delimiter : n.csv.defaults.delimiter;
                            var s, a, l, c, u = "";
                            for (l = 0; l < t.length; l++) {
                                for (s = t[l], a = [], c = 0; c < s.length; c++) {
                                    var d = s[c] === e || null === s[c] ? "" : s[c].toString();
                                    d.indexOf(r.delimiter) > -1 && (d = d.replace(r.delimiter, r.delimiter + r.delimiter));
                                    var p = "\n|\r|S|D";
                                    p = p.replace("S", r.separator), p = p.replace("D", r.delimiter), d.search(p) > -1 && (d = r.delimiter + d + r.delimiter), a.push(d)
                                }
                                u += a.join(r.separator) + "\r\n"
                            }
                            return r.callback ? void r.callback("", u) : u
                        }, fromObjects: function (t, i, o) {
                            i = i !== e ? i : {};
                            var r = {};
                            if (r.callback = o !== e && "function" == typeof o && o, r.separator = "separator" in i ? i.separator : n.csv.defaults.separator, r.delimiter = "delimiter" in i ? i.delimiter : n.csv.defaults.delimiter, r.headers = "headers" in i ? i.headers : n.csv.defaults.headers, r.sortOrder = "sortOrder" in i ? i.sortOrder : "declare", r.manualOrder = "manualOrder" in i ? i.manualOrder : [], r.transform = i.transform, "string" == typeof r.manualOrder && (r.manualOrder = n.csv.toArray(r.manualOrder, r)), r.transform !== e) {
                                var s = t;
                                t = [];
                                var a;
                                for (a = 0; a < s.length; a++) t.push(r.transform.call(e, s[a]))
                            }
                            var l = n.csv.helpers.collectPropertyNames(t);
                            if ("alpha" === r.sortOrder && l.sort(), r.manualOrder.length > 0) {
                                var c, u = [].concat(r.manualOrder);
                                for (c = 0; c < l.length; c++) u.indexOf(l[c]) < 0 && u.push(l[c]);
                                l = u
                            }
                            var d, c, p, f, h = [];
                            for (r.headers && h.push(l), d = 0; d < t.length; d++) {
                                for (p = [], c = 0; c < l.length; c++) f = l[c], p.push(f in t[d] && "function" != typeof t[d][f] ? t[d][f] : "");
                                h.push(p)
                            }
                            return n.csv.fromArrays(h, i, r.callback)
                        }
                    }, n.csvEntry2Array = n.csv.toArray, n.csv2Array = n.csv.toArrays, n.csv2Dictionary = n.csv.toObjects, "undefined" != typeof t && t.exports && (t.exports = n.csv)
                }.call(this), window.googleChart = function () {
                    n.drawVisualization()
                }, (0, a.default)(window).on("resize", (0, c.debounce)(function () {
                    n.drawVisualization()
                }, 200)), window.emitter.on("tabChange", function () {
                    n.drawVisualization()
                }), google.charts.load("visualization", "1", {packages: ["corechart", "controls"]}), google.charts.setOnLoadCallback(window.googleChart)
            }

            return r(e, [{
                key: "csvJSON", value: function (e) {
                    for (var t = e.split("\n"), n = [], i = t[0].split(","), o = 1; o < t.length; o++) {
                        for (var r = {}, s = t[o].split(","), a = 0; a < i.length; a++) r[i[a]] = s[a];
                        n.push(r)
                    }
                    return JSON.parse(JSON.stringify(n).replace(/\\r/g, ""))
                }
            }, {
                key: "csvNumericHeaderConverter", value: function (e) {
                    for (var t = e.split("\n"), n = t[0].split(","), i = 0; i < n.length; i++) a.default.isNumeric(n[i]) && (n[i] = u + n[i] + "");
                    return t[0] = n.join(","), t.join("\n")
                }
            }, {
                key: "drawVisualization", value: function () {
                    var e = this;
                    (0, a.default)(".chart__wrapper").each(function (t, n) {
                        var i = (0, a.default)(n), o = i.data("csv");
                        e.getCsv(i, o, null, t)
                    })
                }
            }, {
                key: "getCsv", value: function (e, t, n, i) {
                    var o = this, r = n || !1, s = [];
                    a.default.ajax({url: t}).done(function (t) {
                        var n = a.default.csv.toArrays(o.csvNumericHeaderConverter(t), {onParseValue: a.default.csv.hooks.castToScalar}),
                            l = e.attr("id"), c = e.data("csv"), u = e.attr("data-sum"), d = e.attr("data-chart"),
                            p = e.data("xaxistitle"), f = e.data("yaxistitle"), h = {
                                yAxisMin: e.data("y-axis-min"),
                                yAxisMax: e.data("y-axis-max"),
                                yAxisRange: e.data("y-axis-range"),
                                yDecimal: e.data("y-decimal")
                            }, m = {
                                xAxisMin: e.data("x-axis-min"),
                                xAxisMax: e.data("x-axis-max"),
                                xAxisRange: e.data("x-axis-range"),
                                xAxisStep: e.data("x-axis-step")
                            }, g = {
                                0: {shape: "circle", color: "#ce0b62"},
                                1: {shape: "square", color: "#3a549d"},
                                2: {shape: "triangle", color: "#d9b33b"},
                                3: {shape: "circle", color: "#0db253"},
                                4: {shape: "square", color: "#d9541c"},
                                5: {shape: "triangle", color: "#00c1d3"},
                                6: {shape: "circle", color: "#32484c"},
                                7: {shape: "square", color: "#92388c"},
                                8: {shape: "triangle", color: "#e4ff00"},
                                9: {shape: "circle", color: "#744b40"},
                                10: {shape: "square", color: "#c1bcb7"},
                                11: {shape: "triangle", color: "#ce0b62"}
                            };
                        if (r) {
                            var v = [];
                            if ("male" == r.toLowerCase()) var v = [2, 4]; else if ("female" == r.toLowerCase()) var v = [1, 3];
                            for (var y = 0; y < n.length; y++) {
                                var b = n[y];
                                s[y] = [];
                                for (var w = 0; w < b.length; w++) v.indexOf(w) == -1 && s[y].push(b[w])
                            }
                            s[0][2] = {role: "style"}
                        }
                        "PyramidChart" == d ? o.getMedianData(c, u) : s.length > 0 ? o.drawChart(e, s, l, d, g, p, f, h, m, r, i) : o.drawChart(e, n, l, d, g, p, f, h, m, "normal", i)
                    }).fail(function (e) {
                        console.log("fail to get csv", e)
                    })
                }
            }, {
                key: "getMedianData", value: function (e, t) {
                    var n = this;
                    a.default.ajax({url: e}).done(function (e) {
                        var i = n.csvJSON(e);
                        n.getSumData(t, i)
                    }).fail(function (e) {
                        console.log("fail to get median data", e)
                    })
                }
            }, {
                key: "getSumData", value: function (e, t) {
                    var n = this;
                    a.default.ajax({url: e}).done(function (e) {
                        window.sumData = n.csvJSON(e), n.createList(t), n.getChartForYear(t)
                    }).fail(function (e) {
                        console.log("fail to get sum data", e)
                    })
                }
            }, {
                key: "getChartForYear", value: function (e) {
                    var t = this;
                    (0, a.default)(".chart__item").each(function () {
                        var n = (0, a.default)(this), i = n.data("year"), o = n.data("csv");
                        a.default.ajax({url: o}).done(function (o) {
                            t.csvJSON(o);
                            t.drawMedian(n, i, e), t.calculateSum(i)
                        }).fail(function (e) {
                            console.log("fail to get sum data", e)
                        })
                    })
                }
            }, {
                key: "drawMedian", value: function (e, t, n) {
                    var i = 0, o = (0, a.default)(".median", e);
                    a.default.each(n, function (e) {
                        n[e].Year == t && (i = n[e].Median)
                    });
                    var r = 470, s = 37;
                    (0, a.default)(window).width() < 768 && (r = 338, s = 37);
                    var l = r / 85, c = l * parseFloat(i) - s, u = parseFloat(i).toFixed(1);
                    o.css("top", r - parseInt(c) + "px").fadeIn(), (0, a.default)("label", o).html(u)
                }
            }, {
                key: "calculateSum", value: function (e) {
                    var t = this, n = window.sumData, i = 0, o = 0;
                    a.default.each(n, function (t) {
                        n[t].Year == e && (i = parseFloat(n[t].MaleSum), o = parseFloat(n[t].FemaleSum))
                    }), t.drawSum({male: i.toFixed(1), female: o.toFixed(1)}, e)
                }
            }, {
                key: "drawSum", value: function (e, t) {
                    (0, a.default)("#" + t + "-male-sum").html(e.male), (0, a.default)("#" + t + "-female-sum").html(e.female)
                }
            }, {
                key: "drawChart", value: function (e, t, n, i, o, r, s, l, c, d, p) {
                    var f = this, h = d || "normal", m = 1, g = "out", v = 0, y = [],
                        b = {top: "5%", left: "10%", right: "10%", height: "80%"}, w = "100%", x = 0;
                    if ("normal" == h.toLowerCase() && f.createLegend(e, t, o, i), "male" == h.toLowerCase() || "female" == h.toLowerCase()) b = {
                        top: "0",
                        left: "30",
                        right: "0",
                        height: "90%"
                    }; else {
                        if ("number" == typeof c.xAxisMin && "number" == typeof c.xAxisMax && "number" == typeof c.xAxisRange) ; else for (var k = 0; k < t.length; k++) "number" == typeof c.xAxisStep ? 1 === k ? t[k][0] = t[k][0] + "" : (k - 1) % c.xAxisStep === 0 ? t[k][0] = t[k][0] + "" : t[k][0] = "" : t[k][0] = t[k][0] + "", 0 !== k && "" !== t[k][0] && v++;
                        for (var C = 0, k = 0; k < t.length; k++) C = Number(t[k][1]) > C ? Number(t[k][1]) : C, b.left = "100";
                        var T = function (e, t) {
                            var e = (0, a.default)("<span>" + e + "</span>").css({font: t}),
                                n = (0, a.default)('<div style="display: inline-block; height: 0px;"></div>'),
                                i = (0, a.default)("<div></div>");
                            i.append(e, n);
                            var o = (0, a.default)("body");
                            o.append(i);
                            try {
                                var r = e.outerWidth()
                            } finally {
                                i.remove()
                            }
                            return r
                        }, _ = 1;
                        if ("" !== l.yDecimal) if ("false" === l.yDecimal) ; else if ("undefined" != typeof l.yDecimal) {
                            var S = l.yDecimal + "", j = S.split(",");
                            "true" === j[0] && (_ = j.length > 1 ? j[1] : 1)
                        }
                        C = C.toFixed(_) + "0", x = T(C, "12px Arial");
                        var $ = .1 * (0, a.default)(".chart__wrapper").eq(p).outerWidth();
                        "undefined" != typeof s && s.length > 0 && (x += 35), x < $ && (x = $), b.left = x
                    }
                    "male" == h.toLowerCase() && (m = -1, g = "none", b.left = "100", b.right = "30", c.xAxisRange = 50), "female" == h.toLowerCase() && (g = "in", b.left = "30", b.right = "100", c.xAxisRange = 50);
                    var A = google.visualization.arrayToDataTable(t, !1),
                        E = new google.visualization.NumberFormat({pattern: "####"}), O = 35 * A.getNumberOfRows();
                    (0, a.default)(window).width() < 768 ? (O = 20 * A.getNumberOfRows(), "male" == h.toLowerCase() && (b.left = "10", b.right = "30", c.xAxisRange = 100), "female" == h.toLowerCase() && (b.left = "30", b.right = "10", c.xAxisRange = 100)) : "male" != h.toLowerCase() && "female" != h.toLowerCase() || (O = 30 * A.getNumberOfRows()), E.format(A, 0);
                    var D = [];
                    if ("number" == typeof l.yAxisMin && "number" == typeof l.yAxisMax && "number" == typeof l.yAxisRange) for (var k = l.yAxisMin; k <= l.yAxisMax; k += l.yAxisRange) D.push(k);
                    var q = Number(e.css("min-height").replace("px", ""));
                    O = O < q ? q : O, O > 500 && (O = 500);
                    var P = new google.visualization.ChartWrapper({
                        chartType: i, containerId: n, dataTable: A, options: {
                            width: w,
                            height: O,
                            pointSize: 9,
                            focusTarget: "category",
                            chartArea: b,
                            legend: {position: "none"},
                            tooltip: {isHtml: !0},
                            annotation: {column_id: {style: "line"}},
                            vAxis: {
                                textStyle: {fontSize: 12},
                                textPosition: g,
                                titleTextStyle: {italic: !1},
                                title: s,
                                minValue: l.yAxisMin
                            },
                            hAxis: {
                                gridlines: {count: -1, color: "#dfdfdf"},
                                format: "0",
                                textStyle: {fontSize: 12},
                                titleTextStyle: {italic: !1},
                                direction: m,
                                title: r
                            },
                            bar: {groupWidth: "80%"},
                            series: {
                                0: {pointShape: o[0].shape, color: o[0].color},
                                1: {pointShape: o[1].shape, color: o[1].color},
                                2: {pointShape: o[2].shape, color: o[2].color},
                                3: {pointShape: o[3].shape, color: o[3].color},
                                4: {pointShape: o[4].shape, color: o[4].color},
                                5: {pointShape: o[5].shape, color: o[5].color},
                                6: {lineDashStyle: [4, 2], pointShape: o[6].shape, color: o[6].color},
                                7: {lineDashStyle: [4, 2], pointShape: o[7].shape, color: o[7].color},
                                8: {lineDashStyle: [4, 2], pointShape: o[8].shape, color: o[8].color},
                                9: {lineDashStyle: [4, 2], pointShape: o[9].shape, color: o[9].color},
                                10: {lineDashStyle: [4, 2], pointShape: o[10].shape, color: o[10].color},
                                11: {lineDashStyle: [4, 2], pointShape: o[11].shape, color: o[11].color}
                            }
                        }
                    });
                    if (0 !== D.length && (P.setOption("Axis.viewWindow", {
                        min: l.yAxisMin,
                        max: l.yAxisMax
                    }), P.setOption("vAxis.ticks", D)), "" !== l.yDecimal) if ("false" === l.yDecimal) ; else if ("undefined" != typeof l.yDecimal) {
                        var S = l.yDecimal + "", j = S.split(","), N = "0.";
                        if ("true" === j[0]) {
                            if (j.length > 1) for (var k = 0; k < j[1]; k++) N += "0"; else N = "0.00";
                            P.setOption("vAxis.format", N)
                        }
                    }
                    var L = [];
                    if ("number" == typeof c.xAxisMin && "number" == typeof c.xAxisMax && "number" == typeof c.xAxisRange) {
                        for (var k = c.xAxisMin; k <= c.xAxisMax; k += c.xAxisRange) L.push(k);
                        P.setOption("hAxis.viewWindow", {
                            min: c.xAxisMin,
                            max: c.xAxisMax
                        }), P.setOption("hAxis.ticks", L), "male" != h.toLowerCase() && "female" != h.toLowerCase() || P.setOption("hAxis.gridlines", {
                            count: -1,
                            color: "#ffffff"
                        }), P.setOption("bar", {groupWidth: "100%"})
                    }
                    if (google.visualization.events.addListener(P, "ready", function () {
                        function e(e) {
                            "LineChart" !== i ? (0, a.default)(".google-visualization-tooltip li").each(function () {
                                if ((0, a.default)(this).find(".google-visualization-tooltip-square").addClass("forceSquare"), (0, a.default)(this).find('span:contains("' + u + '")')) {
                                    var e = (0, a.default)(this).find("span:first").text().replace(u, "");
                                    (0, a.default)(this).find("span:first").text(e)
                                }
                            }) : (0, a.default)(".google-visualization-tooltip li").each(function () {
                                if ((0, a.default)(this).find(".google-visualization-tooltip-square").removeClass("forceSquare"), (0, a.default)(this).find('span:contains("' + u + '")')) {
                                    var e = (0, a.default)(this).find("span:first").text().replace(u, "");
                                    (0, a.default)(this).find("span:first").text(e)
                                }
                            })
                        }

                        google.visualization.events.addListener(P.getChart(), "onmouseover", e), google.visualization.events.addListener(P.getChart(), "select", e)
                    }), P.draw(), "female" == h.toLowerCase()) for (var H, M = document.querySelectorAll('[text-anchor="start"]'), k = 0; k < M.length; k++) H = parseInt(M[k].getAttribute("x")), M[k].setAttribute("x", "0");
                    (0, a.default)(".chart__wrapper").eq(p).find("svg text").closest("g").each(function (e) {
                        if (e < v) {
                            var t = (0, a.default)(this).find("text").eq(0), n = t.attr("x");
                            void 0 !== t.attr("transform") && (t.attr("x", Number(t.attr("x")) + Number(t.parent()[0].getBoundingClientRect().width) / 2), t.attr("y", Number(t.attr("y")) + 3), n -= 2);
                            var i = (0, a.default)(this).closest("svg").find("> g > rect"),
                                o = Number(i.attr("y")) + Number(i.attr("height"));
                            y.push({x_pos: n, y_pos: o})
                        }
                        var r = ((0, a.default)(".chart__wrapper").eq(p).find("[clip-path]").position().left - (0, a.default)(".chart__wrapper").eq(p).find("svg").position().left, (0, a.default)(".chart__wrapper").eq(p).data("xaxistitle"));
                        x <= Number(n) && (0, a.default)(this).find("text").eq(0).html() !== r && ((0, a.default)(this).closest(".chart__wrapper svg").parent().prepend('<div style="position: absolute;z-index: 0;top: 0;left: ' + n + "px; width:1px; height: " + o + 'px; background-color: #cccccc;"></div>'), (0, a.default)(this).closest("svg").find("> rect").attr("fill", "transparent"), (0, a.default)(this).closest("svg").css({
                            position: "relative",
                            "z-index": "1"
                        })), "number" == typeof c.xAxisMin && "number" == typeof c.xAxisMax && "number" == typeof c.xAxisRange
                    })
                }
            }, {
                key: "createLegend", value: function (e, t, n, i) {
                    e.next(".chart__legend").remove(), e.after('<div class="chart__legend"><div class="legend-left legend-half"></div> <div class="legend-right legend-half"></div></div>');
                    for (var o, r = [], s = e.next(".chart__legend").find(".legend-left"), a = e.next(".chart__legend").find(".legend-right"), l = 1; l < t[0].length; l++) r.push(t[0][l]);
                    for (var l = 0; l < r.length; l++) if (o = l < r.length / 2 ? s : a, r[l].indexOf(u) !== -1 && (r[l] = r[l].replace(u, "")), "ColumnChart" === i) {
                        o.append('<div class="legend-item legend-bar legend-0"><div class="marker square"></div><div class="legend-description"></div></div>');
                        var c = o.find(".legend-item:last-child");
                        c.find(".legend-description").text(r[l]), c.find(".marker").css({"background-color": n[l].color}), c.find(".marker").css({border: "0"})
                    } else {
                        o.append('<div class="legend-item legend-' + l + '"> <div class="legend-line"> <div class="marker"></div> </div> <div class="legend-description"></div></div>');
                        var c = o.find(".legend-item:last-child");
                        c.find(".legend-description").text(r[l]), c.find(".legend-line").css({"border-color": n[l].color}), c.find(".marker").addClass(n[l].shape)
                    }
                }
            }, {
                key: "createList", value: function (e) {
                    var t = this;
                    a.default.each(e, function (n) {
                        if (e[n].Year) {
                            var i = (0, a.default)("#chartListingItem").html(), o = i.replace(/{#year#}/g, e[n].Year);
                            (0, a.default)(".chart__listing").append(o), (0, a.default)(".chart__listing .chart__item:last-child .chart__gender").each(function (e, n) {
                                var i = (0, a.default)(n), o = i.data("csv"), r = i.data("gender");
                                t.getCsv(i, o, r)
                            })
                        }
                    }), (0, a.default)(".chart__listing").hasClass("slick-initialized") && ((0, a.default)(".chart__listing").slick("unslick"), (0, a.default)(".chart__listing .btn-slide").remove());
                    var n = !1, i = (0, a.default)(".chart__listing").slick({
                            fade: !0,
                            infinite: !0,
                            pauseOnHover: !1,
                            autoplay: !0,
                            autoplaySpeed: 5e3
                        }).on("beforeChange", function (e, t, o, r) {
                            r == t.slideCount - 1 && (i.slick("slickPause").slick("setOption", "autoplay", !1, !0), (0, a.default)(".js-play-slide").removeClass("is-active"), n = !0)
                        }),
                        o = '<button type="button" class="js-play-slide btn-slide is-active"><i class="icon icon-play"></i></button>"',
                        r = '<button type="button" class="js-stop-slide btn-slide"><i class="icon icon-stop"></i></button>"';
                    (0, a.default)(o).appendTo(".chart__listing"), (0, a.default)(r).appendTo(".chart__listing"), (0, a.default)(".js-play-slide").on("click", function (e) {
                        e.preventDefault();
                        var t = (0, a.default)(this);
                        t.toggleClass("is-active"), n ? (t.hasClass("is-active") && i.slick("slickGoTo", 0).slick("slickPlay").slick("setOption", "autoplay", !0, !0), n = !1) : t.hasClass("is-active") ? i.slick("slickPlay").slick("setOption", "autoplay", !0, !0) : i.slick("slickPause").slick("setOption", "autoplay", !1, !0)
                    }), (0, a.default)(".js-stop-slide").on("click", function (e) {
                        i.slick("slickGoTo", 0).slick("slickPause").slick("setOption", "autoplay", !1, !0), (0, a.default)(".js-play-slide").removeClass("is-active")
                    })
                }
            }]), e
        }();
        n.default = d, t.exports = n.default
    }, {_helper: 42, "enquire.js": 6, jquery: 10, "slick-carousel": 16}],
    21: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (t, n, i) {
                return n && e(t.prototype, n), i && e(t, i), t
            }
        }();
        e("select2");
        var s = e("jquery.multiselect.custom"), a = (i(s), e("dot")), l = i(a), c = e("enquire.js"), u = i(c),
            d = e("_helper"), p = function () {
                function e() {
                    o(this, e), jQuery(".select-filter").each(function () {
                        var e = jQuery(this), t = jQuery(this).data("placeholder");
                        "multiple" == jQuery(this).attr("multiple") ? e.multiselect({
                            selectAll: !0,
                            texts: {placeholder: t},
                            onControlClose: function () {
                                T()
                            }
                        }) : e.on("change", function () {
                            T()
                        }), e.find(".ms-selectall").on("click", function (n) {
                            e.find("option:selected").length == e.find("option").length && e.text(t)
                        })
                    }), jQuery(".banner").on("click", function () {
                        $(this).is(".image-bg") && $(".ms-options").removeClass("ms-active")
                    });
                    var t = jQuery(".filter--theme"), n = t.val(), i = t.html(), r = jQuery(".filter--type"), s = r.val(),
                        a = r.html(), c = (t.data("pathname"), jQuery(".listing-container")),
                        p = jQuery(".listing-items", c), f = !1, h = !1, m = function () {
                            if (n = t.val(), "reference" == n) {
                                var e = r.find('option[value="publications"]');
                                e.prop("selected", !0), r.niceSelect("update"), r.next(".ms-options-wrap").find("button span").text(e.text()), f = !0
                            } else f && (r.html(a), r.niceSelect("update"))
                        }, g = function () {
                            if (s = r.val(), n = t.val(), "publications" != s) {
                                t.find('option[value="reference"]').remove(), t.multiselect("reload"), h = !0;
                                var e = r.find('option[value="' + r.val() + '"]');
                                e.prop("selected", !0), r.niceSelect("update"), "reference" == n && (t.multiselect("reset"), setTimeout(function () {
                                    jQuery(".filter--type").find(".list .option.selected").trigger("click")
                                }, 500))
                            } else if (h) {
                                var o = t.val();
                                t.html(i), t.val(o), t.multiselect("reload")
                            }
                        };
                    t.on("change", function () {
                        m()
                    }), r.on("change", function () {
                        g()
                    });
                    var v = this;
                    v.endPoint = t.data("endpoint");
                    var y = l.default.template(jQuery("#doTListingItem").html()), b = function (e, t) {
                        var n = t || !1, i = y(e);
                        n ? c.append(i) : (p.remove(), c.html(i)), "all" != r.val() && "publications" != r.val() && 0 != r.val().length && jQuery(".reference.listing-items__wrap").hide(), jQuery(".listing-items__wrap")[0] && jQuery(".items-list__link").matchHeight(), jQuery(".listing-container").find(".items-list").each(function () {
                            var e = jQuery(this), t = e.attr("href"), n = t.split("?")[0], i = r.val(), o = "tab-" + i,
                                s = e.closest(".listing-container").data(o);
                            n && e.attr("href", n + "?tab=" + s)
                        }), u.default.register("screen and (max-width:" + d.bp.minDesktop + "px)", {
                            match: function () {
                                jQuery(".btn-accordion__list").unbind("click");
                                var e = function (e) {
                                    var t = e.data("open") || "Open accordion", n = e.data("close") || "Close accordion",
                                        i = e.parent(".items__title").parent(".listing-items__img-wrap");
                                    e.hasClass("is-active") ? (e.find("span").text(n), e.find(".icon").removeClass("icon-plus").addClass("icon-minus"), i.siblings(".listing-items__list-wrap").find(".items-container").slideDown(300, function () {
                                        jQuery(this).addClass("is-active")
                                    }), e.parent(".items__title").addClass("items__title--no-radius")) : (e.find("span").text(t), e.find(".icon").removeClass("icon-minus").addClass("icon-plus"), i.siblings(".listing-items__list-wrap").find(".items-container").slideUp().hide(300, function () {
                                        jQuery(this).removeClass("is-active"), e.parent(".items__title").removeClass("items__title--no-radius")
                                    }))
                                };
                                jQuery(".listing-area .listing-items").find(".btn-accordion__list").addClass("is-active"), jQuery(".btn-accordion__list").each(function () {
                                    e(jQuery(this))
                                }), jQuery(".btn-accordion__list").on("click", function () {
                                    jQuery(this).toggleClass("is-active"), e(jQuery(this))
                                })
                            }, unmatch: function () {
                                jQuery(".items__title").removeClass("items__title--no-radius"), jQuery(".items-container").show(), jQuery(".items-list__link").matchHeight(), jQuery(".btn-accordion__list").unbind("click")
                            }
                        })
                    }, w = $(location).attr("href"), x = w.split("/"), k = x[x.length - 2], C = x[x.length - 1];
                    "search-by-theme" === k && "?type=publications" === C && ("?theme=reference" !== k && "?type=publications" !== C ? (t.find('option[value="reference"]').remove(), t.multiselect("reload"), h = !0) : (r.find('option:not([value="publications"])').remove(), r.niceSelect("update")));
                    var T = function () {
                        var e = t.val(), n = [];
                        n.push(r.val());
                        var i = {theme: e, type: n};
                        v.ajaxAPI(i, function (o) {
                            var s = [], a = "", l = function (e) {
                                var t = "";
                                return 0 !== e.length && (t = "&"), t
                            }, c = function (e, t, n, i) {
                                a = l(i), e.length == t.find("option").length ? t.find('option[value="publications"]') ? i.push(a + n + "=publications") : i.push(a + n + "=all") : jQuery.each(e, function (e, t) {
                                    0 == e ? i.push(a + n + "=" + encodeURIComponent(t)) : i.push("|" + encodeURIComponent(t))
                                })
                            };
                            c(e, t, "theme", s), c(n, r, "type", s);
                            var u = s;
                            u = "" != u ? "?" + u : u;
                            var d = window.location.href.split("?")[0] + u;
                            d = d.replace(/,/g, ""), history.pushState(i, "filter", d);
                            var p = o;
                            if (e.length && (p = p.filter(function (t) {
                                var n = !1;
                                if (jQuery.each(e, function (e, i) {
                                    t.theme.toLowerCase() == i.toLowerCase() && (n = !0)
                                }), n) return t
                            })), n.length) try {
                                jQuery.each(p, function (e, t) {
                                    p[e].data = p[e].data.filter(function (e) {
                                        var t = !1;
                                        if (jQuery.each(n, function (n, i) {
                                            jQuery.inArray(i.toLowerCase(), e.type) > -1 && (t = !0)
                                        }), t) return e
                                    })
                                })
                            } catch (e) {
                                console.log("We see the error: " + e)
                            }
                            b(p)
                        })
                    }, _ = (0, d.getParameterByName)("theme"), S = (0, d.getParameterByName)("type");
                    if (_) {
                        var j = _.split("|");
                        t.find("option").each(function () {
                            jQuery.inArray(jQuery(this).val(), j) > -1 && jQuery(this).prop("selected", !0)
                        }), t.multiselect("reload")
                    }
                    if (S) {
                        var A = S.split("|");
                        r.find("option").each(function () {
                            jQuery.inArray(jQuery(this).val(), A) > -1 && jQuery(this).prop("selected", !0)
                        }), r.multiselect("reload")
                    }
                    m(), g(), v.ajaxAPI({}, function (e) {
                        T()
                    }), jQuery(".ms-selectall").on("click", function () {
                        setTimeout(function () {
                            m()
                        }, 100)
                    })
                }

                return r(e, [{
                    key: "templateSelection", value: function (e, t) {
                        return Array.isArray(e) && (e = null == e[0] ? "All" : e.join(", ")), e
                    }
                }, {
                    key: "ajaxAPI", value: function (e, t, n) {
                        var i = n || this.endPoint;
                        jQuery.ajax({url: i, method: "get", data: e, dataType: "json", success: t, cache: !0})
                    }
                }]), e
            }();
        n.default = p, t.exports = n.default
    }, {_helper: 42, dot: 1, "enquire.js": 6, "jquery.multiselect.custom": 43, select2: 15}],
    22: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var o = function e() {
            i(this, e);
            var t = 0, n = function (e, t) {
                var n = e.data("open") || "Open accordion", i = e.data("close") || "Close accordion",
                    o = e.closest(".accordion__container");
                e.hasClass("is-active") ? (e.find("span").text(i), e.find(".icon").removeClass("icon-plus").addClass("icon-minus"), o.find(".accordion__content").slideDown(300, function () {
                    jQuery(this).addClass("is-active")
                })) : (e.find("span").text(n), e.find(".icon").removeClass("icon-minus").addClass("icon-plus"), o.find(".accordion__content").slideUp().hide(300, function () {
                    jQuery(this).removeClass("is-active")
                }))
            };
            jQuery(".btn-accordion").each(function () {
                n(jQuery(this), t), t++
            }), jQuery(".btn-accordion").on("click", function () {
                jQuery(this).toggleClass("is-active"), n(jQuery(this))
            })
        };
        n.default = o, t.exports = n.default
    }, {}],
    23: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = e("jquery");
        i(r);
        e("sticky-kit");
        var s = e("enquire.js"), a = i(s), l = e("_helper"), c = function e() {
            o(this, e), a.default.register("screen and (min-width:" + l.bp.minDesktop + "px)", {
                match: function () {
                    jQuery(".backtotop__screen").stick_in_parent()
                }, unmatch: function () {
                    jQuery(".backtotop__screen").trigger("sticky_kit:detach")
                }
            })
        };
        n.default = c, t.exports = n.default
    }, {_helper: 42, "enquire.js": 6, jquery: 10, "sticky-kit": 17}],
    24: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = e("jquery");
        i(r);
        e("slick-carousel"), e("jquery-match-height");
        var s = e("enquire.js"), a = i(s), l = e("_helper"), c = function e() {
            o(this, e), jQuery(".c-indicators__item").matchHeight(), window.emitter.on("fontSizeChange", function () {
                jQuery(".c-indicators__item").css("height", "auto").matchHeight._update()
            }), a.default.register("screen and (max-width:" + l.bp.maxMobile + "px)", {
                match: function () {
                    jQuery(".c-indicators__list").hasClass("slick-initialized") && jQuery(".c-indicators__list").slick("unslick"), jQuery(".c-indicators__list").slick({
                        infinite: !1,
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: !0,
                        dots: !0,
                        mobileFirst: !0,
                        rows: 2
                    }), jQuery(".c-indicators__list .slick-slide > div:first-child").matchHeight()
                }
            }), a.default.register("screen and (min-width:" + (l.bp.maxMobile + 1) + "px)", {
                match: function () {
                    jQuery(".c-indicators__list").hasClass("slick-initialized") && jQuery(".c-indicators__list").slick("unslick"), jQuery(".c-indicators__list").slick({
                        infinite: !1,
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        arrows: !0,
                        mobileFirst: !0,
                        responsive: [{
                            breakpoint: 1023,
                            settings: {infinite: !1, slidesToShow: 6, slidesToScroll: 2, arrows: !0}
                        }]
                    }), jQuery(".c-indicators__item").matchHeight._update()
                }
            })
        };
        n.default = c, t.exports = n.default
    }, {_helper: 42, "enquire.js": 6, jquery: 10, "jquery-match-height": 8, "slick-carousel": 16}],
    25: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = e("jquery"), s = i(r);
        e("slick-carousel");
        var a = e("_helper"), l = function e() {
            function t(e) {
                (0, s.default)(".c-publications__item .content").css({
                    "margin-top": -1 * e,
                    "-webkit-transform": "translateY(" + e + "px)",
                    "-ms-transform": "translateY(" + e + "px)",
                    transform: "translateY(" + e + "px)"
                })
            }

            function n(e) {
                (0, s.default)(".c-publications__item").on("mouseenter", function () {
                    (0, s.default)(this).find(".content").css({transform: "translateY(0)"})
                }).on("mouseleave", function () {
                    (0, s.default)(this).find(".content").css({
                        "-webkit-transform": "translateY(" + e + "px)",
                        "-ms-transform": "translateY(" + e + "px)",
                        transform: "translateY(" + e + "px)"
                    })
                })
            }

            o(this, e), (0, s.default)(".c-publications__item .text").matchHeight(), (0, s.default)(".c-publications__item .btn-container").matchHeight();
            var i = (0, s.default)(".c-publications__item .content .btn-container").outerHeight(!0);
            t(i), n(i), window.emitter.on("fontSizeChange", function () {
                (0, s.default)(".c-publications__item .text").css("height", "auto").matchHeight._update(), (0, s.default)(".c-publications__item .btn-container").css("height", "auto").matchHeight._update();
                var e = (0, s.default)(".c-publications__item .content .btn-container").outerHeight(!0);
                t(e)
            }), (0, s.default)(window).on("resize", (0, a.debounce)(function () {
                var e = (0, s.default)(".c-publications__item .content .btn-container").outerHeight(!0);
                t(e), n(e)
            }, 100)), (0, s.default)(".c-publications__list").slick({
                infinite: !1,
                slidesToShow: 1,
                centerMode: !0,
                slidesToScroll: 1,
                arrow: !1,
                dots: !0,
                mobileFirst: !0,
                responsive: [{
                    breakpoint: 767,
                    settings: {slidesToShow: 3, centerMode: !1, arrow: !0, dots: !1}
                }, {breakpoint: 1023, settings: {slidesToShow: 4, centerMode: !1, arrow: !0, dots: !1}}]
            }), (0, s.default)(".c-publications__item").on("mouseenter", function () {
                (0, s.default)(this).addClass("is-focus")
            }).on("mouseleave", function () {
                (0, s.default)(this).removeClass("is-focus")
            })
        };
        n.default = l, t.exports = n.default
    }, {_helper: 42, jquery: 10, "slick-carousel": 16}],
    26: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var o = function e() {
            i(this, e), jQuery(".gov-logos__list").slick({
                infinite: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrow: !1,
                dots: !0,
                centerMode: !0,
                centerPadding: "80px",
                mobileFirst: !0,
                responsive: [{
                    breakpoint: 767,
                    settings: {centerMode: !1, slidesToShow: 5, slidesToScroll: 1, arrows: !0, dots: !1}
                }]
            })
        };
        n.default = o, t.exports = n.default
    }, {}],
    27: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = e("jquery"), s = i(r), a = function e() {
            o(this, e), setTimeout(function () {
                (0, s.default)(".js-opening-text").removeClass("is-hidden")
            }, 1e3), setTimeout(function () {
                (0, s.default)(".js-opening-text").addClass("is-hidden"), (0, s.default)(".js-filter-text").addClass("is-visible")
            }, 4e3);
            var t = function () {
                var e = (0, s.default)(".filter--theme"), t = e.val(), n = e.html(),
                    i = (0, s.default)(".filter--type"), o = i.val(), r = i.html(), a = (0, s.default)(".home--filter"),
                    l = a.attr("href").split("?")[0], c = !1, u = !1;
                e.on("change", function () {
                    t = e.val(), "reference" == t ? (i.find('option:not([value="publications"])').remove(), i.niceSelect("update"), c = !0) : c && (i.html(r), i.niceSelect("update"))
                }), i.on("change", function () {
                    o = i.val(), "publications" != o && "all" != o ? (e.find('option[value="reference"]').remove(), e.niceSelect("update"), u = !0) : u && (e.html(n), e.niceSelect("update"))
                });
                var d = (0, s.default)(location).attr("href"), p = d.split("/"), f = p[p.length - 2];
                "search-by-theme" !== f && (i.find('option[value="all"]').remove(), i.niceSelect("update"), u = !0), e.find('option[value="reference"]').remove(), e.niceSelect("update"), u = !0, a.attr("href", l + "?theme=" + t + "&type=" + o)
            };
            (0, s.default)(".btn--home-filter").length > 0 && t(), (0, s.default)(".btn--home-filter").on("click", function (e) {
                e.preventDefault(), t(), window.location.href = (0, s.default)(this).attr("href")
            })
        };
        n.default = a, t.exports = n.default
    }, {jquery: 10}],
    28: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0}), e("slick-carousel"), e("jquery-match-height");
        var o = function e() {
            i(this, e), jQuery(".image-text-card__item .content").matchHeight(), window.emitter.on("fontSizeChange", function () {
                jQuery(".image-text-card__item .content").css("height", "auto").matchHeight._update()
            }), jQuery(".carousel .image-text-card__list").slick({
                infinite: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: !0,
                dots: !0,
                mobileFirst: !0,
                responsive: [{
                    breakpoint: 767,
                    settings: {infinite: !1, slidesToShow: 3, slidesToScroll: 1, arrows: !0}
                }]
            }), jQuery(".image-text-card__item").click(function () {
                var e = jQuery(this).find(".btn-container > a").first(),
                    t = e.attr("target") ? e.attr("target") : "_self", n = e.attr("href");
                window.open(n, t)
            }), jQuery(".image-text-card__item").find(".btn-container > a").click(function (e) {
                e.preventDefault()
            })
        };
        n.default = o, t.exports = n.default
    }, {"jquery-match-height": 8, "slick-carousel": 16}],
    29: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0}), e("slick-carousel");
        var o = function e() {
            i(this, e), jQuery(".latest-highlights__list").slick({
                infinite: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: !0,
                mobileFirst: !0,
                appendArrows: jQuery(".latest-highlights .arrows"),
                rows: 3
            })
        };
        n.default = o, t.exports = n.default
    }, {"slick-carousel": 16}],
    30: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = e("jquery");
        i(r);
        e("jquery-match-height");
        var s = e("enquire.js"), a = (i(s), e("_helper"), function e() {
            o(this, e), jQuery(".listing-items__wrap")[0] && jQuery(".items-list__link").matchHeight()
        });
        n.default = a, t.exports = n.default
    }, {_helper: 42, "enquire.js": 6, jquery: 10, "jquery-match-height": 8}],
    31: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = e("jquery"), s = i(r), a = e("enquire.js"), l = i(a);
        e("hover-intent");
        var c = e("_helper"), u = function e() {
            o(this, e);
            var t = function (e) {
                var t = (0, s.default)(e.target).parents(".nav-container"), n = !1;
                t.length ? t.scrollTop() + t.innerHeight() >= t[0].scrollHeight && (n = !0, t[0].scrollTop = t[0].scrollHeight - t.innerHeight() - 1) : n = !0, n && (e.stopPropagation(), e.preventDefault())
            };
            window.closeAllMobileMenu = function () {
                (0, s.default)(".js-mobile-menu, .js-notification, .js-toggle-search").removeClass("is-active"), (0, s.default)(".nav-container, .notification-bar, .header__search-bar").slideUp(), i()
            };
            var n = function () {
                    (0, s.default)(".nav").on("touchmove", t)
                }, i = function () {
                    (0, s.default)(".header:after").fadeOut(c.timing.quick), (0, s.default)(".nav").off("touchmove", t)
                },
                r = '<button type="button" class="js-toggle-submenu"><span class="vh">Toggle Submenu</span><span class="line"></span><span class="line"></span></button>';
            (0, s.default)(".lvl1 li").each(function () {
                (0, s.default)(this).children("ul").length > 0 && (0, s.default)(this).hasClass("is-parent") && (0, s.default)(this).children("ul").before(r)
            });
            var a = (0, s.default)(".header .lvl1 > li");
            l.default.register("screen and (max-width:" + (c.bp.minDesktop - 1) + "px)", {
                match: function () {
                    (0, s.default)(".js-mobile-menu").off("click").on("click", function (e) {
                        e.preventDefault();
                        var t = (0, s.default)(this), o = t.closest(".nav"), r = o.find(".nav-container"), a = 0;
                        if ((0, s.default)(this).hasClass("is-active") || closeAllMobileMenu(), (0, s.default)(this).toggleClass("is-active"), (0, s.default)(".nav-container").slideToggle(), a = (0, s.default)(window).outerHeight() - (0, s.default)(".header").outerHeight(), t.hasClass("is-active")) {
                            if (r.css({"max-height": a}), (0, s.default)(".lvl1 > li").hasClass("is-current")) {
                                var l = ((0, s.default)(".lvl1 > li.is-current > ul").outerHeight(), (0, s.default)(".lvl1 > li.is-current"));
                                l.addClass("is-active"), l.children("ul").show(), l.children(".js-child").addClass("is-active"), l.children(".has-child").addClass("is-open"), l.find(".js-toggle-submenu").addClass("is-active")
                            }
                            n()
                        } else r.css({"max-height": "auto"}), (0, s.default)(".lvl1").find("ul").slideUp(c.timing.quick), i()
                    }), (0, s.default)(".js-toggle-search").off("click").on("click", function (e) {
                        e.preventDefault(), (0, s.default)(this).hasClass("is-active") || closeAllMobileMenu(), (0, s.default)(this).toggleClass("is-active"), (0, s.default)(".header__search-bar").slideToggle()
                    }), (0, s.default)(".js-notification").off("click").on("click", function (e) {
                        e.preventDefault(), (0, s.default)(this).hasClass("is-active") || closeAllMobileMenu(), (0, s.default)(this).toggleClass("is-active"), (0, s.default)(".notification-bar").slideToggle()
                    }), (0, s.default)(".js-toggle-submenu").off("click").on("click", function (e) {
                        e.preventDefault(), (0, s.default)(this).toggleClass("is-active"), (0, s.default)(this).next("ul").slideToggle()
                    })
                }
            }).register("screen and (min-width:" + c.bp.minDesktop + "px)", {
                match: function () {
                    (0, s.default)(".js-mobile-menu, .js-toggle-search, .js-toggle-submenu").off("click"), (0, s.default)(".js-notification").off("click").on("click", function (e) {
                        e.preventDefault(), (0, s.default)(this).toggleClass("is-active"), (0, s.default)(".notification-bar").slideToggle()
                    }), a.hoverIntent({
                        over: function () {
                            (0, s.default)(this).addClass("is-open")
                        }, out: function () {
                            (0, s.default)(this).removeClass("is-open")
                        }
                    }), a.on("focusin", function () {
                        (0, s.default)(this).closest("li").addClass("is-open")
                    }).on("focusout", function () {
                        (0, s.default)(this).closest("li").removeClass("is-open")
                    })
                }
            }), (0, s.default)(".toggle-search-desktop").click(function () {
                (0, s.default)(".desktop-search").is(":visible") ? (0, s.default)(this).find(".icon-close").removeClass("icon-close").addClass("icon-search-dss") : ((0, s.default)(this).find(".icon-search-dss").removeClass("icon-search-dss").addClass("icon-close"), setTimeout(function () {
                    (0, s.default)(".desktop-search").find("input").focus()
                }, 500)), (0, s.default)(".desktop-search").slideToggle(), (0, s.default)(".notification-bar.is-active").removeClass("is-active").slideUp(), (0, s.default)(".btn-notification.js-notification").removeClass("is-active")
            })
        };
        n.default = u, t.exports = n.default
    }, {_helper: 42, "enquire.js": 6, "hover-intent": 7, jquery: 10}],
    32: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (t, n, i) {
                return n && e(t.prototype, n), i && e(t, i), t
            }
        }(), s = e("jquery");
        i(s);
        e("slick-carousel");
        var a = e("enquire.js"), l = i(a), c = e("js-cookie"), u = i(c), d = e("_helper"), p = function () {
            function e() {
                o(this, e), this.$notifContainer = jQuery(".notification__list"), this.$notif = jQuery(".notification__item"), this.notifCarousel = !1;
                var t = this;
                if (jQuery(".notification-bar").length > 0 && jQuery(".notification-bar .notification__list").find(".notification__item").length > 0) {
                    var n = jQuery(".notification-bar").data("id"), i = "notification-" + n;
                    void 0 !== n && (u.default.get(i) || (t.toggleNotification(jQuery(".js-notification")), l.default.register("screen and (max-width:" + (d.bp.minDesktop - 1) + "px)", {
                        match: function () {
                            jQuery(".js-notification").removeClass("is-active"), jQuery(".notification-bar").slideUp().removeClass("is-active")
                        }
                    }))), jQuery(".js-close-notification").off("click").on("click", function (e) {
                        e.preventDefault(), jQuery(".js-notification").removeClass("is-active"), jQuery(".notification-bar").slideUp().removeClass("is-active"), u.default.set(i, !0)
                    })
                } else jQuery(".notification").hide();
                if (t.$notif.length > 1) {
                    t.notifCarousel = !0;
                    var r = '<div class="arrow-container"><div class="slide-indicator"><span class="current-slide">1</span><span class="divider">/</span><span class="total-slide">1</span></div></div>';
                    jQuery(r).insertAfter(t.$notifContainer);
                    var s = jQuery(".arrow-container"), a = t.$notif.length;
                    jQuery(".total-slide", s).text(a), t.$notifContainer.slick({
                        infinite: !1,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: !0,
                        mobileFirst: !0,
                        appendArrows: s,
                        autoplay: !0,
                        autoplaySpeed: 7e3,
                        speed: 700
                    }).on("beforeChange", function (e, t, n, i) {
                        var o = i + 1;
                        jQuery(".current-slide", s).text(o)
                    })
                }
                l.default.register("screen and (max-width:" + (d.bp.minDesktop - 1) + "px)", {
                    match: function () {
                        jQuery(".js-notification").off("click").on("click", function (e) {
                            e.preventDefault();
                            var n = jQuery(this);
                            n.hasClass("is-active") || closeAllMobileMenu(), t.toggleNotification(n)
                        })
                    }
                }).register("screen and (min-width:" + d.bp.minDesktop + "px)", {
                    match: function () {
                        jQuery(".js-notification").off("click").on("click", function (e) {
                            e.preventDefault();
                            var n = jQuery(this);
                            t.toggleNotification(n), jQuery(".desktop-search").slideUp(), jQuery(".btn-toggle-search").find(".icon-close").removeClass("icon-close").addClass("icon-search-dss")
                        })
                    }
                })
            }

            return r(e, [{
                key: "toggleNotification", value: function (e) {
                    var t = this, n = jQuery(".notification-bar").data("id"), i = "notification-" + n;
                    e.hasClass("is-active") ? (e.removeClass("is-active"), jQuery(".notification-bar").slideUp().removeClass("is-active"), u.default.get(i) || u.default.set(i, !0)) : (e.addClass("is-active"), jQuery(".notification-bar").show().addClass("is-active"), t.notifCarousel && t.$notifContainer.slick("setPosition"))
                }
            }]), e
        }();
        n.default = p, t.exports = n.default
    }, {_helper: 42, "enquire.js": 6, jquery: 10, "js-cookie": 11, "slick-carousel": 16}],
    33: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0}), e("slick-carousel");
        var o = function e() {
            function t() {
                jQuery(".pushed-content img, .pushed-content__item").css("height", 0), setTimeout(function () {
                    jQuery(".pushed-content img, .pushed-content__item").matchHeight()
                }, 500)
            }

            i(this, e), jQuery(".pushed-content").slick({
                infinite: !0,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: !1,
                dots: !0,
                mobileFirst: !0
            }), t(), jQuery(window).on("resize", function () {
                t()
            })
        };
        n.default = o, t.exports = n.default
    }, {"slick-carousel": 16}],
    34: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var o = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (t, n, i) {
                return n && e(t.prototype, n), i && e(t, i), t
            }
        }(), r = function () {
            function e() {
                i(this, e), jQuery(".js-next").hide();
                var t = this;
                this.$quizContainer = jQuery(".quiz__container"), this.$btnNext = this.$quizContainer.find(".js-next"), this.$btnSubmit = this.$quizContainer.find(".js-submit"), this.$scoreText = this.$quizContainer.find(".js-score"), this.$currentQn = this.$quizContainer.find(".quiz__bar .active"), this.$activeQn = this.$quizContainer.find(".quiz__item.is-active"), this.activeIndex = this.$activeQn.data("item"), this.yourAnsText = this.$quizContainer.data("youranswer"), this.correctAnsText = this.$quizContainer.data("correctanswer"), this.quizID = this.$quizContainer.data("id"), this.apiURL = this.$quizContainer.data("endpoint") || "/api/quizAnswer", this.resultURL = this.$quizContainer.data("result") || "#", this.resulttext = this.$quizContainer.data("resulttext") || "#", this.currentScore = 0, this.currentQnNo = parseInt(1), this.totalQn = parseInt(this.$quizContainer.data("questions")), this.$progressBar = this.$quizContainer.find(".bar__active"), t.progress(), jQuery(".js-choice", t.$quizContainer).on("click", function () {
                    var e = jQuery(this), n = e.siblings();
                    n.removeClass("is-selected"), e.addClass("is-selected"), t.$btnSubmit.removeClass("is-disabled")
                }), jQuery(".js-submit", t.$quizContainer).on("click", function (e) {
                    e.preventDefault(), t.submitAnswer(jQuery(this))
                }), jQuery(".js-next", t.$quizContainer).on("click", function (e) {
                    t.currentQnNo >= t.totalQn || (e.preventDefault(), t.gotoNextQn())
                })
            }

            return o(e, [{
                key: "progress", value: function () {
                    var e = this;
                    this.$progressBar.css("width", e.currentQnNo / e.totalQn * 100 + "%"), e.updateQnNumber()
                }
            }, {
                key: "updateQnNumber", value: function () {
                    var e = this;
                    this.$currentQn.text(e.currentQnNo)
                }
            }, {
                key: "scrollTop", value: function () {
                    var e = this.$quizContainer, t = 0;
                    jQuery(".nav").length > 0 && (t = jQuery(".nav").outerHeight() + 10), jQuery("html, body").animate({scrollTop: e.offset().top - t}, 500)
                }
            }, {
                key: "gotoNextQn", value: function () {
                    var e = this;
                    this.$activeQn = this.$quizContainer.find(".quiz__item.is-active"), this.$activeQn.removeClass("is-active").next(".quiz__item").addClass("is-active"), this.currentQnNo++, e.progress(), e.scrollTop(), this.$btnNext.hide(), this.$btnSubmit.fadeIn()
                }
            }, {
                key: "submitAnswer", value: function (e) {
                    var t = this;
                    return this.$activeQn = this.$quizContainer.find(".quiz__item.is-active"), this.$activeQn.addClass("is-answered"), this.$activeQn.find(".choice.is-selected").length > 0 && (e.hide().addClass("is-disabled"), this.$btnNext.fadeIn(), jQuery.ajax({
                        url: t.apiURL,
                        method: "get",
                        data: {id: t.quizID},
                        dataType: "json",
                        cache: !0
                    }).done(function (e) {
                        t.evaluateAnswer(e)
                    }).fail(function (e) {
                        console.log(e)
                    }), t.scrollTop(), void (t.currentQnNo >= t.totalQn && jQuery(".js-next span", t.$quizContainer).html(t.resulttext)))
                }
            }, {
                key: "evaluateAnswer", value: function (e) {
                    var t = this, n = e[0].questions, i = n[t.currentQnNo - 1].answer.toUpperCase(),
                        o = n[t.currentQnNo - 1].reason,
                        r = t.$activeQn.find(".choice.is-selected").data("choice").toUpperCase(),
                        s = t.$activeQn.find('[data-choice="' + r + '"]'),
                        a = t.$activeQn.find('[data-choice="' + i + '"]');
                    r == i ? (t.currentScore++, t.$scoreText.val(t.currentScore), s.addClass("is-correct"), s.find(".text").append(" " + t.yourAnsText)) : (s.addClass("is-wrong"), s.find(".letter .icon").removeClass("icon-correct").addClass("icon-wrong"), s.find(".text").append(" " + t.yourAnsText), a.addClass("is-correct"), a.find(".text").append(" " + t.correctAnsText), o && (a.find(".text").addClass("with-reason"), a.find(".text").append('<div class="reason">' + o + "</div>")))
                }
            }]), e
        }();
        n.default = r, t.exports = n.default
    }, {}],
    35: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var o = function e() {
            i(this, e), this.$scrollDowns = jQuery(".scroll-down");
            var t = this;
            t.$scrollDowns.length && jQuery(window).scroll(function () {
                jQuery(window).scrollTop() > 300 ? t.$scrollDowns.fadeOut("slow") : t.$scrollDowns.fadeIn("slow")
            })
        };
        n.default = o, t.exports = n.default
    }, {}],
    36: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = e("jquery"), s = i(r), a = e("enquire.js"), l = i(a), c = function e() {
            o(this, e);
            var t = (0, s.default)(".global-share-widget"), n = (0, s.default)(".sharer-platforms", t),
                i = function () {
                    (0, s.default)(".sharer-label", t).on("touchend click", function (e) {
                        e.preventDefault(), "none" === n.css("display") ? n.stop().slideDown() : n.stop().slideUp()
                    })
                }, r = function () {
                    (0, s.default)(".sharer-label", t).off(), n.css({display: ""})
                };
            l.default.register("screen and (max-width: 1023px)", {
                match: function () {
                    i()
                }, unmatch: function () {
                    r()
                }
            }), l.default.register("screen and (min-width: 1024px)", {
                match: function () {
                    var e = 0;
                    (0, s.default)(".sharer-platforms a").each(function () {
                        e += (0, s.default)(this).outerHeight()
                    }), (0, s.default)(".global-share-widget .sharer").off("mouseenter").on("mouseenter", function () {
                        (0, s.default)(this).find(".sharer-platforms").css("height", e)
                    }).off("mouseleave").on("mouseleave", function () {
                        (0, s.default)(this).find(".sharer-platforms").css("height", 0)
                    })
                }, unmatch: function () {
                    (0, s.default)(".global-share-widget .sharer").off("mouseenter mouseleave"), (0, s.default)(".sharer-platforms").css("height", "auto")
                }
            })
        };
        n.default = c, t.exports = n.default
    }, {"enquire.js": 6, jquery: 10}],
    37: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (t, n, i) {
                return n && e(t.prototype, n), i && e(t, i), t
            }
        }(), s = e("jquery"), a = (i(s), e("enquire.js")), l = (i(a), e("_helper"), function () {
            function e() {
                o(this, e)
            }

            return r(e, [{
                key: "selectContent", value: function (e) {
                    var t = jQuery('.tab-content__item[data-tab="' + e + '"]');
                    t.siblings(".tab-content__item").removeClass("is-active"), t.addClass("is-active")
                }
            }]), e
        }());
        n.default = l, t.exports = n.default
    }, {_helper: 42, "enquire.js": 6, jquery: 10}],
    38: [function (e, t, n) {
        "use strict";

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var o = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (t, n, i) {
                return n && e(t.prototype, n), i && e(t, i), t
            }
        }(), r = e("_helper"), s = function () {
            function e() {
                if (i(this, e), jQuery(".tab-list").length > 0) {
                    var t = jQuery(".tab-list"), n = t.clone();
                    jQuery(".nav");
                    n.insertBefore(t).addClass("tab-list--clone");
                    var o = t.offset().top;
                    jQuery(window).on("scroll", (0, r.debounce)(function () {
                        jQuery(window).scrollTop() >= o ? n.addClass("is-visible") : n.removeClass("is-visible")
                    }, 20))
                }
            }

            return o(e, [{
                key: "selectTab", value: function (e) {
                    e.siblings("a").removeClass("is-active"), e.addClass("is-active")
                }
            }]), e
        }();
        n.default = s, t.exports = n.default
    }, {_helper: 42}],
    39: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (t, n, i) {
                return n && e(t.prototype, n), i && e(t, i), t
            }
        }(), s = e("jquery"), a = i(s), l = e("enquire.js"), c = i(l);
        e("scrollmonitor");
        var u = e("_helper"), d = function () {
            function e() {
                o(this, e);
                var t = this;
                t.setTable(), window.emitter.on("tabChange", function () {
                    t.setTable()
                }), (0, a.default)(window).on("resize", (0, u.debounce)(function () {
                    (0, a.default)("table").each(function () {
                        (0, a.default)(this).find("thead").length > 0 && t.setWidth((0, a.default)(this))
                    }), t.setStickyTop()
                }, 200)), c.default.register("screen and (max-width:" + u.bp.maxMobile + "px)", {
                    match: function () {
                        t.stickyFirstColumn(), window.emitter.on("tabChange", function () {
                            t.stickyFirstColumn()
                        })
                    }, unmatch: function () {
                        (0, a.default)(".table--firstcol, .head-clone, .dummy-row").remove(), (0, a.default)(".table--stickyleft").find("td, th").css({
                            height: "auto",
                            width: "auto"
                        }), (0, a.default)(".table--stickyleft").each(function () {
                            (0, a.default)(this).find("th:nth-of-type(1), td:nth-of-type(1)").show()
                        }), t.setTable()
                    }
                })
            }

            return r(e, [{
                key: "stickyFirstColumn", value: function () {
                    var e = this;
                    (0, a.default)(".table--stickyleft").each(function () {
                        var t = (0, a.default)(this);
                        e.$head = t.find("thead"), e.$body = t.find("tbody"), e.$th = e.$head.find("th"), e.$td = e.$head.find("td"), e.theadChild, t.prev(".table--firstcol").remove(), e.$th.length > 0 ? e.theadChild = e.$th : e.$td.length > 0 && (e.theadChild = e.$td), e.cloneFirstColumn(t), e.setRowHeight((0, a.default)(this))
                    })
                }
            }, {
                key: "setColumnWidth", value: function (e, t) {
                    var n = e.outerWidth(), i = t + 1, o = e.closest("table"), r = this;
                    r.$body.find("td:nth-of-type(" + i + ")").each(function (t) {
                        var i = e.outerWidth();
                        n < i && (n = i)
                    }), o.find("th:nth-of-type(" + i + "), td:nth-of-type(" + i + ")").css("width", n)
                }
            }, {
                key: "setRowHeight", value: function (e) {
                    if (e.siblings(".table--firstcol").length) {
                        var t = e.find("thead").first().outerHeight(),
                            n = e.siblings(".table--firstcol").first().find("thead").first().outerHeight();
                        n > t ? e.find("thead th,thead td").eq(1).css("height", n) : e.siblings(".table--firstcol").find("thead td, thead th").css("height", t);
                        var i, o = 1;
                        e.find("tbody tr").each(function () {
                            if (i = (0, a.default)(this).parents(".table--stickyleft").first().siblings(".table--firstcol").find("tbody tr:nth-of-type(" + o + ")").first(), (0, a.default)(this).hasClass("head-clone")) {
                                var e = Math.max.apply(null, (0, a.default)(this).find("td").map(function () {
                                    return (0, a.default)(this).outerHeight()
                                }).get()), t = i.find("td").html();
                                return i.find("td").html(""), i.find("td").append("<span></span>"), i.find("td > span").html(t), e > i.outerHeight() && i.find("td").css("height", e), o++, !0
                            }
                            var n;
                            n = i.outerHeight() > (0, a.default)(this).outerHeight() ? i.outerHeight() : (0, a.default)(this).outerHeight(), (0, a.default)(this).css("height", n), (0, a.default)(this).find("td").css("height", n), i.css("height", n), i.find("td").css("height", n), o++
                        })
                    }
                }
            }, {
                key: "cloneFirstColumn", value: function (e) {
                    if (!e.siblings(".table--firstcol").length) {
                        var t = e.clone();
                        t.insertBefore(e).addClass("table--firstcol").removeClass("table--stickyleft"), e.prev(".table--firstcol").find("td, th").not(":nth-of-type(1)").remove();
                        var n = 0;
                        e.prev(".table--firstcol").find("thead td, thead th").each(function () {
                            0 == n ? (0, a.default)(this).attr("rowspan") && (n = parseFloat((0, a.default)(this).attr("rowspan"))) : ((0, a.default)(this).parent("tr").remove(), n--)
                        }), n = 0, e.prev(".table--firstcol").find("tbody td").each(function () {
                            0 == n ? (0, a.default)(this).attr("rowspan") && (n = parseFloat((0, a.default)(this).attr("rowspan")) - 1) : ((0, a.default)(this).parent("tr").hide(), n--)
                        }), n = 0, e.find("tbody td:nth-of-type(1)").each(function () {
                            parseFloat((0, a.default)(this).attr("colspan")) > 1 && (0, a.default)(this).after("<td class='dummy-row' colspan='" + (parseFloat((0, a.default)(this).attr("colspan")) - 1) + "'></td>"), 0 == n ? ((0, a.default)(this).hide(), (0, a.default)(this).attr("rowspan") && (n = parseFloat((0, a.default)(this).attr("rowspan")) - 1)) : n--
                        }), n = 0, e.find("thead th:nth-of-type(1), thead td:nth-of-type(1)").each(function () {
                            0 == n ? ((0, a.default)(this).hide(), (0, a.default)(this).attr("rowspan") && (n = parseFloat((0, a.default)(this).attr("rowspan")))) : n--
                        })
                    }
                }
            }, {
                key: "setWidth", value: function (e) {
                    var t = e, n = e.prev(".sticky-table"), i = e.width();
                    n.width(i);
                    var o, r, s = t.find("thead th"), l = t.find("thead td");
                    s.length > 0 ? (o = s, r = n.find("th")) : l.length > 0 && (o = l, r = n.find("td")), o.each(function (e) {
                        var t = (0, a.default)(this).outerWidth();
                        r.eq(e).css("width", t)
                    })
                }
            }, {
                key: "calculateOffset", value: function () {
                    var e = (0, a.default)(".header").outerHeight();
                    return (0, a.default)(window).width() > 768 && (e = (0, a.default)(".nav").outerHeight()), (0, a.default)(".tab-list").length > 0 && (e = (0, a.default)(".tab-list").outerHeight()), e
                }
            }, {
                key: "setStickyTop", value: function () {
                    var e = this, t = e.calculateOffset();
                    (0, a.default)(".sticky-table").css("top", t)
                }
            }, {
                key: "clearTable", value: function () {
                    (0, a.default)(".sticky-table").remove()
                }
            }, {
                key: "wrapTable", value: function (e) {
                    0 === e.parent(".table-wrapper").length && e.wrap('<div class="table-wrapper"></div>')
                }
            }, {
                key: "setTable", value: function () {
                    var e = this;
                    e.clearTable(), (0, a.default)("table:not(.sticky-table):not(.table--firstcol):not(.custom)").each(function (t, n) {
                        var i = (0, a.default)(this);
                        if (e.wrapTable(i), i.find("thead").length > 0 && (0, a.default)(this).find("tbody tr").length >= 6) {
                            var o = (0, a.default)(this), r = o.find("thead").clone();
                            r.insertBefore(o).wrap('<table class="sticky-table"></table>'), e.setWidth(o);
                            var s = e.calculateOffset();
                            s -= 40;
                            var l = o.find("thead").outerHeight() + s, c = l + 150, u = scrollMonitor.create(n),
                                d = scrollMonitor.create(n, {top: l, bottom: -1 * c});
                            d.stateChange(function () {
                                u.isInViewport ? d.isInViewport && d.isAboveViewport ? (0, a.default)(n).siblings(".sticky-table").addClass("is-visible") : d.isAboveViewport ? (0, a.default)(n).siblings(".sticky-table").removeClass("is-visible") : (0, a.default)(n).siblings(".sticky-table").removeClass("is-visible") : (0, a.default)(n).siblings(".sticky-table").removeClass("is-visible")
                            })
                        }
                        i.hasClass("table--stickyleft") && (i.closest(".table-wrapper").find(".table__info").remove(), i.closest(".table-wrapper").prepend('<div class="table__info"><i class="icon icon-scroll"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></i><span>Scroll table left and right</span></div>'))
                    }), e.setStickyTop()
                }
            }]), e
        }();
        n.default = d, t.exports = n.default
    }, {_helper: 42, "enquire.js": 6, jquery: 10, scrollmonitor: 14}],
    40: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = e("jquery"), s = i(r), a = e("enquire.js"), l = i(a);
        e("sticky-kit");
        var c = e("_helper"), u = function e() {
            o(this, e), (0, s.default)(".js-resizer").on("click", function (e) {
                e.preventDefault();
                var t = (0, s.default)(this).data("size");
                (0, s.default)(".js-resizer").removeClass("is-active"), "normal" === t ? ((0, s.default)(this).addClass("is-active"), (0, s.default)(".main").removeClass("is-big is-bigger"), (0, s.default)(".home-banner .content p").css("font-size", "1.2em"), (0, s.default)(".home-banner .content a.btn.btn--home-filter").css("font-size", "1em"), (0, s.default)(".shortcut-links__item").css("min-height", ""), (0, s.default)(".banner").removeAttr("style")) : "big" === t ? ((0, s.default)(this).addClass("is-active"), (0, s.default)(".main").removeClass("is-bigger").addClass("is-big"), (0, s.default)(".home-banner .content p").css("font-size", "1.25em"), (0, s.default)(".home-banner .content a.btn.btn--home-filter").css("font-size", "0.8em"), (0, s.default)(".shortcut-links__item").css("min-height", ""), (0, s.default)(".banner").css({"margin-top": "-60px"})) : "bigger" === t && ((0, s.default)(this).addClass("is-active"), (0, s.default)(".main").removeClass("is-big").addClass("is-bigger"), (0, s.default)(".home-banner .content p").css("font-size", "1.3em"), (0, s.default)(".home-banner .content a.btn.btn--home-filter").css("font-size", "0.6em"), (0, s.default)(".shortcut-links__item").css("min-height", "120px"), (0, s.default)(".banner").css({"margin-top": "-68px"})), window.emitter.emit("fontSizeChange"), (0, s.default)(".pushed-content img, pushed-content__item").matchHeight(), (0, s.default)(".c-publications__item .text").matchHeight(), (0, s.default)(".c-publications__item .btn-container").matchHeight()
            }), l.default.register("screen and (min-width:" + c.bp.minDesktop + "px)", {
                match: function () {
                    0 == (0, s.default)(".tab-list").length && (0, s.default)(".nav").stick_in_parent({parent: "header"}).on("sticky_kit:stick", function (e) {
                    }).on("sticky_kit:unstick", function (e) {
                    })
                }, unmatch: function () {
                    0 == (0, s.default)(".tab-list").length && (0, s.default)(".nav").trigger("sticky_kit:detach")
                }
            })
        };
        n.default = u, t.exports = n.default
    }, {_helper: 42, "enquire.js": 6, jquery: 10, "sticky-kit": 17}],
    41: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(n, "__esModule", {value: !0});
        var r = e("../../molecules/tab-list/tab-list"), s = i(r), a = e("../../molecules/tab-content/tab-content"),
            l = i(a), c = e("_helper"), u = function e() {
                o(this, e);
                var t = new s.default, n = new l.default;
                if ("localhost" === window.location.hostname) {
                    jQuery(".tab-area .tab-list__item").on("click", function (e) {
                        var i = jQuery(this).data("tab");
                        t.selectTab(jQuery('.tab-area .tab-list__item[data-tab="' + i + '"]')), n.selectContent(i), history.pushState({}, "", jQuery(this).attr("href")), window.emitter.emit("tabChange")
                    });
                    var i = (0, c.getParameterByName)("tab");
                    i && (t.selectTab(jQuery('.tab-area .tab-list__item[data-tab="' + i + '"]')), n.selectContent(i), window.emitter.emit("tabChange"))
                }
            };
        n.default = u, t.exports = n.default
    }, {"../../molecules/tab-content/tab-content": 37, "../../molecules/tab-list/tab-list": 38, _helper: 42}],
    42: [function (e, t, n) {
        "use strict";
        Object.defineProperty(n, "__esModule", {value: !0});
        var i = {maxMobile: 767, minDesktop: 1280}, o = {quick: 250, medium: 400, long: 800, slow: 1e3},
            r = function (e, t, n) {
                var i;
                return function () {
                    var o = this, r = arguments, s = function () {
                        i = null, n || e.apply(o, r)
                    }, a = n && !i;
                    clearTimeout(i), i = setTimeout(s, t), a && e.apply(o, r)
                }
            }, s = function () {
                var e = window.navigator.userAgent, t = e.indexOf("MSIE ");
                if (t > 0) return parseInt(e.substring(t + 5, e.indexOf(".", t)), 10);
                var n = e.indexOf("Trident/");
                if (n > 0) {
                    var i = e.indexOf("rv:");
                    return parseInt(e.substring(i + 3, e.indexOf(".", i)), 10)
                }
                var o = e.indexOf("Edge/");
                return o > 0 && parseInt(e.substring(o + 5, e.indexOf(".", o)), 10)
            }, a = function (e) {
                e.style.height = "1px", e.style.height = e.scrollHeight + "px"
            }, l = function (e) {
                e.size = e.value.length > 20 ? e.value.length + 2 : 22
            }, c = function (e) {
                var t = e.html().length;
                t < 20 ? (e.css("font-size", ""), e.css("vertical-align", "")) : (e.css("font-size", 100 - 1.3 * t + "%"), e.css("vertical-align", "bottom"))
            }, u = function (e, t, n) {
                var i = n;
                return void 0 === i && (i = 2592e3), document.cookie = e + "=" + t + "; path=/; max-age=" + i, !0
            }, d = function (e) {
                for (var t = document.cookie, n = t.split("; "), i = n.length, o = {}, r = [], s = 0; s < i; s++) r = n[s].split("="), o[r[0]] = r[1];
                return e in o && o[e]
            }, p = function (e, t) {
                t || (t = window.location.href), e = e.replace(/[\[\]]/g, "\\$&");
                var n = new RegExp("[?&]" + e + "(=([^&#]*)|&|#|$)"), i = n.exec(t);
                return i ? i[2] ? decodeURIComponent(i[2].replace(/\+/g, " ")) : "" : null
            };
        n.bp = i, n.timing = o, n.debounce = r, n.detectIE = s, n.textAreaAdjust = a, n.textInputAdjust = l, n.variableFontSize = c, n.setCookie = u, n.checkCookie = d, n.getParameterByName = p
    }, {}],
    43: [function (e, t, n) {
        "use strict";
        var i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
            return typeof e
        } : function (e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        };
        !function (e) {
            function t(e, t) {
                if (this.element = e, this.options = jQuery.extend(!0, {}, n, t), this.updateSelectAll = !0, this.updatePlaceholder = !0, this.options.search && !this.options.searchOptions.searchText && !this.options.searchOptions.searchValue) throw new Error("Either searchText or searchValue should be true.");
                "placeholder" in this.options && (this.options.texts.placeholder = this.options.placeholder, delete this.options.placeholder), "default" in this.options.searchOptions && (this.options.texts.search = this.options.searchOptions.default, delete this.options.searchOptions.default), this.load()
            }

            var n = {
                columns: 1,
                search: !1,
                searchOptions: {
                    delay: 250, showOptGroups: !1, searchText: !0, searchValue: !1, onSearch: function (e) {
                    }
                },
                texts: {
                    placeholder: "Select options",
                    search: "Search",
                    selectedOptions: " selected",
                    selectAll: "Select all",
                    unselectAll: "Unselect all",
                    noneSelected: "None Selected"
                },
                selectAll: !1,
                selectGroup: !1,
                minHeight: 200,
                maxHeight: null,
                maxWidth: null,
                maxPlaceholderWidth: null,
                maxPlaceholderOpts: 10,
                showCheckbox: !0,
                optionAttributes: [],
                onLoad: function (e) {
                },
                onOptionClick: function (e, t) {
                },
                onControlClose: function (e) {
                },
                minSelect: !1,
                maxSelect: !1
            }, o = 1;
            "function" != typeof Array.prototype.map && (Array.prototype.map = function (e, t) {
                return "undefined" == typeof t && (t = this), jQuery.isArray(t) ? jQuery.map(t, e) : []
            }), "function" != typeof String.prototype.trim && (String.prototype.trim = function () {
                return this.replace(/^\s+|\s+$/g, "")
            }), t.prototype = {
                load: function () {
                    var e = this;
                    if ("SELECT" != e.element.nodeName || jQuery(e.element).hasClass("jqmsLoaded")) return !0;
                    jQuery(e.element).addClass("jqmsLoaded").data("plugin_multiselect-instance", e), jQuery(e.element).after('<div class="ms-options-wrap"><button><span>None Selected</span></button><div class="ms-options"><ul></ul></div></div>');
                    var t = jQuery(e.element).next(".ms-options-wrap").find("> button:first-child"),
                        n = jQuery(e.element).next(".ms-options-wrap").find("> .ms-options"), i = n.find("> ul");
                    !!jQuery(e.element).find("optgroup").length;
                    e.options.showCheckbox || n.addClass("hide-checkbox"), jQuery(e.element).prop("disabled") && t.prop("disabled", !0), e.options.maxPlaceholderWidth && t.css("maxWidth", e.options.maxPlaceholderWidth);
                    var o = jQuery(window).height() - n.offset().top + jQuery(window).scrollTop() - 20;
                    if (e.options.maxHeight && (o = e.options.maxHeight), o = o < e.options.minHeight ? e.options.minHeight : o, n.css({
                        maxWidth: e.options.maxWidth,
                        minHeight: e.options.minHeight,
                        maxHeight: o
                    }), n.bind("touchmove mousewheel DOMMouseScroll", function (e) {
                        if (jQuery(this).outerHeight() < jQuery(this)[0].scrollHeight) {
                            var t = e.originalEvent, n = t.wheelDelta || -t.detail;
                            jQuery(this).outerHeight() + jQuery(this)[0].scrollTop > jQuery(this)[0].scrollHeight && (e.preventDefault(), this.scrollTop += n < 0 ? 1 : -1)
                        }
                    }), jQuery(document).off("click.ms-hideopts").on("click.ms-hideopts", function (e) {
                        jQuery(e.target).closest(".ms-options-wrap").length || jQuery(".ms-options-wrap > .ms-options.ms-active").each(function () {
                            jQuery(this).removeClass("ms-active");
                            var e = jQuery(this).parent().prev(".jqmsLoaded").data("plugin_multiselect-instance");
                            "function" == typeof e.options.onControlClose && e.options.onControlClose(e.element)
                        })
                    }), t.bind("mousedown", function (t) {
                        if (1 != t.which) return !0;
                        if (jQuery(".ms-options-wrap > .ms-options.ms-active").each(function () {
                            if (jQuery(this).parent().prev()[0] != n.parent().prev()[0]) {
                                jQuery(this).removeClass("ms-active");
                                var e = jQuery(this).parent().prev(".jqmsLoaded").data("plugin_multiselect-instance");
                                "function" == typeof e.options.onControlClose && e.options.onControlClose(e.element)
                            }
                        }), n.toggleClass("ms-active"), n.hasClass("ms-active")) {
                            n.css("maxHeight", "");
                            var i = jQuery(window).height() - n.offset().top + jQuery(window).scrollTop() - 20;
                            e.options.maxHeight && (i = e.options.maxHeight), i = i < e.options.minHeight ? e.options.minHeight : i, n.css("maxHeight", i)
                        } else "function" == typeof e.options.onControlClose && e.options.onControlClose(e.element)
                    }).click(function (e) {
                        e.preventDefault()
                    }), e.options.texts.placeholder && t.find("span").text(e.options.texts.placeholder), e.options.search) {
                        i.before('<div class="ms-search"><input type="text" value="" placeholder="' + e.options.texts.search + '" /></div>');
                        var r = n.find(".ms-search input");
                        r.on("keyup", function () {
                            if (jQuery(this).data("lastsearch") == jQuery(this).val()) return !0;
                            jQuery(this).data("searchTimeout") && clearTimeout(jQuery(this).data("searchTimeout"));
                            var t = jQuery(this);
                            jQuery(this).data("searchTimeout", setTimeout(function () {
                                t.data("lastsearch", t.val()), "function" == typeof e.options.searchOptions.onSearch && e.options.searchOptions.onSearch(e.element);
                                var n = jQuery.trim(r.val().toLowerCase());
                                n ? (i.find('li[data-search-term*="' + n + '"]:not(.optgroup)').removeClass("ms-hidden"), i.find('li:not([data-search-term*="' + n + '"], .optgroup)').addClass("ms-hidden")) : i.find(".ms-hidden").removeClass("ms-hidden"), e.options.searchOptions.showOptGroups || i.find(".optgroup").each(function () {
                                    jQuery(this).find("li:not(.ms-hidden)").length ? jQuery(this).show() : jQuery(this).hide()
                                }), e._updateSelectAllText()
                            }, e.options.searchOptions.delay))
                        })
                    }
                    e.options.selectAll && i.before('<a href="#" class="ms-selectall global">' + e.options.texts.selectAll + "</a>"), n.on("click", ".ms-selectall", function (t) {
                        t.preventDefault(), e.updateSelectAll = !1, e.updatePlaceholder = !1;
                        var o = n.parent().prev();
                        if (jQuery(this).hasClass("global")) i.find("li:not(.optgroup, .selected, .ms-hidden)").length ? (i.find("li:not(.optgroup, .selected, .ms-hidden)").addClass("selected"), i.find('li.selected input[type="checkbox"]').prop("checked", !0)) : (i.find("li:not(.optgroup, .ms-hidden).selected").removeClass("selected"), i.find('li:not(.optgroup, .ms-hidden, .selected) input[type="checkbox"]').prop("checked", !1)); else if (jQuery(this).closest("li").hasClass("optgroup")) {
                            var r = jQuery(this).closest("li.optgroup");
                            r.find("> .label").text();
                            r.find("li:not(.selected, .ms-hidden)").length ? (r.find("li:not(.selected, .ms-hidden)").addClass("selected"), r.find('li.selected input[type="checkbox"]').prop("checked", !0)) : (r.find("li:not(.ms-hidden).selected").removeClass("selected"), r.find('li:not(.ms-hidden, .selected) input[type="checkbox"]').prop("checked", !1))
                        }
                        var s = [];
                        i.find('li.selected input[type="checkbox"]').each(function () {
                            s.push(jQuery(this).val())
                        }), o.val(s), e.updateSelectAll = !0, e.updatePlaceholder = !0, e._updateSelectAllText(), e._updatePlaceholderText()
                    });
                    var s = [];
                    jQuery(e.element).children().each(function () {
                        if ("OPTGROUP" == this.nodeName) {
                            var t = [];
                            jQuery(this).children("option").each(function () {
                                for (var n = {}, i = 0; i < e.options.optionAttributes.length; i++) {
                                    var o = e.options.optionAttributes[i];
                                    void 0 !== jQuery(this).attr(o) && (n[o] = jQuery(this).attr(o))
                                }
                                t.push({
                                    name: jQuery(this).text(),
                                    value: jQuery(this).val(),
                                    checked: jQuery(this).prop("selected"),
                                    attributes: n
                                })
                            }), s.push({label: jQuery(this).attr("label"), options: t})
                        } else {
                            if ("OPTION" != this.nodeName) return !0;
                            for (var n = {}, i = 0; i < e.options.optionAttributes.length; i++) {
                                var o = e.options.optionAttributes[i];
                                void 0 !== jQuery(this).attr(o) && (n[o] = jQuery(this).attr(o))
                            }
                            s.push({
                                name: jQuery(this).text(),
                                value: jQuery(this).val(),
                                checked: jQuery(this).prop("selected"),
                                attributes: n
                            })
                        }
                    }), e.loadOptions(s, !0, !1), e._updateSelectAllText(!1), n.on("click", 'input[type="checkbox"]', function () {
                        jQuery(this).closest("li").toggleClass("selected");
                        var t = n.parent().prev();
                        t.find('option[value="' + jQuery(this).val() + '"]').prop("selected", jQuery(this).is(":checked")).closest("select").trigger("change"), "function" == typeof e.options.onOptionClick && e.options.onOptionClick(e.element, this), e._updateSelectAllText(), e._updatePlaceholderText()
                    }), n.on("focusin", 'input[type="checkbox"]', function () {
                        jQuery(this).closest("label").addClass("focused")
                    }).on("focusout", 'input[type="checkbox"]', function () {
                        jQuery(this).closest("label").removeClass("focused")
                    }), "function" == typeof e.options.onLoad && e.options.onLoad(e.element), jQuery(e.element).hide()
                }, loadOptions: function (e, t, n) {
                    t = "boolean" != typeof t || t, n = "boolean" != typeof n || n;
                    var i = this, o = jQuery(i.element).next(".ms-options-wrap").find("> .ms-options > ul"),
                        r = jQuery(i.element).next(".ms-options-wrap").find("> .ms-options"), s = r.parent().prev();
                    t && (o.find("> li").remove(), n && s.find("> *").remove());
                    for (var a in e) if (e.hasOwnProperty(a)) {
                        var l = e[a], c = jQuery("<li/>"), u = !0;
                        if (l.hasOwnProperty("options")) {
                            if (o.find("> li.optgroup > span.label").each(function () {
                                jQuery(this).text() == l.label && (c = jQuery(this).closest(".optgroup"), u = !1)
                            }), n) if (s.find('optgroup[label="' + l.label + '"]').length) var d = s.find('optgroup[label="' + l.label + '"]'); else {
                                var d = jQuery('<optgroup label="' + l.label + '"></optgroup>');
                                s.append(d)
                            }
                            u && (c.addClass("optgroup"), c.append('<span class="label">' + l.label + "</span>"), c.find("> .label").css({clear: "both"}), i.options.selectGroup && c.append('<a href="#" class="ms-selectall">' + i.options.texts.selectAll + "</a>"), c.append("<ul/>"));
                            for (var p in l.options) if (l.options.hasOwnProperty(p)) {
                                var f = l.options[p], h = jQuery("<li/>").addClass("ms-reflow");
                                if (f.hasOwnProperty("value") && (i._addOption(h, f), c.find("> ul").append(h), n)) {
                                    var m = jQuery('<option value="' + f.value + '">' + f.name + "</option>");
                                    f.hasOwnProperty("attributes") && Object.keys(f.attributes).length, f.checked && m.prop("selected", !0), d.append(m)
                                }
                            }
                        } else {
                            if (!l.hasOwnProperty("value")) continue;
                            if (c.addClass("ms-reflow"), i._addOption(c, l), n) {
                                var m = jQuery('<option value="' + l.value + '">' + l.name + "</option>");
                                l.hasOwnProperty("attributes") && Object.keys(l.attributes).length && m.attr(l.attributes), l.checked && m.prop("selected", !0), s.append(m)
                            }
                        }
                        u && o.append(c)
                    }
                    var g = o.find('.ms-reflow input[type="checkbox"]').eq(0);
                    if (g.length && g.css("display").match(/block$/)) {
                        var v = g.outerWidth();
                        v = v ? v : 15, o.find(".ms-reflow label").css("padding-left", 2 * parseInt(g.closest("label").css("padding-left")) + v), o.find(".ms-reflow").removeClass("ms-reflow")
                    }
                    i._updatePlaceholderText(), r.find("ul").css({
                        "column-count": "",
                        "column-gap": "",
                        "-webkit-column-count": "",
                        "-webkit-column-gap": "",
                        "-moz-column-count": "",
                        "-moz-column-gap": ""
                    }), s.find("optgroup").length ? (o.find("> li:not(.optgroup)").css({
                        float: "left",
                        width: 100 / i.options.columns + "%"
                    }), o.find("li.optgroup").css({clear: "both"}).find("> ul").css({
                        "column-count": i.options.columns,
                        "column-gap": 0,
                        "-webkit-column-count": i.options.columns,
                        "-webkit-column-gap": 0,
                        "-moz-column-count": i.options.columns,
                        "-moz-column-gap": 0
                    }), this._ieVersion() && this._ieVersion() < 10 && o.find("li.optgroup > ul > li").css({
                        float: "left",
                        width: 100 / i.options.columns + "%"
                    })) : (o.css({
                        "column-count": i.options.columns,
                        "column-gap": 0,
                        "-webkit-column-count": i.options.columns,
                        "-webkit-column-gap": 0,
                        "-moz-column-count": i.options.columns,
                        "-moz-column-gap": 0
                    }), this._ieVersion() && this._ieVersion() < 10 && o.find("> li").css({
                        float: "left",
                        width: 100 / i.options.columns + "%"
                    }))
                }, settings: function (e) {
                    this.options = jQuery.extend(!0, {}, this.options, e), this.reload()
                }, unload: function () {
                    jQuery(this.element).next(".ms-options-wrap").remove(), jQuery(this.element).show(function () {
                        jQuery(this).css("display", "").removeClass("jqmsLoaded")
                    })
                }, reload: function () {
                    jQuery(this.element).next(".ms-options-wrap").remove(), jQuery(this.element).removeClass("jqmsLoaded"), this.load()
                }, reset: function () {
                    var e = [];
                    jQuery(this.element).find("option").each(function () {
                        jQuery(this).prop("defaultSelected") && e.push(jQuery(this).val())
                    }), jQuery(this.element).val(e), this.reload()
                }, disable: function (e) {
                    e = "boolean" != typeof e || e, jQuery(this.element).prop("disabled", e), jQuery(this.element).next(".ms-options-wrap").find("button:first-child").prop("disabled", e)
                }, _updateSelectAllText: function (e) {
                    if (this.updateSelectAll) {
                        "boolean" != typeof e && (e = !0);
                        var t = this;
                        if (t.options.selectAll || t.options.selectGroup) {
                            var n = jQuery(t.element).next(".ms-options-wrap").find("> .ms-options");
                            n.find(".ms-selectall").each(function () {
                                var e = jQuery(this).parent().find("li:not(.optgroup,.selected,.ms-hidden)");
                                jQuery(this).text(e.length ? t.options.texts.selectAll : t.options.texts.unselectAll)
                            })
                        }
                    }
                }, _updatePlaceholderText: function () {
                    if (this.updatePlaceholder) {
                        var e, t = this, n = jQuery(t.element).next(".ms-options-wrap").find("> button:first-child"),
                            i = n.find("span"), o = jQuery(t.element).next(".ms-options-wrap").find("> .ms-options"),
                            r = o.parent().prev(), s = r.val() ? r.val() : [], a = [];
                        for (e in s) if (a.push(jQuery.trim(r.find('option[value="' + s[e] + '"]').text())), a.length >= t.options.maxPlaceholderOpts) break;
                        i.text(a.join(", ")), a.length == r.find("option").length ? i.text(t.options.texts.placeholder) : a.length || i.text(t.options.texts.placeholder)
                    }
                }, _addOption: function (e, t) {
                    var n = this, i = jQuery("<label/>", {for: "ms-opt-" + o, text: t.name}),
                        r = jQuery("<input>", {type: "checkbox", title: t.name, id: "ms-opt-" + o, value: t.value});
                    t.hasOwnProperty("attributes") && Object.keys(t.attributes).length && r.attr(t.attributes), t.checked && (e.addClass("default selected"), r.prop("checked", !0)), i.prepend(r);
                    var s = "";
                    n.options.searchOptions.searchText && (s += " " + t.name.toLowerCase()), n.options.searchOptions.searchValue && (s += " " + t.value.toLowerCase()), e.attr("data-search-term", jQuery.trim(s)).prepend(i), o += 1
                }, _ieVersion: function () {
                    var e = navigator.userAgent.toLowerCase();
                    return e.indexOf("msie") != -1 && parseInt(e.split("msie")[1])
                }
            }, jQuery.fn.multiselect = function (e) {
                var n, o = arguments;
                return void 0 === e || "object" === ("undefined" == typeof e ? "undefined" : i(e)) ? this.each(function () {
                    jQuery.data(this, "plugin_multiselect") || jQuery.data(this, "plugin_multiselect", new t(this, e))
                }) : "string" == typeof e && "_" !== e[0] && "init" !== e ? (this.each(function () {
                    var i = jQuery.data(this, "plugin_multiselect");
                    i instanceof t && "function" == typeof i[e] && (n = i[e].apply(i, Array.prototype.slice.call(o, 1))), "unload" === e && jQuery.data(this, "plugin_multiselect", null)
                }), n) : void 0
            }
        }(jQuery)
    }, {}],
    44: [function (e, t, n) {
        "use strict";

        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e) {
            var t = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
            (0, s.default)(e).each(function () {
                (0, s.default)(this).prop("checked", t)
            })
        }

        var r = e("jquery"), s = i(r);
        e("jquery-nice-select"), e("sticky-kit");
        var a = e("object-fit-images"), l = i(a);
        e("jquery-match-height"), e("lazysizes");
        var c = e("enquire.js"), u = (i(c), e("tiny-emitter")), d = i(u);
        e("_helper");
        e("select2");
        var p = e("dot"), f = (i(p), e("../_modules/organisms/header/header")), h = i(f),
            m = e("../_modules/molecules/nav/nav"), g = i(m), v = e("../_modules/molecules/notification/notification"),
            y = i(v), b = e("../_modules/molecules/carousel-indicators/carousel-indicators"), w = i(b),
            x = e("../_modules/molecules/latest-highlights/latest-highlights"), k = i(x),
            C = e("../_modules/molecules/pushed-content/pushed-content"), T = i(C),
            _ = e("../_modules/molecules/carousel-publications/carousel-publications"), S = i(_),
            j = e("../_modules/molecules/image-text-card/image-text-card"), $ = i(j),
            A = e("../_modules/molecules/gov-logos/gov-logos"), E = i(A),
            O = e("../_modules/organisms/tab-area/tab-area"), D = i(O), q = e("../_modules/molecules/table/table"),
            P = i(q), N = e("../_modules/molecules/accordion/accordion"), L = i(N),
            H = e("../_modules/molecules/social-menu/social-menu"), M = i(H), I = e("../_modules/atoms/button/button"),
            z = i(I), Q = e("../_modules/molecules/listing-items/listing-items"), R = i(Q),
            W = e("../_modules/atoms/select-filter/select-filter"), F = i(W),
            U = e("../_modules/molecules/tab-content/tab-content"), V = i(U),
            B = e("../_modules/molecules/home-banner/home-banner"), G = i(B), Y = e("../_modules/molecules/quiz/quiz"),
            X = i(Y), J = e("../_modules/molecules/backtotop/backtotop"), K = i(J),
            Z = e("../_modules/atoms/chart/chart"), ee = i(Z), te = e("../_modules/molecules/scroll-down/scroll-down"),
            ne = i(te);
        (0, s.default)(function () {
            window.emitter = new d.default, new h.default, new g.default, new y.default, new w.default, new k.default, new T.default, new S.default, new $.default, new E.default, new P.default, new L.default, new M.default, new z.default, new R.default, new X.default, new K.default, new ne.default, (0, s.default)(".tab-area").length > 0 && new D.default, (0, s.default)(".select-filter").length > 0 && new F.default, new V.default, (0, s.default)(".home-banner").length > 0 && new G.default, (0, s.default)(".chart__wrapper").length > 0 && (window.googleChart = new ee.default), (0, l.default)();
            var e = "--focusRingDisabled", t = (0, s.default)("body");
            t.on("keydown", function (n) {
                9 === n.which && t.removeClass(e)
            }).on("mouseup", function () {
                t.addClass(e)
            }), (0, s.default)("html").removeClass("no-js");
            var n = (0, s.default)("html, body");
            if ((0, s.default)('a[href^="#"]').not('[href="#"], [href="#top"]').on("click", function (e) {
                e.preventDefault();
                var t, i = (0, s.default)(this).attr("href"), o = 0;
                (0, s.default)(".nav").length > 0 && (o = (0, s.default)(".nav").outerHeight() + 10), t = 0 == (0, s.default)(i).length ? (0, s.default)('[name="' + i.substr(1) + '"]') : (0, s.default)(i), t.closest("table").prev(".sticky-table").length > 0 && (o += t.closest("table").prev(".sticky-table").outerHeight()), n.animate({scrollTop: t.offset().top - o}, 1e3)
            }), (0, s.default)(".matchHeight").css("height", "auto").matchHeight(), window.emitter.on("fontSizeChange", function () {
                (0, s.default)(".matchHeight").css("height", "auto").matchHeight._update()
            }), (0, s.default)("select:not([multiple])").niceSelect(), (0, s.default)('.js-backtotop, a[href="#top"]').on("click", function (e) {
                e.preventDefault(), n.animate({scrollTop: 0})
            }), (0, s.default)("input#ChkSMSAll").on("click", function () {
                var e = !!(0, s.default)(this).is(":checked");
                o("span.cb-sms input[type='checkbox']", e), o(".sticky-table thead #ChkSMSAll, .rgMasterTable thead #ChkSMSAll", e)
            }), (0, s.default)("input#ChkEmailAll").on("click", function () {
                var e = !!(0, s.default)(this).is(":checked");
                o("span.cb-email input[type='checkbox']", e), o(".sticky-table thead #ChkEmailAll, .rgMasterTable thead #ChkEmailAll", e)
            }), (0, s.default)("span.cb-sms input[type='checkbox']").on("click", function () {
                var e = !!(0, s.default)(this).is(":checked"), t = 0;
                (0, s.default)("span.cb-sms input[type='checkbox']").each(function () {
                    (0, s.default)(this).is(":checked") && t++
                }), e ? t === (0, s.default)("span.cb-sms input[type='checkbox']").length && o(".sticky-table thead #ChkSMSAll, .rgMasterTable thead #ChkSMSAll", !0) : t === (0,
                    s.default)("span.cb-sms input[type='checkbox']").length - 1 && o(".sticky-table thead #ChkSMSAll, .rgMasterTable thead #ChkSMSAll", !1)
            }), (0, s.default)("span.cb-email input[type='checkbox']").on("click", function () {
                var e = !!(0, s.default)(this).is(":checked"), t = 0;
                (0, s.default)("span.cb-email input[type='checkbox']").each(function () {
                    (0, s.default)(this).is(":checked") && t++
                }), e ? t === (0, s.default)("span.cb-email input[type='checkbox']").length && o(".sticky-table thead #ChkEmailAll, .rgMasterTable thead #ChkEmailAll", !0) : t === (0, s.default)("span.cb-email input[type='checkbox']").length - 1 && o(".sticky-table thead #ChkEmailAll, .rgMasterTable thead #ChkEmailAll", !1)
            }), (0, s.default)(".btn-cancel").on("click", function () {
                (0, s.default)("input#ChkSMSAll").prop("checked", !1), (0, s.default)("input#ChkEmailAll").prop("checked", !1), o(".cb-sms", !1), o(".cb-email", !1)
            }), window.history && window.history.pushState, window.location.hash) {
                var i = window.location.hash;
                (0, s.default)(i).length ? (0, s.default)(i).addClass("anchor-target") : (i = i.substring(1), (0, s.default)('[name="' + i + '"]').length && (0, s.default)('[name="' + i + '"]').addClass("anchor-target"))
            }
        })
    }, {
        "../_modules/atoms/button/button": 19,
        "../_modules/atoms/chart/chart": 20,
        "../_modules/atoms/select-filter/select-filter": 21,
        "../_modules/molecules/accordion/accordion": 22,
        "../_modules/molecules/backtotop/backtotop": 23,
        "../_modules/molecules/carousel-indicators/carousel-indicators": 24,
        "../_modules/molecules/carousel-publications/carousel-publications": 25,
        "../_modules/molecules/gov-logos/gov-logos": 26,
        "../_modules/molecules/home-banner/home-banner": 27,
        "../_modules/molecules/image-text-card/image-text-card": 28,
        "../_modules/molecules/latest-highlights/latest-highlights": 29,
        "../_modules/molecules/listing-items/listing-items": 30,
        "../_modules/molecules/nav/nav": 31,
        "../_modules/molecules/notification/notification": 32,
        "../_modules/molecules/pushed-content/pushed-content": 33,
        "../_modules/molecules/quiz/quiz": 34,
        "../_modules/molecules/scroll-down/scroll-down": 35,
        "../_modules/molecules/social-menu/social-menu": 36,
        "../_modules/molecules/tab-content/tab-content": 37,
        "../_modules/molecules/table/table": 39,
        "../_modules/organisms/header/header": 40,
        "../_modules/organisms/tab-area/tab-area": 41,
        _helper: 42,
        dot: 1,
        "enquire.js": 6,
        jquery: 10,
        "jquery-match-height": 8,
        "jquery-nice-select": 9,
        lazysizes: 12,
        "object-fit-images": 13,
        select2: 15,
        "sticky-kit": 17,
        "tiny-emitter": 18
    }]
}, {}, [44]);
//# sourceMappingURL=main.js.map
