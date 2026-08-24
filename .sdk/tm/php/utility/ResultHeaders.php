<?php
declare(strict_types=1);

// Eventbrite SDK utility: result_headers

class EventbriteResultHeaders
{
    public static function call(EventbriteContext $ctx): ?EventbriteResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
