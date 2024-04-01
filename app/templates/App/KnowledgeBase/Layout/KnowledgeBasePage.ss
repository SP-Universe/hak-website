<div class="section section--knowledgebase">
    <div class="section_content">
        <h1 class="section_title">Wissensdatenbank</h1>
        <div class="section_introduction">
            $Introduction
        </div>
        <div class="section_search">
            <p>Suchen: </p>
            <input type="text" placeholder="Suchbegriff eingeben..." data-behaviour="knowledgebase-search">
        </div>
        <div class="section_list">
            <% loop KnowledgeBaseEntries %>
                <a href="$Link" class="knowledge_entry" data-behaviour="knowledgebase-entry" data-title="$Title" data-description="$ShortDescription">
                    <div class="knowledge_entry_image">
                        <% if $Image %><img src="$Image.URL" alt="$Title"><% end_if %>
                    </div>
                    <div class="knowledge_entry_text">
                        <h2 class="knowledge_entry_title">$Title</h2>
                        <p class="knowledge_entry_description">$ShortDescription</p>
                    </div>
                </a>
            <% end_loop %>
        </div>
    </div>
</div>
