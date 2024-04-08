# MOCK API

This is a mock API that simulates a real API.

## How it works

When receiving an unknown request, it will return a 501 status code and save the URL in the database.

Now you can add the response to the database and the next time the same request is made, the API will return the response you added.

## How to run

This project is created with Laravel. I recommend to run it with [Laravel Herd](https://herd.laravel.com/) and a SQLite database.

## How to reach from a docker container

If you want to reach the API from a Docker container, you need to find the IP of your host and add this to your domain. Let's say your MOCK API URL is `mock-api.test`. Go into your docker container and check the IP of your host:

```bash
$ ping host.docker.internal
64 bytes from 192.168.1.1 icmp_seq=1 ttl=63 time=0.267 ms
```

Add this IP to your domain in the `/etc/hosts` file:

```bash
$ echo "192.168.65.254 mock-api.test" >> /etc/hosts
```

Now you can reach the API from your docker container with `mock-api.test`.
