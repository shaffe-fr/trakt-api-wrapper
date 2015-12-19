<?php

namespace Wubs\Trakt\Response\Handlers\Calendars;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Wubs\Trakt\Contracts\ResponseHandler;
use Wubs\Trakt\Request\Parameters\Days;
use Wubs\Trakt\Request\Parameters\Type;
use Wubs\Trakt\Response\Calendar\Calendar;
use Wubs\Trakt\Response\Handlers\AbstractResponseHandler;

class MoviesHandler extends AbstractResponseHandler implements ResponseHandler {

    /**
     * @param ResponseInterface $response
     * @param ClientInterface $client
     * @return Calendar
     */
    public function handle(ResponseInterface $response, ClientInterface $client) {
        $json = $this->getJson($response);

        return new Calendar($json, Type::movie(), $this->getClientId(), $this->getToken(), $client);
    }
}