FROM mysql:8.0

# Copio script con la configuracion de Mysql+schema
COPY mysql_conf.sh /docker-entrypoint-initdb.d/

# Permisos ejecucion para el script
RUN chmod +x /docker-entrypoint-initdb.d/mysql_conf.sh

# Configuro pw del root mysql
ENV MYSQL_ROOT_PASSWORD=12345678

CMD ["mysqld"]
