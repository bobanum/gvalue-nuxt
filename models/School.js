import Model from './Model.js';
import Department from './Department.js';

export default class School extends Model {
	static tableName = 'schools';
	_departments = null;
	constructor(id, name, address, phone, email) {
		super();
		this.id = id;
		this.name = name;
		this.address = address;
		this.phone = phone;
		this.email = email;
	}
	get departments() {
		if (this._departments) return this._departments;
		console.log('School.departments()', this._departments);
		this._departments = [];
		Department.of(this).then(departments => {
			console.log('School.departments() departments', departments);
			this._departments.push(...departments);
		});
		return this._departments;
	}
}