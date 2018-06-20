<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="js/admin.js"></script>

<!-- Demo Js -->
<script src="js/demo.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<!-- Custom Js -->
<script src="js/pages/tables/jquery-datatable.js"></script>


<script src="js/jquery.stickytableheaders.js"></script>
<script>

    $(document).ready(function () {
        // passing a fixedOffset param will cause the table header to stick to the bottom of this element
        $(".table1").stickyTableHeaders({scrollableArea: $(".scrollable-area1")[0], "fixedOffset": 2});

        $('.destroy').on('click', function (e) {
            $(".first .table1").stickyTableHeaders('destroy');
        });

        $('.apply').on('click', function (e) {
            $('.first .table1').stickyTableHeaders({scrollableArea1: $(".scrollable-area1")[0], "fixedOffset": 2});
        });
    });

</script>

<script>

    $(document).ready(function () {
        // passing a fixedOffset param will cause the table header to stick to the bottom of this element
        $(".table2").stickyTableHeaders({scrollableArea: $(".scrollable-area2")[0], "fixedOffset": 2});

        $('.destroy').on('click', function (e) {
            $(".first .table2").stickyTableHeaders('destroy');
        });

        $('.apply').on('click', function (e) {
            $('.first .table2').stickyTableHeaders({scrollableArea: $(".scrollable-area2")[0], "fixedOffset": 2});
        });
    });

</script>

<script>

    $(document).ready(function () {
        // passing a fixedOffset param will cause the table header to stick to the bottom of this element
        $(".table3").stickyTableHeaders({scrollableArea: $(".scrollable-area3")[0], "fixedOffset": 2});

        $('.destroy').on('click', function (e) {
            $(".first .table3").stickyTableHeaders('destroy');
        });

        $('.apply').on('click', function (e) {
            $('.first .table3').stickyTableHeaders({scrollableArea: $(".scrollable-area3")[0], "fixedOffset": 2});
        });
    });

</script>

<script>

    $(document).ready(function () {
        // passing a fixedOffset param will cause the table header to stick to the bottom of this element
        $(".table4").stickyTableHeaders({scrollableArea: $(".scrollable-area4")[0], "fixedOffset": 2});

        $('.destroy').on('click', function (e) {
            $(".first .table4").stickyTableHeaders('destroy');
        });

        $('.apply').on('click', function (e) {
            $('.first .table4').stickyTableHeaders({scrollableArea: $(".scrollable-area4")[0], "fixedOffset": 2});
        });
    });

</script>

<?php
Conexion::cerrar_conexion();
?>

</body>

</html>