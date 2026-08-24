<?php
declare(strict_types=1);

// Eventbrite SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class EventbriteMakeContext
{
    public static function call(array $ctxmap, ?EventbriteContext $basectx): EventbriteContext
    {
        return new EventbriteContext($ctxmap, $basectx);
    }
}
