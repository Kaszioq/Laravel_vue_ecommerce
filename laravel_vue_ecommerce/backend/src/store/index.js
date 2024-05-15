import {createStore} from 'vuex';
import * as actions from './actions'
import * as mutations from './mutations'

const store = createStore({
    state: {
        user:{},
        token: sessionStorage.getItem('TOKEN'),
    },
    getters: {},
    actions,
    mutations,

})
console.log(store.state.user)

export default store