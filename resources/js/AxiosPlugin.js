import Axios from "axios";

export default {
  install(Vue) {
    const axios = Axios;

    axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

    const tokenElement = document.head.querySelector('meta[name="csrf-token"]');
    if (tokenElement) {
      const token = tokenElement.content;
      axios.defaults.headers.common["X-CSRF-TOKEN"] = token;
      axios.csrf = token;
    }

    Vue.prototype.$http = axios;
  }
};
