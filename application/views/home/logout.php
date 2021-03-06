<?php
/**
 * PHP MVC template
 *
 * @package jpFramework
 * @author JP
 * @link http://www.???.com
 * @version 0.3a
 *
 * @copyright 2016
 *
 * Description
 **/

?>

<script>
	/* Copyright (C) 2013 Justin Windle, http://soulwire.co.uk */
	var Sketch = function () { "use strict"; function e(e) { return "[object Array]" == Object.prototype.toString.call(e) } function t(e) { return "function" == typeof e } function n(e) { return "number" == typeof e } function o(e) { return "string" == typeof e } function r(e) { return E[e] || String.fromCharCode(e) } function i(e, t, n) { for (var o in t) !n && o in e || (e[o] = t[o]); return e } function u(e, t) { return function () { e.apply(t, arguments) } } function a(e) { var n = {}; for (var o in e) n[o] = t(e[o]) ? u(e[o], e) : e[o]; return n } function c(e) { function n(n) { t(n) && n.apply(e, [].splice.call(arguments, 1)) } function u(e) { for (_ = 0; _ < J.length; _++) G = J[_], o(G) ? R[(e ? "add" : "remove") + "EventListener"].call(R, G, k, !1) : t(G) ? k = G : R = G } function c() { L(T), T = I(c), U || (n(e.setup), U = t(e.setup), n(e.resize)), e.running && !j && (e.dt = (B = +new Date) - e.now, e.millis += e.dt, e.now = B, n(e.update), e.autoclear && K && e.clear(), n(e.draw)), j = ++j % e.interval } function l() { R = Y ? e.style : e.canvas, D = Y ? "px" : "", e.fullscreen && (e.height = w.innerHeight, e.width = w.innerWidth), R.height = e.height + D, R.width = e.width + D, e.retina && K && X && (R.height = e.height * X, R.width = e.width * X, R.style.height = e.height + "px", R.style.width = e.width + "px", e.scale(X, X)), U && n(e.resize) } function s(e, t) { return N = t.getBoundingClientRect(), e.x = e.pageX - N.left - w.scrollX, e.y = e.pageY - N.top - w.scrollY, e } function f(t, n) { return s(t, e.element), n = n || {}, n.ox = n.x || t.x, n.oy = n.y || t.y, n.x = t.x, n.y = t.y, n.dx = n.x - n.ox, n.dy = n.y - n.oy, n } function g(e) { if (e.preventDefault(), W = a(e), W.originalEvent = e, W.touches) for (M.length = W.touches.length, _ = 0; _ < W.touches.length; _++) M[_] = f(W.touches[_], M[_]); else M.length = 0, M[0] = f(W, V); return i(V, M[0], !0), W } function h(t) { for (t = g(t), q = (Q = J.indexOf(z = t.type)) - 1, e.dragging = /down|start/.test(z) ? !0 : /up|end/.test(z) ? !1 : e.dragging; q;) o(J[q]) ? n(e[J[q--]], t) : o(J[Q]) ? n(e[J[Q++]], t) : q = 0 } function p(t) { F = t.keyCode, H = "keyup" == t.type, Z[F] = Z[r(F)] = !H, n(e[t.type], t) } function v(t) { e.autopause && ("blur" == t.type ? b : C)(), n(e[t.type], t) } function C() { e.now = +new Date, e.running = !0 } function b() { e.running = !1 } function P() { (e.running ? b : C)() } function A() { K && e.clearRect(0, 0, e.width, e.height) } function S() { O = e.element.parentNode, _ = x.indexOf(e), O && O.removeChild(e.element), ~_ && x.splice(_, 1), u(!1), b() } var T, k, R, O, N, _, D, B, G, W, z, F, H, q, Q, j = 0, M = [], U = !1, X = w.devicePixelRatio, Y = e.type == m, K = e.type == d, V = { x: 0, y: 0, ox: 0, oy: 0, dx: 0, dy: 0 }, J = [e.element, h, "mousedown", "touchstart", h, "mousemove", "touchmove", h, "mouseup", "touchend", h, "click", y, p, "keydown", "keyup", w, v, "focus", "blur", l, "resize"], Z = {}; for (F in E) Z[E[F]] = !1; return i(e, { touches: M, mouse: V, keys: Z, dragging: !1, running: !1, millis: 0, now: 0 / 0, dt: 0 / 0, destroy: S, toggle: P, clear: A, start: C, stop: b }), x.push(e), e.autostart && C(), u(!0), l(), c(), e } for (var l, s, f = "E LN10 LN2 LOG2E LOG10E PI SQRT1_2 SQRT2 abs acos asin atan ceil cos exp floor log round sin sqrt tan atan2 pow max min".split(" "), g = "__hasSketch", h = Math, d = "canvas", p = "webgl", m = "dom", y = document, w = window, x = [], v = { fullscreen: !0, autostart: !0, autoclear: !0, autopause: !0, container: y.body, interval: 1, globals: !0, retina: !1, type: d }, E = { 8: "BACKSPACE", 9: "TAB", 13: "ENTER", 16: "SHIFT", 27: "ESCAPE", 32: "SPACE", 37: "LEFT", 38: "UP", 39: "RIGHT", 40: "DOWN" }, C = { CANVAS: d, WEB_GL: p, WEBGL: p, DOM: m, instances: x, install: function (t) { if (!t[g]) { for (var o = 0; o < f.length; o++) t[f[o]] = h[f[o]]; i(t, { TWO_PI: 2 * h.PI, HALF_PI: h.PI / 2, QUATER_PI: h.PI / 4, random: function (t, o) { return e(t) ? t[~~(h.random() * t.length)] : (n(o) || (o = t || 1, t = 0), t + h.random() * (o - t)) }, lerp: function (e, t, n) { return e + n * (t - e) }, map: function (e, t, n, o, r) { return (e - t) / (n - t) * (r - o) + o } }), t[g] = !0 } }, create: function (e) { return e = i(e || {}, v), e.globals && C.install(self), l = e.element = e.element || y.createElement(e.type === m ? "div" : "canvas"), s = e.context = e.context || function () { switch (e.type) { case d: return l.getContext("2d", e); case p: return l.getContext("webgl", e) || l.getContext("experimental-webgl", e); case m: return l.canvas = l } }(), (e.container || y.body).appendChild(l), C.augment(s, e) }, augment: function (e, t) { return t = i(t || {}, v), t.element = e.canvas || e, t.element.className += " sketch", i(e, t, !0), c(e) } }, b = ["ms", "moz", "webkit", "o"], P = self, A = 0, S = "AnimationFrame", T = "request" + S, k = "cancel" + S, I = P[T], L = P[k], R = 0; R < b.length && !I; R++) I = P[b[R] + "Request" + S], L = P[b[R] + "Cancel" + S]; return P[T] = I = I || function (e) { var t = +new Date, n = h.max(0, 16 - (t - A)), o = setTimeout(function () { e(t + n) }, n); return A = t + n, o }, P[k] = L = L || function (e) { clearTimeout(e) }, C }();
</script>

<div class="info">
	<h1>
		<span class="glyphicon glyphicon-ok"></span>
	</h1>
	<p>You are successfully logged out of the system.</p>

	<p class="go-back">
		Close this window or go to the
        <a href="<?php  echo ASSET_ROOT;?>/user/login">
			Logon page
		</a>.
	</p>
</div>

<div id="container"></div>

<script type="text/javascript">
		var Building, Skyline, dt, sketch, skylines;

        sketch = Sketch.create();

        sketch.mouse.x = sketch.width / 10;

        sketch.mouse.y = sketch.height;

        skylines = [];

        dt = 1;

        Building = function(config) {
          return this.reset(config);
        };

        Building.prototype.reset = function(config) {
          this.layer = config.layer;
          this.x = config.x;
          this.y = config.y;
          this.width = config.width;
          this.height = config.height;
          this.color = config.color;
          this.slantedTop = floor(random(0, 10)) === 0;
          this.slantedTopHeight = this.width / random(2, 4);
          this.slantedTopDirection = round(random(0, 1)) === 0;
          this.spireTop = floor(random(0, 15)) === 0;
          this.spireTopWidth = random(this.width * .01, this.width * .07);
          this.spireTopHeight = random(10, 20);
          this.antennaTop = !this.spireTop && floor(random(0, 10)) === 0;
          this.antennaTopWidth = this.layer / 2;
          return this.antennaTopHeight = random(5, 20);
        };

        Building.prototype.render = function() {
          sketch.fillStyle = sketch.strokeStyle = this.color;
          sketch.lineWidth = 2;
          sketch.beginPath();
          sketch.rect(this.x, this.y, this.width, this.height);
          sketch.fill();
          sketch.stroke();
          if (this.slantedTop) {
            sketch.beginPath();
            sketch.moveTo(this.x, this.y);
            sketch.lineTo(this.x + this.width, this.y);
            if (this.slantedTopDirection) {
              sketch.lineTo(this.x + this.width, this.y - this.slantedTopHeight);
            } else {
              sketch.lineTo(this.x, this.y - this.slantedTopHeight);
            }
            sketch.closePath();
            sketch.fill();
            sketch.stroke();
          }
          if (this.spireTop) {
            sketch.beginPath();
            sketch.moveTo(this.x + (this.width / 2), this.y - this.spireTopHeight);
            sketch.lineTo(this.x + (this.width / 2) + this.spireTopWidth, this.y);
            sketch.lineTo(this.x + (this.width / 2) - this.spireTopWidth, this.y);
            sketch.closePath();
            sketch.fill();
            sketch.stroke();
          }
          if (this.antennaTop) {
            sketch.beginPath();
            sketch.moveTo(this.x + (this.width / 2), this.y - this.antennaTopHeight);
            sketch.lineTo(this.x + (this.width / 2), this.y);
            sketch.lineWidth = this.antennaTopWidth;
            return sketch.stroke();
          }
        };

        Skyline = function(config) {
          this.x = 0;
          this.buildings = [];
          this.layer = config.layer;
          this.width = {
            min: config.width.min,
            max: config.width.max
          };
          this.height = {
            min: config.height.min,
            max: config.height.max
          };
          this.speed = config.speed;
          this.color = config.color;
          this.populate();
          return this;
        };

        Skyline.prototype.populate = function() {
          var newHeight, newWidth, totalWidth, _results;
          totalWidth = 0;
          _results = [];
          while (totalWidth <= sketch.width + (this.width.max * 2)) {
            newWidth = round(random(this.width.min, this.width.max));
            newHeight = round(random(this.height.min, this.height.max));
            this.buildings.push(new Building({
              layer: this.layer,
              x: this.buildings.length === 0 ? 0 : this.buildings[this.buildings.length - 1].x + this.buildings[this.buildings.length - 1].width,
              y: sketch.height - newHeight,
              width: newWidth,
              height: newHeight,
              color: this.color
            }));
            _results.push(totalWidth += newWidth);
          }
          return _results;
        };

        Skyline.prototype.update = function() {
          var firstBuilding, lastBuilding, newHeight, newWidth;
          this.x -= (sketch.mouse.x * this.speed) * dt;
          firstBuilding = this.buildings[0];
          if (firstBuilding.width + firstBuilding.x + this.x < 0) {
            newWidth = round(random(this.width.min, this.width.max));
            newHeight = round(random(this.height.min, this.height.max));
            lastBuilding = this.buildings[this.buildings.length - 1];
            firstBuilding.reset({
              layer: this.layer,
              x: lastBuilding.x + lastBuilding.width,
              y: sketch.height - newHeight,
              width: newWidth,
              height: newHeight,
              color: this.color
            });
            return this.buildings.push(this.buildings.shift());
          }
        };

        Skyline.prototype.render = function() {
          var i;
          i = this.buildings.length;
          sketch.save();
          sketch.translate(this.x, (sketch.height - sketch.mouse.y) / 20 * this.layer);
          while (i--) {
            this.buildings[i].render(i);
          }
          return sketch.restore();
        };

        sketch.setup = function() {
          var i, _results;
          i = 5;
          _results = [];
          while (i--) {
            _results.push(skylines.push(new Skyline({
              layer: i + 1,
              width: {
                min: (i + 1) * 30,
                max: (i + 1) * 40
              },
              height: {
                min: 150 - (i * 35),
                max: 300 - (i * 35)
              },
              speed: (i + 1) * .003,
              color: 'hsl( 200, ' + (((i + 1) * 1) + 10) + '%, ' + (75 - (i * 13)) + '% )'
            })));
          }
          return _results;
        };

        sketch.clear = function() {
          return sketch.clearRect(0, 0, sketch.width, sketch.height);
        };

        sketch.update = function() {
          var i, _results;
          dt = sketch.dt < .1 ? .1 : sketch.dt / 16;
          dt = dt > 5 ? 5 : dt;
          i = skylines.length;
          _results = [];
          while (i--) {
            _results.push(skylines[i].update(i));
          }
          return _results;
        };

        sketch.draw = function() {
          var i, _results;
          i = skylines.length;
          _results = [];
          while (i--) {
            _results.push(skylines[i].render(i));
          }
          return _results;
        };

        $(window).on('mousemove', function(e) {
          // sketch.mouse.x = e.pageX;
          return sketch.mouse.y = e.pageY;
        });
</script>