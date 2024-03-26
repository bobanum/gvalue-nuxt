import { Model as ModelBase } from '~/@bobanum/vue-model';
import config from '~/config/gvalue.config.js';


export default class Model extends ModelBase {
    static baseUrl = config.api_url;
    static getPayload(response) {
        return response.results || response[this.entryPoint] || response;
    }
}