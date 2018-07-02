<?php get_header(); ?>

<!--About Me-->
<div id="aboutme">
    <img src="<?php echo get_template_directory_uri() . '/img/info.png'; ?>" draggable="false" id="aboutmeimg">
    <div id="cover_about_me_img"></div>
</div>
<!--Tools-->
<div id="tools" style="">
    <div id="tools_description">
        <p>Narzędzia jakimi się posługuję
        </p>
    </div>

    <div id="tools_left_margin"></div>
    <div class="tools_margin">
        <div class="circle" id="circle1" style="background: url('<?php echo get_template_directory_uri() . "/img/photoshop-icon2.svg"; ?>');background-size: 100%"></div>
    </div>
    <div class="tools_margin">
        <div class="circle" id="circle2" style="background: url('<?php echo get_template_directory_uri() . "/img/illustrator-icon.svg"; ?>');background-size: 100%"></div>
    </div>
    <div class="tools_margin">
        <div class="circle" id="circle3" style="background: url('<?php echo get_template_directory_uri() . "/img/indesign-icon.svg"; ?>');background-size: 100%"></div>
    </div>
    <div class="tools_margin">
        <div class="circle" id="circle4" style="background: url('<?php echo get_template_directory_uri() . "/img/blender-icon2.svg"; ?>');background-size: 100%"></div>
    </div>
    <div class="tools_margin">
        <div class="circle" id="circle5" style="background: url('<?php echo get_template_directory_uri() . "/img/tablet-icon.svg"; ?>');background-size: 100%"></div>
    </div>
    <div class="tools_margin">
        <div class="circle" id="circle6" style="background: url('<?php echo get_template_directory_uri() . "/img/more-icon.svg"; ?>');background-size: 100%"></div>
    </div>
    <div id="tools_right_margin"></div>
</div>
<!--Skills-->
<div id="skills">
    <div id="skills_description">
        <p>
            Umiejętności
        </p>
    </div>
    <!------------->
    <div class="flex-wrapper">
        <div class="single-chart">
            <a href="">
            <svg viewbox="0 0 36 36" class="circular-chart orange">
                <path class="circle-bg"
                      d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                ></path>
                <path class="skills-circle"
                      stroke-dasharray="75, 100"
                      d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                ></path>
                <text x="18" y="20.35" class="percentage">75%</text>
            </svg>
            </a>
        </div>

        <div class="single-chart">
            <svg viewbox="0 0 36 36" class="circular-chart green">
                <path class="circle-bg"
                      d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                ></path>
                <path class="skills-circle"
                      stroke-dasharray="80, 100"
                      d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                ></path>
                <text x="18" y="20.35" class="percentage">80%</text>
            </svg>
        </div>

        <div class="single-chart">
            <svg viewbox="0 0 36 36" class="circular-chart blue">
                <path class="circle-bg"
                      d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                ></path>
                <path class="skills-circle"
                      stroke-dasharray="60, 100"
                      d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                ></path>
                <text x="18" y="20.35" class="percentage">60%</text>
            </svg>
        </div>
        <div class="single-chart">
            <svg viewbox="0 0 36 36" class="circular-chart violet">
                <path class="circle-bg"
                      d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                ></path>
                <path class="skills-circle"
                      stroke-dasharray="65, 100"
                      d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                ></path>
                <text x="18" y="20.35" class="percentage">65%</text>
            </svg>
        </div>
    </div>
    <!------------->
</div>


<?php get_footer(); ?>