import axios from 'axios';
export default class Query {
    table = "";
    relations = [];
    model = null;
    constructor(model, table=null) {
        this.model = model;
        this.table = table || model.table || model.name.toSnakeCase();
    }
    async all() {
        var url = `${this.table}${this.querystring}`;
        const response = await axios.get(url);
        const result = response.data.map(data => {
            return this.model.from(data);
        });
        console.log(result);
        return result;
    }
    async find(id) {
        var url = `${this.table}/${id}${this.querystring}`;

        const response = await axios.get(url);
        const result = this.model.from(response.data);
        return result;
    }
    with(...relations) {
        this.relations.push(...relations);
        return this;
    }
    get querystring() {
        const relations = this.relations.join(',');
        if (relations) {
            return `?with=${relations}`;
        }
        return "";
    }
}
