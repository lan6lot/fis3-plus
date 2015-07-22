<!DOCTYPE html>
{html framework="common/static/script/mod.js"}
<head>
	{block name="block_head_seo"}
    	<title>Smarty TEST</title>
    	<meta name="description" content="description"/>
    	<meta name="keywords" content="keywords"/>
    {/block}
    <link rel="stylesheet" type="text/css" href="/common/static/style/base.less">
    {block name="block_head_static"}{/block}
    <!--[FIS_CSS_LINKS_HOOK]-->
</head>
<body>
    {block name="block_content"}{/block}
    <script type="text/javascript" src="/bower_components/angular/angular.js"></script>
    <!--[FIS_JS_SCRIPT_HOOK]-->
</body>
{/html}