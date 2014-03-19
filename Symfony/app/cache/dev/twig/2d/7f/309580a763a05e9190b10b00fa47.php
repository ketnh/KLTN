<?php

/* AcmeKLBundle:Security:login.html.twig */
class __TwigTemplate_2d7f309580a763a05e9190b10b00fa47 extends Twig_Template
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
        echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
    <head>
        <title>Login</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"description\" content=\"Expand, contract, animate forms with jQuery wihtout leaving the page\" />
        <meta name=\"keywords\" content=\"expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript\"/>
\t\t<link rel=\"shortcut icon\" href=\"../favicon.ico\" type=\"image/x-icon\"/>
                
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />
        ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a239de9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a239de9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/a239de9_style_1.css");
            // line 13
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "a239de9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a239de9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/a239de9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 18
        echo " 
\t\t";
        // line 25
        echo "    </head>
    <body>
\t\t<div class=\"wrapper\">
\t\t\t<h1>Khóa luận tốt nghiệp - Dịch vụ công</h1>
\t\t\t<h2>Đại học công nghệ - ĐHQG Hà Nội</h2>
\t\t\t<div class=\"content\">
\t\t\t\t<div id=\"form_wrapper\" class=\"form_wrapper\">
                                        <form class=\"login active\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t<h3>Login</h3>\t
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label>Username:</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label>Password: <a href=\"forgot_password.html\" rel=\"forgot_password\" class=\"forgot linkform\">Forgot your password?</a></label>
\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t</div>
                                                
\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t<div class=\"remember\"><input type=\"checkbox\" /><span>Keep me logged in</span></div>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Login\"/>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<form class=\"forgot_password\">
\t\t\t\t\t\t<h3>Forgot Password</h3>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label>Username or Email:</label>
\t\t\t\t\t\t\t<input type=\"text\" />
\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send reminder\"></input>
\t\t\t\t\t\t\t<a href=\"index.html\" rel=\"login\" class=\"linkform\">Suddenly remebered? Log in here</a>
\t\t\t\t\t\t\t<a href=\"register.html\" rel=\"register\" class=\"linkform\">You don't have an account? Register here</a>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t</div>
\t\t\t<a class=\"back\" href=\"http://tympanus.net/codrops/2011/01/06/animated-form-switching/\">back to the Codrops tutorial</a>
\t\t</div>
\t\t

\t\t<!-- The JavaScript -->
\t\t<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t\t//the form wrapper (includes all forms)
\t\t\t\tvar \$form_wrapper\t= \$('#form_wrapper'),
\t\t\t\t\t//the current form is the one with class active
\t\t\t\t\t\$currentForm\t= \$form_wrapper.children('form.active'),
\t\t\t\t\t//the change form links
\t\t\t\t\t\$linkform\t\t= \$form_wrapper.find('.linkform');
\t\t\t\t\t\t
\t\t\t\t//get width and height of each form and store them for later\t\t\t\t\t\t
\t\t\t\t\$form_wrapper.children('form').each(function(i){
\t\t\t\t\tvar \$theForm\t= \$(this);
\t\t\t\t\t//solve the inline display none problem when using fadeIn fadeOut
\t\t\t\t\tif(!\$theForm.hasClass('active'))
\t\t\t\t\t\t\$theForm.hide();
\t\t\t\t\t\$theForm.data({
\t\t\t\t\t\twidth\t: \$theForm.width(),
\t\t\t\t\t\theight\t: \$theForm.height()
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t//set width and height of wrapper (same of current form)
\t\t\t\tsetWrapperWidth();
\t\t\t\t
\t\t\t\t/*
\t\t\t\tclicking a link (change form event) in the form
\t\t\t\tmakes the current form hide.
\t\t\t\tThe wrapper animates its width and height to the 
\t\t\t\twidth and height of the new current form.
\t\t\t\tAfter the animation, the new form is shown
\t\t\t\t*/
\t\t\t\t\$linkform.bind('click',function(e){
\t\t\t\t\tvar \$link\t= \$(this);
\t\t\t\t\tvar target\t= \$link.attr('rel');
\t\t\t\t\t\$currentForm.fadeOut(400,function(){
\t\t\t\t\t\t//remove class active from current form
\t\t\t\t\t\t\$currentForm.removeClass('active');
\t\t\t\t\t\t//new current form
\t\t\t\t\t\t\$currentForm= \$form_wrapper.children('form.'+target);
\t\t\t\t\t\t//animate the wrapper
\t\t\t\t\t\t\$form_wrapper.stop()
\t\t\t\t\t\t\t\t\t .animate({
\t\t\t\t\t\t\t\t\t\twidth\t: \$currentForm.data('width') + 'px',
\t\t\t\t\t\t\t\t\t\theight\t: \$currentForm.data('height') + 'px'
\t\t\t\t\t\t\t\t\t },500,function(){
\t\t\t\t\t\t\t\t\t\t//new form gets class active
\t\t\t\t\t\t\t\t\t\t\$currentForm.addClass('active');
\t\t\t\t\t\t\t\t\t\t//show the new form
\t\t\t\t\t\t\t\t\t\t\$currentForm.fadeIn(400);
\t\t\t\t\t\t\t\t\t });
\t\t\t\t\t});
\t\t\t\t\te.preventDefault();
\t\t\t\t});
\t\t\t\t
\t\t\t\tfunction setWrapperWidth(){
\t\t\t\t\t\$form_wrapper.css({
\t\t\t\t\t\twidth\t: \$currentForm.data('width') + 'px',
\t\t\t\t\t\theight\t: \$currentForm.data('height') + 'px'
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\t/*
\t\t\t\tfor the demo we disabled the submit buttons
\t\t\t\tif you submit the form, you need to check the 
\t\t\t\twhich form was submited, and give the class active 
\t\t\t\tto the form you want to show
\t\t\t\t*/
\t\t\t\t";
        // line 145
        echo "\t\t\t});
        </script>
    </body>
</html>";
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
        return array (  177 => 145,  69 => 36,  62 => 32,  53 => 25,  50 => 18,  36 => 13,  32 => 12,  19 => 1,);
    }
}
