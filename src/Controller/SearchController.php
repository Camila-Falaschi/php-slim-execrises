<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SearchController extends Controller
{
    public function default(Request $request, Response $response)
    {
        $albums = json_decode(file_get_contents(__DIR__ . '/../../data/albums.json'), true);

        return $this->render($response, 'default.html', ['albums' => $albums]);
    }
}