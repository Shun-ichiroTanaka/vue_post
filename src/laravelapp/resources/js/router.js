import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from "./views/Home";
import UserShow from './views/Users/Show';
import Logout from "./Actions/Logout";

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [{
            path: '/',
            name: 'home',
            component: Home,
            // meta: {
            //     title: 'ホーム'
            // }
        },
        {
            path: '/users/:userId',
            name: 'user.show',
            component: UserShow,
        }, {
            path: '/logout',
            component: Logout
        }
    ]
});
