function listView() {
    let content = document.getElementById("content");
    let elements = document.getElementsByClassName("secondRectangle");
    Array.from(elements).forEach(
        element => {
            element.classList.remove("secondRectangle");
            element.classList.add("mainRectangle");
        }
    )
    content.classList.remove("contentGrid");
    content.classList.add("contentList");
}

function gridView() {
    let content = document.getElementById("content");
    let elements = document.getElementsByClassName("mainRectangle");
    Array.from(elements).forEach(
        element => {
            element.classList.remove("mainRectangle");
            element.classList.add("secondRectangle");
        }
    )
    content.classList.remove("contentList");
    content.classList.add("contentGrid");
}