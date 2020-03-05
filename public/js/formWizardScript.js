$(document).ready(function () {
    var $signupForm = $( '#SignupForm' );
    $signupForm.formToWizard({
        submitButton: 'SaveAccount',
        nextBtnClass: 'btn btn-primary next',
        prevBtnClass: 'btn btn-default prev',
        buttonTag:    'button',
        validateBeforeNext: function(form, step) {
            var stepIsValid = true;
            var validator = form.validate();
            $(':input', step).each( function(index) {
                var xy = validator.element(this);
                stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
            });
            return stepIsValid;
        },
        progress: function (i, count) {
            $('#progress-complete').width(''+(i/count*100)+'%');
        }
    });

//   CheckBox Event
    $('.PlacementRadio').on('change',function () {
      if($(this).val().toString()=="no"){
          $(this).parents('.form-group').append('<div data-complete="false" class="Exam-Button"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fa fa-gear"></i> Start Placement Exam</button></div>');
      }
      else{
          $('.Exam-Button').remove();
      }
    });

});
