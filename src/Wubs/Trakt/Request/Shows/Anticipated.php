<?php
/**
 * Created by PhpStorm.
 * User: nicklas.sjoqvist
 * Date: 2017-10-24
 * Time: 22:07
 */

namespace Wubs\Trakt\Request\Shows;

use Wubs\Trakt\Request\AbstractRequest;
use Wubs\Trakt\Request\RequestType;

class Anticipated extends AbstractRequest
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "shows/anticipated";
    }
}