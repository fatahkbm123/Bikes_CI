$('.Show').on('click', function () {
   $(this).toggleClass("fa-eye fa-eye-slash");

   if ($('.password').attr('type') === 'password') {
      $('.password').attr('type', 'text');
   } else {
      $('.password').attr('type', 'password')
   }
})