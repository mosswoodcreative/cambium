#!/usr/bin/env bash
echo "Cleaning Kalabox..."
rm -rf ~/.kalabox/*
nslookup index.docker.io
nslookup registry-1.docker.io
echo "Done!"
