<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => '3306',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'root',
    'password' => '',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => '',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1715189229.254607,
  'passwordSalt' => 'b31bef9689f926f8',
  'cryptKey' => '739827b48797a063d6401dbaba56cda9',
  'hashSecretKey' => '70d98bcf00d4c74f419459bc6ba8a850',
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '11.1.2',
  'instanceId' => '5f416346-2c2c-4534-afa5-a4bc928ca4a5'
];
