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

function adminLogout(e) {
  if (confirm("Confirm logout"))
    $(e).parent().submit()
}

function deleteMessage(e) {
  if (confirm("Confirm delete"))
    $(e).parent().submit()
}

function editMessage(id) {
  $("#edit-" + id).hide();
  $("#cancel-" + id).show();
  $("#save-" + id).show();
  const e = $("#message-" + id);
  e.find("h5").hide();
  e.find("textarea").show();
}

function cancelMessage(id) {
  $("#cancel-" + id).hide();
  $("#save-" + id).hide();
  $("#edit-" + id).show();
  const e = $("#message-" + id);
  e.find("textarea").hide();
  e.find("h5").show();
}

function updateMessage(e, id) {
  if (confirm("Confirm update"))
    $("#updateMessage-"+id).submit()
}
