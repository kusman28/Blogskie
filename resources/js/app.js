/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Components
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('article-list', require('./components/Articles/ArticleList.vue').default);
Vue.component('view-article', require('./components/Articles/ViewArticle.vue').default);
Vue.component('create-article', require('./components/Articles/CreateArticle.vue').default);

// import packages
import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'
import moment from 'moment'
import { VueEditor } from "vue2-editor";
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


// filters
Vue.filter('myDate', function(created){
    return moment(created).format('MMMM Do YYYY');
})
Vue.filter('minsAgo', function(){
    return moment().startOf('day').fromNow();
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
