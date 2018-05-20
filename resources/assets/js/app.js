
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import ViewRouter from 'vue-router';

window.Vue = require('vue');
// var VueRouter = require('vue-router')
Vue.use(ViewRouter)


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('articles', require('./components/Articles.vue'));
Vue.component('navigationbar',require('./components/Navigationbar'));

const app = new Vue({
    el: '#navbaritem'
});

$('.patientappointment').on('click',function () {
    bootbox.prompt({
        title: "Choose Date to update",
        inputType: 'date',
        callback: function (result) {
            if(result=='')
            {
              booptbox.alert("Please Choose proper date format.");
            }
            else
            {

            }
        }
    });
});
$('.cancelappointment').on('click',function () {
    bootbox.confirm({
        title: "Cancel Appointment",
        message: "Do you want to cancel your appointment ?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancel'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Confirm'
            }
        },
        callback: function (result) {
            console.log('This was logged in the callback: ' + result);
        }
    });
})
$('.scheduleappointment').on('click',function () {
    var doctorid= $(this).data('id');
    var patientid=$(this).data('patientid');

    bootbox.prompt({
        title: "Please choose date to make an appointment",
        inputType: 'date',
        callback: function (result) {
            if(result=='')
            {
                bootbox.alert("you cannot choose empty date for appointment");
            }
            else {

                            $.ajax({
                    type: 'POST',
                    url: 'CreateAppointment',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'doctor': doctorid,
                        'userid': patientid,
                        'time' : result,
                        'description':'No Description'
                    },
                    success: function(data) {
                        if(data=='success')
                        {
                            bootbox.alert("Your appointment has been saved, we will let you know soon");
                        }

                    }


                            });



            }
        }
    });
})