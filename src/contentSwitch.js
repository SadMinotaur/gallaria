function listView() {
    fromClassToClassById("content", "contentGrid", "contentList")
    fromClassToClass(document.getElementsByClassName("secondRectangle"), "secondRectangle", "mainRectangle");
    fromClassToClass(document.getElementsByClassName("topTextDescGrid"), "topTextDescGrid", "topTextDescList");
    fromClassToClass(document.getElementsByClassName("lineGrid"), "lineGrid", "lineList");
    fromClassToClass(document.getElementsByClassName("bottomTextDescGrid"), "bottomTextDescGrid", "bottomTextDescList");
    fromClassToClass(document.getElementsByClassName("rightBottomButtonGrid"), "rightBottomButtonGrid", "rightBottomButtonList");
}

function gridView() {
    fromClassToClassById("content", "contentList", "contentGrid")
    fromClassToClass(document.getElementsByClassName("mainRectangle"), "mainRectangle", "secondRectangle");
    fromClassToClass(document.getElementsByClassName("topTextDescList"), "topTextDescList", "topTextDescGrid");
    fromClassToClass(document.getElementsByClassName("lineList"), "lineList", "lineGrid");
    fromClassToClass(document.getElementsByClassName("bottomTextDescList"), "bottomTextDescList", "bottomTextDescGrid");
    fromClassToClass(document.getElementsByClassName("rightBottomButtonList"), "rightBottomButtonList", "rightBottomButtonGrid");
}

function fromClassToClass(elements, remove, add) {
    Array.from(elements).forEach(
        element => {
            element.classList.remove(remove);
            element.classList.add(add);
        }
    )
}

function fromClassToClassById(id, remove, add) {
    let content = document.getElementById(id);
    content.classList.remove(remove);
    content.classList.add(add);
}