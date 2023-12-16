# PHP image with Oracle Instant Client and OCI8
This Docker image is based on [official PHP images](https://hub.docker.com/_/php/) and includes the Oracle Instant Client and OCI8 PHP extension. This integration allows connectivity to an Oracle database within the PHP environment.

## Getting Started
Follow these instructions to set up and run the PHP image with Oracle OCI8:

### Clone the repository:
```
git clone https://github.com/adrianharabula/php-oci8.git
cd php-oci8
```

### Build and Run the Docker image:
```
cd php8.2-apache-oci8
docker build -t php82 .
cd ..
docker compose up -d
```

### Open your web browser and visit http://localhost:8181/ocitest.php. You should see:
```
PHP Version: 8.2.13
Client Version: 21.12.0.0.0
Server Version: Oracle Database 11g Express Edition Release 11.2.0.2.0 - 64bit Production
```

Feel free to customize the configuration or explore additional features based on your requirements.

# Contributing
If you have improvements or suggestions, feel free to submit a pull request.
