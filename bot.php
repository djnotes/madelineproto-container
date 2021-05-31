<?php
     
     include __DIR__ . '/vendor/autoload.php';



     print_r($argv);


     if(!isset($argv[1])){
        echo "Username not specified. Usage: script username \n";
        exit(1);
    }

    $username = $argv[1];

    //  if (!file_exists(__DIR__ . '/madeline.php')){
    //      copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
    //  }
      
    //  include __DIR__ . '/madeline.php';
      
      
      
     use \danog\MadelineProto\API;
      
      
     $api = new API('session/session.madeline');
//      api_id = 1314569
// api_hash = a053626991f848b70849a85f0effcaf2
      
     $api->async(true);
      
     
     
     $api->loop(function() use ($api, $username){
         yield $api->start();
         
         try{
             yield $api->messages->sendMessage(['peer' => $username, 'message' => 'Hello from MadelineProto Container 😎']);
         }catch(\danog\MadelineProto\Exception $e){
             echo $e->getMessage();
         }
     });
 
 
 # Changed the file