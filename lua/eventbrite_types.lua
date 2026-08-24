-- Typed models for the Eventbrite SDK (LuaLS annotations).
--
-- GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
-- params (op.<name>.points[].args.params[]). Field/param types come from the
-- canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
-- @voxgig/apidef VALID_CANON). Annotations only — no runtime effect. Do not
-- edit by hand.

---@class Event
---@field capacity? number
---@field created? string
---@field currency? string
---@field description? string
---@field end? string
---@field id? string
---@field listed? boolean
---@field name? string
---@field online_event? boolean
---@field shareable? boolean
---@field start? string
---@field status? string

---@class EventLoadMatch
---@field id string

---@class EventListMatch
---@field capacity? number
---@field created? string
---@field currency? string
---@field description? string
---@field end? string
---@field id? string
---@field listed? boolean
---@field name? string
---@field online_event? boolean
---@field shareable? boolean
---@field start? string
---@field status? string

---@class EventCreateData
---@field id string
---@field capacity? number
---@field created? string
---@field currency? string
---@field description? string
---@field end? string
---@field listed? boolean
---@field name? string
---@field online_event? boolean
---@field shareable? boolean
---@field start? string
---@field status? string

local M = {}

return M
