<?php
     
     include __DIR__ . '/vendor/autoload.php';

     use \danog\MadelineProto\API;

     $username = readline("Welcome to MadelineProto Container \n
     Please enter a Telegram username (preferrably yours):");


     $api = new API('/app/session/session.madeline');

    
          
     $api->async(true);
     
     $api->loop(function() use ($api, $username){

         yield $api->start();
         
         try{
             yield $api->messages->sendMessage(['peer' => $username, 'message' => 'Hello from MadelineProto Container 😎']);
         }catch(\danog\MadelineProto\Exception $e){
             echo "{$e->getMessage()}\n";
         }
     }); 
