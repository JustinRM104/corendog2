const userGrid = document.getElementById("users-grid");
const loadMoreButton = document.getElementById("loadMore");
let sort = document.getElementById("sort");
let loc = document.getElementById("province");

let currentlyLoaded = 0;

function addUserFrame(userObj) {
    let newFrame = document.createElement("div");
    newFrame.value = userObj.id;

    newFrame.innerHTML = `
        <img src="` + userObj.picture + `" alt="profielfoto">
        <h3>` + userObj.firstname + ` ` + userObj.lastname + `</h3>
        <p class="rating"><span class="fas fa-star "></span>` + userObj.rating + ` / 10.0</p>    
    `;

    newFrame.className = "userFrame"
    userGrid.appendChild(newFrame);

    newFrame.addEventListener("click", requestUserData); 
}

function handleData(newUsers) {
    newUsers.forEach(userObj => {
        addUserFrame(userObj);
        currentlyLoaded = currentlyLoaded + 1;
    });
}

function requestUsers() {
    let request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.response !== "noData") {
                console.log(this.response);
                handleData(JSON.parse(this.response));
            }
        }
    };

    request.open("POST", url(), true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("request=showUsers&from=" + currentlyLoaded + "&sort=" + sort.value + "&location=" + loc.value);
}

function removeAll() {
    document.querySelectorAll('.userFrame').forEach(e => e.remove());
    currentlyLoaded = 0;
}

function refresh() {
    removeAll();
    requestUsers();
}

requestUsers();
if (loadMoreButton) { loadMoreButton.addEventListener("click", requestUsers); }

if (sort) { sort.addEventListener("change", refresh); }
if (loc) { loc.addEventListener("change", refresh); }