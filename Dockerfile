FROM php:8.3-cli
WORKDIR /app
COPY . /app
RUN cp /app/data/posts.json /app/posts.seed.json && chmod -R 755 /app && chmod 775 /app/data
EXPOSE 8080
CMD ["sh", "-c", "mkdir -p /app/data; if [ ! -f /app/data/posts.json ]; then cp /app/posts.seed.json /app/data/posts.json; fi; php -S 0.0.0.0:${PORT:-8080} -t /app"]
