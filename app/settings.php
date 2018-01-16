<?php
/**
 * Created by PhpStorm.
 * User: p15241925
 * Date: 24/11/2017
 * Time: 11:49
 */


 ini_set('display_errors', 'On');
 ini_set('html_errors', 'On');
 ini_set('xdebug.trace_output_name', 'message_handler.%t');

 define('DIRSEP', DIRECTORY_SEPARATOR);

 $url_root = $_SERVER['SCRIPT_NAME'];
 $url_root = implode('/', explode('/', $url_root, -1));
 $css_path = $url_root . '/css/main2.css';
 define('CSS_PATH', $css_path);
 define('APP_NAME', 'Message Interface CWK by group: 17-3110-Ad');
 define('LANDING_PAGE', $_SERVER['SCRIPT_NAME']);

/**
 * sets classes path to model folder
 * view is done with twig.
 * pdo library used for database handling.
 */
 $settings = [
   "settings" => [
     'displayErrorDetails' => true,
     'addContentLengthHeader' => false,
     'mode' => 'development',
     'debug' => true,
     'class_path' => __DIR__ . '/model/',
     'view' => [
       'template_path' => __DIR__ . '/templates/',
       'twig' => [
         'cache' => __DIR__ . '/cache/twig',
         'auto_reload' => true,
         ]],
     'pdo' => [
       'rdbms' => 'mysql',
       'host' => 'mysql.tech.dmu.ac.uk',
       'db_name' => 'p15241925db',
       'port' => '3306',
       'user_name' => 'p15241925_web',
       'user_password' => 'sCull=66',
       'charset' => 'utf8',
       'collation' => 'utf8_unicode_ci',
       'options' => [
         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
         PDO::ATTR_EMULATE_PREPARES   => true,
       ],
     ]
    ],
  ];

 return $settings;
