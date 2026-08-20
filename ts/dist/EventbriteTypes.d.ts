export interface Event {
    capacity?: number;
    created?: string;
    currency?: string;
    description?: string;
    end?: string;
    id?: string;
    listed?: boolean;
    name?: string;
    online_event?: boolean;
    shareable?: boolean;
    start?: string;
    status?: string;
}
export interface EventLoadMatch {
    id: string;
}
export interface EventListMatch {
    capacity?: number;
    created?: string;
    currency?: string;
    description?: string;
    end?: string;
    id?: string;
    listed?: boolean;
    name?: string;
    online_event?: boolean;
    shareable?: boolean;
    start?: string;
    status?: string;
}
export interface EventCreateData {
    id: string;
    capacity?: number;
    created?: string;
    currency?: string;
    description?: string;
    end?: string;
    listed?: boolean;
    name?: string;
    online_event?: boolean;
    shareable?: boolean;
    start?: string;
    status?: string;
}
