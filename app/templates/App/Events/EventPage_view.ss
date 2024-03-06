<!doctype html>
<html lang="de">
    <head>
        <% base_tag %>
        $MetaTags(false)
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8">
        <title>$Title - $SiteConfig.Title</title>
        <link rel="icon" type="image/png" sizes="32x32" href="_resources/app/client/src/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="_resources/app/client/src/images/favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="_resources/app/client/src/images/safari-pinned-tab.svg" color="#266056">
        <meta name="msapplication-TileColor" content="#266056">
        <meta name="theme-color" content="#266056">
        <link rel="stylesheet" href="_resources/app/client/dist/css/styles.min.css">


        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="{$Title}" />
        <meta name="twitter:url" content="{$Link}" />
        <meta name="twitter:title" content="{$Title} - {$SiteConfig.Title}" />
        <meta name="twitter:description" content="{$Title}" />
        <meta name="twitter:image" content="app/client/images/SocialImage.png" />

        <meta property="og:type" content="website" />
        <meta property="og:title" content="{$Title} - {$SiteConfig.Title}" />
        <meta property="og:description" content="{$Title}" />
        <meta property="og:site_name" content="{$SiteConfig.Title}" />
        <meta property="og:url" content="{$Link}" />
        <meta property="og:image" content="app/client/images/SocialImage.png" />

        <link rel="manifest" href="site.webmanifest" />

        <link rel="apple-touch-icon" sizes="120x120" href="_resources/app/client/icons/apple-touch-icon_120.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="_resources/app/client/icons/apple-touch-icon_180.png" />
        <link rel="mask-icon" href="_resources/app/client/icons/safari-pinned-tab.svg" color="#4E9DAE" />
        <meta name="msapplication-TileColor" content="#d54f27" />
        <link rel="apple-touch-icon" sizes="180x180" href="_resources/app/client/icons/safari-pinned-tab.svg" />
        <link rel="icon" type="image/png" sizes="32x32" href="_resources/app/client/icons/favicon_32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="_resources/app/client/icons/favicon_16.png" />
    </head>
    <body>
        <div class="area_header">
            <% include Header %>
        </div>

        <% with $Event %>
            <main class="area_content main">
                <% if $Image %>
                    <div class="section section--banner events">
                        <div class="section_background">
                            <img src=$Image.FocusFillMax(1200, 400).Url />
                        </div>
                        <div class="section_content events">
                            <img src=$Image.FocusFillMax(1200, 400).Url />
                            <h1 class="header_title">$Title</h1>
                            <% if $Imagerights %><p class="section_content_copyright">$Imagerights</p><% end_if %>
                        </div>
                    </div>
                <% else %>
                    <div class="section section--banner events">
                        <div class="section_content">
                            <h1 class="header_title">$Title</h1>
                            <% if $Imagerights %><p class="section_content_copyright">$Imagerights</p><% end_if %>
                        </div>
                    </div>
                <% end_if %>
                <div class="section section--eventview">
                    <div class="section_content">
                        <p class="event_date">$DateFormatted <% if $Location %>- $Location<% end_if %></p>
                        $Description
                        <p class="event_category" style="background-color: {$Category.ColorCode}">$Category.Title</p>
                    </div>
                </div>

            </main>
        <% end_with %>
        <div class="area_footer">
            <% include Footer %>
        </div>

        <script src="_resources/app/client/dist/js/main.js"></script>
    </body>
</html>