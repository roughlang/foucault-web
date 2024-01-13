#!/bin/bash

function sample() {
  echo "foobar";
}

function increment_version() {
    version_str=$(cat .version)
    prefix=$(echo $version_str | sed 's/-.*//')
    number_part=$(echo $version_str | sed 's/.*-//')
    new_number_part=$(printf "%05d" $((10#$number_part + 1)))
    NEW_VERSION_STR="${prefix}-${new_number_part}"

    echo $NEW_VERSION_STR > .version
    echo $NEW_VERSION_STR
}

# 関数を呼び出して新しいバージョンを取得
increment_version

# gitの操作
git add -A;
git status;
git commit -m "Update to $NEW_VERSION_STR";
git push;

date "+%Y-%m-%d %a %H:%M:%S";
echo $NEW_VERSION_STR;
