<?php

namespace Wubs\Trakt\Response\Handlers;

use GuzzleHttp\ClientInterface;
use Illuminate\Support\Collection;
use Psr\Http\Message\ResponseInterface;
use Wubs\Trakt\Contracts\ResponseHandler;

class DefaultResponseHandler extends AbstractResponseHandler implements ResponseHandler {

    /**
     * @param ResponseInterface $response
     * @param ClientInterface| $client
     * @return Collection
     * @internal param ClientInterface $client
     */
    public function handle(ResponseInterface $response, ClientInterface $client) {
        $json = $this->getJson($response);

        if (is_array($json)) {
            return collect($json);
        }

        return collect([$json]);
    }
}