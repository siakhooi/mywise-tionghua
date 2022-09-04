FROM siakhooi/mywise:latest
LABEL maintainer="siakhooi@gmail.com"
LABEL name="Tionghua.info"
LABEL version="1.0.0"

RUN rm -rf /site-files/site /site-files/site.files
COPY site /site-files/site
COPY site.files /site-files/site.files
