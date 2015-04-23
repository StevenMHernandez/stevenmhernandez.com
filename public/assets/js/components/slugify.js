define(function (require) {
  var $ = require('jquery');

  return function (stringSelector, slugSelector) {
    var attr = {
      auto: true
    };
    var $string = $(stringSelector);
    var $slug = $(slugSelector);

    $string.keyup(function () {
      if (attr.auto) {
        $slug.val(slugify($string.val()));
      }
    });

    $slug.keyup(function () {
      attr.auto = false;
      $slug.val(slugify($slug.val()));
    });

    var slugify = function(str) {
      // https://gist.github.com/mathewbyrne/1280286
      return str.toString().toLowerCase()
        .replace(/\s+/g, '-')
        .replace(/[^\w\-]+/g, '')
        .replace(/\-\-+/g, '-')
        .replace(/^-+/, '');
    }
  };
});