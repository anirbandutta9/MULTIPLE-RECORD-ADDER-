  $('document').ready(function()
{
  $(".select-all").on('change',function() {
    if ($(this).is(':Checked')) {
            $('.chk-box').prop('checked', true);
    } else {
            $('.chk-box').prop('checked', false);
        }
  });
 
  $(".chk-box").click(function() {
    if ($(this).not(':Checked')) {
      $(".select-all").prop("checked", false);
    }
  });
});
//  for select / deselect all


//  page redirect on user click edit/delete
function edit_records() 
{
	document.frm.action = "edit_mul.php";
	document.frm.submit();		
}
function delete_records() 
{
	document.frm.action = "delete_mul.php";
	document.frm.submit();
}
//  page redirection