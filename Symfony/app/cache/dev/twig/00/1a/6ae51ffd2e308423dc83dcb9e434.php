<?php

/* AcmeKLBundle:Template:home.html.twig */
class __TwigTemplate_001a6ae51ffd2e308423dc83dcb9e434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Tìm kiếm phân loại hồ sơ ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSearch"]) ? $context["formSearch"] : $this->getContext($context, "formSearch")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSearch"]) ? $context["formSearch"] : $this->getContext($context, "formSearch")), 'errors');
        echo "  
<table>
    <tr>
        <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSearch"]) ? $context["formSearch"] : $this->getContext($context, "formSearch")), "idcongdan"), 'widget');
        echo "</td>
        <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSearch"]) ? $context["formSearch"] : $this->getContext($context, "formSearch")), "Submit"), 'widget');
        echo "</td>
    </tr>
</table>
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSearch"]) ? $context["formSearch"] : $this->getContext($context, "formSearch")), 'form_end');
        echo "


";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "  
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tttl"), 'label');
        echo "
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tttl"), 'widget');
        echo "
<table>
    <tr>
        <td>ID</td>
        <td>Công dân</td>
        <td>TTHC</td>
        <td>Đơn vị thụ lý</td>
        <td>Tình trạng thụ lý</td>
        <td>Action</td>
    </tr>
    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hstthc"]) ? $context["hstthc"] : $this->getContext($context, "hstthc")));
        foreach ($context['_seq'] as $context["_key"] => $context["hs"]) {
            // line 30
            echo "    <tr>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idhosotthc"), "html", null, true);
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idcongdan"), "name"), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idtthc"), "nametthc"), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "iddonvithuly"), "namedonvithuly"), "html", null, true);
            echo "</td>    
        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idtinhtrangthuly"), "tinhtrangthuly"), "html", null, true);
            echo "</td>   
        
        <td>";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hstthc"), $this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idhosotthc"), array(), "array"), 'widget');
            echo "</td>
    </tr>    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        
</table>
";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeKLBundle:Template:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  129 => 39,  120 => 37,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  96 => 30,  92 => 29,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  61 => 13,  55 => 10,  51 => 9,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
