#!/bin/bash

# Move to workdir
cd 01_platform/04_login_form

# Start the PHP server on port 8000 in the background
php -S localhost:8888 -t project/ >/dev/null 2>&1 &

# Wait for the server to start up
sleep 2

# Run tests
cd tests && composer install && vendor/bin/codecept run
