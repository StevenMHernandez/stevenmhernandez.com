requirejs.config({
  baseUrl: '/assets/js/',
  paths: {
    jquery: 'bower_components/jquery/dist/jquery',
    ractive: 'bower_components/ractive/ractive',
    rv: 'bower_components/rv/rv',
    slugify: 'components/slugify',
    image_upload: 'components/image_upload'
  }
});

define(function(require) {
  var slugify = require('slugify')('#title', '#slug');
  var image_upload = require('image_upload')('#upload', '#image');
  var body_image_upload = require('image_upload')('#body_upload', '#body');
});