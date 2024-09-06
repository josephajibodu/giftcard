import axios from 'axios';
import Inputmask from "inputmask";

window.Inputmask = Inputmask;
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
