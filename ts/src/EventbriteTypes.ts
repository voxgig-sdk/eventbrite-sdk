// Typed models for the Eventbrite SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.

export interface Event {
  capacity?: number
  created?: string
  currency?: string
  description?: string
  end?: string
  id?: string
  listed?: boolean
  name?: string
  online_event?: boolean
  shareable?: boolean
  start?: string
  status?: string
}

export interface EventLoadMatch {
  id: string
}

export interface EventListMatch {
  capacity?: number
  created?: string
  currency?: string
  description?: string
  end?: string
  id?: string
  listed?: boolean
  name?: string
  online_event?: boolean
  shareable?: boolean
  start?: string
  status?: string
}

export interface EventCreateData {
  id: string
  capacity?: number
  created?: string
  currency?: string
  description?: string
  end?: string
  listed?: boolean
  name?: string
  online_event?: boolean
  shareable?: boolean
  start?: string
  status?: string
}

