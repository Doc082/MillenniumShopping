$(document).ready(function(){$("#rename_db_form.ajax").live("submit",function(a){a.preventDefault();a=$(this);var b="CREATE DATABASE "+$("#new_db_name").val()+" / DROP DATABASE "+window.parent.db;a.find("input:hidden").is("#ajax_request_hidden")||a.append('<input type="hidden" id="ajax_request_hidden" name="ajax_request" value="true" />');var d={};d[PMA_messages.strYes]=function(){$(this).dialog("close").remove();window.parent.refreshMain();window.parent.refreshNavigation()};d[PMA_messages.strNo]=
function(){$(this).dialog("close").remove()};a.PMA_confirm(b,a.attr("action"),function(e){PMA_ajaxShowMessage(PMA_messages.strRenamingDatabases);$.get(e,$("#rename_db_form").serialize()+"&is_js_confirmed=1",function(c){if(c.success==true){PMA_ajaxShowMessage(c.message);window.parent.db=c.newname;$("#topmenucontainer").next("div").remove().end().after(c.sql_query);c=$("#topmenucontainer").next("div").find(".notice");c.text()==""&&c.remove();$("<span>"+PMA_messages.strReloadDatabase+"?</span>").dialog({buttons:d})}else PMA_ajaxShowMessage(c.error)})})});
$("#copy_db_form.ajax").live("submit",function(a){a.preventDefault();PMA_ajaxShowMessage(PMA_messages.strCopyingDatabase);a=$(this);a.find("input:hidden").is("#ajax_request_hidden")||a.append('<input type="hidden" id="ajax_request_hidden" name="ajax_request" value="true" />');$.get(a.attr("action"),a.serialize(),function(b){$(".success").fadeOut();$(".error").fadeOut();if(b.success==true){$("#topmenucontainer").after(b.message);if($("#checkbox_switch").is(":checked")){window.parent.db=b.newname;window.parent.refreshMain();
window.parent.refreshNavigation()}else window.parent.refreshNavigation(true)}else $("#topmenucontainer").after(b.error)})});$("#change_db_charset_form.ajax").live("submit",function(a){a.preventDefault();a=$(this);a.find("input:hidden").is("#ajax_request_hidden")||a.append('<input type="hidden" id="ajax_request_hidden" name="ajax_request" value="true" />');PMA_ajaxShowMessage(PMA_messages.strChangingCharset);$.get(a.attr("action"),a.serialize()+"&submitcollation="+a.find("input[name=submitcollation]").attr("value"),
function(b){b.success==true?PMA_ajaxShowMessage(b.message):PMA_ajaxShowMessage(b.error)})})},"top.frame_content");
