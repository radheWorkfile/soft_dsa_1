$(document).ready(function() {
    let searchObj = {};

    let reportTable = {

        printTable: function(search_data) {

            $("#leadtable").DataTable({

                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                'columnDefs': [{
                    'targets': [1, 2, 3, 4, 5, ],
                    'orderable': true
                }],

                "ajax": {

                    "url": base_url + 'super_admin/Agent/agent_data',
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


$('#add_agent_data').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'super_admin/Agent/add_agent_data',
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
                    window.location.href = base_url + 'super_admin/Agent/manage_agent';
                }, 1500);
            }
        }
    });
});

function view_agent(id) {
    $.ajax({
        url: base_url + 'super_admin/Agent/view_agent_data',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $('#show_agent').html(data);
        },
    });
}

function update_agent(id) {
    $.ajax({
        url: base_url + 'super_admin/Agent/update_agent',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {

            $('#up_agent').html(data);
        },
    });
}

$('#agent_updata').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'super_admin/Agent/update_agent_data',
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

function add_group(id) {
    $.ajax({
        url: base_url + 'super_admin/Agent/add_group',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {

            $('#up_grup').html(data);
        },
    });
}
$('#group_name_updata').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'super_admin/Agent/update_group_data',
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


function id_card_download1(id) {
    $.ajax({
        type: "POST",
        url: base_url + 'super_admin/agent/id_card_man',
        data: {
            'id': id
        },
        success: function(data) {
            popup(data);
        },
    });
}

function popup(data) {
    var base_url = '<?php echo base_url() ?>';
    var frame1 = $('<iframe />');
    frame1[0].name = "frame1";
    frame1.css({
        "position": "absolute",
        "top": "-1000000px"
    });
    $("body").append(frame1);
    var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
    frameDoc.document.open();
    //Create a new HTML document.
    frameDoc.document.write('<html>');
    frameDoc.document.write('<head>');
    frameDoc.document.write('<title></title>');
    frameDoc.document.write('</head>');
    frameDoc.document.write('<body>');
    frameDoc.document.write(data);
    frameDoc.document.write('</body>');
    frameDoc.document.write('</html>');
    frameDoc.document.close();
    setTimeout(function() {
        window.frames["frame1"].focus();
        window.frames["frame1"].print();
        frame1.remove();
    }, 500);
    return true;
}