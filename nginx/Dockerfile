FROM nginx:1.22.1

# Copy custom configuration file from the current directory
COPY /conf/default.conf /etc/nginx/conf.d/default.conf

# Install dependencies
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    vim \
    wget \
    zip \
    nano \
    nmap \
    && rm -rf /var/lib/apt/lists/*

# Expose ports
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
