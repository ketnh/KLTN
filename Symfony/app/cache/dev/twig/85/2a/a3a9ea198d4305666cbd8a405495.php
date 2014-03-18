<?php

/* AcmeKLBundle:Security:login.html.twig */
class __TwigTemplate_852aa3a9ea198d4305666cbd8a405495 extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
<label for=\"username\">Username:</label>
<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
<label for=\"password\">Password:</label>
<input type=\"password\" id=\"password\" name=\"_password\" />
<button type=\"submit\">login</button>
</form>";
    }

    public function getTemplateName()
    {
        return "AcmeKLBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
