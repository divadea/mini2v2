{"filter":false,"title":"database.php","tooltip":"/config/database.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["$heroku_db_url = parse_url(env('DATABASE_URL', \t\"postgres://forge:forge@localhost:5432/forge\"));",""],"id":3}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["",""],"id":4}],[{"start":{"row":87,"column":10},"end":{"row":88,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":88,"column":0},"end":{"row":88,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":88,"column":8},"end":{"row":97,"column":19},"action":"insert","lines":["'pg-heroku' => [","\t                'driver' => 'pgsql',","\t                'host' => $heroku_db_url['host'],","\t                'database' => substr($heroku_db_url['path'], 1),","\t                'username' => $heroku_db_url['user'],","\t                'password' => $heroku_db_url['pass'],","\t                'charset' => 'utf8',","\t                'prefix' => '',","\t                'schema' => 'public',","\t                ],"],"id":6}]]},"ace":{"folds":[],"scrolltop":1131,"scrollleft":0,"selection":{"start":{"row":95,"column":32},"end":{"row":95,"column":32},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1555191266635,"hash":"84c28dddec0acfa882eee7ed7c6e3fc7adaa2f82"}