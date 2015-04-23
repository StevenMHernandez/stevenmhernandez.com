define(function (require) {
  return function (selectSelector, listInputSelector) {
    var $ = require('jquery');
    var Ractive = require('ractive');
    var rv = require('rv');
    var projectsListTemplate = require('rv!templates/admin/portfolio/project_list');
    Ractive.DEBUG = false;

    var $select = $(selectSelector);
    var $list = $(listInputSelector);

    var projectsList = $list.val() ? JSON.parse($list.val()) : [];

    var ractive = new Ractive({
      el: '#projects_list',
      template: projectsListTemplate,
      data: {
        projects: projectsList
      }
    });

    $select.on('change', function () {
      var id = $(this).val();
      var title = $(this).find("option:selected").text();
      projectsList.push({
        id: id,
        title: title
      });
      $select.val('default');
      var $delete = $('.delete');
      $delete.off('click');
      $delete.on('click', function (e) {
        remove(e);
      });
    });
    var $delete = $('.delete');
    $delete.off('click');
    $delete.on('click', function (e) {
      remove(e);
    });

    var remove = function (e) {
      e.preventDefault();
      projectsList.splice($(e.currentTarget).data('index'), 1);
    };
  }

});