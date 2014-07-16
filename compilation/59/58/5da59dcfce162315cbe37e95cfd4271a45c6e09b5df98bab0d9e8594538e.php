<?php

/* movie-list.html */
class __TwigTemplate_59585da59dcfce162315cbe37e95cfd4271a45c6e09b5df98bab0d9e8594538e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
  <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["STATIC_URL_PATH"]) ? $context["STATIC_URL_PATH"] : null), "html", null, true);
        echo "/jQuery/jQuery-1.11.1.min.js\"></script>
  <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["STATIC_URL_PATH"]) ? $context["STATIC_URL_PATH"] : null), "html", null, true);
        echo "/jQuery/jQuery-Cookie.js\"></script>
  <script>
  \$(function() {
    \$(\".movie-list  tbody  tr  td  a\").click(function(event) {
      event.stopPropagation();
    })
    \$(\".movie-list > tbody > tr\").click(function() {
      if( !\$(this).next(\"tr\").hasClass(\"hide\") ) {
        \$(this).next(\"tr\").addClass(\"hide\");
      }else {
        \$(this).next(\"tr\").removeClass(\"hide\");
      }
    });
    \$(\".movie-info\").click(function() {
      \$(this).addClass(\"hide\");
    });
    if (\$.cookie(\"cmd_keys\")==\"on\") {
      \$(\".command-keys\").removeClass(\"hide\");
      \$(\".show-command-keys-btn\").text(\"隐藏键名列表\");
    }
    \$(\".show-command-keys-btn\").click(function(event) {
      event.preventDefault();
      var \$command_keys = \$(\".command-keys\");

      if( \$command_keys.hasClass(\"hide\") ) {
        \$command_keys.removeClass(\"hide\");
        \$(this).text(\"隐藏键名列表\");
        \$.cookie(\"cmd_keys\", \"on\", { expires: 7, path: \"/\" });
      } else {
        \$command_keys.addClass(\"hide\");
        \$.cookie(\"cmd_keys\", \"off\", { expires: 7, path: \"/\" });
        \$(this).text(\"展开键名列表\");
      }
    })
  })
  </script>  
";
    }

    // line 44
    public function block_container($context, array $blocks = array())
    {
        // line 45
        echo "<div class=\"main\">
  <div class=\"search-bar\">
    <form action=\"/movie/\" method=\"get\">
        <div class=\"input-group\">
          <input type=\"text\" spellcheck=\"false\" class=\"form-control command\" baidusug=\"1\" placeholder=\"\" autofocus=\"\" name=\"cmd\" autocomplete=\"off\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["command"]) ? $context["command"] : null), "html", null, true);
        echo "\" >
          <span class=\"input-group-btn\">
            <button class=\"btn btn-default btn-primary\" type=\"submit\">
              <span class=\"glyphicon glyphicon-print\"></span>&nbsp;执行
            </button>
          </span> 
        </div>
      </form>    
  </div>
  <div class=\"command-help\">
    <a href=\"/\" class=\"show-command-keys-btn\">展开键名列表</a>
    <a href=\"/doc\" target=\"_blank\">搜索指令手册</a>
  </div>
  <div class=\"command-keys row hide\">
    <div class=\"col-md-4\">
    <ul>
      <li>
        <b>name</b>
        <span>名称</span>
      </li>     
      <li>
        <b>average</b>
        <span>评分</span>
      </li>           
      <li>
        <b>vote</b>
        <span>投票人数</span>
      </li>      
      <li>
        <b>runtime</b>
        <span>片长</span>
      </li> 
      <li>
        <b>watched</b>
        <span>已看人数</span>
      </li> 
      <li>
        <b>wish</b>
        <span>想看人数</span>
      </li> 
      <li>
        <b>comment</b>
        <span>短评数</span>
      </li> 
      <li>
        <b>question</b>
        <span>提问数</span>
      </li> 
      <li>
        <b>review</b>
        <span>影评数</span>
      </li> 
      <li>
        <b>discussion</b>
        <span>讨论数</span>
      </li> 
      <li>
        <b>image</b>
        <span>图片数</span>
      </li> 
      <li>
        <b>channel</b>
        <span>频道</span>
      </li>
    </ul>
    </div>
    <div class=\"col-md-4\">
    <ul>       
      <li>
        <b>directors</b>
        <span>导演</span>
      </li> 
      <li>
        <b>actors</b>
        <span>主演</span>
      </li> 
      <li>
        <b>languages</b>
        <span>语言</span>
      </li> 
      <li>
        <b>genres</b>
        <span>类型</span>
      </li> 
      <li>
        <b>tags</b>
        <span>标签</span>
      </li> 
      <li>
        <b>countries</b>
        <span>制片国家/地区</span>
      </li>                 
    </ul>
    </div>
    <div class=\"col-md-4\">
    <ul>
      <li>
        <b>\$gte</b>
        <span>大于等于</span>
      </li>   
      <li>
        <b>\$lte</b>
        <span>小于等于</span>
      </li>  
      <li>
        <b>\$lt</b>
        <span>小于</span>
      </li>
      <li>
        <b>\$gt</b>
        <span>大于</span>
      </li> 
      <li>
        <b>\$in</b>
        <span>含指定选项任意值</span>
      </li>      
      <li>
        <b>\$all</b>
        <span>含指定选项所有值</span>
      </li>       
    </ul>
    </div>
  </div>
  <table class=\"table table-hover movie-list\">
      <thead>
        <tr>
          <th>编号</th>
          <th>名字</th>
          <th>评分</th>
          <th>投票数</th>
          <th>影评数</th>
          <th>片长</th>
          <th>已看人数</th>
          <th>年份</th>
          <th>频道</th>
          <th>类型</th>
        </tr>
      </thead>
    <tbody>
      ";
        // line 188
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 189
            echo "        <tr><td colspan=\"10\" class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</td></tr>
      ";
        } else {
            // line 191
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                // line 192
                echo "        <tr>
          <td>";
                // line 193
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") + ((isset($context["limit"]) ? $context["limit"] : null) * ((isset($context["page"]) ? $context["page"] : null) - 1))), "html", null, true);
                echo "</td>
          <td>
            <a target=\"_blank\" href=\"http://movie.douban.com/subject/";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "subject_id"), "html", null, true);
                echo "/\">
              ";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "name"), "html", null, true);
                echo "
            </a>
          </td>
          <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "average"), "html", null, true);
                echo "</td>
          <td>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "vote"), "html", null, true);
                echo "</td>
          <td>";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "review"), "html", null, true);
                echo "</td>
          <td>";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "runtime"), "html", null, true);
                echo "</td>
          <td>";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "watched"), "html", null, true);
                echo "</td>
          <td><a href='/movie/?cmd={ \"year\":";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "year"), "html", null, true);
                echo " }.{ }'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "year"), "html", null, true);
                echo "</a></td>
          <td>
            ";
                // line 206
                if (($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "channel") == "mv")) {
                    // line 207
                    echo "              <a href='/movie/?cmd={ \"channel\":\"mv\" }.{ }'>电影</a>
            ";
                } elseif (($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "channel") == "tv")) {
                    // line 209
                    echo "              <a href='/movie/?cmd={ \"channel\":\"tv\" }.{ }'>电视剧</a>
            ";
                }
                // line 211
                echo "          </td>
          <td>
            ";
                // line 213
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "genres"));
                foreach ($context['_seq'] as $context["_key"] => $context["gen"]) {
                    // line 214
                    echo "              <a href='/movie/?cmd={ \"genres\":\"";
                    echo twig_escape_filter($this->env, (isset($context["gen"]) ? $context["gen"] : null), "html", null, true);
                    echo "\" }.{ }'>";
                    echo twig_escape_filter($this->env, (isset($context["gen"]) ? $context["gen"] : null), "html", null, true);
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                echo "          </td>        
        </tr>
        <tr class=\"movie-info hide\">
          <td colspan=\"10\">
            <table class=\"table\">
              <thead>
                <tr>
                  <th>评分</th>
                  <th>影评</th>
                  <th>投票</th>
                  <th>年份</th>
                  <th>评论</th>
                  <th>讨论</th>
                  <th>提问</th>
                  <th>图片</th>
                  <th>想看</th>
                  <th>已看</th>
                </tr>
              </thead>
              <tbody>
                <td>";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "average"), "html", null, true);
                echo "</td>
                <td>";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "review"), "html", null, true);
                echo "</td>
                <td>";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "vote"), "html", null, true);
                echo "</td>
                <td>";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "year"), "html", null, true);
                echo "</td>
                <td>";
                // line 240
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "comment"), "html", null, true);
                echo "</td>
                <td>";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "discussion"), "html", null, true);
                echo "</td>
                <td>";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "question"), "html", null, true);
                echo "</td>
                <td>";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "image"), "html", null, true);
                echo "</td>
                <td>";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "wish"), "html", null, true);
                echo "</td>
                <td>";
                // line 245
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "watched"), "html", null, true);
                echo "</td>
              </tbody>
            </table>

            <p>
              <b>名字：</b>
              <a target=\"_blank\" 
              href=\"http://movie.douban.com/subject/";
                // line 252
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "subject_id"), "html", null, true);
                echo "/\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "name"), "html", null, true);
                echo "</a>
            </p>

            ";
                // line 255
                if ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "directors")) {
                    // line 256
                    echo "            <p>
              <b>导演：</b>
              ";
                    // line 258
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "directors"));
                    foreach ($context['_seq'] as $context["_key"] => $context["director"]) {
                        // line 259
                        echo "              <a href='/movie/?cmd={ \"directors\": \"";
                        echo twig_escape_filter($this->env, (isset($context["director"]) ? $context["director"] : null), "html", null, true);
                        echo "\" }.{}'>";
                        echo twig_escape_filter($this->env, (isset($context["director"]) ? $context["director"] : null), "html", null, true);
                        echo "</a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['director'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 261
                    echo "            </p>
            ";
                }
                // line 263
                echo "
            ";
                // line 264
                if ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "actors")) {
                    // line 265
                    echo "            <p>
              <b>主演：</b>
              ";
                    // line 267
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "actors"));
                    foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                        // line 268
                        echo "              <a href='/movie/?cmd={ \"actors\": \"";
                        echo twig_escape_filter($this->env, (isset($context["actor"]) ? $context["actor"] : null), "html", null, true);
                        echo "\" }.{}'>";
                        echo twig_escape_filter($this->env, (isset($context["actor"]) ? $context["actor"] : null), "html", null, true);
                        echo "</a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 270
                    echo "            </p>
            ";
                }
                // line 272
                echo "
            ";
                // line 273
                if ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "genres")) {
                    // line 274
                    echo "            <p>
              <b>类型：</b>
              ";
                    // line 276
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "genres"));
                    foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                        // line 277
                        echo "              <a href='/movie/?cmd={ \"genres\": \"";
                        echo twig_escape_filter($this->env, (isset($context["genre"]) ? $context["genre"] : null), "html", null, true);
                        echo "\" }.{}'>";
                        echo twig_escape_filter($this->env, (isset($context["genre"]) ? $context["genre"] : null), "html", null, true);
                        echo "</a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 279
                    echo "            </p>
            ";
                }
                // line 281
                echo "
            ";
                // line 282
                if ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "languages")) {
                    // line 283
                    echo "            <p>
              <b>语言：</b>
              ";
                    // line 285
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "languages"));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 286
                        echo "              <a href='/movie/?cmd={ \"languages\": \"";
                        echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : null), "html", null, true);
                        echo "\" }.{}'>";
                        echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : null), "html", null, true);
                        echo "</a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 288
                    echo "            </p>
            ";
                }
                // line 290
                echo "
            ";
                // line 291
                if ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "tags")) {
                    // line 292
                    echo "            <p>
              <b>标签：</b>
              ";
                    // line 294
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "tags"));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 295
                        echo "              <a href='/movie/?cmd={ \"tags\": \"";
                        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
                        echo "\" }.{}'>";
                        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
                        echo "</a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 297
                    echo "            </p>
            ";
                }
                // line 299
                echo "
            ";
                // line 300
                if ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "countries")) {
                    // line 301
                    echo "            <p>
              <b>国家：</b>
              ";
                    // line 303
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "countries"));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        // line 304
                        echo "              <a href='/movie/?cmd={ \"countries\": \"";
                        echo twig_escape_filter($this->env, (isset($context["country"]) ? $context["country"] : null), "html", null, true);
                        echo "\" }.{}'>";
                        echo twig_escape_filter($this->env, (isset($context["country"]) ? $context["country"] : null), "html", null, true);
                        echo "</a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 306
                    echo "            </p>
            ";
                }
                // line 308
                echo "
            ";
                // line 309
                if ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "summary")) {
                    // line 310
                    echo "            <p>
              <b>简介：</b>
              <p>
                ";
                    // line 314
                    echo "                ";
                    echo $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "summary");
                    echo "
                ";
                    // line 316
                    echo "              </p>
            </p>
            ";
                }
                // line 319
                echo "
          </td>
        </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            echo "      
      ";
        }
        // line 324
        echo "    </tbody>
  </table>
  ";
        // line 326
        $this->env->loadTemplate("pagination.html")->display($context);
        // line 327
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "movie-list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 327,  619 => 326,  615 => 324,  611 => 322,  594 => 319,  589 => 316,  584 => 314,  579 => 310,  577 => 309,  574 => 308,  570 => 306,  559 => 304,  555 => 303,  551 => 301,  549 => 300,  546 => 299,  542 => 297,  531 => 295,  527 => 294,  523 => 292,  521 => 291,  518 => 290,  514 => 288,  503 => 286,  499 => 285,  495 => 283,  493 => 282,  490 => 281,  486 => 279,  475 => 277,  471 => 276,  467 => 274,  465 => 273,  462 => 272,  458 => 270,  447 => 268,  443 => 267,  439 => 265,  437 => 264,  434 => 263,  430 => 261,  419 => 259,  415 => 258,  411 => 256,  409 => 255,  401 => 252,  391 => 245,  387 => 244,  383 => 243,  379 => 242,  375 => 241,  371 => 240,  367 => 239,  363 => 238,  359 => 237,  355 => 236,  333 => 216,  322 => 214,  318 => 213,  314 => 211,  310 => 209,  306 => 207,  304 => 206,  297 => 204,  293 => 203,  289 => 202,  285 => 201,  281 => 200,  277 => 199,  271 => 196,  267 => 195,  262 => 193,  259 => 192,  241 => 191,  235 => 189,  233 => 188,  91 => 49,  85 => 45,  82 => 44,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
