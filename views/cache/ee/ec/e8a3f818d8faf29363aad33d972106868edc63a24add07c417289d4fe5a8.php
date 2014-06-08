<?php

/* list.html.twig */
class __TwigTemplate_eeece8a3f818d8faf29363aad33d972106868edc63a24add07c417289d4fe5a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
        #graphForm {
            margin-left: 30px;
        }
    </style>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <h4 style=\"text-align: center; font-weight: bold;\">";
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
        echo "</h4>
    <h3 style=\"color: #000000;font-weight: bold; text-align: center;\">Your Facebook User List</h3>
    <table class=\"table table-bordered\"><thead><tr><th>#</th><th>Facebook ID</th><th>Full Name</th><th>Username</th><th>Gender</th><th>Number of Friend</th><th>Facebook Link</th><th>Action</th></tr></thead>
       ";
        // line 17
        $context["i"] = 1;
        // line 18
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 19
            echo "           <tr>
               <td>";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "fb_id"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "username"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "gender"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "friend_count"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "fb_link"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "fb_link"), "html", null, true);
            echo "</a></td>
                <td><a onclick=\"return confirm('Are you sure to delete this Member?')\" href=\"http://wneedsprojects.com/twig-test/app.php?deletedId=";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "id"), "html", null, true);
            echo "\">Delete</a></td>
           </tr>
            ";
            // line 29
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 30
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    </table>

    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        // line 40
        echo "    <button type=\"button\" class=\"btn btn-primary\"><a href=\"http://wneedsprojects.com/twig-test/\" style=\"color: #000000;\">Add New</a></button>


";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  128 => 39,  126 => 38,  124 => 37,  122 => 36,  120 => 35,  115 => 31,  109 => 30,  107 => 29,  102 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  69 => 19,  64 => 18,  62 => 17,  55 => 14,  52 => 13,  39 => 5,  36 => 4,  30 => 3,);
    }
}
