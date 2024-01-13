#!/bin/bash





function sample() {
  echo "foobar";
}

function increment_version() {
    # .version ファイルから現在のバージョンを読み込む
    version_str=$(cat .version)

    # ハイフンより前の文字列を保持（例: foucault-web=0.01）
    prefix=$(echo $version_str | sed 's/-.*//')

    # ハイフン以降の数字部分を取得（例: 00001）
    number_part=$(echo $version_str | sed 's/.*-//')

    # 数字部分をカウントアップ
    new_number_part=$(printf "%05d" $((10#$number_part + 1)))

    # 新しいバージョン番号を構築
    new_version_str="${prefix}-${new_number_part}"

    # .version ファイルに新しいバージョンを書き込む
    echo $new_version_str > .version

    # 新しいバージョン番号を出力
    echo $new_version_str
}

# 関数を呼び出す
increment_version

# gitの操作
git status;
git add -A;
git commit -m "Update to $GLOBAL_NEW_VERSION_STR";
git push;


