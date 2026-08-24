package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewEventEntityFunc func(client *EventbriteSDK, entopts map[string]any) EventbriteEntity

