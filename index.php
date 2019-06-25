<?php
shell_exec("cd /usr/share/nginx/www/MyDemo && git pull 2>&1");
echo shell_exec('ls -la');
echo 123;
