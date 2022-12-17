import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

export default new VueRouter({
    base: '/',
    mode: 'history',
    routes: [
        {path: '/people', component: () => import('./components/person/Index'), name: 'person.index'},
        {path: '/people/create', component: () => import('./components/person/Create'), name: 'person.create'},
    ]
})


