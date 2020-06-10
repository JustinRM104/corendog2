const userGrid = document.getElementsByClassName("users-grid");
const myProfile = document.getElementById("myProfile");

let windowOpen = false;
let currentWindow = null;

function createWindow() {
    let window = [];

    window.holder = document.createElement("div");
    window.main = document.createElement("div")
    window.close = document.createElement("button");
    window.name = document.createElement("h3");
    window.bio = document.createElement("p");
    window.img = document.createElement("img");
    window.location = document.createElement("p");
    window.rating = document.createElement("p");

    for (const key in window) {
        if (key != "holder" && key != "main") {
            window.main.appendChild(window[key]);
        }
    }

    window.holder.appendChild(window.main);
    window.holder.className = "userWindow";
    window.bio.className = "bio";
    window.rating.className = "rating";
    window.location.className = "bio";
    window.close.className = "close"

    currentWindow = window;

    return window;
}

function fillUserInfo(window, user) {
    window.name.innerHTML = "<span>VOORNAAM & ACHTERNAAM</span><br>" + user.firstname + " " + user.lastname;
    window.close.innerHTML = "SLUIT"
    window.bio.innerHTML = "<span>BIOGRAFIE</span><br>" + user.bio
    window.location.innerHTML = "<span>ACTIEVE PROVINCIE</span><br>" + user.location;
    window.rating.innerHTML = "EERDERE KLANTEN GEVEN " + user.firstname.toUpperCase() + " EEN " + user.rating;
}

function close() {
    if (windowOpen) { currentWindow.holder.remove(); windowOpen = false; }
}

function openWindow(user) {
   let window = createWindow();
   fillUserInfo(window, user);

   document.body.appendChild(window.holder);
   windowOpen = true;

   window.close.addEventListener("click", close);
}

function requestUserData() {
    let request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (!windowOpen) { openWindow(JSON.parse(this.response));}
        }
    };
    
    let url = document.location.origin + "/corendog/public/getuserdata"
    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("target=" + this.value);
}

if (myProfile) { myProfile.addEventListener("click", requestUserData); }

