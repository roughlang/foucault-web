# Foucault

- Github
- CircleCI

## Start to construct env for develop
```
$ git clone https://github.com/roughlang/foucault-web.git
```


## Deploy

It automatically git adds, git commits, git pushes and deploys from Circle CI to the hosting server automatically.At this time, versioning is also automatically granted and the versioning becomes the commit message.

```
$ /APP_ROOT/
$ bash deploy.sh
```
or
```
$ bash deploy.sh BRANCH_NAME
```

## Manually deploy

```
rsync -av --delete --exclude-from='rsync-exclude.txt' -e 'ssh -o StrictHostKeychecking=no -p 2222 -i ~/.ssh/sshkey/roughlang/roughlang.pem' /Users/yamakami_osamu/Documents/Roughlang/repos/foucault-web/ pinoko.jp-roughlang@ssh.lolipop.jp:/home/users/2/pinoko.jp-roughlang/web/foucault/prod/foucault-web/
```
SSHでホスティングサーバーにログインして

Laravel Sanctum

## Database

### phpmyadmin (local only)
http://localhost:8555/pma/index.php




## foucault system

https://app.diagrams.net/#G1lWjEdsa5USQDjqgzn9KVYhFq0ExEf2id