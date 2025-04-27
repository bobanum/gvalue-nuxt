export default class Evaluation extends Model {
	static entryPoint = 'evaluations';
	constructor(id) {
		super();
		this.id = id;
	}
	static getPayload(response) {
		debugger;
        return response.evaluations || super.getPayload(response);
    }
}
