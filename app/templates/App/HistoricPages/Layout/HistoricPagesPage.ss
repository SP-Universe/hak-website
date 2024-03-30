$ElementalArea

<div class="section section--historicpages">
    <div class="section_content">
        <div class="section_content_list">
            <% loop $HistoricPages %>
                <div class="historic_page">
                    <div class="historic_page_cover">
                        <img src="$Cover.URL" alt="$Cover.Title" />
                    </div>
                    <div class="historic_page_content">
                        <h2 class="historic_page_content_title">Nr. {$Number} $Title</h2>
                        <div class="historic_page_content_description">
                            $Description
                        </div>
                        <a href="$ReadingProbe.Url" target="_blank" class="historic_page_content_readingprobe link--button download">Leseprobe</a>
                    </div>
                </div>
            <% end_loop %>
        </div>
    </div>
</div>