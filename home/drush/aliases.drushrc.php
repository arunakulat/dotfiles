<?php

// Gargravarr test hosts.
$gargravarr = array(
  'atka',
  'bachelor',
  'copahue',
  'demo',
  'dempo',
  'eldfell',
  'fuego',
  'galeras',
  'hood',
  'isspah',
  'jornada',
  'karthala',
  'langila',
  'myoko',
  'nazko',
  'okataina',
  'pinatubo',
  'qualibou',
  'rainier',
  'shasta',
  'tsurumi',
  'undara',
  'visoke',
  'waiowa',
  'yellowstone',
  'zimina',
);
foreach ($gargravarr as $g_host) {
  $aliases[$g_host] = array(
    'uri' => 'default',
    'root' => '/var/www/' . $g_host . '/current',
    'remote-user' => 'ajd',
    'remote-host' => 'gargravarr.opensourcery.com',
    'path-aliases' => array(
      '%drush' => '/usr/local/bin/drush',
      '%dump-dir' => '/home/ajd/drush-dumps',
    ),
  );
}
