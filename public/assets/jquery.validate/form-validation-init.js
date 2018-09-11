
/**
* Theme: Velonic Admin Template
* Author: Coderthemes
* Form Validator
*/

!function($) {
    "use strict";

    var FormValidator = function() {
        this.$commentForm = $("#commentForm"), //this could be any form, for example we are specifying the comment form
        this.$signupForm = $("#signupForm");
    };

    //init
    FormValidator.prototype.init = function() {
        //validator plugin
        $.validator.setDefaults({
            submitHandler: function() { alert("submitted!"); }
        });

        // validate the comment form when it is submitted
        this.$commentForm.validate();

        // validate signup form on keyup and submit
        this.$wizard-validation-form.validate({
            rules: {
                firstname: "required",
                lastname: "required",
                gender: {
                    required: true,
                    
                },
                admin_code: {
                    required: true,
                    digits:true,
                    minlength: 4
                },
                post_address: {
                    required: true,
                    
                },
                stream_id: {
                    required: true,
                    
                },
                stream_name: {
                    required: true,
                    minlength: 4
                    
                },
                email: {
                    required: true,
                    email: true
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"
            },
            messages: {
                firstname: "Please enter student firstname",
                lastname: "Please enter student lastname",
                gender: {
                    required: "Please enter student gender",
                    minlength: "Gender must consist of at least 6 characters"
                },
                 admin_code: {
                    required: "Please provide student admission number",
                    minlength: "Admission must be at least 4 characters"
                },
                post_address: {
                    required: "Please provide student postal address",
                  
                },
                stream_id: {
                    required: "Please provide your stream/form",
                    
                    
                },
                email: "Please enter a valid email address",
                agree: "Please accept our policy"
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if(firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });

    },
    //init
    $.FormValidator = new FormValidator, $.FormValidator.Constructor = FormValidator
}(window.jQuery),


//initializing 
function($) {
    "use strict";
    $.FormValidator.init()
}(window.jQuery);