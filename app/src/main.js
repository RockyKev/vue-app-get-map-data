import { createApp } from "vue";
import App from "./App.vue";

// createApp(App).mount("#app");
createApp(App, { ...window }).mount("#app");