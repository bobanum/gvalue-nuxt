import Model from '../Model.js';
import CommentModel from './Comment.js';
export default class Parameter extends Model {
    static totalValeur(parameter) {
        if (!isNaN(parameter.valeur)) {
            return parameter.valeur;
        }
        var total = 0;
        var vide = true;
        if (!parameter.parameters) {
            return "";
        }
        parameter.parameters.forEach(c => {
            var t = this.totalValeur(c);
            if (t !== "") {
                total += t;
                vide = false;
            }
        });
        return (vide) ? "" : total;
    }
    static totalResultats(parameter) {
        if (!isNaN(parameter.resultat_valeur)) {
            return parameter.resultat_valeur;
        }
        var total = 0;
        var vide = true;
        if (!parameter.parameters) {
            return "";
        }
        parameter.parameters.forEach(c => {
            var t = this.totalResultats(c);
            if (t !== "") {
                total += t;
                vide = false;
            }
        });
        if (parameter.resultat_comments && Object.keys(parameter.resultat_comments).length) {
            var valeurComments = CommentModel.totalValeur(parameter.resultat_comments, this.totalValeur(parameter));
            // total += valeurComments;
            total = Math.max(total + valeurComments, 0);
        }
        return (vide) ? "" : total;
    }

}