$(document).ready(function () {

    //validar formulario de contactanos
    $(function () {
        var validator = $('#formulario').validate({
            rules: {
                nombre: {
                    required: true
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 8,
                    maxlength: 80
                },
                precio: {
                    required: true,
                    digits: true,
                    minlength: 2,
                    maxlength: 10
                },
                mensaje: {
                    required: true,
                    minlength: 20,
                    maxlength: 250
                }
            },
            messages: {
                email: {
                    required: 'El email es requerido',
                    email: 'No es un email valido',
                    minlength: 'El minimo de caracteres es 8'
                },
                precio: {
                    required: 'El precio es requerido',
                    digits: 'Solo se acepta numeros',
                    minlength: 'El minimo de caracteres es 2',
                    maxlength: 'El maximo de caracteres es 10'
                },
                nombre: {
                    required: 'El nombre es requerido',
                },
                mensaje: {
                    required: 'El mensaje es obligatorio',
                    minlength: 'El minimo de caracteres es 20',
                    maxlength: 'El maximo de caracteres es 250'
                }
            }
        });
        $('#formulario').submit(function (e) {
            //$(this).data('validator').resetForm();
            e.preventDefault();
            var form = $(this);
            var data = form.serialize() + '&action=' + form.attr('action');
            if (validator.element("#nombre") && validator.element("#email") && validator.element("#mensaje")) {
                $.ajax({
                    type: "POST",
                    url: form.data('url'),
                    data: data,
                    error: function (data) {
                        $("#enviar").attr('disabled', false);
                    },
                    beforeSend: function () {
                        $('#enviar').prop('disabled', true);
                        $('#enviar').html('<i class="fa fa-spinner fa-pulse"></i>  Enviando...');
                    },
                    success: function (data) {
                        $("#enviar").attr('disabled', false);
                        if (data.status == 200) {
                            document.getElementById("formulario").reset();
                            $("#enviar").attr('disabled', true);
                            $('.message').addClass('success-ok');
                            $('.message').html('<span>Su mensaje fue enviado con exito</span>');
                            $('#enviar').html('Enviar');
                            $(".message").slideDown('slow', function () {
                                setTimeout(function () {
                                    $(".message").slideUp('slow');
                                }, 3000);
                            });
                        }
                        else {
                            document.getElementById("formulario").reset();
                            $('.message').addClass('success-error');
                            $('.message').html('<span>error</span>');
                            // $('#enviar').html('Envíanos tu Mensaje');
                            $(".message").slideDown('slow', function () {
                                setTimeout(function () {
                                    $(".message").slideUp('slow');
                                }, 3000);
                            });
                        }
                    }
                });
            }
        });
    });
    //validar suscribete
    $(function () {
        var valcorreo = $('#formularioSusbs').validate({
            rules: {
                correo: {
                    required: true,
                    email: true,
                    minlength: 8
                }
            },
            messages: {
                correo: {
                    required: 'El email es requerido',
                    email: 'No es un email valido',
                    minlength: 'El minimo de caracteres es 8'
                }
            }
        });
        $('#formularioSusbs').submit(function (e) {
            var form = $('#formularioSusbs');
            var stringdata = form.serialize() + '&action=' + form.attr('action');
            e.preventDefault();
            if (valcorreo.element("#correo")) {
                $.ajax({
                    type: 'post',
                    url: form.data('url'),
                    data: stringdata,
                    error: function () {
                        $("#enviarcorreo").attr('disabled', false);
                    },
                    beforeSend: function () {
                        $('#enviarcorreo').prop('disabled', true);
                        $('#enviarcorreo').html('<i class="fa fa-spinner fa-pulse"></i>  Enviando...');
                    },
                    success: function (data) {
                        $("#enviarcorreo").attr('disabled', false);
                        if (data.status == 200) {
                            document.getElementById("formularioSusbs").reset();
                            $("#enviarcorreo").attr('disabled', true);
                            $(".message").removeClass("success-error");
                            $('.message').addClass('success-ok');
                            $('.message').html('<span>Suscripcion exitosa</span>');
                            $('#enviarcorreo').html('Enviar');
                            $(".message").slideDown('slow', function () {
                                setTimeout(function () {
                                    $(".message").slideUp('slow');
                                }, 3000);
                            });
                        }
                        else {
                            document.getElementById("formularioSusbs").reset();
                            $(".message").removeClass("success-ok");
                            $('.message').addClass('success-error');
                            if (data.value == 'existe') {
                                $('.message').html('<span>El correo ya existe</span>');
                            } else {
                                $('.message').html('<span> Ocurrio un error</span>');
                            }
                            $('#enviarcorreo').html('Enviar');
                            $(".message").slideDown('slow', function () {
                                setTimeout(function () {
                                    $(".message").slideUp('slow');
                                }, 3000);
                            });
                        }
                    }
                });
            }
        });
    });
    //mapa de google
    $(function () {
        var mapDiv, map, infobox;
        var lat = -8.1206089;
        var lon = -79.0160026;
        jQuery(document).ready(function ($) {
            mapDiv = $("#contact-map");
            mapDiv.height(400).gmap3({
                map: {
                    options: {
                        center: [lat, lon],
                        zoom: 15
                    }
                },
                marker: {
                    values: [
                        {latLng: [lat, lon], data: "Restaurant 5Comentarios FJ"},
                    ],
                    options: {
                        draggable: false
                    },
                    events: {
                        mouseover: function (marker, event, context) {
                            var map = $(this).gmap3("get"),
                                infowindow = $(this).gmap3({get: {name: "infowindow"}});
                            if (infowindow) {
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                    infowindow: {
                                        anchor: marker,
                                        options: {content: context.data}
                                    }
                                });
                            }
                        },
                        mouseout: function () {
                            var infowindow = $(this).gmap3({get: {name: "infowindow"}});
                            if (infowindow) {
                                infowindow.close();
                            }
                        }
                    }
                }
            });
        });
    });
    //slider
    $(function () {
        $('.bxslider').bxSlider({
            auto: true,
            speed: 2000,
            autoControls: false,
            controls: true,
            adaptiveHeight: true,
        });
    });
    //menu responsive
    $(function () {
        var c = true;
        $('.menu_bar').click(function () {
            if (c) {
                $('.mainnav-warp').animate({
                    left: '0'
                });
                c = false;
            } else {
                c = true;
                $('.mainnav-warp').animate({
                    left: '-100%'
                });
            }
        });
    });
    //pedidos
    $(function () {
        $('.oculto').hide();
        var ban = true;
        var valid = $('#formularioOrder').validate({
            rules: {
                correoorder: {
                    required: true,
                    email: true,
                    minlength: 8
                },
                nombreorder: {
                    required: true
                },
                apellidosorder: {
                    required: true
                },
                telefonoorder: {
                    required: true
                }
            },
            messages: {
                correoorder: {
                    required: 'El email es requerido',
                    email: 'No es un email valido',
                    minlength: 'El minimo de caracteres es 8'
                },
                nombreorder: {
                    required: 'El nombre es requerido',
                },
                apellidosorder: {
                    required: 'El apellido es requerido',
                },
                telefonoorder: {
                    required: 'El telefono es requerido',
                }
            }
        });

        $('#formularioOrder').submit(function (e) {
            var form = $(this);
            var btn = $('#btn-pedido');
            var mess = $(".message");
            var ocu = $('.oculto');
            var stringdata = form.serialize() + '&action=' + form.attr('action');
            e.preventDefault();
            if (ban) {
                if (valid.element("#correoorder")) {
                    $.ajax({
                        type: 'post',
                        url: form.data('url'),
                        data: stringdata,
                        error: function (data) {
                            btn.attr('disabled', true);
                        },
                        beforeSend: function () {
                            btn.prop('disabled', true);
                            btn.html('<i class="fa fa-spinner fa-pulse"></i>  Enviando...');
                        },
                        success: function (data) {
                            if (data.status == 200) {
                                btn.attr('disabled', true);
                                mess.removeClass("success-error");
                                mess.addClass('success-ok');
                                mess.html('<span>Su pedido se realizo con exito </span>');
                                btn.html('Enviar');
                                mess.slideDown('slow', function () {
                                    setTimeout(function () {
                                        mess.slideUp('slow');
                                    }, 3000);
                                });
                            }
                            else {
                                ocu.show('slow');
                                mess.removeClass("success-ok");
                                mess.addClass('success-error');
                                mess.html('<span>Su correo no existe o falta completar sus datos </span>');
                                mess.slideDown('slow', function () {
                                    setTimeout(function () {
                                        mess.slideUp('slow');
                                    }, 3000);
                                });
                                btn.attr('disabled', false);
                                btn.html('Enviar');
                                ban = false;
                            }
                        }
                    });
                }
            } else {
                //$('#formularioOrder')[0].reset();
                if (valid.element("#correoorder") && valid.element("#nombreorder") && valid.element("#apellidosorder") && valid.element("#telefonoorder")) {
                    $.ajax({
                        type: 'post',
                        url: form.data('url'),
                        data: stringdata,
                        error: function (data) {
                            btn.attr('disabled', true);
                        },
                        beforeSend: function () {
                            btn.prop('disabled', true);
                            btn.html('<i class="fa fa-spinner fa-pulse"></i>  Enviando...');
                        },
                        success: function (data) {
                            if (data.status == 200) {
                                btn.attr('disabled', true);
                                mess.removeClass("success-error");
                                mess.addClass('success-ok');
                                mess.html('<span>Su pedido se realizo con exito  y tambien se suscribio exitosamente </span>');
                                btn.html('Enviar');
                                mess.slideDown('slow', function () {
                                    setTimeout(function () {
                                        mess.slideUp('slow');
                                    }, 3000);
                                });
                            }
                            else {
                                ocu.show('slow');
                                mess.removeClass("success-ok");
                                mess.addClass('success-error');
                                mess.html('<span>Lo sentimos ocurrio un error intentelo mas tarde</span>');
                                mess.slideDown('slow', function () {
                                    setTimeout(function () {
                                        mess.slideUp('slow');
                                    }, 3000);
                                });
                                ban = false;
                            }
                        }
                    });
                }
            }
        });
    });
    //fin pedidos 
});//fin del document
