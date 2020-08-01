import tiendaAll from './components/tienda/All.vue';
import tiendaAdd from './components/tienda/Add.vue';
import tiendaEdit from './components/tienda/edit.vue';


export const routes = [
    {
        name: 'home',
        path: '/',
        component: tiendaAll
    },
    {
        name: 'tiendaAdd',
        path: '/tiendaadd',
        component: tiendaAdd
    },
    {
        name: 'tienda',
        path: '',
        component: tiendaEdit
    }   
];