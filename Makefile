build:
	docker build -t tionghua:latest . 

run:
	docker run --rm --name tionghua -p 8080:80 tionghua:latest

serve:
	docker run --rm -p 8080:80 -v $$(pwd):/site-files --name tionghua siakhooi/mywise:latest

gen-hlm:
	docker run --rm --name tionghua -v .:/site-files siakhooi/mywise:latest bash -c 'cd /site-files && rm site/wiki/紅樓夢/人物/* && php scripts/run-hlm.php && exit'
gen-sgyy:
	docker run --rm --name tionghua -v .:/site-files siakhooi/mywise:latest bash -c 'cd /site-files && rm site/wiki/三國演義/人物/* && php scripts/run-sgyy.php && exit'
gen-shz:
	docker run --rm --name tionghua -v .:/site-files siakhooi/mywise:latest bash -c 'cd /site-files && rm site/wiki/水滸傳/人物/* && php scripts/run-shz.php && exit'
gen-xyj:
	docker run --rm --name tionghua -v .:/site-files siakhooi/mywise:latest bash -c 'cd /site-files && rm site/wiki/西遊記/人物/* && php scripts/run-xyj.php && exit'
generate-all: gen-hlm gen-sgyy gen-shz gen-xyj

grep:
	grep 'qt:' site-files/site/wiki/水滸傳/章回/*

bashin:
	docker exec -it tionghua bash
