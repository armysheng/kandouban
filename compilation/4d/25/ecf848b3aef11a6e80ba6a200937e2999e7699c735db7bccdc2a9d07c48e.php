<?php

/* layout.html */
class __TwigTemplate_4d25ecf848b3aef11a6e80ba6a200937e2999e7699c735db7bccdc2a9d07c48e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "</head>
<body>
<div class=\"container\">
    <div class=\"header\">
        <h2 class=\"logo\"><a href=\"/\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["SITENAME"]) ? $context["SITENAME"] : null), "html", null, true);
        echo "</a></h2>
        <p>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["SUBNAME"]) ? $context["SUBNAME"] : null), "html", null, true);
        echo "</p>
    </div>
    ";
        // line 25
        $this->displayBlock('container', $context, $blocks);
        // line 27
        echo "    <div class=\"footer text-right\">
        <p>本网站域名由<a target=\"_blank\" href=\"http://phpor.me\">phpor.me站长</a>赞助</p>
    </div>
</div>
<div style=\"display:none\"><script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id='cnzz_stat_icon_1252941534'%3E%3C/span%3E%3Cscript src='\" + cnzz_protocol + \"s19.cnzz.com/z_stat.php%3Fid%3D1252941534' type='text/javascript'%3E%3C/script%3E\"));</script></div>
</body>
</html>";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["TITLE"]) ? $context["TITLE"] : null), "html", null, true);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["STATIC_URL_PATH"]) ? $context["STATIC_URL_PATH"] : null), "html", null, true);
        echo "/img/favicon.png\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["STATIC_URL_PATH"]) ? $context["STATIC_URL_PATH"] : null), "html", null, true);
        echo "/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["STATIC_URL_PATH"]) ? $context["STATIC_URL_PATH"] : null), "html", null, true);
        echo "/css/default.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["STATIC_URL_PATH"]) ? $context["STATIC_URL_PATH"] : null), "html", null, true);
        echo "/js/html5shiv.min.js\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["STATIC_URL_PATH"]) ? $context["STATIC_URL_PATH"] : null), "html", null, true);
        echo "/js/respond.min.js\"></script>
        <![endif]-->
    ";
    }

    // line 25
    public function block_container($context, array $blocks = array())
    {
        // line 26
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  92 => 25,  81 => 14,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 5,  55 => 4,  45 => 27,  43 => 25,  38 => 23,  34 => 22,  28 => 18,  26 => 4,  21 => 1,  621 => 327,  619 => 326,  615 => 324,  611 => 322,  594 => 319,  589 => 316,  584 => 314,  579 => 310,  577 => 309,  574 => 308,  570 => 306,  559 => 304,  555 => 303,  551 => 301,  549 => 300,  546 => 299,  542 => 297,  531 => 295,  527 => 294,  523 => 292,  521 => 291,  518 => 290,  514 => 288,  503 => 286,  499 => 285,  495 => 283,  493 => 282,  490 => 281,  486 => 279,  475 => 277,  471 => 276,  467 => 274,  465 => 273,  462 => 272,  458 => 270,  447 => 268,  443 => 267,  439 => 265,  437 => 264,  434 => 263,  430 => 261,  419 => 259,  415 => 258,  411 => 256,  409 => 255,  401 => 252,  391 => 245,  387 => 244,  383 => 243,  379 => 242,  375 => 241,  371 => 240,  367 => 239,  363 => 238,  359 => 237,  355 => 236,  333 => 216,  322 => 214,  318 => 213,  314 => 211,  310 => 209,  306 => 207,  304 => 206,  297 => 204,  293 => 203,  289 => 202,  285 => 201,  281 => 200,  277 => 199,  271 => 196,  267 => 195,  262 => 193,  259 => 192,  241 => 191,  235 => 189,  233 => 188,  91 => 49,  85 => 15,  82 => 44,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
