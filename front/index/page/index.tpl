{extends file="common/page/layout.tpl"}

{block name="block_head_seo"}
	<title>FIS3 Smarty Demo</title>
{/block}
{block name="block_head_static"}
	{require name="index/static/script/jquery.js"}
{/block}

{block name="block_content"}
    {widget name="index/widget/header/header.tpl"}
    <p>no content</p>
    {widget name="index/widget/footer/footer.tpl"}
{/block}
