# Dependencies

Docker must be installed on your machine

# Clone Repository

clone repository to local disk

```
    git clone https://github.com/undetermined22/estk-docker-presentation.git
```

# Start Services

Start services using docker compose

```
    docker-compose up -d --build
```

# Migrate database tables

Connect to php service

```
    docker exec -it estk_docker_php sh
```

Migrate database

```
    php artisan migrate
```

# Connect to application

access http://127.0.0.1:8081