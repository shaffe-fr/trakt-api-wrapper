<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 15/03/15
 * Time: 17:03
 */

namespace Wubs\Trakt\Response\Handlers;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Wubs\Trakt\Contracts\ResponseHandler;

class DefaultDeleteHandler extends AbstractResponseHandler implements ResponseHandler {

    /**
     * @param ResponseInterface $response
     * @param ClientInterface $client
     * @return bool
     * @internal param ClientInterface $client
     */
    public function handle(ResponseInterface $response, ClientInterface $client) {
        return ($response->getStatusCode() === 204);
    }
}