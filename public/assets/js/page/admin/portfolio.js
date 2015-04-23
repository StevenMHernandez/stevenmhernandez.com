requirejs.config({
  baseUrl: '/assets/js/',
  paths: {
    jquery: 'bower_components/jquery/dist/jquery',
    ractive: 'bower_components/ractive/ractive',
    rv: 'bower_components/rv/rv',
    slugify: 'components/slugify',
    projects_select: 'components/projects_select'
  }
});

define(function(require) {
  var slugify = require('slugify')('#title', '#slug');
  var projects_select = require('projects_select')('#projects_select', '#projectsJson');
});