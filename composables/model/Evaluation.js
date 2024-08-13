import Model from '../Model.js';

export default class Evaluation extends Model {
	static entryPoint = 'evaluations';
	constructor(id) {
		super();
		
		this.id = id;
	}
	static getPayload(response) {
        return response.evaluations || super.getPayload(response);
    }
}
