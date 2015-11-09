<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['susi.test'] = array(
    'uri' => 'test-susi.pantheon.io',
    'db-url' => 'mysql://pantheon:987d138da077483488d62ae1fea529d6@dbserver.test.4c23c763-4b44-46af-a105-b99de9249ec9.drush.in:12769/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.4c23c763-4b44-46af-a105-b99de9249ec9.drush.in',
    'remote-user' => 'test.4c23c763-4b44-46af-a105-b99de9249ec9',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['susi.dev'] = array(
    'uri' => 'dev-susi.pantheon.io',
    'db-url' => 'mysql://pantheon:cef825964eb54490b1239e5e6a8e7ca2@dbserver.dev.4c23c763-4b44-46af-a105-b99de9249ec9.drush.in:16020/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.4c23c763-4b44-46af-a105-b99de9249ec9.drush.in',
    'remote-user' => 'dev.4c23c763-4b44-46af-a105-b99de9249ec9',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['susi.live'] = array(
    'uri' => 'live-susi.pantheon.io',
    'db-url' => 'mysql://pantheon:336bf7c6cbfe4dcd88117bd4187e3470@dbserver.live.4c23c763-4b44-46af-a105-b99de9249ec9.drush.in:14157/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.4c23c763-4b44-46af-a105-b99de9249ec9.drush.in',
    'remote-user' => 'live.4c23c763-4b44-46af-a105-b99de9249ec9',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['gamecrate-xteam.test'] = array(
    'uri' => 'test-gamecrate-xteam.gotpantheon.com',
    'db-url' => 'mysql://pantheon:4bcebe964df641e39db7728f89ca0932@dbserver.test.1ef49bdd-a6bc-424f-8680-917ea4530d62.drush.in:17649/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.1ef49bdd-a6bc-424f-8680-917ea4530d62.drush.in',
    'remote-user' => 'test.1ef49bdd-a6bc-424f-8680-917ea4530d62',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['gamecrate-xteam.dev'] = array(
    'uri' => 'dev-gamecrate-xteam.gotpantheon.com',
    'db-url' => 'mysql://pantheon:36d6268b8ee54532b1cdaedc4d26b70f@dbserver.dev.1ef49bdd-a6bc-424f-8680-917ea4530d62.drush.in:18771/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.1ef49bdd-a6bc-424f-8680-917ea4530d62.drush.in',
    'remote-user' => 'dev.1ef49bdd-a6bc-424f-8680-917ea4530d62',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['gamecrate-xteam.live'] = array(
    'uri' => 'live-gamecrate-xteam.gotpantheon.com',
    'db-url' => 'mysql://pantheon:2cfb74c3f7454be59046ffe58198b2ef@dbserver.live.1ef49bdd-a6bc-424f-8680-917ea4530d62.drush.in:15601/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.1ef49bdd-a6bc-424f-8680-917ea4530d62.drush.in',
    'remote-user' => 'live.1ef49bdd-a6bc-424f-8680-917ea4530d62',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['dev-educatesimplify.test'] = array(
    'uri' => 'test-dev-educatesimplify.gotpantheon.com',
    'db-url' => 'mysql://pantheon:0d34741076e444c3a92bfce67deb128b@dbserver.test.b99e3286-42bd-44b2-be72-2a82e35e6855.drush.in:15237/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.b99e3286-42bd-44b2-be72-2a82e35e6855.drush.in',
    'remote-user' => 'test.b99e3286-42bd-44b2-be72-2a82e35e6855',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['dev-educatesimplify.live'] = array(
    'uri' => 'live-dev-educatesimplify.gotpantheon.com',
    'db-url' => 'mysql://pantheon:d057a87c72814f78bf26250b5299975b@dbserver.live.b99e3286-42bd-44b2-be72-2a82e35e6855.drush.in:14705/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.b99e3286-42bd-44b2-be72-2a82e35e6855.drush.in',
    'remote-user' => 'live.b99e3286-42bd-44b2-be72-2a82e35e6855',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['dev-educatesimplify.dev'] = array(
    'uri' => 'dev-dev-educatesimplify.gotpantheon.com',
    'db-url' => 'mysql://pantheon:6d07212e01ba432cacc65f8a29d623b6@dbserver.dev.b99e3286-42bd-44b2-be72-2a82e35e6855.drush.in:12425/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.b99e3286-42bd-44b2-be72-2a82e35e6855.drush.in',
    'remote-user' => 'dev.b99e3286-42bd-44b2-be72-2a82e35e6855',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['berkeley-test.test'] = array(
    'uri' => 'test-berkeley-test.pantheon.io',
    'db-url' => 'mysql://pantheon:3926b4fd530d4d4bb983e3c3449110a3@dbserver.test.0ab36a73-0bbf-430b-ac1f-59fb3ea920d3.drush.in:15818/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.0ab36a73-0bbf-430b-ac1f-59fb3ea920d3.drush.in',
    'remote-user' => 'test.0ab36a73-0bbf-430b-ac1f-59fb3ea920d3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['berkeley-test.live'] = array(
    'uri' => 'live-berkeley-test.pantheon.io',
    'db-url' => 'mysql://pantheon:cb4a415171164ecba554254bc3b26a4e@dbserver.live.0ab36a73-0bbf-430b-ac1f-59fb3ea920d3.drush.in:16215/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.0ab36a73-0bbf-430b-ac1f-59fb3ea920d3.drush.in',
    'remote-user' => 'live.0ab36a73-0bbf-430b-ac1f-59fb3ea920d3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['berkeley-test.dev'] = array(
    'uri' => 'dev-berkeley-test.pantheon.io',
    'db-url' => 'mysql://pantheon:d9cc5445d00442f49609aa2d67452490@dbserver.dev.0ab36a73-0bbf-430b-ac1f-59fb3ea920d3.drush.in:15763/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.0ab36a73-0bbf-430b-ac1f-59fb3ea920d3.drush.in',
    'remote-user' => 'dev.0ab36a73-0bbf-430b-ac1f-59fb3ea920d3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
