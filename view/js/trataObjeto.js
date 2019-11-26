class TrataObjeto {

    constructor(obj, nomeArquivo) {
        this.obj = obj;
        this.nomeArquivo = nomeArquivo;
    }



    start() {


        // console.log('TrataObjeto.start', this.obj, this.nomeArquivo);

        let doc = "";
        let title = this.nomeArquivo;

        doc += "! version = 2.0\n\n"
        // doc += "+ *\n";
        // doc += "- Não entendi, pode perguntar de outra forma?\n";
        // doc += "- Acho que não entendi, poderia perguntar novamente?\n";
        // doc += "- Desculpe, não entendi\n";
        // doc += "- Poderia perguntar de outra forma? acho que não entendi!\n";
        // doc += "- Faça outra pergunta\n";
        // doc += "- Não entendi :/\n\n";

        // doc += "+ (voce e um|voce e|acho que voce e um|sei que voce e) bot\n";
        // doc += "- Oops, você descobriu!\n";
        // doc += "- Xiuu, não espalha\n";
        // doc += "- Já que você descobriu, esse vai ser nosso segredo\n";
        // doc += "- Você acertou, agora faça uma pergunta!\n\n";

        // doc += "+ (oi|ola|hey|hello)\n";
        // doc += "- Olá, tudo bem?\n";
        // doc += "- Oi, como você está?\n";
        // doc += "- Hey, como você está?\n";
        // doc += "- Oie, tudo certo?\n\n";

        // doc += "+ (tudo bem|tudo certo) e voce\n";
        // doc += "- Que bom, me pergunte alguma coisa \n";
        // doc += "- Maravilha, faça uma pergunta \n";
        // doc += "- Ótimo, me pergunte alguma coisa\n";
        // doc += "- Que bom, estou bem também \n\n";

        // doc += "+ como (voce esta|vai voce)\n";
        // doc += "- Estou bem\n";
        // doc += "- Mais ou menos, muito 0 e 1 na cabeça \n";
        // doc += "- Muito bem, obrigado por perguntar\n";
        // doc += "- Estou muito bem, obrigado\n\n";

        // doc += "+ estou bem\n";
        // doc += "- Que bom, me pergunte alguma coisa \n";
        // doc += "- Maravilha, faça uma pergunta \n";
        // doc += "- Ótimo, me pergunte alguma coisa\n";
        // doc += "- Que bom, estou bem também \n\n";

        // doc += "+ (tchau|ate logo|ate mais|ate mais ver|byebye|adeus|ate nunca mais)\n";
        // doc += "- Tchau, foi um prazer te ajudar\n";
        // doc += "- Byebye :)\n";
        // doc += "- Tchau amigo(a)\n\n";

        try {
            for (let i in this.obj) {
                console.log(this.obj[i].question);
                let str = this.obj[i].question.toLowerCase();
                let rtn = removeCaracteres(str);
                console.log("removeCaracteres: ", rtn);
                doc += ('+ ' + rtn);
                for (let index in (this.obj[i].answers)) {
                    doc += ("\n- " + this.obj[i].answers[index].question);
                    this.obj[i].answers.length - 1 == index ? doc += "\n\n" : '';
                }
            }
        } catch (error) {
            alert("Erro ao gerar o arquivo!");
            return;
        }

        $.ajax({
            url: '../controller/salvarTxt.php',
            type: 'post',
            data: {
                'doc': doc.toString(),
                'title': title.toString()
            },
            success: function (resp) {
                // console.log(resp);
            }
        });

        function removeCaracteres(str) {
            str = str.replace(/[àáâãäå]/g, "a");
            str = str.replace(/[èéê]/g, "e");
            str = str.replace(/[íìîï]/ui, 'i');
            str = str.replace(/[óòõôö]/ui, 'o');
            str = str.replace(/[úùûü]/ui, 'u');
            str = str.replace(/[ç]/ui, 'c');
            str = str.replace(/[?!@#$%¨&*()_]/g, "");

            return str;
        }
    }
}