function GetAgeCheckedState() {
    var SetOfDrinkingAge = jQuery.cookie("OfDrinkingAge");
	
    if (SetOfDrinkingAge != "yes") {
        DisplayIdCheck();
    }
}


function DisplayIdCheck() {
    var src = "./age-check";
    jQuery.modal('<iframe src="' + src + '" height="760" width="830" style="border:2px">', {
        closeHTML: "",
        opacity: 100,
        overlayCss: {},

        containerCss: {
            backgroundColor: "#EBEBEB",
            borderColor: "green",
            height: 770,
            padding: 0,
            width: 830,
        },
        closeHTML:"#idYes",
        

        onOpen: function (dialog) {
            dialog.overlay.fadeIn('medium', function () {
                dialog.data.hide();
                dialog.container.fadeIn('medium', function () {
                    dialog.data.slideDown('medium');
                });
            });
        },

        onClose: function (dialog) {
            dialog.data.fadeOut('medium', function () {
                dialog.container.hide('medium', function () {
                    dialog.overlay.slideUp('medium', function () {
                        jQuery.modal.close();
                        var SetOfDrinkingAge = jQuery.cookie("OfDrinkingAge");
                        if (SetOfDrinkingAge != "yes")
                        {
                            //Redirect to wholesome fun if not over 21
                            window.location.replace("https://www.google.com/#q=wholesome+family+fun");
                        }
                    });
                });
            });
        }
    });
}

jQuery(document).ready(function () {
    GetAgeCheckedState();
});