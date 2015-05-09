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
      console.log(file.name);
      var new_name = prompt('Preferred File Name:', file.name);
      if(new_name != null) {
        var alt = prompt('Alt text:');
        formData.append('new_name', new_name);

        $.ajax({
          url: '/admin/image',
          type: 'POST',
          success: function (response) {
            console.log(response);
            $textarea.val($textarea.val() + '<img src="' + response + '" alt="' + alt + '"/>');
          },
          data: formData,
          processData: false,
          contentType: false
        });
      }
    });

  };
});