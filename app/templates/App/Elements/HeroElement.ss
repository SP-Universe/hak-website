<div class="section section--hero hero--image">
    <div class="section_content">
        <% if $ShowTitle %><h2 class="section_title">$Title</h2><% end_if %>
        <div class="section_slider">
            <div class="swiper swiper--image">
                <div class="swiper-wrapper">
                    <% loop $Slides %>
                        <div class="swiper-slide">
                            <% if $YoutubeLink %>
                                <iframe class="slide_image" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/{$YoutubeLink}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <% else %>
                                <a data-gallery="gallery" data-glightbox="description: $Title" data-caption="$Title" class="slide_image" href="$Image.FitMax(2000,2000).URL">
                                    <img src="$Image.FocusFill(1200,600).Url" alt="$Title" />
                                </a>
                            <% end_if %>
                        </div>
                    <% end_loop %>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--hero hero--navigation">
    <div class="section_content">
        <div class="section_slider">
            <div class="swiper swiper--text">
                <div class="swiper-wrapper">
                    <% loop $Slides %>
                        <div class="swiper-slide">
                            <p>$Title</p>
                        </div>
                    <% end_loop %>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>
