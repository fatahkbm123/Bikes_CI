$('.Show').on('click', function () {
   $(this).toggleClass("fa-eye fa-eye-slash");

   if ($('.password').attr('type') === 'password') {
      $('.password').attr('type', 'text');
   } else {
      $('.password').attr('type', 'password')
   }

   if ($('.password2').attr('type') === 'password') {
      $('.password2').attr('type', 'text');
   } else {
      $('.password2').attr('type', 'password')
   }
})

const message = $('.Message');
setTimeout(() => {
   message.remove();
}, 7000);