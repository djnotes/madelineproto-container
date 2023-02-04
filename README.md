[![container build](https://github.com/djnotes/madelineproto-container/actions/workflows/ghcr-ci.yaml/badge.svg)](https://github.com/djnotes/madelineproto-container/actions/workflows/ghcr-ci.yaml)
[![Docker Hub Image CI](https://github.com/djnotes/madelineproto-container/actions/workflows/dockerhub_ci.yaml/badge.svg)](https://github.com/djnotes/madelineproto-container/actions/workflows/dockerhub_ci.yaml)

# MadelineProto Container Image
Alpine-based container image with MadelineProto pre-installed. 

## Features 
- An easy way to get started with MadelineProto, and can be used for development and production.
- All the MadelineProto requirements are already installed in this image.
- You can use this image with `docker` or `podman` CLI tools. 
- Container image available from both Docker Hub and GHCR
- You can use this image for one-time script executions

## Image Registries
The image is available in both the following registries:  

- ghcr.io/djnotes/madelineproto-container:latest
- docker.io/powergame/madelineproto:latest

## Run
To run your MadelineProto bot script, use the  container image like this:

```
podman run -v $PWD:/app ghcr.io/djnotes/madelineproto-container:latest php your_script.php 
```
Or if you are using docker CLI,

```
docker run -v $PWD:/app ghcr.io/djnotes/madelineproto-container:latest php your_script.php 
```

*If you do not mount a session directory to the container, it will create the session file inside the container. So, you should mount a session directory when running the image.*


*Note: This image is not affiliated with or endorsed by the [MadelineProto](https://github.com/danog/MadelineProto) project*

