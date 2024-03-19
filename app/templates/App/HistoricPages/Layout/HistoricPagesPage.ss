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
                        <h2>Nr. {$Number} $Title</h2>
                        <p>$Description</p>
                        <a href="$ReadingProbe.Url" target="_blank" class="link--button download">Leseprobe</a>
                    </div>
                </div>
            <% end_loop %>
        </div>
    </div>
</div>
