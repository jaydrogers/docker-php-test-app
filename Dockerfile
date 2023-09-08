FROM serversideup/php:beta-8.2-fpm as base
LABEL maintainer="Server Side Up <@serversideup>"

# USER 0

# FROM base as deploy
# COPY --chown=9999:9999 . /var/www/html