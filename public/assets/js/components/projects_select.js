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
        $list.remove();

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
        var $shift_up = $('.shift_up');
        $shift_up.off('click');
        $shift_up.on('click', function (e) {
            shift_up(e);
        });
        var $shift_down = $('.shift_down');
        $shift_down.off('click');
        $shift_down.on('click', function (e) {
            shift_down(e);
        });

        var remove = function (e) {
            e.preventDefault();
            projectsList.splice($(e.currentTarget).data('index'), 1);
        };

        var shift_up = function (e) {
            e.preventDefault();
            var index = $(e.currentTarget).data('index');
            var projects = ractive.get("projects");
            if (index > 0) {
                var temp = projects[index - 1];
                projects[index - 1] = projects[index];
                projects[index] = temp;
                ractive.set('projects', projects);
            }
        };

        var shift_down = function (e) {
            e.preventDefault();
            var index = $(e.currentTarget).data('index');
            var projects = ractive.get("projects");
            if (index + 1 < projects.length) {
                var temp = projects[index + 1];
                projects[index + 1] = projects[index];
                projects[index] = temp;
                ractive.set('projects', projects);
            }
        };
    }
});