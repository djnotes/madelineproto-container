<?php
     
     include __DIR__ . '/vendor/autoload.php';



     print_r($argv);


     if(!isset($argv[1])){
        echo "Username not specified. Usage: script username \n";
        exit(1);
    }

    $username = $argv[1];

    //  if (!file_exists('madeline.php')){
    //      copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
    //  }
      
    //  include 'madeline.php';
      
      
      
     use \danog\MadelineProto\API;
      
      
     $api = new API('/app/session/session.madeline');
      
     $api->async(true);
      
     
     
     $api->loop(function() use ($api, $username){
         yield $api->start();
         
         try{
             yield $api->messages->sendMessage(['peer' => $username, 'message' => 'Hello from MadelineProto Container 😎']);
         }catch(\danog\MadelineProto\Exception $e){
             echo $e->getMessage();
         }
     });
 
 
 