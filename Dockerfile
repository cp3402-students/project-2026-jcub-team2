# Start with the official WordPress image
FROM wordpress:latest

# 1. Install Git inside the container
RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

# 2. Remove the default empty WordPress files
RUN rm -rf /var/www/html/*

# 3. Clone your specific repo and branch directly into the web folder
# This executes INSIDE the Linux container, bypassing Windows path issues
RUN git clone -b development https://github.com/cp3402-students/project-2026-jcub-team2.git /var/www/html

# 4. Fix permissions so the web server can read your cloned files
RUN chown -R www-data:www-data /var/www/html
