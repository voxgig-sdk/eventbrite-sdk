package core

type EventbriteError struct {
	IsEventbriteError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewEventbriteError(code string, msg string, ctx *Context) *EventbriteError {
	return &EventbriteError{
		IsEventbriteError: true,
		Sdk:              "Eventbrite",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *EventbriteError) Error() string {
	return e.Msg
}
