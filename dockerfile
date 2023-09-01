# Use an official lightweight Node.js runtime as the base image
FROM node:14-alpine

# Set the working directory inside the container
WORKDIR /app

# Copy package.json and package-lock.json (if available) to install dependencies
COPY package*.json ./

# Install application dependencies
RUN npm install

# Copy the HTML, CSS, and JavaScript files into the container
COPY index.html styles.css script.js ./

# Expose the port your application is running on (adjust if needed)
EXPOSE 80

# Start the HTTP server when the container runs
CMD ["npm", "start"]
