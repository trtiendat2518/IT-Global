require('./bootstrap')

import Vue from 'vue'
import component from './component.js'

window.Vue = require('vue').default

const app = new Vue({
    el: '#app'
})
