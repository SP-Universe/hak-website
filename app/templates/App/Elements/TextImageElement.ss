<div class="section section--textimage $Highlight $Variant $ImgWidth">
    <div class="section_content">
        <% if $Image %>
            <div class="textimage_image">
                $Image.ScaleWidth(800)
                <% if $ImageSubtitle %><p>$ImageSubtitle</p><% end_if %>
            </div>
        <% end_if %>

        <div class="textimage_text">
            <div class="textimage_text_content">
                <% if $ShowTitle %>
                    <h2 class="textimage_text_title">$Title</h2>
                <% end_if %>
                $Text
                <% if $ButtonText && $ButtonLink %>
                    <a href="$ButtonLink" class="textimage_text_button readmore">$ButtonText</a>
                <% end_if %>
            </div>
        </div>
    </div>
</div>
