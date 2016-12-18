<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'ext' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
    'default' => '',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'params' => '\'unknown\',\'confirmed\',\'unconfirmed\',\'unavailable\'',
    'null' => 0,
    'default' => 'unknown',
  ),
);