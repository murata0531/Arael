<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>arael</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    <!-- Styles -->




    <style>
        body {
            display:flex;
            height:100vh;
            width:100vw;
            padding:0;
            margin:0 auto;
        }

        .side-menu {
            width:18vw;
            height:100vh;
            background-color:lime;
         
        }

        .main-menu {
            display:flex;
            height:100vh;
            width:calc(100vw - 18vw);
        }

        .folder-menu {
            width:24vw;
            height:100vh;
            background-color:#CCE3E3;
            overflow-y:scroll;
            overflow-x:hidden;
        
        }
        
        .main-contents {
            height:100vh;
            width:58vw;
            background-color:gray;
        }

        .main-header {
            background-color:green;
            height:80px;
            width:58vw;
            top:0px;
            position:absolute;
            display:flex;
        }

        .my-header {
            width:60%;
            background-color:red;
        }
        .account-settings {
            width:40%;
            background-color:blue;
        }
        .main-item {
            background-color:yellow;
            height:calc(100vh - 80px);
            width:58vw;
            top:80px;
            position:absolute;
        }
        
        ul {
            list-style:none;
            padding:0;
            margin:0;
        }
        li a {
            height:50px;
            width : 100%;
            color:white;
            text-align:left;
            font-size:30px;
        }
        a {
            display:block;
            text-decoration:none;
            padding-left:20px;
        }
        li {
            border:solid 1px white;
        }

        .search-text{
            height: 40px;
            width: calc(24vw - 80px);
            margin: 20px 40px;
            border: none;
            border-radius:4px;
            color: #00697A;
            font-family: "Font Awesome 5 Free", 'Noto Sans JP', 'sans-serif';
            font-weight: 600;
        }

        .folder-list > li {
            height:80px;
            width:100%;
            display:flex;
            align-items:center;
        }

        
        .user-icon {
            height:50px;
            width:50px;
            border:solid 1px black;
            position:relative;
            margin:15px;
        }

        .user-text {
            position:relative;
            height:50px;
        }
        .user-text > input {
            height:35%;
            width:70%;
            position:relative;
        }
    
        .maru {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            flex-flow: column; 
            vertical-align: top;
            background-color:red;
            position:relative;
            left:10px;
        }
        /* 円の大きさ */
        .size_normal{
            width: 20px;
            height: 20px;
        }
        /* 文字の大きさ */
        .letter3 {
            font-size: 20px;
            line-height: 10px;
        }
        /* 円と文字の色 */
        .pink1 {
            color: black;
            border: 2px solid white;
            bakground-color:red;
        }
    </style>
</head>

<body>
    <div class="side-menu">
        <ul>
            <li><a href="#"><i class="fas fa-home"></i><span>ホーム</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>タスク</span></a></li>
            <li><a href="#"><i class="far fa-comment-alt"></i><span>トーク</span></a></li>
            <li><a href="#"><i class="fas fa-book-open"></i><span>ノート</span></a></li>
            <li><a href="#"><i class="far fa-folder"></i><span>ファイル共有</span></a></li>
            <li><a href="#"><i class="far fa-file-alt"></i><span>レポート</span></a></li>

        </ul>
    </div>
    <div id="example"></div>
        <script src="{{asset('/js/app.js')}}"></script>
    <div>
</body>

</html>
