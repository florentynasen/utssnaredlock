FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD squidzz

COPY redlock-db.sql /docker-entrypoint-initdb.d/

EXPOSE 3306
