
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>;
<script>
$(function(){
  $('#gridCheckAll').click(function(){
    if($(this).is(':checked')){
      //All Checked
      $('input[type=checkbox]').prop('checked',true);
    }else{
      $('input[type=checkbox]').prop('checked',false);
    }checkAllPermission();
  });
});
 function  checkPermissionByGroup(className, checkThis){
    const groupIdName = $("#"+checkThis.id);
    const classCheckBox = $('.'+className+' input');
    if(groupIdName.is(':checked')){
         classCheckBox.prop('checked', true);
     }else{
         classCheckBox.prop('checked', false);
     }checkAllPermission();
 };

 function checkOnClickBySingleGroup(classGroupName , GroupId, countPermission){

 	const classGroup = $("." + classGroupName + ' input');
 	const groupidBox = $("#"+GroupId);

 	if($('.'+classGroupName + ' input:checked').length == countPermission){

 		groupidBox.prop('checked',true);
 	}else{
 		groupidBox.prop('checked',false);
 	}checkAllPermission();
  };

  function checkAllPermission(){
  	const countPermissions = {{ count($allpermissions) }} ;
  	const countPermissionsGroup = {{count($permissions_group)}} ;
 
  	if($('input[type=checkbox]:checked').length >= (countPermissions + countPermissionsGroup )){

 		$('#gridCheckAll').prop('checked',true);
 	}else{
 		$('#gridCheckAll').prop('checked',false);
 	}

}
  
</script>
