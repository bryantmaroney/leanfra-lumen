<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    return view('index',['title' => 'Home']);
});

$router->get('/sendMail',"MailController@sendMail");

$router->get('choice_is_yours', function () {
    return view('choice_is_yours',['title' => 'Choice is yours']);
});

$router->get('contact', function () {
    return view('contact_our_tech',['title' => 'Contact']);
});

$router->get('gpu_servers', function () {
    return view('gpu_servers',['title' => 'GPU Servers']);
});

$router->get('why_leanfra', function () {
    return view('why_leanfra',['title' => 'Why Leanfra']);
});

$router->get('thankyou', function () {
    return view('thank_you',['title' => 'Thank you']);
});

$router->get('pricing', function () {
    return view('tailored_pricing',['title' => 'Pricing']);
});

$router->get('try_leanfra', function () {
    return view('try_leanfra',['title' => 'Try Leanfra']);
});

$router->get('networking', function () {
    return view('networking',['title' => 'Networking']);
});

$router->get('storage', function () {
    return view('storage',['title' => 'Storage']);
});

$router->get('professional_services', function () {
    return view('prof_services',['title' => 'Professional Services']);
});

$router->get('how_can_we_help_you', function () {
    return view('how_can_we_help_you',['title' => 'Help']);
});

$router->get('form_step1', function () {
    return view('form_step1');
});
