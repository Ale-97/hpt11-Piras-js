import { createApp } from "vue";
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.css'
import App from "./App.vue";
import router from "./router";

createApp(App).use(router).mount("#app");
