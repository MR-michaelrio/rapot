function setUpdateAction() {
document.frmUser.action = "editxakl.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "delete_userxakl.php";
document.frmUser.submit();
}
}