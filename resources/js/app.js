import './bootstrap';
import {createApp} from 'vue';
import App from './component/app.vue';
import router from './router.js';

const app = createApp(App);

app.use(router);
app.mount('#app');