#!/bin/bash

git status;
git add -A;
git commit -m "auto message";
git push;



function sample() {
  echo "foobar";
}

#!/bin/bash

function increment_version() {
    # .version ファイルから現在のバージョンを読み込む
    version_str=$(cat .version)

    # バージョン番号を '-' で分割して配列に格納する
    IFS='-' read -ra ADDR <<< "$version_str"

    # 下位桁のバージョンを取得して数値に変換
    minor_version=$((10#${ADDR[1]}))

    # 下位桁をカウントアップ
    new_minor_version=$(printf "%05d" $(($minor_version + 1)))

    # 新しいバージョン番号を構築
    new_version_str="${ADDR[0]}-${new_minor_version}"

    # .version ファイルに新しいバージョンを書き込む
    echo $new_version_str > .version

    # 新しいバージョン番号を出力
    echo $new_version_str
}

# 関数を呼び出す
increment_version

