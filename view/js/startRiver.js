console.log('CHEGOU');

let bot = new RiveScript();
const message_container = document.querySelector('.messages');
const form = document.querySelector('form');
const input_box = document.querySelector('input');

const brains = [
  '../river/teste.rive',
];

// const brains = [
//     'https://gist.githubusercontent.com/awesammcoder/91e0f6c527bfdc03b8815289ca4af150/raw/6410ce00b7e1ea0dbd28be03b6eaab64252a841d/brain.rive'
//   ];

bot.loadFile(brains).then(botReady).catch(botNotReady);
<<<<<<< HEAD
// console.log('loadFile', bot.loadFile(brains).then(botReady).catch(botNotReady))
=======
//console.log('loadFile', bot.loadFile(brains).then(botReady).catch(botNotReady))
>>>>>>> a88aea3383476136c7e413d91d6790982dc53dc8

form.addEventListener('submit', (e) => {
  e.preventDefault();
  selfReply(input_box.value);
  input_box.value = '';
});

function botReply(message) {
 // console.log("bot reply", message);
  $('.chat-thread').append(`<li>${message}</li>`)
  // message_container.innerHTML += `<div class="bot">${message}</div>`;
  location.href = '#edge';
}

function selfReply(message) {
  //console.log('message: ', message)
  $('.chat-thread').append(`<li>${message}</li>`)
  // message_container.innerHTML += `<div class="self">${message}</div>`;
  location.href = '#edge';

  bot.reply("local-user", message).then(function (reply) {
    botReply(reply);
  });
}

function botReady() {
  bot.sortReplies();
  // botReply('Hello');
}

function botNotReady(err) {
  console.log("An error has occurred.", err);

}