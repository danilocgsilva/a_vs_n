#!/bin/bash

for i in $(ls -p | grep -iE "\/$"); do
	cd $i
	docker-compose up -d --build
	cd ..
done

