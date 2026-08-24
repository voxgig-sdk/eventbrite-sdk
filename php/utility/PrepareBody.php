<?php
declare(strict_types=1);

// Eventbrite SDK utility: prepare_body

class EventbritePrepareBody
{
    public static function call(EventbriteContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
