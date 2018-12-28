import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import VueAxios from 'vue-axios';

import mutation from './store/mutation';
import action from './store/action';
import getters from './store/getters';

Vue.use(Vuex);
Vue.use(VueAxios, axios);

export default new Vuex.Store({
    state: {
        categories: [],
        brands: [],
        products: []
    },
    actions: action,
    mutations: mutation,
    getters: getters
})
