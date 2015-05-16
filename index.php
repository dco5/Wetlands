<?php
require 'flight/Flight.php';

Flight::route('/', function(){
    Flight::render('home');
});

Flight::route('/signin-registration',function(){
   Flight::render('signin-registration');
});

Flight::start();

