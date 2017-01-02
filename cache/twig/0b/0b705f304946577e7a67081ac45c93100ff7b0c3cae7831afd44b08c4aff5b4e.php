<?php

/* home.html.twig */
class __TwigTemplate_a9d1965e91d40dcf8ac9c8341012199e17fcfe8e6c1722887b47056eb104cc80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"container\">
\t\t
\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Home</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>About</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/lost_brothers.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Blog</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/stadium_selfie.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Contact</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/stained_glass_flower.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Resume</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/stained_glass_windows.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Music</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Volunteering</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Interests</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Social_Media</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>
\t\t
\t\t<div class=\"clear\"></div>

\t\t<style>
\t\t\t
\t\t\t.nav_square_link h2{
\t\t\t\tcolor: #ffffff;
\t\t\t\tposition: absolute;
\t\t\t  top: 50%;
\t\t\t  left: 50%;
\t\t\t  transform: translate(-50%, -50%);
\t\t\t  z-index: 101;
\t\t\t}

\t\t\t.clear{
\t\t\t\tclear:both;\t
\t\t\t}

\t\t\ta.nav_square_link{
\t\t\t\tdisplay: block;
\t\t\t\tline-height: 0;
\t\t\t}

\t\t\t.nav_square:hover{
\t\t\t\tcursor: pointer;
\t\t\t}

\t\t\t.nav_square{
\t\t\t\tdisplay: block;
\t\t\t\tfloat: left;
\t\t\t\twidth: 33%;
\t\t\t\tz-index: 1;
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.dark_overlay{
\t\t\t\tbackground: url(\"assets/black.png\") repeat;
\t\t\t\topacity: 1;
\t\t\t\theight: 100%;
\t\t\t\twidth: 100%;
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\tz-index: 100;
\t\t\t\ttransition: opacity .5s ease-in-out;
\t\t\t   -moz-transition: opacity .5s ease-in-out;
\t\t\t   -webkit-transition: opacity .5s ease-in-out;
\t\t\t\t/*align-items: stretch;*/
\t\t\t}

\t\t\t.dark_overlay:hover{\t\t\t
\t\t\t   opacity: 0;
\t\t\t}

\t\t\t/** TODO: create breakpoints for mobile homepage, images should stack when width is too short **/

\t\t</style>

\t</div>
\t";
        // line 136
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 136,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}

{% block content %}
\t<div id=\"container\">
\t\t
\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Home</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>About</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/lost_brothers.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Blog</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/stadium_selfie.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Contact</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/stained_glass_flower.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Resume</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/stained_glass_windows.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Music</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Volunteering</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Interests</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>

\t\t<div class=\"nav_square\">
\t\t\t<div class=\"dark_overlay\"></div>
\t\t\t<a class=\"nav_square_link\" href=\"\">
\t\t\t\t<h2>Social_Media</h2>
\t\t\t\t<img class=\"nav_square_img\" src=\"assets/steak_frites.jpg\" />
\t\t\t</a>
\t\t</div>
\t\t
\t\t<div class=\"clear\"></div>

\t\t<style>
\t\t\t
\t\t\t.nav_square_link h2{
\t\t\t\tcolor: #ffffff;
\t\t\t\tposition: absolute;
\t\t\t  top: 50%;
\t\t\t  left: 50%;
\t\t\t  transform: translate(-50%, -50%);
\t\t\t  z-index: 101;
\t\t\t}

\t\t\t.clear{
\t\t\t\tclear:both;\t
\t\t\t}

\t\t\ta.nav_square_link{
\t\t\t\tdisplay: block;
\t\t\t\tline-height: 0;
\t\t\t}

\t\t\t.nav_square:hover{
\t\t\t\tcursor: pointer;
\t\t\t}

\t\t\t.nav_square{
\t\t\t\tdisplay: block;
\t\t\t\tfloat: left;
\t\t\t\twidth: 33%;
\t\t\t\tz-index: 1;
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.dark_overlay{
\t\t\t\tbackground: url(\"assets/black.png\") repeat;
\t\t\t\topacity: 1;
\t\t\t\theight: 100%;
\t\t\t\twidth: 100%;
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\tz-index: 100;
\t\t\t\ttransition: opacity .5s ease-in-out;
\t\t\t   -moz-transition: opacity .5s ease-in-out;
\t\t\t   -webkit-transition: opacity .5s ease-in-out;
\t\t\t\t/*align-items: stretch;*/
\t\t\t}

\t\t\t.dark_overlay:hover{\t\t\t
\t\t\t   opacity: 0;
\t\t\t}

\t\t\t/** TODO: create breakpoints for mobile homepage, images should stack when width is too short **/

\t\t</style>

\t</div>
\t{{ page.content }}
\t
{% endblock %}


";
    }
}
