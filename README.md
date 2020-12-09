# MadelineProto Container Image

## Features 
- An easy way to get started with MadelineProto.
- All the MadelineProto requirements are already installed in this image.
-  You can use this image with Docker or Podman. GitHub hosts the code, but the image is on Docker Hub.   

To get started run:  
1- Create a project directory like myproject  
2- Go to the project directory `cd myproject`   
3- Create a session directory: `mkdir session`  
4- Run the following command:   
```

docker run  --rm --name mycontainer -ti -v `pwd`:/app:Z  powergame/madelineproto your_telegram_username

```  

This will start MadelineProto, help you log in to your account and send a test message to the telegram_username you specified on the command line.  


To run a custom script, just put it in the current directory and run the following command:   



```
docker run  --rm --name mycontainer -ti -v `pwd`:/app:Z  --entrypoint php powergame/madelineproto your_bot_script.php
```

Or to do it in a more simpler way, just name your bot script bot.php and mount it along with other scripts into the container like this:   

```
docker run --rm --name mycontainer -v `pwd`:/app:Z powergame/madelineproto
```


*Note that this image has not affiliated with or endorsed by the [MadelineProto](https://github.com/danog/MadelineProto) project*