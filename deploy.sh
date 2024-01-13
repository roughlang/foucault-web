#!/bin/bash

git status;
git add -A;
git commit -m "auto message";
git push;



function sample() {
  echo "foobar";
}

# バージョン番号をカウントアップする関数
function increment_version() {
  # .version ファイルから現在のバージョンを読み込む
  version_str=$(cat .version)

  # バージョン番号を '-' で分割し、最後の部分を取得する
  minor_version=$(echo $version_str | cut -d '-' -f 2)

  # 下位桁を数値に変換し、1を加算する
  new_minor_version=$(printf "%05d" $((10#$minor_version + 1)))

  # 新しいバージョン番号を作成
  new_version_str=$(echo $version_str | sed "s/$minor_version/$new_minor_version/")

  # .version ファイルに新しいバージョンを書き込む
  echo $new_version_str > .version

  # 新しいバージョン番号を出力
  echo $new_version_str
}
increment_version
