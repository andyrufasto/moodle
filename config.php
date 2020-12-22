<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-18-211-171-122.compute-1.amazonaws.com');
$CFG->dbname    = getenv('dbuklg11sb8s3f');
$CFG->dbuser    = getenv('juawqjlpqtjeyv');
$CFG->dbpass    = getenv('3b2a2c0d5b03fb0c703d82915b3ec1b74ef2bf829549e6e3ecab6e47eb7b0404');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://moodle-andyrufasto.herokuapp.com');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
