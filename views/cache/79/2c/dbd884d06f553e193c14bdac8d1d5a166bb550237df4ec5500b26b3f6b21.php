<?php

/* add.html.twig */
class __TwigTemplate_792cdbd884d06f553e193c14bdac8d1d5a166bb550237df4ec5500b26b3f6b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head></head>
<body>
<h3>Your Facebook Information</h3>
<form id=\"graphForm\" action=\"app.php\" method=\"post\">

    <div>
        <label>Facebook ID:</label><input type=\"text\" name=\"fb_id\" id=\"fb_id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" size=\"30px\" height=\"20px\"/>
    </div>

    <div>
        <label>Name:</label><input type=\"text\" name=\"name\" id=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" size=\"30px\" height=\"20px\"/>
    </div>

    <div>
        <label>Gender:</label><input type=\"text\" name=\"gender\" id=\"gender\" value=
        \"";
        // line 17
        if ((array_key_exists("gender", $context) && (!twig_test_empty((isset($context["gender"]) ? $context["gender"] : null))))) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["gender"]) ? $context["gender"] : null), "html", null, true);
            echo "
        ";
        }
        // line 19
        echo "\" size=\"30px\" height=\"20px\"/>
    </div>

    <div>
        <label>User Name:</label><input type=\"text\" name=\"username\" id=\"username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "\" size=\"30px\" height=\"20px\"/>
    </div>
    <div>
        <label>Facebook Link:</label><input type=\"text\" name=\"fb_link\" id=\"fb_link\"  value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\" size=\"30px\" height=\"20px\"/>
        <input type=\"hidden\" name=\"meta\" id=\"meta\"  value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["meta"]) ? $context["meta"] : null), "html", null, true);
        echo "\" size=\"30px\" height=\"20px\"/>
    </div>

    <div>
        <input type=\"submit\" name=\"submit\" value=\"submit\"/>
    </div>

    <input type=\"hidden\" name=\"pagename\" value=\"add\"/>

</form>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  63 => 26,  57 => 23,  51 => 19,  45 => 18,  43 => 17,  35 => 12,  28 => 8,  19 => 1,);
    }
}
