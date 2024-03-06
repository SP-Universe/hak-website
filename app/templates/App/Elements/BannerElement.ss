<div class="section section--banner">
    <div class="section_background">
        <img src="{$Image.FocusFillMax(1200, $Height).Url}" />
    </div>
    <div class="section_content" style="height: {$Height}px">
        <img src="{$Image.FocusFillMax(1200, $Height).Url}" />
        <div class="section_content_text">
            <h4>$Topline</h4>
            <h1>$Title</h1>
        </div>
        <% if $ImageCopyright %><p class="section_content_copyright">$ImageCopyright</p><% end_if %>
    </div>
</div>
