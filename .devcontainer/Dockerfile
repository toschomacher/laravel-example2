FROM mcr.microsoft.com/devcontainers/php:8.3

# Install dependencies for intl
RUN apt-get update \
    && apt-get install -y libicu-dev \
    && docker-php-ext-install intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*
