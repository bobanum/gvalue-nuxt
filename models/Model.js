import { Model as ModelBase } from '@bobanum/vue-model';

export default class Model extends ModelBase {
    static baseUrl = 'http://localhost:8080/api';
    static getPayload(response) {
        return response.results || response;
    }
}