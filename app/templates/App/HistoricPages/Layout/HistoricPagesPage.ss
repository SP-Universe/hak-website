$ElementalArea

<% if $HistoricPages.Count > 0 %>
    <div class="section section--historicpages">
        <div class="section_content">
            <h2>$HistoricPagesTitle</h2>
            <div class="historic_pages_text">
                $HistoricPagesText
            </div>
            <div class="section_content_list">
                <% loop $HistoricPages %>
                    <div class="historic_page">
                        <a data-gallery="gallery" data-glightbox="description: $Title" data-caption="$Title" class="historic_page_cover" href="$Cover.FitMax(2000,2000).URL">
                            <img src="$Cover.URL" alt="$Cover.Title" />
                        </a>
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
<% end_if %>

<!--
<% if $HistoricBooksXX.Count > 0 %>
    <div class="section section--historicbooks">
        <div class="section_content">
            <h2>$HistoricBooksTitle</h2>
            <div class="historic_books_text">
                $HistoricBooksText
            </div>
            <div class="section_content_list">
                <% loop $HistoricBooks %>
                    <div class="historic_book">
                        <a data-gallery="gallery" data-glightbox="description: $Title" data-caption="$Title" class="historic_book_cover" href="$Cover.FitMax(2000,2000).URL">
                            <img src="$Cover.URL" alt="$Cover.Title" />
                        </a>
                        <div class="historic_book_content">
                            <h2 class="historic_book_content_title">$Title</h2>
                            <h3 class="historic_book_content_subtitle">$Author, $Version</h3>
                            <div class="historic_book_content_description">
                                $Description
                            </div>
                        </div>
                    </div>
                <% end_loop %>
            </div>
        </div>
    </div>
<% end_if %>
-->
