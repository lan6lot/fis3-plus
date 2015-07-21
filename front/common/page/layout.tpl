<!DOCTYPE html>
{html framework="common/static/script/mod.js"}
<head>
	{block name="block_head_seo"}
    	<title>Smarty TEST</title>
    	<meta name="description" content="description"/>
    	<meta name="keywords" content="keywords"/>
    {/block}

    {block name="block_head_static"}{/block}
    <!--[FIS_CSS_LINKS_HOOK]-->
</head>
<body>
	<div>this is from layout</div>
    {block name="block_content"}{/block}
    <!--[FIS_JS_SCRIPT_HOOK]-->
</body>
{/html}