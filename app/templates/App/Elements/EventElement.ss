<div class="section section--eventlist">
    <div class="section_content">
        <div class="section_title">
        <% if $ShowTitle %><h2>$Title</h2><% end_if %>
        </div>
        <div class="section_eventlist">
            <% loop $Events.Limit(3) %>
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
        <a href="$AllEventsOverviewLink" class="section_allevents">Alle Veranstaltungen →</a>
    </div>
</div>
