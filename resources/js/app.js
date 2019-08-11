import Vue from "vue";
import AxiosPlugin from "./AxiosPlugin";

Vue.config.productionTip = false;

Vue.use(AxiosPlugin);

Vue.component(
  "example-component",
  require("./components/ExampleComponent.vue").default
);

const app = new Vue({
  el: "main"
});
