FROM nginx:latest
# Remove default NGINX configuration
RUN rm /etc/nginx/conf.d/default.conf
RUN rm /etc/nginx/nginx.conf
RUN mkdir /etc/nginx/snippets

# Copy your custom NGINX configuration
COPY ./nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY ./nginx/nginx.conf /etc/nginx/nginx.conf

# Copy Snippets
COPY ./nginx/snippets /etc/nginx/snippets