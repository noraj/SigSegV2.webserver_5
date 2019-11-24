# Author: noraj

# Official verified image
FROM php:7.3.11-alpine3.10

# date
RUN ln -fs /usr/share/zoneinfo/Europe/Paris /etc/localtime

# copy files
COPY ./website/ /usr/src/app/
# the flag
COPY ./flag.txt /home/noraj/

# Remove some binaries (not for security as the FS is readonly, just to make the chall harder)
RUN cd /usr/bin/ && rm awk head less nc sort tac tail vi xxd && \
    cd /bin && rm ash base64 cat echo ls more

WORKDIR /usr/src/app

## INSTALL ##
# Print out php version for debugging
RUN php --version

## BUILD ##

# drop privileges
RUN adduser -s /bin/true -u 1337 -D -H noraj
USER noraj

EXPOSE 9999

CMD php -S 0.0.0.0:9999
