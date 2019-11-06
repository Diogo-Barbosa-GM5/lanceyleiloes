/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Cronômetro em Javascript para aplicação.
 * http://hilios.github.io/jQuery.countdown/
 */
require('jquery-countdown');

/**
 * Gráficos de Pizza, Barra, Linha e outros.
 * https://www.chartjs.org/
 */
require('chart.js');

/**
 * Tabelas personaliazados para aplicação (Admin principalmente)
 * https://datatables.net/
 */
require('datatables.net-bs4');

/**
 * Facilita a escolha de algumas opções avançadas de animações
 * http://gsgd.co.uk/sandbox/jquery/easing/
 */
require('jquery.easing');

/**
 * Permite a criação de máscaras para os formulários usando JQuery
 * https://www.npmjs.com/package/jquery-mask-plugin
 */
require('jquery-mask-plugin');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('criando-exibindo-dados', require('./components/CriandoExibindoDados.vue').default);
Vue.component('manipulando-dados', require('./components/ManipulandoDados.vue').default);
Vue.component('componentes-juntos', require('./components/ComponentesJuntos.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});