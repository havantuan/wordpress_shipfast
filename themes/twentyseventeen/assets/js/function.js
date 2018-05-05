$(function() {
    $('.input-number').number( true, 0 );

    function initMap(val, i) {
        var uluru = {lat: val.Lat, lng: val.Lng};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: i,
            center: uluru||map.setCenter(marker.getPosition()),

        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: val.DisplayName,
        });
        var contentString ='<ul class="list-style-icon"><li><i class="fa fa-check"></i>'+val.DisplayName+'</li>' +
            '<li><i class="fa fa-map-marker"></i>'+val.Address+'</li>'+
            '<li><i class="fa fa-phone"></i>' +val.Phone+'</li>'+
            '</ul>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }

    $.ajax({
           url: "https://api.shipfast.vn/api/v1/graph/",
        type: "post",
        data: JSON.stringify({query: "{Hubs (Accessibility: Public){Items {Address DisplayName Lat Lng Phone Name}}}", variables: null, operationName: null}),
        contentType: "application/json",
        dataType: 'json',
        success: function (data) {
            jQuery.each(data.data.Hubs.Items, function (i, val) {
                initMap(val, k=11);
                $("#info-hub").append('<div class="column-33">'+
                '<p class="name-hub" id="lag'+i+'">'+val.DisplayName+'</p>'+
                '<div class="-infohub">'+
                    '<p>'+val.Address+'</p>'+
                '</div>'+
                '<p>Điện thoại: <a href="tel:' + val.Phone + '" rel="noopener">'+val.Phone+'</a></p>'+
                '</div>');
                $('#lag'+i).on("click", function () {
                    initMap(val, k=16)
                });
            });
        }
    })
});
$(document).ready(function() {
    function formatNumber(values) {
        if(values){
            return parseInt(values.replace(/,/g, ""));
        }
        return 0;
    }
    $('#Cod').on('keypress', function (evt) {
        var e = evt || window.event; // for trans-browser compatibility
        var charCode = e.which || e.keyCode;
        if (charCode > 31 && (charCode < 47 || charCode > 57))
            return false;
        if (e.shiftKey) return false;
        return true;
    })
    $('#Netweight').on('keypress', function (evt) {
        var e = evt || window.event; // for trans-browser compatibility
        var charCode = e.which || e.keyCode;
        if (charCode > 31 && (charCode < 47 || charCode > 57))
            return false;
        if (e.shiftKey) return false;
        return true;
    })
    $('.DistrictIDReceiver').select2({
        placeholder: "Nơi nhận đến",
    });
    $('.serviceType').select2({
        placeholder: "Chọn dịch vụ",
    });
    $('.districtIDSender').select2({
        placeholder: "Nơi gửi đi",
    });
    $.ajax({
           url: "https://api.shipfast.vn/api/v1/graph/",
        type: "post",
        data: JSON.stringify({query: "{ServiceTypes {Name ID}}", variables: null, operationName: null}),
        contentType: "application/json",
        dataType: 'json',
        success: function (data) {
            $("#serviceType").append("<option value= '' >Chọn gói chuyển phát</option>");
            jQuery.each(data.data.ServiceTypes, function (i, val) {
                $("#serviceType").append("<option value=" + val.ID +">" + val.Name + "</option>");
            });
        }
    })
    $.ajax({
           url: "https://api.shipfast.vn/api/v1/graph/",
        type: "post",
        data: JSON.stringify({
            query: "{Districts (RestrictLocation: Sender) {Name ID City {Name} }}",
            variables: null,
            operationName: null
        }),
        contentType: "application/json",
        dataType: 'json',
        success: function (data) {
            console.log(data)
            $("#districtIDSender").append("<option value= '' >Nơi gửi đi</option>");
            jQuery.each(data.data.Districts, function (i, val) {

                $("#districtIDSender").append("<option value=" + val.ID + ">" + val.Name + ", " + val.City.Name + "</option>");
            });
        }
    })
    $.ajax({
        url: "https://api.shipfast.vn/api/v1/graph/",
        type: "post",
        data: JSON.stringify({
            query: "{Districts (RestrictLocation: Receiver){Name ID City {Name} }}",
            variables: null,
            operationName: null
        }),
        contentType: "application/json",
        dataType: 'json',
        success: function (data) {
            console.log(data)
            $("#DistrictIDReceiver").append("<option value= '' >Nơi nhận đến</option>");

            jQuery.each(data.data.Districts, function (i, val) {
                $("#DistrictIDReceiver").append("<option value=" + val.ID + ">" + val.Name + ", " + val.City.Name + "</option>");
            });
        }
    })
    // $.ajax({
    //        url: "https://api.shipfast.vn/api/v1/graph/",
    //     type: "post",
    //     data: JSON.stringify({
    //         query: "{Cities {Name ID }}",
    //         variables: null,
    //         operationName: null
    //     }),
    //     contentType: "application/json",
    //     dataType: 'json',
    //     success: function (data) {
    //         console.log(data)
    //         $("#CityIDReceiver").append('<option value="">Chọn tỉnh/thành</option>');
    //         jQuery.each(data.data.Cities, function (i, val) {
    //             $("#CityIDReceiver").append("<option value=" + val.ID + " "+ (val.ID == 18 ? 'selected' : '') + ">" + val.Name + "</option>");
    //         });
    //     }
    // })
    // $('#CityIDReceiver').on('change', function () {
    //     var CityID = $('#CityIDReceiver').val();
    //     $.ajax({
    //         url: "https://api.shipfast.vn/api/v1/graph/",
    //         type: "post",
    //         data: JSON.stringify({
    //             query: "{Districts (CityID: " + CityID + ") {Name ID}}",
    //             variables: null,
    //             operationName: null
    //         }),
    //         contentType: "application/json",
    //         dataType: 'json',
    //         success: function (data) {
    //             $('#DistrictIDReceiver')
    //                 .find('option')
    //                 .remove()
    //                 .end()
    //             ;
    //             jQuery.each(data.data.Districts, function (i, val) {
    //                 $("#DistrictIDReceiver").append("<option value=" + val.ID + ">" + val.Name + "</option>");
    //             });
    //         }
    //     })
    // })
    $('#submitEstimatedPrice').on("click", function () {
        $("#result-ket-qua").html('');
        var ServiceType = $('#serviceType').find(":selected").text().toUpperCase();;
        var districtIDSender = $('#districtIDSender').val();
        var Cod = $('#Cod').val();
        event.preventDefault();
        var ServiceTypeID = $('#serviceType').val();
        var DistrictIDReceiver = $('#DistrictIDReceiver').val();
        var Netweight = $('#Netweight').val();
        Cod = formatNumber(Cod);
        Netweight = formatNumber(Netweight);
        if (ServiceTypeID > 0 && DistrictIDReceiver > 0 && Netweight > 0) {
            $('#loading').attr({'class': 'loader'})
            $.ajax({
                url: "https://api.shipfast.vn/api/v1/graph/",
                type: "post",
                data: JSON.stringify({
                    query: "{EstimatedCost (Cod: " +Cod+ ",SenderDistrictID: " + districtIDSender + ", ReceiverDistrictID: " + DistrictIDReceiver + ", NetWeight: " + parseInt(Netweight) + ", ServiceTypeID: " + ServiceTypeID + ") {TotalCost MaxTime MinTime Costs {Name Value Code}}}",
                    variables: null,
                    operationName: null
                }),
                contentType: "application/json",
                dataType: 'json',
                success: function (data) {
                    $( "#table-tinh-gia" ).modal();
                    $('#TotalCost').html(parseInt(data.data.EstimatedCost.TotalCost).toLocaleString());
                    data.data.EstimatedCost.Costs.map(function(val, index) {
                        $("#result-ket-qua").append('<tr><td><i class="fa fa-check"></i>' +val.Name +'</td><td><strong><span>'+parseInt(val.Value).toLocaleString()+' đ</span></strong></td></tr>');
                    });
                    $("#result-ket-qua").append('<tr><td><i class="fa fa-check"></i>Thời gian tối thiểu </td><td><strong><span>'+data.data.EstimatedCost.MinTime+' h</strong></span></td></tr>');
                    $("#result-ket-qua").append('<tr><td><i class="fa fa-check"></i>Thời gian tối đa</td><td><strong><span>'+data.data.EstimatedCost.MaxTime+' h</span></strong></td></tr>');


                }, error: function(xhr,status,error){
                    console.log('xhr', xhr)
                    $("#loading").removeClass("loader");
                    $("#validator").modal();
                    console.log('aaaa',xhr.responseJSON.errors[0].message);
                    $("#result").html('<p class="validate-danger" style="color: red; font-weight: bold;">'+xhr.responseJSON.errors[0].message+'</p>');
                }
            })
        } else {
            $("#validator").modal();
            $("#result").html('<p class="validate-danger" style="color: red; font-weight: bold;">Để tính giá hãy nhập đầy đủ các thông tin!</p>')
            $("#loading").removeClass("loader");
        }
    })


});