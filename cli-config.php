<?php
require_once __DIR__."/configs/database.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);