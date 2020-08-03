function startLiveUpdate() {
    const priceContainer = document.querySelector(".btc-cp-price");
    const chartContainer = document.querySelector(".chart-price-btc");

    setInterval(function () {
        fetch('json/api.php').then(function (response) {
            return response.json();
        }).then(function (data) {
            priceContainer.innerHTML = "$ " + data.last;
            chartContainer.innerHTML = "$" + data.last;
        }).catch(function (error) {
            console.log("Loading content failed :" + error);
        })
    }, 800);
}

document.addEventListener('DOMContentLoaded', startLiveUpdate);


function navActionBtn() {
    if (!document.body.classList.contains("nav-opened")) {
        document.body.classList.add("nav-opened");
    } else {
        document.body.classList.remove("nav-opened");
    }
}

function scrollBtn() {
    const btn = document.querySelector(".scrollup");
    const height = btn.offsetTop;
    if (window.scrollY >= height) {
        document.body.classList.add("scroll-btn-appear");
    } else {
        document.body.classList.remove("scroll-btn-appear");
    }
}

window.addEventListener("scroll", scrollBtn);

