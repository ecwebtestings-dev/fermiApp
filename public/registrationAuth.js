



//PRELOADER
const loader=document.getElementById('loader');
window.addEventListener('load',()=>{
    loader.style.display='none'
});



document.addEventListener("DOMContentLoaded", () => {

const form = document.getElementById("form");
const msg = document.getElementById("msg");

if (!form || !msg) return;

function showMessage(message, Type = "error") {

    // Display message
    msg.innerHTML = message;
    msg.className = `message ${Type}`;

    // Clear after 3 seconds
    setTimeout(() => {
        msg.innerHTML = "";
        msg.className = "message";
    }, 3000);
}

form.addEventListener("submit", function (e) {
    e.preventDefault();

    const isSignup = document.getElementById("username") !== null;

    let url;
    let formData;

    if (isSignup) {
        url = "../users/signup.php";
        formData = {
            username: document.getElementById("username").value.trim(),
            email: document.getElementById("email").value.trim(),
            password: document.getElementById("password").value
        };

    } else {
        url = "../users/login.php";
        formData = {
            email: document.getElementById("email").value.trim(),
            password: document.getElementById("password").value
        };
    }

    fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams(formData)
    })
    .then(response => response.json())
    .then(data => {

        if (data.status === "success") {
            showMessage(data.message, "success");

            setTimeout(() => {
                if (isSignup) {
                    window.location.href = "login.html";

                } else {
                    if (data.role === "admin") {
                        window.location.href = "/FERMI/admin/dashboard.php";
                    } else {
                        window.location.href = "/FERMI/index.php";
                    }
                }
            }, 1500);

        }
         else {
            showMessage(data.message, "error");
        }
    })
    .catch(error => {

        console.error(error);

        showMessage(
            "Unable to connect to server.",
            "error"
        );
    });
});


});


