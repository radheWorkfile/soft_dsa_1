function view_pending_response(id) {

    $.ajax({
        url: base_url + 'customer/Dashboard/view_pending_response',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $('#show_pending_response').html(data);
        },
    });

}

function view_approve_response(id) {

    $.ajax({
        url: base_url + 'customer/Dashboard/view_approve_response',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $('#show_approve_response').html(data);
        },
    });

}

function view_reject_response(id) {

    $.ajax({
        url: base_url + 'customer/Dashboard/view_reject_response',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $('#show_reject_response').html(data);
        },
    });

}