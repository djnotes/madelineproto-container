![container build](https://github.com/djnotes/madelineproto-container/actions/workflows/ghcr-ci.yaml/badge.svg)

# MadelineProto Container Image
Container (Docker) image with MadelineProto pre-installed. 

## Features 
- An easy way to get started with MadelineProto, and can be used for development and production.
- All the MadelineProto requirements are already installed in this image.
- You can use this image with `docker` or `podman` CLI tools. 
- Container image available from both Docker Hub and GHCR

You can use the image in several ways: 

## Method 1 (Just to try it): 
Run the following command:  

```
docker run  --rm --name mycontainer -ti -v `pwd`/session:/app/session:Z  ghcr.io/djnotes/madelineproto-container:main
```
This logs you into your Telegram account and initializes the MadelineProto login session file. It also gets a username to send it a Welcome message, thus showing you that the image actually worked!


## Method 2 (To run your bot script): 
Run the following command to run your custom PHP MadelineProto bot script using the MadelineProto container image. 

```
docker run  --rm --name mycontainer -ti -v `pwd`/session:/app/session:Z -v `pwd`/app.php:/app/app.php  ghcr.io/djnotes/madelineproto-container:main php your_script.php
```  

This will create a container from the above image and then run your PHP script 


## Method 3 (For local development): 
If you want to use the image for local development on your machine, then use the following command:  

```
docker run  --rm --name mycontainer -ti -v `pwd`:/app:Z ghcr.io/djnotes/madelineproto-container:main bash
```
This will give you a bash terminal, where all your development files and scripts are available for you to edit and run on the fly. 

*If you do not mount a session directory to the container, it will create the session file inside the container. So, you should mount a session directory when running the image.*


*Note: This image is not affiliated with or endorsed by the [MadelineProto](https://github.com/danog/MadelineProto) project*

*Note: This image is using the [Fedora](https://getfedora.org) image as base, as I found it much easier to configure and lighter than the Ubuntu or official php images*
