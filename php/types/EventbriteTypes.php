<?php
declare(strict_types=1);

// Typed models for the Eventbrite SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.
//
// These are documentation-grade value objects (PHP 8 typed properties),
// registered on the composer classmap autoload. The SDK boundary exchanges
// assoc-arrays; these classes name the shapes for tooling and typed callers.

/** Event entity data model. */
class Event
{
    public ?int $capacity = null;
    public ?string $created = null;
    public ?string $currency = null;
    public ?string $description = null;
    public ?string $end = null;
    public ?string $id = null;
    public ?bool $listed = null;
    public ?string $name = null;
    public ?bool $online_event = null;
    public ?bool $shareable = null;
    public ?string $start = null;
    public ?string $status = null;
}

/** Request payload for Event#load. */
class EventLoadMatch
{
    public string $id;
}

/** Request payload for Event#list. */
class EventListMatch
{
    public ?int $capacity = null;
    public ?string $created = null;
    public ?string $currency = null;
    public ?string $description = null;
    public ?string $end = null;
    public ?string $id = null;
    public ?bool $listed = null;
    public ?string $name = null;
    public ?bool $online_event = null;
    public ?bool $shareable = null;
    public ?string $start = null;
    public ?string $status = null;
}

/** Request payload for Event#create. */
class EventCreateData
{
    public string $id;
    public ?int $capacity = null;
    public ?string $created = null;
    public ?string $currency = null;
    public ?string $description = null;
    public ?string $end = null;
    public ?bool $listed = null;
    public ?string $name = null;
    public ?bool $online_event = null;
    public ?bool $shareable = null;
    public ?string $start = null;
    public ?string $status = null;
}

