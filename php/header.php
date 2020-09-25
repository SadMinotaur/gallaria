<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/leftblock.6f9d9b81.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/maincolumn.cce1434f.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contentBloc.d138b974.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/footer.7fc73498.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src.2e4471c9.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/all.a409f9ce.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&amp;display=swap" rel="stylesheet">
    <script>function t() {
        n("content", "contentGrid", "contentList"), s(document.getElementsByClassName("secondRectangle"), "secondRectangle", "mainRectangle"), s(document.getElementsByClassName("topTextDescGrid"), "topTextDescGrid", "topTextDescList"), s(document.getElementsByClassName("lineGrid"), "lineGrid", "lineList"), s(document.getElementsByClassName("bottomTextDescGrid"), "bottomTextDescGrid", "bottomTextDescList"), s(document.getElementsByClassName("rightBottomButtonGrid"), "rightBottomButtonGrid", "rightBottomButtonList")
    }

    function e() {
        n("content", "contentList", "contentGrid"), s(document.getElementsByClassName("mainRectangle"), "mainRectangle", "secondRectangle"), s(document.getElementsByClassName("topTextDescList"), "topTextDescList", "topTextDescGrid"), s(document.getElementsByClassName("lineList"), "lineList", "lineGrid"), s(document.getElementsByClassName("bottomTextDescList"), "bottomTextDescList", "bottomTextDescGrid"), s(document.getElementsByClassName("rightBottomButtonList"), "rightBottomButtonList", "rightBottomButtonGrid")
    }

    function s(t, e, s) {
        Array.from(t).forEach(function (t) {
            t.classList.remove(e), t.classList.add(s)
        })
    }

    function n(t, e, s) {
        var n = document.getElementById(t);
        n.classList.remove(e), n.classList.add(s)
    }</script>
    <meta charset="UTF-8">
</head>
<body>
<div class="padding">
    <div class="page">
        <div class="leftBlock"><img class="logoImage" src="<?php echo get_template_directory_uri(); ?>/logo.cecfdd8f.png" alt="logo">
            <div class="buttons">
                <ul>
                    <li><i class="fas fa-home"></i><a href="#"> HOME</a></li>
                    <li><i class="fas fa-film"></i><a href="#"> VIDEOS</a></li>
                    <li><i class="fas fa-image"></i><a href="#"> IMAGES</a></li>
                    <li><i class="fas fa-newspaper"></i><a href="#"> ARTICLES</a></li>
                    <li><i class="fas fa-newspaper"></i><a href="#"> FREEBIES</a></li>
                </ul>
            </div>
            <div class="about">About Us</div>
            <div class="aboutText">Gluten de neuter planeta, acquirere mensa! Gluten de neuter planeta, acquirere mensa!
                Gluten de neuter planeta, acquirere mensa! Gluten de neuter planeta, acquirere mensa!
            </div>
            <div class="tagsContainer">
                <div class="tagsLogo"><img src="<?php echo get_template_directory_uri(); ?>/tags.cee49a6d.png" alt="tags">
                    <div class="tagsText">Tags</div>
                </div>
            </div>
            <div class="tagsButtons">
                <button>Videos</button>
                <button>Videos</button>
                <button>Videos</button>
                <button>Videos</button>
                <button>Videos</button>
                <button>Videos</button>
                <button>Videos</button>
                <button>Videos</button>
                <button>Videos</button>
            </div>
        </div>
        <div class="mainColumn">
            <div class="topPadding"></div>
            <div class="feed">
                <div class="topElements">
                    <div class="label"><img class="videoIcon" src="<?php echo get_template_directory_uri(); ?>/videoicon.c60e3aab.png" alt="video icon">
                        <div class="boldTopText">Featured</div>
                        <div class="topText">Videos</div>
                    </div>
                    <div class="shareButtons">
                        <button class="shareButtonLeft"><i class="fab fa-twitter"></i></button>
                        <button class="shareButton"><i class="fab fa-facebook-f"></i></button>
                        <button class="shareButton"><i class="fab fa-google"></i></button>
                        <button class="shareButtonRight"><i class="fab fa-pinterest"></i></button>
                    </div>
                </div>
                <video class="video" src="" controls alt="Your browser does not support the video tag."></video>
                <div class="shareLabel">
                    <table>
                        <tr>
                            <th class="leftTh"><p>Audax, castus axonas inciviliter attrahendam de teres.</p></th>
                            <th class="rightTh"><i class="fas fa-link"> 70</i><i class="fas fa-heart"> 150</i><i
                                    class="fas fa-share-alt"></i></th>
                        </tr>
                    </table>
                </div>
                <div class="changeView">
                    <div class="changeViewText">Change view :
                        <button class="changeViewButtonsLeft" onclick="listView()"><i class="fas fa-align-justify"></i>
                        </button>
                        <button class="changeViewButtonsRight" onclick="gridView()"><i class="fas fa-th-large"></i>
                        </button>
                    </div>
                </div>
                <div class="contentList" id="content">
                    <div class="contentBlock">
                        <div class="mainRectangle" id="mainRectangle">
                            <div class="videoCircle"><img src="<?php echo get_template_directory_uri(); ?>/insideCircle.6f213a87.png" alt="video icon"></div>
                            <img class="image" src="<?php echo get_template_directory_uri(); ?>/preview.c45163be.png" alt="Preview">
                            <div class="descriptionList">
                                <div class="topTextDescList">Ubi est regius zirbus? Ubi est regius zirbus?</div>
                                <div class="lineList"><i class="fas fa-heart"> 150</i><i class="fa fa-clone"> 30</i><i
                                        class="fas fa-clock"> 2 days ago</i></div>
                                <div class="bottomTextDescList">Fortis lunas ducunt ad genetrix. Fortis lunas ducunt ad
                                    genetrix. Fortis lunas ducunt ad genetrix.
                                </div>
                                <button class="rightBottomButtonList"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="contentBlock">
                        <div class="mainRectangle" id="mainRectangle">
                            <div class="videoCircle"><img src="<?php echo get_template_directory_uri(); ?>/insideCircle.6f213a87.png" alt="video icon"></div>
                            <img class="image" src="<?php echo get_template_directory_uri(); ?>/preview.c45163be.png" alt="Preview">
                            <div class="descriptionList">
                                <div class="topTextDescList">Ubi est regius zirbus? Ubi est regius zirbus?</div>
                                <div class="lineList"><i class="fas fa-heart"> 150</i><i class="fa fa-clone"> 30</i><i
                                        class="fas fa-clock"> 2 days ago</i></div>
                                <div class="bottomTextDescList">Fortis lunas ducunt ad genetrix. Fortis lunas ducunt ad
                                    genetrix. Fortis lunas ducunt ad genetrix.
                                </div>
                                <button class="rightBottomButtonList"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="contentBlock">
                        <div class="mainRectangle" id="mainRectangle">
                            <div class="videoCircle"><img src="<?php echo get_template_directory_uri(); ?>/insideCircle.6f213a87.png" alt="video icon"></div>
                            <img class="image" src="<?php echo get_template_directory_uri(); ?>/preview.c45163be.png" alt="Preview">
                            <div class="descriptionList">
                                <div class="topTextDescList">Ubi est regius zirbus? Ubi est regius zirbus?</div>
                                <div class="lineList"><i class="fas fa-heart"> 150</i><i class="fa fa-clone"> 30</i><i
                                        class="fas fa-clock"> 2 days ago</i></div>
                                <div class="bottomTextDescList">Fortis lunas ducunt ad genetrix. Fortis lunas ducunt ad
                                    genetrix. Fortis lunas ducunt ad genetrix.
                                </div>
                                <button class="rightBottomButtonList"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="contentBlock">
                        <div class="mainRectangle" id="mainRectangle">
                            <div class="videoCircle"><img src="<?php echo get_template_directory_uri(); ?>/insideCircle.6f213a87.png" alt="video icon"></div>
                            <img class="image" src="<?php echo get_template_directory_uri(); ?>/preview.c45163be.png" alt="Preview">
                            <div class="descriptionList">
                                <div class="topTextDescList">Ubi est regius zirbus? Ubi est regius zirbus?</div>
                                <div class="lineList"><i class="fas fa-heart"> 150</i><i class="fa fa-clone"> 30</i><i
                                        class="fas fa-clock"> 2 days ago</i></div>
                                <div class="bottomTextDescList">Fortis lunas ducunt ad genetrix. Fortis lunas ducunt ad
                                    genetrix. Fortis lunas ducunt ad genetrix.
                                </div>
                                <button class="rightBottomButtonList"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
