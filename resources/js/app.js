import { createApp } from 'vue'
import { createStore } from 'vuex'
import Antd from 'ant-design-vue';
import * as VueRouter from 'vue-router'
import routes from './routes';
import App from './App'

import 'ant-design-vue/dist/antd.css';


const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes,
})

const store = createStore({
    state () {
        return {
            authenticated:false,
            user:{}
        }
    },
    getters:{
        authenticated(state){
            return state.authenticated
        },
        user(state){
            return state.user
        }
    },
    mutations:{
        set_authenticated (state, value) {
            state.authenticated = value
        },
        set_user (state, value) {
            state.user = value
        }
    },
    actions:{
        login({commit}){
            return axios.get('/api/user').then(({data})=>{
                commit('set_authenticated',data)
                commit('set_user',true)
                router.push({name:'dashboard'})
            }).catch(({response:{data}})=>{
                commit('set_authenticated',{})
                commit('set_user',false)
            })
        },
        logout({commit}){
            commit('set_user',{})
            commit('set_authenticated',false)
        }
    }
})





const app = createApp(App)

app.use(router)
app.use(Antd)
app.use(store)

app.mount('#app')
