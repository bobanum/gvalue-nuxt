import { Model as ModelBase } from '@bobanum/vue-model';
export default class Model extends ModelBase {
    static get baseUrl() {
        return useRuntimeConfig().public.apiUrl;
    } 
    static getPayload(response) {
        return response.results || response[this.entryPoint] || response;
    }
}
