# MadelineProto Container Image

## Features 
- An easy way to get started with MadelineProto.
- All the MadelineProto requirements are already installed in this image.
-  You can use this image with Docker or Podman. GitHub hosts the code, but the image is on Docker Hub.   

To get started run:   

```

docker run --rm --name hello-madelineproto -ti -v `pwd`:/app:Z  powergame/madelineproto-container telegram_username

```  

This will start MadelineProto, help you log in to your account and send a test message to the telegram_username you specified on the command line.  


To run a custom script, just put it in the current directory and run the following command:   



```
docker run --rm --name hello-madelineproto -ti -v `pwd`:/app:Z  --entrypoint php powergame/madelineproto-container your_bot_script.php  
```