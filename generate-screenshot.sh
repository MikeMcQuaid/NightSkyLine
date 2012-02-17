#!/bin/sh
cd `dirname $0`
webkit2png --clipped --clipwidth=300 --clipheight=225 http://mikemcquaid.com
mv mikemcquaidcom-clipped.png screenshot.png
