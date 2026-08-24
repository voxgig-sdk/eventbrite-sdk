-- Eventbrite SDK error

local EventbriteError = {}
EventbriteError.__index = EventbriteError


function EventbriteError.new(code, msg, ctx)
  local self = setmetatable({}, EventbriteError)
  self.is_sdk_error = true
  self.sdk = "Eventbrite"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function EventbriteError:error()
  return self.msg
end


function EventbriteError:__tostring()
  return self.msg
end


return EventbriteError
