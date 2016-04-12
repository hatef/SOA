<?php

/* index.html */
class __TwigTemplate_e350bb40c942245f016b03025bc4ec987cb7132ed0d98edb213de2088c0b631f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en-us\" ng-app=\"myApp\" >
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hatef Shamshiri - Sign Up</title>

    <!-- Bootstrap -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/normalize.css\">
    <link href=\"css/site.css\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

    <div ng-controller=\"MainController as main\">
        <div ng-repeat=\"content in contents\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subject", array()), "html", null, true);
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array()), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div ng-controller=\"CreateController as createCtrl\">
        <form method=\"post\"  ng-submit=\"create()\" novalidate>
            <div class=\"form-group\">
                <label for=\"subject\">Subject: </label>
                <input type=\"text\" name=\"subject\" id=\"subject\" ng-model=\"form.subject\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label for=\"content\">Content: </label>
                <textarea name=\"content\" id=\"content\" cols=\"30\" rows=\"10\" ng-model=\"form.content\" class=\"form-control\"></textarea>
            </div>
            <input type=\"submit\" value=\"Create\" class=\"btn btn-primary\">
        </form>
    </div>

Login:

    <div ng-controller=\"LoginController as loginCtrl\">
        <form  name=\"loginForm\" method=\"post\"  ng-submit=\"login()\" novalidate>
            <div class=\"form-group\">
                <label for=\"subject\">Email: </label>
                <input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\" ng-model=\"loginForm.email\">
            </div>
            <div class=\"form-group\">
                <label for=\"content\">Password: </label>
                <input type=\"password\" name=\"password\" id=\"password\" cols=\"30\" rows=\"10\"  class=\"form-control\" ng-model=\"loginForm.password\"/>
            </div>
            <input type=\"submit\" value=\"Create\" class=\"btn btn-primary\">
        </form>
    </div>
";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["MyName"]) ? $context["MyName"] : null), "html", null, true);
        echo "


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

<script src=\"js/angular.min.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/app.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 62,  52 => 29,  46 => 26,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en-us" ng-app="myApp" >*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>Hatef Shamshiri - Sign Up</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="css/normalize.css">*/
/*     <link href="css/site.css">*/
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* */
/*     <div ng-controller="MainController as main">*/
/*         <div ng-repeat="content in contents">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2">{{content.subject}}</div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2">{{content.content}}</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div ng-controller="CreateController as createCtrl">*/
/*         <form method="post"  ng-submit="create()" novalidate>*/
/*             <div class="form-group">*/
/*                 <label for="subject">Subject: </label>*/
/*                 <input type="text" name="subject" id="subject" ng-model="form.subject" class="form-control">*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="content">Content: </label>*/
/*                 <textarea name="content" id="content" cols="30" rows="10" ng-model="form.content" class="form-control"></textarea>*/
/*             </div>*/
/*             <input type="submit" value="Create" class="btn btn-primary">*/
/*         </form>*/
/*     </div>*/
/* */
/* Login:*/
/* */
/*     <div ng-controller="LoginController as loginCtrl">*/
/*         <form  name="loginForm" method="post"  ng-submit="login()" novalidate>*/
/*             <div class="form-group">*/
/*                 <label for="subject">Email: </label>*/
/*                 <input type="text" name="email" id="email" class="form-control" ng-model="loginForm.email">*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="content">Password: </label>*/
/*                 <input type="password" name="password" id="password" cols="30" rows="10"  class="form-control" ng-model="loginForm.password"/>*/
/*             </div>*/
/*             <input type="submit" value="Create" class="btn btn-primary">*/
/*         </form>*/
/*     </div>*/
/* {{MyName}}*/
/* */
/* */
/* <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* */
/* <script src="js/angular.min.js"></script>*/
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="js/bootstrap.min.js"></script>*/
/* <script src="js/app.js"></script>*/
/* </body>*/
/* </html>*/
