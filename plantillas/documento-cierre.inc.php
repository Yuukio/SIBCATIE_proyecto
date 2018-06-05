<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>&copy; 2018 - SIBCATIE creado por <a href="https://www.catie.ac.cr/" title="Visit w3schools">www.catie.ac.cr</a></p>
</footer>

<script>
    $(document).ready(function () {
        // Agregue desplazamiento suave a todos los enlaces en la barra de navegación + enlace de pie de página
        $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Asegúrate de que this.hash tenga un valor antes de anular el comportamiento predeterminado
                event.preventDefault();

                // Almacenar hash
                var hash = this.hash;

                // Usando el método animate() de jQuery para agregar un desplazamiento suave de la página
                // El número opcional (900) especifica la cantidad de milisegundos necesarios para desplazarse al área especificada
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function () {

                    // Agregue hash (#) a URL cuando finalice el desplazamiento (comportamiento de clic predeterminado)
                    window.location.hash = hash;
                });
            } // Final if
        });

        $(window).scroll(function () {
            $(".slideanim").each(function () {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

</body>

</html>
