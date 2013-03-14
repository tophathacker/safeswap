<?php

// should probably use spl_autoload
require 'libs/Setup.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

require 'config/paths.php';
require 'config/database.php';

$app = new Setup();
