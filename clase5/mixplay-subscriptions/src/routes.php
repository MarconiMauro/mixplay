<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

/*$app->get('/movies',function (Request $request, Response $response, array $args) {
    $data = json_decode(file_get_contents('templates/movies.json'));

}); */

$app->get('/movies', 'MoviesController:index');

$app->get('/movies/{id}', 'MoviesController:show' );

$app->post('/movies', 'MoviesController:create'); 

$app->patch('/movies/123','MoviesController:patch');

$app->put('/movies/123', 'MoviesController:replace');

$app->delete('/movies/123', 'MoviesController:delete');

$app->get('/plans', 'PlansController');



    $app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
