import {FETCH_WEATHER} from "../actions/index";

export default function (state = [], action) {
    switch (action.type) {
        case FETCH_WEATHER:
            // DON'T state.push()
            // Concat doesn't mutate state (like push does)
            // Don't want to mutate states (stateUpdate)
            // return state.concat([action.payload.data]);
            // It's the same as above
            return [action.payload.data, ...state]
    }
    return state;
}