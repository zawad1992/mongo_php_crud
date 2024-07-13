#!/bin/bash

for i in {1..1000}; do
  curl http://localhost:8888/PHP/mongo_php/create.php
done

echo "Done!"

# Add a pause (sleep) if needed
# sleep 1

# You can remove the pause line above or adjust the sleep duration as per your requirements.
