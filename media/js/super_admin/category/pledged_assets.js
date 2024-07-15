$(document).ready(function() {
    let searchObj = {};
    // Reporting Section
    let reportTable = {

        printTable: function(search_data) {

            $("#leadtable").DataTable({

                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                'columnDefs': [{
                    'targets': [1, 2, 3, ],
                    'orderable': true
                }],

                "ajax": {
                    "url": base_url + 'super_admin/category/Pledged_assets/pledged_assets_data',
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

    $('#filter_lead_date').submit(function(e) {
        e.preventDefault();
        $("#leadtable").DataTable().clear().destroy();
        let search = $('#filter_lead_date').serializeArray();
        let searchObj = {};
        $.each(search, function(i, row) {
            searchObj[row.name] = row.value;
        });
        reportTable.printTable(searchObj);
    });
});

$('#add_pledged_data').submit(function(e) {

    e.preventDefault();
    $.ajax({

        url: base_url + 'super_admin/category/Pledged_assets/add_pledged_data',
        type: "POST",
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
            if (data.icon == "error") {
                var valid = '';
                $.each(data.text, function(i, item) {
                    valid += item;
                });
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    html: valid,
                    showConfirmButton: !1,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    title: data.text,
                    showConfirmButton: !1,
                    timer: 1500
                });
                setTimeout(function() {
                    window.location.reload(1);
                }, 1500);
            }
        }

    });

});

function update_pledged_assets(id) {
    $.ajax({
        url: base_url + 'super_admin/category/Pledged_assets/update_pledged_assets',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {

            $('#up_pledged_assets').html(data);
        },
    });
}

$('#pledged_assets_updata').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'super_admin/category/Pledged_assets/update_pledged_assets_data',
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: 'json',
        success: function(data) {
            if (data.icon == "error") {
                var valid = '';
                $.each(data.text, function(i, item) {
                    valid += item;
                });
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    html: valid,
                    showConfirmButton: !1,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    title: data.text,
                    showConfirmButton: !1,
                    timer: 1500
                });
                setTimeout(function() {
                    window.location.reload(1);
                }, 1500);
            }
        }
    });
});


$('#add_designation').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: base_url + 'super_admin/dashboard/add_designation',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
            if (data.icon == "error") {
                var valid = '';
                $.each(data.text, function(i, item) {
                    valid += item;
                });
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    html: valid,
                    showConfirmButton: !1,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    title: data.text,
                    showConfirmButton: !1,
                    timer: 1500
                });
                setTimeout(function() {
                    window.location.reload(1);
                }, 1500);
            }
        }

    });

});


$(document).ready(function() {
    let searchObj = {};
    let reportTable = {
        printTable: function(search_data) {
            $("#designation").DataTable({
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                'columnDefs': [{
                    'targets': [1, 2, 3, ],
                    'orderable': true
                }],
                "ajax": {
                    "url": base_url + 'super_admin/dashboard/manage_all_designation',
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


function update_designation(id) {
    $.ajax({
        type: "POST",
        url: base_url + 'super_admin/dashboard/get_des_data',
        data: {
            'id': id
        },
        success: function(data) {
            $('#designation_data').html(data);
            // console.log(data);
        },
    });
}

// super_admin / dashboard / update_designation
$('#designation_updata').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'super_admin/dashboard/update_designation',
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: 'json',
        success: function(data) {
            if (data.icon == "error") {
                var valid = '';
                $.each(data.text, function(i, item) {
                    valid += item;
                });
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    html: valid,
                    showConfirmButton: !1,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    title: data.text,
                    showConfirmButton: !1,
                    timer: 1500
                });
                setTimeout(function() {
                    window.location.reload(1);
                }, 1500);
            }
        }
    });
});