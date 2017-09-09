import _ from 'lodash'

import {FETCH_POST, FETCH_POSTS, DELETE_POST} from "../actions/index";

export default function (state = {}, action) {
    switch (action.type) {
        case FETCH_POSTS:
            // {4: post4, 1:post1} from [post1, post4]
            return _.mapKeys(action.payload.data, 'id');
        case FETCH_POST:
            // const post = action.payload.data;
            // const newState = {...state,};
            // newState[post.id] = post;
            // return newState
            // ...state means everything that already is in state
            return {...state, [action.payload.data.id]: action.payload.data};
            // similar to Python: {}.update({key: value})
        case DELETE_POST:
            // if state object has key - delete it (returns new object)
            return  _.omit(state, action.payload);
        default:
            return state;
    }
}