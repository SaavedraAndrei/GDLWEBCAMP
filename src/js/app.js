
$(function() {



    // Sección de anuncion/main
   
    $('.ocultar').hide();
    $('.info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function(e) {


        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');

        $('.ocultar').hide();

        e.preventDefault();
        var enlace = $(this).attr('href');
         
        $(enlace).fadeIn(1000);
    })

    // Animaciones para los números

    const resumenLista = $('.resumen-evento');
    if (resumenLista) {
        $('.resumen-evento').waypoint(function() {
            $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 700);
            $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 700);
            $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 700);
            $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 700);
        }, {
            offset: '60%'
        })
    }

   

    // Animaciones para cuenta Regresiva

    $('.cuenta-regresiva').countdown('2021/03/20 09:00:00', function(e) {
        $('#dias').html(e.strftime('%D'));
        $('#horas').html(e.strftime('%H'));
        $('#minutos').html(e.strftime('%M'));
        $('#segundos').html(e.strftime('%S'));
    })

    
    // Lettering

    $('.nombre-sitio').lettering();


    // Menu Fijo
    const windowHeight = $(window).height();
    const barraAltura = $('.barra').innerHeight();
    
    console.log(barraAltura)

    $(window).scroll(function() {
        const scroll = $(window).scrollTop();

        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});
        } else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
    })
    

    // Menu Responsive

    

}); 