#!/bin/bash

# macbook dug
find ./ -name "* [1-9]" -type d -exec rm -rf {} +;
find ./ -name "* [1-9].*" -type f -exec rm -f {} +;

open --background -a Docker
# Wait for Docker to be ready
while ! docker system info > /dev/null 2>&1; do
    echo "Waiting for Docker to start..."
    sleep 1
done

# foucault_web_app
cd ./foucault_web_app
docker-compose up -d
docker-compose ps
bash optimizer.sh

open http://localhost:8555/
open -a Terminal /Users/yamakami_osamu/Documents/Roughlang/repos/foucault-web
echo "Current directory:"
pwd

# foucault_react_app
cd ../foucault_react_app
npm start

# open finder folder
open /Users/yamakami_osamu/Documents/Roughlang/repos/foucault-web/