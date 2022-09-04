#!/bin/bash

CD1='cd /site-files'
MD1='mkdir -p site/wiki/紅樓夢/人物 site/wiki/三國演義/人物 site/wiki/水滸傳/人物 site/wiki/西遊記/人物'
RM1='rm site/wiki/紅樓夢/人物/* site/wiki/三國演義/人物/* site/wiki/水滸傳/人物/* site/wiki/西遊記/人物/*'
RUN1='php scripts/run-hlm.php'
RUN2='php scripts/run-sgyy.php'
RUN3='php scripts/run-shz.php'
RUN4='php scripts/run-xyj.php'
EXIT1='exit'
COMMAND="${CD1} && ${MD1} && ${RM1} && ${RUN1} && ${RUN2} && ${RUN3} && ${RUN4} && ${EXIT1}"

<<<<<<< HEAD
docker run --rm -v "$(pwd)":/site-files siakhooi/mywise:latest bash -c "$COMMAND"
=======
docker run --rm -v .:/site-files siakhooi/mywise:latest bash -c "$COMMAND"
>>>>>>> af9dae490d0e270d0bac2e82427d73462658f796
