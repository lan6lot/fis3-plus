<!DOCTYPE html>
{%html framework="common/static/script/mod.js"%}
<head>
	{%block name="block_head_seo"%}
    	<title>Smarty TEST</title>
    	<meta name="description" content="description"/>
    	<meta name="keywords" content="keywords"/>
    {%/block%}
    <link rel="stylesheet" type="text/css" href="/common/static/style/base.less">
    <!--[FIS_CSS_LINKS_HOOK]-->
    {%block name="block_head_static"%}{%/block%}
</head>
<body ng-app="myApp">
    
    {%block name="block_content"%}{%/block%}

    <script src="/bower_components/angular/angular.js"></script>
    <script src="/bower_components/ui-router/release/angular-ui-router.js"></script>
    <script src="/bower_components/angular-cookies/angular-cookies.js"></script>
    <!--[FIS_JS_SCRIPT_HOOK]-->
</body>
{%/html%}