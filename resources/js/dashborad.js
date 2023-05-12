import './bootstrap';

import { createApp } from 'vue';
import Dashborad from './Dashborad.vue';
import router from './router';

const app = createApp(Dashborad);
app.use(router);
app.mount("#dashborad-vue");