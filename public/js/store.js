/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/store.js ***!
  \*******************************/
$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  function hiddenBox() {
    $('#helper').hide();
  } // window.oncontextmenu = function (e) {
  //     e.preventDefault()
  //
  //     var box = $('#helper');
  //     box.show()
  //     box.css('left', e.pageX + 'px')
  //     box.css('top', e.pageY + 'px')
  // };
  //
  // window.onclick = function () {
  //     hiddenBox();
  // }

});
/******/ })()
;