import { createApp } from 'vue'
import Antd from 'ant-design-vue';
import * as VueRouter from 'vue-router'
import routes from './routes';
import App from './App'

import 'ant-design-vue/dist/antd.css';

const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes,
})


const app = createApp(App)

app.use(router)
app.use(Antd)

app.mount('#app')
