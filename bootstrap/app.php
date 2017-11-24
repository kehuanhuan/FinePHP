<?php
/**
 * 
 */

define('KHH', realpath('./'));

define('CORE', KHH . '/core');
define('APP', KHH . '/app');
define('MODULE', '\app');

define('DEBUG', true);


require CORE.'/common/function.php';

require CORE.'/khh.class.php';

\core\khh::run();

