function setUpdateAction() {
document.frmUser.action = "editxotkp.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "delete_userxotkp.php";
document.frmUser.submit();
}
}