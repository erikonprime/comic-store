/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
// import './styles/app.css';
import "bootstrap/dist/css/bootstrap.min.css"

// start the Stimulus application
import './bootstrap';

import {createApp} from 'vue';
import App from './App';
import router from './router/router';
import store from './store/index';


createApp(App)
    .use(router)
    .use(store)
    .mount('#app')

import "bootstrap/dist/js/bootstrap.js"