<?php

use Components\Router;

/** Call methods inside PageController when hits some path mapped on argument 1 */
Router::route('/', '\Components\Controllers\PageController@getHomepage');
Router::route('/obrigado', '\Components\Controllers\PageController@getAfterSubscription');
Router::route('/metodoadt', '\Components\Controllers\PageController@getMentoria');
Router::route('/metodo-adt', '\Components\Controllers\PageController@getMentoria');