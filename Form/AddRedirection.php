<?php
namespace Redir301\Form;

use Symfony\Component\Validator\Constraints;
use Thelia\Form\BaseForm;

class AddRedirection extends BaseForm
{

    protected function buildForm()
    {
        $this->formBuilder
            ->add("pattern", "text", array(
                "constraints" => array(
                    new Constraints\NotBlank()
                ),
                "label" => "pattern"
            ))
            ->add("target", "text", array(
                "constraints" => array(
                    new Constraints\NotBlank()
                ),
                "label" => "target"
            ))
            ->add("active", "checkbox", array(
                "constraints" => array(
                    new Constraints\Blank()
                ),
                "label" => "active"
            ))
            ;
    }

    public function getName()
    {
        return "redir301_redirection_add";
    }
}