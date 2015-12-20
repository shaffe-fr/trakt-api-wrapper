<?php

namespace Wubs\Trakt\Response\Handlers\Movies;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Wubs\Trakt\Contracts\ResponseHandler;
use Wubs\Trakt\Media\Movie;
use Wubs\Trakt\Response\Handlers\AbstractResponseHandler;

class SummaryHandler extends AbstractResponseHandler implements ResponseHandler {

    public function handle(ResponseInterface $response, ClientInterface $client) {
        $json = $this->getJson($response);

        return new Movie($json, $this->getClientId(), $this->getToken(), $client);
    }
}