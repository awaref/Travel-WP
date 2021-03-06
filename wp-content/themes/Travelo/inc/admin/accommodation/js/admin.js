$ = jQuery;
jQuery(document).ready(function($) {
    "use strict";
    $('#trav_accommodation_country').change(function(){
        $.ajax({
            url: ajaxurl,
            type: "POST",
            data: {
                'action': 'get_cities_in_country',
                'country_id': $(this).val()
            },
            success: function(response){
                if ( response ) {
                    var room_type_id = $('#trav_accommodation_city').val();
                    $('#trav_accommodation_city').html(response);
                    $('#trav_accommodation_city').val(room_type_id);
                    $('#trav_accommodation_city').select2({
                        placeholder: "Select a City",
                        width: "200px",
                        allowClear: true,
                    });
                }
            }
        });
    });

    $('#trav_accommodation_city').change(function(){
        if ( ! $('#trav_accommodation_country').val() ) {
            $.ajax({
                url: ajaxurl,
                type: "POST",
                data: {
                    'action': 'get_country_from_city',
                    'city_id': $(this).val()
                },
                success: function(response){
                    if ( response ) {
                        $('#trav_accommodation_country').val(response).change();
                    }
                }
            });
        }
    });
});