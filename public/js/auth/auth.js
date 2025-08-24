var token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

document.getElementById("registerBtn").addEventListener("click", function () {
    var email = document.getElementById("registerEmail").value;
    var password = document.getElementById("registerPassword").value;
    var role = document.getElementById("registerRole").value;
    var username = document.getElementById("registerName").value;

    fetch("/auth/register", {
        method: "POST",
        headers: {
            "X-CSRF-Token": token, // Laravel CSRF token
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            name: username,
            email: email,
            password: password,
            role: role,
        }),
    })
        .then(response => response.json())
        .then(data => {
            console.log("Register Response:", data);
            redirectCheck(data, email);
        })
        .catch(error => {
            console.error("Register Error:", error);
        });
});

// login
document.getElementById("loginBtn").addEventListener("click", function (e) {
    e.preventDefault();
    var email = document.getElementById("loginEmail").value;
    var password = document.getElementById("loginPassword").value;

    fetch("/auth/login", {
        method: "POST",
        headers: {
            "X-CSRF-Token": token, // Laravel CSRF token
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            email: email,
            password: password,
        }),
    })
        .then(response => response.json())
        .then(data => {
            console.log("Login Response:", data);
            redirectCheck(data, email);
        })
        .catch(error => {
            console.error("Login Error:", error);
            redirectCheck();
        });
});

// redirect methods
function redirectCheck(data, email) {
    if (data.errors) {
        errorAlert(data);
        return;
    }

    if (data.user) {
        if (data.user.role === "admin" && data.user.email === email) {
            window.location.href = "/admin/index";
        } else if (data.user.role === "user" && data.user.email === email) {
            window.location.href = "/user/index";
        } else if(data.user.role === "contractor" && data.user.email === email){
            window.location.href = "/user/index";
        }
    }
}

function errorAlert(error) {
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: JSON.stringify(error.errors), // convert to string if it's an object
        footer: '<a href="#">Why do I have this issue?</a>'
    });
}
