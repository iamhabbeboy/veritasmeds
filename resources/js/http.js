import api from './api-route'

export default {
    post: (prefix, data) => {
        return axios.post(api.url[prefix].post, data);
    },
    get: (prefix, data) => {
        if (Object.keys(data).length > 0) {}
        return axios.get(api.url[prefix].get);
    },
    put: (prefix, data) => {
        return axios.put(api.url[prefix].put, data);
    },
    object: (prefix, data) => {
        return axios.post(api.url[prefix].post,data, {headers: {'Content-Type': 'multipart/form-data'}});
    }
}
