$(document).ready(function () {
    $('.btn-sideBar-SubMenu').on('click', function (e) {
        e.preventDefault();
        var SubMenu = $(this).next('ul');
        var iconBtn = $(this).children('.zmdi-caret-down');
        if (SubMenu.hasClass('show-sideBar-SubMenu')) {
            iconBtn.removeClass('zmdi-hc-rotate-180');
            SubMenu.removeClass('show-sideBar-SubMenu');
        } else {
            iconBtn.addClass('zmdi-hc-rotate-180');
            SubMenu.addClass('show-sideBar-SubMenu');
        }
    });
    $('.btn-menu-dashboard').on('click', function (e) {
        e.preventDefault();
        var body = $('.dashboard-contentPage');
        var sidebar = $('.dashboard-sideBar');
        if (sidebar.css('pointer-events') == 'none') {
            body.removeClass('no-paddin-left');
            sidebar.removeClass('hide-sidebar').addClass('show-sidebar');
        } else {
            body.addClass('no-paddin-left');
            sidebar.addClass('hide-sidebar').removeClass('show-sidebar');
        }
    });
    $('.Form_Ajax').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var type = form.attr('data-form');
        var action = form.attr('action');
        var method = form.attr('method');
        var request = form.children('.RequestAjax');
        var msjError = "<script> swal('Ocurrio un erorr inesperado', 'Por favor recargue la pagina', 'error'); </script>";
        var formdata = new FormData(this);
        var textAlert;
        if (type == 'save') {
            textAlert = "Los datos seran almacenados en el sistemas";
        } else if (type == 'delete') {
            textAlert = "Los datos seran eliminados del sistema";
        } else if (type == 'update') {
            textAlert = "Los datos seran actualizados en el sistema";
        } else {
            textAlert = "Quieres realizar la operacion solicitada";
        }

        swal({
            title: "¿Estas seguro?",
            text: textAlert,
            type: "question",
            showCancelButton: true,
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar"
        }).then(function () {
            $.ajax({
                type: method,
                url: action,
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
                xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            percentComplete = parseInt(percentComplete * 100);
                            if (percentComplete < 100) {
                                request.append('<p class="text-center">Procesando... (' + percentComplete + '%)</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: ' + percentComplete + '%;"></div></div>');
                            } else {
                                request.html('<p class="text-center"></p>');
                            }
                        }
                    }, false);
                    return xhr;
                },
                success: function (data) {
                    console.log(data);
                    request.html(data);
                },
                error: function () {
                    console.log("Mal");
                    request.html(msjError);
                }
            });
        });
    });
});
(function ($) {
    $(window).on("load", function () {
        $(".dashboard-sideBar-ct").mCustomScrollbar({
            theme: "light-thin",
            scrollbarPosition: "inside",
            autoHideScrollbar: true,
            scrollButtons: {enable: true}
        });
        $(".dashboard-contentPage, .Notifications-body").mCustomScrollbar({
            theme: "dark-thin",
            scrollbarPosition: "inside",
            autoHideScrollbar: true,
            scrollButtons: {enable: true}
        });
    });
})(jQuery);

/*
 const btndm = document.querySelectorAll('.btn-dm');
 
 for (let [i, cv] of btndm.entries()) {
 cv.addEventListener('click', function focus() {
 resetFocus();
 cv.classList.toggle("activa")
 })
 }
 
 function resetFocus() {
 btndm.forEach(el => el.classList.remove("activa"));
 }
 */