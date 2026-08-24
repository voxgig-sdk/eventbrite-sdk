# Typed models for the Eventbrite SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.
#
# These are TypedDicts, not dataclasses: the SDK ops return/accept plain dicts
# at runtime, and a TypedDict IS a dict shape, so the types match the runtime.
# Optional (req:false) keys are modelled as TypedDict key-optionality
# (total=False), split into a required base + total=False subclass when a type
# has both required and optional keys.

from __future__ import annotations

from typing import TypedDict, Any


class Event(TypedDict, total=False):
    capacity: int
    created: str
    currency: str
    description: str
    end: str
    id: str
    listed: bool
    name: str
    online_event: bool
    shareable: bool
    start: str
    status: str


class EventLoadMatch(TypedDict):
    id: str


class EventListMatch(TypedDict, total=False):
    capacity: int
    created: str
    currency: str
    description: str
    end: str
    id: str
    listed: bool
    name: str
    online_event: bool
    shareable: bool
    start: str
    status: str


class EventCreateDataRequired(TypedDict):
    id: str


class EventCreateData(EventCreateDataRequired, total=False):
    capacity: int
    created: str
    currency: str
    description: str
    end: str
    listed: bool
    name: str
    online_event: bool
    shareable: bool
    start: str
    status: str
