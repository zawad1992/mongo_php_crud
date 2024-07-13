@echo off

for /L %%a in (1,1,1000) do (
  curl http://localhost:8888/PHP/mongo_php/create.php
)

echo Done!

pause
