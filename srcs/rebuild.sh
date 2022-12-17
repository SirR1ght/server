#!/bin/sh
docker kill SirR1ght_container
docker rm SirR1ght_container
docker image rm SirR1ght_server
bash build.sh
bash run.sh