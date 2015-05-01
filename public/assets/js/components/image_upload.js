define(function (require) {
  var $ = require('jquery');

  return function (inputSelector, textareaSelector) {
    var $input = $(inputSelector);
    var $textarea = $(textareaSelector);

    $input.on('change', function () {
      var file = this.files[0];
      var formData = new FormData();
      formData.append('_token', $('#_token').val());
      formData.append('image', file, file.name);

      $.ajax({
        url: '/admin/image',
        type: 'POST',
        success: function (response) {
          $textarea.val($textarea.val() + '<img src="' + response + '" alt=""/>');
        },
        data: formData,
        processData: false,
        contentType: false
      });
    });

  };
});