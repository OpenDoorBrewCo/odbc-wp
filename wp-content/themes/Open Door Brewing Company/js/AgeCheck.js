function GetAgeCheckedState() {
    var SetOfDrinkingAge = $.cookie("OfDrinkingAge");

    if (SetOfDrinkingAge != "yes") {
        DisplayIdCheck();
    }
}


function DisplayIdCheck() {
    var src = "./id-check ";
    $.modal('<iframe src="' + src + '" height="760" width="830" style="border:2px">', {
        closeHTML: "",
        opacity: 60,
        overlayCss: { backgroundColor: "#B3CDF3" },

        containerCss: {
            backgroundColor: "#575757",
            borderColor: "black",
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
                        $.modal.close();
                        var SetOfDrinkingAge = $.cookie("OfDrinkingAge");
                        if (SetOfDrinkingAge == "no")
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

$(document).ready(function () {
    GetAgeCheckedState();
});