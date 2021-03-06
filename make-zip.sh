#!/bin/sh
[ -z "$1" ] && echo "$0: Need SHA1" && exit
NAME="nightskyline"
TREEISH="$1"
ZIP="$NAME-$TREEISH.zip"
cd `dirname $0`
git archive --verbose --format=zip --prefix=$NAME/ --output=$ZIP $TREEISH
unzip $ZIP $NAME/*.scss
zip $ZIP --delete $NAME/*.scss
cd $NAME
../generate-css.sh
rm *.scss
cd $OLDPWD
zip $ZIP $NAME/*.css
rm -rf $NAME
