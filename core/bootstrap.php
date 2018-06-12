<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/router.php';

require 'core/request.php';

require 'core/database/connection.php';

require 'core/database/query_builder.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
