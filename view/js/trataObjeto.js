class TrataObjeto {

    constructor(obj, nomeArquivo) {
        this.obj = obj;
        this.nomeArquivo = nomeArquivo;
    }

    start() {
        console.log('TrataObjeto.start', this.obj, this.nomeArquivo);

        let doc = "";
        let title = this.nomeArquivo;

        doc += "! version = 2.0\n\n"
        doc += "+ *\n";
        doc += "- Nao entendi\n";
        doc += "- foi mal nao entendi\n";
        doc += "- deu ruim!\n\n";

        try {
            for (let i in this.obj) {
                console.log(this.obj[i].question);
                doc += ('+ ' + this.obj[i].question.toLowerCase());
                for (let index in (this.obj[i].answers)) {
                    doc += ("\n- " + this.obj[i].answers[index].question);
                    this.obj[i].answers.length - 1 == index ? doc += "\n\n" : '';
                }
            }
        } catch (error) {
            alert("Erro ao gerar o arquivo!");
        }
        console.log("finished: ", doc);

        $.ajax({
            url: '../controller/salvarTxt.php',
            type: 'post',
            data: {
                'doc': doc.toString(),
                'title': title.toString()
            },
            success: function (resp) {
                console.log(resp);
            }
        });
    }

}