import Profile from "./components/Profile";

require('./bootstrap');

window.events = new Vue();
window.flash = function(message) {

    window.events.$emit('flash', message);

}
import PortalVue from 'portal-vue'
Vue.use(PortalVue)
const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


import Vue          from 'vue'
import VueRouter    from 'vue-router'

Vue.use(VueRouter)

import App          from './components/App'
import Dashboard    from './components/Board'
import Login        from './components/Login'
import Register     from './components/Register'
import Home         from './components/Welcome'
import StudyGoalsForm      from './components/StudyGoalsForm'
import WorkGoalsForm      from './components/WorkGoalsForm'
import BackgroundInfo      from './components/BackgroundInfo'
import TestimonialForm      from './components/TestimonialForm'
import Stories      from './components/Testimonials'
import UpdateProfile      from './components/UpdateProfileForm'
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
        {
            path: '/board',
            name: 'board',
            component: Dashboard,
        },
        // {
        //     path: '/logout',
        //     name: 'logout',
        //     component: Home,
        // },
        {
            path: '/profile',
            name: 'updateprofile',
            component: UpdateProfile,
        },
        {
            path: '/account',
            name: 'account',
            component: Profile,
        },
        {
            path: '/stories',
            name: 'stories',
            component: Stories,
        },
    ],
});
router.replace({ path: '/', redirect: '/' })
export default router

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
const page= new Vue({
    el: '#page',
});
