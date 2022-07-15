// Navigation Menu 
$(window).on('load', function() {
    var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('.list-group-flush a').each(function() {
        var hrefVal = $(this).attr('href');
        if (hrefVal.split('/')[3] == currentUrl) {
            $(this).removeClass('active');
            $(this).addClass('active')
            $('ul.menu li.first').removeClass('active');
        }
    });

});

  // toggle password
  $(".toggle-password").click(function() {
    $(this).toggleClass("bi bi-eye");
    input = $(this).parent().find("input");
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});


jQuery(document).ready(function($){

    jQuery('button#addReviews').click(function(){
        jQuery('.reviewTotal').hide();
        jQuery('.addReview').show();
    });

    jQuery('.status').each(function(){
        var status = jQuery(this).text().toLowerCase();
        if(status == 'pending') {
            jQuery(this).addClass('goldenColor');
        }
        if(status == 'delivered') {
            jQuery(this).addClass('greenColor');
        }
        if(status == 'inprocess') {
            jQuery(this).addClass('blueColor');
        }
        if(status == 'refunded') {
            jQuery(this).addClass('text-danger');
        }
    });

    jQuery('.viewPage').click(function(){
        var status = jQuery(this).parents('td').siblings('.status').text().toLowerCase();
         localStorage.setItem("status", status);
    });

    // get status
    var getStatus = localStorage.getItem("status");
    jQuery('#status').text(getStatus);

    // order status class add

    var currentStatus = jQuery('#status').text().toLowerCase();
    if(currentStatus == 'null') {
        jQuery('#status').text('PENDING')
    }
    if(currentStatus == 'pending') {
        jQuery('#status').addClass('goldenColor');
    }
    if(currentStatus == 'delivered') {
        jQuery('#status').addClass('greenColor');
        jQuery('.deliveredBtn').show();
    } else {
        jQuery('.deliveredBtn').hide();
    }
    if(currentStatus == 'inprocess') {
        jQuery('#status').addClass('blueColor');
    }
    if(currentStatus == 'refunded') {
        jQuery('#status').addClass('text-danger');
    }
});



var eyeBtn = Array.from(document.querySelectorAll('.passDisplay'));
    eyeBtn.forEach(e => {
        e.addEventListener('click', function () {
            let passwordWrapper = e.closest('.passwordWrapper');
            let passInput = passwordWrapper.querySelector('input');
            if (passInput.classList.contains('passInput')) {
                if (passInput.type == 'password') {
                    passInput.setAttribute('type', 'text');
                    this.setAttribute('class', 'bi bi-eye-fill enter-icon right-icon position-absolute passDislay');
                }
                else {
                    passInput.setAttribute('type', 'password');
                    this.setAttribute('class', 'bi bi-eye-slash enter-icon right-icon position-absolute passDislay');
                }
            }
        })
    });

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

var sideToggle = document.body.querySelector('#navbarDropdown');
var getToggle =  document.querySelector('.dropdown-menu');
sideToggle.addEventListener('click', function() {
    getToggle.classList.toggle('show');
})

var sideToggles = document.body.querySelector('#notification');
var getToggles =  document.querySelector('.dropdown-notifcation');
sideToggles.addEventListener('click', function() {
    getToggles.classList.toggle('show');
})


jQuery('.edit').click(function(){
    jQuery('#edit').removeClass('text-right disabled border-0 px-0');
    jQuery('#edits').removeClass('text-right disabled border-0 px-0');
    jQuery(this).attr('disabled', true);
    jQuery('#edit').addClass('text-center');
    jQuery('#edits').addClass('text-center');
    jQuery(this).hide();
    jQuery('.update').show();
});

jQuery('.update').click(function(){
    jQuery('#edit').addClass('text-right disabled border-0 px-0');
    jQuery('#edits').addClass('text-right disabled border-0 px-0');
    jQuery('#edit').removeClass('text-center');
    jQuery('#edits').removeClass('text-center');
    jQuery(this).attr('disabled', false);
    jQuery(this).hide();
    jQuery('.edit').show();
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

