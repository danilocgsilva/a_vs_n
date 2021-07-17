#!/bin/bash

# The core command

echo "Processor:" $(cat /proc/cpuinfo | grep -i "model name" | sed -n 1p | awk -F ':' '{print $2}')