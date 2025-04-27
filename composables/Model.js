import { Model as ModelBase } from '@bobanum/vue-model';
export default class Model extends ModelBase {
    static get baseUrl() {
        return useRuntimeConfig().public.apiUrl;
    }
    static fromPayload(payload) {
        return super.fromPayload(payload.results);
    }
}