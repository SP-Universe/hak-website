<div class="section section--banner">
    <div class="section_background">
        <img src="{$Image.FocusFillMax(1200, $Height).Url}" />
    </div>
    <div class="section_content" style="height: {$Height}px">
        <img src="{$Image.FocusFillMax(1200, $Height).Url}" />
        <div class="section_text">
            <% if $SubTitle %><h3>{$SubTitle}</h3><% end_if %>
            <% if $Title && $ShowTitle %><h2>{$Title}</h2><% end_if %>
        </div>
    </div>
</div>
