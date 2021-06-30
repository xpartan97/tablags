$(function () {
    let table = $('#tabla_demo').DataTable({
        responsive: true,
        buttons: [
            {extend: 'print'},
            {extend: 'copy'},
            {extend: 'excel', title: 'usuarios'},
            {extend: 'csv', title: 'usuarios'},
            {extend: 'pdf', title: 'usuarios'}
        ],
        language: {
            "lengthMenu": "Mostrar MENU Filas",
            "search": "Buscar",
            "info": "Mostrando PAGE de PAGES paginas",
            "paginate": {
                "previous": "Anterior",
                "next": "Siguiente"
            }
        },
        columnDefs: [
            {
                "targets": [0],
                "visible": true,
                "searchable": true
            }
        ],
        order: [[0, 'desc']],
        lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]],
        iDisplayLength: 5
    });
    $('#export_print').on('click', function (e) {
        e.preventDefault();
        table.button(0).trigger();
    });

    $('#export_copy').on('click', function (e) {
        e.preventDefault();
        table.button(1).trigger();
    });

    $('#export_excel').on('click', function (e) {
        e.preventDefault();
        table.button(2).trigger();
    });

    $('#export_csv').on('click', function (e) {
        e.preventDefault();
        table.button(3).trigger();
    });

    $('#export_pdf').on('click', function (e) {
        e.preventDefault();
        table.button(4).trigger();
    });
});

//Cod2*****
let table = $('#tabla_demo').DataTable({ esta linea ira tu id de tu tabla
Christopher envió Hoy a las 0:11
buttons: [
            {extend: 'print'},
            {extend: 'copy'},
            {extend: 'excel', title: 'usuarios'},
            {extend: 'csv', title: 'usuarios'},
            {extend: 'pdf', title: 'usuarios'}
        ],
//Cod2*****
language: {
            "lengthMenu": "Mostrar MENU Filas",
            "search": "Buscar",
            "info": "Mostrando PAGE de PAGES paginas",
            "paginate": {
                "previous": "Anterior",
                "next": "Siguiente"
            }
        },
//Cod3*****
order: [[0, 'desc']],
//Cod3*****
lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]],
//Cod4*****
iDisplayLength: 5
//Cod4*****
$('#export_print').on('click', function (e) {
        e.preventDefault();
        table.button(0).trigger();
    });

    $('#export_copy').on('click', function (e) {
        e.preventDefault();
        table.button(1).trigger();
    });

    $('#export_excel').on('click', function (e) {
        e.preventDefault();
        table.button(2).trigger();
    });

    $('#export_csv').on('click', function (e) {
        e.preventDefault();
        table.button(3).trigger();
    });

    $('#export_pdf').on('click', function (e) {
        e.preventDefault();
        table.button(4).trigger();
    });




<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>
