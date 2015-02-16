<?php
use Cake\Routing\Router;

Router::plugin('SemanticUi', function ($routes) {
    $routes->fallbacks();
});
