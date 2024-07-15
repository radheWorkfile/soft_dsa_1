$(document).ready(function() {
    let searchObj = {};

    let reportTable = {

        printTable: function(search_data) {

            $("#commissiontable").DataTable({

                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                'columnDefs': [{
                    'targets': [1, 2, 3, 4, 5, ],
                    'orderable': true
                }],

                "ajax": {

                    "url": base_url + 'employee/Commission_payment/commission_payment_data',
                    "type": "POST",
                    "dataSrc": "data",
                    "data": search_data

                },

                dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                "lengthMenu": [

                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"]

                ],

                "buttons": ["excel", "pdf", "print"]

            });

        }

    }

    reportTable.printTable(searchObj);


});

function view_commission_paymentn_data(id) {

    $.ajax({
        url: base_url + 'employee/Commission_payment/view_commission_payment',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $('#show_commission_paymennt').html(data);
        },
    });

}