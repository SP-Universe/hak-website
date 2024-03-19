$ElementalArea

<!--<div class="section section--eventlist">
    <div class="section_content">
        <div class="section_list">
            <% loop $Events %>
                <div class="event_card">
                    <a href="$Link" class="event_image">
                        <% if $Image %>
                            <img class="event_image_content" src="$Image.FocusFill(1000, 300).URL" alt="$Title" />
                        <% else %>
                            <img class="event_image_content placeholder" src="_resources/app/client/icons/events_placeholder.svg" alt="$Title" />
                        <% end_if %>
                        <% if $Imagerights %><p class="event_image_copyright">$Imagerights</p><% end_if %>
                        <p class="event_image_category" style="background-color: {$Category.ColorCode}">$Category.Title</p>
                    </a>
                    <div class="event_text">
                        <a href="$Link"><h2 class="event_text_title">$Title</h2></a>
                        <a href="$Link"><p class="event_text_date">$DateFormatted <% if $Location %>- $Location<% end_if %></p></a>
                        <p class="event_text_summary">$ShortDescription</p>
                    </div>
                </div>
            <% end_loop %>
        </div>
    </div>
</div>-->

<div class="section section--eventlist">
    <div class="section_content">
        <div class="section_title">
        <% if $ShowTitle %><h2>$Title</h2><% end_if %>
        </div>
        <div class="section_eventlist">
            <% loop $Events %>
                <a class="eventlist_item" data-behaviour="eventlist_collapsible">
                    <div class="eventlist_item_date">
                        <span class="eventlist_item_date_day">$Date.DayOfMonth</span>
                        <span class="eventlist_item_date_month">$Date.ShortMonth</span>
                    </div>
                    <div class="eventlist_item_content">
                        <h3>$Title</h3>
                        <p>$Date.Time24 Uhr<% if $EndTime %> - $EndTime.Format("HH:mm")<% end_if %> <% if $Category %>| $Category.Title <% end_if %><% if $Location %>| $Location<% end_if %></p>
                    </div>
                    <div class="eventlist_item_description">
                        <p>$ShortDescription</p>
                    </div>
                </a>
            <% end_loop %>
        </div>
    </div>
</div>
