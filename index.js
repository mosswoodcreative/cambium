
'use strict';

module.exports = function(kbox) {

  // Pkg.json
  var pkgJson = require('./package.json');
  var PLUGIN_NAME = 'kalabox-app-pantheon';

  // Instrinsc modules
  var path = require('path');

  // Grab vendor modules
  var clientPath = pkgJson.postInstallAssets[PLUGIN_NAME].client;
  var Client = require('./' + path.join('vendor', PLUGIN_NAME, clientPath));
  var pantheon = new Client(kbox);

  // Load our events
  // @todo: need a better way to load this so it is
  // just for pantheon apps
  require('./lib/events.js')(kbox, pantheon);

  // Declare our app to the world
  kbox.create.add('pantheon', {
    task: {
      name: 'Pantheon',
      module: 'kalabox-app-pantheon',
      description: 'Creates a Pantheon app.'
    }
  });

  // Load all our steps and inquiries
  require('./lib/create.js')(kbox, pantheon);

  // Task to create kalabox apps
  kbox.tasks.add(function(task) {
    kbox.create.buildTask(task, 'pantheon');
  });

};
