// Containers
const container_orange = document.querySelector(".orangeContainer");
const container_btn_swipe = document.querySelector(".buttonContainer");
const container_forms_left = document.querySelector(".formsContainer .left");
const container_forms_right = document.querySelector(".formsContainer .right");

// Texts
const text_login = document.querySelector(".text_visible");
const text_request = document.querySelector(".text_hidden");
const text_container_orange_left = document.querySelector(
    ".orangeContainer .left .msgCentered"
);
const text_container_orange_right = document.querySelector(
    ".orangeContainer .right .msgCentered"
);

// Buttons
const btn_swipe_screen = document.querySelectorAll(".swipe_screen");

// Swipe screen
var animation = false;
const animation_callback = (e) => {
    e.preventDefault();

    // Does not run the animation if it is running
    if (animation == true) {
        return false;
    }
    animation = true;

    // Swipe to Login
    if (!btn_swipe_screen[0].classList.contains("login_screen")) {
        swipe_to_login(btn_swipe_screen);
        // Swipe to Access Request
    } else {
        swipe_to_back(btn_swipe_screen);
    }

    // Release the animation
    if (screen.width <= 768) {
        setTimeout(() => {
            animation = false;
        }, 200);
    } else {
        setTimeout(() => {
            animation = false;
        }, 800);
    }
};

// Add event listener to all btn swipe screen
for (let i = 0; i < btn_swipe_screen.length; i++) {
    btn_swipe_screen[i].addEventListener("click", function (e) {
        animation_callback(e);
    });
}

// Function Swipe to Login
function swipe_to_login(elems) {
    // Remove Class of Swipe to Access Request
    container_orange.classList.remove("ra_screen");
    container_btn_swipe.classList.remove("ra_screen");
    elems.forEach((item) => {
        item.classList.remove("ra_screen");
    });

    text_login.classList.remove("swipe");
    text_request.classList.remove("swipe");
    text_container_orange_left.classList.remove("swipe");
    text_container_orange_right.classList.remove("swiped");

    container_forms_left.classList.remove("hidden");
    container_forms_right.classList.remove("visible");

    // Add Class of Swipe to Login
    container_orange.classList.add("login_screen");
    container_btn_swipe.classList.add("login_screen");
    elems.forEach((item) => {
        item.classList.add("login_screen");
    });

    text_login.classList.add("swiped");
    text_request.classList.add("swiped");
    text_container_orange_left.classList.add("swiped");
    text_container_orange_right.classList.add("swipe");

    container_forms_left.classList.add("visible");
    container_forms_right.classList.add("hidden");
}

// Function Swipe back to Access Request
function swipe_to_back(elems) {
    // Remove Class of Swipe to Login
    container_orange.classList.remove("login_screen");
    container_btn_swipe.classList.remove("login_screen");
    elems.forEach((item) => {
        item.classList.remove("login_screen");
    });

    text_login.classList.remove("swiped");
    text_request.classList.remove("swiped");
    text_container_orange_left.classList.remove("swiped");
    text_container_orange_right.classList.remove("swipe");

    container_forms_left.classList.remove("visible");
    container_forms_right.classList.remove("hidden");

    // Add Class of Swipe to Access Request
    container_orange.classList.add("ra_screen");
    container_btn_swipe.classList.add("ra_screen");
    elems.forEach((item) => {
        item.classList.add("ra_screen");
    });

    text_login.classList.add("swipe");
    text_request.classList.add("swipe");
    text_container_orange_left.classList.add("swipe");
    text_container_orange_right.classList.add("swiped");

    container_forms_left.classList.add("hidden");
    container_forms_right.classList.add("visible");
}

// Parte de envio formulário
function onSubmit(token) {
    jQuery("#login-form").submit();
}

let js_global = {
    wp_ajax: "https://feiracitymarketplace.com.br/wp-admin/admin-ajax.php",
    site_url: "https://feiracitymarketplace.com.br",
};

jQuery("#login-form").on("submit", (event) => {
    event.preventDefault();
    jQuery("#login-button").prop("disabled", true);

    let form = new FormData(document.querySelector("#login-form"));

    let formData = {};

    for (const entry of form.entries()) {
        let key = entry[0];
        let value = entry[1];

        formData[key] = value;
    }

    formData["action"] = "fc_external_login";

    jQuery.ajax({
        type: "POST",
        url: js_global.wp_ajax,
        data: formData,
        success: function (response) {
            if (response.success) {
                window.location.href =
                    "https://feiracitymarketplace.com.br/cadastrados/";
            }
            if (response.success === 0) {
                jQuery("#login-button").prop("disabled", false);
                litenotify({
                    msg: response.message,
                    type: "error",
                    time: 8000,
                });
            }
        },
        error: function () {
            jQuery("#login-button").prop("disabled", false);
            litenotify({
                msg: "Erro no envio do formulário, tente novamente.",
                type: "error",
                time: 8000,
            });
        },
    });
});
