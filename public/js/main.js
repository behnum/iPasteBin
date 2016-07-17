(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Clipboard = function () {
  function Clipboard() {
    var title = arguments.length <= 0 || arguments[0] === undefined ? "Press Ctrl + C and Enter" : arguments[0];
    var text = arguments.length <= 1 || arguments[1] === undefined ? location.href : arguments[1];

    _classCallCheck(this, Clipboard);

    this.title = title;
    this.text = text;
  }

  _createClass(Clipboard, [{
    key: "showPanel",
    value: function showPanel() {
      prompt(this.title, this.text);
    }
  }]);

  return Clipboard;
}();

exports.default = Clipboard;

},{}],2:[function(require,module,exports){
'use strict';

var _Clipboard = require('./Clipboard');

var _Clipboard2 = _interopRequireDefault(_Clipboard);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(function () {

  var clip = new _Clipboard2.default();
  var clipElem = $('a#clipboard');
  clipElem.on('click', function (e) {
    e.preventDefault();

    clip.showPanel();
    return;
  });

  var itext = $('textarea#iText');
  var defaultText = "Start Typing . . .";

  itext.keydown(function () {
    if (itext.val() == defaultText) {
      itext.val('');
    }

    if (itext.val().indexOf(defaultText) >= 0) {
      itext.val('');
    }
  });
})(jQuery);

},{"./Clipboard":1}]},{},[2]);

//# sourceMappingURL=main.js.map
