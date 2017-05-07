$(document).ready(function () {
   $(".result_msg").delay(2000).slideUp();
   $(".error_msg").delay(3000).slideUp();
});
function confirmDel(msg) {
   return confirm(msg);
}