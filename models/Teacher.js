import Model from './Model.js';

export default class Teacher extends Model {
	static entryPoint = 'teachers';
	_department = null;
	constructor(id) {
		super();
		this.id = id;
	}
	get name() {
		return this.first_name;
	}
}