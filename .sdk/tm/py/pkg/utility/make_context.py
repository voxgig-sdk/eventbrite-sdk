# Eventbrite SDK utility: make_context

from projectname_sdk.core.context import EventbriteContext


def make_context_util(ctxmap, basectx):
    return EventbriteContext(ctxmap, basectx)
