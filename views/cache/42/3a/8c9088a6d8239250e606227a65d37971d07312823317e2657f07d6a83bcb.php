<?php

/* base.html.twig */
class __TwigTemplate_423a8c9088a6d8239250e606227a65d37971d07312823317e2657f07d6a83bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "</head>
<body>
<div id=\"header\" style=\"background-color: #00008b; color: #ffffff; height: 50px;\">";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        echo "</div>
<div id=\"content\">";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
<div id=\"footer\" style=\"text-align: center; background-color: #000000;color: #ffffff; height: 30px;\">
    ";
        // line 13
        $this->displayBlock('footer', $context, $blocks);
        // line 16
        echo "</div>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <link rel=\"stylesheet\" href=\"http://wneedsprojects.com/twig-test/assets/bootstrap/css/bootstrap.css\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
    ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        echo " <h2 style=\"text-align: center;\">welcome to the facebook page</h2> ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        // line 14
        echo "        &copy; Copyright 2014 by <a href=\"http://billalcse.wordpress.com/\">Billal Hossain</a>.
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  75 => 11,  59 => 6,  56 => 5,  53 => 4,  46 => 16,  44 => 13,  35 => 10,  31 => 8,  29 => 4,  24 => 1,  130 => 40,  128 => 39,  126 => 38,  124 => 37,  122 => 36,  120 => 35,  115 => 31,  109 => 30,  107 => 29,  102 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 13,  76 => 21,  72 => 20,  69 => 10,  64 => 18,  62 => 17,  55 => 14,  52 => 13,  39 => 11,  36 => 4,  30 => 3,);
    }
}
