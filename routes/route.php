<?php

Flight::route('/home', function(){
    return Flight::render('hello.php', array('name' => 'Mindise'));
});