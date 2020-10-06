$('.navbar-brand').on('click', function (e) {
   e.preventDefault();

   $.ajax({
      url: 'http://localhost/Bikes_CI/Checkout/delete',
      success: () => {
         document.location.href = 'http://localhost/Bikes_CI/Home';
      }
   })
})

$('.arrow').on('click', function (e) {
   e.preventDefault();

   $.ajax({
      url: 'http://localhost/Bikes_CI/Checkout/delete',
      success: () => {
         document.location.href = 'http://localhost/Bikes_CI/Cart';
      }
   })
})

