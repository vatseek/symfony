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
        return array (  52 => 10,  34 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  111 => 37,  107 => 36,  71 => 19,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  139 => 50,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  47 => 9,  28 => 7,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  43 => 6,  40 => 8,  29 => 3,  35 => 5,  26 => 4,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 31,  69 => 25,  62 => 23,  49 => 9,  32 => 9,  101 => 32,  94 => 22,  89 => 20,  85 => 25,  79 => 18,  75 => 23,  68 => 14,  56 => 12,  50 => 10,  27 => 4,  24 => 4,  22 => 3,  87 => 20,  72 => 16,  66 => 24,  55 => 15,  46 => 7,  44 => 12,  41 => 5,  31 => 4,  25 => 3,  21 => 1,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 33,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 5,  39 => 4,  36 => 5,  33 => 6,  30 => 7,);
    }
}