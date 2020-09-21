function listView() {
    // for (var i  = document.getElementsByClassName("mainRectangle"); i != null; i = document.getElementsByClassName("mainRectangle")) {
        let element = document.getElementById("mainRectangle");
        // i.classList.add('mainRectangle');
    // }
}

function gridView() {
    for (let i  = document.getElementsByClassName("mainRectangle"); i != null; i = document.getElementsByClassName("mainRectangle")) {
        // let element = document.getElementById("mainRectangle");
        i.classList.remove('mainRectangle');
    }
}