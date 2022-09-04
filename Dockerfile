FROM siakhooi/mywise:latest
LABEL maintainer="siakhooi@gmail.com"
LABEL name="Tionghua.info"
LABEL version="1.0.0"

RUN rm -rf /site-files/site /site-files/site.files
COPY site /site-files/site
COPY site.files /site-files/site.files
COPY scripts /site-files/scripts
WORKDIR /site-files
RUN mkdir -p site/wiki/紅樓夢/人物 site/wiki/三國演義/人物 site/wiki/水滸傳/人物 site/wiki/西遊記/人物 && \
  rm -f site/wiki/紅樓夢/人物/* site/wiki/三國演義/人物/* site/wiki/水滸傳/人物/* site/wiki/西遊記/人物/* && \
  php scripts/run-hlm.php && \
  php scripts/run-sgyy.php && \
  php scripts/run-shz.php && \
  php scripts/run-xyj.php && \
  rm -rf scripts
