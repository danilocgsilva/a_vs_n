#!/bin/bash

cat /proc/meminfo | grep -iE "(MemTotal|MemFree|MemAvailable)"
