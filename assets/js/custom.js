// Add loading effect to button on click
function loader(btn, action) {
    if (action === 'show') {
        $('<div class="text-center loader"><i class="fa fa-refresh fa-spin" aria-hidden="true"></i></div>').insertAfter(btn);
        btn.attr('disabled', 'disabled');
        $('.loader').show();
    } else {
        $('.loader').html('');
        btn.removeAttr('disabled');
        $('.loader').hide();
    }

}

// iziToast alert 
function toastAlert(my_title, msg, msg_color, my_icon) {
    iziToast.show({
        title: my_title,
        message: msg,
        color: msg_color,
        icon: 'iziToast-icon ' + my_icon,
        position: 'bottomCenter'
    });
}

// make any button have loader on click
function loadOnClick(btn_id) {
    btn = $('#' + btn_id);
    loader(btn, 'show');
}

// show or hide password at input filed password
function showPas() {
    var btn = $('#show_pass');
    var state = btn.val();

    if (state == 1) {
        $('[type="not_password"]').attr('type', 'password');
        state -= 1;
        btn.val(state);
        btn.html('Show password');
    } else {
        $('[type="password"]').attr('type', 'not_password');
        state = 1;
        btn.val(state);
        btn.html('Hide password');
    }
}

// change post images 
function image_changer(source, target) {
    var img = $(source).attr('src');
    $(target).attr('src', img);
}

// show callback list
function toggle_display(elem) {
    $(elem).toggle(500);
}

// iziToast alert default settings
iziToast.settings({
    id: null,
    class: '',
    title: '',
    titleColor: '',
    titleSize: '',
    titleLineHeight: '',
    message: '',
    messageColor: '',
    messageSize: '',
    messageLineHeight: '',
    backgroundColor: '',
    theme: 'light', // dark
    color: '', // blue, red, green, yellow
    icon: '', // ico-warning,ico-success,ico-error,ico-info
    iconText: '',
    iconColor: '',
    iconUrl: null,
    image: '',
    imageWidth: 50,
    maxWidth: null,
    zindex: null,
    layout: 1,
    balloon: false,
    close: true,
    closeOnEscape: true,
    closeOnClick: false,
    displayMode: 0, // once, replace
    position: 'bottomCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
    target: '',
    targetFirst: true,
    timeout: 10000,
    rtl: false,
    animateInside: true,
    drag: true,
    pauseOnHover: true,
    resetOnHover: false,
    progressBar: true,
    progressBarColor: '',
    progressBarEasing: 'linear',
    overlay: false,
    overlayClose: false,
    overlayColor: 'rgba(0, 0, 0, 0.6)',
    transitionIn: 'bounceInUp', // bounceInLeft, bounceInRight, bounceInUp, bounceInDown, fadeIn, fadeInDown, fadeInUp, fadeInLeft, fadeInRight or flipInX.
    transitionOut: 'flipOutX', //fadeOut, fadeOutUp, fadeOutDown, fadeOutLeft, fadeOutRight, flipOutX
    transitionInMobile: 'bounceInUp',
    transitionOutMobile: 'flipOutX',
    buttons: {},
    inputs: {},
    onOpening: function() {},
    onOpened: function() {},
    onClosing: function() {},
    onClosed: function() {}
});