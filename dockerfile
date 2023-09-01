# Use an official lightweight Node.js runtime as the base image
FROM node:14-alpine

# Set the working directory inside the container
WORKDIR /app

# Copy the HTML, CSS, and JavaScript files into the container
COPY index.html /app/
COPY styles.css /app/
COPY script.js /app/

# Expose a port for your application (e.g., 80)
EXPOSE 80

# Install a simple HTTP server using npm
RUN npm install -g http-server

# Start the HTTP server when the container runs
CMD ["http-server", "-p", "80"]
