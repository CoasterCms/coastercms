<url>
    <loc>{!! URL::to(PageBuilder::page_url()) !!}</loc>
    <priority>{!! (PageBuilder::page_template()==1)?'1':'0.5' !!}</priority>
</url>
{!! PageBuilder::category(array('view' => 'sitemap_xml')) !!}

