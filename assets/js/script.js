const btnMessage = "#btnMessage"
const formMessage = "#formMessage"
$(btnMessage).on('click', function () {
  $(this).hide();
  $(formMessage).show();
})
$(formMessage).find(".close-form").on('click', function () {
  $(formMessage).hide();
  $(btnMessage).show();
})