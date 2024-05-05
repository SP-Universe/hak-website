<div class="section section--DownloadElement">
    <div class="section_content">
        <div class="section_text">
            <% if $ShowTitle %>
                <h2 class="textimage_text_title">$Title</h2>
            <% end_if %>
            $Text
        </div>
        <div class="section_download">
            <% if $ButtonTitle && $File %>
                <a href="$File.URL" target="_blank" class="section_download_button">$ButtonTitle</a>
            <% end_if %>
        </div>
    </div>
</div>
