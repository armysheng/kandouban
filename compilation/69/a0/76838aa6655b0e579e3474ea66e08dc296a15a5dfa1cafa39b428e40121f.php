<?php

/* pagination.html */
class __TwigTemplate_69a076838aa6655b0e579e3474ea66e08dc296a15a5dfa1cafa39b428e40121f extends Twig_Template
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
        if (((isset($context["pages"]) ? $context["pages"] : null) > 1)) {
            // line 2
            echo "  <ul class=\"pagination\">
    <li><a href=\"/movie/?cmd=";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
            echo "&p=1\">First</a></li>
    ";
            // line 4
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 5
                echo "      <li><a href=\"/movie/?cmd=";
                echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
                echo "&p=";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - 1), "html", null, true);
                echo "\">Prev</a></li>
    ";
            }
            // line 7
            echo "    
    ";
            // line 8
            if (((isset($context["page"]) ? $context["page"] : null) == 1)) {
                // line 9
                echo "      <li><a href=\"/movie/?cmd=";
                echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
                echo "&p=1\">Prev</a></li>
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(6, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 13
                echo "      ";
                if ((((isset($context["page"]) ? $context["page"] : null) - (isset($context["i"]) ? $context["i"] : null)) > 0)) {
                    // line 14
                    echo "        <li><a href=\"/movie/?cmd=";
                    echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
                    echo "&p=";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
    <li class=\"disabled\"><a href=\"/movie/?cmd=";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
            echo "&p=";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</a></li>

    ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                echo "      ";
                if ((((isset($context["page"]) ? $context["page"] : null) + (isset($context["i"]) ? $context["i"] : null)) <= (isset($context["pages"]) ? $context["pages"] : null))) {
                    // line 22
                    echo "        <li><a href=\"/movie/?cmd=";
                    echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
                    echo "&p=";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 24
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
    ";
            // line 26
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["pages"]) ? $context["pages"] : null))) {
                // line 27
                echo "      <li><a href=\"/movie/?cmd=";
                echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
                echo "&p=";
                echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 1), "html", null, true);
                echo "\">Next</a></li>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["pages"]) ? $context["pages"] : null))) {
                // line 31
                echo "      <li><a href=\"/movie/?cmd=";
                echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
                echo "&p=";
                echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null), "html", null, true);
                echo "\">Next</a></li>
    ";
            }
            // line 33
            echo "
    <li><a href=\"/movie/?cmd=";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
            echo "&p=";
            echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null), "html", null, true);
            echo "\">Last</a></li>
  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 34,  136 => 33,  128 => 31,  126 => 30,  123 => 29,  115 => 27,  113 => 26,  110 => 25,  104 => 24,  94 => 22,  87 => 20,  78 => 18,  75 => 17,  69 => 16,  59 => 14,  56 => 13,  52 => 12,  49 => 11,  30 => 5,  24 => 3,  19 => 1,  95 => 26,  92 => 25,  81 => 14,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 5,  55 => 4,  45 => 27,  43 => 9,  38 => 7,  34 => 22,  28 => 4,  26 => 4,  21 => 2,  621 => 327,  619 => 326,  615 => 324,  611 => 322,  594 => 319,  589 => 316,  584 => 314,  579 => 310,  577 => 309,  574 => 308,  570 => 306,  559 => 304,  555 => 303,  551 => 301,  549 => 300,  546 => 299,  542 => 297,  531 => 295,  527 => 294,  523 => 292,  521 => 291,  518 => 290,  514 => 288,  503 => 286,  499 => 285,  495 => 283,  493 => 282,  490 => 281,  486 => 279,  475 => 277,  471 => 276,  467 => 274,  465 => 273,  462 => 272,  458 => 270,  447 => 268,  443 => 267,  439 => 265,  437 => 264,  434 => 263,  430 => 261,  419 => 259,  415 => 258,  411 => 256,  409 => 255,  401 => 252,  391 => 245,  387 => 244,  383 => 243,  379 => 242,  375 => 241,  371 => 240,  367 => 239,  363 => 238,  359 => 237,  355 => 236,  333 => 216,  322 => 214,  318 => 213,  314 => 211,  310 => 209,  306 => 207,  304 => 206,  297 => 204,  293 => 203,  289 => 202,  285 => 201,  281 => 200,  277 => 199,  271 => 196,  267 => 195,  262 => 193,  259 => 192,  241 => 191,  235 => 189,  233 => 188,  91 => 21,  85 => 15,  82 => 44,  41 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
