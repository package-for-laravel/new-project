import Axios from "axios";

export default {
  install(Vue) {
    let axios = Axios;

    axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

    let tokenElement = document.head.querySelector('meta[name="csrf-token"]');
    if (tokenElement) {
      let token = tokenElement.content;
      axios.defaults.headers.common["X-CSRF-TOKEN"] = token;
      axios.csrf = token;
    }

    Vue.prototype.$http = axios;
  }
};
