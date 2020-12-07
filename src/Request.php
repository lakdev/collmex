<?php

declare(strict_types=1);

namespace MarcusJaschen\Collmex;

use MarcusJaschen\Collmex\AbstractRequest;
use MarcusJaschen\Collmex\Client\Exception\RequestFailedException;
use MarcusJaschen\Collmex\Exception\InvalidResponseMimeTypeException;
use MarcusJaschen\Collmex\Response\CsvResponse;
use MarcusJaschen\Collmex\Response\ResponseFactory;
use MarcusJaschen\Collmex\Response\ZipResponse;

/**
 * Collmex API Request.
 *
 * @author Marcus Jaschen <mail@marcusjaschen.de>
 */
class Request extends AbstractRequest
{
    /**
     * Sends an API request and returns the response object.
     *
     * @param string $body The request body
     *
     * @return ZipResponse|CsvResponse
     *
     * @throws InvalidResponseMimeTypeException
     * @throws RequestFailedException
     */
    public function send(string $body)
    {
        $response = $this->client->request($body);

        $responseType = new ResponseFactory($response, $this->responseParser);

        return $responseType->getResponseInstance();
    }
}
