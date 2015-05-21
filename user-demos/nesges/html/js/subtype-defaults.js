$( document ).ready(function() {
    $('div[data-type="label"]').each(function(index) {
        switch($(this).attr('data-subtype')) {
            case "Temperature":
                $(this).attr('data-get', 'temperature');
                $(this).attr('data-unit', ' %B0C%0A');
                $(this).attr('data-limits', '[0,10,15,21,23]');
                $(this).attr('data-colors', '["#ffffff","#6699ff","#AA6900","#AD3333","#FF0000"]');
                break;
            case "Humidity":
                $(this).attr('data-get', 'humidity');
                $(this).attr('data-unit', ' %');
                $(this).attr('data-limits', '[-1,20,39,59,65,79]');
                $(this).attr('data-colors', '["#ffffff","#6699ff","#AA6900","FFCC80","#AD3333","#FF0000"]');
                break;
        }
    });
    
    
    $('div[data-type="switch"]').each(function(index) {
        switch($(this).attr('data-subtype')) {
            case "PRESENCE":
                $(this).attr('data-get-on', $(this).attr('data-get-on') || 'present');
                $(this).attr('data-get-off', $(this).attr('data-get-off') || 'absent');
                $(this).attr('data-set-on', '');
                $(this).attr('data-set-off', '');
                break;
            case "MilightDevice":
                $(this).attr('data-get-on', $(this).attr('data-get-on') || 'on.*');
                $(this).attr('data-get-off', $(this).attr('data-get-off') || 'off');
                $(this).attr('data-set-on', $(this).attr('data-set-off') || 'on');
                $(this).attr('data-set-off', $(this).attr('data-set-off') || 'off');
                break;
            case "dummy10":
                $(this).attr('data-get-on', $(this).attr('data-get-on') || '1');
                $(this).attr('data-get-off', $(this).attr('data-get-off') || '0');
                $(this).attr('data-set-on',  $(this).attr('data-set-on') || '1');
                $(this).attr('data-set-off', $(this).attr('data-set-off') || '0');
                break;
        }
     });
     
    $('div[data-type="symbol"]').each(function(index) {
        switch($(this).attr('data-subtype')) {
            case "MAX":
                $(this).attr('data-get-on', $(this).attr('data-get-on') || '["opened","closed"]');
                $(this).attr('data-icons', $(this).attr('data-icons') || '["ftui-window","ftui-window"]');
                $(this).attr('data-on-colors', $(this).attr('data-on-colors') || '["#2a2a2a","#2a2a2a"]');
                $(this).attr('data-on-background-colors', $(this).attr('data-on-background-colors') || '["#aa6900","#505050"]');
                $(this).attr('data-background-icon', $(this).attr('data-background-icon') || "fa-circle");
                $(this).attr('data-off-background-color', $(this).attr('data-off-background-color') || "#505050");
                $(this).attr('data-on-background-color', $(this).attr('data-on-background-color') || "#aa6900");
                break;
            case "POLLEN":
                $(this).attr('data-get-off', $(this).attr('data-get-off') || '0');
                $(this).attr('data-get-on', $(this).attr('data-get-on') || '["1","2","3"]');
                $(this).attr('data-on-colors', $(this).attr('data-on-colors') || '["yellowgreen","yellow","red"]');
                $(this).attr('data-icons', $(this).attr('data-icons') || '["fa-pagelines","fa-pagelines","fa-pagelines"]');
                break;
            case "BIOWETTER":
                $(this).attr('data-get-off', $(this).attr('data-get-off') || '');
                $(this).attr('data-get-on', $(this).attr('data-get-on') || '["keine","schwach","stark","sehr stark"]');
                $(this).attr('data-off-color', $(this).attr('data-off-color') || 'green');
                $(this).attr('data-on-colors', $(this).attr('data-on-colors') || '["green","yellow","orange","red"]');
                $(this).attr('data-icon', $(this).attr('data-icon') || "fa-smile-o");
                $(this).attr('data-icons', $(this).attr('data-icons') || '["fa-smile-o", "fa-meh-o","fa-frown-o","fa-frown-o"]');
                break;
        }
    });
    
    $('div[data-type="thermostat"]').each(function(index) {
        switch($(this).attr('data-subtype')) {
            case "MAX":
                $(this).attr('data-get', $(this).attr('data-get') || 'desiredTemperature');
                $(this).attr('data-set', $(this).attr('data-set') || 'desiredTemperature');
                $(this).attr('data-temp', $(this).attr('data-temp') || 'temperature');
                // $(this).attr('data-valve', $(this).attr('data-valve') || 'valveposition');
                break;
        }
    });

    
});