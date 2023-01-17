$(function () {
    $('#vehicleOrdersTable').sortable({ items: 'tr' });

    $(document).on('click', '#save', function () {
        var vehicleId = $("#vehicle_id").val();
        var planDate = $("#plan_date_input").val();

        var orders = [];
        $('#vehicleOrdersTable > tbody  > tr').each(function (index, tr) {
            var orderId = $(tr).attr("orderId");
            orders.push(orderId);
        });

        $.ajax({
            type: 'POST',
            url: "/plan/update",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "vehicle_id": vehicleId,
                "plan_date": planDate,
                "orders": orders,
            },
            success: function (data) {
                if (data.error) {
                    console.log(data.message);
                    return;
                }

                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Planlama Kaydedildi',
                    body: 'Planlama başarıyla kaydedildi.',
                })
            }
        });
    });

    $(document).on('click', '.updateStatus', function () {
        var orderId = $(this).attr("orderId");

        $.ajax({
            type: 'POST',
            url: "/tms/order/nextStatus",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "order_id": orderId,
            },
            success: function (data) {
                if (data.error) {
                    console.log(data.message);
                    return;
                }
                openStatusModel(data.order_id, data.status_list);
            }
        });
    });

    $(document).on('click', '#btnUpdateStatusButton', function () {
        var orderId = $("#order_id").val();
        var note = $("#note").val();
        var statusId = $("#status_list").val();
        var code = $("#code").val();

        var formData = new FormData();

        if ($('#images1source')[0]?.files.length > 0) {
            var img1 = $('#images1source')[0].files[0];
            formData.append('file1', img1);
        }

        if ($('#images2source')[0]?.files.length > 0) {
            var img2 = $('#images2source')[0].files[0];
            formData.append('file2', img2);
        }

        if ($('#images3source')[0]?.files.length > 0) {
            var img3 = $('#images3source')[0].files[0];
            formData.append('file3', img3);
        }

        if ($('#images4source')[0]?.files.length > 0) {
            var img4 = $('#images4source')[0].files[0];
            formData.append('file4', img4);
        }

        if ($('#images5source')[0]?.files.length > 0) {
            var img5 = $('#images5source')[0].files[0];
            formData.append('file5', img5);
        }

        if ($('#images6source')[0]?.files.length > 0) {
            var img6 = $('#images6source')[0].files[0];
            formData.append('file6', img6);
        }

        formData.append('order_id', orderId);
        formData.append('status', statusId);
        formData.append('note', note);
        formData.append('code', code);
        formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

        $.ajax({
            type: 'POST',
            url: "/tms/order/updateStatus",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            enctype: 'multipart/form-data',
            data: formData,
            success: function (data) {
                if (data.error) {
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Güncelleme Başarısız',
                        body: data.message,
                    })
                    $("#modal-status").modal('hide');
                    return;
                }

                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Güncelleme Başarılı',
                    body: data.message,
                })

                $("#modal-status").modal('hide');
                window.location.reload();
            }
        });

    });

    $(document).on('change', '#status_list', function () {
        const codeRequiredList = ["10"]; // WAITING FOR CONFIRMATION STATUS
        let value = $("#status_list").val();
        let index = codeRequiredList.indexOf(value);
        if (index > -1)
            $('#code_div').removeClass('d-none');
        else
            $('#code_div').addClass('d-none');
    });

    const openStatusModel = function (orderId, statusList) {
        var statusModal = $("#modal-status");
        var selectBox = statusModal.find('select[name="status_list"]');
        statusModal.find('input[name="order_id"]').val(orderId);

        selectBox.empty();
        for (var i = 0; i < statusList.length; i++) {
            selectBox.append('<option value="' + statusList[i]["id"] + '">' + statusList[i]["value"] + '</option>');
        };
        statusModal.modal('show');
    };

});
