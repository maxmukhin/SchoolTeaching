function generate(id) {
  var funcId = id;

  return function (newFuncId) {
    console.log(funcId);

    if (undefined !== newFuncId) {
      funcId = newFuncId;
    }
  }
}

var a = generate(1);
var b = generate(2);

jQuery(document).ready(function () {
  a();
  b();
});