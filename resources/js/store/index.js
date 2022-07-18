import { createStore } from 'vuex'

import user from './modules/user'

export default new createStore({

    modules: {
        user,
    },
    strict: process.env.NODE_ENV !== 'production'
})
