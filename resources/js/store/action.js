import api from '../api-route';
import http from '../http';

export default {
    async loadcategory({ commit }) {
        try {
            const category = await http.get('category', {});
            commit('SET_CATEGORY', category.data);
        } catch (error) {
            commit('SET_CATEGORY', []);
        }
    },
    async storecategory({ commit }, payload) {
        try {
            const category = await http.post('category', payload);
            commit('ADD_CATEGORY', category.data);
        } catch (error) {
            commit('ADD_CATEGORY', []);
        }
    },
    async loadbrand({ commit }) {
        try {
            const brand = await http.get('brand', {});
            commit('SET_BRAND', brand.data);
        } catch (error) {
            commit('SET_BRAND', []);
        }
    },
    async saverequest({ commit }, payload) {
        try {
            const request = await http.post(payload.request, payload);
            const response = payload.request === 'brand' ? 'ADD_BRAND' : 'ADD_CATEGORY';
            commit(response, request.data);
        } catch (error) {
            const response = payload.request === 'brand' ? 'ADD_BRAND' : 'ADD_CATEGORY';
            commit(response, []);
        }
    },
    async storeproduct({ commit }, payload) {
        try {
            if (payload.id === null) {
                const product = await http.post('product', payload);
                commit('ADD_PRODUCT', product.data);
            } else {
                const product = await http.put('product', payload);
                commit('UPDATE_PRODUCT', product.data);
            }
        } catch (error) {
            commit('ADD_PRODUCT', []);
        }
    },
    async loadproduct({ commit }) {
        try {
            const product = await http.get('product', {});
            commit('SET_PRODUCT', product.data);
        } catch (error) {
            commit('SET_PRODUCT', []);
        }
    }

}
