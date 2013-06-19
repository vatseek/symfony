<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_6fb8743d1a1d13328b319eab5df9e65f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommandations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  782 => 186,  774 => 182,  771 => 181,  766 => 179,  758 => 175,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  688 => 148,  685 => 147,  680 => 145,  672 => 139,  670 => 138,  669 => 137,  668 => 136,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  639 => 123,  635 => 122,  631 => 121,  627 => 120,  622 => 119,  616 => 117,  613 => 116,  611 => 115,  608 => 114,  592 => 110,  590 => 109,  571 => 104,  569 => 103,  566 => 102,  549 => 98,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  502 => 89,  497 => 87,  488 => 82,  485 => 81,  482 => 80,  476 => 78,  466 => 75,  463 => 74,  450 => 72,  448 => 71,  438 => 69,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  405 => 58,  364 => 41,  356 => 37,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  329 => 26,  323 => 24,  316 => 22,  295 => 16,  290 => 14,  287 => 13,  269 => 5,  267 => 4,  260 => 330,  256 => 328,  254 => 327,  250 => 325,  238 => 319,  236 => 313,  233 => 312,  226 => 298,  215 => 285,  213 => 274,  210 => 273,  205 => 267,  200 => 262,  197 => 261,  192 => 251,  184 => 239,  179 => 222,  146 => 178,  129 => 145,  124 => 129,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  369 => 43,  334 => 27,  293 => 118,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  248 => 324,  240 => 92,  221 => 85,  219 => 84,  195 => 252,  150 => 55,  191 => 69,  178 => 66,  175 => 65,  172 => 62,  118 => 49,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 180,  756 => 174,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 146,  679 => 453,  675 => 452,  671 => 451,  667 => 135,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 108,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 88,  188 => 68,  170 => 84,  153 => 56,  385 => 160,  382 => 48,  376 => 169,  367 => 42,  359 => 153,  354 => 151,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  317 => 135,  311 => 20,  308 => 130,  292 => 15,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 6,  270 => 110,  261 => 105,  251 => 97,  249 => 100,  244 => 322,  242 => 96,  237 => 93,  228 => 305,  225 => 87,  223 => 297,  218 => 286,  206 => 77,  204 => 76,  180 => 63,  159 => 193,  148 => 46,  363 => 155,  357 => 152,  353 => 36,  351 => 150,  344 => 119,  332 => 116,  327 => 141,  324 => 139,  321 => 23,  318 => 111,  315 => 110,  306 => 107,  303 => 128,  300 => 105,  291 => 102,  288 => 116,  274 => 97,  265 => 107,  263 => 95,  255 => 103,  243 => 93,  231 => 306,  212 => 79,  202 => 265,  190 => 242,  185 => 67,  174 => 214,  20 => 1,  348 => 153,  346 => 321,  343 => 320,  299 => 278,  297 => 104,  63 => 18,  113 => 38,  65 => 17,  161 => 199,  134 => 158,  100 => 39,  58 => 14,  127 => 28,  110 => 38,  102 => 30,  90 => 27,  76 => 31,  77 => 25,  59 => 13,  53 => 11,  104 => 87,  97 => 23,  81 => 40,  23 => 1,  34 => 5,  480 => 162,  474 => 77,  469 => 76,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 70,  437 => 147,  435 => 68,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 59,  402 => 57,  398 => 129,  393 => 52,  387 => 50,  384 => 49,  381 => 120,  379 => 47,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 149,  337 => 103,  322 => 138,  314 => 21,  312 => 129,  309 => 108,  305 => 125,  298 => 121,  294 => 90,  285 => 115,  283 => 100,  278 => 8,  268 => 85,  264 => 3,  258 => 329,  252 => 326,  247 => 78,  241 => 321,  235 => 89,  229 => 87,  224 => 81,  220 => 295,  214 => 69,  208 => 268,  169 => 207,  143 => 43,  140 => 58,  132 => 51,  128 => 49,  119 => 114,  107 => 37,  71 => 19,  38 => 7,  177 => 64,  165 => 60,  160 => 61,  135 => 47,  126 => 144,  114 => 108,  84 => 41,  70 => 19,  67 => 18,  61 => 2,  28 => 3,  93 => 28,  88 => 30,  78 => 24,  26 => 3,  196 => 92,  183 => 70,  171 => 213,  166 => 206,  163 => 82,  158 => 62,  156 => 192,  151 => 185,  142 => 63,  138 => 62,  136 => 165,  121 => 128,  117 => 39,  105 => 34,  91 => 56,  62 => 16,  49 => 12,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  27 => 3,  24 => 3,  87 => 26,  46 => 10,  44 => 8,  31 => 4,  25 => 35,  21 => 2,  19 => 1,  79 => 32,  72 => 21,  69 => 13,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 323,  157 => 56,  145 => 74,  139 => 166,  131 => 157,  123 => 42,  120 => 20,  115 => 40,  111 => 107,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 33,  74 => 22,  66 => 12,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 5,  29 => 4,  209 => 79,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 241,  182 => 223,  176 => 220,  173 => 85,  168 => 61,  164 => 200,  162 => 59,  154 => 186,  149 => 179,  147 => 54,  144 => 173,  141 => 172,  133 => 55,  130 => 46,  125 => 51,  122 => 41,  116 => 113,  112 => 39,  109 => 102,  106 => 101,  103 => 25,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 26,  80 => 24,  73 => 20,  64 => 3,  60 => 20,  57 => 16,  54 => 15,  51 => 13,  48 => 11,  45 => 11,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
