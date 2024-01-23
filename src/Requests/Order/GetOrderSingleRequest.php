<?php

/*
 * User: Henny Krijnen
 * Date: 09-03-22 10:20
 * Copyright (c) eWarehousing Solutions
 */

namespace MiddlewareConnector\Requests\Order;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetOrderSingleRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return 'wms/orders/' . $this->uuid;
    }

    public function __construct(
        public string $uuid
    ) {
    }
}
