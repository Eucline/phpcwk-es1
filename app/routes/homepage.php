<?php
/**
 * Created by PhpStorm.
 * User: p15241925
 * Date: 08/12/2017
 * Time: 10:48
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function(Request $request, Response $response)
{
    return $this->view->render($response,
        'homepageform.html.twig',
        [
            'css_path' => CSS_PATH,
            'landing_page' => LANDING_PAGE,
            'method' => 'post',
            'action' => 'index.php/retrievemessages',
            'initial_input_box_value' => null,
            'page_title' => APP_NAME,
            'page_heading_1' => APP_NAME,
            'page_heading_2' => 'Look at messages',
            'page_text' => 'Enter your M2M username, password and number of messages to be read',
        ]);
})->setName('homepage');
