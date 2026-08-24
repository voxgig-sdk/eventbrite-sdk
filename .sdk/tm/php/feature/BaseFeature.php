<?php
declare(strict_types=1);

// Eventbrite SDK base feature

class EventbriteBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(EventbriteContext $ctx, array $options): void {}
    public function PostConstruct(EventbriteContext $ctx): void {}
    public function PostConstructEntity(EventbriteContext $ctx): void {}
    public function SetData(EventbriteContext $ctx): void {}
    public function GetData(EventbriteContext $ctx): void {}
    public function GetMatch(EventbriteContext $ctx): void {}
    public function SetMatch(EventbriteContext $ctx): void {}
    public function PrePoint(EventbriteContext $ctx): void {}
    public function PreSpec(EventbriteContext $ctx): void {}
    public function PreRequest(EventbriteContext $ctx): void {}
    public function PreResponse(EventbriteContext $ctx): void {}
    public function PreResult(EventbriteContext $ctx): void {}
    public function PreDone(EventbriteContext $ctx): void {}
    public function PreUnexpected(EventbriteContext $ctx): void {}
}
