 <?php

    include __DIR__ . '/vendor/autoload.php';


    use \danog\MadelineProto\Logger;


    print("Started script");
    $MadelineProto = new \danog\MadelineProto\API('session/session.madeline');
	
    
    $MadelineProto->start();
    $info = $MadelineProto->getSelf();
    print_r($info);

    $sender = $MadelineProto->messages->sendMessage(['peer' => '@doctool_bot', 'message' => $argv[1]]);
	
    //sleep(1);
    Logger::log("Uploading photo...");
    $media = $MadelineProto->messages->uploadMedia([
	  'media' => [
	     '_' => 'inputMediaUploadedDocument',
		 'file' =>  'snow.jpg',
	  ],
	 ]
	);
    
	$update = $MadelineProto->messages->sendMedia([
       'peer' => '@doctool_bot',
       'media' => $media,
       'message' => 'Uploaded Media'
     ]
    );
    
	
	Logger::log("Photo sent. Update: \n " . print_r($media,true));
    
	$MadelineProto->downloadToFile($media, 'profile.jpg');
	$sentUpdate = $MadelineProto->messages->sendMedia([
	  'peer' => '@doctool_bot',
	  'media' => [
	    '_' => 'inputMediaUploadedDocument',
		'file' => 'dog.jpg'
	  ],
	  'message' => 'Dog caption',
	]);
	
	Logger::log("Sent media: ". print_r($sentMedia,true));
	
?>