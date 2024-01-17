import Model from './Model.js';
export default class Comment extends Model {
    static parseValue(comment, total) {
        // - 0 vaut toujours 0
        // - 1 vaut 100 %
        // - 01 vaut 1
        // - 0n et n valent n
        // - 0.n vaut 0.n
        // - .n vaut 0.n * 100 %
        // Exception à gérer : 1.1 ou 01.1
        // PLUS TARD :
        // Le plus ou moins agit comme bonus ou malus
        // debugger;
        var parts = comment.match(/\[([+-]?)(0?[0-9]*)([.,][0-9]+)?\]/);
        if (!parts) {
            return "";
        }
        var value = parseFloat(parts.slice(1).join(""));
        if (parts[2][0] === "0") return value;
        return total * value;
    }
    static totalValeur(comments, total) {
        var result = 0;
        for (var id in comments) {
            let value = this.parseValue(comments[id], total);
            if (value !== "") {
                result += value;
            }
        }
        return result;
    }
}