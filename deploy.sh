#!/bin/bash

git status;
git add -A;
git commit -m "auto message";
git push;

sample();

function sample() {
  echo "foobar";
}