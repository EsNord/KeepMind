$(document).ready(function () {

    //Image Upload Script

    //Read Image And Show
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.profile-image').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(function () {
        $('#avatarImage').on('change', function () {
            //Validation
            var val = $(this).val();
            switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
                case 'jpg': case 'png':
                    readURL(input);
                    break;
                default:
                    $(this).val('');
                    // error message here
                    $('.fileDetected').text('Not Image');
                    break;
            }

            readURL(input);
        });
    });

    //Show Name Image
    var input = document.getElementById('avatarImage');
    var infoArea = document.getElementsByClassName('fileDetected')[0];
    input.addEventListener('change', showFileName);
    function showFileName(event) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.innerText = 'File name: ' + fileName;
    }


});