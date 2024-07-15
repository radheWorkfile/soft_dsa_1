function get_document(id) {

    if (id == 1) {

        $('#sal_photo_section').show('slow');
        $('#sal_identity_section').show('slow');
        $('#sal_address_section').show('slow');
        $('#sal_statement_section').show('slow');
        $('#sal_salry_slip_section').show('slow');
        $('#self_photo_section').hide('slow');
        $('#self_identity_section').hide('slow');
        $('#self_address_section').hide('slow');
        $('#self_statement_section').hide('slow');
        $('#self_business_proof_section').hide('slow');
        $('#self_business_profile_section').hide('slow');
        $('#self_itr_section').hide('slow');
        $('#self_profit_loss_section').hide('slow');
        $('#self_balance_sheet_section').hide('slow');

    } else if (id == 2) {

        $('#self_photo_section').show('slow');
        $('#self_identity_section').show('slow');
        $('#self_address_section').show('slow');
        $('#self_statement_section').show('slow');
        $('#self_business_proof_section').show('slow');
        $('#self_business_profile_section').show('slow');
        $('#self_itr_section').show('slow');
        $('#self_profit_loss_section').show('slow');
        $('#self_balance_sheet_section').show('slow');
        $('#sal_photo_section').hide('slow');
        $('#sal_identity_section').hide('slow');
        $('#sal_address_section').hide('slow');
        $('#sal_statement_section').hide('slow');
        $('#sal_salry_slip_section').hide('slow');

    } else {

        $('#self_photo_section').hide('slow');
        $('#self_identity_section').hide('slow');
        $('#self_address_section').hide('slow');
        $('#self_statement_section').hide('slow');
        $('#self_business_proof_section').hide('slow');
        $('#self_business_profile_section').hide('slow');
        $('#self_itr_section').hide('slow');
        $('#self_profit_loss_section').hide('slow');
        $('#self_balance_sheet_section').hide('slow');
        $('#sal_photo_section').hide('slow');
        $('#sal_identity_section').hide('slow');
        $('#sal_address_section').hide('slow');
        $('#sal_statement_section').hide('slow');
        $('#sal_salry_slip_section').hide('slow');

    }

};

function get_loan_type_data(id) {

    $.ajax({
        url: base_url + 'agent/Customer/get_loan_type_doc',
        type: "POST",
        data: {

            'id': id

        },
        dataType: 'json',
        success: function(data) {
            let str = '';
            $('#documnt').html('<label for="example-number-input" class="form-label"> Loan Type Document </label><br>');
            $.each(data, function(i, item) {
                if (parseInt(item) == 1) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" class="check" value="${item}"> Identity Proof <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br>
                    <input class="form-control" type="file" name="loan_identity_proof" id="loan_identity_proof"></div>`;
                } else if (parseInt(item) == 2) {
                    str = ` <div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Address Proof <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_address_proof" id="loan_address_proof"></div>`;
                } else if (parseInt(item) == 3) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Latest Passport Size Photography <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br>
                    <input class="form-control" type="file" name="loan_passport_size_photo" id="loan_passport_size_photo"></div>`;
                } else if (parseInt(item) == 4) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}">  Signature Verification Proof <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_signature" id="loan_signature"></div>`;
                } else if (parseInt(item) == 5) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Age Proof <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_age_proof" id="loan_age_proof"></div>`;
                } else if (parseInt(item) == 6) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Pan Card <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_pan_card" id="loan_pan_card"></div>`;
                } else if (parseInt(item) == 7) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Aadhaar Card <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_aadhaar_card" id="loan_aadhaar_card"></div>`;
                } else if (parseInt(item) == 8) {
                    str = `<input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Voter's Id Card <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_voter_id" id="loan_voter_id"></div>`;
                } else if (parseInt(item) == 9) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Passport <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_passport" id="loan_passport"></div>`;
                } else if (parseInt(item) == 10) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Driving License <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_driving_license" id="loan_driving_license"></div>`;
                } else if (parseInt(item) == 11) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Bank Statement of Previous 12 Month <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_bank_statement" id="loan_bank_statement"></div>`;
                } else if (parseInt(item) == 12) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Latest Salary Slip <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_salary_slip" id="loan_salary_slip"></div>`;
                } else if (parseInt(item) == 13) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Work In Hand / Contract Copies Slip <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_work_in_hand_copies" id="loan_work_in_hand_copies"></div>`;
                } else if (parseInt(item) == 14) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Performa Invoice Slip <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br>
                    <input class="form-control" type="file" name="loan_performa_invoice" id="loan_performa_invoice"></div>`;
                } else if (parseInt(item) == 15) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Property Document Slip <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_property_document" id="loan_property_document"></div>`;
                } else if (parseInt(item) == 16) {
                    str = `<div class="col-lg-6"><input type="checkbox" name="loan_type_document" id="loan_type_document" value="${item}"> Academic Document Slip <span class="text-danger" style="font-weight: 600; font-family: 'Font Awesome 5 Free'; font-size: 15px;">(Maximum Size 2MB)</span><br><input class="form-control" type="file" name="loan_academic_document" id="loan_academic_document"></div>`;
                }
                $('#documnt').append(str);

            });

        },
    });
}

$(document).ready(function() {
    $(".lt_identity_section").hide();
    $('.check').change(function() {
        if ($(this).is(":checked")) {
            $(".lt_identity_section").show('slow');
        } else {
            $(".lt_identity_section").hide('slow');
        }
    });
});

function get_agent_data(id) {
    $.ajax({
        url: base_url + 'agent/Customer/get_agent_data',
        type: "POST",
        data: {
            'id': id
        },
        dataType: 'json',
        success: function(data) {

            var a = data.software;
            $('#id').val(data.id);
            $('#identifier_number').val(data.mobile_no);
            $('#identifier_email').val(data.email);

        },
    });
}

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

                    "url": base_url + 'agent/Customer/customer_data',
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

$('#add_customer_data').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'agent/Customer/add_customer_data',
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
                    window.location.href = base_url + 'agent/Customer/manage_customer';
                }, 1500);
            }
        }
    });
});

function view_customer(id) {

    $.ajax({
        url: base_url + 'agent/Customer/view_customer',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $('#show_customer').html(data);
        },
    });

}

function view_pending_response(id) {

    $.ajax({
        url: base_url + 'agent/Customer/view_pending_response',
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
        url: base_url + 'agent/Customer/view_approve_response',
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
        url: base_url + 'agent/Customer/view_reject_response',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $('#show_reject_response').html(data);
        },
    });

}

function update_customer(id) {
    $.ajax({
        url: base_url + 'agent/Customer/update_customer',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {

            $('#up_customer').html(data);
        },
    });
}

$('#customer_updata').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'agent/Customer/update_basic_customer_data',
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

function update_customer_document(id) {

    $.ajax({
        url: base_url + 'agent/Customer/update_customer_document',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {

            $('#up_customer_document').html(data);
        },
    });

}

$('#customer_doc_updata').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'agent/Customer/update_customer_document_data',
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

function id_card_download(id) {
    $.ajax({
        url: base_url + 'agent/Customer/id_Card',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {

            $('#id_card_details').html(data);
        },
    });

}