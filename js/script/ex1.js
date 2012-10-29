var b;

(function() {
  var cd = 'AAAAAaaa';

  console.log(cd);

  function t1() {
    var cd = 'BBbbbbb';
    console.log('t1::' + cd);
  }

  t1();

  console.log('noname::' + cd);
})()

function test(b, c)
{
  if (undefined === c) {
    console.log('No parameters defined. lalala');
  } else {

    console.log(b);
  }
}

var t = test;

var c = 'as';

(function ($, $$) {
  console.log($);

  if (undefined == $$) {
    console.log('No second parameter');
  }
})(c)

jQuery(document).ready(function () {
  test();
  test(12);
  test(33, 32);
  t();
});