/** request_management module script */
Project.modules.request_management = {
    init: function() {
        
        valid_more_elements = [];
        
        
    },
    validate: function (){
        
        $("#frmaddupdate").validate({
            onfocusout: false,
            ignore:".ignore-valid, .ignore-show-hide",
            rules : {
            "user_id": {
                "required": true
            },
            "space_id": {
                "required": true
            },
        },
            messages : {
            "user_id": {
                "required": ci_js_validation_message(js_lang_label.GENERIC_PLEASE_ENTER_A_VALUE_FOR_THE__C35FIELD_C35_FIELD_C46 ,"#FIELD#",js_lang_label.REQUEST_MANAGEMENT_USER_NAME)
            },
            "space_id": {
                "required": ci_js_validation_message(js_lang_label.GENERIC_PLEASE_ENTER_A_VALUE_FOR_THE__C35FIELD_C35_FIELD_C46 ,"#FIELD#",js_lang_label.REQUEST_MANAGEMENT_NAME)
            },
            "status": {
                "required": ci_js_validation_message(js_lang_label.GENERIC_PLEASE_ENTER_A_VALUE_FOR_THE__C35FIELD_C35_FIELD_C46 ,"#FIELD#",js_lang_label.REQUEST_MANAGEMENT_STATUS)
            }
        },
            errorPlacement : function(error, element) {
                switch(element.attr("name")){
                        case 'user_id':
                            $('#'+element.attr('id')+'Err').html(error);
                            break;
                        case 'space_id':
                            $('#'+element.attr('id')+'Err').html(error);
                            break;
                        case 'status':
                            $('#'+element.attr('id')+'Err').html(error);
                            break;
                    default:
                        printErrorMessage(element, valid_more_elements, error);
                        break;
                }
                
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {                    
                    validator.errorList[0].element.focus();
                }
            },
            submitHandler: function (form) {
                getAdminFormValidate();
                return false;
            }
        });
        
    },
    callEvents: function() {
        this.validate();
        this.initEvents();
        this.toggleEvents();
        callGoogleMapEvents();
        
    },
    callChilds: function(){
        
        callGoogleMapEvents();
    },
    initEvents: function(elem){            
                        $('#u_dob').datepicker({
                            dateFormat : getAdminJSFormat('date'), 
showOn : 'focus', 
changeMonth : true, 
changeYear : true, 
yearRange : 'c-100:c+100',
                            beforeShow: function(input, inst) {
                                var cal = inst.dpDiv;
                                var left = ($(this).offset().left + $(this).outerWidth()) - cal.outerWidth();
                                setTimeout(function() {
                                    cal.css({
                                        'left': left
                                    });
                                }, 10);
                            }
                        });
                        if(el_general_settings.mobile_platform){
                            $('#u_dob').attr('readonly', true);
                        }
                        
            
                    $('#gmf_autocomplete_u_address').elastic();
                    
            
                        $('#u_deleted_at').datepicker({
                            dateFormat : getAdminJSFormat('date'), 
showOn : 'focus', 
changeMonth : true, 
changeYear : true, 
yearRange : 'c-100:c+100',
                            beforeShow: function(input, inst) {
                                var cal = inst.dpDiv;
                                var left = ($(this).offset().left + $(this).outerWidth()) - cal.outerWidth();
                                setTimeout(function() {
                                    cal.css({
                                        'left': left
                                    });
                                }, 10);
                            }
                        });
                        if(el_general_settings.mobile_platform){
                            $('#u_deleted_at').attr('readonly', true);
                        }
                        
    },
    childEvents: function(elem, eleObj){
        
    },
    toggleEvents: function(){
        
    },
    dropdownLayouts:function(elem){
        
    }
}
Project.modules.request_management.init();
