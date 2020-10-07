const email = $('.email').val();
$('.change').on('submit', function (e) {

   e.preventDefault();
   const oldPassword = $('.old').val();
   const newPassword = $('.new').val();

   $.ajax({
      url: `http://localhost/Bikes_CI/Profile/changePassword?email=${email}&old=${oldPassword}&new=${newPassword}`,
      success: data => {
         document.querySelector('.old').value = '';
         document.querySelector('.new').value = '';
         $('.show').css('display', 'none');
         $('.Message').html(data);
         if (data) {
            setTimeout(() => {
               $('.alert').remove();
            }, 3000)
         }
      }
   })
})

$('.changeName').on('submit', function (e) {
   e.preventDefault();

   const name = $('.inputName').val();
   $.ajax({
      url: `http://localhost/Bikes_CI/Profile/changeName?name=${name}&email=${email}`,
      success: data => {
         let response = JSON.parse(data);
         document.querySelector('.inputName').value = '';
         $('.show').css('display', 'none');
         $('.Message').html(response.alert);
         $('.name td').html(response.name);
         if (data) {
            setTimeout(() => {
               $('.alert').remove();
            }, 3000)
         }
      }
   })
})

const message = $('.message');
setTimeout(() => {
   message.remove();
}, 3000);

$('.custom-file-input').on('change', function () {
   let fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass('selected').html(fileName);
})
