<?php

define("ROOT", dirname(__DIR__));
define("HOST", $_SERVER['HTTP_HOST']);

const DEBUG = 1;
const WWW = ROOT.'/public';
const CONFIG = ROOT.'/config';
const HELPERS = ROOT.'/helpers';

const APP = ROOT.'/app';
const CORE = ROOT.'/core';
const VIEWS = APP.'/Views';
const ERROR_LOGS = ROOT.'/tmp/errors.log';
const CACHE =ROOT.'/tmp/cache';
const LAYOUT = 'default';
const PATH = '';
const IMAGES = WWW.'/images';

const DB_SETTINGS = [
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'db_sandbox',
    'username' => 'admin',
    'password' => 'C9qCM8ZxQDIk41GF',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'port' => 3306,
    'prefix' => '',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
];

const PAGINATION_SETTINGS = [
    'perPage' => 3,
    'midSize' => 2,
    'maxPages' => 7,
    'tpl' => 'pagination/base'
];
