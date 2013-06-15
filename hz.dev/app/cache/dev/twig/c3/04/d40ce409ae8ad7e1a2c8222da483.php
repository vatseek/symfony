<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c304d40ce409ae8ad7e1a2c8222da483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "</head>
<body>
";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "</body>
</html>";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/user/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"wrapper\">
    <div class=\"logo\"></div>
    ";
        // line 12
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 10,  49 => 9,  34 => 15,  32 => 9,  26 => 4,  21 => 1,  81 => 28,  75 => 25,  69 => 22,  61 => 17,  55 => 14,  51 => 13,  46 => 11,  42 => 5,  39 => 4,  33 => 7,  31 => 6,  28 => 7,);
    }
}
