/******/ (() => { // webpackBootstrap
/*!*********************!*\
  !*** ./src/main.js ***!
  \*********************/
var app = new Vue({
  el: "#app",
  data: {
    listaCd: []
  },
  mounted: function mounted() {
    var _this = this;

    axios.get("dist/php/data.php").then(function (response) {
      var cd = response.data;
      _this.listaCd = cd;
    });
  }
});
/******/ })()
;