<?php

/* AcmeKLBundle:Template:home.html.twig */
class __TwigTemplate_2cce959556230dd008ea8d1498b229eb extends Twig_Template
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
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSearch"]) ? $context["formSearch"] : $this->getContext($context, "formSearch")), 'form');
        echo "

";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "  
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tttl"), 'label');
        echo "
";
        // line 13
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
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hstthc"]) ? $context["hstthc"] : $this->getContext($context, "hstthc")));
        foreach ($context['_seq'] as $context["_key"] => $context["hs"]) {
            // line 24
            echo "    <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idhosotthc"), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idcongdan"), "name"), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idtthc"), "nametthc"), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "iddonvithuly"), "namedonvithuly"), "html", null, true);
            echo "</td>    
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idtinhtrangthuly"), "tinhtrangthuly"), "html", null, true);
            echo "</td>   
        
        <td>";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hstthc"), $this->getAttribute((isset($context["hs"]) ? $context["hs"] : $this->getContext($context, "hs")), "idhosotthc"), array(), "array"), 'widget');
            echo "</td>
    </tr>    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        
</table>
";
        // line 35
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
        return array (  112 => 35,  108 => 33,  99 => 31,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  75 => 24,  71 => 23,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  41 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}
