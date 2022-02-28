
version: '3.8'
services:

  web-server:
    container_name: web-server
    hostname: phoenitags-web
    build : .
    networks:
      - web-network
    ports : 
      - "8181:80"
    depends_on:
      - db
    volumes:
      - ./src/:/var/www/html/
    
  db: 
    container_name: db
    hostname: phoenitags-db
    image: "mysql:latest"
    networks:
      - web-network

    restart : "always"

    environment: 
            MYSQL_ROOT_PASSWORD: "root1234"
            MYSQL_DATABASE: MYSQL_DATABASE
            MYSQL_USER: MYSQL_USER
            MYSQL_PASSWORD: MYSQL_PASSWORD

    ports: 
     - "9906:3306"

networks: 
  web-network: 
    name : "web-network-php"
    driver: bridge
