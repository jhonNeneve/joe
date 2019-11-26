console.log('CHEGOU');

bot = new RiveScript();
const message_container = document.querySelector('.messages');
const form = document.querySelector('form');
const input_box = document.querySelector('input');
titulos = false;
brains = [
  // '../river/teste.rive',
  '../river/padrao.rive'
];

$.ajax({
  url: '../controller/chat.php',
  type: 'post',
  data: {
    'fun': 'getTitulos'
  },
  success: function (resp) {
    console.log('resp: ', JSON.parse(resp));
    resp = JSON.parse(resp);

    resp.forEach(function (item) {
      console.log(item);
      brains.push('../river/' + item + ".rive");
    });

    bot.loadFile(brains).then(botReady).catch(botNotReady);
  }
});

console.log("teste de brains: ", brains);

form.addEventListener('submit', (e) => {
  e.preventDefault();
  selfReply(input_box.value);
  input_box.value = '';
});

function botReply(message) {
  $('.chat-thread').append(`<li>${message}</li>`);
  chat = document.getElementById("chat");
  chat.scrollTop = chat.scrollHeight;
}

function selfReply(message) {
  let msg = removeCaracteres(message);

  $('.chat-thread').append(`<li>${message}</li>`)
  location.href = '#edge';

  bot.reply("local-user", msg).then(function (reply) {
    botReply(reply)
  });
}

function botReady() {
  bot.sortReplies();
}

function botNotReady(err) {
  console.log("An error has occurred.", err);

}

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