<?php

//ini_set('display_errors', 1);

use Pecee\SimpleRouter\SimpleRouter;

require_once '../vendor/autoload.php'; // voor online versie: ../mvc/vendor/autoload.php
require_once __DIR__ . '/../private/includes/functions.php'; // voor online versie: /../mvc/private/includes/functions.php
require_once get_config('PRIVATE') . '/models/model.php';
require_once get_config('PRIVATE') . '/routes.php';

SimpleRouter::start(); // Match with url
