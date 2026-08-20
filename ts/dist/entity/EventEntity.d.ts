import { EventbriteEntityBase } from '../EventbriteEntityBase';
import type { EventbriteSDK } from '../EventbriteSDK';
import type { Control } from '../types';
import type { Event, EventLoadMatch, EventListMatch, EventCreateData } from '../EventbriteTypes';
declare class EventEntity extends EventbriteEntityBase<Event> {
    constructor(client: EventbriteSDK, entopts: any);
    make(this: EventEntity): EventEntity;
    load(this: any, reqmatch?: EventLoadMatch, ctrl?: Control): Promise<EventEntity>;
    list(this: any, reqmatch?: EventListMatch, ctrl?: Control): Promise<EventEntity[]>;
    create(this: any, reqdata?: EventCreateData, ctrl?: Control): Promise<EventEntity>;
}
export { EventEntity };
