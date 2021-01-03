$('#namecheck').hide();
    $('#descriptioncheck').hide();
    $('#pickercheck').hide();
    $(document).ready(function () {
        
        let nameError = true;
        let descriptionError = true;
        let pickerError = true;

        $('#name').keyup(function () {
            validateName();
        });
        $('#description').keyup(function () {
            validateDescription();
        });
        $('#datetimepicker').keyup(function () {
            validatePicker();
        });

        function validateName() {
            if ($('#name').val().length == '') {
                $('#namecheck').show();
                nameError = false;
                return false;
            }
            else {
                $('#namecheck').hide();
                nameError = true;
            }
        }

        function validateDescription() {
            if ($('#description').val().length == '') {
                $('#descriptioncheck').show();
                descriptionError = false;
                return false;
            }
            else {
                $('#descriptioncheck').hide();
                descriptionError = true;
            }
        }

        function validatePicker() {
            if ($('#datetimepicker').val().length == '') {
                $('#pickercheck').show();
                pickerError = false;
                return false;
            }
            else {
                $('#pickercheck').hide();
                pickerError = true;
            }
        }
        function validatePicker() {
            if (($('#datetimepicker').val().length == '') || ($('#timepicker').val().length == '') ) {
                $('#pickercheck').show();
                pickerError = false;
                return false;
            }
            else {
                $('#pickercheck').hide();
                pickerError = true;
            }
        }

        $('#submitBtn').click(function () {
            validateName();
            validateDescription();
            validatePicker();
            if (nameError == true && descriptionError == true && pickerError == true) {
                return true;
            } else {
                return false;
            }
        });
    });  




    var today = new Date();
    var time = (today.getHours() + 1);
    var date = today.getFullYear() + '/0' + (today.getMonth() + 1) + '/0' + today.getDate();
    $.datetimepicker.setLocale('pl');

    $('#datetimepicker').datetimepicker({
        timepicker: false,
        minDate: 0,
        maxDate: '+1970/01/18',
        format: 'Y/m/d',
        disabledWeekDays: [0]
    });

    if (today.getHours() >= 19) {
        $('#datetimepicker').datetimepicker({
            minDate: '+1970/01/02',
            defaultDate: '+1970/01/02'
        });
    }

    var timepicker = $('#timepicker');

    timepicker.datetimepicker({
        datepicker: false,
        minTime: '8:00',
        maxTime: '19:59',
        defaultTime: '12:00',
        format: 'H:i'
    });


    $('#datetimepicker').change(function () {
        console.log($("#datetimepicker").val());
        if ($('#datetimepicker').val() != '') {
            $("#timepicker").removeAttr('disabled');

            if (date === $("#datetimepicker").val()) {
                timepicker.datetimepicker({
                    minTime: time.toString() + ':00'
                });
            }
            else {
                timepicker.datetimepicker({
                    minTime: '8:00',
                    maxTime: '19:59'
                });
            }

        }
        else {
            $("#timepicker").prop('disabled', true);
            $("#timepicker").val('');
        }

    });
