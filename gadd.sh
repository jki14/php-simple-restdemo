#! /bin/bash

git add gadd.sh
git add README.md

find -name "*.php" -exec git add {} \;
find -name "*.json" -exec git add {} \;
find -name "*.html" -exec git add {} \;
