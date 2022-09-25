#!/bin/bash

#F=./TEST_FILE
F=site/wiki/西遊記/章回/006
M=xyj.map.yml

LIST_OF_NAME=$(yq -o j $M | jq -r '.[]|keys|.[]')

for NAME in $LIST_OF_NAME; do
    echo "do $NAME"
    SEDTEXT=$(printf 's/\\([^:|]\\)%s\\([^]|]\\)/\\1\[\[p:%s\]\]\\2/g' "$NAME" "$NAME")

    sed -i "$SEDTEXT" $F

    PLIST=$(yq '.[]|."'$NAME'".p[]' $M)
    for P in $PLIST; do
        SEDTEXT=$(printf 's/\\([^:|]\\)%s\\([^]|]\\)/\\1\[\[p:%s|%s\]\]\\2/g' "$P" "$NAME" "$P")
        sed -i "$SEDTEXT" $F
    done

    TTLIST=$(yq '.[]|."'$NAME'".t[]' $M)
    for T in $TTLIST; do
        SEDTEXT=$(printf 's/\\([^:|]\\)%s\\([^]|]\\)/\\1\[\[tt:%s|%s\]\]\\2/g' "$T" "$NAME" "$T")
        sed -i "$SEDTEXT" $F
    done

done
