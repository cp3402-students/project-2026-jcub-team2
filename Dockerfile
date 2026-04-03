FROM wordpress:latest

RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

RUN rm -rf /var/www/html/*

RUN git config --global --add safe.directory /var/www/html

RUN git clone -b development https://github.com/cp3402-students/project-2026-jcub-team2.git /var/www/html

RUN chown -R www-data:www-data /var/www/html
