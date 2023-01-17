
$(function () {
    $('#ordersTable').sortable({ items: 'tr' });
    $('#vehicleOrdersTable').sortable({ items: 'tr' });

    $("#ordersTable").on('click', '.move-row', function () {
        var tr = $(this).closest("tr");
        var addedWeight = tr.find("#weight").text();
        var maxCapacity = $("#max_capacity").val();
        var currentCapacity = $("#current_capacity").val();
        var newCapacity = parseInt(currentCapacity) + parseInt(addedWeight);
        if (newCapacity > maxCapacity) {
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Araç Dolu',
                body: 'Seçtiğiniz siparişin ağırlığı araçın maksimum kapasitesini aşıyor.',
            })
            return;
        }

        var newAvg = (newCapacity / maxCapacity) * 100;
        $("#current_capacity").val(newCapacity);
        $("#capacity_progress").css("width", newAvg + "%");
        updateProgressClass();
        tr = $(this).closest("tr").remove().clone();
        tr.find(".move-row").text("-");
        $("#vehicleOrdersTable tbody").append(tr);
    });

    $("#vehicleOrdersTable").on('click', '.move-row', function () {
        var tr = $(this).closest("tr");
        var addedWeight = tr.find("#weight").text();
        var maxCapacity = $("#max_capacity").val();
        var currentCapacity = $("#current_capacity").val();
        var newCapacity = parseInt(currentCapacity) - parseInt(addedWeight);

        var newAvg = (newCapacity / maxCapacity) * 100;
        $("#current_capacity").val(newCapacity);
        $("#capacity_progress").css("width", newAvg + "%");
        updateProgressClass();

        tr = $(this).closest("tr").remove().clone();
        tr.find(".move-row").text("+");
        $("#ordersTable tbody").append(tr);
    });

    $("#save").on('click', function () {
        var vehicleId = $("#vehicle_id").val();
        var planDate = $("#plan_date_input").val();

        var orders = [];
        $('#vehicleOrdersTable > tbody  > tr').each(function (index, tr) {
            var orderId = $(tr).attr("orderId");
            orders.push(orderId);
        });

        let a = $.ajax({
            type: 'POST',
            url: "/tms/vehicle/plan/update",
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

    $('#plan_date').datetimepicker({
        format: 'YYYY-MM-DD',
    });


    const updateProgressClass = function () {
        var maxCapacity = $("#max_capacity").val();
        var currentCapacity = $("#current_capacity").val();
        var avg = (currentCapacity / maxCapacity) * 100;

        var capacityProgress = $("#capacity_progress");
        capacityProgress.removeClass("progress-bar-danger");
        capacityProgress.removeClass("bg-warning");
        capacityProgress.removeClass("bg-success");
        capacityProgress.css("background-color", "");
        if (avg >= 75) {
            capacityProgress.addClass("progress-bar-danger");
            capacityProgress.css("background-color", "#fe001a");
        }
        else if (avg < 75 && avg >= 50)
            capacityProgress.addClass("bg-warning");
        else
            capacityProgress.addClass("bg-success");
    }

    updateProgressClass();
});