# PHP 8.2 image with Apache and Oracle oci8

This image is built from [official PHP images](https://hub.docker.com/_/php/). It ads oci8 drivers to official image to connect to Oracle database.

Instructions:
```
cd php82
docker build -t php82oci .
cd ..
docker compose up -d
```

Browse http://localhost:8181/ocitest.php and you should see `succesful` if connection to oracle OK.
