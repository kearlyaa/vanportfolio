<?php

/* default.html.twig */
class __TwigTemplate_0b7832de9149bbc98541f5dbc1191a3571fd7cb6dbfa13ab8c3552a8b4c0c7e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<a id=\"hero\" href=\"#\" style=\"visibility: hidden;\"></a>
 <section id=\"styles\" style=\"padding: 90px 0 72px; background: #fff;\">
  <div class=\"row\">
   ";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
 </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}
{% block content %}
<a id=\"hero\" href=\"#\" style=\"visibility: hidden;\"></a>
 <section id=\"styles\" style=\"padding: 90px 0 72px; background: #fff;\">
  <div class=\"row\">
   {{ page.content }}
 </div>
</section>
{% endblock %}
";
    }
}
