
import AllPosts from './AllPost.vue';
import AddPost from './AddPost.vue';
import EditPost from './EditPost.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllPosts
    },
    
    {
        name: 'add',
        path: '/add',
        component: AddPost
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditPost
    },
   

]