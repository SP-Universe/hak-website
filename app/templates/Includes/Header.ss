<header <% if URLSegment = 'home' %> class="header_home"<% end_if %>>
    <div class="header_topbar">
        <ul class="header_topbar_menu">
            <% loop $Menu(1) %>
                <% if $MenuPosition == "topbar" %>
                    <li class="topbar_menu_item">
                        <a href="$Link" class="topbar_menu_item_link">$MenuTitle</a>
                    </li>
                <% end_if %>
            <% end_loop %>
        </ul>
    </div>
    <div class="header_nav_wrap">
        <div class="header_nav">
            <div class="nav_brand_wrap">
                <a href="" class="nav_brand">
                    <img src="_resources/app/client/icons/nav_brand.png">
                </a>
            </div>
            <div class="nav_menu">
                <% loop $Menu(1) %>
                    <% if $MenuPosition == "main" %>
                        <a href="$Link" class="nav_link<% if $LinkOrSection == "section" %> nav_link--active<% end_if %>">$MenuTitle</a>
                    <% end_if %>
                <% end_loop %>
                <% loop $Menu(1) %>
                    <% if $MenuPosition == "topbar" %>
                        <a href="$Link" class="nav_link topbar_item">$MenuTitle</a>
                    <% end_if %>
                <% end_loop %>
            </div>
            <div class="nav_button" data-behaviour="toggle-menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                <div class="bar4"></div>
            </div>
        </div>
    </div>
</header>

<% if $URLSegment != "home" %>
    <div class="section section--banner small">
        <div class="section_background">
            <img src=$SiteConfig.HeaderImage.FocusFillMax(1200, 150).Url />
        </div>
        <div class="section_content">
            <img src=$SiteConfig.HeaderImage.FocusFillMax(1200, 150).Url />
            <h1 class="header_title">$Title</h1>
        </div>
    </div>
<% end_if %>
