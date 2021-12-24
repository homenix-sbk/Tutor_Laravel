FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=tutor_local \
  MYSQL_USER=tutor \
  MYSQL_PASSWORD=tutor \
  MYSQL_ROOT_PASSWORD=tutor \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf