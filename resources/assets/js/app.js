require('./bootstrap');
require('./vendor/jquery.fitvids.js');
require('./vendor/jquery.matchHeight.js');
require('./modules/functions.js');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import ExampleComponent from './components/ExampleComponent.vue';

Vue.component('example-component', ExampleComponent);

const app = new Vue({
    el: '#app'
});
