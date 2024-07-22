import Model from './Model.js';

export default class Department extends Model {
	static tableName = 'departments';
	constructor(id, name, code, school) {
		super();
		this.id = id;
		this.name = name;
		this.code = code;
		this._school = school;
	}
	static getPayload(response) {
        return response.departments || super.getPayload(response);
    }
}