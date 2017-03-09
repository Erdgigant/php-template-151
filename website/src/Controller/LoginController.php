<?php

namespace schilter\Controller;

use schilter\SimpleTemplateEngine;

class LoginController 
{
  /**
   * @var schilter\SimpleTemplateEngine Template engines to render output
   */
  private $template;
  
  /**
   * @param schilter\SimpleTemplateEngine
   */
  public function __construct(SimpleTemplateEngine $template)
  {
     $this->template = $template;
  }
  
  public function showLogin(){
  	echo $this->template->render("login.html.php");
  }
}