/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
/*vue route*/
import VueRouter from 'vue-router'
/*vue select */
import vSelect from "vue-select";

Vue.use(VueRouter)

Vue.component("v-select", vSelect);
/*welcome page route*/
const welcome = require('./components/welcome.vue').default;
/*post page route*/
const post = require('./components/post.vue').default;

const routes=[
 	{
 		path:'/post',
 		component:post 
 	},
	{
		path:'/',
		component:welcome
	},
 ];

const router  = new VueRouter({
	routes
})
const app = new Vue({
    el: '#app',
    router,
});
