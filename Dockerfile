FROM s390x/httpd:2.4
# Use a base image with Apache HTTP Server pre-installed
FROM httpd:latest

# Copy your HTML file into the Apache web directory
COPY index.html /usr/local/apache2/htdocs/

# Copy a custom Apache configuration file
COPY custom-httpd.conf /usr/local/apache2/conf/httpd.conf

# Expose port 80 (the default HTTP port for Apache)
EXPOSE 80

COPY ./public-html/ /usr/local/apache2/htdocs/
