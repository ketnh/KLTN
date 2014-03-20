<?php

/* ::base.html.twig */
class __TwigTemplate_4cfbd71df18a221383c2b8a7c0156947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a1d0043_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a1d0043_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a1d0043_menu_jquery_1.js");
            // line 7
            echo "        <script src=\"http://code.jquery.com/jquery-latest.min.js\"></script>  
        <script type=\"text/javascript\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a1d0043"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a1d0043") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a1d0043.js");
            // line 7
            echo "        <script src=\"http://code.jquery.com/jquery-latest.min.js\"></script>  
        <script type=\"text/javascript\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        
         ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "30212c8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_30212c8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/30212c8_styles_1.css");
            // line 13
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "30212c8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_30212c8_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/30212c8_style_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "30212c8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_30212c8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/30212c8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    </head>


<body>

<div class=\"wrapper\">

\t<header class=\"header\">\t\t
\t</header><!-- .header-->
        <div class=\"sidebar\">
            <p>
                Xin chào    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "
                <a href =\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" id=\"right\">Đăng xuất</a>
            </p>
        </div>
\t<div class=\"middle\">

\t\t<div class=\"container\">
\t\t\t<main class=\"content\">
                            ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t\t\t</main><!-- .content -->
\t\t</div><!-- .container-->

\t\t<aside class=\"left-sidebar\">
\t\t\t<div id='cssmenu'>
                        <ul>
                           <li class='active'><a href='index.html'><span>Home</span></a></li>
                           <li class='has-sub'><a href='#'><span>Hồ sơ</span></a>
                              <ul>
                                 <li><a href='#'><span>Đã tiếp nhận</span></a></li>
                                 <li><a href='#'><span>Chờ tiếp nhận</span></a></li>
                                 <li><a href='#'><span>Quá hạn</span></a></li>
                                 <li class='last'><a href='#'><span>Đã chuyển thụ lý</span></a></li>
                              </ul>
                           </li>
                           <li class='has-sub'><a href='#'><span>Gửi tin nhắn</span></a>
                              <ul>
                                 <li><a href='#'><span>About</span></a></li>
                                 <li class='last'><a href='#'><span>Location</span></a></li>
                              </ul>
                           </li>
                           <li class='last'><a href='#'><span>Contact</span></a></li>
                        </ul>
                        </div>
\t\t</aside><!-- .left-sidebar -->

\t</div><!-- .middle-->

\t<footer class=\"footer\">
\t\t<strong>Footer:</strong> Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.
\t</footer><!-- .footer -->

</div><!-- .wrapper -->

</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Quản lý hồ sơn ";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 35,  156 => 34,  150 => 5,  110 => 36,  98 => 27,  81 => 15,  61 => 13,  57 => 10,  48 => 8,  45 => 7,  31 => 6,  27 => 5,  21 => 1,  112 => 35,  108 => 34,  99 => 31,  94 => 26,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  75 => 24,  71 => 23,  58 => 13,  54 => 9,  50 => 11,  46 => 10,  41 => 8,  38 => 8,  35 => 7,  29 => 2,);
    }
}
