const myProfile = document.getElementById("myProfile");

let windowOpen = false;
let currentWindow = null;
let currentUser = null;

function createWindow(user) {
    let window = document.createElement("div");

    window.innerHTML = `
        <div class="innerWindow">
            <button id="closeWindow" class="far fa-times-circle"></button>
            <img id="profileImage" src="` + user.picture + `" alt="profielfoto">
            <h3 class="profileText pbigger"><span class="fas fa-map-marker-alt"><span id="rating"> ` + user.location + `</span></span></h3>
            <h3 class="profileText">` + user.firstname + ` ` + user.lastname + `  <span class="fas fa-star"><span id="rating">` + user.rating + ` / 10</span></span></h3>
            <p id="profileBio">` + user.bio + `</p>
            <div class="formBox">
                <h3>` + user.firstname + ` uw hond laten uitlaten? Stuur hem een bericht!</h3>
                <input type="email" name="" id="input" autocomplete="email" placeholder="Uw email adress">
                <input type="text" name="" id="input" autocomplete="email" placeholder="Uw bericht aan ` + user.firstname + `">
                <button class="send">Verzend</button>
            </div>
            <div class="formBox">
                <h3>Geef ` + user.firstname + ` een cijfer.</h3>
                <input type="number" name="" id="input" min="1" max="10" autocomplete="off" placeholder="Cijfer">
                <button class="send">Voltooi</button>
            </div>
        </div>
    `;

    window.className = "userWindow";
    currentWindow = window;

    return window;
}

function close() { if (windowOpen) { currentWindow.remove(); windowOpen = false; } }

function openWindow(user) {
   let window = createWindow(user);
   document.body.appendChild(window);
   windowOpen = true;
   currentUser = user;

   let closeButton = document.getElementById("closeWindow");
   if (closeButton) { closeButton.addEventListener("click", close); }
}

function url() {
    if (document.location.hostname == "localhost") { return document.location.origin + "/corendog/public/receivedata"; }
    return document.location.origin + "/receivedata";
}

function requestUserData() {
    let request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (!windowOpen) {openWindow(JSON.parse(this.response));}
        }
    };

    request.open("POST", url(), true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("request=getUser&target=" + this.value);
}

if (myProfile) { myProfile.addEventListener("click", requestUserData); }

