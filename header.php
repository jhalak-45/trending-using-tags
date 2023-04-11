  <div class="container py-0  mr-0 mx-auto px-0 bg-light text-nowrap d-flex justify-content-start " style="overflow: hidden;">
        <h4 class="h4  px-2 tag-title  text-white   text-nowrap py-2 text-center" style="width:auto;opacity:0.9"> <i class="bx mr-0 bxl-drupal align-middle" style="font-size:28px;"></i> Trending</h4>
        <div class="tags overflow-scroll w-100">
            <?php

            $tags = get_tags();
            $html = '<div class="post_tags  text-capitalize w-100 pr-2">';
            foreach ($tags as $tag) {
                $tag_link = get_tag_link($tag->term_id);

                $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} nav-link tag-item align-middle'>";
                $html .= "# {$tag->name}</a>";
            }
            $html .= '</div>';
            echo $html;
            ?>
        </div>
    </div>
