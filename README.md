Super copied from https://github.com/vivid-planet/munin-php-apc . Better readme forthcoming.

File
  
  http://127.0.0.1/opcache_info.php

Munin config
   
  [php_opcache_*]
  user root
  env.url http://localhost/opcache_info.php?auto

Multigraphs

  - `php_opcache_hit_miss`
  - `php_opcache_usage`

