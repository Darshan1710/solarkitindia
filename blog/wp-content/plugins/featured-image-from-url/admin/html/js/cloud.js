// don't lose your images again
// don't torture your website anymore
// don't make your visitors wait

// lighthouse (perfect score)
// 1. lazy load enabled
// 2. new incognito tab
// 3. DevTools > Undock into a separate window
// 4. deactivate plugins
// 5. activate Astra

jQuery(document).ready(function () {
    jQuery('link[href*="jquery-ui.css"]').attr("disabled", "true");
    jQuery('div.wrap div.header-box div.notice').hide();
    jQuery('div.wrap div.header-box div#message').hide();
    jQuery('div.wrap div.header-box div.updated').remove();

    jQuery("#availableImages").append(fifuScriptCloudVars.availableImages);
});

jQuery(function () {
    jQuery("#tabs-top").tabs();

    window.scrollTo(0, 0);
    jQuery('.wrap').css('opacity', 1);
});

function suggestValue() {
    var images = fifuScriptCloudVars.availableImages;
    var value = jQuery('#cloud_suggestion_pricing').val();

    if (!images || !value)
        return;

    var code = null;

    fifu_block();

    jQuery.ajax({
        method: "POST",
        url: restUrl + 'featured-image-from-url/v2/suggest_value/',
        data: {
            "images": images,
            "value": value
        },
        async: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', fifuScriptVars.nonce);
        },
        success: function (data) {
            code = data['code'];
            message(data, 'pricing');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        complete: function (data) {
            fifu_unblock();
        }
    });
    return code;
}

function waitingList() {
    var images = fifuScriptCloudVars.availableImages;
    var email = jQuery('#cloud_waiting_list').val();

    if (!images || !email)
        return;

    var code = null;

    fifu_block();

    jQuery.ajax({
        method: "POST",
        url: restUrl + 'featured-image-from-url/v2/waiting_list/',
        data: {
            "images": images,
            "email": email
        },
        async: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', fifuScriptVars.nonce);
        },
        success: function (data) {
            code = data['code'];
            message(data, 'waiting');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        complete: function (data) {
            fifu_unblock();
        }
    });
    return code;
}

function betaTester() {
    var email = jQuery('#cloud_beta_tester').val();

    if (!email)
        return;

    var code = null;

    fifu_block();

    jQuery.ajax({
        method: "POST",
        url: restUrl + 'featured-image-from-url/v2/beta_tester/',
        data: {
            "email": email
        },
        async: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', fifuScriptVars.nonce);
        },
        success: function (data) {
            code = data['code'];
            message(data, 'tester');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        complete: function (data) {
            fifu_unblock();
        }
    });
    return code;
}
