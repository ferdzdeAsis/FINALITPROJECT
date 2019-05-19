  $(document).ready(function () {
      $('#contact_form').bootstrapValidator({
          // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok'
              , invalid: 'glyphicon glyphicon-remove'
              , validating: 'glyphicon glyphicon-refresh'
          }
          , fields: {
              firstName: {
                  validators: {
                      stringLength: {
                          min: 1
                      , }
                      , notEmpty: {
                          message: 'Please supply your first name'
                      , }
                      , regexp: {
                          regexp: /^[a-zA-Z ]+$/
                          , message: 'The username can only consists of alphabet'
                      }
                  }
              }
              , lastName: {
                  validators: {
                      stringLength: {
                          min: 1
                      , }
                      , notEmpty: {
                          message: 'Please supply your first name'
                      , }
                      , regexp: {
                          regexp: /^[a-zA-Z ]+$/
                          , message: 'The username can only consists of alphabet'
                      }
                  }
              }
              , email: {
                  validators: {
                      notEmpty: {
                          message: 'Please supply your email address'
                      }
                      , emailAddress: {
                          message: 'Please supply a valid email address'
                      }
                  }
              }
              , mobileNumber: {
                  validators: {
                      stringLength: {
                         
                           max: 15
                          , message: 'Please enter a valid number'
                      }
                      , notEmpty: {
                          message: 'Please supply your phone number'
                      }
                  }
              }
              , position: {
                  validators: {
                      notEmpty: {
                          message: 'Please choose a position'
                      }
                  }
              }
              , password: {
                  validators: {
                      stringLength: {
                          min: 8
                          , message: 'Password must be 8 characters'
                      , }
                      , identical: {
                          field: 'confirmPassword'
                          , message: 'The password and its confirm are not the same'
                      }
                      , notEmpty: {
                          message: 'Please choose'
                      }
                  }
              }
              , confirmPassword: {
                  validators: {
                      stringLength: {
                          min: 8
                          , message: 'Password must be 8 characters'
                      , }
                      , identical: {
                          field: 'password'
                          , message: 'The password and its confirm are not the same'
                      }
                      , notEmpty: {
                          message: 'Please choose'
                      }
                  }
              }
          }
      }).on('success.form.bv', function (e) {
          $('#success_message').slideDown({
                  opacity: "show"
              }, "slow") // Do something ...
          $('#contact_form').data('bootstrapValidator').resetForm();
          // Prevent form submission
          e.preventDefault();
          // Get the form instance
          var $form = $(e.target);
          // Get the BootstrapValidator instance
          var bv = $form.data('bootstrapValidator');
          // Use Ajax to submit form data
          $.post($form.attr('action'), $form.serialize(), function (result) {
              console.log(result);
          }, 'json');
      });
  });