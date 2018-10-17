  $(document).ready(function() {
     $('.input-group.date').datepicker({
	format: "dd.mm.yyyy",
	autoclose: true
}); 
    $('.input-group.time').datetimepicker({
                    format: 'LT',
			allowInputToggle: true,
                    showClose: true
                });
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                        stringLength: {
                        min: 2,
			 message: 'Bitte gib den Veranstaltungstitel an'
                    },
                        notEmpty: {
                        message: 'Bitte gib den Veranstaltungstitel an'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
			message: 'Nenne uns bitte den Veranstaltungsort'
                    },
                    notEmpty: {
                        message: 'Nenne uns bitte den Veranstaltungsort'
                    }
                }
            },
          
          typ: {
                validators: {
                    notEmpty: {
                        message: 'Bitte wähle den Veranstaltungstypen aus'
                    }
                }
            },
          
          datum: {
                validators: {
                    notEmpty: {
                        message: 'Bitte gib das Datum an'
                    }
                }
            },
          zeit: {
                validators: {
                    notEmpty: {
                        message: 'Bitte gib die Uhrzeit an'
                    }
                }
            },
          
            email: {
                validators: {
                   
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Bitte gib Deine Telefonnummer an, damit wir Dich bei Nachfragen zu der Veranstalung kontaktieren können'
                    },
                    
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 5,
			message: 'Bitte gib die Adresse ein'
                    },
                    notEmpty: {
                        message: 'Bitte gib die Adresse ein'
                    }
                }
            },
            city: {
                validators: {
                    // stringLength: {
                      //  min: 4,
                   // },
                   // notEmpty: {
                     //   message: 'Please supply your city'
                 //   }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Wähl das Bundesland aus'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Bitte Gib die PLZ an'
                    },
                    zipCode: {
                        country: 'DE',
                        message: 'Bitte Gib eine gültige PLZ an'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Bitte gib mindestens 10 und maximal 200 Buchstaben ein'
                    },
                    notEmpty: {
                        message: 'Bitte beschreibe Deine Veranstaltung'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
