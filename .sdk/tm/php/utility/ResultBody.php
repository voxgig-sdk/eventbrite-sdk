<?php
declare(strict_types=1);

// Eventbrite SDK utility: result_body

class EventbriteResultBody
{
    public static function call(EventbriteContext $ctx): ?EventbriteResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
