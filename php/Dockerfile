FROM php:7.1-fpm
#LDAP
RUN \
    apt-get update && \
    apt-get install -y libldap2-dev && \
    rm -rf /var/lib/apt/lists/* && \
    docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ && \
    docker-php-ext-install ldap && \
    docker-php-ext-enable ldap
# Memcached
RUN \
    apt-get update && \
    apt-get install -y \
    libmemcached-dev \
    zlib1g-dev &&\
    pecl install memcached && \
    docker-php-ext-enable memcached
#amqp
RUN  \
    apt-get update && \
    apt-get install -y \
        librabbitmq-dev \
        libssh-dev && \
    docker-php-ext-install \
        bcmath \
        sockets && \
    pecl install amqp && \
    docker-php-ext-enable amqp
# Install Postgre PDO
RUN \
    apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql pgsql
#ADD  ./test.ini /usr/local/etc/php/php.ini
WORKDIR /var/www
CMD ["php-fpm"]
