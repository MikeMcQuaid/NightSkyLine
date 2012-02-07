#!/bin/sh
[ -z "$1" ] && echo "$0: Need SHA1" && exit
cd `dirname $0`
git archive --format=zip --prefix=nightskyline/ $1 -o nightskyline-$1.zip
