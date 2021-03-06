<?php

namespace schilter\Controller;

use schilter\SimpleTemplateEngine;

class IndexController 
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

  public function homepage() {
    echo "INDEX";
  }

  public function greet($name) {
  	echo $this->template->render("hello.html.php", ["name" => $name]);
  }
}
