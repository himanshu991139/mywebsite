// update user
function update_user() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var newpassword = document.getElementById("confirm_pass").value;
    var contact = document.getElementById("contact").value;
    var tokken = document.getElementById("token").value;
// Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password) + '&contact=' + encodeURIComponent(contact) + '&_token=' + encodeURIComponent(tokken);
    if (name == '' || email == '' || password == '' || contact == '') {
        toastr.error("Please Fill All Fields");
    }

    else if (password != newpassword) {

        toastr.error('Password is not matched');


    }

    else {
// AJAX code to submit form.
        $.ajax({
            type: "POST",
            url: "/test",
            data: dataString,
            cache: false,
            success: function (data) {

                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-bottom-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                toastr.success('Data Update Successfully');

                var data = data;

                document.getElementById("Name").innerHTML = data.name;
                document.getElementById("Email").innerHTML = data.email;
                document.getElementById("Phone").innerHTML = data.phone;

                return true;
            }
        });
    }
    return false;
}


// cost calculator
var mainApp = angular.module("Promotion_calculate", []);

mainApp.controller('cost_Controller', function ($scope) {


    $scope.Cost = {
        installs: 0,
        reviews: 0,


        total_Cost: function () {
            var cost_object;
            cost_object = $scope.Cost;
            return totalcost = ( cost_object.installs * $scope.I_rates ) + ( cost_object.reviews * $scope.R_rates);


        }
    };
});

// buy point


var buyPointApp = angular.module("point_calculator", []);

buyPointApp.controller('pointController', function ($scope) {


    $scope.point = {};
});


//cost calculator


$("#install,#reviews").on('keyup', function () {
    var install_cost = $("#install").val() * $("#install_rates").text()

    var review_cost = $("#reviews").val() * $("#reviews_rates").text()

    $("#rates").html(install_cost + review_cost);


});


$('#country').on('change', function (e) {
    console.log($(this).val());
});









