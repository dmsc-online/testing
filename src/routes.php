<?php
// Routes

$app->get('/developer', function ($request, $response, $args) {

    echo phpinfo();

});

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Test pipeline

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


