#!/bin/bash

open --background -a Docker
# Wait for Docker to be ready
while ! docker system info > /dev/null 2>&1; do
    echo "Waiting for Docker to start..."
    sleep 1
done
cd foucault_web_app
docker-compose up -d
docker-compose ps
bash optimizer.sh

open http://localhost:8555/
open -a Terminal /Users/yamakami_osamu/Documents/Roughlang/repos/foucault-web
echo "Current directory:"
pwd
npm run dev

open /Users/yamakami_osamu/Documents/Roughlang/repos/foucault-web/
