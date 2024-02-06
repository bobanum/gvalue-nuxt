// import axios from 'axios';
import Query from './Query.js';
export default class Model {
    static relations = {};
    static withRelations = [];
    static _url = "";
    static get url() {
        return this._url || this.name.toSnakeCase();
    }
    static async all() {
        var query = new Query(this);
        return await query.all();
        // const response = await axios.get(this.url);
        // const result = response.data.map(model => {
        //     return Object.assign(Object.create(this.prototype), model);
        // });
        // console.log(result);
        // return result;
    }
    static async find(id) {
        var query = new Query(this);
        return await query.find(id);
    }
    static with() {
        var query = new Query(this);
        return query.with(...arguments);
    }
    static from(data) {
        if (Array.isArray(data)) {
            return data.map(object => {
                return this.from(object);
            });
        }
        const result = Object.assign(Object.create(this.prototype), data);
        for (const name in this.relations) {
            const relation = this.relations[name];
            if (result[relation.name]) {
                this.loadModel(relation.model).then(model => {
                    const relationData = result[relation.name];
                    result[relation.name] = model.from(relationData);
                });
            }
        }

        return result;
    }
    static async loadModel(model) {
        if (typeof model === 'string') return (await import(`./${model}.js`)).default;
        return model;
    }
}

