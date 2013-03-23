<?php
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <style type="text/css">
    body {
        background-color: #FFF;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }
    
    a {
        color: #4F5155;
        background-color: transparent;
        font-weight: normal;
    }
    a:hover {
        text-decoration: none;
    }
    
    header {
        background-color: #444;
        border-bottom: 1px solid #D0D0D0;
        padding: 14px 15px 10px 15px;
    }
        header a, h1 {
        color: #fff;
    } 
    header a {
        margin-right: 25px;
    }
    h1 {
        display: inline;
        font-size: 19px;
        font-weight: normal;
        margin: 0 35px 0 0;
    }
    
    .post {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }
    
    #body {
        margin: 0 15px 0 15px;
    }
    
    p.footer {
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }
    
    #container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        -moz-box-shadow: 0 0 8px #ccc;
        -webkit-box-shadow: 0 0 8px #D0D0D0;
    }
    
    input, textarea, button {
        border: 1px solid #D0D0D0;
        padding: 10px;
        margin: 5px 0;
    }
    input, textarea {
        width: 300px;
    }
    textarea {
        height: 100px;
        resize: none;
    }
    button {
        background-color: #EEE;
    }
    </style>
</head>
<body>
<div id="container">
    <header>
    	<h1><?php echo $title ?></h1>
        <a href="<?php echo site_url('posts'); ?>">Home</a>
        <a href="<?php echo site_url('posts/create'); ?>">Create post</a>
    </header>
	<div id="body">
    