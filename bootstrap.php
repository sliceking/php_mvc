<?php

require 'database/connection.php';

require 'database/query_builder.php';

require 'functions.php';

return new QueryBuilder(Connection::make());
