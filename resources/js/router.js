import {createRouter,createWebHistory} from 'vue-router';
const router = createRouter({
    history:createWebHistory('/'),
    routes:[
        {
            path:'/',
            name:'home',
            component:() => import('./component/home.vue'),
        },
        {
            path:'/create',
            name:'create',
            component:() => import('./component/create.vue'),
        },
        {
            path:'/edit/:id',
            name:'edit',
            component:() => import('./component/edit.vue'),
        },
    ]
});

export default router
