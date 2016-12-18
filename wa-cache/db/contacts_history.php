<?php
return array (
  'id' => 
  array (
    'type' => 'bigint',
    'params' => '20',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'params' => '20',
    'null' => 0,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'hash' => 
  array (
    'type' => 'text',
    'null' => 0,
  ),
  'contact_id' => 
  array (
    'type' => 'bigint',
    'params' => '20',
    'null' => 0,
  ),
  'position' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'accessed' => 
  array (
    'type' => 'datetime',
  ),
  'cnt' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '-1',
  ),
);