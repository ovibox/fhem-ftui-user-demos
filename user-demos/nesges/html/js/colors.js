$(document).ready(function() {
    var color_background                       = $("meta[name=color_background]"                           ).attr("content")||"#000000";
    var color_widget_background                = $("meta[name=color_widget_background]"                    ).attr("content")||"#2a2a2a";
    var color_text                             = $("meta[name=color_text]"                                 ).attr("content")||"#ffffff";
    var color_text_emphasized                  = $("meta[name=color_text_emphasized]"                      ).attr("content")||"#aa6900";
    var color_text_dampened                    = $("meta[name=color_text_dampened]"                        ).attr("content")||"#262626";
    var color_multibutton_background_off       = $("meta[name=color_multibutton_background_off]"           ).attr("content")||"#505050";
    var color_multibutton_background_on        = $("meta[name=color_multibutton_background_on]"            ).attr("content")||"#aa6900";
    var color_multibutton_background_emphasized= $("meta[name=color_multibutton_background_emphasized]"    ).attr("content")||"#aa6900";
    var color_multibutton_background_dampened  = $("meta[name=color_multibutton_background_dampened]"      ).attr("content")||"#6f4509";
    var color_multibutton_foreground_off       = $("meta[name=color_multibutton_foreground_off]"           ).attr("content")||"#2a2a2a";
    var color_multibutton_foreground_on        = $("meta[name=color_multibutton_foreground_on]"            ).attr("content")||"#2a2a2a";
    
    $('body').css("background-color", color_background);
    $('.gridster ul li').css("background-color", color_widget_background);
}); 
    
    
    
    
    