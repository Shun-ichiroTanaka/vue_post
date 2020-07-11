import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from "./views/Home";
import UserShow from "./views/UserShow";
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
            path: '/users',
            name: 'user.show',
            component: UserShow,
            meta: {
                title: 'プロフィール'
            }
        }, {
            path: '/logout',
            component: Logout
        }
    ]
});
