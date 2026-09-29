<!doctype html>
<html amp>

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    
    <link rel="canonical" href="https://www.suara.com/" />
    <link rel="apple-touch-icon" href="https://assets.suara.com/mobile/images/img/suara-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://assets.suara.com/mobile/images/img/suara-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://assets.suara.com/mobile/images/img/suara-icon-114x114.png">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Markazi+Text:400,500,600,700" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <style amp-custom>
        
            
            
            body {
                font-family: 'Poppins';
                margin: 0;
                padding: 0;
                -moz-font-feature-settings: "none";
                -ms-font-feature-settings: "none";
                -webkit-font-feature-settings: "none";
                -o-font-feature-settings: "none";
                font-feature-settings: "none"
            }
            
        
            
    /* HEADER */
    .header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 10px 13px 10px;
    background: #111;
    color: white;
    position: relative;
    
    }

    /* LOGO */
    .logo{
    flex: 1;
    }
    .logo h2 {
    font-size: 20px;
    }
    .logo img{
    border-radius: 0;
    }
    /* =========================
    SEARCH ICON TOGGLE
    ========================= */

    /* Tombol icon */
    .search-btn {
    background: none;
    border: none;
    font-size: 18px;
    cursor: pointer;
    color: #333;
    }
    .search-content{
    padding: 20px;
    }
    .search-content p{
    color: #1E1E1E;
    }
    .search-content ul{
    margin-top: 20px;
    }

    /* Box input (hidden default) */
    .search {
    display: flex;
    align-items: center;
    gap: 10px;
    }
    /* OVERLAY FULL */
    .search-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    background: #fff;
    z-index: 9999;

    opacity: 0;
    transform: translateY(-100%);
    transition: all 0.3s ease;

    display: flex;
    flex-direction: column;
    }

    /* HEADER SEARCH */
    .search-header {
    display: flex;
    align-items: center;
    gap: 10px;

    padding: 15px;
    border-bottom: 1px solid #eee;
    }

    /* INPUT */
    .search-header input {
    flex: 1;
    padding: 10px 15px;
    border-radius: 20px;
    border: 1px solid #ddd;
    outline: none;
    font-size: 14px;
    }

    /* BACK BUTTON */
    .back-btn {
    border: none;
    background: none;
    font-size: 20px;
    cursor: pointer;
    }

    /* AKTIF */
    .search-overlay.active {
    opacity: 1;
    transform: translateY(0);
    }
    .search-content li span{
    margin-left: auto; /* dorong ke paling kanan */
    display: flex;
    align-items: center;
    }
    .search-content li{
    display: flex;
    align-items: center; /* ini kunci biar sejajar */
    gap: 6px;
    background: linear-gradient(90deg, #fee3e3, #fee4e300);
    margin-bottom: 10px;
    border-radius: 6px;
    padding: 10px;
    font-weight: 700;
    }

    .search-content span{
    color: #1E1E1E;
    }
    .search-content li img{
    width: 20px;
    }
    .trending {
    display: flex;
    align-items: center; /* 🔥 ini kunci */
    gap: 6px;
    }

    /* icon */
    .trending i {
    display: flex;
    align-items: center;
    }

    .trending img {
    width: 16px;
    height: 16px;
    }

    /* text */
    .trending span {
    line-height: 1;
    }
    /* HIDE CHECKBOX */
    #menu-toggle {
    display: none;
    }

    /* HIDE CHECKBOX */
    #menu-toggle {
    display: none;
    }

    /* HEADER background abu-abu */
    .header {
    background: #fff;   /* abu-abu */
    color: white;
    position: sticky;
    box-shadow : 0 4px 8px 0 rgba(0, 0, 0, 0.15);
    width: 100%;
    z-index: 999;
    top:0
    }

    /* OVERLAY */
    .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
    z-index: 999998;
    }

    /* MENU */
    .slide-menu {
    position: fixed;
    top: 0;
    right: -320px;
    width: 320px;
    height: 100%;
    background: #fff;
    box-shadow: -2px 0 12px rgba(0,0,0,0.2);
    transition: 0.3s;
    z-index: 999999;
    overflow-y: auto;
    padding: 20px;
    }

    /* ACTIVE */
    .slide-menu.active {
    right: 0;
    }

    .overlay.active {
    opacity: 1;
    visibility: visible;
    }

    /* HEADER */
    .menu-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    }
    .menu-header ul li{
    float: left;
    list-style: none;
    padding: 2px;
    text-decoration: none;
    }

    .close-btn {
    border: none;
    background: none;
    font-size: 20px;
    cursor: pointer;
    }

    /* PREMIUM */
    .premium {
    display: block;
    width: 100%;
    padding: 12px;
    border-radius: 30px;
    border: none;
    background: linear-gradient(to right, #f7a27a, #f1c75b);
    margin-bottom: 20px;
    }

    /* MENU */
    .menu-list {
    list-style: none;
    padding: 0;
    }
    .menu-list a.user img{
    width: 25px;
    }
    .menu-list a.user{
    position: absolute;
    right: 14px;
    top: 18px;
    }
    .menu-list li {
    border-bottom: 1px solid #eee;
    color: #1E1E1E;
    }

    li:nth-child(-n+9) .menu-link {
    display: flex;
    align-items: center;
    gap: 10px;
    }

    /* paksa text node jadi inline normal */
    li:nth-child(-n+9) .menu-link {
    justify-content: flex-start;
    }

    /* arrow tetap kanan */
    li:nth-child(-n+9) .menu-link .arrow {
    margin-left: auto;
    }

    li:nth-last-child(-n+3) .menu-link {
    justify-content: flex-start;
    
    }

    li:nth-last-child(-n+3) .menu-link a {
    margin-left: 0;
    width: auto;
    display: inline-block;
    margin-left: 10px;
    }
    /* SUBMENU */
    .submenu {
    display: none;
    padding-left: 15px;
    }

    .submenu a {
    display: block;
    padding: 8px 0;
    text-decoration: none;
    color:  #1E1E1E;
    font-size: 14px;
    }
    .menu-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0 0 0;
    cursor: pointer;
    }
    .menu-link img{
    width: 25px;
    }

    /* PANAH */
    .arrow {
    width: 8px;
    height: 8px;
    border-right: 2px solid #333;
    border-bottom: 2px solid #333;
    transform: rotate(45deg); /* arah bawah */
    transition: 0.3s;
    }

    /* saat open (muter ke atas) */
    .menu-list li.open .arrow {
    transform: rotate(-135deg);
    }

    .menu-list li.open .submenu {
    display: block;
    }

    /* HAMBURGER ANIMATION */
    .hamburger.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px,5px);
    }
    .hamburger.active span:nth-child(2) {
    opacity: 0;
    }
    .hamburger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(5px,-5px);
    }

    .menu-bottom {
    display: flex;
    margin-top: 20px;
    flex-direction: column;
    align-items: center;      /* center horizontal */
    justify-content: center;  /* center vertical (kalau ada tinggi) */
    text-align: center;
    }
    .menu-bottom p{
    color: #1E1E1E;
    }
    .menu-store {
    display: flex;
    gap: 10px;                /* jarak antar icon */
    justify-content: center;  /* center horizontal */
    align-items: center;
    margin-top: 8px;
    }

    .menu-store div img {
    width: 60px; /* optional, biar konsisten */
    }


    /* HEADER background abu-abu */
    .header {
    background: #ffffff;   /* abu-abu */
    color: white;
    }



    /* CONTAINER */
    .container {
    width: 100%;
    }
    .header .container {
    display: flex;
    }

    /* search tetap normal */
    .search {
    display: flex;
    align-items: center;
    margin-right: 10px;
    }

    /* INI KUNCINYA */
    .hamburger {
    width: 25px;
    height: 20px;
    margin-left: auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    z-index: 99;
    background: none;
    border: none;
    }

    .hamburger span {
    background: #939598;
    height: 2px;
    border-radius: 2px;
    color: #000;
    }

        
        .main-content {
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        /* Card */

        .card-one--info {
            align-items: center;
            margin-bottom: 20px;
            text-align: left;
        }

        .card-one--category {
            font-weight: 700;
            font-size: 14px;
            line-height: 21px;
            color: #C2000B;
            border-right: solid 1px #000;
            padding-right: 10px;
            height: 20px;
        }

        .card-one--category:last-child {
            border-right: none;
        }

        .headline-card h4{
            font-weight: 500;
        }
        .headline-card p{
            color: #787878;
            font-size: 14px;
            font-weight: 300;
        }
        .card-one--date {
            color: #BABABA;
            text-transform: uppercase;
            font-size: 14px;
            display: inline-block;
        }

        .headline-card .headline-card--image {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .headline-card .headline-card--title {
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .headline-card {
            margin-bottom: 25px;
        }
        .headline-list{
            margin-top: 30px;
        }
        .headline-wrap{
            display: flex;
            border-bottom: 1px #e5e7eb solid;
            padding-top: 10px;
            
        }
        .headline-content-grid{
            width: 35%;
        }
        .headline-content-grid img{
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
        .headline-list-grid{
            width: 65%;
            padding-left: 8px;
        }
        .headline-list-grid h2{
            font-size: 16px;
            margin: 0;
            font-weight: 500;
        }
        .headline-list-grid p{
            padding: 0;
            margin-top: 3px;
            font-weight: 300;
            font-size: 14px;
            color: #787878;
        }

        a.read-more{
            background: #F0F0F0;
            padding: 5px;
            font-weight: 300;
        }

        .headline-card:last-child {
            margin-bottom: 0;
            
        }

        a.card-one-wrap {
            display: flex;
            overflow-y: hidden;
            flex-direction: row;
            overflow-x: auto;
        }

        .card-one {
            max-width: 300px;
            margin-right: 20px;
        }

        .card-one:last-child {
            margin-right: 0;
        }

        .card-one--image {
            width: 300px;
            height: auto;
            border-radius: 5px;
        }

        .card-one--title {
            margin: 10px 0;
        }

        .card-one-desc {
            margin-top: 0;
            font-size: 14px;
        }

        .card-two {
            display: flex;
            align-items: center;
            border-bottom: 1px dashed #DADADA;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .card-two:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .card-two--image-wrap {
            border-radius: 5px;
            width: 140px;
            height: 80px;
        }

        .card-two--image-wrap .card-two--image {
            width: 140px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        .card-two--title {
            margin-top: 0;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .card-two--info {
            margin-left: 10px;
        }

        .card-three {
            border-bottom: 1px dashed #C4C4C4;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .card-three:last-child {
            border-bottom: none;
        }

        .card-three-title {
            margin-bottom: 5px;
            margin-top: 0;
        }

        /* special-repot */
        .special-report{
            margin-top: 30px;
        }
        .special-report-list{
            border-bottom: 1px solid #C4C4C4;
        }
        .special-report-list h2{
            margin: 0;
            margin-top: 6px;
            font-weight: 500;
            font-size: 16px;
        }
        .special-report-list h3{
            margin-bottom: 6px;
            color:#ED1C24;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .special-report-list span{
            /* color: #787878; */
            color: #BABABA;
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 300;
        }
        .special-report-list p{
            font-size: 15px;
            font-weight: 300;
            color: #444444;
        }
        /* end special report */

        /* related */
        .related{
        margin-top: 10px;
        }
        .related h3{
            color: #ED1C24;
            font-size: 19px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
       
        .related-content img{
            width: 100%;
        }
        .related-content h2{
            padding: 0;
            margin: 0;
            margin-bottom: 10px;
            line-height: 28px;
            font-weight: 500;
        }
        .related-content p{
            font-size: 15px;
            font-weight: 300;
            color: #444444;
        }
        .related-content h4{
            margin: 0;
            margin-top: 10px;
            margin-bottom: 10px;
            color: #ED1C24;
            font-size: 14px;
            letter-spacing: 2px;
            font-weight: 300;
            text-transform: uppercase;
        }
        .related-content span{
            color: #BABABA;
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 300;
        }
        .related-content-noactive{
            width: 100%;
            display: inline-flex;
            margin-top: 10px;
        }
        .related-content-noactive img{
            width: 100%;
        }
        .related-content-noactive h2{
            margin: 0;
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: 500;
        }
        .related-content-img{
            width: 50%;
        }
        .related-content-desc{
            width: 50%;
            padding-left: 6px;
        }
        /* endrelated */

        /* video */
        .video-content {
            background: #F6F6F6;
            padding: 25px 0 25px 5%;
            display: inline-block;
        }

        .video-content h3{
            color: #ED1C24;
            font-size: 19px;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-align: left;
        }

        .video-wrapper {
            display: flex;
            overflow-y: hidden;
            overflow-x: auto;
        }

        .video-card {
            max-width: 300px;
            position: relative;
            margin-right: 40px;
        }

        .video-card--image-wrap {
            position: relative;
        }

        .video-card--image-wrap .icon {
            position: absolute;
            right: 10px;
            bottom: 10px;
        }

        .video-card--image {
            border-radius: 10px;
        }

        .video-card .card-one--category {
            border-right: solid 1px #fff;
        }

        .video-card .card-one--date {
            color: #BABABA;
            letter-spacing: 2px;
            font-size: 11px;
        }

        .video-card--title {
            margin-top: 0;
            margin-bottom: 5px;
            text-align: left;
        }

        .video-card--title a {
            color:#000;
            font-size: 16px;
            font-weight: 600;
        }

        /* endvideo */
        .category{
            display: inline-block;
        }
        .category h3{
            color: #ED1C24;
            font-size: 19px;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-align: center;
        }
        .category-wrap{
            width: 100%;
            display: block;
            
        }
        .category-wrap-list{
            float: left;
            padding-bottom: 20px;
        }
        .category-wrap-list img{
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .category-wrap-list h2{
            font-size: 19px;
            font-weight: 500;
        }


        a.read-more{
            background: #F0F0F0;
            padding: 5px;
            font-weight: 300;
        }

        .headline-card:last-child {
            margin-bottom: 0;
            
        }

        /* Article Detail */

        .article-detail figure {
            background: #EBEBEB;
            margin-inline-start: 0;
            margin-inline-end: 0;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .article-detail{padding-top: 60px;}

        .article-detail figcaption {
            padding: 5px 15px;
            font-size: 12px;
            color: #666666;
            
        }

        .article-detail h3{
            color: #787878;
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 11px;
        }

        .article-detail figure img {
            width: 100%;
            border-radius: 5px;
            display: block;
        }

        .article-detail-desc {
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            font-family: 'Poppins';
        }

        .read-also-wrap-title {
            display: block;
            font-size: 14px;
            color: #666666;
            
        }

        .article-detail--title {
            margin-bottom: 5px;
            font-weight: 600;
        }

        .article-detail--author {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            color: #666666;
        }

        .read-also-wrap {
            background: #F4F4F4;
            padding: 10px;
            border-radius: 5px;
        }

        .read-also-wrap-item {
            display: block;
            font-size: 16px;
            font-weight: 600;
            
        }

        .article-detail-share-link span {
            font-weight: 600;
            margin-right: 10px;
        }

        .news-related{
            margin-top: 40px;
        }
        .news-related h3{
            color: #ED1C24;
            margin: 0;
            font-size: 19px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 700;
        }
        .news-related ul{
            padding: 0;
        }
        .news-related ul li{
            padding: 6px;
            list-style: none;
            text-decoration: none;
            
            border-bottom: 1px #aaa solid;
        }
        .news-related ul li a{
            font-size: 16px;
            font-weight: 500;
        }

        /* share */
        .article-share{
            padding: 0;
            display: inline-flex;
        }
        .article-share ul{
            padding: 0;
            
        }
        .article-share ul li{
            float: left;
            list-style: none;
            text-decoration: none;
            padding: 4px;
        }

        .related-index{
            padding-top: 40px;
        }



        .site-footer {
            font-size: 12px;
            text-align: center
        }
        
        .footer {
            background-color: #1f1e1e
        }
        
        .site-footer {
            margin: 0 auto;
            padding: 20px 0;
            color: #999;
            line-height: 17.6px
        }
        
        .site-footer a {
            color: #999;
            text-decoration: none
        }
        
        .site-footer a:hover {
            color: #333
        }
        .sidebar a {
            color: #666;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .sidebar .sidebar-middle ul li {
            border-bottom: 1px solid #d0d0d2;
            list-style-type: none;
            padding: 5px 0px 5px 0px;
            margin-bottom: 5px;
            top: -5px;
            position: relative;
        }

        .sidebar .logo {
            float: left;
            margin: 7px 10px 0 10px;
        }

        .sidebar .menu {
            float: right;
        }

        .sidebar .sidebar-top {
            background: #fff;
            height: 40px;
            padding: 3px;
            box-shadow: 2px 2px 2px #bebebe;
        }

        .sidebar .sidebar-middle {
            background: #f5f6f8;
            width: 320px;
            top: 5px;
            position: relative;
            font-size: 12px;
        }

        .sidebar .sidebar-middle ul li i {
            font-size: 11px;
            margin-right: 3px;
        }

        .sidebar .sidebar-middle .sidebar-left {
            float: left;
            padding: 0px 10px;
            width: 145px;
        }

        .sidebar .sidebar-middle .sidebar-right {
            float: right;
            padding: 0px 10px 0px 0px;
            position: relative;
            padding: 0px 10px 0px 0px;
            width: 145px;
        }

        .sidebar .sidebar-sosmed {
            width: 300px;
            padding: 20px 0px;
        }

        .sidebar .sidebar-sosmed.row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .sidebar .sidebar-sosmed.row .col {
            width: 20px;
            margin: 0px 10px;
        }

        .sidebar .sidebar-other-media {
            position: relative;
            background: #fff;
            padding: 20px;
        }
        .sidebar .sidebar-other-media .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .sidebar .sidebar-other-media .row .col {
            padding: 2px;
            margin-bottom: 10px;
        }

        .sidebar .sidebar-other-media .row .col:first-child {
            padding-left: 0px;
        }

        
        .btn-close {
            float: right;
            margin: 5px 10px 0 0
        }

       
        /* Header slide new */
        .header-top-menu-new {
            padding: 0px 10px;
            display: flex;
            overflow-x: scroll;
            background: rgb(237,28,36);
            background: linear-gradient(90deg, rgba(237,28,36,1) 0%, rgba(237,28,36,1) 0%, rgba(65,34,122,1) 87%);
            width: 100%;
        }
        
        /* List slider */
        .wrap-slider {
            margin: 20px 15px;
        }
        .portlet--slider {
            white-space: nowrap;
            overflow-x: scroll;
        }

        .portlet--slider__item {
            display: inline-block;
            vertical-align: top;
            position: relative;
            margin-right: 10px;
            width: 170px;
            overflow: hidden;
        }

       
        /* Search */
        .search_ {
            width: 40%;
            padding-left: 15px;
        }
        .wrap-search {
            position: absolute;
            top: 61px;
            left: 2000px;
            z-index: 9;
            width: 100%;
            padding: 7px;
            border-top: 1px solid #bbb;
            border-bottom: 1px solid #bbb;
            background: #fff;
            transition: left 400ms cubic-bezier(0.17, 0.04, 0.03, 0.94);
        }
        #open-search {
            display: none;
        }
        #open-search:checked ~ .wrap-search {
            left: 0px
        }
        .btn-search {
            float: left;
            margin-top: 20px;
        }
        #input_search {
            padding-left: 10px;
            font-size: 15px;
            width: 80%;
            height: 30px;
            border: none;
            outline: none;
            font-family: 'Poppins';
            font-weight: 200;
        }
        .btn-telusuri {
            font-size: 15px;
            width: 15%;
            border: none;
            outline: none;
            height: 30px;
            background: #ef1b1c;
            color: #fff;
        }

        a{
            color: #000; 
            list-style: none;
            text-decoration: none;
        }

    
    </style>
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }
        
        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
        
        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
        
        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
        
        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
        
        @keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
    </style>
    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>

    <!-- <script async custom-element="amp-script" src="https://cdn.ampproject.org/v0/amp-script-0.1.js"></script> -->
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-sticky-ad" src="https://cdn.ampproject.org/v0/amp-sticky-ad-1.0.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
</head>

<body>
    
    <header class="header">
    <div class="container">

        <!-- LOGO -->
        <div class="logo">
        <a href="index.html">
            <amp-img src="assets/images/icon/logo.svg" width="180" height="21" alt="Logo Website"></amp-img>
        </a>
        </div>

        <!-- SEARCH BUTTON -->
        <div class="search">
        <label for="search-toggle" class="search-btn">
            <amp-img src="assets/images/icon/search.svg" width="20" height="20"></amp-img>
        </label>
        </div>

        <!-- SEARCH TOGGLE -->
        <input type="checkbox" id="search-toggle" hidden>

        <!-- SEARCH OVERLAY -->
        <div class="search-overlay">
        <div class="search-header">
            <label for="search-toggle" class="back-btn">←</label>
            <input type="text" placeholder="Cari berita...">
        </div>

        <div class="search-content">
            <div class="trending">
            <i>
                <amp-img src="assets/images/icon/trending.svg" width="16" height="16"></amp-img>
            </i>
            <span>Trending</span>
            </div>

            <ul>
            <li><a href="#">Indonesia</a></li>
            <li><a href="#">Kamerun</a></li>
            <li><a href="#">WFH</a></li>
            <li><a href="#">Honda</a></li>
            <li><a href="#">Malaysia</a></li>
            </ul>
        </div>
        </div>

        <!-- HAMBURGER -->
        <button class="hamburger" on="tap:menu.toggle">
        <span></span>
        <span></span>
        <span></span>
        </button>

    </div>
    </header>

    <!-- SIDEBAR MENU -->
    <amp-sidebar id="menu" layout="nodisplay" side="right" class="slide-menu">

    <div class="menu-header">
        <button class="close-btn" on="tap:menu.close">✕</button>
    </div>

    <ul class="menu-list">

        <a href="#" class="user">
        <amp-img src="assets/images/icon/menu-user.svg" width="24" height="24"></amp-img>
        </a>

        <!-- NEWS -->
        <li>
        <details>
            <summary class="menu-link">
            <amp-img src="assets/images/icon/menu-news.svg" width="20" height="20"></amp-img>
            News
            </summary>
            <div class="submenu">
            <a href="kanal.php">Nasional</a>
            <a href="kanal.php">Metropolitan</a>
            <a href="kanal.php">Internasional</a>
            </div>
        </details>
        </li>

        <!-- BISNIS -->
        <li>
        <details>
            <summary class="menu-link">
            <amp-img src="assets/images/icon/menu-bisnis.svg" width="20" height="20"></amp-img>
            Bisnis
            </summary>
            <div class="submenu">
            <a href="#">Makro</a>
            <a href="#">Keuangan</a>
            <a href="#">Properti</a>
            </div>
        </details>
        </li>

        <!-- BOLA -->
        <li>
        <details>
            <summary class="menu-link">
            <amp-img src="assets/images/icon/menu-bola.svg" width="20" height="20"></amp-img>
            Bola
            </summary>
            <div class="submenu">
            <a href="#">Liga Inggris</a>
            <a href="#">Liga Italia</a>
            </div>
        </details>
        </li>

        <!-- STATIC MENU -->
        <li><a href="#">Foto</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Opini</a></li>

    </ul>

    <!-- STORE -->
    <div class="menu-bottom">
        <p>Available On</p>
        <div class="menu-store">
        <amp-img src="assets/images/icon/playstore.svg" width="120" height="40"></amp-img>
        <amp-img src="assets/images/icon/iosstore.svg" width="120" height="40"></amp-img>
        </div>
    </div>

    </amp-sidebar>


    <div class="main-content">
            
        <div class="mb-20">
            <article class="article-detail">
                <h1 class="article-detail--title">Hurricane Ida updates: At least 1 death in Louisiana as New Orleans loses power</h1>
                <span class="article-detail--author">Agung Sandy Lesmana | Ria Rizki Nirmala Sari </span>
                <h3>02 September 2024 | 20:40 Wib</h3>

                <div class="article-share">
                   <ul>
                       <li>
                          <a href="">
                            <img src="../assets/images/icon/icon-fb.png" width="30px" height="30px" alt="ig" />
                          </a>
                       </li>
                       <li>
                          <a href="">
                          <img src="../assets/images/icon/wa.png" width="30px" height="30px" alt="wa" />
                          </a>
                        </li>
                        <li>
                            <a href="">
                            <img src="../assets/images/icon/twt.png" width="30px" height="30px" alt="x" />
                            </a>
                          </li>
                        <li>
                           <a href="">
                          <img src="../assets/images/icon/icon-share.png" width="30px" height="30px" alt="link" />
                           </a>
                        </li>
                   </ul>     
                </div>
                <figure class="article-detail-figure">
                    <img src="https://images.unsplash.com/photo-1459535653751-d571815e906b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=560&h=334&q=80" class="card-headline-img" alt="Nadiem Makarim"/>
                    <figcaption>Nadiem Makarim (Instagram/Kemdikbud.RI)</figcaption>
                </figure>
                <div class="article-detail-desc">
                    <p><strong>Suara.com</strong> - Perhimpunan Pendidikan dan Guru (P2G) mengapresiasi atas reaksi cepat Menteri Pendidikan dan Kebudayaan (Mendikbud) Nadiem Makarim terkait aturan di SMK Negeri 2 Padang yang mewajibkan siswi non muslim memakai jilbab. Namun di sisi lain, P2G juga menyayangkan kalau Nadiem hanya merespons kasus yang kebetulan tengah menjadi obrolan hangat di tengah masyarakat.</p>
                    <p>Kabid Advokasi P2G, Iman Zanatul Haeri menilai kalau Nadiem tidak mengakui secara terbuka kalau fenomena intoleransi seperti yang terjadi di SMK Negeri 2 Padang itu juga dialami banyak siswa di daerah lain.</p>
                    <p>"Kasus intoleransi di sekolah yang dilakukan secara terstruktur bukanlah kasus baru,"</p>
                    <p>Menurut Iman, Nadiem seharusnya mengungkap persoalan intoleransi di lingkungan sekolah. Persoalan intoleransi di sekolah itu dikatakannya mengandung problematika dari aspek regulasi struktural, sistematik dan birokratis.</p>
                    
                    <p>Di samping itu, P2G melihat adanya Peraturan Daerah (Perda) yang menjadi penyebab utama dari lahirnya intoleransi di sekolah. Sebab, peristiwa pemaksaan jilbab di SMKN 2 Padang merujuk pada Instruksi Walikota Padang No 451.442/BINSOS-iii/2005.</p>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1459535653751-d571815e906b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=560&h=334&q=80" class="card-headline-img" alt="Nadiem Makarim "/>
                        <figcaption>Nadiem Makarim (Instagram/Kemdikbud.RI)</figcaption>
                    </figure>
                    <p>"Artinya ada peran pemerintah pusat, seperti Kemendagri dan Kemendikbud.</p>
                    <p>Kabid Advokasi P2G, Iman Zanatul Haeri menilai kalau Nadiem tidak mengakui secara terbuka kalau fenomena intoleransi seperti yang terjadi di SMK Negeri 2 Padang itu juga dialami banyak siswa di daerah lain.</p>
                    
                </div>

                <div class="news-related">
                    <div class="container">
                        <h3>Terkait</h3>
                        <ul>
                            <li>
                                <a href="">Acara 17 Agustsus Di Adakan Di Ibukota Baru</a>
                            </li>
                            <li>
                                <a href="">Prediksi Gempa Megathurst Oktober 2024</a>
                            </li>
                            <li>
                                <a href="">Kala Anies Singgung Harga Bus TransJakarta Lebih Mahal dari Lexus</a>
                            </li>
                            <li>
                                <a href="">Reaksi Marshel Widianto Disebut Maju Pilkada 2024 Demi Lunasi Utang</a>
                            </li>
                            <li>
                                <a href="">NasDem Batal Dukung Anies di Pilkada Jakarta, PKB Putuskan di Akhir-akhir</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                
            </article>
        </div>
    </div>

    <div class="main-content">
        <div class="related">
            <h3>Terkait</h3>
            <div class="related-content">
                <a href="detail.html" title="">
                    <img class="card-two--image" src="https://media.suara.com/pictures/970x544/2024/08/28/19071-ilustrasi-anies-baswedan-batal-diumumin-jadi-calon-gubernur-jakarta-oleh-pdi-perjuangan.jpg" alt="ilustrasi-anies-baswedan-batal-diumumin-jadi-calon-gubernur-jakarta-oleh-pdi-perjuangan"/>
                </a>
                <h4>Laporan Khusus</h4>
                <h2>Rano Karno Di Usung 18 Partai Di Pilkada Jakarta</h2>
                <span>Senin, 20 Juli 2024 | 20:21 Wib</span>
                <p>Meet the Republican dissidents fighting to push Donald Trump out of office—and reclaim their party Rapidiously e-enable reliable collaboration</p>
            </div>
            <div class="related-content-noactive">
                <div class="related-content-img">
                    <a href="detail.html" title="">
                    <img class="card-two--image" src="https://media.suara.com/pictures/970x544/2024/08/27/61668-airin-rachmi-diany-resmi-menerima-sk-dukungan-dari-ketum-partai-golkar-bahlil-lahadalia.jpg" alt="ilustrasi-anies-baswedan-batal-diumumin-jadi-calon-gubernur-jakarta-oleh-pdi-perjuangan"/>
                    </a>
                </div>
                <div class="related-content-desc">
                    <h2>Rano Karno Di Usung 18 Partai Di Pilkada Jakarta</h2>
                </div>
            </div>
            <div class="related-content-noactive">
                <div class="related-content-img">
                    <a href="detail.html" title="">
                    <img class="card-two--image" src="https://media.suara.com/pictures/970x544/2024/08/28/19071-ilustrasi-anies-baswedan-batal-diumumin-jadi-calon-gubernur-jakarta-oleh-pdi-perjuangan.jpg" alt="ilustrasi-anies-baswedan-batal-diumumin-jadi-calon-gubernur-jakarta-oleh-pdi-perjuangan"/>
                    </a>
                </div>
                <div class="related-content-desc">
                    <h2>Rano Karno Di Usung 18 Partai Di Pilkada Jakarta</h2>
                </div>
            </div>
            <div class="related-content-noactive">
                <div class="related-content-img">
                    <a href="detail.html" title="">
                    <img class="card-two--image" src="https://media.suara.com/pictures/970x544/2024/08/27/61668-airin-rachmi-diany-resmi-menerima-sk-dukungan-dari-ketum-partai-golkar-bahlil-lahadalia.jpg" alt="ilustrasi-anies-baswedan-batal-diumumin-jadi-calon-gubernur-jakarta-oleh-pdi-perjuangan"/>
                    </a>
                </div>
                <div class="related-content-desc">
                    <h2>Rano Karno Di Usung 18 Partai Di Pilkada Jakarta</h2>
                </div>
            </div>
            <div class="related-content-noactive">
                <div class="related-content-img">
                    <a href="detail.html" title="">
                    <img class="card-two--image" src="https://media.suara.com/pictures/970x544/2024/08/28/19071-ilustrasi-anies-baswedan-batal-diumumin-jadi-calon-gubernur-jakarta-oleh-pdi-perjuangan.jpg" alt="ilustrasi-anies-baswedan-batal-diumumin-jadi-calon-gubernur-jakarta-oleh-pdi-perjuangan"/>
                    </a>
                </div>
                <div class="related-content-desc">
                    <h2>Rano Karno Di Usung 18 Partai Di Pilkada Jakarta</h2>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="site-footer">
            <div class="inner">
                <section class="copyright">© 2024 <a href="mailto:redaksi@suara.com">liks</a> - All Rights Reserved.</section>
            </div>
        </div>
    </footer>

    <amp-analytics type="googleanalytics" id="analytics1">
        <script type="application/json">
            { "vars": { "account": "UA-48479604-1" }, "triggers": { "trackPageview": { "on": "visible", "request": "pageview" } }, "extraUrlParams": { "cd1" : "Pebriansyah Ariefana", "cd2" : "2018-12-11 14:02:12" } }
        </script>
    </amp-analytics>

</body>

</html>